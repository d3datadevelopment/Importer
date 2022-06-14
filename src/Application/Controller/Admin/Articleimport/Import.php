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

use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Request;
use OxidEsales\Eshop\Core\TableViewNameGenerator;

/**
 * Importer import manager.
 *
 * @package admin
 */
class d3_importer_Application_Controller_Admin_Articleimport_Import extends d3_importer_Application_Controller_Admin_Base
{
    /**
     * Current class default template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'd3_importer_import.tpl';

    /**
     *
     * @return bool|null
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    public function doImport()
    {
        $request = oxNew(Request::class);
        $soxId   = $request->getRequestParameter("oxid");

        $oImportConfig = $this->getD3ImporterConfiguration();

        if (false == $oImportConfig->getId()) {
            return false;
        }

        //pruefe auf Profilfehler (keine Datei, Separator etc.)
        $this->configurationErrorLevel = $this->validateImportConfig($oImportConfig);
        if ($this->configurationErrorLevel) {
            $this->addTplParam("isfailconfig", $this->configurationErrorLevel);

            return false;
        }

        /** @var d3_importer_Application_Controller_Import_Article $articleImport */
        $articleImport = oxNew(d3_importer_Application_Controller_Import_Article::class, $oImportConfig);
        $articleImport->import($request->getRequestParameter("lpos"), $request->getRequestParameter("fpos"));

        $this->addTplParam("iFailImport", $articleImport->getFailImport());
        $this->addTplParam("blEOF", $articleImport->isEndOfFile());
        $this->addTplParam("iFilePos", $articleImport->getFilePointerPosition());
        $this->addTplParam("iLinePos", $articleImport->getActualLinePosition());
        $this->addTplParam("oxid", $soxId);
        $this->_sThisTemplate            = 'd3_importer_ticker.tpl';

        return null;
    }

    /**
     * @param $sData
     *
     * @return string
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     */
    public function getStatisticData($sData)
    {
        $sArticleTableView = oxNew(TableViewNameGenerator::class)->getViewName('oxarticles');

        $oDB = DatabaseProvider::getDb();
        switch ($sData) {
            case "imported":
                return $oDB->getOne("select count(oxid) from $sArticleTableView as oxarticles where d3importflag = 'IMPORTED'");
                break;
            case "updated":
                return $oDB->getOne("select count(oxid) from $sArticleTableView as oxarticles where d3importflag = 'UPDATED'");
                break;
            default:
                return "";
                break;
        }
    }

    /**
     * @param d3_importer_Application_Models_ImportConfig $oImportConfig
     *
     * @return array
     */
    protected function getFormularElements(d3_importer_Application_Models_ImportConfig $oImportConfig)
    {
        // TODO: Implement _getFormularElements() method.
        return array();
    }
}
