<?php
/** Article body — index record in content/blog/50-ciudades.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'costo-de-un-ecommerce-en-paraguay';

$sections = [
    [
        'h2'   => 'Qué incluye realmente una tienda online',
        'body' => [
            'Una tienda online no es solo una página con productos. Para vender en Paraguay necesita '
                . 'un catálogo que se pueda actualizar, un carrito, una forma de cobrar que sus '
                . 'clientes usen, opciones de envío o retiro, avisos de pedido y, cada vez más, la '
                . 'emisión de la factura electrónica.',
            'El costo de un ecommerce se compone de la construcción inicial y de varios costos '
                . 'mensuales que muchas veces no aparecen en el primer presupuesto. Este artículo los '
                . 'repasa uno por uno y da rangos orientativos para que pueda planificar.',
        ],
    ],
    [
        'h2'    => 'Las opciones de plataforma',
        'body'  => [
            'La plataforma define buena parte del costo inicial y del mensual. No hay una mejor en '
                . 'abstracto: depende de cuántos productos tiene, cuánto quiere personalizar y quién '
                . 'la va a administrar.',
        ],
        'items' => [
            ['title' => 'Plataformas de suscripción', 'text' => 'Servicios que cobran un abono mensual y a veces una comisión por venta. Rápidas de montar, con límites para personalizar e integrar pagos locales.'],
            ['title' => 'WooCommerce sobre WordPress', 'text' => 'Muy flexible y con plugins para pasarelas locales. Requiere hosting y mantenimiento de actualizaciones.'],
            ['title' => 'Desarrollo a medida', 'text' => 'Para catálogos grandes, reglas de precio especiales o integración profunda con su sistema de stock y facturación.'],
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
                . 'consulte los valores vigentes directamente con cada uno antes de elegir. Al '
                . 'comparar, mire también si ofrecen un plugin listo para su plataforma o si la '
                . 'integración requiere desarrollo.',
            'Muchas tiendas combinan el pago en línea con transferencia bancaria y pago contra '
                . 'entrega. Ofrecer varias opciones suele aumentar las ventas, pero cada una agrega '
                . 'un paso de control para su equipo.',
        ],
    ],
    [
        'h2'   => 'Rangos orientativos del mercado en guaraníes',
        'body' => [
            'Los siguientes rangos son orientativos del mercado paraguayo y deben confirmarse con un '
                . 'presupuesto; no son nuestros precios.',
            'Tienda pequeña sobre una plataforma de suscripción o WooCommerce, con pocas decenas de '
                . 'productos, una pasarela y envíos simples: en el mercado suele verse desde alrededor '
                . 'de 5.000.000 hasta 12.000.000 de guaraníes de implementación.',
            'Tienda mediana con cientos de productos, variantes, varias formas de pago, zonas de envío '
                . 'y diseño adaptado a la marca: con frecuencia entre 12.000.000 y 30.000.000 de '
                . 'guaraníes.',
            'Ecommerce a medida integrado con stock, facturación electrónica y sistema de gestión, o '
                . 'con precios mayoristas y minoristas: desde 30.000.000 de guaraníes en adelante.',
            'La carga inicial de productos —fotos, descripciones, precios— puede ser un costo '
                . 'importante si la hace el proveedor. Pregunte si está incluida y hasta cuántos '
                . 'productos.',
        ],
    ],
    [
        'h2'   => 'Los costos mensuales',
        'body' => [
            'Una tienda online tiene costos que se pagan todos los meses: el hosting o el abono de la '
                . 'plataforma, la renovación anual del dominio, las licencias de plugins pagos, las '
                . 'comisiones de la pasarela sobre cada venta y, si lo contrata, el mantenimiento '
                . 'técnico.',
            'A eso se suman los costos operativos: envíos, embalaje, el tiempo de la persona que '
                . 'prepara pedidos y responde consultas, y la publicidad para atraer visitas. Una '
                . 'tienda sin tráfico no vende, por más bien hecha que esté.',
            'Haga la cuenta del costo mensual total y compárela con el margen de sus productos. Esa '
                . 'cuenta le dice cuántos pedidos por mes necesita para que la tienda se pague sola.',
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
                . 'hacen falta el primer día; conviene priorizar según su volumen.',
        ],
    ],
    [
        'h2'    => 'Checklist antes de pedir presupuesto',
        'body'  => [
            'Con estas respuestas, cualquier proveedor puede darle un presupuesto comparable.',
        ],
        'items' => [
            ['title' => 'Cantidad de productos', 'text' => 'Y si tienen variantes como talle o color.'],
            ['title' => 'Formas de pago', 'text' => 'Tarjeta, billetera, transferencia, contra entrega.'],
            ['title' => 'Envíos', 'text' => 'Zonas, costos, retiro en local, empresas de delivery.'],
            ['title' => 'Facturación y stock', 'text' => 'Qué sistema usa hoy y si debe conectarse.'],
            ['title' => 'Quién carga los productos', 'text' => 'Usted o el proveedor, con fotos y descripciones.'],
        ],
    ],
];

$faq = [
    [
        'q' => '¿Qué pasarela de pagos conviene en Paraguay?',
        'a' => 'Depende de los medios de pago de sus clientes, las comisiones y la plataforma de su tienda. Compare las condiciones vigentes de cada procesador antes de afiliarse.',
    ],
    [
        'q' => '¿Puedo empezar vendiendo por WhatsApp y después sumar la tienda?',
        'a' => 'Sí. Un catálogo con pedido por WhatsApp es un buen primer paso; cuando el volumen crece, se agrega el cobro en línea y la gestión de pedidos.',
    ],
    [
        'q' => '¿La tienda puede emitir factura electrónica?',
        'a' => 'Sí, integrándola con su sistema de facturación o con un servicio conectado a SIFEN. Conviene preverlo desde el diseño de la tienda.',
    ],
];

require ROOT_DIR . '/templates/article.php';
