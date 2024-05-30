<?php

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

namespace D3\Importer\Application\Controller\Import;

use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use Doctrine\DBAL\DBALException;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Application\Component\Service\Element2ShopRelationsService;
use stdClass;
use Exception;
use D3\Importer\Application\Models\Afterimport;
use D3\Importer\Application\Models\Collector;
use D3\Importer\Application\Models\Import\Accessories;
use D3\Importer\Application\Models\Import\Article as ImportArticle;
use D3\Importer\Application\Models\Csvconverter;
use D3\Importer\Application\Models\Import\Attributes;
use D3\Importer\Application\Models\Import\Category;
use D3\Importer\Application\Models\Import\Crossselling;
use D3\Importer\Application\Models\Import\Mall;
use D3\Importer\Application\Models\Import\Manufacturer;
use D3\Importer\Application\Models\Import\Price2Article;
use D3\Importer\Application\Models\Import\Selectlist;
use D3\Importer\Application\Models\Import\Vendor;
use D3\Importer\Application\Models\ImportConfig;
use D3\Importer\Application\Models\Service\ImportService;
use D3\ModCfg\Application\Model\Configuration\d3_cfg_mod;
use OxidEsales\Eshop\Application\Model\Article as OxidArticle;
use OxidEsales\Eshop\Application\Model\ArticleList;
use OxidEsales\Eshop\Application\Model\Shop;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\UtilsCount;

class Article
{
    /**
     * @var int
     */
    protected $importFailCode = 0;
    /**
     * @var int
     */
    protected int|false $filePointerPosition = 0;

    protected int $actualLinePosition;

    protected bool $isEndOfFile = false;

    protected array $importProfile;

    /**
     * Article constructor.
     */
    public function __construct(protected ImportConfig $importConfig)
    {
        $this->importProfile = $this->importConfig->getImportProfile();
    }

