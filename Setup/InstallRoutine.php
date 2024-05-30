<?php

namespace D3\Importer\Setup;

use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use JsonException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use D3\ModCfg\Application\Model\Configuration\d3_cfg_mod;
use D3\ModCfg\Application\Model\Install\d3install_updatebase;
use Doctrine\DBAL\DBALException;
use OxidEsales\Eshop\Application\Model\ShopList;
use OxidEsales\Eshop\Core\Exception\ConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Application\Model\Shop;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class d3importer_update
 */
class InstallRoutine extends d3install_updatebase
{
    /**
     * @var string
     */
    public $sModKey = 'd3importer';
    /**
     * @var string
     */
    public $sModName = 'Importer';
    /**
     * @var string
     */
    public $sModVersion = '6.0.1.0';
    /**
     * @var string
     */
    public $sBaseConf = '--------------------------------------------------------------------------------
r5Kv2==RTN6VTdvUkRGZnFHSXhxZVhrakRhbUJkWXdtZ0twRHJXOEtCRjdsWkYrWXN1THpueVdHT0dCV
2g1NU5qdTNFeHNLa0hHUWxkMUlERkoxNU1vTms2SUdLS2NxaFNRM253VHlIRnhYcTUzbUF6SFdvcGtFe
EtpS1RsV3FhM2d2ZVp1ZGtGOFU1SU9NK2E4cDRYSjd6SDRJbjkvSWNmME5QWmxwcU5mVWtlZHVXOTM3Q
2VFQ3c0OFNWQXlTcVlkclpyaXFiRlVyci9YWnU4Y3dMem0rQzNHbkxkdkVXV1QrYmNqanpVcnRXZno4R
FVwc3h6eVJUYlNjTUdrV2QwaHlPV2FkRGdUUmU1ZGNjY001SU1NaXRwOVhZaGFpVkJEaXpJM0VJM0NFb
GxyeFFiZWZGVEY2SVJlaGx6N0Fvd3owMjVKY2Z0eTI1T0laYjZFamdtcjJtaWhRPT0=
--------------------------------------------------------------------------------';
    /**
     * @var string
     */
    public $sRequirements = '';
    /**
     * @var string
     */
    public $sBaseValue = '';
    /**
     * @var string
     */
    public $sMinModCfgVersion = '7.0.0.0';
    /**
     * Standardwerte für checkFields(), _addTable() und fixFields()
     * @var array
     */
    public $aFields = [
        // d3picdirdump
        'PICDIRDUMP_OXID'              => [
            'sTableName'  => 'd3picdirdump',
            'sFieldName'  => 'OXID',
            'sType'       => 'CHAR(32)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'PICDIRDUMP_OXFILE'            => [
            'sTableName'  => 'd3picdirdump',
            'sFieldName'  => 'OXFILE',
            'sType'       => 'VARCHAR(128)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'PICDIRDUMP_OXFILESIZE'        => [
            'sTableName'  => 'd3picdirdump',
            'sFieldName'  => 'OXFILESIZE',
            'sType'       => 'INT(32)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'PICDIRDUMP_OXISFINISHED'      => [
            'sTableName'  => 'd3picdirdump',
            'sFieldName'  => 'OXISFINISHED',
            'sType'       => 'TINYINT(1)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'PICDIRDUMP_OXISIMPORTED'      => [
            'sTableName'  => 'd3picdirdump',
            'sFieldName'  => 'OXISIMPORTED',
            'sType'       => 'TINYINT(1)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        // d3picextdump
        'PICEXTDUMP_OXARTID'           => [
            'sTableName'  => 'd3picextdump',
            'sFieldName'  => 'OXARTID',
            'sType'       => 'CHAR(32)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'PICEXTDUMP_D3EXTPICCOUNT'     => [
            'sTableName'  => 'd3picextdump',
            'sFieldName'  => 'D3EXTPICCOUNT',
            'sType'       => 'INT(11)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'PICEXTDUMP_D3ISIMPORTED'      => [
            'sTableName'  => 'd3picextdump',
            'sFieldName'  => 'D3ISIMPORTED',
            'sType'       => 'TINYINT(1)',
            'blNull'      => true,
            'sDefault'    => 0,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        // d3importconfig
        'IMPORTCONFIG_OXID'            => [
            'sTableName'  => 'd3importconfig',
            'sFieldName'  => 'OXID',
            'sType'       => 'VARCHAR(32)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'IMPORTCONFIG_OXSHOPID'        => [
            'sTableName'  => 'd3importconfig',
            'sFieldName'  => 'OXSHOPID',
            'sType'       => 'int(11) ',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'IMPORTCONFIG_OXTITLE'         => [
            'sTableName'  => 'd3importconfig',
            'sFieldName'  => 'OXTITLE',
            'sType'       => 'VARCHAR(100)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'IMPORTCONFIG_OXVALUE'         => [
            'sTableName'  => 'd3importconfig',
            'sFieldName'  => 'OXVALUE',
            'sType'       => 'text',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        // d3importerdesc
        'IMPORTERDESC_OXID'            => [
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXID',
            'sType'       => 'VARCHAR(32)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'IMPORTERDESC_OXFIELD'         => [
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXFIELD',
            'sType'       => 'VARCHAR(50)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'IMPORTERDESC_OXDESC'          => [
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXDESC',
            'sType'       => 'VARCHAR(100)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'IMPORTERDESC_OXDESC_1'        => [
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXDESC_1',
            'sType'       => 'VARCHAR(100)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'IMPORTERDESC_OXORDER'         => [
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXORDER',
            'sType'       => 'INT(5)',
            'blNull'      => false,
            'sDefault'    => '0',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'IMPORTERDESC_OXISPIC'         => [
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXISPIC',
            'sType'       => 'TINYINT(1)',
            'blNull'      => false,
            'sDefault'    => '0',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'IMPORTERDESC_OXISDISABLED'    => [
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXISDISABLED',
            'sType'       => 'TINYINT(1)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        // oxarticles
        'OXARTICLES_D3IMPORTFLAG'      => [
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTFLAG',
            'sType'       => "VARCHAR(32)",
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true,
        ],
        'OXARTICLES_D3IMPORTPROFILEID' => [
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPROFILEID',
            'sType'       => 'VARCHAR(32)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true,
        ],
    ];

    /*******************************************************************************************/
    /***** Jobliste ****************************************************************************/
    /*******************************************************************************************/

    // auszuführende Check- und Updateanweisungen in auszuführender Reihenfolge
    /**
     * Standardwerte für checkIndizes() und fixIndizes()
     * @var array
     */
    public $aIndizes = [
        // d3pidirdump
        'PICDIRDUMP_OXID'              => [
            'sTableName'  => 'd3picdirdump',
            'sType'       => 'PRIMARY',
            'sName'       => 'OXID',
            'aFields'     => [
                'OXID' => 'OXID',
            ],
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'PICDIRDUMP_OXISFINISHED'      => [
            'sTableName'  => 'd3picdirdump',
            'sType'       => '',
            'sName'       => 'OXISFINISHED',
            'aFields'     => [
                'OXISFINISHED' => 'OXISFINISHED',
            ],
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'PICDIRDUMP_OXISIMPORTED'      => [
            'sTableName'  => 'd3picdirdump',
            'sType'       => '',
            'sName'       => 'OXISIMPORTED',
            'aFields'     => [
                'OXISIMPORTED' => 'OXISIMPORTED',
            ],
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        // d3picextdump
        'PICEXTDUMP_OXARTID'           => [
            'sTableName'  => 'd3picextdump',
            'sType'       => 'PRIMARY',
            'sName'       => 'OXARTID',
            'aFields'     => [
                'OXARTID' => 'OXARTID',
            ],
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        'PICEXTDUMP_D3ISIMPORTED'      => [
            'sTableName'  => 'd3picextdump',
            'sType'       => '',
            'sName'       => 'D3ISIMPORTED',
            'aFields'     => [
                'D3ISIMPORTED' => 'D3ISIMPORTED',
            ],
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        // d3importconfig
        'IMPORTCONFIG_OXID'            => [
            'sTableName'  => 'd3importconfig',
            'sType'       => 'PRIMARY',
            'sName'       => 'OXID',
            'aFields'     => [
                'OXID' => 'OXID',
            ],
            'blMultilang' => false,
            'blAddBreak'  => false,
        ],
        // d3importerdesc
        'IMPORTERDESC_OXID'            => [
            'sTableName'  => 'd3importerdesc',
            'sType'       => 'PRIMARY',
            'sName'       => 'OXID',
            'aFields'     => [
                'OXID' => 'OXID',
            ],
            'blMultilang' => false,
            'blAddBreak'  => true,
        ],
        // oxarticles
        'OXARTICLES_D3IMPORTFLAG'      => [
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTFLAG',
            'aFields'     => [
                'D3IMPORTFLAG' => 'D3IMPORTFLAG',
            ],
            'blMultilang' => false,
            'blAddBreak'  => true,
        ],
        'OXARTICLES_D3IMPORTPROFILEID' => [
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPROFILEID',
            'aFields'     => [
                'D3IMPORTPROFILEID' => 'D3IMPORTPROFILEID',
            ],
            'blMultilang' => false,
            'blAddBreak'  => true,
        ],
    ];

    // Standardwerte für checkFields(), _addTable() und fixFields()
    /**
     * @var array
     */
    public $aDropIndizes = [
        [
            'sTableName'  => 'd3picextdump',
            'sType'       => 'INDEX',
            'sName'       => 'OXARTID',
            'aFields'     => [
                'OXARTID' => 'OXARTID',
            ],
            'blMultilang' => false,
        ],
    ];

    // Standardwerte für checkIndizes() und fixIndizes()
    /**
     * @var string
     */
    protected $_sLib = 'd3importer';

    // in Update from 4.2.0 auf 4.2.1 DROP it cause new Indize of it is PRIMARY
    /**
     * @var array
     */
    protected $_aUpdateMethods = [
        [
            'check' => 'checkModCfgItemExist',
            // prüft auf DB-Eintrag (hier ModCfg) und fügt diese ggf. ein bzw. führt Update aus
            'do'    => 'updateModCfgItemExist',
        ],
        [
            'check' => 'checkPicdirdumpTableExist', // prüft Tabelle d3picdirdump und legt sie ggf. an
            'do'    => 'updatePicdirdumpTableExist',
        ],
        [
            'check' => 'checkPicextdumpTableExist', // prüft Tabelle d3picextdump und legt sie ggf. an
            'do'    => 'updatePicextdumpTableExist',
        ],
        [
            'check' => 'checkImportconfigTableExist', // prüft Tabelle d3importconfig und legt sie ggf. an
            'do'    => 'updateImportconfigTableExist',
        ],
        [
            'check' => 'checkImporterdescTableExist', // prüft Tabelle d3importerdesc und legt sie ggf. an
            'do'    => 'updateImporterdescTableExist',
        ],
        [
            'check' => 'checkFields',
            'do'    => 'fixFields',
        ],
        [
            'check' => 'checkIndizes',
            'do'    => 'fixIndizes',
        ],
        [
            'check' => 'checkImportDirectoryIsMissing',
            'do'    => 'addImportDirectory',
        ],
        [
            'check' => 'checkImportPicturesDirectoryIsMissing',
            'do'    => 'addImportPicturesDirectory',
        ],
        [
            'check' => 'checkImporterdescItems', // die vielen kleinen sql befehle für Tabelle d3importerdesc
            'do'    => 'updateImporterdescItems',
        ],
        [
            'check' => 'checkImporterconfigItem', // Anlegen des Demoprofils, wenn Demodata Dateien installiert wurden
            'do'    => 'updateImporterconfigItem',
        ],
        [
            'check' => 'hasToConvertXmlToJson',
            'do'    => 'convertXmlConfigurations',
        ],
        [
            'check' => 'hasStringArticleSettings',
            'do'    => 'convertStringArticleSettings',
        ],
        [
            'check' => 'hasUpdateToAttibuteNoticeShown',
            'do'    => 'showUpdateToAttibuteNotice',
        ],
        [
            'check' => 'checkImporterdescUpdate',
            'do'    => 'updateImporterdescUpdate',
        ],
        [
            'check' => 'checkModCfgSameRevision', // prüft auf nachgezogene Revisionsnummer und überträgt diese ggf.
            'do'    => 'updateModCfgSameRevision',
        ],
    ];

    /**
     * d3_importer_Setup_InstallRoutine constructor.
     *
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __construct()
    {
        parent::__construct();

        $this->addPictureDatabaseFieldDefinitions();
        $this->setOxconfigEntriesOnFirstInstallation();
    }

    /**
     * @return void
     * @throws ConnectionException
     */
    public function addPictureDatabaseFieldDefinitions(): void
    {
        /** @var Shop $shop */
        $shop = Registry::getConfig()->getActiveShop();
        $sCurrentShopId = $shop->getId();
        /** @var ShopList $oShopList */
        $oShopList = $this->getShopList();

        $iMaxPicCount = 0;

        /** @var Shop $oShop */
        foreach ($oShopList as $oShop) {
            $this->_changeToShop($oShop->getId());

            $iPicCount = Registry::getConfig()->getConfigParam('iPicCount');

            $iMaxPicCount = max( $iPicCount, $iMaxPicCount );
        }

        $this->_changeToShop($sCurrentShopId);

        for ($i = 1; $i <= $iMaxPicCount; $i++) {
            $this->aFields['OXARTICLES_D3IMPORTPIC'.$i] = [
                'sTableName'  => 'oxarticles',
                'sFieldName'  => 'D3IMPORTPIC'.$i,
                'sType'       => 'VARCHAR(255)',
                'blNull'      => false,
                'sDefault'    => false,
                'sComment'    => false,
                'sExtra'      => '',
                'blMultilang' => false,
                'blAddBreak'  => true,
            ];

            $this->aIndizes['OXARTICLES_D3IMPORTPIC'.$i] = [
                'sTableName'  => 'oxarticles',
                'sType'       => '',
                'sName'       => 'D3IMPORTPIC'.$i,
                'aFields'     => [
                    'D3IMPORTPIC'.$i => 'D3IMPORTPIC'.$i,
                ],
                'blMultilang' => false,
                'blAddBreak'  => true,
            ];
        }
    }

    /**
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    protected function setOxconfigEntriesOnFirstInstallation(): void
    {
        $oConfig        = Registry::getConfig();
        $sCurrentShopid = $oConfig->getShopId();
        /** @var Shop $oShop */
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            $oConfig->setShopId($oShop->getId());

            $qb = ContainerFactory::getInstance()->getContainer()->get(QueryBuilderFactoryInterface::class)->create();
            $qb->select(1)
                ->from('d3_cfg_mod')
                ->where(
                    $qb->expr()->and(
                        $qb->expr()->in('oxmodid', [
                            $qb->createNamedParameter('d3importer'),
                            $qb->createNamedParameter('d3_importer')
                        ]),
                        $qb->expr()->eq('oxshopid', $qb->createNamedParameter($oShop->getId()))
                    )
                )
                ->setMaxResults(1);

            if ( ! $qb->execute()->fetchOne() ) {
                Registry::getConfig()->saveShopConfVar(
                    'bool',
                    'd3_importer_update_old_attibutes_removed',
                    true,
                    $oShop->getId()
                );
            }
        }
        $oConfig->setShopId($sCurrentShopid);
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updatePicdirdumpTableExist()
    {
        if ($this->checkPicdirdumpTableExist()) {
            return $this->_addTable2('d3picdirdump', $this->aFields, $this->aIndizes, 'D3 Importer Items', 'MyISAM');
        }

        return true;
    }

    /**
     *  Nachfolgend die Prüfung
     *  ob Importereigene Tabellen
     *  vorhanden sind.
     *  Wenn nicht werden diese angelegt.

     */
    /**
     * @return bool TRUE, if table is missing
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkPicdirdumpTableExist()
    {
        return $this->_checkTableNotExist('d3picdirdump');
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updatePicextdumpTableExist()
    {
        if ($this->checkPicextdumpTableExist()) {
            return $this->_addTable2('d3picextdump', $this->aFields, $this->aIndizes, 'D3 Importer Items', 'MyISAM');
        }

        return true;
    }

    /**
     * @return bool TRUE, if table is missing
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkPicextdumpTableExist()
    {
        return $this->_checkTableNotExist('d3picextdump');
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateImportconfigTableExist(): bool
    {
        $blRet = $this->checkImportconfigTableExist();

        if ($blRet) {
            return $this->_addTable2(
                'd3importconfig',
                $this->aFields,
                $this->aIndizes,
                'D3 Importer Items',
                'MyISAM'
            );
        }

        return $blRet;
    }

    /**
     * @return bool TRUE, if table is missing
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkImportconfigTableExist(): bool
    {
        return $this->_checkTableNotExist('d3importconfig');
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateImporterdescTableExist(): bool
    {
        if ($this->checkImporterdescTableExist()) {
            return $this->_addTable2(
                'd3importerdesc',
                $this->aFields,
                $this->aIndizes,
                'D3 Importer Items',
                'MyISAM'
            );
        }

        return true;
    }

    /**
     * @return bool TRUE, if table is missing
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkImporterdescTableExist(): bool
    {
        return $this->_checkTableNotExist('d3importerdesc');
    }

    /**
     * @return bool
     */
    public function checkImportDirectoryIsMissing(): bool
    {
        $dir = Registry::getConfig()->getConfigParam('sShopDir').'/import';

        return !file_exists($dir) && !is_dir($dir);
    }

    public function addImportDirectory(): void
    {
        if ($this->checkImportDirectoryIsMissing()) {
            $dir = rtrim(Registry::getConfig()->getConfigParam('sShopDir'), '/').'/import';
            $this->createImportDirectory($dir);
        }
    }

    /**
     * @return bool
     */
    public function checkImportPicturesDirectoryIsMissing(): bool
    {
        $dir = Registry::getConfig()->getConfigParam('sShopDir').'/import/pictures';

        return !file_exists($dir) && !is_dir($dir);
    }

    public function addImportPicturesDirectory(): void
    {
        if ($this->checkImportPicturesDirectoryIsMissing()) {
            $dir = rtrim(Registry::getConfig()->getConfigParam('sShopDir'), '/').'/import/pictures';
            $this->createImportDirectory($dir);
        }
    }

    protected function createImportDirectory($dir): bool
    {
        try {
            $this->setUpdateBreak(false);
            $this->setActionLog('MSG', sprintf(Registry::getLang()->translateString('D3_IMPORTER_SETUP_CREATEDIRECTORY'), $dir), $this->getInitialExecMethod(__METHOD__));

            if ($this->hasExecute()) {
                $filesystem = new Filesystem();
                $filesystem->mkdir($dir);
            }

            $htaContent = <<< 'HTA'
                <FilesMatch .*>
                    <IfModule mod_authz_core.c>
                        Require all denied
                    </IfModule>
                    <IfModule !mod_authz_core.c>
                        Order allow,deny
                        Deny from all
                    </IfModule>
                </FilesMatch>
                HTA;

            $this->setActionLog('MSG', sprintf(Registry::getLang()->translateString('D3_CFG_MOD_UPDATE_JOB_FILECONTENT'), $dir . '/.htaccess') . PHP_EOL . PHP_EOL . $htaContent, $this->getInitialExecMethod(__METHOD__));

            $this->setActionLog('MSG', sprintf(Registry::getLang()->translateString('D3_CFG_MOD_UPDATE_JOB_FILECONTENT'), $dir . '/index.html'), $this->getInitialExecMethod(__METHOD__));

            if ($this->hasExecute()) {
                $filesystem = new Filesystem();
                $filesystem->touch($dir . '/.htaccess');
                $filesystem->dumpFile($dir . '/.htaccess', $htaContent);
                $filesystem->touch($dir . '/index.html');
            }
        } catch (IOException $exception) {
            $this->setErrorStatus(true);
            $this->setErrorMessage($exception->getMessage());
        }

        return true;
    }

    /**
     * @return bool
     * @throws DatabaseConnectionException
     */
    public function checkImporterdescItems(): bool
    {
        return $this->_checkUpdateFile('d3/importer/Setup/d3importer_importerdescQuerys.php');
    }

    /**
     * @return bool
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateImporterdescItems(): bool
    {
        return $this->_doUpdateFile('d3/importer/Setup/d3importer_importerdescQuerys.php');
    }

    /**
     * Installiere ein Testimportprofil.
     *
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateImporterconfigItem(): bool
    {
        $blHasNoExample = false;

        if ($this->checkImporterconfigItem()) {
            /** @var Shop $oShop */
            foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
                $aImportconfigWhere = [
                    'oxid'     => md5('d3importconfig_ex_' . $oShop->getId()),
                    'oxshopid' => $oShop->getId(),
                ];

                $blHasNoExample = $this->_checkTableItemNotExist('d3importconfig', $aImportconfigWhere);

                $aWhere = [
                    'oxvarname' => 'd3importconfig_ex_' . $oShop->getId(),
                    'oxshopid'  => $oShop->getId(),
                    'oxvartype' => 'bool',
                ];

                $blHasAlreadyExampleUsed = $this->_checkTableItemNotExist('oxconfig', $aWhere);
                if ($blHasNoExample && $blHasAlreadyExampleUsed) {
                    $aInsertFields  = [
                        'OXID'     => [
                            'content'      => md5('d3importconfig_ex_' . $oShop->getId()),
                            'force_update' => true,
                            'use_quote'    => true,
                        ],
                        'OXSHOPID' => [
                            'content'      => $oShop->getId(),
                            'force_update' => true,
                            'use_quote'    => true,
                        ],
                        'OXTITLE'  => [
                            'content'      => 'Beispielprofil mit Beispielliste.csv',
                            'force_update' => false,
                            'use_quote'    => true,
                        ],
                        'OXVALUE'  => [
                            'content'      => '{"d3_importer_category":{"IMPORTTYPE":"import","ASSIGNIDENT":"oxtitle","IMPORTCOLUM":{"1":"24"},"COLUMSEPARATOR":{"1":"|"}},"d3_importer_cross":{"IMPORTTYPE_CROSS":"import","IMPORTCOLUM_CROSS":"25","COLUMSEPARATOR_CROSS":"|","IMPORTTYPE_ACC":"import","IMPORTCOLUM_ACC":"26","COLUMSEPARATOR_ACC":"|"},"d3_importer_price2art":{"IMPORTTYPE":"import","IMPORTCOLUM":{"1":{"PRICE":"11","FROM":"12","TO":"13"},"2":{"PRICE":"14","FROM":"15","TO":"16"},"3":{"PRICE":"17","FROM":"18","TO":"19"}}},"d3_importer_afterimport":{"AFTERIMPORTTICKER":"100"},"d3_picture_main":{"aXMLPictureParams":[{"IMPORTFIELD":"d3importpic1","IMAGEFIELDS":{"oxpic1":"1"}},{"IMPORTFIELD":"d3importpic2","IMAGEFIELDS":{"oxpic2":"1"}},{"IMPORTFIELD":"d3importpic3","IMAGEFIELDS":{"oxpic3":"1"}}],"aPictureSettings":{"iMaxPictureCount":"50","iMaxImportCount":"5","iOverrideExternPictures":"0"}},"d3_importer_fields":{"fields":{"0":"oxartnum","1":"oxean","2":"oxtitle","3":"oxtitle_1","4":"oxshortdesc","5":"oxshortdesc_1","6":"oxlongdesc","7":"oxlongdesc_1","8":"oxsearchkeys","9":"oxsearchkeys_1","10":"oxprice","20":"oxstock","21":"d3importpic1","22":"d3importpic2","23":"d3importpic3"},"update":{"1":"1","2":"1","3":"1","4":"1","5":"1","6":"1","7":"1","8":"1","9":"1","10":"1","20":"1","21":"1","22":"1","23":"1"}},"d3_importer_attrib":{"IMPORTTYPE":"import","IMPORTCOLUM":{"1":{"NAME":{"de":"38","en":"39"},"VALUE":{"de":"40","en":"41"}},"2":{"NAME":{"de":"42","en":"43"},"VALUE":{"de":"44","en":"45"}}}},"d3_importer_selectlist":{"IMPORTTYPE":"clearbefore","IMPORTCOLUM":{"1":{"NAME":"27","ALTNAME":"Auswahl","VALUE":"28","SEPARATOR":"|","SEPARATOR_PRICE":"@"},"2":{"NAME":"29","ALTNAME":"Auswahl","VALUE":"30","SEPARATOR":"|","SEPARATOR_PRICE":"@"}}},"d3_importer_variants":{"IMPORTTYPE":"import","IMPORTCOLUM":"31","FIELD":{"oxvarname":"32","oxvarname_1":"34","oxvarselect":"33","oxvarselect_1":"35"}},"d3_importer_vendors":{"VENDOR":{"IMPORTTYPE":"import","IMPORTCOLUM":"36"},"MANUFACTURER":{"IMPORTTYPE":"import","IMPORTCOLUM":"37"}},"d3_importer_config":{"IMPORTTYPE":"standard","IMPORTTICKER":"100","OMITLINES":"1","ASSIGNIDENT":"oxartnum","aArticleSettings":["oxstock => 10"],"aDefaultBooleanSettings":{"aTrueSettings":["true","TRUE","Ja","ja"],"aFalseSettings":["false","FALSE","Nein","nein"]},"PRICEPLUSPERCENT":"0","PRICEDECIMALROUND":"0","ARTNUM2OXID":"0","MD54OXID":"0"},"d3_importer_mall":{"IMPORTCOLUM_MALL":"46","COLUMSEPARATOR_MALL":","},"d3_importer_main":{"FILE":"demo_artikel_test.csv","FILESEPARATOR":";","TEXTSEPARATOR":"\"","FILELENGTH":"844","FILEROWS":"11","FILECOLUMS":"47"}}',
                            'force_update' => false,
                            'use_quote'    => true,
                        ],
                    ];
                    $blHasNoExample = $this->_updateTableItem2('d3importconfig', $aInsertFields, $aImportconfigWhere);

                    if ($blHasNoExample) {
                        $aInsertFields = [
                            'OXID'      => [
                                'content'      => md5('d3importconfig_ex_' . $oShop->getId()),
                                'force_update' => true,
                                'use_quote'    => true,
                            ],
                            'OXSHOPID'  => [
                                'content'      => $oShop->getId(),
                                'force_update' => true,
                                'use_quote'    => true,
                            ],
                            'OXVARNAME' => [
                                'content'      => 'd3importconfig_ex_' . $oShop->getId(),
                                'force_update' => false,
                                'use_quote'    => true,
                            ],
                            'OXVARTYPE' => [
                                'content'      => 'bool',
                                'force_update' => false,
                                'use_quote'    => true,
                            ],
                        ];
                        $this->_updateTableItem2('oxconfig', $aInsertFields, $aWhere);
                    }
                }
            }
        }

        return $blHasNoExample;
    }

    /**
     * Anlegen der Felder, wenn nicht vorhanden...
     * für: oxarticles
     *      d3picdirdump
     *      d3picextdump
     *      d3importconfig
     */

    /**
     * Hat der Shop ein Testimportprofil?
     *
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws ConnectionException
     */
    public function checkImporterconfigItem(): bool
    {
        if (!file_exists(rtrim(Registry::getConfig()->getConfigParam('sShopDir'), '/').'/import/demo_artikel_test.csv')
            && !file_exists(rtrim(Registry::getConfig()->getConfigParam('sShopDir'), '/').'/import/demo_artikel_komplett.csv')
        ) {
            return false;
        }

        $blHasNoExample = false;
        /** @var Shop $oShop */
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            $aWhere = [
                'oxid'     => md5('d3importconfig_ex_' . $oShop->getId()),
                'oxshopid' => $oShop->getId(),
            ];

            $blHasNoExample = $this->_checkTableItemNotExist('d3importconfig', $aWhere);

            $aWhere = [
                'oxvarname' => 'd3importconfig_ex_' . $oShop->getId(),
                'oxshopid'  => $oShop->getId(),
            ];

            $blExampleNotUsed = $this->_checkTableItemNotExist('oxconfig', $aWhere);

            $blHasNoExample = $blHasNoExample && $blExampleNotUsed;

            if ($blHasNoExample) {
                return $blHasNoExample;
            }
        }

        return $blHasNoExample;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateModCfgSameRevision(): bool
    {
        if ($this->checkModCfgSameRevision()) {
            return $this->_updateModCfgSameRevision($this->sModKey);
        }

        return false;
    }

    /**
     * @return bool
     *   FALSE if Revisionnumber is the same
     *   TRUE if Update Revisionnumber needed
     * @throws DBALException
     * @throws DatabaseConnectionException
     */
    public function checkModCfgSameRevision(): bool
    {
        return $this->_checkModCfgSameRevision($this->sModKey);
    }

    /**
     * @return bool
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws NotFoundExceptionInterface
     * @throws JsonException
     */
    public function convertXmlConfigurations(): bool
    {
        if ($this->hasToConvertXmlToJson()) {
            /** @var Shop $oShop */
            foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
                $qb = ContainerFactory::getInstance()->getContainer()->get(QueryBuilderFactoryInterface::class)->create();
                $qb->select('oxvalue', 'oxid')
                    ->from('d3importconfig')
                    ->where(
                        $qb->expr()->eq('oxshopid', $qb->createNamedParameter($oShop->getId()))
                    );
                $aConfigurations = $qb->execute()->fetchAllAssociative();

                if (empty($aConfigurations)) {
                    continue;
                }

                foreach ($aConfigurations as $aValue) {
                    $blIsJsonConfiguration = (bool)json_decode($aValue['oxvalue'], true, 512, JSON_THROW_ON_ERROR);
                    if ($blIsJsonConfiguration) {
                        continue;
                    }

                    $sXmlConfiguration = unserialize(base64_decode($aValue['oxvalue']));
                    $migrator = oxNew(xmlToJsonMigrator::class);
                    $aNewConfiguration = $migrator->migrate($sXmlConfiguration);
                    $sJsonConfiguration = json_encode($aNewConfiguration, JSON_THROW_ON_ERROR);

                    $aInsertFields = [
                        'OXVALUE' => [
                            'content'      => $sJsonConfiguration,
                            'force_update' => true,
                            'use_quote'    => true,
                        ],
                    ];
                    $blReturn      = $this->_updateTableItem2(
                        'd3importconfig',
                        $aInsertFields,
                        ['oxid' => $aValue['oxid']]
                    );

                    if ( ! $blReturn ) {
                        return false;
                    }
                }
            }
        }

        return true;
    }

    /**
     * Returns true if xml
     *
     * @return bool
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @throws JsonException
     */
    public function hasToConvertXmlToJson(): bool
    {
        /** @var Shop $oShop */
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            $qb = ContainerFactory::getInstance()->getContainer()->get(QueryBuilderFactoryInterface::class)->create();
            $qb->select('oxvalue', 'oxid')
               ->from('d3importconfig')
               ->where(
                   $qb->expr()->eq('oxshopid', $qb->createNamedParameter($oShop->getId()))
               );
            $aConfigurations = $qb->execute()->fetchAllAssociative();

            if (empty($aConfigurations)) {
                continue;
            }

            foreach ($aConfigurations as $aValue) {
                $blIsJsonConfiguration   = (bool)json_decode($aValue['oxvalue'], true, 512, JSON_THROW_ON_ERROR);
                $blIsBase64Configuration = (bool)base64_decode($aValue['oxvalue']);
                if ( $blIsJsonConfiguration ) {
                    continue;
                }
                if (!$blIsBase64Configuration) {
                    continue;
                }
                return true;
            }
        }

        return false;
    }

    /**
     * @return bool
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws JsonException
     * @throws NotFoundExceptionInterface
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     */
    public function convertStringArticleSettings(): bool
    {
        if ($this->hasStringArticleSettings()) {
            $oConfig        = Registry::getConfig();
            $sCurrentShopid = $oConfig->getShopId();
            /** @var Shop $oShop */
            foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
                $oConfig->setShopId($oShop->getId());
                $oModuleConfiguration = d3_cfg_mod::getNoCache('d3importer');
                $mArticleSettings     = $oModuleConfiguration->getValue('aArticleSettings');

                if (is_string($mArticleSettings)) {
                    $oModuleConfiguration->setValue('aArticleSettings', explode("\n", $mArticleSettings));
                    $oModuleConfiguration->save();
                }

                $qb = ContainerFactory::getInstance()->getContainer()->get(QueryBuilderFactoryInterface::class)->create();
                $qb->select('oxvalue', 'oxid')
                   ->from('d3importconfig')
                   ->where(
                       $qb->expr()->eq('oxshopid', $qb->createNamedParameter($oShop->getId()))
                   );
                $aConfigurations = $qb->execute()->fetchAllAssociative();

                if (empty($aConfigurations)) {
                    continue;
                }

                foreach ($aConfigurations as $aValue) {
                    $aIsJsonConfiguration = json_decode($aValue['oxvalue'], true, 512, JSON_THROW_ON_ERROR);

                    if ( ! (bool) $aIsJsonConfiguration ) {
                        continue;
                    }

                    if ( ! isset( $aIsJsonConfiguration['d3_importer_config']['aArticleSettings'] ) ) {
                        continue;
                    }

                    if (is_string($aIsJsonConfiguration['d3_importer_config']['aArticleSettings'])) {
                        $mArticleSettings                                               = $aIsJsonConfiguration['d3_importer_config']['aArticleSettings'];
                        $aIsJsonConfiguration['d3_importer_config']['aArticleSettings'] = explode(
                            "\n",
                            $mArticleSettings
                        );

                        $sJsonConfiguration = json_encode($aIsJsonConfiguration, JSON_THROW_ON_ERROR);
                        $aInsertFields      = [
                            'OXVALUE' => [
                                'content'      => $sJsonConfiguration,
                                'force_update' => true,
                                'use_quote'    => true,
                            ],
                        ];

                        $blReturn = $this->_updateTableItem2(
                            'd3importconfig',
                            $aInsertFields,
                            ['oxid' => $aValue['oxid']]
                        );

                        if (false == $blReturn) {
                            return $blReturn;
                        }
                    }
                }
            }
            $oConfig->setShopId($sCurrentShopid);
        }

        return true;
    }

    /**
     * @return bool
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws JsonException
     * @throws NotFoundExceptionInterface
     */
    public function hasStringArticleSettings(): bool
    {
        $oConfig        = Registry::getConfig();
        $sCurrentShopid = $oConfig->getShopId();
        /** @var Shop $oShop */
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            $oConfig->setShopId($oShop->getId());
            $oModuleConfiguration = d3_cfg_mod::getNoCache('d3importer');
            $mArticleSettings     = $oModuleConfiguration->getValue('aArticleSettings');

            if (is_string($mArticleSettings)) {
                $oConfig->setShopId($sCurrentShopid);

                return true;
            }

            $qb = ContainerFactory::getInstance()->getContainer()->get(QueryBuilderFactoryInterface::class)->create();
            $qb->select('oxvalue', 'oxid')
               ->from('d3importconfig')
               ->where(
                   $qb->expr()->eq('oxshopid', $qb->createNamedParameter($oShop->getId()))
               );
            $aConfigurations = $qb->execute()->fetchAllAssociative();

            if (empty($aConfigurations)) {
                continue;
            }

            foreach ($aConfigurations as $aValue) {
                $aIsJsonConfiguration = json_decode($aValue['oxvalue'], true, 512, JSON_THROW_ON_ERROR);

                if (false == (bool)$aIsJsonConfiguration) {
                    continue;
                }

                if (false == isset($aIsJsonConfiguration['d3_importer_config']['aArticleSettings'])) {
                    continue;
                }

                if (is_string($aIsJsonConfiguration['d3_importer_config']['aArticleSettings'])) {
                    return true;
                }
            }
        }
        $oConfig->setShopId($sCurrentShopid);

        return false;
    }

    /**
     *
     * @return bool
     */
    public function showUpdateToAttibuteNotice(): bool
    {
        return $this->showConfigConfirmMessage(
            'd3_importer_update_old_attibutes_removed',
            'D3_IMPORTER_UPDATE_OLD_ATTIBUTES_REMOVED'
        );
    }

    /**
     *
     * @return bool
     */
    public function hasUpdateToAttibuteNoticeShown(): bool
    {
        return $this->hasNoConfirmMessageConfigConfirmation('d3_importer_update_old_attibutes_removed');
    }

    /**
     * @return bool
     * @throws DatabaseConnectionException
     */
    public function checkImporterdescUpdate(): bool
    {
        return $this->_checkUpdateFile('d3/importer/Setup/importerdescUpdates.php');
    }

    /**
     * @return bool
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateImporterdescUpdate(): bool
    {
        return $this->_doUpdateFile('d3/importer/Setup/importerdescUpdates.php');
    }
}
