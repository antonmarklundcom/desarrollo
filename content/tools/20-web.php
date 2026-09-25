<?php
/**
 * Phase "web": the website quote estimator. Same shape as content/tools.php.
 */

declare(strict_types=1);

return [

    'cotizador-pagina-web' => [
        'path'            => '/herramientas/cotizador-pagina-web/',
        'title'           => 'Cotizador de página web',
        'navLabel'        => 'Cotizador de página web',
        'seoTitle'        => 'Cotizador de página web',
        'metaDescription' => 'Cotizador de página web: elija tipo de sitio, páginas, idiomas, blog y pagos '
                           . 'online, y vea la complejidad y un rango orientativo del mercado.',
        'hero' => [
            'eyebrow' => 'Herramientas',
            'h1'      => 'Cotizador de página web',
            'lead'    => 'Marque lo que necesita su sitio y vea en segundos el nivel de complejidad, un rango '
                       . 'orientativo del mercado paraguayo y qué suele incluir.',
        ],
        'intro' => [
            'El precio de una página web depende sobre todo de cinco factores: el tipo de sitio (una landing '
                . 'page, un sitio institucional, una tienda online o un desarrollo a medida), la cantidad de '
                . 'páginas, los idiomas, las funciones extra como blog o pagos online, y quién escribe los textos.',
            'Este cotizador combina esos factores en un nivel de complejidad (básico, intermedio, avanzado o a '
                . 'medida) y le muestra un rango orientativo del mercado en guaraníes. No es un presupuesto: son '
                . 'rangos orientativos del mercado, a confirmar con presupuesto. Dos sitios del mismo nivel pueden '
                . 'costar distinto según el diseño, las integraciones y el material que usted ya tenga.',
            'Si el resultado le sirve, envíelo con el formulario y le respondemos con un presupuesto cerrado en '
                . 'guaraníes, con el detalle de lo que incluye y lo que no.',
        ],
        'faq' => [
            ['q' => '¿El resultado es un presupuesto?', 'a' => 'No. Es un rango orientativo del mercado para que '
                . 'tenga una referencia. El presupuesto real se arma después de conocer su caso.'],
            ['q' => '¿Incluye dominio y hosting?', 'a' => 'No. Dominio, hosting y licencias son costos anuales que '
                . 'se detallan aparte.'],
            ['q' => '¿Por qué los pagos online suben tanto la complejidad?', 'a' => 'Porque requieren integrar una '
                . 'pasarela, probar pagos aprobados y rechazados y manejar estados de pedido y stock.'],
            ['q' => '¿Qué pasa si no tengo los textos?', 'a' => 'Se puede incluir la redacción. Suma trabajo, pero '
                . 'suele mejorar el resultado en Google y en conversiones.'],
        ],
        'related'       => ['paginas-web', 'landing-page', 'ecommerce'],
        'ctaWhatsapp'   => '',
        'formNeed'      => 'web',
        'analyticsTool' => 'cotizador_pagina_web',
    ],
];
