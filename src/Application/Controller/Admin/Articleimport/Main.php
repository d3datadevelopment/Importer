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

use D3\ModCfg\Application\Model\d3filesystem;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Request;

/**
 * Class d3_importer_main
 */
class d3_importer_Application_Controller_Admin_Articleimport_Main extends d3_importer_Application_Controller_Admin_Base
{
    const SIZE_KILOBYTE_IN_BYTE = 1024;
    const SIZE_MEGABYTE_IN_BYTE = 1048576;
    const SIZE_GIGABYTE_IN_BYTE = 1073741824;

    /**
     * boolean Upload file failed
     * 10 = Dateiname falsch, keine Größe
     * 11 = nicht erlaubte Dateiendung
     * 12 = /import Dir nicht vorhanden
     * 13 = Datei konnte nicht in /import abgelegt werden
     */
    protected $isUploadFailed = false;

    /**
     * array allowed file extension
     */
    protected $allowedExtensions = array("csv", "txt");

    protected $_sThisTemplate = "d3_importer_main.tpl";

    protected $currentProfileName = 'd3_importer_main';

    protected $requireProfileCheck = false;

    /**
     * Executes parent method parent::render(), creates oxlist object,
     * passes it's data to Smarty engine and retutns name of template
     * file "d3_importer_main.tpl".
     *
     * @return string
     * @throws Exception
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     */
    public function render()
    {
        $sReturn       = parent::render();
        $oImportConfig = $this->getD3ImporterConfiguration();

        //Liste aller Dateien in /import laden
        if (false == is_dir($this->getD3ImportDir())) {
            $this->isUploadFailed = 12;
            $this->addTplParam("isfailupload", $this->isUploadFailed);

            return $sReturn;
        }

        $handle = opendir($this->getD3ImportDir());
        if (false == $handle) {
            $this->isUploadFailed = 12;
            $this->addTplParam("isfailupload", $this->isUploadFailed);

            return $sReturn;
        }

        list($aImportedFiles, $aFileInfo) = $this->getCSVInformationsFromFile($oImportConfig, $handle);
        closedir($handle);
        //TODO: $aFileInfo should be an object!
        $this->addTplParam('aFileInfo', $aFileInfo);
        $this->addTplParam('aImportedFiles', $aImportedFiles);
        $this->addTplParam("isfailupload", $this->isUploadFailed);

        return $sReturn;
    }

