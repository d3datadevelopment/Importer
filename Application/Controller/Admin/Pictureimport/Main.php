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

use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use Doctrine\DBAL\DBALException;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use stdClass;
use Exception;
use OxidEsales\Eshop\Core\Exception\SystemComponentException;
use D3\Importer\Application\Controller\Admin\Base;
use D3\Importer\Application\Models\Constants;
use D3\Importer\Application\Models\ImportConfig;
use D3\Importer\Application\Models\ImporterDescription;
use OxidEsales\Eshop\Application\Model\Article;
use OxidEsales\Eshop\Core\Model\BaseModel;
use OxidEsales\Eshop\Core\Model\ListModel;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\Request;

/**
 * Importer main manager.
 *
 * @package admin
 */
class Main extends Base
{
    /**
     * Current class default template name.
     *
     * @var string
     */
    protected $_sThisTemplate = '@' . Constants::OXID_MODULE_ID . '/admin/d3_picture_main';

    /**
     * Speichert den aktuellen Fehlercode
     *
     * @var integer
     */
    protected $failConfigCode = 0;

    protected $isUploadFailed;

    protected $requireProfileCheck = false;

    protected $currentProfileName = 'd3_picture_main';

    /**
     * Executes parent method parent::render(), creates oxlist object,
     * passes it's data to Smarty engine and retutns name of template
     * file "d3_picture_main.tpl".
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
        $sReturn         = parent::render();
        $tplLanguage     = Registry::getLang()->getTplLanguage();
        $descriptionName = $tplLanguage ? 'oxdesc_'.$tplLanguage : 'oxdesc';

        $aImageFieldList  = new stdClass();

        $oArticle = oxNew(Article::class);

        $oImporterDesc = oxNew(ListModel::class, ImporterDescription::class);
        /** @var ImporterDescription $baseObject */
        $baseObject = $oImporterDesc->getBaseObject();
        $baseObject->setLanguage($tplLanguage);

        $sSelect = "SELECT * FROM d3importerdesc WHERE oxispic = '1' AND oxisdisabled != '1' ORDER BY oxorder";
        $oImporterDesc->selectString($sSelect);

        foreach ($oArticle as $key => $val) {
            if (substr_count($key, "oxarticles__")) {
                $val->fldname = str_replace("oxarticles__", "", $key);

                $blDelete = true;
                /** @var BaseModel $oDesc */
                foreach ($oImporterDesc as $oDesc) {
                    if ($oDesc->getFieldData('oxfield') != $val->fldname) {
                        continue;
                    }
                    $val->fldshowname = $oDesc->getFieldData($descriptionName);
                    $val->flddisabled = $oDesc->getFieldData('oxisdisabled');
                    $blDelete         = false;
                }

                if ($blDelete) {
                    unset($aImageFieldList->{$val->fldname});
                } else {
                    $aImageFieldList->{$val->fldname} = $val;
                }
            }
        }

        $this->addTplParam("imagefieldlist", $aImageFieldList);
        $this->addTplParam("importfieldlist", $this->getPictureFields(Registry::getConfig()->getConfigParam('iPicCount')));
        $this->addTplParam("iPicCount", Registry::getConfig()->getConfigParam('iPicCount'));
        $this->addTplParam("sNextKey", 0);

        return $sReturn;
    }

    /**
     *
     * @return void
     * @throws Exception
     * @throws d3_cfg_mod_exception
     * @throws DatabaseConnectionException
     */
    public function saveImportProfile(array $aXMLParams = [])
    {
        $request           = oxNew(Request::class);
        $aXMLPictureParams = $request->getRequestParameter("xmlpictureval");
        $aPictureSettings  = $request->getRequestParameter("aPictureSettings");

        foreach ($aXMLPictureParams as $iIndex => $aXMLParam) {
            if (empty($aXMLParam['IMPORTFIELD'])) {
                unset($aXMLPictureParams[$iIndex]);
            }
        }

        usort(
            $aXMLPictureParams,
            function ($a, $b) {
                $iA = (int)substr($a["IMPORTFIELD"], strlen("d3importpic"));
                $iB = (int)substr($b["IMPORTFIELD"], strlen("d3importpic"));
                return $iA <=> $iB;
            }
        );

        parent::saveImportProfile(
            ['aXMLPictureParams' => $aXMLPictureParams, 'aPictureSettings' => $aPictureSettings]
        );
    }

    /**
     * Wird fuer die Rueckgabe ans Template benoetigt
     *
     * @return integer $this->_iFailConfig
     */
    public function getConfigFailure()
    {
        if (!isset($this->failConfigCode)) {
            return 0;
        }
        if (empty($this->failConfigCode)) {
            return 0;
        }
        return $this->failConfigCode;
    }

    /**
     * Speichert den aktuellen Fehlercode
     *
     * @param integer $iError
     */
    protected function setFailConfigCode($iError)
    {
        $this->failConfigCode = $iError;
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
     *
     * @param int $pictureSlots
     *
     * @return array
     * @throws SystemComponentException
     */
    protected function getPictureFields($pictureSlots)
    {
        $tplLanguage      = Registry::getLang()->getTplLanguage();
        $descriptionName  = $tplLanguage ? 'oxdesc_'.$tplLanguage : 'oxdesc';
        $oImporterDesc    = oxNew(ListModel::class, ImporterDescription::class);
        $aImportFieldList = [];
        $nameList         = [];
        for ($i = 1; $pictureSlots >= $i; $i++) {
            $nameList[] = "'d3importpic{$i}'";
        }
        $nameList = implode(', ', $nameList);

        $sSelect          = "SELECT * FROM d3importerdesc WHERE oxfield IN({$nameList}) ORDER BY oxorder";
        $oImporterDesc->selectString($sSelect);

        /** @var BaseModel $obj */
        foreach ($oImporterDesc as $obj) {
            $aImportFieldList[$obj->getFieldData('oxfield')] = $obj->getFieldData($descriptionName);
        }

        return $aImportFieldList;
    }
}
