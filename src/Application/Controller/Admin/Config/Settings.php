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

use D3\ModCfg\Application\Controller\Admin\d3_cfg_mod_main;
use OxidEsales\Eshop\Application\Model\Article;
use OxidEsales\Eshop\Application\Model\Category;
use OxidEsales\Eshop\Core\Model\ListModel;
use OxidEsales\Eshop\Core\Request;

/**
 * Class d3_d3importer_controllers_admin_basesettings
 */
class d3_importer_Application_Controller_Admin_Config_Settings extends d3_cfg_mod_main
{
    protected $_sModId = 'd3importer';

    protected $_sThisTemplate = 'd3_d3importer_views_admin_tpl_basesettings.tpl';

    protected $_blHasDebugSwitch = false;

    protected $_sDebugHelpTextIdent = 'D3_IMPORTER_SET_DEBUG_DESC';

    public function save()
    {
        $aValue = oxNew(Request::class)->getRequestParameter('value');

        if ($aValue != 0 && count($aValue) > 0) {
            foreach ($aValue as $sKey => $aGroup) {
                $aGroup        = $this->prepareMultilineSettings($sKey, $aGroup);
                $aValue[$sKey] = $aGroup;
            }
        }

        //2014-09-02 KH: this is necessary, because we change the data (string to array)
        $_REQUEST['value'] = $_POST['value'] = $_GET['value'] = $aValue;

        parent::save();
    }

    /**
     * @param $sKey
     * @param $aGroup
     *
     * @return array
     * @throws \OxidEsales\Eshop\Core\Exception\SystemComponentException
     */
    public function prepareMultilineSettings($sKey, $aGroup)
    {
        if (in_array($sKey, d3_importer_Application_Models_ImportConfig::$multiLineSettings)) {
            $oImportConfig = oxNew('d3_importer_Application_Models_ImportConfig');
            $aGroup        = $oImportConfig->prepareMultilineSettings($aGroup);
        }

        return $aGroup;
    }

    /**
     * @return array
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\SystemComponentException
     */
    public function getArticleFields()
    {
        $aArticleIndentificationFields = (array)$this->d3GetSet()->getValue('aArticleIndentificationFields');
        $aFields                       = array();
        foreach ($this->getArticleFieldsFromDb() as $sField) {
            $oField           = new stdClass();
            $oField->title    = $sField;
            $oField->selected = (int)in_array($sField, $aArticleIndentificationFields);

            $aFields[] = $oField;
        }

        return $aFields;
    }

    /**
     * @return array
     * @throws \OxidEsales\Eshop\Core\Exception\SystemComponentException
     * @throws \OxidEsales\Eshop\Core\Exception\SystemComponentException
     */
    protected function getArticleFieldsFromDb()
    {
        $oArticle   = oxNew(Article::class);
        $fieldNames = $oArticle->getFieldNames();

        /** @var ListModel $importerDescList */
        $importerDescList      = oxNew(ListModel::class, d3_importer_Application_Models_ImporterDescription::class);
        $getDisabledFieldQuery = <<<MYSQL
SELECT *
FROM `{$importerDescList->getBaseObject()->getCoreTableName()}`
WHERE oxisdisabled = 1
MYSQL;

        $importerDescList->selectString($getDisabledFieldQuery);
        foreach ($importerDescList->getArray() as $importerDesc) {
            /** @var $importerDesc d3_importer_Application_Models_ImporterDescription */
            if (in_array($importerDesc->getFieldData('oxField'), $fieldNames)) {
                $key = array_search($importerDesc->getFieldData('oxField'), $fieldNames);
                unset($fieldNames[$key]);
            }
        }

        return $fieldNames;
    }

    /**
     * @return array
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\SystemComponentException
     */
    public function getCategorieFields()
    {
        $aCatIndentificationFields = (array)$this->d3GetSet()->getValue('aCategorieIndentificationFields');
        $aFields                   = array();
        foreach ($this->getCategorieFieldsFromDb() as $sField) {
            $oField           = new stdClass();
            $oField->title    = $sField;
            $oField->selected = (int)in_array($sField, $aCatIndentificationFields);

            $aFields[] = $oField;
        }

        return $aFields;
    }

    /**
     * @return array
     * @throws \OxidEsales\Eshop\Core\Exception\SystemComponentException
     */
    protected function getCategorieFieldsFromDb()
    {
        $oCategorie = oxNew(Category::class);

        return $oCategorie->getFieldNames();
    }
}
