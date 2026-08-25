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
use D3\Importer\Application\Controller\Admin\Config\Base;
use D3\Importer\Application\Controller\Admin\Config\AdminList;
use D3\Importer\Application\Controller\Admin\Config\Settings;
use D3\Importer\Application\Controller\Admin\Config\Support;
use D3\Importer\Application\Controller\Admin\Articleimport\Main;
use D3\Importer\Application\Controller\Admin\Articleimport\Fields;
use D3\Importer\Application\Controller\Admin\Articleimport\Category;
use D3\Importer\Application\Controller\Admin\Articleimport\Crosselling;
use D3\Importer\Application\Controller\Admin\Articleimport\Attribute;
use D3\Importer\Application\Controller\Admin\Articleimport\SelectList;
use D3\Importer\Application\Controller\Admin\Articleimport\Variants;
use D3\Importer\Application\Controller\Admin\Articleimport\Scales;
use D3\Importer\Application\Controller\Admin\Articleimport\Vendors;
use D3\Importer\Application\Controller\Admin\Articleimport\Config;
use D3\Importer\Application\Controller\Admin\Articleimport\Mall;
use D3\Importer\Application\Controller\Admin\Articleimport\Import;
use D3\Importer\Application\Controller\Admin\Articleimport\Afterimport;
use D3\Importer\Application\Controller\Admin\Desc\Itemlist;
use D3\Importer\Application\Models\Constants;
use D3\ModCfg\Application\Model\Install\d3install;

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';
$sLogo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em"> ';

/**
 * Module information
 */
