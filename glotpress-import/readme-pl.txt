=== Plogins Surcharge - Checkout Fees for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, checkout, fees, surcharge, payment fee
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Wymaga wtyczek: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Dodaj opłaty stałe lub procentowe do koszyka i kasy WooCommerce.

== Description ==

Dopłata umożliwia dodanie jednej lub więcej opłat do koszyka i realizacji transakcji WooCommerce. Każda opłata jest kwotą stałą lub procentem sumy częściowej koszyka.

Opłaty są dodawane za pośrednictwem interfejsu API opłat WooCommerce, więc pojawiają się w sumie koszyka, na stronie kasy i w zapisanym zamówieniu, w taki sam sposób, jak wysyłka lub podatek. Obsługiwane są bloki koszyka i kasy oraz HPOS.

Kod znajduje się pod adresem https://github.com/wppoland/plogins-surcharge, jeśli chcesz go przeczytać, zgłosić błąd lub zasugerować rodzaj opłaty.

= Documentation and links =

* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-surcharge/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-surcharge/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-surcharge
* <strong>Raporty o błędach i prośby o nowe funkcje</strong> - https://github.com/wppoland/plogins-surcharge/issues


= What it does =

* Dodaj tyle opłat, ile potrzebujesz, każda stała kwota lub procent koszyka.
* Oznacz opłatę jako podlegającą opodatkowaniu, aby WooCommerce przeprowadził ją zgodnie ze zwykłymi przepisami podatkowymi.
* Wyłącz wszystkie opłaty na raz za pomocą przełącznika głównego, bez utraty skonfigurowanych wierszy.
* Włącz lub wyłącz indywidualne opłaty, abyś mógł zachować skonfigurowaną, ale nieaktywną opłatę.
* Zarządzaj tym wszystkim z jednego ekranu ustawień w WooCommerce → Dopłata.
* Brak usług zewnętrznych, brak konta, brak śledzenia.

== Installation ==

1. Prześlij wtyczkę do `/wp-content/plugins/plogins-surcharge` lub zainstaluj poprzez Wtyczki → Dodaj nową.
2. Aktywuj. WooCommerce musi być aktywny.
3. Przejdź do WooCommerce → Dopłata i dodaj swoją pierwszą opłatę.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Tak. Dopłata wydłuża koszyk i realizację transakcji WooCommerce i bez niej nic nie robi.

= How is a percentage fee calculated? =

Jest ona pobierana z sumy częściowej zawartości koszyka, łącznie z podatkiem od tych pozycji, przed dodaniem jakichkolwiek opłat za wysyłkę lub innych. Procenty są ograniczone do 100.

= Can I add more than one fee? =

Tak. Dodaj tyle wierszy opłat, ile potrzebujesz; każdy z nich jest stosowany niezależnie.

= Where do fees appear? =

W tabeli sum zamówień do kasy, oznaczonej nazwą ustawioną dla każdego wiersza opłat.

= Do percentage fees include tax? =

Opłaty procentowe są obliczane na podstawie sumy częściowej zawartości koszyka, włączając podatek liniowy, przed wysyłką i innymi opłatami.


= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest kompatybilna z WordPress Multisite. Aktywuj go w sieci lub aktywuj na poszczególnych stronach; każda witryna przechowuje własne ustawienia i dane.

== Screenshots ==

1. Na wystawie sklepowej.
2. Ustawienia w panelu administracyjnym WordPress.
3. Na urządzeniu mobilnym.
== External Services ==

Dopłata nie łączy się z żadną usługą zewnętrzną. Nie wywołuje żadnych zdalnych interfejsów API, nie ładuje skryptów, czcionek ani modułów śledzących innych firm i nie wysyła niczego poza Twoją witrynę. Jego jedyny arkusz stylów i skrypt są dostarczane z folderu wtyczek i ładowane bezpośrednio na ekranie administratora WooCommerce → Dopłata.

Wszystkie dane pozostają w Twojej własnej bazie danych: Twoje wiersze opłat i przełącznik główny są przechowywane w opcji `surcharge_settings`, a znacznik schematu w `surcharge_db_version`. Obie opcje zostaną usunięte po usunięciu wtyczki. Wtyczka nie tworzy niestandardowych tabel i nie wysyła wiadomości e-mail; opłaty są naliczane w czasie wykonywania za pośrednictwem własnego interfejsu API opłat za koszyk WooCommerce.

== Changelog ==

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.2 =
* Zmieniono nazwę na Dopłata za Plogins dla WooCommerce, aby uzyskać bardziej charakterystyczną nazwę wtyczki.

= 0.1.1 =
* Filtr „dopłata/kwota_opłaty”, dzięki któremu dodatki mogą zastąpić kwoty poszczególnych opłat (np. reguły warstwowe w Surcharge Pro).

= 0.1.0 =
* Wersja pierwsza: stałe i procentowe opłaty za rozliczenie, opcja podlegająca opodatkowaniu i przełącznik główny.
