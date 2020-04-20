---
title: Changelog
---

## 5.0.4.0 - (2020-04-20)
### Added
- installierbar in OXID 6.2

### Changed
- Abhängigkeiten für Installationen ohne Metapackage von OXID Metapackage zu Shop-Core geändert

---

## 5.0.3.0 - (2020-02-07)
### Added
- Composer installation supported

### Changed
- documentation adjusted

### fixed
- 0000000: external picture import runs endlessly when importing 10 or more images  

---

## 5.0.2.0
- 0001991: Neue Option - Bilder im Importverzeichnis löschen, verschieben
- 0002805: neue Bildimportoption "Master Bilder am Artikel erst löschen, dann importieren"
- 0002002: Alle Update Checkboxen an/abwählen
- 0007825: Mall Tab erlaubt keine Leer Möglichkeit
- 0000000: [fixed] category import add's a relationship with oxrootid if column is empty
- 0000000: refactored \d3_importer_Application_Models_Models_Import_Article::setUpdate
- 0000000: refactored \d3_importer_Application_Models_Models_Import_Article::setInsert
- 0000000: added methods in class \d3_importer_Application_Models_Models_Import_Article: setArticleOxid, setRemindActiveFlag, addPriceFields
- 0000000: refactored collector -> moved methods to importService: getCsvLines, addOxidToCSVData
- 0000000: added class \d3_importer_Application_Models_Service_Import and modified constructor of \d3_importer_Application_Models_Interface_Import + \d3_importer_Application_Models_ImportAbstract
- 0000000: refactored import models > moved method's getArticleRecords into \d3_importer_Application_Models_Collector;
         the \d3_importer_Application_Models_Collector assign's oxid's, if they are present in the database
- 0000000: added abstract class \d3_importer_Application_Models_ImportAbstract for future refactorings in import models
- 0000000: added interface \d3_importer_Application_Models_Interface_Import for future refactorings in import models
- 0000000: refactored moved method \d3_importer_Application_Models_Models_Import_Accessories::getImportFields \d3_importer_Application_Controller_Import_Article::getImportFields
- 0000000: refactored moved method \d3_importer_Application_Models_Models_Import_Article::getImportFields \d3_importer_Application_Controller_Import_Article::getImportFields
- 0000000: refactored moved method \d3_importer_Application_Models_Models_Import_Attributes::getImportFields \d3_importer_Application_Controller_Import_Article::getImportFields
- 0000000: refactored moved method \d3_importer_Application_Models_Models_Import_Category::getImportFields \d3_importer_Application_Controller_Import_Article::getImportFields
- 0000000: refactored moved method \d3_importer_Application_Models_Models_Import_Crossselling::getImportFields \d3_importer_Application_Controller_Import_Article::getImportFields
- 0000000: refactored moved method \d3_importer_Application_Models_Models_Import_Mall::getImportFields \d3_importer_Application_Controller_Import_Article::getImportFields
- 0000000: refactored moved method \d3_importer_Application_Models_Models_Import_Manufacturer::getImportFields \d3_importer_Application_Controller_Import_Article::getImportFields
- 0000000: refactored moved method \d3_importer_Application_Models_Models_Import_Price2Article::getImportFields \d3_importer_Application_Controller_Import_Article::getImportFields
- 0000000: refactored moved method \d3_importer_Application_Models_Models_Import_Selectlist::getImportFields \d3_importer_Application_Controller_Import_Article::getImportFields
- 0000000: refactored moved method \d3_importer_Application_Models_Models_Import_Vendor::getImportFields \d3_importer_Application_Controller_Import_Article::getImportFields
- 0000000: refactored variable names in \d3_importer_Application_Controller_Import_Article::getImportFields

---

## 5.0.1.1
- 0008260: make it possible to import d3 content tabs fields
- 0008033: longdesc couldn't imported into variants
- 0000000: optical changes in picture import
- 0006221: articlefields will not translated into english

---

## 5.0.1.0
- 0007694: v6 after import "delete/deactivate articles" doesn't work
- 0007613: "deactivate articles" overwrite values in table oxarticles
- 0007733: import scale prices absolute or percentally
- 0007759: crossselling and accessories works partially
- 0004280: verify EE compatibility
- 0000000: update demo importprofile + csv data

---

## 5.0.0.1

### added
- 0000000: added exception empty if profile is empty