$aModule = [
    'id'             => 'd3importer',
    'title'          => $sLogo . 'Importer',
    'description'    => [
        'de' => 'Umfangreiche Importm&ouml;glichkeiten der Artikel inkl. dem Import von Bildern, '
            . 'sowie alle Datenfelder von Artikeln, Kategorien, Crossselling, Attribute, '
            . 'Auswahllisten, Varianten, Staffelpreise, Hersteller & Lieferanten',
        'en' => 'n/a',
    ],
    'thumbnail'      => 'picture.svg',
    'version'        => '6.1.2.0',
    'author'         => 'D&sup3; Data Development, Inh. Thomas Dartsch',
    'email'          => 'support@shopmodule.com',
    'url'            => 'https://www.oxidmodule.com/',
    'events'         => [
        'onActivate' => d3install::class . '::checkUpdateStart',
    ],
    'extend'         => [],
    'controllers'    => [
        'd3_importer_application_controller_admin_config_base'               => Base::class,
        'd3_importer_application_controller_admin_config_adminlist'          => AdminList::class,
        'd3_importer_application_controller_admin_config_settings'           => Settings::class,
        'd3_importer_application_controller_admin_config_support'            => Support::class,
        'd3_importer_application_controller_admin_articleimport_base'        => \D3\Importer\Application\Controller\Admin\Articleimport\Base::class,
        'd3_importer_application_controller_admin_articleimport_adminlist'   => \D3\Importer\Application\Controller\Admin\Articleimport\AdminList::class,
        'd3_importer_application_controller_admin_articleimport_main'        => Main::class,
        'd3_importer_application_controller_admin_articleimport_fields'      => Fields::class,
        'd3_importer_application_controller_admin_articleimport_category'    => Category::class,
        'd3_importer_application_controller_admin_articleimport_crosselling' => Crosselling::class,
        'd3_importer_application_controller_admin_articleimport_attribute'   => Attribute::class,
        'd3_importer_application_controller_admin_articleimport_selectlist'  => SelectList::class,
        'd3_importer_application_controller_admin_articleimport_variants'    => Variants::class,
        'd3_importer_application_controller_admin_articleimport_scales'      => Scales::class,
        'd3_importer_application_controller_admin_articleimport_vendors'     => Vendors::class,
        'd3_importer_application_controller_admin_articleimport_config'      => Config::class,
        'd3_importer_application_controller_admin_articleimport_mall'        => Mall::class,
        'd3_importer_application_controller_admin_articleimport_import'      => Import::class,
        'd3_importer_application_controller_admin_articleimport_afterimport' => Afterimport::class,
        'd3_importer_application_controller_admin_pictureimport_base'        => \D3\Importer\Application\Controller\Admin\Pictureimport\Base::class,
        'd3_importer_application_controller_admin_pictureimport_adminlist'   => \D3\Importer\Application\Controller\Admin\Pictureimport\AdminList::class,
        'd3_importer_application_controller_admin_pictureimport_main'        => \D3\Importer\Application\Controller\Admin\Pictureimport\Main::class,
        'd3_importer_application_controller_admin_pictureimport_import'      => \D3\Importer\Application\Controller\Admin\Pictureimport\Import::class,
        'd3_importer_application_controller_admin_desc_base'                 => \D3\Importer\Application\Controller\Admin\Desc\Base::class,
        'd3_importer_application_controller_admin_desc_itemlist'             => Itemlist::class,
        'd3_importer_application_controller_admin_desc_main'                 => \D3\Importer\Application\Controller\Admin\Desc\Main::class,
        'd3_importer_application_controller_admin_log_base'                  => \D3\Importer\Application\Controller\Admin\Log\Base::class,
        'd3_importer_application_controller_admin_log_adminlist'             => \D3\Importer\Application\Controller\Admin\Log\AdminList::class,
    ],
    'templates'      => [
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer.tpl'                  => 'views/smarty/admin/d3_importer.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_afterimport.tpl'      => 'views/smarty/admin/d3_importer_afterimport.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_afterticker.tpl'      => 'views/smarty/admin/d3_importer_afterticker.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_attrib.tpl'           => 'views/smarty/admin/d3_importer_attrib.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_category.tpl'         => 'views/smarty/admin/d3_importer_category.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_config.tpl'           => 'views/smarty/admin/d3_importer_config.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_mall.tpl'             => 'views/smarty/admin/d3_importer_mall.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_cross.tpl'            => 'views/smarty/admin/d3_importer_cross.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_fields.tpl'           => 'views/smarty/admin/d3_importer_fields.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_import.tpl'           => 'views/smarty/admin/d3_importer_import.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_inc_nav.tpl'          => 'views/smarty/admin/d3_importer_inc_nav.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_list.tpl'             => 'views/smarty/admin/d3_importer_list.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_main.tpl'             => 'views/smarty/admin/d3_importer_main.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_price2art.tpl'        => 'views/smarty/admin/d3_importer_price2art.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_selectlist.tpl'       => 'views/smarty/admin/d3_importer_selectlist.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_ticker.tpl'           => 'views/smarty/admin/d3_importer_ticker.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_variants.tpl'         => 'views/smarty/admin/d3_importer_variants.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_importer_vendors.tpl'          => 'views/smarty/admin/d3_importer_vendors.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_picture.tpl'                   => 'views/smarty/admin/d3_picture.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_picture_extticker.tpl'         => 'views/smarty/admin/d3_picture_extticker.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_picture_import.tpl'            => 'views/smarty/admin/d3_picture_import.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_picture_list.tpl'              => 'views/smarty/admin/d3_picture_list.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_picture_main.tpl'              => 'views/smarty/admin/d3_picture_main.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/d3_picture_ticker.tpl'            => 'views/smarty/admin/d3_picture_ticker.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/basesettings.tpl'                 => 'views/smarty/admin/basesettings.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/formelementloader.tpl'            => 'views/smarty/admin/formelementloader.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/forms/text.tpl'                   => 'views/smarty/admin/forms/text.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/forms/choice.tpl'                 => 'views/smarty/admin/forms/choice.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/forms/bool.tpl'                   => 'views/smarty/admin/forms/bool.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/forms/textarea.tpl'               => 'views/smarty/admin/forms/textarea.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/errormessages.tpl'                => 'views/smarty/admin/errormessages.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/desc/list.tpl'                    => 'views/smarty/admin/desc/list.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/desc/main.tpl'                    => 'views/smarty/admin/desc/main.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/desc/base.tpl'                    => 'views/smarty/admin/desc/base.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/options/picture/import.tpl'       => 'views/smarty/admin/options/picture/import.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/options/picture/results.tpl'      => 'views/smarty/admin/options/picture/results.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/bootstrap.tpl'                    => 'views/smarty/admin/bootstrap.tpl',
    ],
    'blocks'         => [
        [
            'template' => 'bottomnaviitem.tpl',
            'block'    => 'admin_bottomnavicustom',
            'file'     => 'views/smarty/blocks/admin_bottomnavicustom.tpl',
        ],
    ],
];
