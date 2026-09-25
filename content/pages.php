<?php
/**
 * The static (non-service) pages, keyed by path. Services live in
 * content/services.php, tools in content/tools.php, guides in content/guias.php,
 * segment pages in content/segmentos.php; this is everything else with a URL.
 *
 *   title        string  <title> without the ' | <site name>' suffix
 *   description  string  120–155 chars, unique across the whole site
 *   h1           string  visible heading
 *   lead         string  one-line intro under the H1
 *   sections     array   optional prose blocks for templates/page.php:
 *                        [['h2' => ..., 'body' => [paragraph, ...]], ...]
 *   stub         bool    true while the page is still a placeholder: it renders
 *                        through templates/page-stub.php, is marked noindex and
 *                        stays out of sitemap.php. The phase that writes the
 *                        page sets this to false.
 *   noindex      bool    the page exists but is not a URL of its own (/404).
 *                        Excluded from sitemap.php and from the route contract.
 *   changefreq   string  sitemap hint
 *   priority     string  sitemap hint
 *
 * Every entry here needs a route file (<path>/index.php) except '/404', which
 * is served by 404.php.
 */

declare(strict_types=1);

return [
    '/' => [
        'title'       => 'Software y páginas web en Paraguay',
        'description' => 'Software a medida, páginas web, facturación electrónica SIFEN, pagos con '
                       . 'Bancard y Pagopar y WhatsApp Business API para empresas de Paraguay.',
        'h1'          => '',
        'lead'        => '',
        'stub'        => false,
        'changefreq'  => 'weekly',
        'priority'    => '1.0',
    ],

    '/servicios/' => [
        'title'       => 'Servicios de desarrollo',
        'description' => 'Todos nuestros servicios: integraciones SIFEN y pagos, páginas web y '
                       . 'WordPress, software, ERP, CRM, apps, hosting y correo corporativo.',
        'h1'          => '',
        'lead'        => '',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.9',
    ],

    '/precios/' => [
        'title'       => 'Precios de páginas web y software',
        'description' => 'Cómo cotizamos páginas web, integraciones y software en Paraguay: qué '
                       . 'mueve el precio, qué incluye cada plan y cómo pedir su presupuesto.',
        'h1'          => 'Precios',
        'lead'        => 'Cada proyecto se cotiza en guaraníes, con el alcance por escrito antes de empezar.',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.8',
    ],

    '/herramientas/' => [
        'title'       => 'Cotizadores y calculadoras',
        'description' => 'Cotizadores gratuitos para estimar el costo de una página web, una app o '
                       . 'una integración SIFEN, y calcular el retorno de automatizar procesos.',
        'h1'          => 'Cotizadores y calculadoras',
        'lead'        => 'Estime su proyecto en dos minutos y reciba el presupuesto confirmado por WhatsApp.',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.7',
    ],

    '/guias/' => [
        'title'       => 'Guías de SIFEN, pagos y páginas web',
        'description' => 'Guías paso a paso: facturación electrónica con SIFEN y ekuatia, cobros con '
                       . 'Bancard, Pagopar y Tigo Money, WordPress, dominios y correo corporativo.',
        'h1'          => 'Guías paso a paso',
        'lead'        => 'Cómo hacerlo usted mismo, y cuándo conviene que lo hagamos nosotros.',
        'stub'        => false,
        'changefreq'  => 'weekly',
        'priority'    => '0.7',
    ],

    '/blog/' => [
        'title'       => 'Blog de desarrollo y tecnología',
        'description' => 'Artículos sobre desarrollo de software, precios de páginas web y apps, '
                       . 'sistemas de gestión y la carrera de programador en Paraguay.',
        'h1'          => 'Blog',
        'lead'        => 'Tecnología explicada para dueños de empresas y programadores de Paraguay.',
        'stub'        => false,
        'changefreq'  => 'weekly',
        'priority'    => '0.6',
    ],

    '/contacto/' => [
        'title'       => 'Contacto y presupuesto',
        'description' => 'Pida su presupuesto de software, página web o integración. Le respondemos '
                       . 'con una propuesta por escrito y el precio en guaraníes.',
        'h1'          => '',
        'lead'        => '',
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.8',
    ],

    '/nosotros/' => [
        'title'       => 'Nosotros',
        'description' => 'Quiénes somos y cómo trabajamos: un equipo de desarrollo enfocado en '
                       . 'empresas paraguayas, con alcance y precio por escrito en cada proyecto.',
        'h1'          => 'Nosotros',
        'lead'        => 'Un equipo de desarrollo que conoce cómo se factura, se cobra y se vende en Paraguay.',
        'stub'        => true,
        'changefreq'  => 'yearly',
        'priority'    => '0.5',
    ],

    '/casos/' => [
        'title'       => 'Proyectos y casos',
        'description' => 'Proyectos que desarrollamos: portales inmobiliarios, sistemas de gestión, '
                       . 'CRM y sitios de servicios profesionales, con qué resolvió cada uno.',
        'h1'          => 'Proyectos',
        'lead'        => 'Lo que construimos y qué resolvió cada proyecto.',
        'stub'        => true,
        'changefreq'  => 'monthly',
        'priority'    => '0.6',
    ],

    '/trabaja-con-nosotros/' => [
        'title'       => 'Trabajá con nosotros',
        'description' => 'Buscamos programadores, desarrolladores WordPress y full stack en '
                       . 'Paraguay. Envíe su perfil y conozca cómo trabajamos.',
        'h1'          => 'Trabajá con nosotros',
        'lead'        => 'Buscamos programadores que disfruten resolver problemas reales de empresas.',
        'stub'        => true,
        'changefreq'  => 'monthly',
        'priority'    => '0.4',
    ],

    '/privacidad/' => [
        'title'       => 'Política de privacidad',
        'description' => 'Cómo tratamos los datos personales que nos deja en el formulario y cómo '
                       . 'puede pedir su acceso, corrección o eliminación.',
        'h1'          => 'Política de privacidad',
        'lead'        => 'Cómo tratamos los datos personales que nos confía.',
        'sections'    => [
            [
                'h2'   => 'Qué datos recogemos',
                'body' => [
                    'Recogemos únicamente los datos que usted escribe en el formulario de contacto '
                        . '—nombre, empresa, teléfono, correo y el mensaje— más los parámetros de '
                        . 'campaña que trae el enlace por el que llegó y datos de navegación '
                        . 'agregados de Google Analytics.',
                ],
            ],
            [
                'h2'   => 'Para qué los usamos',
                'body' => [
                    'Usamos sus datos para responder su consulta, preparar su presupuesto y dar '
                        . 'seguimiento al proyecto. Se guardan en nuestro sistema de gestión de '
                        . 'clientes. No los vendemos ni los cedemos a terceros ajenos a la '
                        . 'prestación del servicio.',
                ],
            ],
            [
                'h2'   => 'Datos de los sistemas que desarrollamos',
                'body' => [
                    'Cuando desarrollamos o mantenemos un sistema para su empresa, los datos que '
                        . 'ese sistema procesa son de su empresa. Accedemos a ellos solo para '
                        . 'cumplir el trabajo contratado y bajo confidencialidad.',
                ],
            ],
            [
                'h2'   => 'Sus derechos',
                'body' => [
                    'Puede pedir en cualquier momento el acceso, la corrección o la eliminación de '
                        . 'sus datos escribiéndonos por el formulario de contacto o por WhatsApp.',
                ],
            ],
        ],
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.3',
    ],

    '/terminos/' => [
        'title'       => 'Términos de servicio',
        'description' => 'Las condiciones bajo las que desarrollamos software y páginas web: '
                       . 'alcance, entregas, propiedad del código, pagos y soporte.',
        'h1'          => 'Términos de servicio',
        'lead'        => 'Condiciones bajo las que prestamos nuestros servicios.',
        'sections'    => [
            [
                'h2'   => 'Alcance y presupuesto',
                'body' => [
                    'Cada proyecto se contrata sobre una propuesta escrita que detalla qué se '
                        . 'entrega, qué queda fuera, el precio en guaraníes y la forma de pago. '
                        . 'Cualquier trabajo adicional se cotiza y aprueba por escrito antes de hacerse.',
                ],
            ],
            [
                'h2'   => 'Entregas y aprobaciones',
                'body' => [
                    'Trabajamos por etapas. Cada entrega se prueba y se aprueba antes de pasar a la '
                        . 'siguiente. Los plazos dependen de que recibamos a tiempo los contenidos, '
                        . 'accesos y respuestas que el proyecto necesita.',
                ],
            ],
            [
                'h2'   => 'Propiedad del código y accesos',
                'body' => [
                    'Una vez pagado el proyecto, el código desarrollado a medida, los dominios y '
                        . 'las cuentas de servicios quedan a nombre del cliente. Las licencias de '
                        . 'terceros (plugins, plantillas, servicios en la nube) se rigen por sus '
                        . 'propias condiciones.',
                ],
            ],
            [
                'h2'   => 'Soporte y mantenimiento',
                'body' => [
                    'Cada entrega incluye un período de corrección de errores definido en la '
                        . 'propuesta. El soporte continuo, las actualizaciones y el hosting se '
                        . 'contratan por separado con un plan mensual.',
                ],
            ],
        ],
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.3',
    ],

    // Served by 404.php, not by a route file.
    '/404' => [
        'title'       => 'Página no encontrada',
        'description' => 'No encontramos la página que buscaba. Vea nuestros servicios o '
                       . 'escríbanos y le indicamos dónde está lo que necesita.',
        'h1'          => 'No encontramos esta página',
        'lead'        => '',
        'stub'        => false,
        'noindex'     => true,
        'changefreq'  => 'yearly',
        'priority'    => '0.1',
    ],
];