### changed
- 0000000: refactored template methods to template variables (templates d3_importer_main.tpl + erromessages.tpl)
- 0000000: closed resource handle
- 0000000: solved inspection code - results
- 0000000: reset metadata module id to d3importer
- 0000000: improve code (use getOne instead of getAll, reduced code)
- 0000000: replaced execute to getAll while using select query in category model
- 0000000: replaced select to delete query in deleteArticleAssign method in Selectlist model
- 0000000: removed unused deleteArticleAssign in vendor model
- 0000000: corrected some germans typo's
- 0000000: added notice for category import

### fixed
- 0000000: handling in d3_importer_cron.php doesn't work
- 0000000: importer fields in frontend (admin)
- 0000000: after import ticker
- 0006856: pictureimport: checkboxes will not saved

---

## 5.0.0.0

**Minor version upgrade notice: there are some backward-incompatible changes to this release.**

- 0005803: upgrade to oxid eShop version 6.0.0.0
- 0000000: drop support of oxid eShop version 4.10.x / 5.3.x

---

## 4.5.0.0

**Minor version upgrade notice: there are some backward-incompatible changes to this release.**

- 0000000: Modul wurde grundlegend überarbeitet
- 0006523: Zeitstempel und weitere Informationen im Cronjob hinzugefügt
- 0002014: nur EE: Profile in anderen Subshops ausblenden
- 0004280: EE testen und anpassen - Zuweisung Artikel
- 0006371: Textinfo "Pflicht...Artikelnummer" ist falsch
- 0000000: Leerwert für Artikelidentifikation hinzugefügt
- 0000000: Fehler in den "ja"/"nein" Definition behoben
- 0000000: Button für den Bilderimport hinzugefügt
- 0000000: Mall Tab nutzt Formularbuilder
- 0000000: Altes Attributshandling wurde entfernt

---

## 4.4.2.0
- 0004766: Überarbeitung der automatischen Installation
- 0004836: Tags werden beim Importvorgang gekürzt
- 0000000: 4.8.x/5.1.x wird nicht mehr unterstützt
- 0000000: unbenutzte Felder im Code entfernt
- 0000000: Sprachidents für d3importpic13-20 hinzugefügt
- 0005377: d3importerdesc editierbar machen
- 0005378: Felder für D3 Content Tabs im Importer aufnehmen
- 0004705: Zeilenumbrüche werden nicht erkannt v4.4.1.6
- 0004657: oxid als "Auswahl für Artikelidentifikationsfelder" nicht möglich
- 0004876: Leere Attribute werden angelegt
- 0004870: Import von Attributen: EE - Handling
- 0004487: nur 12 Bilder (bis oxpic12) statt 20 können beim Bilderimport verwendet werden
- 0004771: Navigation speichert Profil ab
- 0004506: doppelte Kategorien, Hersteller und Lieferanten bei Subsprache

---

## 4.4.1.6
- 0003728: seo URl's werden bei der Einstellung "Artikel-Kat.-Zuordnungen vorher löschen" nicht gelöscht
- 0003724: oxremindactive wird nicht aktualisiert

---

## 4.4.1.5
- 0003570: Vordefinierte Werte funktionieren nicht.
- 0003572: Fehlerhafte Zählung der aktualisierten Artikel im CronJob
- 0003681: min. Connector - Version auf 4.3.1.2 setzen
- 0003624: Hinweise deutlich sichtbarer, wenn eine Demolizenz benutzt wird
- 0003643: Templates durch Blöcke erweitern

---

## 4.4.1.4
- Aufteilung der automatischen Installation
- Strukturänderung: Datei für das automatische Update von models nach setup verschoben
- fehlende Übersetzungen nachgetragen
- Hilfe-Link korrigiert
- Korrektur der automatischen Installation, Übernahme des bereits hinterlegten Lizenzschlüssels

---

## 4.4.1.3
- Korrektur des Imports von Tags
- Korrektur zu Kategoriezuweisungen welche nicht übernommen wurden
- Fehler im Admin behoben - die erste CSV-Spalte konnte in der Kategoriezuweisung nicht abgespeichert werden.
- Korrektur dass alle Bilder beim Aufruf via Cronjob abgearbeitet werden

---

## 4.4.1.2
- Inkompatibilität mit 4.9.0 behoben
- Hilfetext bei Auswahllisten korrigiert
- Fehler bei noch nicht gespeicherten Grundeinstellungen behoben
- Fehler im Cronjob behoben - Update entfernt Nachkommastellen bei Preisen mit , (Hinweis: der Cronjob nutzt nun den Admin Modus)

---

## 4.4.1.1
- d3importflag von enum zu varchar(32) umgeändert
- Bugfix: Attribute wurden nicht importiert
- Demoprofil aktualisiert

