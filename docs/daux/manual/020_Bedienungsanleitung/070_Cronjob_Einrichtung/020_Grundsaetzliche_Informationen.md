---
title: Grundsätzliche Informationen
---

Die anzusprechende Datei befindet sich unter: `{Shoproot}/source/out/modules/d3importer/d3_importer_cron.php`  
  
Die Cronjob-Datei kann folgende Parameter (Reihenfolge beachten!) entgegennehmen:
<dl>
    <dt>1. Profil-ID</dt>
    <dd>
      Anhand der ID wird das dazugehörige Importprofil aus der Datenbank geladen.<br>
      Die Profil-ID des Importprofils finden Sie im Shop-Admin.<br>  
      Wählen Sie unter /{$menutitle}/Artikelimport/ das gewünschte Importprofil aus und gehen Sie auf den Reiter [Stamm]. Dort finden Sie die Ident in der Zeile [Profil-ID]. <br>
      Dieser Parameter muss immer übergeben werden.
    </dd>
    <dt>2. Aktion des Nach Imports</dt>
    <dd>
        Mit diesem Parameter kann die Aktion des Nach Imports gesteuert werden.<br>
        Folgende Aktionen stehen Ihnen optional zur Verfügung:
        <dl>
            <dt>inactive</dt> 
            <dd>
                Diese Aktion steuert dieselbe Funktion wie im Admin unter /D³ Module/{$menutitle}/Artikelimport/Nach Import/Alle Artikel deaktivieren an.
             </dd>
            <dt>delete</dt> 
            <dd>
                Diese Aktion steuert dieselbe Funktion wie im Admin unter /D³ Module/{$menutitle}/Artikelimport/Nach Import/Alle Artikel löschen an.
            </dd>
            <dt>none (oder frei lassen)</dt> 
            <dd>
                Es wird keine "Nach Import" Aktion angesteuert.
            </dd>
        </dl> 
        Mehr Informationen zu den "Nach Import" Funktionen finden Sie <a href="../../Bedienungsanleitung/Importanleitung_ausfuehrlich/Artikelimport/nach_Import.html">hier</a>
    </dd>
    <dt>3. Shop-Id (nur EE)</dt>
    <dd>
        In der Shop Edition Enterprise können Sie diesen Parameter verwenden, um einen Import Vorgang innerhalb eines definierten Subshops zu starten.
    </dd>
</dl>  

Folgende Ausgaben werden bei einem erfolgreichen Aufruf produziert (kann variieren):
```noformat
2019-11-29 12:47:37: Starting database article import...
2019-11-29 12:47:38: Imported: 0 articles
2019-11-29 12:47:38: Updated: 10 articles
2019-11-29 12:47:40: starting picture import.
2019-11-29 12:47:40: start picture download.
2019-11-29 12:53:31: Downloaded: 30 pictures
2019-11-29 12:53:31: Reading picture directory...
2019-11-29 12:53:32: start importing pictures.
2019-11-29 12:53:36: finished picture import.
2019-11-29 12:53:36: Handled: 30 Pictures
```
## Bilderimport
Der Bilderimport wird immer abhängig von den Einstellungen am Importprofil durchgeführt.  
Ausgenommen sind die Limitierungen des Bilderimports (siehe "Start des nächsten Bilddurchlaufes" unter [Bilderimport](../040_Importanleitung_ausfuehrlich/050_Bilderimport/020_Stamm.md)).  
