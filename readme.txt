=== Surcharge - Checkout Fees for WooCommerce ===
Contributors: wppoland
Tags: woocommerce, checkout, fees, surcharge, payment fee
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 0.1.0
Requires Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add fixed or percentage fees to the WooCommerce cart and checkout.

== Description ==

Surcharge lets you add one or more fees to the WooCommerce cart and checkout. Each fee is either a fixed amount or a percentage of the cart subtotal.

Fees are added through the WooCommerce fees API, so they appear in the cart totals, on the checkout page, and on the saved order, the same way shipping or tax does. The cart and checkout blocks and HPOS are both supported.

The code lives at https://github.com/wppoland/surcharge if you want to read it, report a bug, or suggest a fee type.

= What it does =

* Add as many fees as you need, each a fixed amount or a percentage of the cart.
* Flag a fee as taxable so WooCommerce runs it through your normal tax rules.
* Turn every fee off at once with a master switch, without losing the rows you set up.
* Enable or disable individual fees, so you can keep a fee configured but inactive.
* Manage it all from one settings screen under WooCommerce → Surcharge.
* No external services, no account, no tracking.

== Installation ==

1. Upload the plugin to `/wp-content/plugins/surcharge`, or install via Plugins → Add New.
2. Activate it. WooCommerce must be active.
3. Go to WooCommerce → Surcharge and add your first fee.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Yes. Surcharge extends the WooCommerce cart and checkout and does nothing without it.

= How is a percentage fee calculated? =

It is taken from the cart contents subtotal, including the tax on those items, and before any shipping or other fees are added. Percentages are capped at 100.

= Can I add more than one fee? =

Yes. Add as many fee rows as you need; each one is applied independently.

= Where do fees appear? =

On the checkout order totals table, labelled with the name you set for each fee row.

= Do percentage fees include tax? =

Percentage fees are calculated from the cart contents subtotal including line tax, before shipping and other fees.

== Screenshots ==

1. The Surcharge settings screen with a fee configured.

== Changelog ==

= 0.1.0 =
* Initial release: fixed and percentage checkout fees, taxable option, and a master switch.
