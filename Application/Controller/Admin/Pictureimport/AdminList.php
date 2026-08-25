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

namespace D3\Importer\Application\Controller\Admin\Pictureimport;

use D3\Importer\Application\Models\Constants;
use D3\Importer\Application\Models\ImportConfig;
use OxidEsales\Eshop\Application\Controller\Admin\AdminListController;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\TableViewNameGenerator;

/**
 * Picture list manager.
 * Performs collection and managing (such as filtering or deleting) function.
 *
 * @package admin
 */
class AdminList extends AdminListController
{
    /**
     * Current class template name.
     *
     * @var string
     */
    protected $_sThisTemplate = '@' . Constants::OXID_MODULE_ID . '/admin/d3_picture_list';

    /**
     * Name of chosen object class (default null).
     *
     * @var string
     */
    protected $_sListClass = ImportConfig::class;

    /**
     * Default SQL sorting parameter (default null).
     *
     * @var string
     */
    protected $_sDefSortField = "oxtitle";

    protected function prepareWhereQuery($whereQuery, $fullQuery)
    {
        $sQ = parent::prepareWhereQuery($whereQuery, $fullQuery);

        $sTable = oxNew(TableViewNameGenerator::class)->getViewName("d3importconfig");

        $iShopId = Registry::getConfig()->getActiveShop()->getId();

        return $sQ . " AND {$sTable}.oxshopid = '{$iShopId}' ";
    }
}
