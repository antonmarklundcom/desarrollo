<?php
/** Phase "web": lead records for the web services and the quote estimator. */

declare(strict_types=1);

$__next = ['path' => '/herramientas/cotizador-pagina-web/', 'label' => 'Mientras tanto, estime su sitio'];

return [
    'services' => [
        'paginas-web' => [
            'menuLabel'    => 'Página web para empresa',
            'need'         => 'web',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera un presupuesto para una página web para mi empresa.',
            'nextStep'     => ['Le respondemos dentro del siguiente día hábil.', 'Tenga a mano su logo, la lista de servicios y dos sitios de referencia.'],
            'crmTag'       => 'paginas-web',
            'nextLink'     => $__next,
        ],
        'landing-page' => [
            'menuLabel'    => 'Landing page',
            'need'         => 'web',
            'tier'         => 'C',
            'whatsappText' => 'Hola, quisiera crear una landing page para una campaña.',
            'nextStep'     => ['Le respondemos dentro del siguiente día hábil.', 'Tenga definida la oferta y a quién va dirigida la campaña.'],
            'crmTag'       => 'landing-page',
            'nextLink'     => ['path' => '/guias/que-es-una-landing-page/', 'label' => 'Vea la estructura que usamos'],
        ],
        'wordpress' => [
            'menuLabel'    => 'Desarrollo WordPress y Elementor',
            'need'         => 'web',
            'tier'         => 'B',
            'whatsappText' => 'Hola, necesito un desarrollador WordPress para mi sitio.',
            'nextStep'     => ['Le respondemos dentro del siguiente día hábil.', 'Tenga a mano el acceso de administrador y una descripción del problema o la función.'],
            'crmTag'       => 'wordpress',
            'nextLink'     => ['path' => '/guias/elementor-vs-desarrollo-a-medida/', 'label' => 'Elementor o a medida'],
        ],
        'ecommerce' => [
            'menuLabel'    => 'Ecommerce con pagos locales',
            'need'         => 'web',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera cotizar una tienda online con pagos por Bancard o Pagopar.',
            'nextStep'     => ['Le respondemos dentro del siguiente día hábil.', 'Tenga su catálogo en planilla y averigüe el estado de su alta con la pasarela de pago.'],
            'crmTag'       => 'ecommerce',
            'nextLink'     => ['path' => '/guias/como-crear-una-tienda-online-en-paraguay/', 'label' => 'Lea los pasos para abrir su tienda'],
        ],
        'woocommerce' => [
            'menuLabel'    => 'Tienda WooCommerce',
            'need'         => 'web',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera consultar por una tienda WooCommerce.',
            'nextStep'     => ['Le respondemos dentro del siguiente día hábil.', 'Si ya tiene tienda, tenga a mano los accesos a WordPress y al hosting.'],
            'crmTag'       => 'woocommerce',
            'nextLink'     => $__next,
        ],
        'mantenimiento-web' => [
            'menuLabel'    => 'Mantenimiento web mensual',
            'need'         => 'soporte',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera consultar por el plan de mantenimiento web.',
            'nextStep'     => ['Le respondemos dentro del siguiente día hábil.', 'Envíenos la dirección de su sitio para hacer una revisión inicial.'],
            'crmTag'       => 'mantenimiento-web',
            'nextLink'     => null,
        ],
        'seo' => [
            'menuLabel'    => 'Posicionamiento SEO',
            'need'         => 'web',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera mejorar el posicionamiento SEO de mi sitio.',
            'nextStep'     => ['Le respondemos dentro del siguiente día hábil.', 'Tenga a mano la dirección del sitio y los servicios que más le interesa posicionar.'],
            'crmTag'       => 'seo',
            'nextLink'     => ['path' => '/guias/checklist-seo-para-su-sitio/', 'label' => 'Revise su sitio con el checklist'],
        ],
    ],
    'tools' => [
        'cotizador-pagina-web' => [
            'menuLabel'    => 'Cotizador de página web',
            'need'         => 'web',
            'tier'         => 'B',
            'whatsappText' => 'Hola, usé el cotizador de página web y quisiera un presupuesto.',
            'nextStep'     => ['Le respondemos dentro del siguiente día hábil.', 'Guarde el resultado del cotizador: lo usamos como punto de partida.'],
            'crmTag'       => 'cotizador-pagina-web',
            'nextLink'     => ['path' => '/guias/como-crear-una-pagina-web-para-mi-negocio/', 'label' => 'Lea la guía para crear su sitio'],
        ],
    ],
];
