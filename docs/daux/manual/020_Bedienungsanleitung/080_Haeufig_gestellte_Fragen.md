---
title: Häufig gestellte Fragen 
---

<dl>
    <dt>Kann ich mit Ihrem Modul ein tägliches Update meiner Artikeldaten durchführen?</dt>
    <dd>Ja, Sie können so oft Sie möchten, einen Import durchführen.</dd>
    <dt>Ich habe eine CSV-Datei mit ca. 50.000 Artikeln.<br>Ist ein Import mit diesem Modul möglich oder würde es zu einer Zeitüberschreitung und einem Abbruch beim Import kommen?</dt>
    <dd>Ein Import ist in jedem Fall möglich. Das Modul importiert Teile Ihrer Importdatei.<br>
        Die Größe der Teile können Sie unter /Artikelimport/Konfig./Dateizeilen pro Durchlauf/ einstellen.<br>
        Die Serverkonfiguration (RAM/CPU/etc.) spielt dabei eine Rolle. 
    </dd>
    <dt>Der Importer kann in 3 Kategorien die Artikel integrieren, ist das auch in Treppenkategorien möglich?</dt>
    <dd>Sie können den Artikeln beliebig vielen Kategorien zuordnen. Auch können Sie damit gleich den kompletten Kategoriebaum (Treppenkategorie) zuordnen.</dd>
    <dt>
    Die CSV-Datei meines Lieferanten enthält zusätzlichen HTML-Code für den Artikellangtext.<br> 
    Dabei kommen die im Admin definierten Trennzeichen ; und " vor.
    <br>Kann der Importer die Daten sauber verarbeiten?
    </dt>
    <dd>Ja, wenn die Trennzeichen (Datei-Spaltentrennung + Texttrenner) eindeutig vergeben werden und die Kombination ";"  nicht im Langtext vorkommt.</dd>
    <dt>Können auch andere Dateiformate importiert werden (wie xml, xls,...)?</dt>
    <dd>Nein, es werden lediglich csv-basierte Textdateien unterstützt.</dd>
    <dt>Muss ich alle Bildgrößen einzeln importieren?</dt>
    <dd>Nein, das Artikelbild wird bei dem Import dem Shop als Masterbild übergeben. Der Shop generiert aus dem Masterbild die restlichen Bilder.</dd>
    <dt>Wie erfolgt die Angabe der Staffelpreise für "abs" und "%Rabatt"?</dt>
    <dd>Die Angabe des Staffelpreises kann mit "%" oder per Option "ist % Rabatt Preis?" erfolgen. Dabei ist es egal ob "10%" oder "%10".</dd>
</dl>
