---
title: Datenbankanpassungen
---

Sollten Sie Ihren Shop im Modus "International" (mit Standardsprache englisch) betreiben, so spielen Sie anschließend folgenden SQL-Befehl zusätzlich ein: 
                                                                                
```mysql
UPDATE `d3importerdesc` SET `OXDESC` = (@TEMP1:=OXDESC), `OXDESC` = `OXDESC_1`, OXDESC_1 = @TEMP1;
```
