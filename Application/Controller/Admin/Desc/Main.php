<?php
/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * https://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author        D3 Data Development - Daniel Seifert <support@shopmodule.com>
 * @link          https://www.oxidmodule.com
 */

namespace D3\Importer\Application\Controller\Admin\Desc;

use OxidEsales\Eshop\Core\Exception\SystemComponentException;
use Exception;
use D3\Importer\Application\Models\Constants;
use D3\Importer\Application\Models\ImporterDescription;
use OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController;
use OxidEsales\Eshop\Core\Request;

class Main extends AdminDetailsController
{
    protected $_sThisTemplate = '@' . Constants::OXID_MODULE_ID . '/admin/desc/main';

    /**
     * @return string
     * @throws SystemComponentException
     */
    public function render()
    {
        $sRet       = parent::render();
        $editObject = oxNew(ImporterDescription::class);
        $editObject->setEnableMultilang(false);
        $editObject->load($this->getEditObjectId());
        $this->addTplParam('edit', $editObject);
        $this->addTplParam('sHelpURL', null);

        return $sRet;
    }

    /**
     * @throws Exception
     */
    public function save()
    {
        $oxid             = $this->getEditObjectId();
        $requestParameter = oxNew(Request::class)->getRequestParameter("editval");

        $importerDesc = oxNew(ImporterDescription::class);
        $importerDesc->setEnableMultilang(false);
        if ($oxid != "-1") {
            $importerDesc->load($oxid);
        } else {
            $requestParameter['d3importerdesc__oxid'] = null;
        }

        $importerDesc->assign($requestParameter);
        $importerDesc->save();

        $this->setEditObjectId($importerDesc->getId());

        parent::save();
    }

    /**
     * exampleItem:     array('new' => array(
     *                      'sScript' => 'top.oxid.admin.editThis( -1 );return false;',
     *                      'sTranslationId' => 'foo'
     *                  )
     * @return array
     */
    public function getNaviItems()
    {
        return [
            'new' => [
                'sScript'        => 'top.oxid.admin.editThis( -1 );return false;',
                'sTranslationId' => 'D3IMPORTERDESC_NEW',
            ],
        ];
    }

    /**
     * build and get url to help page
     *
     */
    public function getHelpURL()
    {
    }
}
