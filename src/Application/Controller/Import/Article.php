<?php

use D3\ModCfg\Application\Model\Configuration\d3_cfg_mod;
use OxidEsales\Eshop\Application\Model\Article as OxidArticle;
use OxidEsales\Eshop\Application\Model\ArticleList;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\UtilsCount;

/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 * https://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author        D3 Data Development <support@shopmodule.com>
 * @link          https://www.oxidmodule.com
 */
class d3_importer_Application_Controller_Import_Article
{
    /**
     * @var d3_importer_Application_Models_ImportConfig
     */
    protected $importConfig;
    /**
     * @var int
     */
    protected $importFailCode = 0;
    /**
     * @var int
     */
    protected $filePointerPosition = 0;
    /**
     * @var
     */
    protected $actualLinePosition;
    /**
     * @var
     */
    protected $isEndOfFile;
    /**
     * @var array
     */
    protected $importProfile;

    /**
     * Article constructor.
     *
     * @param d3_importer_Application_Models_ImportConfig $importConfig
     */
    public function __construct(d3_importer_Application_Models_ImportConfig $importConfig)
    {
        $this->importConfig  = $importConfig;
        $this->importProfile = $this->importConfig->getImportProfile();
    }

    /**
     * @param int $actualLine
     * @param int $actualFilePointer
     *
     * @return bool
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    public function import($actualLine = 0, $actualFilePointer = 0)
    {
        $this->actualLinePosition  = $actualLine;
        $this->filePointerPosition = $actualFilePointer;
        $importFields = $this->getImportFields();

        if (false == $this->isStartProcedereSuccessful($importFields)) {
            $this->isEndOfFile = true;

            return false;
        }

        if (false == $this->filePointerPosition) {
            // set flags
            $oDB = DatabaseProvider::getDb();
            $oDB->execute("UPDATE `oxarticles` SET `d3importflag` = '' WHERE `d3importflag` NOT IN ('', 'manually')");
            /* TODO: Hier muss spaeter nochmal die Importdatei geprueft werden! */
        }

        //<editor-fold desc="collect data part">
        /** @var d3_importer_Application_Models_Csvconverter $csvConverter */
        $csvConverter = oxNew(d3_importer_Application_Models_Csvconverter::class, $this->importConfig, $this->importProfile, $this->filePointerPosition);
        $csvLines = $csvConverter->convertCsvToArray();

        $aConfigProfile             = $this->importProfile['d3_importer_config'];
        $articleFieldIdentification = (string)$aConfigProfile['ASSIGNIDENT'];
        /** @var d3_importer_Application_Models_Collector $collector */
        $collector = oxNew(d3_importer_Application_Models_Collector::class, $articleFieldIdentification);

        // jetzt aktualisieren wir noch die Uebergabeparameter fuer den naechsten Tick
        $this->filePointerPosition = ftell($this->importConfig->fpCsv);
        $this->actualLinePosition += count($csvLines);
        if (feof($this->importConfig->fpCsv)) {
            $this->isEndOfFile = true;
        }
        fclose($this->importConfig->fpCsv);

        /** @var ArticleList $articleList */
        $articleList = oxNew(ArticleList::class);
        $articleList->renewPriceUpdateTime();

        //</editor-fold>
        $shop        = Registry::getConfig()->getActiveShop();
        $languageId  = $shop->getLanguage();
        $shopId      = Registry::getConfig()->getShopId();
        $isSuperShop = (bool)method_exists($shop, 'isSuperShop') ? $shop->isSuperShop() : false;

        //<editor-fold desc="models_import_* als Interface implementieren, Klassennamen vorhalten und per foreach durchgehen und import methode umbenennen">
        /** @var d3_importer_Application_Models_Service_Import $importService */
        $importService = oxNew(
            d3_importer_Application_Models_Service_Import::class,
            $collector,
            $this->importConfig,
            $importFields,
            $this->importProfile,
            $csvLines
        );

        $importService->addProperty('isSuperShop', $isSuperShop);
        $importService->addProperty('shopId', $shopId);
        $importService->addProperty('languageId', $languageId);

