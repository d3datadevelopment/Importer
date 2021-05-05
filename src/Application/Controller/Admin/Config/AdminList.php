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
use D3\ModCfg\Application\Controller\Admin\d3_cfg_mod_list;

/**
 * Class d3_importercfg_list
 */
class d3_importer_Application_Controller_Admin_Config_AdminList extends d3_cfg_mod_list
{

    /**
     * @var bool
     */
    protected $_blD3ShowLangSwitch = false;

    /**
     * d3_importercfg_list constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->_blD3ShowLangSwitch = false;
    }

    /**
     * @return string
     */
    public function render()
    {
        parent::render();

        $this->addTplParam("default_edit", d3_importer_Application_Controller_Admin_Config_Support::class);

        return $this->_sThisTemplate;
    }
}
