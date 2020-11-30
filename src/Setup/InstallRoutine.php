<?php

use D3\ModCfg\Application\Model\Configuration\d3_cfg_mod;
use D3\ModCfg\Application\Model\Install\d3install_updatebase;
use Doctrine\DBAL\DBALException;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Exception\ConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Application\Model\Shop;

/**
 * Class d3importer_update
 */
class d3_importer_Setup_InstallRoutine extends d3install_updatebase
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
    public $sModVersion = '5.0.4.1';
    /**
     * @var string
     */
    public $sModRevision = '5041';
    /**
     * @var string
     */
    public $sBaseConf = 'dc9v2==RTdZNG5uYmk2Sk50T0gyTnV1STZyQUNQMWg0Snd1YitudFpXMWRYVVg1UG5HSmJ0dGZqQWZIW
FVKdUZYSmU5dGNaQld4ZDdhVkg2dTB1Q2N1VjZDaVFJTjMzWCtnSndTNm1rV2g1YTJIaFNmZFZIZ1JQM
Us2V0dvQ2E3V3RPOEVpY0NJVTJVeDJPUEMvaHhIMGg3VlZzemVpUjhpWFNSckN6UGR0dXhaWFpZS3d4N
1MwcWc3Um9Qc2VMSXdpOXorYW5hK3FObjVZdk0yKzhqSHBMNXJsYlRpdnRRdW55bVVaRWxRS2xhV3RHQ
VI0dFAwYjRXVHdhdmc0TWdwbTB6YTVCTmgvbzluT3Uzais2UHRlUG5oS093ckFuTWxwbWkyZ1BvTXEra
kFlNEptS01uMkRPZWx5VGNnVDc1ZmFXMkc2ZkYrS2Raa3NDeDZVclZSdVd3bmt3PT0=';
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
    public $sMinModCfgVersion = '5.3.0.0';
    /**
     * Standardwerte für checkFields(), _addTable() und fixFields()
     * @var array
     */
    public $aFields = array(
        // d3picdirdump
        'PICDIRDUMP_OXID'              => array(
            'sTableName'  => 'd3picdirdump',
            'sFieldName'  => 'OXID',
            'sType'       => 'CHAR(32)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'PICDIRDUMP_OXFILE'            => array(
            'sTableName'  => 'd3picdirdump',
            'sFieldName'  => 'OXFILE',
            'sType'       => 'VARCHAR(128)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'PICDIRDUMP_OXFILESIZE'        => array(
            'sTableName'  => 'd3picdirdump',
            'sFieldName'  => 'OXFILESIZE',
            'sType'       => 'INT(32)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'PICDIRDUMP_OXISFINISHED'      => array(
            'sTableName'  => 'd3picdirdump',
            'sFieldName'  => 'OXISFINISHED',
            'sType'       => 'TINYINT(1)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'PICDIRDUMP_OXISIMPORTED'      => array(
            'sTableName'  => 'd3picdirdump',
            'sFieldName'  => 'OXISIMPORTED',
            'sType'       => 'TINYINT(1)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        // d3picextdump
        'PICEXTDUMP_OXARTID'           => array(
            'sTableName'  => 'd3picextdump',
            'sFieldName'  => 'OXARTID',
            'sType'       => 'CHAR(32)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'PICEXTDUMP_D3EXTPICCOUNT'     => array(
            'sTableName'  => 'd3picextdump',
            'sFieldName'  => 'D3EXTPICCOUNT',
            'sType'       => 'INT(11)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'PICEXTDUMP_D3ISIMPORTED'      => array(
            'sTableName'  => 'd3picextdump',
            'sFieldName'  => 'D3ISIMPORTED',
            'sType'       => 'TINYINT(1)',
            'blNull'      => true,
            'sDefault'    => 0,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        // d3importconfig
        'IMPORTCONFIG_OXID'            => array(
            'sTableName'  => 'd3importconfig',
            'sFieldName'  => 'OXID',
            'sType'       => 'VARCHAR(32)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'IMPORTCONFIG_OXSHOPID'        => array(
            'sTableName'  => 'd3importconfig',
            'sFieldName'  => 'OXSHOPID',
            'sType'       => 'int(11) ',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'IMPORTCONFIG_OXTITLE'         => array(
            'sTableName'  => 'd3importconfig',
            'sFieldName'  => 'OXTITLE',
            'sType'       => 'VARCHAR(100)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'IMPORTCONFIG_OXVALUE'         => array(
            'sTableName'  => 'd3importconfig',
            'sFieldName'  => 'OXVALUE',
            'sType'       => 'text',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        // d3importerdesc
        'IMPORTERDESC_OXID'            => array(
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXID',
            'sType'       => 'VARCHAR(32)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'IMPORTERDESC_OXFIELD'         => array(
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXFIELD',
            'sType'       => 'VARCHAR(50)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'IMPORTERDESC_OXDESC'          => array(
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXDESC',
            'sType'       => 'VARCHAR(100)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'IMPORTERDESC_OXDESC_1'        => array(
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXDESC_1',
            'sType'       => 'VARCHAR(100)',
            'blNull'      => false,
            'sDefault'    => '',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'IMPORTERDESC_OXORDER'         => array(
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXORDER',
            'sType'       => 'INT(5)',
            'blNull'      => false,
            'sDefault'    => '0',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'IMPORTERDESC_OXISPIC'         => array(
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXISPIC',
            'sType'       => 'TINYINT(1)',
            'blNull'      => false,
            'sDefault'    => '0',
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'IMPORTERDESC_OXISDISABLED'    => array(
            'sTableName'  => 'd3importerdesc',
            'sFieldName'  => 'OXISDISABLED',
            'sType'       => 'TINYINT(1)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        // oxarticles
        'OXARTICLES_D3IMPORTFLAG'      => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTFLAG',
            'sType'       => "VARCHAR(32)",
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPROFILEID' => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPROFILEID',
            'sType'       => 'VARCHAR(32)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC1'      => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC1',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC2'      => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC2',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC3'      => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC3',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC4'      => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC4',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC5'      => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC5',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC6'      => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC6',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC7'      => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC7',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC8'      => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC8',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC9'      => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC9',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC10'     => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC10',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC11'     => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC11',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC12'     => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC12',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC13'     => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC13',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC14'     => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC14',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC15'     => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC15',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC16'     => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC16',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC17'     => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC17',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC18'     => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC18',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC19'     => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC19',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC20'     => array(
            'sTableName'  => 'oxarticles',
            'sFieldName'  => 'D3IMPORTPIC20',
            'sType'       => 'VARCHAR(255)',
            'blNull'      => false,
            'sDefault'    => false,
            'sComment'    => false,
            'sExtra'      => '',
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
    );

    /*******************************************************************************************/
    /***** Jobliste ****************************************************************************/
    /*******************************************************************************************/

    // auszuführende Check- und Updateanweisungen in auszuführender Reihenfolge
    /**
     * Standardwerte für checkIndizes() und fixIndizes()
     * @var array
     */
    public $aIndizes = array(
        // d3pidirdump
        'PICDIRDUMP_OXID'              => array(
            'sTableName'  => 'd3picdirdump',
            'sType'       => 'PRIMARY',
            'sName'       => 'OXID',
            'aFields'     => array(
                'OXID' => 'OXID',
            ),
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'PICDIRDUMP_OXISFINISHED'      => array(
            'sTableName'  => 'd3picdirdump',
            'sType'       => '',
            'sName'       => 'OXISFINISHED',
            'aFields'     => array(
                'OXISFINISHED' => 'OXISFINISHED',
            ),
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'PICDIRDUMP_OXISIMPORTED'      => array(
            'sTableName'  => 'd3picdirdump',
            'sType'       => '',
            'sName'       => 'OXISIMPORTED',
            'aFields'     => array(
                'OXISIMPORTED' => 'OXISIMPORTED',
            ),
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        // d3picextdump
        'PICEXTDUMP_OXARTID'           => array(
            'sTableName'  => 'd3picextdump',
            'sType'       => 'PRIMARY',
            'sName'       => 'OXARTID',
            'aFields'     => array(
                'OXARTID' => 'OXARTID',
            ),
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        'PICEXTDUMP_D3ISIMPORTED'      => array(
            'sTableName'  => 'd3picextdump',
            'sType'       => '',
            'sName'       => 'D3ISIMPORTED',
            'aFields'     => array(
                'D3ISIMPORTED' => 'D3ISIMPORTED',
            ),
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        // d3importconfig
        'IMPORTCONFIG_OXID'            => array(
            'sTableName'  => 'd3importconfig',
            'sType'       => 'PRIMARY',
            'sName'       => 'OXID',
            'aFields'     => array(
                'OXID' => 'OXID',
            ),
            'blMultilang' => false,
            'blAddBreak'  => false
        ),
        // d3importerdesc
        'IMPORTERDESC_OXID'            => array(
            'sTableName'  => 'd3importerdesc',
            'sType'       => 'PRIMARY',
            'sName'       => 'OXID',
            'aFields'     => array(
                'OXID' => 'OXID',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        // oxarticles
        'OXARTICLES_D3IMPORTFLAG'      => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTFLAG',
            'aFields'     => array(
                'D3IMPORTFLAG' => 'D3IMPORTFLAG',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPROFILEID' => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPROFILEID',
            'aFields'     => array(
                'D3IMPORTPROFILEID' => 'D3IMPORTPROFILEID',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC1'      => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC1',
            'aFields'     => array(
                'D3IMPORTPIC1' => 'D3IMPORTPIC1',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC2'      => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC2',
            'aFields'     => array(
                'D3IMPORTPIC2' => 'D3IMPORTPIC2',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC3'      => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC3',
            'aFields'     => array(
                'D3IMPORTPIC3' => 'D3IMPORTPIC3',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC4'      => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC4',
            'aFields'     => array(
                'D3IMPORTPIC4' => 'D3IMPORTPIC4',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC5'      => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC5',
            'aFields'     => array(
                'D3IMPORTPIC5' => 'D3IMPORTPIC5',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC6'      => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC6',
            'aFields'     => array(
                'D3IMPORTPIC6' => 'D3IMPORTPIC6',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC7'      => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC7',
            'aFields'     => array(
                'D3IMPORTPIC7' => 'D3IMPORTPIC7',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC8'      => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC8',
            'aFields'     => array(
                'D3IMPORTPIC8' => 'D3IMPORTPIC8',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC9'      => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC9',
            'aFields'     => array(
                'D3IMPORTPIC9' => 'D3IMPORTPIC9',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC10'     => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC10',
            'aFields'     => array(
                'D3IMPORTPIC10' => 'D3IMPORTPIC10',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC11'     => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC11',
            'aFields'     => array(
                'D3IMPORTPIC11' => 'D3IMPORTPIC11',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC12'     => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC12',
            'aFields'     => array(
                'D3IMPORTPIC12' => 'D3IMPORTPIC12',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC13'     => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC13',
            'aFields'     => array(
                'D3IMPORTPIC13' => 'D3IMPORTPIC13',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC14'     => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC14',
            'aFields'     => array(
                'D3IMPORTPIC14' => 'D3IMPORTPIC14',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC15'     => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC15',
            'aFields'     => array(
                'D3IMPORTPIC15' => 'D3IMPORTPIC15',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC16'     => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC16',
            'aFields'     => array(
                'D3IMPORTPIC16' => 'D3IMPORTPIC16',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC17'     => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC17',
            'aFields'     => array(
                'D3IMPORTPIC17' => 'D3IMPORTPIC17',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC18'     => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC18',
            'aFields'     => array(
                'D3IMPORTPIC18' => 'D3IMPORTPIC18',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC19'     => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC19',
            'aFields'     => array(
                'D3IMPORTPIC19' => 'D3IMPORTPIC19',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
        'OXARTICLES_D3IMPORTPIC20'     => array(
            'sTableName'  => 'oxarticles',
            'sType'       => '',
            'sName'       => 'D3IMPORTPIC20',
            'aFields'     => array(
                'D3IMPORTPIC110' => 'D3IMPORTPIC20',
            ),
            'blMultilang' => false,
            'blAddBreak'  => true
        ),
    );

    // Standardwerte für checkFields(), _addTable() und fixFields()
    /**
     * @var array
     */
    public $aDropIndizes = array(
        array(
            'sTableName'  => 'd3picextdump',
            'sType'       => 'INDEX',
            'sName'       => 'OXARTID',
            'aFields'     => array(
                'OXARTID' => 'OXARTID',
            ),
            'blMultilang' => false,
        ),
    );

    // Standardwerte für checkIndizes() und fixIndizes()
    /**
     * @var string
     */
    protected $_sLib = 'd3importer';

    // in Update from 4.2.0 auf 4.2.1 DROP it cause new Indize of it is PRIMARY
    /**
     * @var array
     */
    protected $_aUpdateMethods = array(

        array(
            'check' => 'checkOldModId', // 4.2.0 auf 4.2.1
            'do'    => 'updateOldModId'
        ),
        // UPDATE `d3_cfg_mod` SET `OXMODID` = 'd3importer' WHERE `OXMODID` = 'd3_importer';

        array(
            'check' => 'checkModCfgItemExist',
            // prüft auf DB-Eintrag (hier ModCfg) und fügt diese ggf. ein bzw. führt Update aus
            'do'    => 'updateModCfgItemExist'
        ),
        array(
            'check' => 'checkTableTdimportconfigExist', // 3.0.x auf 3.2.3
            'do'    => 'dropTableTdimportconfigExist'
        ),
        // DROP TABLE IF EXISTS `tdimportconfig`;
        array(
            'check' => 'checkTableTdimporterdescExist',
            'do'    => 'dropTableTdimporterdescExist'
        ),
        // DROP TABLE IF EXISTS `tdimporterdesc`;
        array(
            'check' => 'checkTableTdpicdirdumpExist',
            'do'    => 'dropTableTdpicdirdumpExist'
        ),
        // DROP TABLE IF EXISTS `tdpicdirdump`;

        array(
            'check' => 'checkPicdirdumpTableExist', // prüft Tabelle d3picdirdump und legt sie ggf. an
            'do'    => 'updatePicdirdumpTableExist'
        ),
        array(
            'check' => 'checkPicextdumpTableExist', // prüft Tabelle d3picextdump und legt sie ggf. an
            'do'    => 'updatePicextdumpTableExist'
        ),
        array(
            'check' => 'checkImportconfigTableExist', // prüft Tabelle d3importconfig und legt sie ggf. an
            'do'    => 'updateImportconfigTableExist'
        ),
        array(
            'check' => 'checkImporterdescTableExist', // prüft Tabelle d3importerdesc und legt sie ggf. an
            'do'    => 'updateImporterdescTableExist'
        ),
        array(
            'check' => 'checkFieldsNeededForImporter',
            'do'    => 'updateFieldsNeededForImporter'
        ),
        array(
            'check' => 'checkIndizesNeededForImporter',
            'do'    => 'fixIndizesNeededForImporter'
        ),

        array(
            'check' => 'checkImportDirectoryIsMissing',
            'do'    => 'addImportDirectory'
        ),
        array(
            'check' => 'checkImportPicturesDirectoryIsMissing',
            'do'    => 'addImportPicturesDirectory'
        ),

        array(
            'check' => 'checkImporterdescItems', // die vielen kleinen sql befehle für Tabelle d3importerdesc
            'do'    => 'updateImporterdescItems'
        ),
        array(
            'check' => 'checkImporterconfigItem', // Anlegen des Demoprofils, wenn Demodata Dateien installiert wurden
            'do'    => 'updateImporterconfigItem'
        ),
        array(
            'check' => 'checkImporterFields', // prüft Felder in Tabelle und legt sie ggf. an bzw. modifiziert diese
            'do'    => 'updateImporterFields'
        ),
        array(
            'check' => 'hasToConvertXmlToJson',
            'do'    => 'convertXmlConfigurations'
        ),
        array(
            'check' => 'hasStringArticleSettings',
            'do'    => 'convertStringArticleSettings'
        ),
        array(
            'check' => 'hasUpdateToAttibuteNoticeShown',
            'do'    => 'showUpdateToAttibuteNotice'
        ),
        array(
            'check' => 'checkImporterdescUpdate',
            'do'    => 'updateImporterdescUpdate'
        ),
        array(
            'check' => 'checkModCfgSameRevision', // prüft auf nachgezogene Revisionsnummer und überträgt diese ggf.
            'do'    => 'updateModCfgSameRevision'
        ),
    );

    /**
     * d3_importer_Setup_InstallRoutine constructor.
     * @throws DatabaseConnectionException
     * @throws ConnectionException
     */
    public function __construct()
    {
        parent::__construct();

        $this->setOxconfigEntriesOnFirstInstallation();

    }

    /**
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     */
    protected function setOxconfigEntriesOnFirstInstallation()
    {
        $oConfig        = $this->getConfig();
        $sCurrentShopid = $oConfig->getShopId();
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop oxShop */
            $oConfig->setShopId($oShop->getId());
            $hasModCfgItemsQuery = <<<MySQL
SELECT 1 FROM d3_cfg_mod 
WHERE
  oxmodid IN ('d3importer', 'd3_importer')
  AND oxshopid = '{$oShop->getId()}'
MySQL;

            if (false == DatabaseProvider::getDb()->getOne($hasModCfgItemsQuery)) {
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
    public function updateOldModId()
    {
        $blRet = false;

        if ($this->checkOldModId()) {
            foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
                /** @var $oShop Shop */
                $aWhere = array(
                    'oxmodid'  => 'd3_importer',
                    'oxshopid' => $oShop->getId(),
                );

                $blRet = $this->_checkTableItemNotExist('d3_cfg_mod', $aWhere);

                if (!$blRet) {
                    // update don't use this property
                    unset($aWhere['oxnewrevision']);

                    $aInsertFields = array(
                        'OXID'           => array(
                            'content'      => "md5('" . $this->sModKey . " " . $oShop->getId() . " de')",
                            'force_update' => true,
                            'use_quote'    => false,
                        ),
                        'OXSHOPID'       => array(
                            'content'      => $oShop->getId(),
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXMODID'        => array(
                            'content'      => $this->sModKey,
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXNAME'         => array(
                            'content'      => $this->sModName,
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXACTIVE'       => array(
                            'content'      => "0",
                            'force_update' => false,
                            'use_quote'    => false,
                        ),
                        'OXBASECONFIG'   => array(
                            'content'      => $this->sBaseConf,
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXSERIAL'       => array(
                            'content'      => "",
                            'force_update' => false,
                            'use_quote'    => true,
                        ),
                        'OXINSTALLDATE'  => array(
                            'content'      => "NOW()",
                            'force_update' => true,
                            'use_quote'    => false,
                        ),
                        'OXVERSION'      => array(
                            'content'      => $this->sModVersion,
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXSHOPVERSION'  => array(
                            'content'      => Registry::getConfig()->getEdition(),
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXREQUIREMENTS' => array(
                            'content'      => $this->sRequirements,
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXVALUE'        => array(
                            'content'      => $this->sBaseValue,
                            'force_update' => false,
                            'use_quote'    => true,
                        ),
                        'OXNEWREVISION'  => array(
                            'content'      => $this->sModRevision,
                            'force_update' => true,
                            'use_quote'    => true,
                        )
                    );
                    $blRet         = $this->_updateTableItem2('d3_cfg_mod', $aInsertFields, $aWhere);
                }
            }
        }

        return $blRet;
    }

    /**
     * Anlegen des Eintrages in die mod_cfg,
     * wenn noch nicht vorhanden.
     */

    /**
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws ConnectionException
     */
    public function checkOldModId()
    {
        $blRet = false;
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop Shop */
            $aWhere = array(
                'oxmodid'  => 'd3_importer',
                'oxshopid' => $oShop->getId(),
            );

            $blRet = $this->_checkTableItemNotExist('d3_cfg_mod', $aWhere);

            $blRet = !$blRet;

            if ($blRet) {
                return $blRet;
            }
        }

        return $blRet;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateModCfgItemExist()
    {
        $blRet = false;

        if ($this->checkModCfgItemExist()) {
            foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
                /** @var $oShop Shop */
                $aWhere = array(
                    'oxmodid'       => $this->sModKey,
                    'oxshopid'      => $oShop->getId(),
                    'oxnewrevision' => $this->sModRevision,
                );

                if ($this->_checkTableItemNotExist('d3_cfg_mod', $aWhere)) {
                    // update don't use this property
                    unset($aWhere['oxnewrevision']);

                    $aInsertFields = array(
                        'OXID'           => array(
                            'content'      => "md5('" . $this->sModKey . " " . $oShop->getId() . " de')",
                            'force_update' => true,
                            'use_quote'    => false,
                        ),
                        'OXSHOPID'       => array(
                            'content'      => $oShop->getId(),
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXMODID'        => array(
                            'content'      => $this->sModKey,
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXNAME'         => array(
                            'content'      => $this->sModName,
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXACTIVE'       => array(
                            'content'      => "0",
                            'force_update' => false,
                            'use_quote'    => false,
                        ),
                        'OXBASECONFIG'   => array(
                            'content'      => $this->sBaseConf,
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXINSTALLDATE'  => array(
                            'content'      => "NOW()",
                            'force_update' => true,
                            'use_quote'    => false,
                        ),
                        'OXVERSION'      => array(
                            'content'      => $this->sModVersion,
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXSHOPVERSION'  => array(
                            'content'      => Registry::getConfig()->getEdition(),
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXREQUIREMENTS' => array(
                            'content'      => $this->sRequirements,
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXVALUE'        => array(
                            'content'      => $this->sBaseValue,
                            'force_update' => false,
                            'use_quote'    => true,
                        ),
                        'OXNEWREVISION'  => array(
                            'content'      => $this->sModRevision,
                            'force_update' => true,
                            'use_quote'    => true,
                        )
                    );
                    $blRet         = $this->_updateTableItem2('d3_cfg_mod', $aInsertFields, $aWhere);
                }
            }
        }

        return $blRet;
    }

    /**
     * Alte Tabellen löschen
     */

    /**
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws ConnectionException
     */
    public function checkModCfgItemExist()
    {
        $blRet = false;
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop Shop */
            $aWhere = array(
                'oxmodid'       => $this->sModKey,
                'oxnewrevision' => $this->sModRevision,
                'oxshopid'      => $oShop->getId(),
            );

            $blRet = $this->_checkTableItemNotExist('d3_cfg_mod', $aWhere);

            if ($blRet) {
                return $blRet;
            }
        }

        return $blRet;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function dropTableTdimportconfigExist()
    {
        $blRet = true;

        if ($this->checkTableTdimportconfigExist()) {
            $blRet = $this->_dropTable('tdimportconfig');
        }

        return $blRet;
    }

    /**
     * @return bool
     * FALSE, if table is missing, so nothing is to do
     * TRUE, if table is not missing, delete it
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkTableTdimportconfigExist()
    {
        $blRet = !($this->_checkTableNotExist('tdimportconfig'));

        return $blRet;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function dropTableTdimporterdescExist()
    {
        $blRet = true;

        if ($this->checkTableTdimporterdescExist()) {
            $blRet = $this->_dropTable('tdimporterdesc');
        }

        return $blRet;
    }

    /**
     * @return bool
     * FALSE, if table is missing, so nothing is to do
     * TRUE, if table is not missing, delete it
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkTableTdimporterdescExist()
    {
        $blRet = !($this->_checkTableNotExist('tdimporterdesc'));

        return $blRet;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function dropTableTdpicdirdumpExist()
    {
        $blRet = true;

        if ($this->checkTableTdpicdirdumpExist()) {
            $blRet = $this->_dropTable('tdpicdirdump');
        }

        return $blRet;
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

        $blReturn = $this->_checkTableNotExist('d3picdirdump');

        return $blReturn;
    }

    /**
     * @return bool
     * FALSE, if table is missing, so nothing is to do
     * TRUE, if table is not missing, delete it
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkTableTdpicdirdumpExist()
    {
        $blRet = !($this->_checkTableNotExist('tdpicdirdump'));

        return $blRet;
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
        $blRet = true;

        if ($this->checkPicdirdumpTableExist()) {
            $blRet = $this->_addTable2('d3picdirdump', $this->aFields, $this->aIndizes, 'D3 Importer Items', 'MyISAM');
        }

        return $blRet;
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
        $blRet = true;

        if ($this->checkPicextdumpTableExist()) {
            $blRet = $this->_addTable2('d3picextdump', $this->aFields, $this->aIndizes, 'D3 Importer Items', 'MyISAM');
        }

        return $blRet;
    }

    /**
     * @return bool TRUE, if table is missing
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkPicextdumpTableExist()
    {
        $blReturn = $this->_checkTableNotExist('d3picextdump');

        return $blReturn;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateImportconfigTableExist()
    {
        $blRet = $this->checkImportconfigTableExist();

        if ($blRet) {
            $blRet = $this->_addTable2(
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
    public function checkImportconfigTableExist()
    {
        $blReturn = $this->_checkTableNotExist('d3importconfig');

        return $blReturn;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateImporterdescTableExist()
    {
        $blRet = true;

        if ($this->checkImporterdescTableExist()) {
            $blRet = $this->_addTable2(
                'd3importerdesc',
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
    public function checkImporterdescTableExist()
    {
        $blReturn = $this->_checkTableNotExist('d3importerdesc');

        return $blReturn;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateFieldsNeededForImporter()
    {
        $blRet = $this->checkFieldsNeededForImporter();

        if ($blRet) {
            $this->fixFields();
        }

        return $blRet;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkFieldsNeededForImporter()
    {
        $blRet = $this->checkFields();

        return $blRet;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function fixIndizesNeededForImporter()
    {
        $blRet = $this->checkIndizesNeededForImporter();

        if ($blRet) {
            $this->fixIndizes();
        }

        return $blRet;
    }

    /**
     * Anlegen der Felder, wenn nicht vorhanden...
     * für: d3importerdesc
     */

    /**
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkIndizesNeededForImporter()
    {
        $blRet = $this->checkIndizes();

        return $blRet;
    }

    /**
     * @return bool
     */
    public function checkImportDirectoryIsMissing()
    {
        $dir = Registry::getConfig()->getConfigParam('sShopDir').'/import';

        return !file_exists( $dir ) && !is_dir( $dir );
    }

    public function addImportDirectory()
    {
        if ($this->checkImportDirectoryIsMissing()) {
            $dir = rtrim(Registry::getConfig()->getConfigParam('sShopDir'), '/').'/import';
            $this->createImportDirectory($dir);
        }
    }

    /**
     * @return bool
     */
    public function checkImportPicturesDirectoryIsMissing()
    {
        $dir = Registry::getConfig()->getConfigParam('sShopDir').'/import/pictures';

        return !file_exists( $dir ) && !is_dir( $dir );
    }

    public function addImportPicturesDirectory()
    {
        if ($this->checkImportPicturesDirectoryIsMissing()) {
            $dir = rtrim(Registry::getConfig()->getConfigParam('sShopDir'), '/').'/import/pictures';
            $this->createImportDirectory($dir);
        }
    }

    protected function createImportDirectory($dir)
    {
        $this->setUpdateBreak(false);
        $this->setActionLog(
            'MSG',
            sprintf(Registry::getLang()->translateString('D3_IMPORTER_SETUP_CREATEDIRECTORY'), $dir),
            $this->getInitialExecMethod(__METHOD__)
        );

        if ($this->hasExecute()) {
            mkdir($dir);
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

        $this->setActionLog(
            'MSG',
            sprintf(Registry::getLang()->translateString('D3_CFG_MOD_UPDATE_JOB_FILECONTENT'), $dir.'/.htaccess')
                .PHP_EOL.PHP_EOL.$htaContent,
            $this->getInitialExecMethod(__METHOD__)
        );

        $this->setActionLog(
            'MSG',
            sprintf(Registry::getLang()->translateString('D3_CFG_MOD_UPDATE_JOB_FILECONTENT'), $dir.'/index.html'),
            $this->getInitialExecMethod(__METHOD__)
        );

        if ($this->hasExecute()) {
            file_put_contents($dir . '/.htaccess', $htaContent, LOCK_EX);
            file_put_contents($dir . '/index.html', '', LOCK_EX);
        }

        return true;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     */
    public function checkImporterdescItems()
    {
        $blReturn = $this->_checkUpdateFile('d3/importer/Setup/d3importer_importerdescQuerys.php');

        return $blReturn;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateImporterdescItems()
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
    public function updateImporterconfigItem()
    {
        $blHasNoExample = false;

        if ($this->checkImporterconfigItem()) {
            foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
                /** @var $oShop Shop */
                $aImportconfigWhere = array(
                    'oxid'     => md5('d3importconfig_ex_' . $oShop->getId()),
                    'oxshopid' => $oShop->getId(),
                );

                $blHasNoExample = $this->_checkTableItemNotExist('d3importconfig', $aImportconfigWhere);

                /** @var $oShop Shop */
                $aWhere = array(
                    'oxvarname' => 'd3importconfig_ex_' . $oShop->getId(),
                    'oxshopid'  => $oShop->getId(),
                    'oxvartype' => 'bool',
                );

                $blHasAlreadyExampleUsed = $this->_checkTableItemNotExist('oxconfig', $aWhere);
                if ($blHasNoExample && $blHasAlreadyExampleUsed) {
                    $aInsertFields  = array(
                        'OXID'     => array(
                            'content'      => md5('d3importconfig_ex_' . $oShop->getId()),
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXSHOPID' => array(
                            'content'      => $oShop->getId(),
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                        'OXTITLE'  => array(
                            'content'      => 'Beispielprofil mit Beispielliste.csv',
                            'force_update' => false,
                            'use_quote'    => true,
                        ),
                        'OXVALUE'  => array(
                            'content'      => '{"d3_importer_category":{"IMPORTTYPE":"import","ASSIGNIDENT":"oxtitle","IMPORTCOLUM":{"1":"24"},"COLUMSEPARATOR":{"1":"|"}},"d3_importer_cross":{"IMPORTTYPE_CROSS":"import","IMPORTCOLUM_CROSS":"25","COLUMSEPARATOR_CROSS":"|","IMPORTTYPE_ACC":"import","IMPORTCOLUM_ACC":"26","COLUMSEPARATOR_ACC":"|"},"d3_importer_price2art":{"IMPORTTYPE":"import","IMPORTCOLUM":{"1":{"PRICE":"11","FROM":"12","TO":"13"},"2":{"PRICE":"14","FROM":"15","TO":"16"},"3":{"PRICE":"17","FROM":"18","TO":"19"}}},"d3_importer_afterimport":{"AFTERIMPORTTICKER":"100"},"d3_picture_main":{"aXMLPictureParams":[{"IMPORTFIELD":"d3importpic1","IMAGEFIELDS":{"oxpic1":"1"}},{"IMPORTFIELD":"d3importpic2","IMAGEFIELDS":{"oxpic2":"1"}},{"IMPORTFIELD":"d3importpic3","IMAGEFIELDS":{"oxpic3":"1"}}],"aPictureSettings":{"iMaxPictureCount":"50","iMaxImportCount":"5","iOverrideExternPictures":"0"}},"d3_importer_fields":{"fields":{"0":"oxartnum","1":"oxean","2":"oxtitle","3":"oxtitle_1","4":"oxshortdesc","5":"oxshortdesc_1","6":"oxlongdesc","7":"oxlongdesc_1","8":"oxsearchkeys","9":"oxsearchkeys_1","10":"oxprice","20":"oxstock","21":"d3importpic1","22":"d3importpic2","23":"d3importpic3"},"update":{"1":"1","2":"1","3":"1","4":"1","5":"1","6":"1","7":"1","8":"1","9":"1","10":"1","20":"1","21":"1","22":"1","23":"1"}},"d3_importer_attrib":{"IMPORTTYPE":"import","IMPORTCOLUM":{"1":{"NAME":{"de":"38","en":"39"},"VALUE":{"de":"40","en":"41"}},"2":{"NAME":{"de":"42","en":"43"},"VALUE":{"de":"44","en":"45"}}}},"d3_importer_selectlist":{"IMPORTTYPE":"clearbefore","IMPORTCOLUM":{"1":{"NAME":"27","ALTNAME":"Auswahl","VALUE":"28","SEPARATOR":"|","SEPARATOR_PRICE":"@"},"2":{"NAME":"29","ALTNAME":"Auswahl","VALUE":"30","SEPARATOR":"|","SEPARATOR_PRICE":"@"}}},"d3_importer_variants":{"IMPORTTYPE":"import","IMPORTCOLUM":"31","FIELD":{"oxvarname":"32","oxvarname_1":"34","oxvarselect":"33","oxvarselect_1":"35"}},"d3_importer_vendors":{"VENDOR":{"IMPORTTYPE":"import","IMPORTCOLUM":"36"},"MANUFACTURER":{"IMPORTTYPE":"import","IMPORTCOLUM":"37"}},"d3_importer_config":{"IMPORTTYPE":"standard","IMPORTTICKER":"100","OMITLINES":"1","ASSIGNIDENT":"oxartnum","aArticleSettings":["oxstock => 10"],"aDefaultBooleanSettings":{"aTrueSettings":["true","TRUE","Ja","ja"],"aFalseSettings":["false","FALSE","Nein","nein"]},"PRICEPLUSPERCENT":"0","PRICEDECIMALROUND":"0","ARTNUM2OXID":"0","MD54OXID":"0"},"d3_importer_mall":{"IMPORTCOLUM_MALL":"46","COLUMSEPARATOR_MALL":","},"d3_importer_main":{"FILE":"demo_artikel_test.csv","FILESEPARATOR":";","TEXTSEPARATOR":"\"","FILELENGTH":"844","FILEROWS":"11","FILECOLUMS":"47"}}',
                            'force_update' => false,
                            'use_quote'    => true,
                        )
                    );
                    $blHasNoExample = $this->_updateTableItem2('d3importconfig', $aInsertFields, $aImportconfigWhere);

                    if ($blHasNoExample) {
                        $aInsertFields = array(
                            'OXID'      => array(
                                'content'      => md5('d3importconfig_ex_' . $oShop->getId()),
                                'force_update' => true,
                                'use_quote'    => true,
                            ),
                            'OXSHOPID'  => array(
                                'content'      => $oShop->getId(),
                                'force_update' => true,
                                'use_quote'    => true,
                            ),
                            'OXVARNAME' => array(
                                'content'      => 'd3importconfig_ex_' . $oShop->getId(),
                                'force_update' => false,
                                'use_quote'    => true,
                            ),
                            'OXVARTYPE' => array(
                                'content'      => 'bool',
                                'force_update' => false,
                                'use_quote'    => true,
                            )
                        );
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
    public function checkImporterconfigItem()
    {
        if (!file_exists(rtrim(Registry::getConfig()->getConfigParam('sShopDir'), '/').'/import/demo_artikel_test.csv')
            && !file_exists(rtrim(Registry::getConfig()->getConfigParam('sShopDir'), '/').'/import/demo_artikel_komplett.csv')
        ) {
            return false;
        }

        $blHasNoExample = false;
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            /** @var $oShop Shop */
            $aWhere = array(
                'oxid'     => md5('d3importconfig_ex_' . $oShop->getId()),
                'oxshopid' => $oShop->getId(),
            );

            $blHasNoExample = $this->_checkTableItemNotExist('d3importconfig', $aWhere);

            /** @var $oShop Shop */
            $aWhere = array(
                'oxvarname' => 'd3importconfig_ex_' . $oShop->getId(),
                'oxshopid'  => $oShop->getId(),
            );

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
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function checkImporterFields()
    {
        $blRet = $this->checkFields();

        return $blRet;
    }

    /**
     * Aktualisierung der Revisionsnummer
     * in dem Eintrag in der mod_cfg.
     * Letzter Schritt in der automatischen Installation.
     */

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateImporterFields()
    {
        return $this->fixFields();
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateModCfgSameRevision()
    {
        $blRet = false;

        if ($this->checkModCfgSameRevision()) {
            $blRet = $this->_updateModCfgSameRevision($this->sModKey);
        }

        return $blRet;
    }

    /**
     * @return bool
     *   FALSE if Revisionnumber is the same
     *   TRUE if Update Revisionnumber needed
     * @throws DBALException
     * @throws DatabaseConnectionException
     */
    public function checkModCfgSameRevision()
    {
        $blRet = $this->_checkModCfgSameRevision($this->sModKey);

        return $blRet;
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function convertXmlConfigurations()
    {

        if ($this->hasToConvertXmlToJson()) {

            include_once(__DIR__ . '/d3importer_migratexmltojson.php');

            /** @var $oShop Shop */
            foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {

                $oDb    = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC);
                $sQuery = <<< MYSQL
SELECT oxvalue AS oxvalue, oxid AS oxid FROM d3importconfig
WHERE oxshopid = '{$oShop->getId()}'
MYSQL;

                $aConfigurations = $oDb->getAll($sQuery);
                if (empty($aConfigurations)) {
                    continue;
                }

                foreach ($aConfigurations as $aValue) {
                    $blIsJsonConfiguration = (bool)json_decode($aValue['oxvalue'], true);
                    if ($blIsJsonConfiguration) {
                        continue;
                    }

                    $sXmlConfiguration = unserialize(base64_decode($aValue['oxvalue']));
                    $aNewConfiguration = d3importerMigrateXmlToJson($sXmlConfiguration);

                    $sJsonConfiguration = json_encode($aNewConfiguration);

                    $aInsertFields = array(
                        'OXVALUE' => array(
                            'content'      => $sJsonConfiguration,
                            'force_update' => true,
                            'use_quote'    => true,
                        ),
                    );
                    $blReturn      = $this->_updateTableItem2(
                        'd3importconfig',
                        $aInsertFields,
                        array('oxid' => $aValue['oxid'])
                    );

                    if (false == $blReturn) {
                        return $blReturn;
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
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws ConnectionException
     */
    public function hasToConvertXmlToJson()
    {
        /** @var $oShop Shop */
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {

            $oDb    = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC);
            $sQuery = <<< MYSQL
SELECT oxvalue AS oxvalue, oxid AS oxid FROM d3importconfig
WHERE oxshopid = '{$oShop->getId()}'
MYSQL;

            $aConfigurations = $oDb->getAll($sQuery);

            if (empty($aConfigurations)) {
                continue;
            }

            foreach ($aConfigurations as $aValue) {
                $blIsJsonConfiguration   = (bool)json_decode($aValue['oxvalue'], true);
                $blIsBase64Configuration = (bool)base64_decode($aValue['oxvalue']);

                if (false == $blIsJsonConfiguration && $blIsBase64Configuration) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * @return bool
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws DBALException
     * @throws ConnectionException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    public function convertStringArticleSettings()
    {
        if ($this->hasStringArticleSettings()) {
            $oConfig        = $this->getConfig();
            $sCurrentShopid = $oConfig->getShopId();
            /** @var $oShop Shop */
            foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
                $oConfig->setShopId($oShop->getId());
                $oModuleConfiguration = d3_cfg_mod::getNoCache('d3importer');
                $mArticleSettings     = $oModuleConfiguration->getValue('aArticleSettings');

                if (is_string($mArticleSettings)) {
                    $oModuleConfiguration->setValue('aArticleSettings', explode("\n", $mArticleSettings));
                    $oModuleConfiguration->save();
                }

                $oDb    = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC);
                $sQuery = <<< MYSQL
SELECT oxvalue AS oxvalue, oxid AS oxid FROM d3importconfig
WHERE oxshopid = '{$oShop->getId()}'
MYSQL;

                $aConfigurations = $oDb->getAll($sQuery);

                if (empty($aConfigurations)) {
                    continue;
                }

                foreach ($aConfigurations as $aValue) {
                    $aIsJsonConfiguration = json_decode($aValue['oxvalue'], true);

                    if (false == (bool)$aIsJsonConfiguration) {
                        continue;
                    }

                    if (false == isset($aIsJsonConfiguration['d3_importer_config']['aArticleSettings'])) {
                        continue;
                    }

                    if (is_string($aIsJsonConfiguration['d3_importer_config']['aArticleSettings'])) {
                        $mArticleSettings                                               = $aIsJsonConfiguration['d3_importer_config']['aArticleSettings'];
                        $aIsJsonConfiguration['d3_importer_config']['aArticleSettings'] = explode(
                            "\n",
                            $mArticleSettings
                        );

                        $sJsonConfiguration = json_encode($aIsJsonConfiguration);
                        $aInsertFields      = array(
                            'OXVALUE' => array(
                                'content'      => $sJsonConfiguration,
                                'force_update' => true,
                                'use_quote'    => true,
                            ),
                        );

                        $blReturn = $this->_updateTableItem2(
                            'd3importconfig',
                            $aInsertFields,
                            array('oxid' => $aValue['oxid'])
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
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws ConnectionException
     */
    public function hasStringArticleSettings()
    {
        $oConfig        = $this->getConfig();
        $sCurrentShopid = $oConfig->getShopId();
        /** @var $oShop Shop */
        foreach ($this->getShopListByActiveModule($this->sModKey) as $oShop) {
            $oConfig->setShopId($oShop->getId());
            $oModuleConfiguration = d3_cfg_mod::getNoCache('d3importer');
            $mArticleSettings     = $oModuleConfiguration->getValue('aArticleSettings');

            if (is_string($mArticleSettings)) {
                $oConfig->setShopId($sCurrentShopid);

                return true;
            }

            $oDb    = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC);
            $sQuery = <<< MYSQL
SELECT oxvalue, oxid FROM d3importconfig
WHERE oxshopid = '{$oShop->getId()}'
MYSQL;

            $aConfigurations = $oDb->getAll($sQuery);

            if (empty($aConfigurations)) {
                continue;
            }

            foreach ($aConfigurations as $aValue) {
                $aIsJsonConfiguration = json_decode($aValue['oxvalue'], true);

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
    public function showUpdateToAttibuteNotice()
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
    public function hasUpdateToAttibuteNoticeShown()
    {
        return $this->hasNoConfirmMessageConfigConfirmation('d3_importer_update_old_attibutes_removed');
    }

    /**
     * @return bool
     * @throws DatabaseConnectionException
     */
    public function checkImporterdescUpdate()
    {
        $blReturn = $this->_checkUpdateFile('d3/importer/Setup/importerdescUpdates.php');

        return $blReturn;
    }

    /**
     * @return bool
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function updateImporterdescUpdate()
    {
        return $this->_doUpdateFile('d3/importer/Setup/importerdescUpdates.php');
    }
}
