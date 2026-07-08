=== Plogins Surcharge - Checkout Fees for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, checkout, fees, surcharge, payment fee
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Erfordert Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Füge dem WooCommerce-Warenkorb und der Kasse feste oder prozentuale Gebühren hinzu.

== Description ==

Mit Surcharge kannst du eine oder mehrere Gebühren zum WooCommerce-Warenkorb und zur Kasse hinzufügen. Bei jeder Gebühr handelt es sich entweder um einen festen Betrag oder einen Prozentsatz der Zwischensumme des Warenkorbs.

Gebühren werden über die WooCommerce-Gebühren-API hinzugefügt, sodass sie in den Warenkorbsummen, auf der Checkout-Seite und auf der gespeicherten Bestellung erscheinen, genau wie Versand oder Steuern. Die Warenkorb- und Kassenblöcke sowie HPOS werden beide unterstützt.

Der Code befindet sich unter https://github.com/wppoland/plogins-surcharge, wenn du ihn lesen, einen Fehler melden oder einen Gebührentyp vorschlagen möchten.

= Documentation and links =

* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-surcharge/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-surcharge/
* <strong>Quellcode</strong> – https://github.com/wppoland/plogins-surcharge
* <strong>Fehlerberichte und Funktionsanfragen</strong> – https://github.com/wppoland/plogins-surcharge/issues


= What it does =

* Füge so viele Gebühren hinzu, wie Sie benötigen, jeweils einen festen Betrag oder einen Prozentsatz des Warenkorbs.
* Markiere eine Gebühr als steuerpflichtig, damit WooCommerce deine normalen Steuerregeln durchläuft.
* Schalte mit einem Hauptschalter jede Gebühr auf einmal aus, ohne dass die von dir eingerichteten Reihen verloren gehen.
* Aktivieren oder deaktiviere einzelne Gebühren, sodass du eine Gebühr konfiguriert, aber inaktiv lassen können.
* Verwalte alles über einen Einstellungsbildschirm unter WooCommerce → Zuschlag.
* Keine externen Dienste, kein Konto, kein Tracking.

== Installation ==

1. Lade das Plugin unter „/wp-content/plugins/plogins-surcharge“ hoch oder installiere es über Plugins → Neu hinzufügen.
2. Aktiviere es. WooCommerce muss aktiv sein.
3. Gehe zu WooCommerce → Zuschlag und füge deine erste Gebühr hinzu.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Ja. Surcharge erweitert den WooCommerce-Warenkorb und den Checkout und macht nichts ohne.

= How is a percentage fee calculated? =

Der Betrag wird der Zwischensumme des Warenkorbinhalts entnommen, einschließlich der Steuer auf diese Artikel und vor Hinzurechnung etwaiger Versand- oder anderer Gebühren. Die Prozentsätze sind auf 100 begrenzt.

= Can I add more than one fee? =

Ja. Füge so viele Gebührenzeilen hinzu, wie Sie benötigen. Jeder wird unabhängig angewendet.

= Where do fees appear? =

In der Tabelle mit den Bestellsummen an der Kasse, beschriftet mit dem Namen, den du für jede Gebührenzeile festgelegt haben.

= Do percentage fees include tax? =

Die prozentualen Gebühren werden aus der Zwischensumme des Warenkorbinhalts einschließlich der Zeilensteuer vor Versand und anderen Gebühren berechnet.


= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es im Netzwerk oder auf einzelnen Websites. Jede Site behält ihre eigenen Einstellungen und Daten.

== Screenshots ==

1. Im Schaufenster.
2. Einstellungen im WordPress-Admin.
3. Auf einem mobilen Gerät.
== External Services ==

Der Aufpreis stellt keine Verbindung zu einem externen Dienst her. Es ruft keine Remote-APIs auf, lädt keine Skripte, Schriftarten oder Tracker von Drittanbietern und sendet nichts von deiner Website. Sein einziges Stylesheet und Skript werden aus dem Plugin-Ordner bereitgestellt und einfach auf dem WooCommerce → Surcharge-Admin-Bildschirm geladen.

Alle Daten bleiben in deiner eigenen Datenbank: deine Gebührenzeilen und der Hauptschalter werden in der Option „surcharge_settings“ und eine Schemamarkierung in „surcharge_db_version“ gespeichert. Beide Optionen werden entfernt, wenn du das Plugin löschen. Das Plugin erstellt keine benutzerdefinierten Tabellen und sendet keine E-Mails. Gebühren werden zur Laufzeit über WooCommerces eigene Warenkorbgebühren-API erhoben.

== Changelog ==

= 1.0.1 =
* Erste stabile Version.

= 0.1.2 =
* Umbenannt in „Plogins Surcharge for WooCommerce“, um einen markanteren Plugin-Namen zu erhalten.

= 0.1.1 =
* „surcharge/fee_amount“-Filter, damit Add-ons die Beträge pro Gebühr überschreiben können (z. B. gestaffelte Regeln in Surcharge Pro).

= 0.1.0 =
* Erstveröffentlichung: feste und prozentuale Checkout-Gebühren, steuerpflichtige Option und ein Hauptschalter.
