<?php

/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author        D3 Data Development - Daniel Seifert <support@shopmodule.com>
 * @link          http://www.oxidmodule.com
 */

namespace D3\Importer\Setup;

use D3\ModCfg\Application\Model\d3simplexml;
use Traversable;

class configurationXml extends d3simplexml
{
    /**
     * @param $nodeName
     */
    public function deleteChild($nodeName)
    {
        if ($this->$nodeName) {
            unset($this->$nodeName);
        }
    }

    /**
     * @param $name string
     *
     * @return d3simplexml
     */
    public function getChild($nodeName)
    {
        if (!$oReturn = $this->$nodeName) {
            $this->addChild($nodeName);
            /** @var d3simplexml $oReturn */
            $oReturn = $this->$nodeName;
        }

        return $oReturn;
    }

    /**
     * @param $name
     *
     * @return string
     */
    public function getAttribute($attributeName)
    {
        foreach ($this->attributes() as $key => $val) {
            if ($key == $attributeName) {
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
        $arrTemp = [];
        foreach ($this->attributes() as $a => $b) {
            $arrTemp[$cnt] = (string)$a;
            $cnt++;
        }

        return $arrTemp;
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

        return $cnt;
    }

    /**
     * @return int
     */
    public function getAttributeCount()
    {
        $attribs = $this->attributes();
        if (is_iterable($attribs)) {
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
        $arrTemp = [];
        for ($i = 0; $i < $len; $i++) {
            $arrTemp[$names[$i]] = $this->getAttribute((string)$names[$i]);
        }

        return $arrTemp;
    }
}