---

## 4.4.1.0
- neue mehrsprachige Attributszuordnungen inkl. Fallback
- Bugfix: im Demomodus werden Profile nicht mehr gespeichert, wenn die maximale Anzahl der Profile erreicht ist
- Wenn das Modul inaktiv ist, werden die Formulare gesperrt
- technische Verbesserungen im Quellcode

---

## 4.4.0.2
- Bugfix: Bilder mit Umlauten werden nicht importiert
- Bugfix: Bei einem Update werden Preise mit , abgeschnitten
- Neue Grundeinstellung "Auswahl für Kategorieidentifikationsfelder"
- Bugfix: Import einer Kategorie ohne Namen, sobald ein Trennzeichen an letzter Stelle steht: "Kat1,Kat2,Kat3,"
- Bugfix: Bilder mit Sonderzeichen werden nicht importiert

---

## 4.4.0.1
- Bugfix: defekte XML Profile (Importer < 4.4.0.0) werden nicht migriert
- Bugfix: wenn MwSt leer importiert wird, wird nun null statt 0 geschrieben
- Bugfix: Export von Profilen korrigiert
- Beispiele von Conjob Shell Dateien für Profihost.com Server erweitert

---

## 4.4.0.0
- Neues Feature Grundeinstellungen
- Neuer Menüpunkt Logging
- Neue Einstellungen für den Bilderimport
- technische Verbesserung im Admin
- Anzahl der Bilder wird aus der Shopconfiguration ausgelesen
- Logging "externe Bilder einlesen" implementiert
- Große CSV-Dateien werden im Admin performanter ausgelesen
- Auslagerung der Hilfetexte im Admin in ? - Boxen
- Übernahme der Importer-Smarty-Datei in das Modulverzeichnis
- externe Bilder werden anhand der Profil ID eingelesen
- Grosschreibung der Endung von CSV- / TXT-Dateien ermöglichen
- Bugfix: letzte Zeile der Importdatei importieren

---

## 4.3.3.1
- Update der precheck.php

---

## 4.3.3.0
- Zurücksetzen der Artikelanzahl in Kategorien, Lieferanten und Hersteller
- Bugfix für 4.8.3
- Bugfix PHP 5.4-Kompatibilität hergestellt
- Bugfix nach Anlegen eines neuen Profils war das Profil nicht ausgewählt
- Bugfix Dateinamen für den Bilderimport auf 128 Zeichen (wie oxid Standard) festgelegt
- Testprofil und CSV Dateien wurden hinzugefügt

---

## 4.3.2.4
- Bugfix im Bilderimport, lediglich ein Bild wurde importiert

---

## 4.3.2.3
- Bugfix in der Demoversion beim Bearbeiten der Bilder

---

## 4.3.2.2
- PHP 5.4-Kompatibilität hergestellt

---

## 4.3.2.1
- Call By References entfernt (PHP 5.4-Kompatibilität)
- Installationsfehler korrigiert

---

## 4.3.2.0
- Fehlermeldungen beim laden der Konfiguration werden abgefangen und unter [Importer]->[Einstellungen]->[Stamm] ausgegeben
- simple Exportfunktion für Importprofile unter [Importer]->[Einstellungen]->[Stamm] hinzugefügt (SQL basierend)
- Bugfix beim Speichern von Dateinamen mit Umlauten
- Bugfix Auslesen nicht zugeordneter Felder (im Tab Artikelfelder) verursachte einen Fatal Error
- Bugfix automatische Installation

---

## 4.3.1.2
- Bugfix beim Einlesen der zu importierenden Bilder behoben (Admin fand nur 1 Bild)

---

## 4.3.1.1
- Bugfix bei Import von Kategorien, welche nicht "via Name" importiert werden

---

## 4.3.1.0
- automatische Installation eingefügt
- Aktivierung durch Seriennummern

---

## 4.3.0.0
- komplette Überarbeitung des Moduls für die neue Shopstruktur des OXID eShop 4.7/5.0

---

## 4.2.5.1
- Modulversionsnummer und Vorschaubild im Admin korrigiert

---

## 4.2.5
- Integration der Profil-ID bei bearbeiteten Artikeln. Damit Möglichkeit den "Nach Import" auf die vom Profil betroffenen Artikeln zu beschränken
- Erweiterung des externen Bilderimports um Fehlerbehandlung und Bildtypprüfung
  - Änderung des Downloadverfahrens auf Curl für ein besseres Fehlerhandling
  - Der externe Bilderimport geht nun nicht mehr in eine Endlosschleife wenn ungültige Urls importiert wurden

