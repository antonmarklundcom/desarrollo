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
        'sections'    => [
            [
                'h2'   => 'Qué construimos',
                'body' => [
                    'Desarrollamos páginas web, tiendas online, sistemas a medida e integraciones para '
                        . 'empresas paraguayas: facturación electrónica con SIFEN, cobros con pasarelas '
                        . 'locales, WhatsApp Business conectado a un CRM y portales con miles de '
                        . 'registros.',
                    'Preferimos resolver un problema concreto del negocio —vender más, facturar sin '
                        . 'errores, dejar de cargar lo mismo dos veces— antes que entregar tecnología '
                        . 'por la tecnología misma.',
                ],
            ],
            [
                'h2'   => 'Cómo trabajamos',
                'body' => [
                    'Cada proyecto empieza con una conversación sobre lo que necesita y termina en una '
                        . 'propuesta por escrito: alcance, plazos y precio en guaraníes. Lo que no está '
                        . 'en la propuesta no se cobra sin su aprobación.',
                    'Trabajamos de forma remota con clientes de todo el país. Usted ve el avance en un '
                        . 'sitio de pruebas, las consultas se resuelven por WhatsApp o videollamada y, '
                        . 'cuando el proyecto lo justifica, coordinamos una reunión presencial.',
                    'Al terminar le entregamos accesos, dominio y código a su nombre. Si después quiere '
                        . 'seguir con nosotros para mantenimiento, lo acordamos aparte; si prefiere otro '
                        . 'proveedor, se lleva todo.',
                ],
            ],
            [
                'h2'   => 'Sitios hermanos',
                'body' => [
                    'Hay temas que tratamos en sitios dedicados. Para seguridad informática, auditorías '
                        . 'y protección de datos, visite ciberseguridad.com.py. Para ofertas de empleo '
                        . 'en todo Paraguay, trabajo.com.py. Para novedades y guías sobre inteligencia '
                        . 'artificial, inteligenciaartificial.com.py.',
                ],
            ],
        ],
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.5',
    ],

    '/casos/' => [
        'title'       => 'Proyectos y casos',
        'description' => 'Proyectos que desarrollamos: portales inmobiliarios, sistemas de gestión, '
                       . 'CRM y sitios de servicios profesionales, con qué resolvió cada uno.',
        'h1'          => 'Proyectos',
        'lead'        => 'Lo que construimos y qué resolvió cada proyecto.',
        'sections'    => [
            [
                'h2'   => 'propia.com.py: portal inmobiliario',
                'body' => [
                    'Un portal de avisos de propiedades en venta y alquiler en Paraguay. Permite buscar '
                        . 'por ciudad, barrio, tipo de propiedad y precio, ver cada ficha con fotos y '
                        . 'ubicación, y estimar la cuota de financiación de una compra.',
                    'Está desarrollado como aplicación web moderna en Node.js con base de datos MySQL, '
                        . 'importación masiva de avisos y páginas optimizadas para buscadores.',
                ],
            ],
            [
                'h2'   => 'alquilar.com.py: alquileres',
                'body' => [
                    'Un sitio enfocado en alquileres: departamentos, casas y otros inmuebles para '
                        . 'alquilar, con páginas por ciudad y zona y contacto directo con el anunciante.',
                    'Está construido para cargar rápido en el celular y posicionar búsquedas locales, '
                        . 'con un contenido pensado para quien busca dónde vivir.',
                ],
            ],
            [
                'h2'   => 'contador.com.py: sitio para un estudio contable',
                'body' => [
                    'Un sitio para servicios contables e impositivos que, además de presentar los '
                        . 'servicios, ofrece calculadoras gratuitas para cálculos contables e impositivos '
                        . 'frecuentes y guías prácticas que atraen consultas desde Google.',
                    'Está hecho en PHP liviano, sin base de datos, con formularios que envían cada '
                        . 'consulta directamente al CRM.',
                ],
            ],
            [
                'h2'   => 'VenderCRM: CRM con WhatsApp para pymes',
                'body' => [
                    'Un CRM pensado para pymes que venden por WhatsApp: reúne los contactos que llegan '
                        . 'de los formularios web y de WhatsApp, los ordena en un embudo de ventas y '
                        . 'permite hacer seguimiento a cada oportunidad.',
                    'Recibe los leads de los sitios mediante una API y es la herramienta donde terminan '
                        . 'las consultas de los proyectos anteriores.',
                ],
            ],
        ],
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.6',
    ],

    '/trabaja-con-nosotros/' => [
        'title'       => 'Trabaje con nosotros',
        'description' => 'Buscamos programadores, desarrolladores WordPress y full stack en '
                       . 'Paraguay. Envíe su perfil y conozca cómo trabajamos.',
        'h1'          => 'Trabaje con nosotros',
        'lead'        => 'Buscamos programadores que disfruten resolver problemas reales de empresas.',
        'sections'    => [
            [
                'h2'   => 'Perfiles que buscamos',
                'body' => [
                    'Programador PHP: sitios y sistemas en PHP, formularios, integraciones con APIs y '
                        . 'bases de datos MySQL.',
                    'Desarrollador full stack: aplicaciones web con Node.js o PHP en el servidor y '
                        . 'JavaScript moderno en el navegador, de la base de datos a la interfaz.',
                    'Desarrollador WordPress: temas, plugins, WooCommerce y migraciones de sitios '
                        . 'existentes.',
                    'Desarrollador React o móvil: interfaces en React y aplicaciones para Android e iOS.',
                    'Pasantías: estudiantes de informática o carreras afines que quieran aprender en '
                        . 'proyectos reales, con tareas acotadas y revisión de código.',
                ],
            ],
            [
                'h2'   => 'Cómo postularse',
                'body' => [
                    'Escríbanos por el formulario de contacto o por WhatsApp e incluya la palabra '
                        . '"Trabajo" en el mensaje. Cuéntenos qué perfil le interesa, con qué '
                        . 'tecnologías trabajó y agregue un enlace a su portafolio, GitHub o proyectos.',
                    'No hace falta título ni años de experiencia si puede mostrar lo que hizo. '
                        . 'Respondemos cuando hay un proyecto que encaja con su perfil.',
                ],
            ],
            [
                'h2'   => 'Ofertas de empleo en todo Paraguay',
                'body' => [
                    'Este sitio no publica ofertas de terceros. Para ofertas de empleo en todo '
                        . 'Paraguay, en informática y en otros rubros, visite trabajo.com.py.',
                ],
            ],
        ],
        'stub'        => false,
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
