---
title: Einrichtung per Crontab
---

Aufbau eines Cronjobs in crontab:
```
# Minute   Hour   Day of Month       Month          Day of Week        Command    
# (0-59)  (0-23)     (1-31)    (1-12 or Jan-Dec)  (0-6 or Sun-Sat)                
    0        2          12             *                *            /usr/bin/find
```
> [i] Tragen Sie bei `{Shoproot}` den absoluten Pfad zum Shop Hauptverzeichnis ein. 
## Beispiel 1
In diesem Beispiel werden die CSV-Daten mit der Profil-ID "smf5cf2bb7668594e9e7c37a7698f725"  
und der "Nach Import" Funktion "Alle Artikel deaktivieren" ausgeführt.  
Die Zeitangabe entspricht "jeden Tag um Mitternacht": 0 0 * * * 
 
Bei `pfad/zu/php` sollte die vom Shop verwendete PHP Version genutzt werden.  
Bspw.: /usr/local/php7.2/bin/php 
```
0 0 * * * pfad/zu/php {Shoproot}/source/out/modules/d3importer/d3_importer_cron.php smf5cf2bb7668594e9e7c37a7698f725 inactive
```

## Beispiel 2
In diesem Beispiel werden die CSV-Daten mit der Profil-ID "smf5cf2bb7668594e9e7c37a7698f725"  
und ohne "Nach Import" Funktion ausgeführt.
Die Zeitangabe entspricht "jede volle Stunde": 0 * * * *  
```
0 * * * * pfad/zu/php {Shoproot}/source/out/modules/d3importer/d3_importer_cron.php smf5cf2bb7668594e9e7c37a7698f725
```

## Beispiel 3 (nur EE)
In diesem Beispiel werden die CSV-Daten mit der Profil-ID "smf5cf2bb7668594e9e7c37a7698f725",  
ohne "Nach Import" Funktion ausgeführt und in den Subshop 3 importiert.
Die Zeitangabe entspricht "Zur vollen Stunde und in der 30. Minute": 0,30 * * * *  
```
0,30 * * * * pfad/zu/php {Shoproot}/source/out/modules/d3importer/d3_importer_cron.php smf5cf2bb7668594e9e7c37a7698f725 none 3
```
