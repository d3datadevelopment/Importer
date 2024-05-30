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

namespace D3\Importer\Application\Controller\Admin\Articleimport;

use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use Doctrine\DBAL\DBALException;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Exception\SystemComponentException;
use OxidEsales\Eshop\Application\Model\Article;
use D3\Importer\Application\Controller\Admin\Base;
use D3\Importer\Application\Models\Constants;
use D3\Importer\Application\Models\ImportConfig;
use D3\Importer\Application\Models\ImporterDescription;
use OxidEsales\Eshop\Core\Model\BaseModel;
use OxidEsales\Eshop\Core\Model\ListModel;
use OxidEsales\Eshop\Core\Registry;
use stdClass;

/**
 * Importer variants manager.
 *
 * @package admin
 */
class Variants extends Base
{
    /**
     * Current class default template name.
     *
     * @var string
     */
    protected $_sThisTemplate = '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_variants';

    /**
     * @var string
     */
    protected $currentProfileName = 'd3_importer_variants';

    /**
     * @var array
     */
    protected $articleFieldnames = [];

    /**
     * Executes parent method parent::render(), creates oxlist object,
     * passes it's data to Smarty engine and retutns name of template
     * file "d3_importer_category.tpl".
     *
     * @return string
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     */
    public function render()
    {
        $sReturn = parent::render();

        $this->readCurrentCSVLine();
        $this->addTplParam('aFieldList', $this->getArticleFieldList());

        return $sReturn;
    }

    /**
     * @return array
     */
    protected function getFormularElements(ImportConfig $oImportConfig)
    {
        // TODO: Implement _getFormularElements() method.
        return [];
    }

    /**
     * @return array
     * @throws SystemComponentException
     */
    public function getArticleFieldList()
    {
        if (false == empty($this->articleFieldnames)) {
            return $this->articleFieldnames;
        }
        $aFieldList  = [];
        $tplLanguage = Registry::getLang()->getTplLanguage();
        $descriptionName = $tplLanguage ? 'oxdesc_'.$tplLanguage : 'oxdesc';

        /** @var Article $article */
        $article = oxNew(Article::class);
        $article->setEnableMultilang(false);
        $fieldnames = $article->getFieldNames();
        $fieldnames = $this->addLongdescFields($fieldnames);

        /** @var ListModel $importFields */
        $importFields = oxNew(ListModel::class, ImporterDescription::class);
        /** @var ImporterDescription $importerDescription */
        $importerDescription = $importFields->getBaseObject();
        $importerDescription->setLanguage($tplLanguage);

        $sSelect = "SELECT * FROM d3importerdesc WHERE oxfield LIKE 'oxvarname%' ORDER BY oxorder";

        $importFields->selectString($sSelect);

        foreach ($fieldnames as $val) {
            if (!substr_count($val, "oxvarname")) {
                continue;
            }
            $temporaryClass          = new stdClass();
            $temporaryClass->fldname = isset($val) ? (string)$val : '';

            /** @var BaseModel $importField */
            foreach ($importFields as $importField) {
                if ($importField->getFieldData('oxfield') != $temporaryClass->fldname) {
                    continue;
                }

                if ($importField->getFieldData('oxisdisabled')) {
                    continue 2;
                }

                $temporaryClass->fldshowname = $importField->getFieldData($descriptionName);
            }

            $aFieldList[$temporaryClass->fldname] = $temporaryClass;
        }

        $sSelect = "SELECT * FROM d3importerdesc WHERE oxfield LIKE 'oxvarselect%' ORDER BY oxorder";
        $importFields->selectString($sSelect);

        foreach ($fieldnames as $val) {
            if (!substr_count($val, "oxvarselect")) {
                continue;
            }

            $temporaryClass          = new stdClass();
            $temporaryClass->fldname = (string)$val;

            /** @var BaseModel $importField */
            foreach ($importFields as $importField) {
                if ($importField->getFieldData('oxfield') != $temporaryClass->fldname) {
                    continue;
                }

                if ($importField->getFieldData('oxisdisabled')) {
                    continue 2;
                }

                $temporaryClass->fldshowname = $importField->getFieldData($descriptionName);
            }

            $aFieldList[$temporaryClass->fldname] = $temporaryClass;
        }

        return $aFieldList;
    }
    /**
     * @return array
     */
    protected function addLongdescFields(array $fieldnames)
    {
        $fieldnames[] = 'oxlongdesc';
        $language     = Registry::getLang();
        $languages    = $language->getLanguageArray(null, false);
        foreach ($languages as $language) {
            if (0 < $language->id) {
                $fieldnames[] = 'oxlongdesc_' . $language->id;
            }
        }

        return $fieldnames;
    }
}
