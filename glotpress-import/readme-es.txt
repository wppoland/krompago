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

Añade tarifas fijas o porcentuales al carrito y al pago de WooCommerce.

== Description ==

Surcharge te permite añadir una o más tarifas al carrito y al pago de WooCommerce. Cada tarifa es una cantidad fija o un porcentaje del subtotal del carrito.

Las tarifas se añaden a través de la API de tarifas de WooCommerce, así que aparecen en los totales del carrito, en la página de pago y en el pedido guardado, igual que lo hacen el envío o los impuestos. Se admiten tanto los bloques de carrito y pago como HPOS.

El código está en https://github.com/wppoland/plogins-surcharge si quieres leerlo, informar de un error o sugerir un tipo de tarifa.

= Documentation and links =

* <strong>Documentación</strong> - https://plogins.com/es/plogins-surcharge/docs/
* <strong>Página del plugin</strong> - https://plogins.com/es/plogins-surcharge/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-surcharge
* <strong>Informes de errores y peticiones de funciones</strong> - https://github.com/wppoland/plogins-surcharge/issues


= What it does =

* Añade tantas tarifas como necesites, cada una un importe fijo o un porcentaje del carrito.
* Marca una tarifa como sujeta a impuestos para que WooCommerce la aplique según tus reglas de impuestos habituales.
* Desactiva todas las tarifas a la vez con un interruptor maestro, sin perder las filas que configuraste.
* Activa o desactiva tarifas individuales, para que puedas mantener una tarifa configurada pero inactiva.
* Gestiona todo desde una única pantalla de ajustes en WooCommerce → Surcharge.
* Sin servicios externos, sin cuenta, sin seguimiento.

== Installation ==

1. Sube el plugin a `/wp-content/plugins/plogins-surcharge` o instálalo a través de Plugins → Añadir nuevo.
2. Actívalo. WooCommerce debe estar activo.
3. Ve a WooCommerce → Surcharge y añade tu primera tarifa.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Sí. Surcharge amplía el carrito y el pago de WooCommerce y no hace nada sin él.

= How is a percentage fee calculated? =

Se toma del subtotal del contenido del carrito, incluido el impuesto sobre esos artículos, y antes de añadir cualquier tarifa de envío u otras. Los porcentajes tienen un límite de 100.

= Can I add more than one fee? =

Sí. Añade tantas filas de tarifas como necesites; cada una se aplica de forma independiente.

= Where do fees appear? =

En la tabla de totales del pedido en el pago, etiquetadas con el nombre que definas para cada fila de tarifa.

= Do percentage fees include tax? =

Las tarifas porcentuales se calculan a partir del subtotal del contenido del carrito, incluidos los impuestos de línea, antes del envío y otras tarifas.


= Does this plugin work on WordPress Multisite? =

Sí. Este plugin es compatible con WordPress Multisite. Actívalo para toda la red o en sitios concretos; cada sitio conserva sus propios ajustes y datos.

== Screenshots ==

1. En la tienda.
2. Ajustes en la administración de WordPress.
3. En un dispositivo móvil.
== External Services ==

Surcharge no se conecta a ningún servicio externo. No llama a API remotas, no carga scripts, fuentes ni rastreadores de terceros y no envía nada fuera de tu sitio. Su única hoja de estilos y su único script se sirven desde la carpeta del plugin y se cargan solo en la pantalla de administración WooCommerce → Surcharge.

Todos los datos permanecen en tu propia base de datos: tus filas de tarifas y el interruptor maestro se guardan en la opción `surcharge_settings`, y un marcador de esquema en `surcharge_db_version`. Ambas opciones se eliminan cuando borras el plugin. El plugin no crea tablas personalizadas ni envía correos electrónicos; las tarifas se aplican en tiempo de ejecución a través de la propia API de tarifas de carrito de WooCommerce.

== Translations ==

Plogins Surcharge incluye traducciones al polaco, al alemán y al español para la interfaz del plugin. El dominio de texto es `plogins-surcharge`, por lo que los paquetes de idioma de WordPress.org también pueden sustituir o ampliar estas traducciones incluidas.

== Changelog ==

= 1.0.2 =
* Se han añadido traducciones incluidas al polaco, al alemán y al español para la interfaz del plugin.

= 1.0.1 =
* Primera versión estable.

= 0.1.2 =
* Renombrado a Plogins Surcharge for WooCommerce para tener un nombre de plugin más distintivo.

= 0.1.1 =
* Filtro `surcharge/fee_amount` para que las extensiones puedan anular los importes por tarifa (por ejemplo, reglas escalonadas en Surcharge Pro).

= 0.1.0 =
* Versión inicial: tarifas de pago fijas y porcentuales, opción sujeta a impuestos y un interruptor maestro.
