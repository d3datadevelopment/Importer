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

use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Request;

/**
 * Picture import manager.
 *
 * @package admin
 */
class d3_importer_Application_Controller_Admin_Pictureimport_Import extends d3_importer_Application_Controller_Admin_Base
{
    /**
     * @var array
     */
    protected $displayErrors = array();

    /**
     * Current class default template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'd3_picture_import.tpl';

    /**
     * Speichert den aktuellen Fehlercode
     *
     * @var integer
     */
    protected $failConfigCode = 0;

    protected $importDirFilesSummary;

    protected $importedFilesSummary;

    protected $finishedFilesSummary;

    protected $currentProfileName = 'd3_picture_import';

    /**
     * Executes parent method parent::render(), creates oxlist object,
     * passes it's data to Smarty engine and retutns name of template
     * file "d3_importer_category.tpl".
     *
     * @return string
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    public function render()
    {
        $sReturn = parent::render();

        $this->setPictureDumpInformations();

        $dirinfo = [];
        $dirinfo['sumfiles']      = $this->importDirFilesSummary;
        $dirinfo['importedfiles'] = $this->importedFilesSummary;
        $dirinfo['finishedfiles'] = $this->finishedFilesSummary;
        $this->addTplParam('dirinfo', $dirinfo);

        return $sReturn;
    }

    /**
     * get data from db table d3picdirdump
     *
     * @return void
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     */
    protected function setPictureDumpInformations()
    {
        $oDB = DatabaseProvider::GetDB();

        $this->importDirFilesSummary = $oDB->getOne("select count(oxid) from d3picdirdump where 1");
        $this->finishedFilesSummary = $oDB->getOne("select count(oxid) from d3picdirdump where oxisfinished = '1'");
        $this->importedFilesSummary = $oDB->getOne("select count(oxid) from d3picdirdump where oxisimported = '1'");
    }

    /**
     * Liest alle externen (http(s)) Bilder ein und speichert sie ins Bildimportverzeichnis
     *
     * @param null $downloadExternPictures
     *
     * @return void
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    public function getExternPictures($downloadExternPictures = null)
    {
        $request                   = oxNew(Request::class);
        $soxId                     = $request->getRequestParameter('oxid');
        $iActImportExtPictureCount = $request->getRequestParameter('d3ief');

        $oImportConfig = $this->getD3ImporterConfiguration();

        if (false == $oImportConfig->getId()) {
            $this->setFailConfigCode(10);

            return;
        }

        /** @var d3_importer_Application_Models_PictureImport $oImporter */
        $oImporter                            = oxNew(d3_importer_Application_Models_PictureImport::class, $oImportConfig);
        $oImporter->numberOfExternImportedPictures = $iActImportExtPictureCount;
        $oImporter->ImportExternPictures();

        $this->displayErrors = $oImporter->getErrors();
        $this->addTplParam("blEOD", $oImporter->isPictureImportFinished);
        $this->addTplParam("iImportedFiles", $oImporter->numberOfExternImportedPictures);
        $this->addTplParam("iSumFiles", $oImporter->getExtPictureTableSum(1));
        $this->addTplParam("oxid", $soxId);

        //Am Ende des externen Imports noch das Bildimportverzeichnis neu einlesen
        if (is_null($downloadExternPictures) && $oImporter->isPictureImportFinished) {
            $this->scanPictureDir();
        }

        $this->_sThisTemplate = 'd3_picture_extticker.tpl';
    }

    /**
     * Speichert den aktuellen Fehlercode
     *
     * @param integer $iError
     */
    protected function setFailConfigCode($iError)
    {
        $this->failConfigCode = $iError;
    }

    /**
     * scan picture import directory
     *
     * @return void
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    public function scanPictureDir()
    {
        $request                = oxNew(Request::class);
        $downloadExternPictures = $request->getRequestParameter('downloadExternPictures');
        if ($downloadExternPictures) {
            $this->getExternPictures($downloadExternPictures);
        }

        $oImportConfig = $this->getD3ImporterConfiguration();
        /** @var d3_importer_Application_Models_PictureImport $oPictureImporter */
        $oPictureImporter = oxNew(d3_importer_Application_Models_PictureImport::class, $oImportConfig);

        $this->setFailConfigCode($oPictureImporter->scanPictureDir());

        return;
    }

    /**
     * @return array
     */
    public function getDisplayErrors()
    {
        return $this->displayErrors;
    }

    /**
     * doing Import
     *
     * @return void
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    public function doImport()
    {
        $request            = oxNew(Request::class);
        $soxId              = $request->getRequestParameter('oxid');
        $iPrevCheckedFiles  = $request->getRequestParameter('d3cf');
        $iPrevImportedFiles = $request->getRequestParameter('d3if');

        $oImportConfig = $this->getD3ImporterConfiguration();

        if (false == $oImportConfig->getId()) {
            $this->setFailConfigCode(10);

            return;
        }

        $oImporter                   = oxNew(d3_importer_Application_Models_PictureImport::class, $oImportConfig);
        $oImporter->setActCheckCount($iPrevCheckedFiles);
        $oImporter->setActImportCount($iPrevImportedFiles);
        $oImporter->import();

        $this->setFailConfigCode($oImporter->getConfigFailure());

        $this->addTplParam("blEOD", $oImporter->isPictureImportFinished);
        $this->addTplParam("iSumFiles", $oImporter->numberOfPictureFiles);
        $this->addTplParam("iCheckedFiles", $oImporter->getActualCheckCounter());
        $this->addTplParam("iImportedFiles", $oImporter->getActualImportCounter());
        $this->addTplParam("oxid", $soxId);
        $this->_sThisTemplate               = 'd3_picture_ticker.tpl';
    }

    /**
     * Wird fuer die Rueckgabe ans Template benoetigt
     *
     * @return int
     */
    public function getConfigFailure()
    {
        if (isset($this->failConfigCode) && !empty($this->failConfigCode)) {
            return $this->failConfigCode;
        }

        return 0;
    }

    /**
     * @param d3_importer_Application_Models_ImportConfig $oImportConfig
     *
     * @return array
     */
    protected function getFormularElements(d3_importer_Application_Models_ImportConfig $oImportConfig)
    {
        // TODO: Implement _getFormularElements() method.
        return array();
    }
}