//        $models = [
//            oxNew(d3_importer_Application_Models_Models_Import_Article::class, $importService),
//        ];
//        foreach ($csvLines as $index => $csvLine) {
//            $oxid =  $collector->collectArticleIdent($csvLine[$columnIdentification]->import);
//            if(false == empty($oxid)) {
//                $csvLine['oxid'] = $oxid;
//            }
//
//            foreach($models as $model) {
//                /** @var d3_importer_Application_Models_Models_Import_Article $model */
//                $oxid = $model->importLine($csvLine);
//
//                if(empty($oxid)) {
//                    continue;
//                }
//                $csvLine['oxid'] = $oxid;
//            }
//        }
//
//        die;
        /** @var d3_importer_Application_Models_Models_Import_Article $importer */
        $importer = oxNew(d3_importer_Application_Models_Models_Import_Article::class, $importService);
        //TODO catch exception
        $importer->import();

        /** @var d3_importer_Application_Models_Models_Import_Category $importCategories */
        $importCategories = oxNew(d3_importer_Application_Models_Models_Import_Category::class, $importService);
        //TODO catch exception
        $importCategories->import();

        /** @var d3_importer_Application_Models_Models_Import_Accessories $importAccessories */
        $importAccessories = oxNew(d3_importer_Application_Models_Models_Import_Accessories::class, $importService);
        //TODO catch exception
        $importAccessories->import();

        /** @var d3_importer_Application_Models_Models_Import_Crossselling $importCrossselling */
        $importCrossselling = oxNew(d3_importer_Application_Models_Models_Import_Crossselling::class, $importService);
        //TODO catch exception
        $importCrossselling->import();

        /** @var d3_importer_Application_Models_Models_Import_Attributes $importAttributes */
        $importAttributes = oxNew(d3_importer_Application_Models_Models_Import_Attributes::class, $importService);
        //TODO catch exception
        $importAttributes->import();

        /** @var d3_importer_Application_Models_Models_Import_Price2Article $importPrice2Article */
        $importPrice2Article = oxNew(d3_importer_Application_Models_Models_Import_Price2Article::class, $importService);
        //TODO catch exception
        $importPrice2Article->import();

        /** @var d3_importer_Application_Models_Models_Import_Vendor $importVendor */
        $importVendor = oxNew(d3_importer_Application_Models_Models_Import_Vendor::class, $importService);
        //TODO catch exception
        $importVendor->import();

        /** @var d3_importer_Application_Models_Models_Import_Manufacturer $importManufacturer */
        $importManufacturer = oxNew(d3_importer_Application_Models_Models_Import_Manufacturer::class, $importService);
        //TODO catch exception
        $importManufacturer->import();

        /** @var d3_importer_Application_Models_Models_Import_Selectlist $importSelectlist */
        $importSelectlist = oxNew(d3_importer_Application_Models_Models_Import_Selectlist::class, $importService);
        //TODO catch exception
        $importSelectlist->import();

        /** @var d3_importer_Application_Models_Models_Import_Selectlist $importManufacturer */
        if (class_exists(\OxidEsales\Eshop\Application\Component\Service\Element2ShopRelationsService::class) && $isSuperShop) {
            /** @var \OxidEsales\Eshop\Application\Model\Article $article */
            $article = oxNew(\OxidEsales\Eshop\Application\Model\Article::class);
            $importService->addProperty('coreTable', $article->getCoreTableName());
            $importService->addProperty('className', $article->getClassName());

            /** @var d3_importer_Application_Models_Models_Import_Mall $mallImport */
            $mallImport = oxNew(d3_importer_Application_Models_Models_Import_Mall::class, $importService);

            //TODO catch exception
            $mallImport->import();
        }
        //</editor-fold>

        /**
         * reset ArticleCountCache, as last action on ticker
         */
        $this->resetArticleCount();

        return true;
    }

    /**
     * @param $importFields
     *
     * @return boolean
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    protected function isStartProcedereSuccessful($importFields)
    {
        if (false == d3_cfg_mod::get('d3importer')->isActive()) {
            $this->importFailCode = 20;//TODO: use constant!
            $this->isEndOfFile    = true;

            return false;
        }

        $profiles = $this->importConfig->getImportProfile();

        if (empty($profiles)) {
            /** @var \OxidEsales\Eshop\Core\Exception\StandardException $exception */
            $exception = oxNew(
                \OxidEsales\Eshop\Core\Exception\StandardException::class,
                'import profiles are empty!'
            );
            throw $exception;
        }

        $this->importConfig->validateImportFile();

        if (false == isset($this->importConfig->fpCsv)) {
            $this->importFailCode = 10; //bedeutet "import-datei konnte nicht geoeffnet werden"
            return false;
        }

        $aConfigProfile              = $profiles['d3_importer_config'];
        $sArticleAssignmentFieldname = (string)$aConfigProfile['ASSIGNIDENT'];

        //<editor-fold desc="TODO:Ueberpruefung der Konfiguration auslagern">
        //pruefe, ob das Feld fuer die Artikelidentifikation auch zugeordnet ist
        if (empty($sArticleAssignmentFieldname) //
            || false == isset($importFields[$sArticleAssignmentFieldname]) //
            || false == strlen($importFields[$sArticleAssignmentFieldname]->import)
        ) {
            $this->importFailCode = 11; // bedeutet: Artikelidentifikation nicht zugeordnet
            return false;
        }
        //</editor-fold>

        return true;
    }

    /**
     * @return array
     */
    protected function getImportFields()
    {
        $importFields   = array();

        /** @var $oArticle OxidArticle */
        $oArticle = oxNew(OxidArticle::class);
        $oArticle->setEnableMultilang(false);

        $fieldNames     = $oArticle->getFieldNames();
        $fieldNames     = $this->addLongdescFieldnames($fieldNames);
        $csvCells       = $this->importProfile['d3_importer_fields']['fields'];
        $aUpdateFields  = $this->importProfile['d3_importer_fields']['update'];
        $aVariantFields = $this->importProfile['d3_importer_variants']['FIELD'];

        foreach ($fieldNames as $fieldName) {
            foreach ($csvCells as $csvColumn => $csvCell) {
                $csvColumn = trim((string)$csvColumn);

                if ($csvCell != $fieldName || false == isset($csvColumn) || false == strlen($csvColumn)) {
                    continue;
                }

                $temporaryClass         = new \stdClass();
                $temporaryClass->import = $csvColumn;
                if (isset($aUpdateFields[$csvColumn]) && (bool)$aUpdateFields[$csvColumn]) {
                    $temporaryClass->update = $csvColumn;
                }

                $importFields[$csvCell] = $temporaryClass;
            }

            if (false == empty($aVariantFields)) {
                foreach ($aVariantFields as $csvCell => $csvColumn) {
                    $csvColumn = trim((string)$csvColumn);

                    if ($csvCell != $fieldName || false == isset($csvColumn) || false == strlen($csvColumn)) {
                        continue;
                    }

                    $temporaryClass         = new \stdClass();
                    $temporaryClass->import = $csvColumn;
                    $temporaryClass->update = $csvColumn;

                    $importFields[$csvCell] = $temporaryClass;
                }
            }
        }

        return $importFields;
    }

    /**
     * @return int
     */
    public function getFilePointerPosition()
    {
        return $this->filePointerPosition;
    }

    /**
     * @return int
     */
    public function getFailImport()
    {
        return $this->importFailCode;
    }

    /**
     * @return mixed
     */
    public function getActualLinePosition()
    {
        return $this->actualLinePosition;
    }

    /**
     * @return mixed
     */
    public function isEndOfFile()
    {
        return $this->isEndOfFile;
    }

    /**
     * @param     $action
     * @param int $tickerMaximum
     *
     * @return bool
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     * @throws Exception
     */
    public function afterImport($action, $tickerMaximum)
    {
        if (false == d3_cfg_mod::get('d3importer')->isActive()) {
            $this->importFailCode = 20;
            $this->isEndOfFile    = true;

            return false;
        }

        if ($action != 'delete' && $action != 'inactive') {
            $this->importFailCode = 12;
            $this->isEndOfFile    = true;

            return false;
        }

        if (false == $this->isStartProcedereSuccessful($this->getImportFields())) {
            $this->isEndOfFile = true;

            return false;
        }

        $oDB                = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC);
        $oxarticlesViewname = getViewName('oxarticles');
        $sSelect            = <<<MySQL
