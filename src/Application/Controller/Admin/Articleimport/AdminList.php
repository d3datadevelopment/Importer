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
 * Importer list manager.
 * Performs collection and managing (such as filtering or deleting) function.
 *
 * @package admin
 */
class d3_importer_Application_Controller_Admin_Articleimport_AdminList extends AdminListController
{
    /**
     * Current class template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'd3_importer_list.tpl';

    /**
     * Name of chosen object class (default null).
     *
     * @var string
     */
    protected $_sListClass = 'd3_importer_Application_Models_ImportConfig';

    /**
     * Default SQL sorting parameter (default null).
     *
     * @var string
     */
    protected $_sDefSortField = "oxtitle";

    protected function _prepareWhereQuery($aWhere, $sqlFull)
    {
        $sQ = parent::_prepareWhereQuery($aWhere, $sqlFull);

        $sTable = getViewName("d3importconfig");

        $iShopId = $this->getConfig()->getShopId();
        $sQ .= " AND {$sTable}.oxshopid = '{$iShopId}' ";

        return $sQ;
    }
}
