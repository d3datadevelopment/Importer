<?php
/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author        D3 Data Development <support@shopmodule.com>
 * @link          http://www.oxidmodule.com
 */

use D3\ModCfg\Application\Model\Configuration\d3_cfg_mod;
use D3\ModCfg\Application\Model\Log\d3log;
use OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\Request;

if (false == function_exists('posix_getpwuid')) {
    /**
     * @param $uid
     *
     * @return bool
     */
    function posix_getpwuid($uid)
    {
        if ($uid !== false) {
            $uid = false;
        }

        return $uid;
    }
}

/**
 * Class Base
 */
abstract class d3_importer_Application_Controller_Admin_Base extends AdminDetailsController
{
    /**
     * array allowed file extension
     */
    protected $importDirectory = 'import';

    /**
     * @var int
     */
    protected $configurationErrorLevel = 0;

    /**
     * @var string
     */
    protected $currentProfileName = '';

    /**
     * @var bool
     */
    protected $requireProfileCheck = true;

    /**
     * @return string
     */
    public function getD3ImportDir()
    {
        return $this->getConfig()->getConfigParam('sShopDir') . $this->importDirectory;
    }

    /**
     * @param $sMessage
     */
    public function setErrorMessage($sMessage)
    {
        $aImporterErrors = $this->getViewDataElement('aImporterErrors');

        if (false == is_array($aImporterErrors)) {
            $aImporterErrors = array();
        }

        $this->addTplParam('aImporterErrors', array_merge($aImporterErrors, array($sMessage)));
    }

    /**
     * @param $oImportConfig
     *
     * @return int
     */
    protected function validateImportConfig(d3_importer_Application_Models_ImportConfig $oImportConfig)
    {
        $aProfile = $oImportConfig->getImportProfile('d3_importer_main');

        if (empty($aProfile)) {
            return 10;
        }

        if (false == isset($aProfile['FILE']) || empty($aProfile['FILE'])) {
            return 11;
        }

        if (false == isset($aProfile['FILELENGTH']) || empty($aProfile['FILELENGTH'])) {
            return 12;
        }

        if (false == isset($aProfile['FILESEPARATOR']) || empty($aProfile['FILESEPARATOR'])) {
            return 13;
        }

        if (false == isset($aProfile['FILEROWS']) || empty($aProfile['FILEROWS'])) {
            return 14;
        }

        return 0;
    }

    /**
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

        $this->addTplParam('sHelpURL', '');
        $this->addTplParam('oModuleConfig', d3_cfg_mod::get('d3importer'));
        $this->addTplParam('isImporterDemoMode', d3_cfg_mod::get('d3importer')->isDemo());
        $this->addTplParam(
            'hasReachedProfileLimit',
            d3_cfg_mod::get('d3importer')->isDemo() && $this->getD3ImporterConfiguration()->countImportProfiles() >= d3_importer_Application_Models_ImportConfig::D3IMPORTERPROFILELIMIT
        );
        $this->addTplParam('d3ModConfigErrorMessage', d3_cfg_mod::get('d3importer')->getErrorMessage());

        $oImportConfig = $this->getD3ImporterConfiguration();
        $this->addTplParam('aElements', $this->getFormularElements($oImportConfig));

        if (false == d3_cfg_mod::get('d3importer')->isActive()) {
            $this->configurationErrorLevel = 20;
            $this->addTplParam('isfailconfig', $this->configurationErrorLevel);
            $this->addTplParam('readonly', true);

            return $sReturn;
        }

        if ($this->requireProfileCheck) {
            $iResult = $this->validateImportConfig($oImportConfig);
            if ($iResult) {
                $this->configurationErrorLevel = $iResult;
                $this->addTplParam('isfailconfig', $this->configurationErrorLevel);
            }
        }

        return $sReturn;
    }

    /**
     * @return string
     */
    public function getD3CurrentProfileName()
    {
        return $this->currentProfileName;
    }

    /**
     * @TODO: verify if only one instance of d3importconfig is possible
     *
     * @return d3_importer_Application_Models_ImportConfig
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    public function getD3ImporterConfiguration()
    {
        $oImportConfig = oxNew('d3_importer_Application_Models_ImportConfig');
        if ($this->getEditObjectId() && "-1" != $this->getEditObjectId()) {
            $this->addTplParam('edit', $oImportConfig);

            $blLoaded = $oImportConfig->load($this->getEditObjectId());

            if (false == $blLoaded) {
                $this->configurationErrorLevel = 10;
                $this->addTplParam('isfailconfig', $this->configurationErrorLevel);
                $sMessage = Registry::getLang()->translateString('D3_IMPORTER_FAILCONFIG_10');
                $sMessage .= PHP_EOL . '<br>ID: ' . $this->getEditObjectId();
                d3_cfg_mod::get('d3importer')->d3getLog()->log(
                    d3log::WARNING,
                    __CLASS__,
                    __FUNCTION__,
                    __LINE__,
                    'failed to load importer profile',
                    'error:' . $sMessage
                );

                $this->setErrorMessage($sMessage);
            }

            $this->addTplParam('aProfile', $oImportConfig->getImportProfile($this->getD3CurrentProfileName()));
            $this->addTplParam('aProfileMain', $oImportConfig->getImportProfile('d3_importer_main'));
        }

        return $oImportConfig;
    }

    /**
     * @param d3_importer_Application_Models_ImportConfig $oImportConfig
     *
     * @return array
     */
    abstract protected function getFormularElements(d3_importer_Application_Models_ImportConfig $oImportConfig);

    /**
     * Saves profile parameters changes.
     *
     * @param array $aXMLParams
     *
     * @return void
     * @throws Exception
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     */
    public function saveImportProfile(array $aXMLParams = array())
    {
        if (empty($aXMLParams)) {
            $aXMLParams = oxNew(Request::class)->getRequestParameter("xmlval");
        }
        $oImportConfig = $this->getD3ImporterConfiguration();

        if ($oImportConfig->isLoaded()) {
            $oImportConfig->saveImportProfile($aXMLParams, $this->getD3CurrentProfileName());
        }
    }

    /**
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    public function readCurrentCSVLine()
    {
        startProfile(__METHOD__);
        $lineNumber = (int)oxNew(Request::class)->getRequestParameter("line");
        $lineNumber = $lineNumber <= 0 ? 1 : $lineNumber;

        $oImportConfig = $this->getD3ImporterConfiguration();
        $aProfileMain  = $oImportConfig->getImportProfile('d3_importer_main');

        //open file resource...
        $aLine = $oImportConfig->getCSVData($lineNumber);

        $this->addTplParam('actcsvline', $lineNumber);
        $this->addTplParam('maxcsvline', $aProfileMain['FILEROWS']);
        $this->addTplParam('aCSVLines', $aLine);
        stopProfile(__METHOD__);
    }
}