    /**
     * @param d3_importer_Application_Models_ImportConfig $oImportConfig
     * @param                                             $handle
     *
     * @return array
     * @throws Exception
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     */
    protected function getCSVInformationsFromFile(d3_importer_Application_Models_ImportConfig $oImportConfig, $handle)
    {
        $aFileInfo = $aImportedFiles = array();
        $iLines    = 0;
        $iColumns  = 0;

        $aProfile = $oImportConfig->getImportProfile($this->currentProfileName);
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..') {
                $oFS               = oxNew(d3filesystem::class);
                $aFile             = $oFS->splitFilename($file);
                $sCompareExtension = strtolower($aFile['ext']);
                if (is_file($this->getD3ImportDir() . "/" . $file) && $this->isCSVExtension($sCompareExtension)) {
                    $aImportedFiles[] = $file;

                    if (false == isset($aProfile['FILE']) || $file != rawurldecode($aProfile['FILE'])) {
                        continue;
                    }

                    $aFileInfo  = $oImportConfig->getFileSystemData($file);
                    $iMaxLength = $oImportConfig->getCSVFileLineLength($file);

                    $aProfile['FILELENGTH'] = $iMaxLength;

                    $oImportConfig->setCSVFileLineCount($iLines, $iColumns);

                    if ($iLines && $iColumns > 1) {
                        $aFileInfo['is_csv'] = true;
                    }

                    $aFileInfo['lines']     = $iLines;
                    $aFileInfo['colums']    = $iColumns;
                    $aFileInfo['seperator'] = $aProfile['FILESEPARATOR'];
                    $aProfile['FILEROWS']   = $iLines;
                    $oImportConfig->saveImportProfile($aProfile, $this->currentProfileName);
                }
            }
        }

        return array($aImportedFiles, $aFileInfo);
    }

    /**
     * @param $sCompareExtension
     *
     * @return bool
     */
    protected function isCSVExtension($sCompareExtension)
    {
        return in_array($sCompareExtension, $this->allowedExtensions);
    }

    /**
     * @param array $aXMLParams
     *
     * @return void
     * @throws Exception
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     */
    public function saveImportProfile(array $aXMLParams = array())
    {
        $request    = oxNew(Request::class);
        $sOxid      = $request->getRequestParameter("oxid");
        $aParams    = $request->getRequestParameter("editval");
        $aXMLParams = $request->getRequestParameter("xmlval");

        $oImportConfig = $this->getD3ImporterConfiguration();

        if (false == $oImportConfig->isLoaded()) {
            $aParams['d3importconfig__oxvalue'] = '';
        }

        if ('-1' == $sOxid) {
            $aParams['d3importconfig__oxid'] = null;

            $aXMLParams['IMPORTTYPE']   = "standard";
            $aXMLParams['IMPORTTICKER'] = 100;
            $aXMLParams['OMITLINES']    = 0;
            $aXMLParams['ASSIGNIDENT']  = "oxartnum";
        }

        if (false == $aParams['d3importconfig__oxtitle']) {
            $aParams['d3importconfig__oxtitle'] = '-- no title --';
        }

        $aFileData = $_FILES['newuploadfile'];

        if ($aFileData && $aFileData['name']) {
            $aXMLParams['FILE']       = $this->saveUploadFile($aFileData);
            $aXMLParams['FILELENGTH'] = $oImportConfig->getCSVFileLineLength($aXMLParams['FILE']);
            $oImportConfig->setCSVFileLineCount($aXMLParams['FILEROWS'], $aXMLParams['FILECOLUMS']);
        } elseif ($aXMLParams['FILE']) {
            $aXMLParams['FILELENGTH'] = $oImportConfig->getCSVFileLineLength($aXMLParams['FILE']);
            $oImportConfig->setCSVFileLineCount($aXMLParams['FILEROWS'], $aXMLParams['FILECOLUMS']);
        }

        $oImportConfig->assign($aParams);

        $blIsSaved = $oImportConfig->save();
        if ($blIsSaved) {
            $this->setEditObjectId($oImportConfig->getId());
            parent::saveImportProfile($aXMLParams);
        }
    }

    /**
     * Speichert die hochgeladene Datei im Filesystem
     *
     * @param array $aFileData
     *
     * @return boolean|string
     * @throws \OxidEsales\Eshop\Core\Exception\SystemComponentException
     */
    protected function saveUploadFile($aFileData)
    {
        if (!isset($aFileData) || !$aFileData['name'] || !$aFileData['tmp_name'] || !$aFileData['size']) {
            $this->isUploadFailed = 10;

            return false;
        }

        $sFilename   = $aFileData['name'];
        $sSourceFile = $aFileData['tmp_name'];

        $oFS               = oxNew(d3filesystem::class);
        $aFile             = $oFS->splitFilename($sFilename);
        $sCompareExtension = strtolower($aFile['ext']);

        if (!$this->isCSVExtension($sCompareExtension)) {
            $this->isUploadFailed = 11;

            return false;
        }

        if (!is_dir($this->getD3ImportDir())) {
            $this->isUploadFailed = 12;

            return false;
        }

        $sDestination = $this->getD3ImportDir() . "/" . $sFilename;

        move_uploaded_file($sSourceFile, $sDestination);
        chmod($sDestination, 0777);

        if (!is_file($sDestination)) {
            $this->isUploadFailed = 13;

            return false;
        }

        return $sFilename;
    }

    /**
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    public function exportConfig()
    {
        $oObject = oxNew('d3_importer_Application_Models_ImportConfig');

        if ($oObject->load($this->getEditObjectId())) {
            $oDb          = DatabaseProvider::getDb();
            $sProfileName = oxNew(Request::class)->getRequestParameter("sProfileName");
            $sContent     = "INSERT IGNORE INTO `" . $oObject->getViewName() . "` SET ";

            foreach ($oObject->getFieldNames() as $sFieldName) {
                $sFieldProperty = $oObject->getCoreTableName() . "__" . $sFieldName;
                $sContent       .= " `" . $sFieldName . "` = " . $oDb->quote($oObject->{$sFieldProperty}->rawValue) . ", ";
            }

            $sContent = trim($sContent, ', ');
            /** @var $oFS d3filesystem */
            $oFS = oxNew(d3filesystem::class);
            $oFS->startDirectDownload('d3importprofile_' . $sProfileName . '_' . date('Y_m_d') . '.sql', $sContent);
        }
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

    /**
     * @return int
     */
    public function getSmallestSystemUploadRestrictions()
    {
        $unlimitedSize = self::SIZE_GIGABYTE_IN_BYTE;

        //select maximum upload size
        $max_upload = $this->_getIniSizeValuesInByte('upload_max_filesize') ?: $unlimitedSize;
        //select post limit
        $max_post = $this->_getIniSizeValuesInByte('post_max_size') ?: $unlimitedSize;
        //select memory limit
        $memory_limit = $this->_getIniSizeValuesInByte('memory_limit') ?: $unlimitedSize;
        // return the smallest of them, this defines the real limit
        return min($max_upload, $max_post, $memory_limit);
    }

    /**
     * @param $sVarName
     *
     * @return int
     */
    protected function _getIniSizeValuesInByte($sVarName)
    {
        $sSize = ini_get($sVarName);
        $iSize = (int) $sSize;
        $sSizeUnit = strtoupper(trim(str_replace($iSize, '', $sSize)));

        switch ($sSizeUnit) {
            case 'K':
                return $iSize * self::SIZE_KILOBYTE_IN_BYTE;
            case 'M':
                return $iSize * self::SIZE_MEGABYTE_IN_BYTE;
            case 'G':
                return $iSize * self::SIZE_GIGABYTE_IN_BYTE;
        }

        return $iSize;
    }

    public function getFormattedMaxUploadFileSize()
    {
        /** @var d3filesystem $oFileSystem */
        $oFileSystem = oxNew(d3filesystem::class);
        return $oFileSystem->formatBytes($this->getSmallestSystemUploadRestrictions());
    }
}
