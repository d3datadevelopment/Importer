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

use D3\ModCfg\Application\Model\d3utils;
use D3\ModCfg\Application\Model\Install\d3install;

/**
 * Metadata version
 */
$sMetadataVersion = '1.2';
$sLogo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em"> ';

/**
 * Module information
 */
$aModule = array(
    'id'             => 'd3importer',
    'title'          => $sLogo . 'Importer',
    'description'    => array(
        'de' => 'Umfangreiche Importm&ouml;glichkeiten der Artikel inkl. dem Import von Bildern, '
            . 'sowie alle Datenfelder von Artikeln, Kategorien, Crossselling, Attribute, '
            . 'Auswahllisten, Varianten, Staffelpreise, Hersteller & Lieferanten',
        'en' => 'n/a',
    ),
    'thumbnail'      => 'picture.png',
    'version'        => '5.0.5.0',
    'author'         => 'D&sup3; Data Development, Inh. Thomas Dartsch',
    'email'          => 'support@shopmodule.com',
    'url'            => 'https://www.oxidmodule.com/',
    'events'         => array(
        'onActivate' => d3install::class . '::checkUpdateStart',
    ),
    'extend'         => array(),
    'files'          => array(
        'd3_importer_Setup_InstallRoutine'                                   => 'd3/importer/Setup/InstallRoutine.php',
        'd3_importer_Application_Controller_Admin_Base'                      => 'd3/importer/Application/Controller/Admin/Base.php',
        'd3_importer_Application_Controller_Admin_Articleimport_AdminList'   => 'd3/importer/Application/Controller/Admin/Articleimport/AdminList.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Afterimport' => 'd3/importer/Application/Controller/Admin/Articleimport/Afterimport.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Attribute'   => 'd3/importer/Application/Controller/Admin/Articleimport/Attribute.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Base'        => 'd3/importer/Application/Controller/Admin/Articleimport/Base.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Category'    => 'd3/importer/Application/Controller/Admin/Articleimport/Category.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Config'      => 'd3/importer/Application/Controller/Admin/Articleimport/Config.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Crosselling' => 'd3/importer/Application/Controller/Admin/Articleimport/Crosselling.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Fields'      => 'd3/importer/Application/Controller/Admin/Articleimport/Fields.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Import'      => 'd3/importer/Application/Controller/Admin/Articleimport/Import.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Main'        => 'd3/importer/Application/Controller/Admin/Articleimport/Main.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Mall'        => 'd3/importer/Application/Controller/Admin/Articleimport/Mall.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Scales'      => 'd3/importer/Application/Controller/Admin/Articleimport/Scales.php',
        'd3_importer_Application_Controller_Admin_Articleimport_SelectList'  => 'd3/importer/Application/Controller/Admin/Articleimport/SelectList.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Variants'    => 'd3/importer/Application/Controller/Admin/Articleimport/Variants.php',
        'd3_importer_Application_Controller_Admin_Articleimport_Vendors'     => 'd3/importer/Application/Controller/Admin/Articleimport/Vendors.php',
        'd3_importer_Application_Controller_Admin_Config_AdminList'          => 'd3/importer/Application/Controller/Admin/Config/AdminList.php',
        'd3_importer_Application_Controller_Admin_Config_Base'               => 'd3/importer/Application/Controller/Admin/Config/Base.php',
        'd3_importer_Application_Controller_Admin_Config_Settings'           => 'd3/importer/Application/Controller/Admin/Config/Settings.php',
        'd3_importer_Application_Controller_Admin_Config_Support'            => 'd3/importer/Application/Controller/Admin/Config/Support.php',
        'd3_importer_Application_Controller_Admin_Desc_Base'                 => 'd3/importer/Application/Controller/Admin/Desc/Base.php',
        'd3_importer_Application_Controller_Admin_Desc_Itemlist'             => 'd3/importer/Application/Controller/Admin/Desc/Itemlist.php',
        'd3_importer_Application_Controller_Admin_Desc_Main'                 => 'd3/importer/Application/Controller/Admin/Desc/Main.php',
        'd3_importer_Application_Controller_Admin_Log_AdminList'             => 'd3/importer/Application/Controller/Admin/Log/AdminList.php',
        'd3_importer_Application_Controller_Admin_Log_Base'                  => 'd3/importer/Application/Controller/Admin/Log/Base.php',
        'd3_importer_Application_Controller_Admin_Pictureimport_AdminList'   => 'd3/importer/Application/Controller/Admin/Pictureimport/AdminList.php',
        'd3_importer_Application_Controller_Admin_Pictureimport_Base'   => 'd3/importer/Application/Controller/Admin/Pictureimport/Base.php',
        'd3_importer_Application_Controller_Admin_Pictureimport_Import' => 'd3/importer/Application/Controller/Admin/Pictureimport/Import.php',
        'd3_importer_Application_Controller_Admin_Pictureimport_Main'   => 'd3/importer/Application/Controller/Admin/Pictureimport/Main.php',
        'd3_importer_Application_Controller_Import_Article'             => 'd3/importer/Application/Controller/Import/Article.php',
        'd3_importer_Application_Models_Models_Import_Accessories'      => 'd3/importer/Application/Models/Import/Accessories.php',
        'd3_importer_Application_Models_Models_Import_Article'          => 'd3/importer/Application/Models/Import/Article.php',
        'd3_importer_Application_Models_Models_Import_Attributes'       => 'd3/importer/Application/Models/Import/Attributes.php',
        'd3_importer_Application_Models_Models_Import_Category'         => 'd3/importer/Application/Models/Import/Category.php',
        'd3_importer_Application_Models_Models_Import_Crossselling'     => 'd3/importer/Application/Models/Import/Crossselling.php',
        'd3_importer_Application_Models_Models_Import_Mall'             => 'd3/importer/Application/Models/Import/Mall.php',
        'd3_importer_Application_Models_Models_Import_Manufacturer'     => 'd3/importer/Application/Models/Import/Manufacturer.php',
        'd3_importer_Application_Models_Models_Import_Price2Article'    => 'd3/importer/Application/Models/Import/Price2article.php',
        'd3_importer_Application_Models_Models_Import_Selectlist'       => 'd3/importer/Application/Models/Import/Selectlist.php',
        'd3_importer_Application_Models_Models_Import_Vendor'           => 'd3/importer/Application/Models/Import/Vendor.php',
        'd3_importer_Application_Models_Formbuilder'                    => 'd3/importer/Application/Models/Formbuilder.php',
        'd3_importer_Application_Models_Groupbuilder'                   => 'd3/importer/Application/Models/Groupbuilder.php',
        'd3_importer_Application_Models_ImportConfig'                   => 'd3/importer/Application/Models/ImportConfig.php',
        'd3_importer_Application_Models_ImporterDescription'            => 'd3/importer/Application/Models/ImporterDescription.php',
        'd3_importer_Application_Models_PictureImport'                       => 'd3/importer/Application/Models/PictureImport.php',
        'd3_importer_Application_Models_Profilemapper'                       => 'd3/importer/Application/Models/Profilemapper.php',
        'd3_importer_Application_Models_Settings_Combined'                   => 'd3/importer/Application/Models/Settings/Combined.php',
        'd3_importer_Application_Models_Settings_Complex'                    => 'd3/importer/Application/Models/Settings/Complex.php',
        'd3_importer_Application_Models_Settings_Config'                     => 'd3/importer/Application/Models/Settings/Config.php',
        'd3_importer_Application_Models_Settings_Defaultboolean'             => 'd3/importer/Application/Models/Settings/Defaultboolean.php',
        'd3_importer_Application_Models_Settings_Element'                    => 'd3/importer/Application/Models/Settings/Element.php',
        'd3_importer_Application_Models_Settings_Mall'                       => 'd3/importer/Application/Models/Settings/Mall.php',
        'd3_importer_Application_Models_Afterimport'                         => 'd3/importer/Application/Models/Afterimport.php',
        'd3_importer_Application_Models_Csvconverter'                        => 'd3/importer/Application/Models/Csvconverter.php',
        'd3_importer_Application_Models_Collector'                           => 'd3/importer/Application/Models/Collector.php',
        'd3_importer_Application_Models_ImportAbstract'                      => 'd3/importer/Application/Models/Import/ImportAbstract.php',
        'd3_importer_Application_Models_Interface_Import'                    => 'd3/importer/Application/Models/Interface/Import.php',
        'd3_importer_Application_Models_Service_Import'                      => 'd3/importer/Application/Models/Service/Import.php',
    ),
    'templates'      => array(
        'd3_importer.tpl'                                                     => 'd3/importer/Application/views/admin/tpl/d3_importer.tpl',
        'd3_importer_afterimport.tpl'                                         => 'd3/importer/Application/views/admin/tpl/d3_importer_afterimport.tpl',
        'd3_importer_afterticker.tpl'                                         => 'd3/importer/Application/views/admin/tpl/d3_importer_afterticker.tpl',
        'd3_importer_attrib.tpl'                                              => 'd3/importer/Application/views/admin/tpl/d3_importer_attrib.tpl',
        'd3_importer_category.tpl'                                            => 'd3/importer/Application/views/admin/tpl/d3_importer_category.tpl',
        'd3_importer_config.tpl'                                              => 'd3/importer/Application/views/admin/tpl/d3_importer_config.tpl',
        'd3_importer_mall.tpl'                                                => 'd3/importer/Application/views/admin/tpl/d3_importer_mall.tpl',
        'd3_importer_cross.tpl'                                               => 'd3/importer/Application/views/admin/tpl/d3_importer_cross.tpl',
        'd3_importer_fields.tpl'                                              => 'd3/importer/Application/views/admin/tpl/d3_importer_fields.tpl',
        'd3_importer_import.tpl'                                              => 'd3/importer/Application/views/admin/tpl/d3_importer_import.tpl',
        'd3_importer_inc_nav.tpl'                                             => 'd3/importer/Application/views/admin/tpl/d3_importer_inc_nav.tpl',
        'd3_importer_list.tpl'                                                => 'd3/importer/Application/views/admin/tpl/d3_importer_list.tpl',
        'd3_importer_main.tpl'                                                => 'd3/importer/Application/views/admin/tpl/d3_importer_main.tpl',
        'd3_importer_price2art.tpl'                                           => 'd3/importer/Application/views/admin/tpl/d3_importer_price2art.tpl',
        'd3_importer_selectlist.tpl'                                          => 'd3/importer/Application/views/admin/tpl/d3_importer_selectlist.tpl',
        'd3_importer_ticker.tpl'                                              => 'd3/importer/Application/views/admin/tpl/d3_importer_ticker.tpl',
        'd3_importer_variants.tpl'                                            => 'd3/importer/Application/views/admin/tpl/d3_importer_variants.tpl',
        'd3_importer_vendors.tpl'                                             => 'd3/importer/Application/views/admin/tpl/d3_importer_vendors.tpl',
        'd3_picture.tpl'                                                      => 'd3/importer/Application/views/admin/tpl/d3_picture.tpl',
        'd3_picture_extticker.tpl'                                            => 'd3/importer/Application/views/admin/tpl/d3_picture_extticker.tpl',
        'd3_picture_import.tpl'                                               => 'd3/importer/Application/views/admin/tpl/d3_picture_import.tpl',
        'd3_picture_list.tpl'                                                 => 'd3/importer/Application/views/admin/tpl/d3_picture_list.tpl',
        'd3_picture_main.tpl'                                                 => 'd3/importer/Application/views/admin/tpl/d3_picture_main.tpl',
        'd3_picture_ticker.tpl'                                               => 'd3/importer/Application/views/admin/tpl/d3_picture_ticker.tpl',
        'd3_d3importer_views_admin_tpl_basesettings.tpl'                      => 'd3/importer/Application/views/admin/tpl/basesettings.tpl',
        'd3_d3importer_views_admin_tpl_formelementloader.tpl'                 => 'd3/importer/Application/views/admin/tpl/formelementloader.tpl',
        'd3_d3importer_views_admin_tpl_forms_text.tpl'                        => 'd3/importer/Application/views/admin/tpl/forms/text.tpl',
        'd3_d3importer_views_admin_tpl_forms_choice.tpl'                      => 'd3/importer/Application/views/admin/tpl/forms/choice.tpl',
        'd3_d3importer_views_admin_tpl_forms_bool.tpl'                        => 'd3/importer/Application/views/admin/tpl/forms/bool.tpl',
        'd3_d3importer_views_admin_tpl_forms_textarea.tpl'                    => 'd3/importer/Application/views/admin/tpl/forms/textarea.tpl',
        'd3_d3importer_views_admin_tpl_errormessages.tpl'                     => 'd3/importer/Application/views/admin/tpl/errormessages.tpl',
        'd3_d3importer_views_admin_tpl_desc_list.tpl'                         => 'd3/importer/Application/views/admin/tpl/desc/list.tpl',
        'd3_d3importer_views_admin_tpl_desc_main.tpl'                         => 'd3/importer/Application/views/admin/tpl/desc/main.tpl',
        'd3_d3importer_views_admin_tpl_desc_base.tpl'                         => 'd3/importer/Application/views/admin/tpl/desc/base.tpl',
        'd3_importer_application_views_admin_tpl_options_picture_import.tpl'  => 'd3/importer/Application/views/admin/tpl/options/picture/import.tpl',
        'd3_importer_application_views_admin_tpl_options_picture_results.tpl' => 'd3/importer/Application/views/admin/tpl/options/picture/results.tpl',
        'd3_importer_application_views_admin_tpl_bootstrap.tpl'               => 'd3/importer/Application/views/admin/tpl/bootstrap.tpl',
    ),
    'blocks'         => array(
        array(
            'template' => 'bottomnaviitem.tpl',
            'block'    => 'admin_bottomnavicustom',
            'file'     => '/Application/views/blocks/admin_bottomnavicustom.tpl'
        ),
    ),
);
