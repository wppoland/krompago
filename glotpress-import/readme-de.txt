=== Plogins Surcharge - Checkout Fees for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, checkout, fees, surcharge, payment fee
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
Requires Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Füge dem WooCommerce-Warenkorb und der Kasse feste oder prozentuale Gebühren hinzu.

== Description ==

Mit Surcharge kannst du eine oder mehrere Gebühren zum WooCommerce-Warenkorb und zur Kasse hinzufügen. Jede Gebühr ist entweder ein fester Betrag oder ein Prozentsatz der Zwischensumme des Warenkorbs.

Gebühren werden über die WooCommerce-Gebühren-API hinzugefügt, sodass sie in den Warenkorbsummen, auf der Kassenseite und in der gespeicherten Bestellung erscheinen – genau wie Versand oder Steuern. Die Warenkorb- und Kassenblöcke sowie HPOS werden beide unterstützt.

Der Code liegt unter https://github.com/wppoland/plogins-surcharge, falls du ihn lesen, einen Fehler melden oder einen Gebührentyp vorschlagen möchtest.

= Documentation and links =

* <strong>Dokumentation</strong> - https://plogins.com/de/plogins-surcharge/docs/
* <strong>Plugin-Seite</strong> - https://plogins.com/de/plogins-surcharge/
* <strong>Quellcode</strong> - https://github.com/wppoland/plogins-surcharge
* <strong>Fehlerberichte und Funktionswünsche</strong> - https://github.com/wppoland/plogins-surcharge/issues


= What it does =

* Füge so viele Gebühren hinzu, wie du brauchst, jeweils einen festen Betrag oder einen Prozentsatz des Warenkorbs.
* Markiere eine Gebühr als steuerpflichtig, damit WooCommerce sie durch deine normalen Steuerregeln laufen lässt.
* Schalte mit einem Hauptschalter alle Gebühren auf einmal aus, ohne die von dir eingerichteten Zeilen zu verlieren.
* Aktiviere oder deaktiviere einzelne Gebühren, sodass du eine Gebühr konfiguriert, aber inaktiv lassen kannst.
* Verwalte alles über einen einzigen Einstellungsbildschirm unter WooCommerce → Surcharge.
* Keine externen Dienste, kein Konto, kein Tracking.

== Installation ==

1. Lade das Plugin nach `/wp-content/plugins/plogins-surcharge` hoch oder installiere es über Plugins → Installieren.
2. Aktiviere es. WooCommerce muss aktiv sein.
3. Gehe zu WooCommerce → Surcharge und füge deine erste Gebühr hinzu.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Ja. Surcharge erweitert den WooCommerce-Warenkorb und die Kasse und macht ohne WooCommerce nichts.

= How is a percentage fee calculated? =

Er wird aus der Zwischensumme des Warenkorbinhalts berechnet, inklusive der Steuer auf diese Artikel und bevor Versand oder andere Gebühren hinzukommen. Prozentsätze sind auf 100 begrenzt.

= Can I add more than one fee? =

Ja. Füge so viele Gebührenzeilen hinzu, wie du brauchst; jede wird unabhängig angewendet.

= Where do fees appear? =

In der Tabelle der Bestellsummen an der Kasse, beschriftet mit dem Namen, den du für jede Gebührenzeile festgelegt hast.

= Do percentage fees include tax? =

Prozentuale Gebühren werden aus der Zwischensumme des Warenkorbinhalts einschließlich der Zeilensteuer berechnet, vor Versand und anderen Gebühren.


= Does this plugin work on WordPress Multisite? =

Ja. Dieses Plugin ist mit WordPress Multisite kompatibel. Aktiviere es netzwerkweit oder auf einzelnen Websites; jede Website behält ihre eigenen Einstellungen und Daten.

== Screenshots ==

1. Im Shop.
2. Einstellungen im WordPress-Adminbereich.
3. Auf einem mobilen Gerät.
== External Services ==

Surcharge stellt keine Verbindung zu einem externen Dienst her. Es ruft keine Remote-APIs auf, lädt keine Skripte, Schriftarten oder Tracker von Drittanbietern und sendet nichts von deiner Website. Sein einziges Stylesheet und Skript werden aus dem Plugin-Ordner ausgeliefert und nur auf dem Adminbildschirm WooCommerce → Surcharge geladen.

Alle Daten bleiben in deiner eigenen Datenbank: deine Gebührenzeilen und der Hauptschalter liegen in der Option `surcharge_settings`, und eine Schemamarkierung in `surcharge_db_version`. Beide Optionen werden entfernt, wenn du das Plugin löschst. Das Plugin erstellt keine benutzerdefinierten Tabellen und sendet keine E-Mails; Gebühren werden zur Laufzeit über WooCommerces eigene Warenkorbgebühren-API angewendet.

== Translations ==

Plogins Surcharge enthält polnische, deutsche und spanische Übersetzungen für die Plugin-Oberfläche. Die Textdomain ist `plogins-surcharge`, sodass Sprachpakete von WordPress.org diese mitgelieferten Übersetzungen ebenfalls überschreiben oder erweitern können.

== Changelog ==

= 1.0.2 =
* Mitgelieferte polnische, deutsche und spanische Übersetzungen für die Plugin-Oberfläche hinzugefügt.

= 1.0.1 =
* Erste stabile Version.

= 0.1.2 =
* Umbenannt in Plogins Surcharge for WooCommerce für einen unverwechselbareren Plugin-Namen.

= 0.1.1 =
* Filter `surcharge/fee_amount`, damit Add-ons die Beträge pro Gebühr überschreiben können (z. B. gestaffelte Regeln in Surcharge Pro).

= 0.1.0 =
* Erstveröffentlichung: feste und prozentuale Checkout-Gebühren, steuerpflichtige Option und ein Hauptschalter.
