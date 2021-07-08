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
 * modified       F.M. 20170306 POSeidon Digital GmbH: Added DateTime in echo for better logging
 */

use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\TableViewNameGenerator;

define("OX_IS_ADMIN", true);

/**
 * Returns shop base path.
 *
 * @return string
 */
function getShopBasePath()
{
    return dirname(__FILE__) . '/../../../../';
}

require_once getShopBasePath() . "/bootstrap.php";

// Get formatted date & time for logging.
$getD3ImportTimestamp = function ()
{
    return date("Y-m-d H:i:s:");
};

if (false == isset($argv[1])) {
    echo "No arguments defined!" . PHP_EOL;
    exit(1);
}

// EE Shop
if (isset($argv[3])) {
    Registry::getConfig()->setShopId($argv[3]);
}

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL^E_NOTICE);

// import
$soxId = $argv[1];
try {
    $oImportConfig = oxNew('d3_importer_Application_Models_ImportConfig');
} catch (\OxidEsales\Eshop\Core\Exception\SystemComponentException $e) {
    echo $getD3ImportTimestamp() . " class not found: ". $e->getMessage() . PHP_EOL;
    exit(3);
}
if (false == $oImportConfig->load($soxId)) {
    echo $getD3ImportTimestamp() . " The import profile with id '$soxId' could not be loaded. Please check your import configuration." . PHP_EOL;
    exit(4);
}
try {
    $oImportConfig->overwriteImportTicker(0);
} catch (Exception $e) {
    print_r($e->getMessage());
}
/** @var d3_importer_Application_Controller_Import_Article $articleImport */
try {
    $articleImport = oxNew(d3_importer_Application_Controller_Import_Article::class, $oImportConfig);
} catch (\OxidEsales\Eshop\Core\Exception\SystemComponentException $e) {
    echo $getD3ImportTimestamp() . " class not found: ". $e->getMessage() . PHP_EOL;
    exit(5);
}
echo $getD3ImportTimestamp() . " Starting database article import..." . PHP_EOL;
try {
    $articleImport->import(0, 0);
} catch (Exception $e) {
    print_r($e->getMessage());
    exit(6);
}

try {
    $oDB = DatabaseProvider::getDb();
} catch (\OxidEsales\Eshop\Core\Exception\DatabaseConnectionException $e) {
    print_r($e->getMessage());
    exit(7);
}

$sArticleTableView = oxNew(TableViewNameGenerator::class)->getViewName('oxarticles');

echo $getD3ImportTimestamp() . " Imported: {$oDB->getOne("SELECT COUNT(oxid) FROM $sArticleTableView as oxarticles WHERE d3importflag = 'IMPORTED'")} articles" . PHP_EOL;
echo $getD3ImportTimestamp() . " Updated: {$oDB->getOne("SELECT COUNT(oxid) FROM $sArticleTableView as oxarticles WHERE d3importflag = 'UPDATED'")} articles" . PHP_EOL;

$aViewData                = array();
$aViewData["iFailImport"] = $articleImport->getFailImport();
$aViewData["blEOF"]       = $articleImport->isEndOfFile();
$aViewData["iFilePos"]    = $articleImport->getFilePointerPosition();
$aViewData["iLinePos"]    = $articleImport->getActualLinePosition();

// delete or inactive
if (isset($argv[2])) {
    $sAction = $argv[2];
    if ($sAction == 'delete' || $sAction == 'inactive') {
        try {
            $articleImport->afterImport($sAction, 9999999999);
        } catch (Exception $e) {
            print_r($e->getMessage());
            exit(8);
        }
    }
}

if ($aViewData['iFailImport']) {
    echo $getD3ImportTimestamp() . " " . Registry::getLang()->translateString("D3_IMPORTER_FAILIMPORT_{$aViewData['iFailImport']}") . PHP_EOL;
    exit(9);
}

// picture import
echo $getD3ImportTimestamp() . ' starting picture import.' . PHP_EOL;
/** @var d3_importer_Application_Models_PictureImport $oPictureImporter */
try {
    $oPictureImporter = oxNew(d3_importer_Application_Models_PictureImport::class, $oImportConfig);
} catch (\OxidEsales\Eshop\Core\Exception\SystemComponentException $e) {
    echo $getD3ImportTimestamp() . " class not found: ". $e->getMessage() . PHP_EOL;
    exit(10);
}
$oPictureImporter->setIsCronJob();
try {
    $oPictureImporter->setMaxImportCount(9999999999);
} catch (Exception $e) {
    print_r($e->getMessage());
    exit(11);
}
$oPictureImporter->setMaxPictureCount(9999999999);

echo $getD3ImportTimestamp() . ' start picture download.' . PHP_EOL;
try {
    $oPictureImporter->importExternPictures();
} catch (Exception $e) {
    print_r($e->getMessage());
    exit(12);
}
echo $getD3ImportTimestamp() . " Downloaded: {$oPictureImporter->numberOfExternImportedPictures} pictures" . PHP_EOL;
// ToDo for D3: $oPictureImporter->ScanPictureDir() only returns a value if failed at the moment...
try {
    echo $getD3ImportTimestamp() . " Reading picture directory... {$oPictureImporter->scanPictureDir()}" . PHP_EOL;
} catch (Exception $e) {
    print_r($e->getMessage());
    exit(13);
}

echo $getD3ImportTimestamp() . ' start importing pictures.' . PHP_EOL;
try {
    $oPictureImporter->import();
} catch (Exception $e) {
    print_r($e->getMessage());
    exit(14);
}
echo $getD3ImportTimestamp() . ' finished picture import.' . PHP_EOL;

if ($oPictureImporter->getConfigFailure() != 0) {
    echo $getD3ImportTimestamp() . " Config failure: {$oPictureImporter->getConfigFailure()}." . PHP_EOL;
}

echo $getD3ImportTimestamp() . " Handled: {$oPictureImporter->getActualImportCounter()} Pictures" . PHP_EOL;
exit(0);