SELECT `oxid` AS oxid FROM {$oxarticlesViewname} 
WHERE d3importflag = '' 
AND d3importprofileid = {$oDB->quote($this->importConfig->getId())} 
LIMIT 0, {$tickerMaximum}
MySQL;

        $articleIds = $oDB->getAll($sSelect);
        if (empty($articleIds)) {
            $this->isEndOfFile = true;

            return false;
        }
        $afterImport = oxNew(d3_importer_Application_Models_Afterimport::class);
        $result      = $afterImport->afterimport($action, $articleIds);

        $this->resetArticleCount();
        return $result;
    }

    /**
     * reset ArticleCountCache, as last action on ticker
     * -on Category
     * -Manufactorer
     * -Vendor
     */
    protected function resetArticleCount()
    {
        $oUtilsCount = Registry::get(UtilsCount::class);
        $oUtilsCount->resetCatArticleCount();
        $oUtilsCount->resetVendorArticleCount();
        $oUtilsCount->resetManufacturerArticleCount();
    }

    /**
     * @param array $fieldnames
     *
     * @return array
     */
    protected function addLongdescFieldnames(array $fieldnames)
    {
        $fieldnames[] = 'oxlongdesc';
        $language     = Registry::getLang();
        $languages    = $language->getLanguageArray(null, false);
        foreach ($languages as $language) {
            if (0 < $language->id) {
                $fieldnames[] = 'oxlongdesc_' . $language->id;
            }
        }

        return $fieldnames;
    }
}
