---
title: Einleitung
---

Ein Cronjob ist eine zeitlich wiederkehrende Aufgabe, die auf dem eingesetzten System/Server gestartet wird.  
Der Importer unterstützt die Funktion.  
Ein Cronjob der über die Konsole eines Systems (nicht via HTTP Aufruf!) eingerichtet wird, hat meist weniger serverseitige Limitierungen als ein Webaufruf (Shop-Admin).  
Je nach Größe der CSV-Datei und Menge der Artikelbilder stellt dieser Vorgang einen hohen Anspruch an die Systemressourcen.

> [!!] Wichtiger Hinweis:  
> Für die korrekte Einrichtung der Dateien bzw. der Cronjobs selbst, ist ein gewisses technisches Verständnis notwendig.  
> Führen Sie die Einrichtung nur aus, wenn Sie über dieses Wissen verfügen.  
> Alternativ sollte Ihr betreuender **OXID**-Partner die Einrichtung des Cronjobs übernehmen.  

### Worin besteht der Unterschied zum Import via Shop-Admin?  
Im Shop-Admin wird die gesamte CSV-Datei in kleineren Teilen bzw. Durchläufen importiert.
Dabei werden pro Durchlauf die eingestellte Menge an CSV-Zeilen verarbeitet.  
Diese Unterteilung reduziert die benötigten Ressourcen pro Aufruf. 
 
Für einen Cronjob gelten andere bzw. geringere Beschränkungen.  
Das ermöglicht einem Konsolen-Aufruf mehr Ressourcen für den Import zu verwenden.
Jeder eingerichtete Import-Cronjob arbeitet alle CSV-Zeilen auf einmal ab.  

### Hinweise
1. Sprechen Sie die Details zum Einrichten eines Cronjobs mit Ihrem Serverprovider ab.  
Es gibt für die Einrichtung via Konsole verschiedene Faktoren, die je nach Serverprovider unterschiedlich sein können.  
Generell empfehlen wir den Einsatz von Import-Cronjobs auf eigenen Serverumgebungen.  
Managed-/Hosting Pakete unterliegen meist strengeren Beschränkungen. 
 
2. Weiterhin sollte bei der Planung eines Cronjobs, der Einsatz von geringeren Datenmengen bevorzugt werden.  
Ein Beispiel wäre der Abgleich des Lagerbestandes oder der Preise.  
Ein Gegenbeispiel ist ein kompletter Import mit Artikel- inkl. Bilddaten.  
Als Eckpunkte kann man sich an der Anzahl der CSV-Spalten + CSV-Zeilen + Größe der Importdatei orientieren.  

3. Es empfiehlt sich die Ausführung des Imports innerhalb der Ruhezeiten (wenige Besucher) im Shop durchzuführen (bspw. in der Nacht).  
Je nach System kann es kurzfristig zu serverseitigen Auslastungen kommen (RAM, CPU).  

4. Um mehrere Importprofile per Cronjob ausführen lassen zu können, muss für jedes Profil eine neuer, eigener Eintrag (Shell-Datei, Crontab Zeile) angelegt werden.  

### logischer Ablauf eines Cronjobs
- Starten des Artikelimports
- Starten der "Nach Import" Funktion (optional)
- Herunterladen der externen Bilder (optional)
- Starten des Bilderimports (optional) 

