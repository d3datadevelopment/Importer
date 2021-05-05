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
use D3\ModCfg\Application\Controller\Admin\d3_cfg_mod_;

/**
 * Class d3_importercfg
 */
class d3_importer_Application_Controller_Admin_Config_Base extends d3_cfg_mod_
{

    /**
     * @var bool
     */
    protected $_hasListItems = false;

    /**
     * @return string
     */
    public function render()
    {

        $this->addTplParam('sListClass',  d3_importer_Application_Controller_Admin_Config_AdminList::class);
        $this->addTplParam('sMainClass', d3_importer_Application_Controller_Admin_Config_Support::class);

        $sRet = parent::render();

        $this->addTplParam('oxid', null);

        return $sRet;
    }
}
