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

namespace D3\Importer\Application\Controller\Admin\Desc;

use D3\Importer\Application\Models\Constants;
use OxidEsales\Eshop\Application\Controller\Admin\AdminController;

/**
 * Class Item
 */
class Base extends AdminController
{
    protected $_sThisTemplate = '@' . Constants::OXID_MODULE_ID . '/admin/desc/base';
}
