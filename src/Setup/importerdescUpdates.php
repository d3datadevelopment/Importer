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

$aQueries = array(
    array(
        'check' => "SELECT if(count(`OXID`), 1, 0) FROM `d3importerdesc` WHERE `OXFIELD` = 'd3longdesc2';",
        'do'    => "UPDATE `d3importerdesc` SET `OXFIELD` = 'd3longdesc_2_content' WHERE `OXFIELD` = 'd3longdesc2' ",
    ),
    array(
        'check' => "SELECT if(count(`OXID`), 1, 0) FROM `d3importerdesc` WHERE `OXFIELD` = 'd3longdesc3';",
        'do'    => "UPDATE `d3importerdesc` SET `OXFIELD` = 'd3longdesc_3_content' WHERE `OXFIELD` = 'd3longdesc3' ",
    ),
    array(
        'check' => "SELECT if(count(`OXID`), 1, 0) FROM `d3importerdesc` WHERE `OXFIELD` = 'd3longdesc4';",
        'do'    => "UPDATE `d3importerdesc` SET `OXFIELD` = 'd3longdesc_4_content' WHERE `OXFIELD` = 'd3longdesc4' ",
    ),
    array(
        'check' => "SELECT if(count(`OXID`), 1, 0) FROM `d3importerdesc` WHERE `OXFIELD` = 'd3longdesc5';",
        'do'    => "UPDATE `d3importerdesc` SET `OXFIELD` = 'd3longdesc_5_content' WHERE `OXFIELD` = 'd3longdesc5' ",
    ),
    array(
        'check' => "SELECT if(count(`OXID`), 1, 0) FROM `d3importerdesc` WHERE `OXFIELD` = 'd3longdesctitle';",
        'do'    => "UPDATE `d3importerdesc` SET `OXFIELD` = 'd3longdesc_1_title' WHERE `OXFIELD` = 'd3longdesctitle' ",
    ),
    array(
        'check' => "SELECT if(count(`OXID`), 1, 0) FROM `d3importerdesc` WHERE `OXFIELD` = 'd3longdesc2title';",
        'do'    => "UPDATE `d3importerdesc` SET `OXFIELD` = 'd3longdesc_2_title' WHERE `OXFIELD` = 'd3longdesc2title' ",
    ),
    array(
        'check' => "SELECT if(count(`OXID`), 1, 0) FROM `d3importerdesc` WHERE `OXFIELD` = 'd3longdesc3title';",
        'do'    => "UPDATE `d3importerdesc` SET `OXFIELD` = 'd3longdesc_3_title' WHERE `OXFIELD` = 'd3longdesc3title' ",
    ),
    array(
        'check' => "SELECT if(count(`OXID`), 1, 0) FROM `d3importerdesc` WHERE `OXFIELD` = 'd3longdesc4title';",
        'do'    => "UPDATE `d3importerdesc` SET `OXFIELD` = 'd3longdesc_4_title' WHERE `OXFIELD` = 'd3longdesc4title' ",
    ),
    array(
        'check' => "SELECT if(count(`OXID`), 1, 0) FROM `d3importerdesc` WHERE `OXFIELD` = 'd3longdesc5title';",
        'do'    => "UPDATE `d3importerdesc` SET `OXFIELD` = 'd3longdesc_5_title' WHERE `OXFIELD` = 'd3longdesc5title' ",
    ),

);
