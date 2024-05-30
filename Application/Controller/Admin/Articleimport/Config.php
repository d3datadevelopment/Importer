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

use Exception;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use D3\Importer\Application\Controller\Admin\Base;
use D3\Importer\Application\Models\Constants;
use D3\Importer\Application\Models\Formbuilder;
use D3\Importer\Application\Models\Groupbuilder;
use D3\Importer\Application\Models\ImportConfig;
use D3\Importer\Application\Models\Profilemapper;
use OxidEsales\Eshop\Core\Request;

/**
 * Importer config manager.
 *
 * @package admin
 */
class Config extends Base
{
    /**
     * Current class default template name.
     *
     * @var string
     */
    protected $_sThisTemplate = '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_config';

    protected $currentProfileName = 'd3_importer_config';

    /**
     *
     * @return void
     * @throws Exception
     * @throws d3_cfg_mod_exception
     * @throws DatabaseConnectionException
     */
    public function saveImportProfile(array $aXMLParams = [])
    {
        $aXMLParams = oxNew(Request::class)->getRequestParameter("xmlval");

        if ($aXMLParams['MD54OXID']) {
            $aXMLParams['ARTNUM2OXID'] = 1;
        }

        $oImportConfig = $this->getD3ImporterConfiguration();

        $aXMLParams['aDefaultBooleanSettings'] = $oImportConfig->prepareMultilineSettings(
            $aXMLParams['aDefaultBooleanSettings']
        );
        $aXMLParams['aArticleSettings']        = $oImportConfig->prepareMultilineSettings(
            $aXMLParams['aArticleSettings']
        );

        parent::saveImportProfile($aXMLParams);
    }

    /**
     *
     * @return array
     * @throws Exception
     */
    protected function getFormularElements(ImportConfig $oImportConfig)
    {
        $oMapper  = oxNew(Profilemapper::class, $oImportConfig);
        $oSetting = $oMapper->getSettingFromController($this->currentProfileName);

        $oFormBuilder = oxNew(Formbuilder::class, $oSetting);
        $aElements    = $oFormBuilder->getElements();

        $oGroupBuilder = oxNew(Groupbuilder::class);

        return $oGroupBuilder->groupify($aElements, $this->getD3CurrentProfileName());
    }
}
