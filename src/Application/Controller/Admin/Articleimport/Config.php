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

use OxidEsales\Eshop\Core\Request;

/**
 * Importer config manager.
 *
 * @package admin
 */
class d3_importer_Application_Controller_Admin_Articleimport_Config extends d3_importer_Application_Controller_Admin_Base
{

    /**
     * Current class default template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'd3_importer_config.tpl';

    protected $currentProfileName = 'd3_importer_config';

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
        $aXMLParams = oxNew(Request::class)->getRequestParameter("xmlval");

        if ($aXMLParams['MD54OXID']) {
            $aXMLParams['ARTNUM2OXID'] = 1;
        }

        $oImportConfig = $this->getD3ImporterConfiguration();

        $aXMLParams['aDefaultBooleanSettings'] = $oImportConfig->prepareMultilineSettings(
            $aXMLParams['aDefaultBooleanSettings']
        );
        $aXMLParams['aArticleSettings']        = $oImportConfig->prepareMultilineSettings(
            $aXMLParams['aArticleSettings']
        );

        parent::saveImportProfile($aXMLParams);
    }

    /**
     * @param d3_importer_Application_Models_ImportConfig $oImportConfig
     *
     * @return array
     * @throws Exception
     */
    protected function getFormularElements(d3_importer_Application_Models_ImportConfig $oImportConfig)
    {
        /** @var d3_importer_Application_Models_Profilemapper $oMapper */
        $oMapper  = oxNew(d3_importer_Application_Models_Profilemapper::class, $oImportConfig);
        $oSetting = $oMapper->getSettingFromController($this->currentProfileName);

        /** @var d3_importer_Application_Models_Formbuilder $oFormBuilder */
        $oFormBuilder = oxNew(d3_importer_Application_Models_Formbuilder::class, $oSetting);
        $aElements    = $oFormBuilder->getElements();

        /** @var d3_importer_Application_Models_Groupbuilder $oGroupBuilder */
        $oGroupBuilder = oxNew(d3_importer_Application_Models_Groupbuilder::class);

        return $oGroupBuilder->groupify($aElements, $this->getD3CurrentProfileName());
    }
}
