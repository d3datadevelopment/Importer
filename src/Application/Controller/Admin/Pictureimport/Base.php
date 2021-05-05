<?php
/**
 * This Software is the property of D3 Data Development
 * and is protected by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * key is a violation of the license agreement and will be
 * prosecuted by civil and criminal law.
 * Inhaber: Thomas Dartsch
 * Alle Rechte vorbehalten
 *
 * @author        Thomas Dartsch <thomas.dartsch@shopmodule.com>
 * @copyright (C) 2008, D3 Data Development
 * @see           https://www.shopmodule.com
 */
use OxidEsales\Eshop\Application\Controller\Admin\AdminController;

/**
 * Picture manager.
 * Returns template, that arranges two other templates ("d3_picture.tpl"
 * and "d3_importer_main.tpl") to frame.
 *
 * @package admin
 */
class d3_importer_Application_Controller_Admin_Pictureimport_Base extends AdminController
{
    /**
     * Current class template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'd3_picture.tpl';
}
