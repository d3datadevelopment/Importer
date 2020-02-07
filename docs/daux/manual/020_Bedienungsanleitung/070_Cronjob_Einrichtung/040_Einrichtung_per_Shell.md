---
title: Anlage einer Shell Datei
---
Der Pfad zu einer Shell Datei kann im Crontab oder in einer Server Configuration (Profihost: ServerCon) hinterlegt werden. 
Welches Importprofil per cronjob ausgeführt wird, wird in der .sh-Datei (bzw. bei Windowssystemen mit der .bat-Datei) gesteuert. Ebenso die [Nach Import]-Aktion.  

> [i] Tragen Sie bei `{Shoproot}` den absoluten Pfad zum Shop Hauptverzeichnis ein.

#### Beispiel 1:
```cmd
!/bin/bash pfad/zu/php {Shoproot}/source/modules/d3/importer/public/d3_importer_cron.php smf5cf2bb7668594e9e7c37a7698f725
```
 
In diesem Beispiel wird das Profil mit der Profil-ID "smf5cf2bb7668594e9e7c37a7698f725" und  
ohne "Nach Import"-Aktion ausgeführt. 
 
#### Beispiel 2:
```
!/bin/bash pfad/zu/php {Shoproot}/source/modules/d3/importer/public/d3_importer_cron.php smf5cf2bb7668594e9e7c37a7698f725 delete
```
 
In diesem Beispiel wird das Profil mit der Profil-ID  
"smf5cf2bb7668594e9e7c37a7698f725" und  
als "Nach Import"-Aktion das Löschen nicht geänderter Artikel ausgeführt. 

#### Beispiel 3 (nur EE):
```
!/bin/bash pfad/zu/php {Shoproot}/source/modules/d3/importer/public/d3_importer_cron.php smf5cf2bb7668594e9e7c37a7698f725 inactive 3
```
 
In diesem Beispiel wird das Profil mit der Profil-ID  
"smf5cf2bb7668594e9e7c37a7698f725" und  
als [Nach Import]-Aktion das Deaktivieren nicht geänderter Artikel, im Subshop "3" ausgeführt.  

Die korrekte Konfiguration der .sh-Datei kann über einen manuellen Testlauf per Konsole am  
Webserver geprüft werden.  
