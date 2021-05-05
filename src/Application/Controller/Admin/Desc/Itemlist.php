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
use OxidEsales\Eshop\Application\Controller\Admin\AdminListController;

/**
 * Class Itemlist
 */
class d3_importer_Application_Controller_Admin_Desc_Itemlist extends AdminListController
{
    protected $_sListClass = d3_importer_Application_Models_ImporterDescription::class;
    protected $_sThisTemplate = 'd3_d3importer_views_admin_tpl_desc_list.tpl';
    protected $_sDefSortField = 'oxorder';
    protected $_blEmployMultilanguage = false;
}
