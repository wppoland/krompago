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

Dodaj opłaty stałe lub procentowe do koszyka i kasy WooCommerce.

== Description ==

Surcharge pozwala dodać jedną lub więcej opłat do koszyka i kasy WooCommerce. Każda opłata to kwota stała lub procent sumy częściowej koszyka.

Opłaty są dodawane przez API opłat WooCommerce, więc pojawiają się w podsumowaniu koszyka, na stronie kasy oraz w zapisanym zamówieniu — tak samo jak wysyłka czy podatek. Obsługiwane są zarówno bloki koszyka i kasy, jak i HPOS.

Kod znajdziesz pod adresem https://github.com/wppoland/plogins-surcharge, jeśli chcesz go przeczytać, zgłosić błąd lub zaproponować rodzaj opłaty.

= Documentation and links =

* <strong>Dokumentacja</strong> - https://plogins.com/pl/plogins-surcharge/docs/
* <strong>Strona wtyczki</strong> - https://plogins.com/pl/plogins-surcharge/
* <strong>Kod źródłowy</strong> - https://github.com/wppoland/plogins-surcharge
* <strong>Zgłoszenia błędów i propozycje funkcji</strong> - https://github.com/wppoland/plogins-surcharge/issues


= What it does =

* Dodaj tyle opłat, ile potrzebujesz — każda to kwota stała lub procent wartości koszyka.
* Oznacz opłatę jako podlegającą opodatkowaniu, aby WooCommerce zastosował do niej Twoje zwykłe reguły podatkowe.
* Wyłącz wszystkie opłaty naraz jednym głównym przełącznikiem, bez utraty skonfigurowanych wierszy.
* Włączaj lub wyłączaj poszczególne opłaty, dzięki czemu możesz zachować opłatę skonfigurowaną, ale nieaktywną.
* Zarządzaj wszystkim z jednego ekranu ustawień w WooCommerce → Surcharge.
* Brak usług zewnętrznych, brak konta, brak śledzenia.

== Installation ==

1. Wgraj wtyczkę do `/wp-content/plugins/plogins-surcharge` lub zainstaluj przez Wtyczki → Dodaj nową.
2. Włącz ją. WooCommerce musi być aktywne.
3. Przejdź do WooCommerce → Surcharge i dodaj swoją pierwszą opłatę.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Tak. Surcharge rozszerza koszyk i kasę WooCommerce i bez niego nic nie robi.

= How is a percentage fee calculated? =

Jest pobierany z sumy częściowej zawartości koszyka, łącznie z podatkiem od tych pozycji, a przed dodaniem wysyłki lub innych opłat. Procenty są ograniczone do 100.

= Can I add more than one fee? =

Tak. Dodaj tyle wierszy opłat, ile potrzebujesz; każdy jest stosowany niezależnie.

= Where do fees appear? =

W tabeli sum zamówienia przy kasie, opatrzone nazwą ustawioną dla każdego wiersza opłaty.

= Do percentage fees include tax? =

Opłaty procentowe są obliczane z sumy częściowej zawartości koszyka, łącznie z podatkiem od pozycji, przed wysyłką i innymi opłatami.


= Does this plugin work on WordPress Multisite? =

Tak. Ta wtyczka jest zgodna z WordPress Multisite. Włącz ją dla całej sieci lub w pojedynczych witrynach; każda witryna zachowuje własne ustawienia i dane.

== Screenshots ==

1. W sklepie.
2. Ustawienia w panelu administracyjnym WordPress.
3. Na urządzeniu mobilnym.
== External Services ==

Surcharge nie łączy się z żadną usługą zewnętrzną. Nie wywołuje zdalnych API, nie ładuje skryptów, czcionek ani modułów śledzących innych firm i nie wysyła niczego poza Twoją witrynę. Jego jedyny arkusz stylów i skrypt są dostarczane z folderu wtyczki i ładowane tylko na ekranie administracyjnym WooCommerce → Surcharge.

Wszystkie dane pozostają w Twojej własnej bazie danych: wiersze opłat i główny przełącznik są przechowywane w opcji `surcharge_settings`, a znacznik schematu w `surcharge_db_version`. Obie opcje są usuwane po usunięciu wtyczki. Wtyczka nie tworzy niestandardowych tabel ani nie wysyła e-maili; opłaty są naliczane w czasie działania przez własne API opłat koszyka WooCommerce.

== Translations ==

Plogins Surcharge zawiera polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki. Domena tekstowa to `plogins-surcharge`, dzięki czemu paczki językowe z WordPress.org mogą również nadpisywać lub rozszerzać dołączone tłumaczenia.

== Changelog ==

= 1.0.2 =
* Dodano dołączone polskie, niemieckie i hiszpańskie tłumaczenia interfejsu wtyczki.

= 1.0.1 =
* Pierwsza stabilna wersja.

= 0.1.2 =
* Zmieniono nazwę na Plogins Surcharge for WooCommerce, aby uzyskać bardziej charakterystyczną nazwę wtyczki.

= 0.1.1 =
* Filtr `surcharge/fee_amount`, dzięki któremu dodatki mogą nadpisywać kwoty poszczególnych opłat (np. reguły progowe w Surcharge Pro).

= 0.1.0 =
* Pierwsze wydanie: stałe i procentowe opłaty przy kasie, opcja opodatkowania oraz główny przełącznik.
