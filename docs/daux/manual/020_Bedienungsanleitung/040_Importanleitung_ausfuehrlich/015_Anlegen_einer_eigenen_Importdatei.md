---
Legen Sie sich Ihre eigene Importdatei in Excel oder OpenOffice an
---

Speichern Sie Ihre Importdatei vorzugsweise mit dem Datei-Spaltentrenner ; (Semikolon).  
Die interne Spaltentrennung (Beispielsweise bei Varianten oder Staffelpreisen) sollten mit Komma oder | (Pipe) getrennt sein.  
Schauen Sie sich Ihre Importdatei am besten mit einem Tabellenkalkulationsprogramm (Excel, LibreOffice, etc.) an und setzen Sie optional Spaltenüberschriften.  
**Für Ihren Import benötigen Sie nur die Spalten, die Sie auch tatsächlich für Ihren Artikel brauchen.**  
Möchten Sie eine Liste selbst anlegen, können Sie sich an diesem Beispiel orientieren:  

[Beispiel .csv-Datei](../../../assets/files/exportlisteninhalt.csv)

```csv
Artikelnummer;Titel;Langbeschreibung;Suchbegriffe;Preis;Kategorie;Varianten Name;Hersteller
1402;Trapez ION MADTRIXX;Langtext;harness, hip harness, madtrixx;45,00 €;1208|1302|1303|1304|1401;6454;Beispielhersteller
```  

> [!] Die Artikelnummer bzw. die Identifikation (EAN, MPN) muss immer eindeutig sein und im Admin als Artikelidentifikation hinterlegt werden.  

Ein vollständiges Beispiel einer CSV finden Sie im Modulpaket unter /setup+doku/examples/demo_artikel_klomplett.xls.  
Diese können Sie in das Importdatei-Format umwandeln, indem Sie unter [Datei] / [speichern unter] klicken und dann als Dateityp "Text Importdatei (.csv )" auswählen.

> [i] Weitere Informationen finden Sie unter [Häufig gestellte Fragen](../080_Haeufig_gestellte_Fragen.md)
