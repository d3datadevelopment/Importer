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

use OxidEsales\Eshop\Core\Exception\SystemComponentException;
use Exception;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use D3\Importer\Application\Controller\Admin\Base;
use D3\Importer\Application\Controller\Import\Article;
use D3\Importer\Application\Models\Constants;
use D3\Importer\Application\Models\ImportConfig;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\Request;
use OxidEsales\Eshop\Core\TableViewNameGenerator;

/**
 * Importer import manager.
 *
 * @package admin
 */
class Afterimport extends Base
{
    /**
     * @var Article
     */
    protected $importer;

    protected $currentProfileName = 'd3_importer_afterimport';

    /**
     * Current class default template name.
     *
     * @var string
     */
    protected $_sThisTemplate = '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_afterimport';

    /**
     *
     * @throws SystemComponentException
     */
    public function __construct()
    {
        parent::__construct();

        if (false == oxNew(Request::class)->getRequestParameter("action")) {
            Registry::getSession()->deleteVariable('notimported_all');
        }
    }

    /**
     * doing Import
     *
     * @throws Exception
     * @throws d3_cfg_mod_exception
     * @throws DatabaseConnectionException
     */
    public function doAfterImport(): void
    {
        $request = oxNew(Request::class);
        $soxId   = $request->getRequestParameter("oxid");
        $sAction = $request->getRequestParameter("action");
        $iTicker = (int)$request->getRequestParameter("afterimportticker");
        if (false == $sAction) {
            $this->addTplParam("isfailconfig", 15);

            return;
        }

        $oImportConfig = $this->getD3ImporterConfiguration();

        if (false == $oImportConfig->getId()) {
            $this->addTplParam("isfailconfig", 10);

            return;
        }

        if ($iTicker) {
            $oImportConfig->saveImportProfile(['AFTERIMPORTTICKER' => $iTicker], $this->getD3CurrentProfileName());
        }

        $iAllCount = Registry::getSession()->getVariable('notimported_all');

        if (!$iAllCount) {
            $iAllCount = $this->getStatisticData('notimported_all');
            Registry::getSession()->setVariable('notimported_all', $iAllCount);
        }

        $tickerMaximum = (int)$oImportConfig->getImportProfile($this->getD3CurrentProfileName())['AFTERIMPORTTICKER'];
        /** @var Article $articleImport */
        $articleImport = oxNew(Article::class, $oImportConfig);
        $articleImport->afterImport($sAction, $tickerMaximum);

        $this->importer              = $articleImport;
        $this->addTplParam("oxid", $soxId);
        $this->addTplParam("sAction", $sAction);
        $this->addTplParam("iActPos", $iAllCount - $this->getStatisticData('notimported_all'));
        $this->addTplParam("iAllPos", $iAllCount);

        $this->_sThisTemplate = '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_afterticker';
    }

    /**
     *
     *
     * @param $sData
     *
     * @return string
     * @throws DatabaseConnectionException
     * @throws SystemComponentException
     */
    public function getStatisticData($sData)
    {
        $sData = strtolower(trim($sData));
        $soxId   = oxNew(Request::class)->getRequestParameter("oxid");
        $sSQLAdd = " AND d3importprofileid = " . DatabaseProvider::getDb()->quote($soxId);

        $sArticleTableView = oxNew(TableViewNameGenerator::class)->getViewName('oxarticles');

        $oDB = DatabaseProvider::getDb();
        if ("profile" === $sData) {
            return $oDB->getOne("SELECT COUNT(oxid) FROM $sArticleTableView as oxarticles WHERE 1 " . $sSQLAdd);
        }

        if ("imported" === $sData) {
            return $oDB->getOne("SELECT COUNT(oxid) FROM $sArticleTableView as oxarticles WHERE d3importflag = 'imported' " . $sSQLAdd);
        }

        if ("updated" === $sData) {
            return $oDB->getOne("SELECT COUNT(oxid) FROM $sArticleTableView as oxarticles WHERE d3importflag = 'updated' " . $sSQLAdd);
        }

        if ("notimported_all" === $sData) {
            return $oDB->getOne("SELECT COUNT(oxid) FROM $sArticleTableView as oxarticles WHERE d3importflag = '' " . $sSQLAdd);
        }

        if ("notimported_main" === $sData) {
            return $oDB->getOne(
                "SELECT COUNT(oxid) FROM $sArticleTableView as oxarticles WHERE d3importflag = '' AND oxparentid = '' " . $sSQLAdd
            );
        }

        if ("notimported_variants" === $sData) {
            return $oDB->getOne(
                "SELECT COUNT(oxid) FROM $sArticleTableView as oxarticles WHERE d3importflag = '' AND oxparentid != '' " . $sSQLAdd
            );
        }

        return '';
    }

    /**
     * @return mixed
     */
    public function isFailImport()
    {
        return $this->importer->getFailImport();
    }

    /**
     * @return mixed
     */
    public function isEOF()
    {
        return $this->importer->isEndOfFile();
    }

    /**
     * @return array
     */
    protected function getFormularElements(ImportConfig $oImportConfig)
    {
        // TODO: Implement _getFormularElements() method.
        return [];
    }
}
