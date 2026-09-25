<?php
/** Phase "integraciones": SIFEN integration complexity estimator. */

declare(strict_types=1);

return [
    'costo-integracion-sifen' => [
        'path'            => '/herramientas/costo-integracion-sifen/',
        'title'           => 'Cotizador de integración SIFEN',
        'navLabel'        => 'Cotizador de integración SIFEN',
        'seoTitle'        => 'Cotizador de integración SIFEN',
        'metaDescription' => 'Estime qué nivel de integración SIFEN necesita su empresa según facturas por '
                           . 'mes, sistema actual y puntos de expedición. Orientativo y sin costo.',
        'hero' => [
            'eyebrow' => 'Herramientas',
            'h1'      => 'Cotizador de integración SIFEN',
            'lead'    => 'Cuatro preguntas para saber si su caso es una integración básica, media o compleja, y qué incluye cada nivel.',
        ],
        'intro' => [
            'Integrar la facturación electrónica SIFEN no cuesta lo mismo para todas las empresas. Lo que '
                . 'más pesa es el punto de partida: si ya tiene un sistema de ventas, si ese sistema permite '
                . 'integrarse, cuántos puntos de expedición emiten documentos y si la factura tiene que salir '
                . 'sola desde una tienda web o desde varias cajas.',
            'Este cotizador ubica su caso en uno de tres niveles orientativos. No da un precio: el '
                . 'presupuesto real sale de un relevamiento corto de su sistema. Sí le sirve para saber qué '
                . 'tipo de proyecto tiene por delante y qué preguntar cuando pida cotizaciones.',
            'Si emite pocas facturas y no tiene sistema, el resultado probablemente le sugiera seguir con '
                . 'el facturador gratuito de ekuatia. Es una respuesta válida: no toda empresa necesita una '
                . 'integración.',
        ],
        'faq' => [
            ['q' => '¿Por qué no muestra un precio?', 'a' => 'Porque el costo depende de detalles del sistema que solo se ven en un relevamiento. Preferimos un nivel honesto a un número que después cambia.'],
            ['q' => '¿Qué incluye una integración básica?', 'a' => 'Generación, firma y envío de facturas y notas de crédito desde un solo punto, con KuDE por correo.'],
            ['q' => '¿Qué hace compleja una integración?', 'a' => 'ERPs comerciales cerrados, muchos puntos de expedición, varias cajas en línea y tiendas web que facturan automáticamente.'],
            ['q' => '¿Guardan mis respuestas?', 'a' => 'No, el cálculo se hace en su navegador. Solo nos llegan si usted envía el formulario.'],
        ],
        'related'       => ['facturacion-electronica-sifen', 'integraciones-api'],
        'ctaWhatsapp'   => '',
        'formNeed'      => 'integracion',
        'analyticsTool' => 'costo_integracion_sifen',
    ],
];
