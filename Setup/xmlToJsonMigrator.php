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

namespace D3\Importer\Setup;

use D3\ModCfg\Application\Model\d3simplexml;
use DOMDocument;

class xmlToJsonMigrator
{
    public function migrate($sXML)
    {
        if (empty($sXML)) {
            return '';
        }
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();

        if (false == $doc->loadXML($sXML)) {
            return '';
        }

        $oSimpleXml = new configurationXml($sXML);

        /** @var d3simplexml $oXMLMain */
        $oXMLMain                                = $oSimpleXml->getChild('MAINDATA');
        $aJson                                   = [];
        $aJson['d3_importer_config']                         = [];
        $aJson['d3_importer_config']['IMPORTTICKER']         = (string)$oXMLMain->getChild('IMPORTTICKER');
        $aJson['d3_importer_config']['IMPORTTYPE']           = (string)$oXMLMain->getChild('IMPORTTYPE');
        $aJson['d3_importer_config']['OMITLINES']            = (string)$oXMLMain->getChild('OMITLINES');
        $aJson['d3_importer_config']['ASSIGNIDENT']          = (string)$oXMLMain->getChild('ASSIGNIDENT');
        $aJson['d3_importer_config']['PRICEPLUSPERCENT']     = (string)$oXMLMain->getChild('PRICEPLUSPERCENT');
        $aJson['d3_importer_config']['PRICEDECIMALROUND']    = (string)$oXMLMain->getChild('PRICEDECIMALROUND');
        $aJson['d3_importer_config']['ARTNUM2OXID']          = (string)$oXMLMain->getChild('ARTNUM2OXID');
        $aJson['d3_importer_config']['MD54OXID']             = (string)$oXMLMain->getChild('MD54OXID');
        $aJson['d3_importer_main']               = [];
        $aJson['d3_importer_main']['FILE']       = (string)$oXMLMain->getChild('FILE');
        $aJson['d3_importer_main']['FILEROWS']   = (string)$oXMLMain->getChild('FILEROWS');
        $aJson['d3_importer_main']['FILELENGTH'] = (string)$oXMLMain->getChild('FILELENGTH');
        $aJson['d3_importer_main']['FILECOLUMS'] = (string)$oXMLMain->getChild('FILECOLUMS');
        $aJson['d3_importer_main']['TEXTSEPARATOR']            = (string)$oXMLMain->getChild('TEXTSEPARATOR');
        $aJson['d3_importer_main']['FILESEPARATOR']            = (string)$oXMLMain->getChild('FILESEPARATOR');
        $aJson['d3_importer_afterimport']                      = [];
        $aJson['d3_importer_afterimport']['AFTERIMPORTTICKER'] = (string)$oXMLMain->getChild('AFTERIMPORTTICKER');
        $aJson['d3_importer_fields']                           = [];
        $aJson['d3_importer_fields']['fields']                 = [];
        $aJson['d3_importer_fields']['update']                 = [];
        $aJson['d3_importer_variants']                         = [];
        $aJson['d3_importer_variants']['FIELD']                = [];

        $oXMLFields = $oSimpleXml->getChild("FIELDS");
        foreach ($oXMLFields->children() as $oChild) {
            /** @var d3simplexml $oChild */
            $sName = (string)$oChild->getAttribute('NAME');
            if (empty($sName)) {
                continue;
            }
            $iCSVColum       = trim((string)$oChild);
            $blDBFieldUpdate = (string)$oChild->getAttribute('UPDATE');

            $aJson['d3_importer_fields']['fields'][$iCSVColum] = $sName;
            if ($blDBFieldUpdate) {
                $aJson['d3_importer_fields']['update'][$iCSVColum] = $blDBFieldUpdate;
            }
        }

        $oXMLVariant = $oSimpleXml->getChild("VARIANT");

        foreach ($oXMLVariant->children() as $oChild) {
            $sDBFieldName = (string)$oChild->getAttribute('NAME');
            if (empty($sDBFieldName)) {
                continue;
            }
            $aJson['d3_importer_variants']['FIELD'][$sDBFieldName] = trim((string)$oChild);
        }
        $aJson['d3_importer_variants']['IMPORTTYPE']  = (string)$oXMLVariant->getChild('IMPORTTYPE');
        $aJson['d3_importer_variants']['IMPORTCOLUM'] = (string)$oXMLVariant->getChild('IMPORTCOLUM');

        $oXMLCategory = $oSimpleXml->getChild("CATEGORY");

        $aJson['d3_importer_category']                   = [];
        $aJson['d3_importer_category']['IMPORTTYPE']     = (string)$oXMLCategory->getChild('IMPORTTYPE');
        $aJson['d3_importer_category']['ASSIGNIDENT']    = (string)$oXMLCategory->getChild('ASSIGNIDENT');
        $aJson['d3_importer_category']['IMPORTCOLUM']    = [];
        $aJson['d3_importer_category']['COLUMSEPARATOR'] = [];

        $iIndex = 1;
        foreach ($oXMLCategory->getChild('IMPORTCOLUM') as $oTmp) {
            /** @var d3simplexml $oTmp */

            $aJson['d3_importer_category']['IMPORTCOLUM'][$iIndex]    = (string)$oTmp;
            $aJson['d3_importer_category']['COLUMSEPARATOR'][$iIndex] = (string)$oTmp->getAttribute('SEPARATOR');
            $iIndex++;
        }

        $oXMLCrosssell = $oSimpleXml->getChild("CROSSSELL");

        $aJson['d3_importer_cross']                         = [];
        $aJson['d3_importer_cross']['IMPORTTYPE_CROSS']     = (string)$oXMLCrosssell->getChild('IMPORTTYPE_CROSS');
        $aJson['d3_importer_cross']['IMPORTCOLUM_CROSS']    = (string)$oXMLCrosssell->getChild('IMPORTCOLUM_CROSS');
        $aJson['d3_importer_cross']['COLUMSEPARATOR_CROSS'] = (string)$oXMLCrosssell->getChild(
            'IMPORTCOLUM_CROSS'
        )->getAttribute(
            'SEPARATOR'
        );
        $aJson['d3_importer_cross']['IMPORTTYPE_ACC']       = (string)$oXMLCrosssell->getChild('IMPORTTYPE_ACC');
        $aJson['d3_importer_cross']['IMPORTCOLUM_ACC']      = (string)$oXMLCrosssell->getChild('IMPORTCOLUM_ACC');
        $aJson['d3_importer_cross']['COLUMSEPARATOR_ACC']   = (string)$oXMLCrosssell->getChild(
            'IMPORTCOLUM_ACC'
        )->getAttribute(
            'SEPARATOR'
        );

        $oXMLAttribute = $oSimpleXml->getChild("ATTRIBUTE");

        $aJson['d3_importer_attrib']                    = [];
        $aJson['d3_importer_attrib']['IMPORTTYPE']      = (string)$oXMLAttribute->getChild('IMPORTTYPE');
        $aJson['d3_importer_attrib']['IMPORTCOLUM']     = (string)$oXMLAttribute->getChild('IMPORTCOLUM');
        $aJson['d3_importer_attrib']['COLUMSEPARATOR1'] = (string)$oXMLAttribute->getChild('IMPORTCOLUM')->getAttribute(
            'SEPARATOR1'
        );
        $aJson['d3_importer_attrib']['COLUMSEPARATOR2'] = (string)$oXMLAttribute->getChild('IMPORTCOLUM')->getAttribute(
            'SEPARATOR2'
        );

        $oXMLVendor = $oSimpleXml->getChild("VENDOR");

        $aJson['d3_importer_vendors']                          = [];
        $aJson['d3_importer_vendors']['VENDOR']                = [];
        $aJson['d3_importer_vendors']['VENDOR']['IMPORTTYPE']  = (string)$oXMLVendor->getChild('IMPORTTYPE');
        $aJson['d3_importer_vendors']['VENDOR']['IMPORTCOLUM'] = (string)$oXMLVendor->getChild('IMPORTCOLUM');

        $oXMLManufacturer = $oSimpleXml->getChild("MANUFACTURER");

        $aJson['d3_importer_vendors']['MANUFACTURER']                = [];
        $aJson['d3_importer_vendors']['MANUFACTURER']['IMPORTTYPE']  = (string)$oXMLManufacturer->getChild(
            'IMPORTTYPE'
        );
        $aJson['d3_importer_vendors']['MANUFACTURER']['IMPORTCOLUM'] = (string)$oXMLManufacturer->getChild(
            'IMPORTCOLUM'
        );

        $oXMLPriceToArticle = $oSimpleXml->getChild("PRICE2ARTICLE");

        $aJson['d3_importer_price2art']                = [];
        $aJson['d3_importer_price2art']['IMPORTTYPE']  = (string)$oSimpleXml->getChild("PRICE2ARTICLE_IMPORTTYPE");
        $aJson['d3_importer_price2art']['IMPORTCOLUM'] = [];

        $iIndex = 1;
        foreach ($oXMLPriceToArticle as $oPrice2Article) {
            if (false == strlen($oPrice2Article->IMPORTCOLUM_PRICE)) {
                continue;
            }
            $aPriceToArticle                                        = [];
            $aPriceToArticle['PRICE']                               = (string)$oPrice2Article->IMPORTCOLUM_PRICE;
            $aPriceToArticle['FROM']                                = (string)$oPrice2Article->IMPORTCOLUM_FROM;
            $aPriceToArticle['TO']                                  = (string)$oPrice2Article->IMPORTCOLUM_TO;
            $aJson['d3_importer_price2art']['IMPORTCOLUM'][$iIndex] = $aPriceToArticle;
            $iIndex++;
        }

        $oXMLSelectLists = $oSimpleXml->getChild("SELECTLIST");

        $aJson['d3_importer_selectlist']                = [];
        $aJson['d3_importer_selectlist']['IMPORTTYPE']  = (string)$oSimpleXml->getChild("SELECTLIST_IMPORTTYPE");
        $aJson['d3_importer_selectlist']['IMPORTCOLUM'] = [];
        $iIndex                                         = 1;
        foreach ($oXMLSelectLists as $oSelectListXML) {
            /** @var d3simplexml $oSelectListXML */

            $sName = (string)$oSelectListXML->getChild('NAME');
            if (empty($sName)) {
                continue;
            }

            $aJson['d3_importer_selectlist']['IMPORTCOLUM'][$iIndex]['NAME']    = $sName;
            $aJson['d3_importer_selectlist']['IMPORTCOLUM'][$iIndex]['ALTNAME'] = (string)$oSelectListXML->getChild(
                'ALTNAME'
            );
            $aJson['d3_importer_selectlist']['IMPORTCOLUM'][$iIndex]['VALUE']   = (string)$oSelectListXML->getChild(
                'VALUE'
            );
            $oValueXML                                                          = $oSelectListXML->getChild('VALUE');

            $aJson['d3_importer_selectlist']['IMPORTCOLUM'][$iIndex]['SEPARATOR']       = (string)$oValueXML->getAttribute(
                'SEPARATOR'
            );
            $aJson['d3_importer_selectlist']['IMPORTCOLUM'][$iIndex]['SEPARATOR_PRICE'] = (string)$oValueXML->getAttribute(
                'SEPARATOR_PRICE'
            );
            $iIndex++;
        }

        $oXMLPictures                                  = $oSimpleXml->getChild("PICTURE");
        $aJson['d3_picture_main']                      = [];
        $aJson['d3_picture_main']['aXMLPictureParams'] = [];
        $iIndex                                        = 0;
        foreach ($oXMLPictures as $oXMLPicture) {
            /** @var d3simplexml $oXMLPicture */

            $sImportField = (string)$oXMLPicture->getChild('IMPORTFIELD');
            if (empty($sImportField)) {
                continue;
            }
            $aJson['d3_picture_main']['aXMLPictureParams'][$iIndex]['IMPORTFIELD'] = $sImportField;
            $oXMLImageFields                                                       = $oXMLPicture->getChild(
                'IMAGEFIELDS'
            );
            foreach ($oXMLImageFields as $oXMLImageField) {
                $sImageField = (string)$oXMLImageField;
                if (empty($sImageField)) {
                    continue;
                }
                $aJson['d3_picture_main']['aXMLPictureParams'][$iIndex]['IMAGEFIELDS'][$sImageField] = '1';
            }
            $iIndex++;
        }

        return $aJson;
    }
}