    /**
     * @param int $actualLine
     * @param int $actualFilePointer
     *
     * @return bool
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     */
    public function import(int $actualLine = 0, int|false $actualFilePointer = 0)
    {
        $this->actualLinePosition  = $actualLine;
        $this->filePointerPosition = $actualFilePointer;
        $importFields = $this->getImportFields();

        if ( ! $this->isStartProcedereSuccessful( $importFields ) ) {
            $this->isEndOfFile = true;

            return false;
        }

        if ( ! $this->filePointerPosition ) {
            // set flags
            $oDB = DatabaseProvider::getDb();
            $oDB->execute("UPDATE `oxarticles` SET `d3importflag` = '' WHERE `d3importflag` NOT IN ('', 'manually')");
            /* TODO: Hier muss spaeter nochmal die Importdatei geprueft werden! */
        }

        //<editor-fold desc="collect data part">
        $csvConverter = oxNew(Csvconverter::class, $this->importConfig, $this->importProfile, $this->filePointerPosition);
        $csvLines = $csvConverter->convertCsvToArray();

        $aConfigProfile             = $this->importProfile['d3_importer_config'];
        $articleFieldIdentification = (string)$aConfigProfile['ASSIGNIDENT'];
        /** @var Collector $collector */
        $collector = oxNew(Collector::class, $articleFieldIdentification);

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
        /** @var Shop $shop */
        $shop        = Registry::getConfig()->getActiveShop();
        $languageId  = $shop->getLanguage();
        $shopId      = Registry::getConfig()->getShopId();
        $isSuperShop = method_exists($shop, 'isSuperShop') ? $shop->isSuperShop() : false;

        //<editor-fold desc="models_import_* als Interface implementieren, Klassennamen vorhalten und per foreach durchgehen und import methode umbenennen">
        $importService = oxNew(
            ImportService::class,
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
        /** @var ImportArticle $importer */
        $importer = oxNew(ImportArticle::class, $importService);
        //TODO catch exception
        $importer->import();

        /** @var Category $importCategories */
        $importCategories = oxNew(Category::class, $importService);
        //TODO catch exception
        $importCategories->import();

        /** @var Accessories $importAccessories */
        $importAccessories = oxNew(Accessories::class, $importService);
        //TODO catch exception
        $importAccessories->import();

        /** @var Crossselling $importCrossselling */
        $importCrossselling = oxNew(Crossselling::class, $importService);
        //TODO catch exception
        $importCrossselling->import();

        /** @var Attributes $importAttributes */
        $importAttributes = oxNew(Attributes::class, $importService);
        //TODO catch exception
        $importAttributes->import();

        /** @var Price2article $importPrice2Article */
        $importPrice2Article = oxNew(Price2Article::class, $importService);
        //TODO catch exception
        $importPrice2Article->import();

        /** @var Vendor $importVendor */
        $importVendor = oxNew(Vendor::class, $importService);
        //TODO catch exception
        $importVendor->import();

        /** @var Manufacturer $importManufacturer */
        $importManufacturer = oxNew(Manufacturer::class, $importService);
        //TODO catch exception
        $importManufacturer->import();

        /** @var Selectlist $importSelectlist */
        $importSelectlist = oxNew(Selectlist::class, $importService);
        //TODO catch exception
        $importSelectlist->import();

        if (class_exists(Element2ShopRelationsService::class) && $isSuperShop) {
            /** @var OxidArticle $article */
            $article = oxNew(OxidArticle::class);
            $importService->addProperty('coreTable', $article->getCoreTableName());
            $importService->addProperty('className', $article->getClassName());

            /** @var Mall $mallImport */
            $mallImport = oxNew(Mall::class, $importService);

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
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
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
            /** @var StandardException $exception */
            $exception = oxNew(
                StandardException::class,
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
        $importFields   = [];

        /** @var OxidArticle $oArticle */
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
                if ($csvCell != $fieldName) {
                    continue;
                }
                if (! strlen($csvColumn)) {
                    continue;
                }

                $temporaryClass         = new stdClass();
                $temporaryClass->import = $csvColumn;
                if (isset($aUpdateFields[$csvColumn]) && (bool)$aUpdateFields[$csvColumn]) {
                    $temporaryClass->update = $csvColumn;
                }

                $importFields[$csvCell] = $temporaryClass;
            }

            if (! empty($aVariantFields)) {
                foreach ($aVariantFields as $csvCell => $csvColumn) {
                    $csvColumn = trim((string)$csvColumn);
                    if ($csvCell != $fieldName) {
                        continue;
                    }
                    if (! strlen($csvColumn)) {
                        continue;
                    }

                    $temporaryClass         = new stdClass();
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
     * @return int
     */
    public function getActualLinePosition()
    {
        return $this->actualLinePosition;
    }

    /**
     * @return bool
     */
    public function isEndOfFile()
    {
        return $this->isEndOfFile;
    }

    /**
     * @param     $action
     * @param int $tickerMaximum
     *
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     * @throws Exception
     */
    public function afterImport($action, $tickerMaximum)
    {
        if (false == d3_cfg_mod::get('d3importer')->isActive()) {
            $this->importFailCode = 20;
            $this->isEndOfFile    = true;

            return;
        }

        if ($action != 'delete' && $action != 'inactive') {
            $this->importFailCode = 12;
            $this->isEndOfFile    = true;

            return;
        }

        if (false == $this->isStartProcedereSuccessful($this->getImportFields())) {
            $this->isEndOfFile = true;

            return;
        }

        $oDB                = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC);
        $oxarticlesViewname = (oxNew(OxidArticle::class))->getViewName();
        $sSelect            = <<<MySQL
            SELECT `oxid` AS oxid FROM {$oxarticlesViewname} 
            WHERE d3importflag = '' 
            AND d3importprofileid = {$oDB->quote($this->importConfig->getId())} 
            LIMIT 0, {$tickerMaximum}
            MySQL;

        $articleIds = $oDB->getAll($sSelect);
        if (empty($articleIds)) {
            $this->isEndOfFile = true;

            return;
        }
        $afterImport = oxNew(Afterimport::class);
        $afterImport->afterimport($action, $articleIds);

        $this->resetArticleCount();
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
