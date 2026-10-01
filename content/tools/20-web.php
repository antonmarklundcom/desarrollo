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
        'metaDescription' => 'Cotizador de página web: elegí tipo de sitio, páginas, idiomas, blog y pagos '
                           . 'online, y mirá el nivel de complejidad de tu proyecto y qué suele incluir.',
        'hero' => [
            'eyebrow' => 'Herramientas',
            'h1'      => 'Cotizador de página web',
            'lead'    => 'Marcá lo que necesita tu sitio y mirá en segundos el nivel de complejidad de '
                       . 'tu proyecto y qué suele incluir.',
        ],
        'intro' => [
            'El costo de una página web depende sobre todo de cinco factores: el tipo de sitio (una landing '
                . 'page, un sitio institucional, una tienda online o un desarrollo a medida), la cantidad de '
                . 'páginas, los idiomas, las funciones extra como blog o pagos online, y quién escribe los textos.',
            'Este cotizador combina esos factores en un nivel de complejidad (básico, intermedio, avanzado o a '
                . 'medida) y te indica qué suele incluir. No muestra montos ni es un presupuesto: el '
                . 'presupuesto sale después de una conversación. Dos sitios del mismo nivel pueden '
                . 'costar distinto según el diseño, las integraciones y el material que ya tengas.',
            'Si el resultado te sirve, enviánoslo con el formulario y te respondemos con un presupuesto cerrado en '
                . 'guaraníes, con el detalle de lo que incluye y lo que no.',
        ],
        'faq' => [
            ['q' => '¿El resultado es un presupuesto?', 'a' => 'No. Es un nivel de complejidad, sin montos. El '
                . 'presupuesto real se arma después de conocer tu caso.'],
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
