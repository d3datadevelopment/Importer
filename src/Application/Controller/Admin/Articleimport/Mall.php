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
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\UtilsView;

/**
 * Importer cross manager.
 *
 * @package admin
 */
class d3_importer_Application_Controller_Admin_Articleimport_Mall extends d3_importer_Application_Controller_Admin_Base
{
    /**
     * Current class default template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'd3_importer_mall.tpl';

    protected $currentProfileName = 'd3_importer_mall';

    /**
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

        $this->readCurrentCSVLine();

        return $sReturn;
    }

    /**
     * @param d3_importer_Application_Models_ImportConfig $oImportConfig
     *
     * @return array
     * @throws \OxidEsales\Eshop\Core\Exception\SystemComponentException
     */
    protected function getFormularElements(d3_importer_Application_Models_ImportConfig $oImportConfig)
    {
        $return = array();

        /** @var d3_importer_Application_Models_Profilemapper $oMapper */
        $oMapper = oxNew(d3_importer_Application_Models_Profilemapper::class, $oImportConfig);

        try {
            $oSetting = $oMapper->getSettingFromController( $this->getD3CurrentProfileName());

            /** @var d3_importer_Application_Models_Formbuilder $oFormBuilder */
            $oFormBuilder = oxNew(d3_importer_Application_Models_Formbuilder::class, $oSetting);
            $aElements    = $oFormBuilder->getElements();

            /** @var d3_importer_Application_Models_Groupbuilder $oGroupBuilder */
            $oGroupBuilder = oxNew(d3_importer_Application_Models_Groupbuilder::class);
            $return        = $oGroupBuilder->groupify($aElements, $this->getD3CurrentProfileName());
        } catch (\Exception $exception) {
            Registry::get(UtilsView::class)->addErrorToDisplay($exception);
        }

        return $return;
    }

}
