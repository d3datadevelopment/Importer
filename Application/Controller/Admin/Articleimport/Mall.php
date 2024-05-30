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
use Exception;
use D3\Importer\Application\Controller\Admin\Base;
use D3\Importer\Application\Models\Constants;
use D3\Importer\Application\Models\Formbuilder;
use D3\Importer\Application\Models\Groupbuilder;
use D3\Importer\Application\Models\ImportConfig;
use D3\Importer\Application\Models\Profilemapper;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\UtilsView;

/**
 * Importer cross manager.
 *
 * @package admin
 */
class Mall extends Base
{
    /**
     * Current class default template name.
     *
     * @var string
     */
    protected $_sThisTemplate = '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_mall';

    protected $currentProfileName = 'd3_importer_mall';

    /**
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

        return $sReturn;
    }

    /**
     *
     * @return array
     * @throws SystemComponentException
     */
    protected function getFormularElements(ImportConfig $oImportConfig)
    {
        $return = [];

        /** @var Profilemapper $oMapper */
        $oMapper = oxNew(Profilemapper::class, $oImportConfig);

        try {
            $oSetting = $oMapper->getSettingFromController($this->getD3CurrentProfileName());

            /** @var Formbuilder $oFormBuilder */
            $oFormBuilder = oxNew(Formbuilder::class, $oSetting);
            $aElements    = $oFormBuilder->getElements();

            /** @var Groupbuilder $oGroupBuilder */
            $oGroupBuilder = oxNew(Groupbuilder::class);
            $return        = $oGroupBuilder->groupify($aElements, $this->getD3CurrentProfileName());
        } catch (Exception $exception) {
            Registry::get(UtilsView::class)->addErrorToDisplay($exception);
        }

        return $return;
    }
}
