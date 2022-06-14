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

use D3\ModCfg\Application\Model\d3simplexml;

if (false == function_exists('d3importerMigrateXmlToJson')) {
    /**
     * @param $sXML
     *
     * @return array|int|SimpleXMLElement[]|string
     */
    function d3importerMigrateXmlToJson($sXML)
    {
        if (false == class_exists('d3importer_migratexmltojson')) {
            /**
             * Class d3importer_migratexmltojson
             */
            class d3importer_migratexmltojson extends d3simplexml
            {

                /**
                 * @param $name
                 */
                public function deleteChild($name)
                {
                    if ($this->$name) {
                        unset($this->$name);
                    }
                }

                /**
                 * @param $name string
                 *
                 * @return d3simplexml
                 */
                public function getChild($name)
                {
                    if (!$oReturn = $this->$name) {
                        $this->addChild($name);
                        /** @var d3simplexml $oReturn */
                        $oReturn = $this->$name;
                    }

                    return $oReturn;
                }

                /**
                 * @param $name
                 *
                 * @return string
                 */
                public function getAttribute($name)
                {
                    foreach ($this->attributes() as $key => $val) {
                        if ($key == $name) {
                            return (string)$val;
                        }
                    }

                    return '';
                }

                /**
                 * @return array
                 */
                public function getAttributeNames()
                {
                    $cnt     = 0;
                    $arrTemp = array();
                    foreach ($this->attributes() as $a => $b) {
                        $arrTemp[$cnt] = (string)$a;
                        $cnt++;
                    }

                    return (array)$arrTemp;
                }

                /**
                 * @param bool $sName
                 *
                 * @return int
                 */
                public function getChildrenCount($sName = false)
                {
                    $cnt = 0;
                    foreach ($this->children() as $node => $val) {
                        if ($sName && $sName == $node) {
                            $cnt++;
                        } elseif (!$sName) {
                            $cnt++;
                        }
                    }

                    return (int)$cnt;
                }

                /**
                 * @return int
                 */
                public function getAttributeCount()
                {
                    $attribs = $this->attributes();
                    if (is_array($attribs) || $attribs instanceof Traversable) {
                        return count($attribs);
                    }

                    return 0;
                }

                /**
                 * @param $names
                 *
                 * @return array
                 */
                public function getAttributesArray($names)
                {
                    $len     = count($names);
                    $arrTemp = array();
                    for ($i = 0; $i < $len; $i++) {
                        $arrTemp[$names[$i]] = $this->getAttribute((string)$names[$i]);
                    }

                    return (array)$arrTemp;
                }
            }
        }

        if (empty($sXML)) {
            return '';
        }
        libxml_use_internal_errors(true);
        $doc = new DOMDocument;

        if (false == $doc->loadXml($sXML)) {
            return '';
        }

        $oSimpleXml = new d3importer_migratexmltojson($sXML);

        /** @var d3simplexml $oXMLMain */
        $oXMLMain                                = $oSimpleXml->getChild('MAINDATA');
        $aJson                                   = array();
        $aJson['d3_importer_config']                         = array();
        $aJson['d3_importer_config']['IMPORTTICKER']         = (string)$oXMLMain->getChild('IMPORTTICKER');
        $aJson['d3_importer_config']['IMPORTTYPE']           = (string)$oXMLMain->getChild('IMPORTTYPE');
        $aJson['d3_importer_config']['OMITLINES']            = (string)$oXMLMain->getChild('OMITLINES');
        $aJson['d3_importer_config']['ASSIGNIDENT']          = (string)$oXMLMain->getChild('ASSIGNIDENT');
        $aJson['d3_importer_config']['PRICEPLUSPERCENT']     = (string)$oXMLMain->getChild('PRICEPLUSPERCENT');
        $aJson['d3_importer_config']['PRICEDECIMALROUND']    = (string)$oXMLMain->getChild('PRICEDECIMALROUND');
        $aJson['d3_importer_config']['ARTNUM2OXID']          = (string)$oXMLMain->getChild('ARTNUM2OXID');
        $aJson['d3_importer_config']['MD54OXID']             = (string)$oXMLMain->getChild('MD54OXID');
        $aJson['d3_importer_config']['MD54OXID']             = (string)$oXMLMain->getChild('MD54OXID');
        $aJson['d3_importer_main']               = array();
        $aJson['d3_importer_main']['FILE']       = (string)$oXMLMain->getChild('FILE');
        $aJson['d3_importer_main']['FILEROWS']   = (string)$oXMLMain->getChild('FILEROWS');
        $aJson['d3_importer_main']['FILELENGTH'] = (string)$oXMLMain->getChild('FILELENGTH');
        $aJson['d3_importer_main']['FILECOLUMS'] = (string)$oXMLMain->getChild('FILECOLUMS');
        $aJson['d3_importer_main']['TEXTSEPARATOR']            = (string)$oXMLMain->getChild('TEXTSEPARATOR');
        $aJson['d3_importer_main']['FILESEPARATOR']            = (string)$oXMLMain->getChild('FILESEPARATOR');
        $aJson['d3_importer_afterimport']                      = array();
        $aJson['d3_importer_afterimport']['AFTERIMPORTTICKER'] = (string)$oXMLMain->getChild('AFTERIMPORTTICKER');
        $aJson['d3_importer_fields']                           = array();
        $aJson['d3_importer_fields']['fields']                 = array();
        $aJson['d3_importer_fields']['update']                 = array();
        $aJson['d3_importer_variants']                         = array();
        $aJson['d3_importer_variants']['FIELD']                = array();

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

        $aJson['d3_importer_category']                   = array();
        $aJson['d3_importer_category']['IMPORTTYPE']     = (string)$oXMLCategory->getChild('IMPORTTYPE');
        $aJson['d3_importer_category']['ASSIGNIDENT']    = (string)$oXMLCategory->getChild('ASSIGNIDENT');
        $aJson['d3_importer_category']['IMPORTCOLUM']    = array();
        $aJson['d3_importer_category']['COLUMSEPARATOR'] = array();

        $iIndex = 1;
        foreach ($oXMLCategory->getChild('IMPORTCOLUM') as $oTmp) {
            /** @var d3simplexml $oTmp */

            $aJson['d3_importer_category']['IMPORTCOLUM'][$iIndex]    = (string)$oTmp;
            $aJson['d3_importer_category']['COLUMSEPARATOR'][$iIndex] = (string)$oTmp->getAttribute('SEPARATOR');
            $iIndex++;
        }

        $oXMLCrosssell = $oSimpleXml->getChild("CROSSSELL");

        $aJson['d3_importer_cross']                         = array();
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

        $aJson['d3_importer_attrib']                    = array();
        $aJson['d3_importer_attrib']['IMPORTTYPE']      = (string)$oXMLAttribute->getChild('IMPORTTYPE');
        $aJson['d3_importer_attrib']['IMPORTCOLUM']     = (string)$oXMLAttribute->getChild('IMPORTCOLUM');
        $aJson['d3_importer_attrib']['COLUMSEPARATOR1'] = (string)$oXMLAttribute->getChild('IMPORTCOLUM')->getAttribute(
            'SEPARATOR1'
        );
        $aJson['d3_importer_attrib']['COLUMSEPARATOR2'] = (string)$oXMLAttribute->getChild('IMPORTCOLUM')->getAttribute(
            'SEPARATOR2'
        );

        $oXMLVendor = $oSimpleXml->getChild("VENDOR");

        $aJson['d3_importer_vendors']                          = array();
        $aJson['d3_importer_vendors']['VENDOR']                = array();
        $aJson['d3_importer_vendors']['VENDOR']['IMPORTTYPE']  = (string)$oXMLVendor->getChild('IMPORTTYPE');
        $aJson['d3_importer_vendors']['VENDOR']['IMPORTCOLUM'] = (string)$oXMLVendor->getChild('IMPORTCOLUM');

        $oXMLManufacturer = $oSimpleXml->getChild("MANUFACTURER");

        $aJson['d3_importer_vendors']['MANUFACTURER']                = array();
        $aJson['d3_importer_vendors']['MANUFACTURER']['IMPORTTYPE']  = (string)$oXMLManufacturer->getChild(
            'IMPORTTYPE'
        );
        $aJson['d3_importer_vendors']['MANUFACTURER']['IMPORTCOLUM'] = (string)$oXMLManufacturer->getChild(
            'IMPORTCOLUM'
        );

        $oXMLPriceToArticle = $oSimpleXml->getChild("PRICE2ARTICLE");

        $aJson['d3_importer_price2art']                = array();
        $aJson['d3_importer_price2art']['IMPORTTYPE']  = (string)$oSimpleXml->getChild("PRICE2ARTICLE_IMPORTTYPE");
        $aJson['d3_importer_price2art']['IMPORTCOLUM'] = array();

        $iIndex = 1;
        foreach ($oXMLPriceToArticle as $oPrice2Article) {
            if (false == strlen($oPrice2Article->IMPORTCOLUM_PRICE)) {
                continue;
            }
            $aPriceToArticle                                        = array();
            $aPriceToArticle['PRICE']                               = (string)$oPrice2Article->IMPORTCOLUM_PRICE;
            $aPriceToArticle['FROM']                                = (string)$oPrice2Article->IMPORTCOLUM_FROM;
            $aPriceToArticle['TO']                                  = (string)$oPrice2Article->IMPORTCOLUM_TO;
            $aJson['d3_importer_price2art']['IMPORTCOLUM'][$iIndex] = $aPriceToArticle;
            $iIndex++;
        }

        $oXMLSelectLists = $oSimpleXml->getChild("SELECTLIST");

        $aJson['d3_importer_selectlist']                = array();
        $aJson['d3_importer_selectlist']['IMPORTTYPE']  = (string)$oSimpleXml->getChild("SELECTLIST_IMPORTTYPE");
        $aJson['d3_importer_selectlist']['IMPORTCOLUM'] = array();
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
        $aJson['d3_picture_main']                      = array();
        $aJson['d3_picture_main']['aXMLPictureParams'] = array();
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
