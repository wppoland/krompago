<?php
/**
 * PRO upsell content, generated from the plogins.com registry by
 * scripts/gen-pro-upsell.mjs. The admin upsell renders this; curate the
 * feature list to fit this plugin's settings screen (do not invent features).
 *
 * @package plogins-surcharge-pro
 */

defined('ABSPATH') || exit;

return [
    'name'       => 'Surcharge Pro',
    'url'        => 'https://plogins.com/plogins-surcharge-pro/pricing/',
    'sellable'   => true,
    'price_from' => 29,
    'currency'   => 'EUR',
    'price_pln'  => 129,
    'lead'       => [
        'en' => 'Role exemptions, tiered fees, per-product rules, schedule windows and per-fee reporting ship in the 0.5.0 release.',
        'pl' => 'Zwolnienia ról, opłaty progowe, reguły per produkt, harmonogramy i raporty per opłata są wdrożone w wydaniu 0.5.0.',
    ],
    'features'   => [
        [
            'en' => ['title' => 'Fee-exempt roles', 'desc' => 'Waive fees for wholesale, B2B and other user roles. Guests are never exempt (shipped).'],
            'pl' => ['title' => 'Zwolnienia ról z opłat', 'desc' => 'Zwalniaj opłaty dla hurtu, B2B i innych ról użytkownika. Goście nigdy nie są zwolnieni (wdrożone).'],
        ],
        [
            'en' => ['title' => 'Tiered fees', 'desc' => 'Different fee amounts for different cart-total bands, instead of a single threshold (shipped).'],
            'pl' => ['title' => 'Opłaty progowe', 'desc' => 'Różne kwoty opłat dla różnych przedziałów wartości koszyka, zamiast jednego progu (wdrożone).'],
        ],
        [
            'en' => ['title' => 'Per-product and per-category fees', 'desc' => 'Apply a fee only when specific products or categories are in the cart, or skip the fee when they are present (shipped).'],
            'pl' => ['title' => 'Opłaty per produkt i kategoria', 'desc' => 'Nalicz opłatę tylko przy wybranych produktach lub kategoriach w koszyku, albo pomiń opłatę, gdy są obecne (wdrożone).'],
        ],
        [
            'en' => ['title' => 'Schedule windows', 'desc' => 'Run a fee only during a date range or on chosen weekdays (shipped).'],
            'pl' => ['title' => 'Okna czasowe', 'desc' => 'Opłata aktywna tylko w wybranym zakresie dat lub w wybrane dni tygodnia (wdrożone).'],
        ],
        [
            'en' => ['title' => 'Per-fee reporting', 'desc' => 'See how much each fee has collected, with CSV export (shipped).'],
            'pl' => ['title' => 'Raporty per opłata', 'desc' => 'Podgląd, ile zebrała każda opłata, z eksportem CSV (wdrożone).'],
        ],
    ],
];
