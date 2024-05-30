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

namespace D3\Importer\Application\Controller\Admin\Articleimport;

use Exception;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\SystemComponentException;
use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use Doctrine\DBAL\DBALException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use D3\Importer\Application\Controller\Admin\Base;
use D3\Importer\Application\Models\Constants;
use D3\Importer\Application\Models\ImportConfig;
use D3\ModCfg\Application\Model\d3filesystem;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Request;

/**
 * Class d3_importer_main
 */
class Main extends Base
{
    public const SIZE_KILOBYTE_IN_BYTE = 1024;
    public const SIZE_MEGABYTE_IN_BYTE = 1_048_576;
    public const SIZE_GIGABYTE_IN_BYTE = 1_073_741_824;

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
    protected $allowedExtensions = ["csv", "txt"];

    protected $_sThisTemplate = '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_main';

    protected $currentProfileName = 'd3_importer_main';

    protected $requireProfileCheck = false;

    /**
     * Executes parent method parent::render(), creates oxlist object,
     * passes it's data to Smarty engine and retutns name of template
     * file "d3_importer_main.tpl".
     *
     * @return string
     * @throws Exception
     * @throws d3_cfg_mod_exception
     * @throws DatabaseConnectionException
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

        [$aImportedFiles, $aFileInfo] = $this->getCSVInformationsFromFile($oImportConfig, $handle);
        closedir($handle);
        //TODO: $aFileInfo should be an object!
        $this->addTplParam('aFileInfo', $aFileInfo);
        $this->addTplParam('aImportedFiles', $aImportedFiles);
        $this->addTplParam("isfailupload", $this->isUploadFailed);

        return $sReturn;
    }

    /**
     * @param                                             $handle
     *
     * @return array
     * @throws Exception
     * @throws d3_cfg_mod_exception
     * @throws DatabaseConnectionException
     */
    protected function getCSVInformationsFromFile(ImportConfig $oImportConfig, $handle)
    {
        $aFileInfo = $aImportedFiles = [];
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
                    if (false == isset($aProfile['FILE'])) {
                        continue;
                    }
                    if ($file != rawurldecode($aProfile['FILE'])) {
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

        return [$aImportedFiles, $aFileInfo];
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
     *
     * @return void
     * @throws Exception
     * @throws d3_cfg_mod_exception
     * @throws DatabaseConnectionException
     */
    public function saveImportProfile(array $aXMLParams = [])
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
     *
     * @return boolean|string
     * @throws SystemComponentException
     */
    protected function saveUploadFile(array $aFileData)
    {
        if (!$aFileData['name'] || !$aFileData['tmp_name'] || !$aFileData['size']) {
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
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     */
    public function exportConfig()
    {
        $oObject = oxNew(ImportConfig::class);

        if ($oObject->load($this->getEditObjectId())) {
            $oDb          = DatabaseProvider::getDb();
            $sProfileName = oxNew(Request::class)->getRequestParameter("sProfileName");
            $sContent     = "INSERT IGNORE INTO `" . $oObject->getViewName() . "` SET ";

            foreach ($oObject->getFieldNames() as $sFieldName) {
                $sFieldProperty = $oObject->getCoreTableName() . "__" . $sFieldName;
                $sContent       .= " `" . $sFieldName . "` = " . $oDb->quote($oObject->{$sFieldProperty}->rawValue) . ", ";
            }

            $sContent = trim($sContent, ', ');
            /** @var d3filesystem $oFS */
            $oFS = oxNew(d3filesystem::class);
            $oFS->startDirectDownload('d3importprofile_' . $sProfileName . '_' . date('Y_m_d') . '.sql', $sContent);
        }
    }

    /**
     * @return array
     */
    protected function getFormularElements(ImportConfig $oImportConfig)
    {
        // TODO: Implement _getFormularElements() method.
        return [];
    }

    /**
     * @return int
     */
    public function getSmallestSystemUploadRestrictions()
    {
        $unlimitedSize = self::SIZE_GIGABYTE_IN_BYTE;

        //select maximum upload size
        $max_upload = $this->getIniSizeValuesInByte('upload_max_filesize') ?: $unlimitedSize;
        //select post limit
        $max_post = $this->getIniSizeValuesInByte('post_max_size') ?: $unlimitedSize;
        //select memory limit
        $memory_limit = $this->getIniSizeValuesInByte('memory_limit') ?: $unlimitedSize;
        // return the smallest of them, this defines the real limit
        return min($max_upload, $max_post, $memory_limit);
    }

    /**
     * @param $sVarName
     *
     * @return int
     */
    protected function getIniSizeValuesInByte($sVarName)
    {
        $sSize = ini_get($sVarName);
        $iSize = (int) $sSize;
        $sSizeUnit = strtoupper(trim(str_replace($iSize, '', $sSize)));
        return match ($sSizeUnit) {
            'K' => $iSize * self::SIZE_KILOBYTE_IN_BYTE,
            'M' => $iSize * self::SIZE_MEGABYTE_IN_BYTE,
            'G' => $iSize * self::SIZE_GIGABYTE_IN_BYTE,
            default => $iSize,
        };
    }

    public function getFormattedMaxUploadFileSize()
    {
        /** @var d3filesystem $oFileSystem */
        $oFileSystem = oxNew(d3filesystem::class);
        return $oFileSystem->formatBytes($this->getSmallestSystemUploadRestrictions());
    }
}
