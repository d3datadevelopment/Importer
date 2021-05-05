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

use OxidEsales\Eshop\Application\Controller\Admin\AdminController;

/**
 * Importer manager.
 * Returns template, that arranges two other templates ("d3_importer_list.tpl"
 * and "d3_importer_main.tpl") to frame.
 *
 * @package admin
 */
class d3_importer_Application_Controller_Admin_Articleimport_Base extends AdminController
{
    /**
     * Current class template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'd3_importer.tpl';
}
