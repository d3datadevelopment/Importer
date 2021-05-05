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

/**
 * Importer cross manager.
 *
 * @package admin
 */
class d3_importer_Application_Controller_Admin_Articleimport_Crosselling extends d3_importer_Application_Controller_Admin_Base
{
    /**
     * Current class default template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'd3_importer_cross.tpl';

    protected $currentProfileName = 'd3_importer_cross';

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

        $this->readCurrentCSVLine();

        return $sReturn;
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
