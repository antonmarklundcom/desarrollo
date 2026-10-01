<?php
/** Article body — index record in content/blog/50-ciudades.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'costo-de-un-ecommerce-en-paraguay';

$sections = [
    [
        'h2'   => 'Qué incluye realmente una tienda online',
        'body' => [
            'Una tienda online no es solo una página con productos. Para vender en Paraguay necesita '
                . 'un catálogo que se pueda actualizar, un carrito, una forma de cobrar que tus '
                . 'clientes usen, opciones de envío o retiro, avisos de pedido y, cada vez más, la '
                . 'emisión de la factura electrónica.',
            'El costo de un ecommerce se compone de la construcción inicial y de varios costos '
                . 'mensuales que muchas veces no aparecen en el primer presupuesto. Este artículo los '
                . 'repasa uno por uno y explica qué factores los mueven para que puedas planificar.',
        ],
    ],
    [
        'h2'    => 'Las opciones de plataforma',
        'body'  => [
            'La plataforma define buena parte del costo inicial y del mensual. No hay una mejor en '
                . 'abstracto: depende de cuántos productos tenés, cuánto querés personalizar y quién '
                . 'la va a administrar.',
        ],
        'items' => [
            ['title' => 'Plataformas de suscripción', 'text' => 'Servicios que cobran un abono mensual y a veces una comisión por venta. Rápidas de montar, con límites para personalizar e integrar pagos locales.'],
            ['title' => 'WooCommerce sobre WordPress', 'text' => 'Muy flexible y con plugins para pasarelas locales. Requiere hosting y mantenimiento de actualizaciones.'],
            ['title' => 'Desarrollo a medida', 'text' => 'Para catálogos grandes, reglas de precio especiales o integración profunda con tu sistema de stock y facturación.'],
        ],
    ],
    [
        'h2'   => 'Cobrar en línea en Paraguay',
        'body' => [
            'La pasarela de pagos es la pieza que más distingue a un ecommerce paraguayo. Hay '
                . 'procesadores locales que aceptan tarjetas de crédito y débito, billeteras '
                . 'electrónicas y pagos en bocas de cobranza, y cada uno tiene su proceso de '
                . 'afiliación, sus requisitos y sus comisiones por transacción.',
            'Las comisiones y los plazos de acreditación cambian según el proveedor y el medio de pago; '
                . 'consultá los valores vigentes directamente con cada uno antes de elegir. Al '
                . 'comparar, mirá también si ofrecen un plugin listo para tu plataforma o si la '
                . 'integración requiere desarrollo.',
            'Muchas tiendas combinan el pago en línea con transferencia bancaria y pago contra '
                . 'entrega. Ofrecer varias opciones suele aumentar las ventas, pero cada una agrega '
                . 'un paso de control para tu equipo.',
        ],
    ],
    [
        'h2'   => 'Qué hace subir o bajar el costo',
        'body' => [
            'Una tienda pequeña sobre una plataforma de suscripción o WooCommerce, con pocas decenas '
                . 'de productos, una pasarela y envíos simples, es el escenario más liviano. El costo '
                . 'sube con la cantidad de productos y variantes, las formas de pago, las zonas de '
                . 'envío y cuánto se adapta el diseño a la marca.',
            'Un ecommerce a medida, integrado con stock, facturación electrónica y sistema de gestión, '
                . 'o con precios mayoristas y minoristas, es un proyecto de otra escala: cada '
                . 'integración y cada regla de negocio suma trabajo de desarrollo y de pruebas.',
            'La carga inicial de productos —fotos, descripciones, precios— puede pesar mucho si la hace '
                . 'el proveedor. Preguntá si está incluida y hasta cuántos productos.',
            'No publicamos un precio fijo porque depende del alcance: después de una conversación de '
                . '30 minutos te pasamos un presupuesto en guaraníes, por escrito.',
        ],
    ],
    [
        'h2'   => 'Los costos mensuales',
        'body' => [
            'Una tienda online tiene costos que se pagan todos los meses: el hosting o el abono de la '
                . 'plataforma, la renovación anual del dominio, las licencias de plugins pagos, las '
                . 'comisiones de la pasarela sobre cada venta y, si lo contratás, el mantenimiento '
                . 'técnico.',
            'A eso se suman los costos operativos: envíos, embalaje, el tiempo de la persona que '
                . 'prepara pedidos y responde consultas, y la publicidad para atraer visitas. Una '
                . 'tienda sin tráfico no vende, por más bien hecha que esté.',
            'Hacé la cuenta del costo mensual total y compará con el margen de tus productos. Esa '
                . 'cuenta te dice cuántos pedidos por mes necesitás para que la tienda se pague sola.',
        ],
    ],
    [
        'h2'   => 'Integraciones que valen la pena',
        'body' => [
            'Si ya factura electrónicamente o planea hacerlo, conectar la tienda con la emisión de '
                . 'facturas evita cargar cada venta dos veces. Lo mismo ocurre con el stock: si vende '
                . 'también en un local, un stock compartido evita vender lo que ya no tiene.',
            'Los avisos por WhatsApp —pedido recibido, pedido enviado— reducen las consultas de '
                . '"¿dónde está mi pedido?" y mejoran la experiencia. No todas estas integraciones '
                . 'hacen falta el primer día; conviene priorizar según tu volumen.',
        ],
    ],
    [
        'h2'    => 'Checklist antes de pedir presupuesto',
        'body'  => [
            'Con estas respuestas, cualquier proveedor puede darte un presupuesto comparable.',
        ],
        'items' => [
            ['title' => 'Cantidad de productos', 'text' => 'Y si tienen variantes como talle o color.'],
            ['title' => 'Formas de pago', 'text' => 'Tarjeta, billetera, transferencia, contra entrega.'],
            ['title' => 'Envíos', 'text' => 'Zonas, costos, retiro en local, empresas de delivery.'],
            ['title' => 'Facturación y stock', 'text' => 'Qué sistema usás hoy y si debe conectarse.'],
            ['title' => 'Quién carga los productos', 'text' => 'Vos o el proveedor, con fotos y descripciones.'],
        ],
    ],
];

$faq = [
    [
        'q' => '¿Qué pasarela de pagos conviene en Paraguay?',
        'a' => 'Depende de los medios de pago de tus clientes, las comisiones y la plataforma de tu tienda. Compará las condiciones vigentes de cada procesador antes de afiliarse.',
    ],
    [
        'q' => '¿Puedo empezar vendiendo por WhatsApp y después sumar la tienda?',
        'a' => 'Sí. Un catálogo con pedido por WhatsApp es un buen primer paso; cuando el volumen crece, se agrega el cobro en línea y la gestión de pedidos.',
    ],
    [
        'q' => '¿La tienda puede emitir factura electrónica?',
        'a' => 'Sí, integrándola con tu sistema de facturación o con un servicio conectado a SIFEN. Conviene preverlo desde el diseño de la tienda.',
    ],
];

require ROOT_DIR . '/templates/article.php';
