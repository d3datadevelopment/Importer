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

namespace D3\Importer\Application\Controller\Admin\Config;

use D3\ModCfg\Application\Controller\Admin\d3_cfg_mod_licence;

/**
 * Class d3_importercfg_support
 */
class Support extends d3_cfg_mod_licence
{
    /**
     * @var string
     */
    protected $_sModId = 'd3importer';

    /**
     * @var bool
     */
    protected $_hasNewsletterForm = false;

    /**
     * @var bool
     */
    protected $_modUseCurl = false;

    /**
     * @var bool
     */
    protected $_hasUpdate = true;

    protected $_sHelpLinkMLAdd = '';
}
