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
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '1';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('1', 'oxid', 'Artikel-ID', 'Article-ID', 10, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '2';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('2', 'oxshopid', 'Shop-ID', 'Shop-ID', 20, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '3';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('3', 'oxparentid', 'Vaterartikel-ID', 'parent-ID', 30, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '4';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('4', 'oxactive', 'Aktiv?', 'active?', 40, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '5';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('5', 'oxactivefrom', 'Aktiv von', 'active from', 50, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '6';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('6', 'oxactiveto', 'Aktiv bis', 'active to', 60, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '7';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('7', 'oxartnum', 'Artikelnummer', 'Prod.No.', 70, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '8';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('8', 'oxean', 'EAN', 'EAN', 80, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '9';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('9', 'oxdistean', 'Hersteller EAN', 'Man. EAN', 90, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '10';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('10', 'oxtitle', 'Titel', 'Title', 100, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '11';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('11', 'oxshortdesc', 'Kurzbeschreibung', 'Short Descr.', 110, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '12';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('12', 'oxlongdesc', 'Langbeschreibung', 'Long Descr.', 120, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '13';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('13', 'oxprice', 'Preis', 'Price', 130, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '14';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('14', 'oxblfixedprice', 'keine Sonderaktionen erlaubt', 'No Promotions allowed', 140, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '15';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('15', 'oxpricea', 'Preis A', 'Price A', 150, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '16';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('16', 'oxpriceb', 'Preis B', 'Price B', 160, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '17';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('17', 'oxpricec', 'Preis C', 'Price C', 170, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '18';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('18', 'oxbprice', 'Preisinfo', 'Purchase Price', 180, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '19';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('19', 'oxtprice', 'UVP', 'RRP', 190, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '20';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('20', 'oxunitname', 'Einheit', 'Unit', 200, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '21';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('21', 'oxunitquantity', 'Mengeneinheit', 'Quantity', 210, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '22';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('22', 'oxexturl', 'Externe URL', 'External URL', 220, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '23';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('23', 'oxurldesc', 'Text für ext. URL', 'Text for external URL', 230, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '24';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('24', 'oxurlimg', 'Bild für ext. URL', 'Picture for external URL', 240, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '25';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('25', 'oxvat', 'MwSt', 'Spec. VAT', 250, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '26';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('26', 'oxthumb', 'Thumbnail (Vorschaubild)', 'Thumbnail', 260, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '27';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('27', 'oxicon', 'Icon', 'Icon', 270, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '28';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('28', 'oxpic1', 'Bild 1', 'Picture 1', 280, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '29';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('29', 'oxpic2', 'Bild 2', 'Picture 2', 290, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '30';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('30', 'oxpic3', 'Bild 3', 'Picture 3', 300, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '31';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('31', 'oxpic4', 'Bild 4', 'Picture 4', 310, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '32';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('32', 'oxpic5', 'Bild 5', 'Picture 5', 320, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '33';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('33', 'oxpic6', 'Bild 6', 'Picture 6', 330, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '34';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('34', 'oxpic7', 'Bild 7', 'Picture 7', 340, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '35';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('35', 'oxpic8', 'Bild 8', 'Picture 8', 350, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '36';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('36', 'oxpic9', 'Bild 9', 'Picture 9', 360, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '37';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('37', 'oxpic10', 'Bild 10', 'Picture 10', 370, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '38';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('38', 'oxpic11', 'Bild 11', 'Picture 11', 380, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '39';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('39', 'oxpic12', 'Bild 12', 'Picture 12', 390, '1', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '40';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('40', 'oxzoom1', 'Zoombild 1', 'Zoompicture 1', 400, '1', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '41';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('41', 'oxzoom2', 'Zoombild 2', 'Zoompicture 2', 410, '1', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '42';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('42', 'oxzoom3', 'Zoombild 3', 'Zoompicture 3', 420, '1', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '43';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('43', 'oxzoom4', 'Zoombild 4', 'Zoompicture 4', 430, '1', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '44';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('44', 'oxweight', 'Gewicht', 'Weight', 440, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '45';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('45', 'oxstock', 'Lagerbestand', 'Stock', 450, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '46';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('46', 'oxstockflag', 'Lagerstatus', 'Delivery Status', 460, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '47';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('47', 'oxstocktext', 'Auf Lager Textmeldung', 'In Stock Message', 470, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '48';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('48', 'oxnostocktext', 'Nicht auf Lager Textmeldung', 'Out Of Stock Message', 480, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '49';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('49', 'oxdelivery', 'Lieferbar am', 'Available on', 490, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '50';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('50', 'oxinsert', 'Einstelldatum', 'Insert Date', 500, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '51';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('51', 'oxtimestamp', 'Zeitstempel', 'Timestamp', 510, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '52';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('52', 'oxlength', 'Länge', 'Length', 520, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '53';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('53', 'oxwidth', 'Breite', 'Width', 530, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '54';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('54', 'oxheight', 'Höhe', 'Height', 540, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '55';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('55', 'oxaktion', 'Aktion', 'Action', 550, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '56';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('56', 'oxfile', 'Datei', 'File', 560, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '57';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('57', 'oxsearchkeys', 'Suchbegriffe', 'Searchkeys', 570, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '58';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('58', 'oxtemplate', 'alternatives Template', 'Alt. Template', 580, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '59';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('59', 'oxquestionemail', 'alternativer Ansprechpartner', 'Alt. Contact', 590, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '60';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('60', 'oxissearch', 'Kann gesucht werden ?', 'Searchable', 600, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '61';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('61', 'oxvarname', 'Varianten: Name der Auswahl', 'Variants: Name of Selection', 610, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '62';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('62', 'oxvarstock', 'Lagerstand aller Varianten', 'All variants stock', 620, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '63';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('63', 'oxvarcount', 'Anzahl der Varianten', 'Variants count', 630, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '64';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('64', 'oxvarselect', 'Varianten: Auswahl', 'Variant:s: Selection', 640, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '65';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('65', 'oxvarminprice', 'kleinster Variantenpreis', 'min. variantsprice', 650, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '66';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('66', 'oxvarname_1', 'Varianten Sprache 2: Name', 'Lang. 2 Variants: Name of Selection', 660, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '67';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('67', 'oxvarselect_1', 'Varianten Sprache 2: Auswahl', 'Lang. 2 Variants: Selection', 670, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '68';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('68', 'oxvarname_2', 'Varianten Sprache 3: Name', 'Lang. 3 Variants: Name of Selection', 680, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '69';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('69', 'oxvarselect_2', 'Varianten Sprache 3: Auswahl', 'Lang. 3 Variants: Selection', 690, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '70';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('70', 'oxvarname_3', 'Varianten Sprache 4: Name', 'Lang. 4 Variants: Name of Selection', 700, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '71';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('71', 'oxvarselect_3', 'Varianten Sprache 4: Auswahl', 'Lang. 4 Variants: Selection', 710, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '72';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('72', 'oxtitle_1', 'Sprache 2: Titel', 'Lang. 2: Title', 720, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '73';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('73', 'oxshortdesc_1', 'Sprache 2: Kurzbeschreibung', 'Lang. 2: Short Descr.', 730, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '74';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('74', 'oxlongdesc_1', 'Sprache 2: Langbeschreibung', 'Lang. 2: Long Descr.', 740, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '75';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('75', 'oxurldesc_1', 'Sprache 2: Text für ext. URL', 'Lang. 2: Text for ext. URL', 750, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '76';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('76', 'oxsearchkeys_1', 'Sprache 2: Suchbegriffe', 'Lang. 2: Searchkeys', 760, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '77';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('77', 'oxtitle_2', 'Sprache 3: Titel', 'Lang. 3: Title', 770, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '78';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('78', 'oxshortdesc_2', 'Sprache 3: Kurzbeschreibung', 'Lang. 3: Short Descr.', 780, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '79';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('79', 'oxlongdesc_2', 'Sprache 3: Langbeschreibung', 'Lang. 3: Long Descr.', 790, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '80';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('80', 'oxurldesc_2', 'Sprache 3: Text für ext. URL', 'Lang. 3: Text for ext. URL', 800, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '81';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('81', 'oxsearchkeys_2', 'Sprache 3: Suchbegriffe', 'Lang. 3: Searchkeys', 810, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '82';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('82', 'oxtitle_3', 'Sprache 4: Titel', 'Lang. 4: Title', 820, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '83';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('83', 'oxshortdesc_3', 'Sprache 4: Kurzbeschreibung', 'Lang. 4: Short Descr.', 830, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '84';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('84', 'oxlongdesc_3', 'Sprache 4: Langbeschreibung', 'Lang. 4: Long Descr.', 840, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '85';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('85', 'oxurldesc_3', 'Sprache 4: Text für ext. URL', 'Lang. 4: Text for ext. URL', 850, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '86';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('86', 'oxsearchkeys_3', 'Sprache 4: Suchbegriffe', 'Lang. 4: Searchkeys', 860, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '87';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('87', 'oxbundleid', 'Artikel dazu (Bundle)', 'Bundled Product', 870, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '88';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('88', 'oxfolder', 'Folder, NICHT benutzen!', 'Folder, dont use!', 880, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '89';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('89', 'oxsubclass', 'SubKlasse, NICHT benutzen!', 'subclass, dont use!', 890, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '90';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('90', 'oxstocktext_1', 'Sprache 2: Auf Lager Text', 'Lang. 2: In Stock Message', 900, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '91';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('91', 'oxstocktext_2', 'Sprache 3: Auf Lager Text', 'Lang. 3: In Stock Message', 910, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '92';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('92', 'oxstocktext_3', 'Sprache 4: Auf Lager Text', 'Lang. 4: In Stock Message', 920, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '93';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('93', 'oxnostocktext_1', 'Sprache 2: Nicht auf Lager Text', 'Lang. 2: Out Of Stock Message', 930, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '94';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('94', 'oxnostocktext_2', 'Sprache 3: Nicht auf Lager Text', 'Lang. 3: Out Of Stock Message', 940, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '95';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('95', 'oxnostocktext_3', 'Sprache 4: Nicht auf Lager Text', 'Lang. 4: Out Of Stock Message', 950, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '96';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('96', 'oxsort', 'Varianten: Sortierung', 'Variants: sorting', 960, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '97';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('97', 'oxsoldamount', 'verkaufte Menge', 'Sold Amount', 970, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '98';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('98', 'oxnonmaterial', 'Immateriales Produkt', 'Intangible Product', 980, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '99';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('99', 'oxfreeshipping', 'Versandkostenfrei', 'Free Shipping', 990, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '100';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('100', 'oxremindactive', 'Autom. eMail - Lagerstand ?', 'Send e-mail - stock falls below value', 1000, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '101';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('101', 'oxremindamount', 'Autom. eMail - Wert', 'Send e-mail - Value', 1010, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '102';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('102', 'oxamitemid', '', '', 1020, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '103';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('103', 'oxamtaskid', '', '', 1030, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '104';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('104', 'oxvendorid', 'Lieferanten ID', 'Distributor ID', 1040, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '105';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('105', 'oxskipdiscounts', 'Alle neg. Nachlässe ignor.', 'Skip all negative Discounts', 1050, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '106';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('106', 'oxrating', '', '', 1060, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '107';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('107', 'oxratingcnt', '', '', 1070, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '108';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('108', 'oxmindeltime', 'Lieferzeit von', 'Delivery time from', 1080, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '109';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('109', 'oxmaxdeltime', 'Lieferzeit bis', 'Delivery time to', 1090, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '110';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('110', 'oxdeltimeunit', 'Lieferzeiteinheit (Tage, Wochen ..)', 'Delivery time (Days, Weeks ..)', 1100, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '111';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('111', 'oxorderinfo', 'Bestell. Info', 'Order Info', 1051, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '112';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('112', 'oxpixiexport', '', '', 1052, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '113';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('113', 'oxpixiexported', '', '', 1053, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '114';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('114', 'oxvpe', 'Verpackungseinheit', 'Unit', 1054, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '115';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('115', 'oxmanufacturerid', 'Hersteller ID', 'Manufacturer ID', 1045, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '116';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('116', 'oxisconfigurable', 'Artikel ist individual.', 'Product can be customized', 605, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '117';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('117', 'oxvarmaxprice', '', '', 607, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '118';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('118', 'oxupdateprice', 'Preis aktualisieren, Basispreis', '', 1110, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '119';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('119', 'oxupdatepricea', 'Preis aktualisieren, Preis A', '', 1120, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '120';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('120', 'oxupdatepriceb', 'Preis aktualisieren, Preis B', '', 1130, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '121';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('121', 'oxupdatepricec', 'Preis aktualisieren, Preis C', '', 1140, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '122';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('122', 'oxupdatepricetime', 'Preis aktualisieren, Startzeit', '', 1150, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '123';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('123', 'oxisdownloadable', 'Download von Dateien zulassen', '', 1160, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '124';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('124', 'oxmpn', 'Hersteller-Artikelnummer', 'MPN', 95, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '125';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('125', 'oxpicsgenerated', 'Bilder erzeugt', 'Picture generated', 275, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '126';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('126', 'oetags', 'Stichworte', 'Search Terms', 1220, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '127';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('127', 'oetags_1', 'Sprache 2: Stichworte', 'Lang. 2: Search Terms', 1230, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '128';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('128', 'oetags_2', 'Sprache 3: Stichworte', 'Lang. 3: Search Terms', 1240, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '129';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('129', 'oetags_3', 'Sprache 4: Stichworte', 'Lang. 4: Search Terms', 1250, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '200';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('200', 'd3importflag', 'internes Importflag', 'internal Importflag', 2000, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '201';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('201', 'd3importprofileid', 'internes Importflag', 'internal Importflag', 2010, '0', '1');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '202';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('202', 'd3importpic1', 'Bild Importfeld 1', 'Picture Importfield 1', 2020, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '203';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('203', 'd3importpic2', 'Bild Importfeld 2', 'Picture Importfield 2', 2030, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '204';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('204', 'd3importpic3', 'Bild Importfeld 3', 'Picture Importfield 3', 2040, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '205';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('205', 'd3importpic4', 'Bild Importfeld 4', 'Picture Importfield 4', 2050, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '206';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('206', 'd3importpic5', 'Bild Importfeld 5', 'Picture Importfield 5', 2060, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '207';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('207', 'd3importpic6', 'Bild Importfeld 6', 'Picture Importfield 6', 2070, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '208';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('208', 'd3importpic7', 'Bild Importfeld 7', 'Picture Importfield 7', 2080, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '209';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('209', 'd3importpic8', 'Bild Importfeld 8', 'Picture Importfield 8', 2090, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '210';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('210', 'd3importpic9', 'Bild Importfeld 9', 'Picture Importfield 9', 2100, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '211';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('211', 'd3importpic10', 'Bild Importfeld 10', 'Picture Importfield 10', 2110, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '212';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('212', 'd3oqm_package', 'D3 Verpackungseinheit', 'D3 packaging unit', 2120, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '213';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('213', 'd3oqm_minimum', 'D3 minimale Bestellmenge', 'D3 minimum order quantity', 2130, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '214';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('214', 'd3oqm_maximum', 'D3 maximale Bestellmenge', 'D3 maximum order quantity', 2140, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '215';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('215', 'oxpic13', 'Bild 13', 'Picture 13', 2150, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '216';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('216', 'oxpic14', 'Bild 14', 'Picture 14', 2160, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '217';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('217', 'oxpic15', 'Bild 15', 'Picture 15', 2170, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '218';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('218', 'oxpic16', 'Bild 16', 'Picture 16', 2180, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '219';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('219', 'oxpic17', 'Bild 17', 'Picture 17', 2190, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '220';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('220', 'oxpic18', 'Bild 18', 'Picture 18', 2200, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '221';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('221', 'oxpic19', 'Bild 19', 'Picture 19', 2210, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '222';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('222', 'oxpic20', 'Bild 20', 'Picture 20', 2220, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '223';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('223', 'd3importpic11', 'Bild Importfeld 11', 'Picture Importfield 11', 2230, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '224';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('224', 'd3importpic12', 'Bild Importfeld 12', 'Picture Importfield 12', 2240, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '225';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('225', 'd3importpic13', 'Bild Importfeld 13', 'Picture Importfield 13', 2250, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '226';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('226', 'd3importpic14', 'Bild Importfeld 14', 'Picture Importfield 14', 2260, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '227';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('227', 'd3importpic15', 'Bild Importfeld 15', 'Picture Importfield 15', 2270, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '228';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('228', 'd3importpic16', 'Bild Importfeld 16', 'Picture Importfield 16', 2280, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '229';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('229', 'd3importpic17', 'Bild Importfeld 17', 'Picture Importfield 17', 2290, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '230';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('230', 'd3importpic18', 'Bild Importfeld 18', 'Picture Importfield 18', 2300, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '231';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('231', 'd3importpic19', 'Bild Importfeld 19', 'Picture Importfield 19', 2310, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '232';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('232', 'd3importpic20', 'Bild Importfeld 20', 'Picture Importfield 20', 2320, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '233';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('233', 'd3longdesc_2_content', 'Content-Tab Beschreibung 2', 'content-tab description 2', 2330, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '234';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('234', 'd3longdesc_3_content', 'Content-Tab Beschreibung 3', 'content-tab description 3', 2340, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '235';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('235', 'd3longdesc_4_content', 'Content-Tab Beschreibung 4', 'content-tab description 4', 2350, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '236';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('236', 'd3longdesc_5_content', 'Content-Tab Beschreibung 5', 'content-tab description 5', 2360, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '237';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('237', 'd3longdesc_1_title', 'Content-Tab Titel 1', 'content-tab title 1', 2370, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '238';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('238', 'd3longdesc_2_title', 'Content-Tab Titel 2', 'content-tab title 2', 2380, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '239';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('239', 'd3longdesc_3_title', 'Content-Tab Titel 3', 'content-tab title 3', 2390, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '240';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('240', 'd3longdesc_4_title', 'Content-Tab Titel 4', 'content-tab title 4', 2400, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxid = '241';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES('241', 'd3longdesc_5_title', 'Content-Tab Titel 5', 'content-tab title 5', 2410, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxfield = 'oxhidden';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES(MD5('oxhidden'), 'oxhidden', 'Versteckt', 'Hidden', 2420, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxfield = 'd3longdesc_1_active';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES(MD5('d3longdesc_1_active'), 'd3longdesc_1_active', 'Content-Tab Aktiv 1', 'content-tab active 1', 2375, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxfield = 'd3longdesc_2_active';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES(MD5('d3longdesc_2_active'), 'd3longdesc_2_active', 'Content-Tab Aktiv 2', 'content-tab active 2', 2385, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxfield = 'd3longdesc_3_active';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES(MD5('d3longdesc_3_active'), 'd3longdesc_3_active', 'Content-Tab Aktiv 3', 'content-tab active 3', 2395, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxfield = 'd3longdesc_4_active';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES(MD5('d3longdesc_4_active'), 'd3longdesc_4_active', 'Content-Tab Aktiv 4', 'content-tab active 4', 2405, '0', '0');",
    ),
    array(
        'check' => "SELECT if(count(OXID), 0, 1) FROM d3importerdesc WHERE oxfield = 'd3longdesc_5_active';",
        'do'    => "INSERT IGNORE INTO `d3importerdesc` (`OXID`, `OXFIELD`, `OXDESC`, `OXDESC_1`, `OXORDER`, `OXISPIC`, `OXISDISABLED`) VALUES(MD5('d3longdesc_5_active'), 'd3longdesc_5_active', 'Content-Tab Aktiv 5', 'content-tab active 5', 2415, '0', '0');",
    ),
);
