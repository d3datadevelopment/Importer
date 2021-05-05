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
use D3\ModCfg\Application\Controller\Admin\Log\d3_cfg_log;

/**
 * Class d3_cfg_importerlog
 */
class d3_importer_Application_Controller_Admin_Log_Base extends d3_cfg_log
{

    /**
     * @var string
     */
    protected $_sModId = 'd3importer';

    /**
     * @return string
     */
    public function d3getAdditionalUrlParams()
    {
        $sRet = parent::d3getAdditionalUrlParams();
        if ($this->_sModId) {
            $sRet .= '&sD3ModId=' . $this->_sModId;
        }

        return $sRet;
    }
}
