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
use D3\Importer\Application\Controller\Admin\Base;
use D3\Importer\Application\Controller\Import\Article;
use D3\Importer\Application\Models\Constants;
use D3\Importer\Application\Models\ImportConfig;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Request;
use OxidEsales\Eshop\Core\TableViewNameGenerator;

/**
 * Importer import manager.
 *
 * @package admin
 */
class Import extends Base
{
    /**
     * Current class default template name.
     *
     * @var string
     */
    protected $_sThisTemplate = '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_import';

    /**
     *
     * @return bool|null
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
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

        /** @var Article $articleImport */
        $articleImport = oxNew(Article::class, $oImportConfig);
        $articleImport->import($request->getRequestParameter("lpos") ?? 0, $request->getRequestParameter("fpos") ?? false);

        $this->addTplParam("iFailImport", $articleImport->getFailImport());
        $this->addTplParam("blEOF", $articleImport->isEndOfFile());
        $this->addTplParam("iFilePos", $articleImport->getFilePointerPosition());
        $this->addTplParam("iLinePos", $articleImport->getActualLinePosition());
        $this->addTplParam("oxid", $soxId);
        $this->_sThisTemplate            = '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_ticker';

        return null;
    }

    /**
     * @param $sData
     *
     * @return string
     * @throws DatabaseConnectionException
     */
    public function getStatisticData($sData)
    {
        $sArticleTableView = oxNew(TableViewNameGenerator::class)->getViewName('oxarticles');

        $oDB = DatabaseProvider::getDb();
        return match ($sData) {
            "imported" => $oDB->getOne("select count(oxid) from $sArticleTableView as oxarticles where d3importflag = 'IMPORTED'"),
            "updated" => $oDB->getOne("select count(oxid) from $sArticleTableView as oxarticles where d3importflag = 'UPDATED'"),
            default => "",
        };
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
