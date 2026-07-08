=== Plogins Surcharge - Checkout Fees for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, checkout, fees, surcharge, payment fee
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Requiere complementos: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Añade tarifas fijas o porcentuales al carrito de WooCommerce y realice el pago.

== Description ==

El recargo le permite añadir una o más tarifas al carrito y al pago de WooCommerce. Cada tarifa es una cantidad fija o un porcentaje del subtotal del carrito.

Las tarifas se agregan a través de la API de tarifas de WooCommerce, por lo que aparecen en los totales del carrito, en la página de pago y en el pedido guardado, de la misma manera que lo hacen el envío o los impuestos. Se admiten los bloques de carrito y caja y HPOS.

El código se encuentra en https://github.com/wppoland/plogins-surcharge si desea leerlo, informar un error o sugerir un tipo de tarifa.

= Documentation and links =

* <strong>Documentación</strong> - https://plogins.com/es/plogins-surcharge/docs/
* <strong>Página de complementos</strong> - https://plogins.com/es/plogins-surcharge/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-surcharge
* <strong>Informes de errores y solicitudes de funciones</strong> - https://github.com/wppoland/plogins-surcharge/issues


= What it does =

* Añade tantas tarifas como necesites, cada una de ellas un importe fijo o un porcentaje del carrito.
* Marca una tarifa como sujeta a impuestos para que WooCommerce la aplique según tus reglas impositivas normales.
* Desactive todas las tarifas a la vez con un interruptor maestro, sin perder las filas que configuró.
* Activa o desactiva las tarifas individuales, para que puedas mantener una tarifa configurada pero inactiva.
* Administre todo desde una pantalla de configuración en WooCommerce → Recargo.
* Sin servicios externos, sin cuenta, sin seguimiento.

== Installation ==

1. Cargue el complemento en `/wp-content/plugins/plogins-surcharge`, o instálelo a través de Complementos → Añadir nuevo.
2. Actívalo. WooCommerce debe estar activo.
3. Vaya a WooCommerce → Recargo y añade su primera tarifa.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Sí. El recargo amplía el carrito y el pago de WooCommerce y no hace nada sin él.

= How is a percentage fee calculated? =

Se toma del subtotal del contenido del carrito, incluido el impuesto sobre esos artículos, y antes de añadir cualquier tarifa de envío u otros cargos. Los porcentajes tienen un límite de 100.

= Can I add more than one fee? =

Sí. Añade tantas filas de tarifas como necesite; cada uno se aplica de forma independiente.

= Where do fees appear? =

En la tabla de totales de pedidos de pago, etiquetados con el nombre que configuró para cada fila de tarifas.

= Do percentage fees include tax? =

Las tarifas porcentuales se calculan a partir del subtotal del contenido del carrito, incluidos los impuestos de línea, antes del envío y otras tarifas.


= Does this plugin work on WordPress Multisite? =

Sí. Este complemento es compatible con WordPress Multisite. Activarlo en red o activarlo en sitios individuales; Cada sitio mantiene su propia configuración y datos.

== Screenshots ==

1. En el escaparate.
2. Configuración en el administrador de WordPress.
3. En un dispositivo móvil.
== External Services ==

El recargo no se conecta a ningún servicio externo. No llama a API remotas, no carga scripts, fuentes o rastreadores de terceros y no envía nada fuera de tu sitio. Su única hoja de estilo y script se entregan desde la carpeta del complemento y se cargan solo en la pantalla de administración de WooCommerce → Surcharge.

Todos los datos permanecen en su propia base de datos: sus filas de tarifas y el interruptor maestro se guardan en la opción `surcharge_settings`, y un marcador de esquema en `surcharge_db_version`. Ambas opciones se eliminan cuando eliminas el complemento. El complemento no crea tablas personalizadas ni envía correos electrónicos; Las tarifas se aplican en tiempo de ejecución a través de la API de tarifas de carrito propia de WooCommerce.

== Changelog ==

= 1.0.1 =
* Primera versión estable.

= 0.1.2 =
* Renombrado a Plogins Surcharge for WooCommerce para obtener un nombre de complemento más distintivo.

= 0.1.1 =
* Filtro `surcharge/fee_amount` para que los complementos puedan anular los montos por tarifa (por ejemplo, reglas escalonadas en Surcharge Pro).

= 0.1.0 =
* Lanzamiento inicial: tarifas de pago fijas y porcentuales, opción sujeta a impuestos y un cambio maestro.