---

## 4.2.4
- Nötige Änderungen für Shopversion 4.6.0 eingebaut
- Support für Shopversionen < 4.2.0 entfernt
- Install-Doku überarbeitet

---

## 4.2.3
- Fehler beim Zuordnen mehrerer Artikelbilder über verschiedene Bildslots zu einem Artikel behoben (Shopversion < 4.5.0)
- kein Update der Langtexte bei älteren Shopversionen

---

## 4.2.2
- Zusammenfassen bisheriger Bugfixes
- fehlende Bildslots in Shopversion < 4.5.0

---

## 4.2.1
- "Nach Import" konnte nicht korrekt gestartet werden
- Neuer Menüpunkt "Einstellungen" zur besseren Kontrolle der Modulversion
- Optimierung des Importvorgangs durch Indizierung  diverser DB-Felder
- Button "Neues Importprofil"
- In älteren Template-Versionen wurden veraltete Smartyvariablen korrigiert
- ModId angepasst

---

## 4.2.0
- Einbau eines Import-cronjobs
- Überarbeitung diverser Moduldateien für die cronjob-Funktionalität

---

## 4.1.7
- Fehler beim Bilderimport behoben. Pro Bilderimport konnte immer nur 1 Bild pro Artikel importiert werden

---

## 4.1.6
- Neue Bildstruktur ab 4.5.1 wird nun unterstützt
- ggf. vorhandene weitere Datenbankfelder in oxartextends können nun importiert werden (longdesc2 etc.)

---

## 4.1.5
- Engl. Sprachkomponenten eingefügt
- Bugfix mit Langtexten und Varianten behoben

---

## 4.1.4
- OXID 4.5: Probleme mit Einlesen von Datenfeldern aus oxarticles und oxartextends behoben
- OXID 4.5: Lupenfunktion auf der Artikeldetailseite funktioniert nun wieder

---

## 4.1.3
- OXID 4.5.0: nötige Templateanpassungen (Smartyvariablen) durchgeführt
- OXID 4.5.0: getAbsDynImageDir() wurde von OXID entfernt
- OXID 4.5.0: Probleme mit Bilderweiterungen "_pX" z.B. "bild_p1.jpg" auf der Detailseite. Generierte Bilder erhalten darum nun keine Extension mehr z.B. "bild.jpg"
- trim() auf Einzelwerte der Kategorienamen
- Problem mit Mehrsprachigkeit behoben
- einfaches Profiling eingebaut

---

## 4.1.2
- Fehler mit den Zoombildern gefixt
- Einbau des externen Bilderimports (Bild liegt in einer externen Url)

---

## 4.1.1
- oxTags werden nun beim Import unterstützt
- "list"-Templates nuntzen nun die globalen JS-Funktionen wie editThis etc.
- Problem mit fehlendenden oxartextends Einträgen behoben (Artikel-oxId wurde mit NULL aus oxartextends überschrieben)
- Standard-Datenfelder (oxactive etc.) werden jetzt nur noch mit Standrad-Werten befüllt, wenn die Felder nicht explizit über Importspalten belegt werden
- "sZoomImageSize" wird nun als globale Zoombildgröße genutzt (seit OXID 4.3.0)
- "oxpicsgenerated" wird nun generell auf "12" gesetzt (seit OXID 4.3.0)
- Aktualisierung der language-Datei und der Tabelle "oximporterdesc"

---

## 4.1
- kompletter UTF8 Support für Importdateien und Shop
- optionaler Texttrenner in der CSV, so dass auch HTML-Langtexte mit Zeilenumbrüchen korrekt importiert werden
- Korrektur der Zeilenanzahl bei CSV-Inhalten, die über mehrere Dateizeilen gehen (z.B. HTML-Daten)
- Wird die Importdatei z.B. per FTP aktualisiert, so erkennt das Modul nun automatisch im Reiter "Stamm" die geänderten Dateiwerte
- Lieferanten integriert
- Staffelpreise integriert
- Auswahllisten integriert
- Kurzinfo nach Import
- Löschmöglichkeit nach dem Import
- Übersetzung für oxarticles-Felder in lang.php hinzugefügt
- copy_this ab OXID 4.1.4 (nötige Templateänderungen) hinzugefügt
- Importe mit mehr als einer Kategoriespalte schlugen fehl
- diverse kleinere Bugfixes

---

## 4.0
- Komplette Migration des Moduls auf OXID4.