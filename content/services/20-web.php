<?php
/**
 * Phase "web": service records for the web cluster (páginas web, landing page,
 * WordPress, ecommerce, WooCommerce, mantenimiento, SEO). Same shape as
 * content/services.php.
 */

declare(strict_types=1);

return [

    'paginas-web' => [
        'path'            => '/servicios/paginas-web/',
        'title'           => 'Páginas web para empresas',
        'navLabel'        => 'Páginas web',
        'cluster'         => 'web',
        'parent'          => null,
        'seoTitle'        => 'Páginas web para empresas en Paraguay',
        'metaDescription' => 'Diseño y desarrollo de páginas web para empresas en Paraguay: sitio rápido, '
                           . 'adaptado al celular, con WhatsApp, formularios y SEO básico.',
        'hero' => [
            'eyebrow' => 'Páginas web',
            'h1'      => 'Páginas web para empresas en Paraguay',
            'h2'      => 'Diseño web y desarrollo de un sitio que explica lo que usted vende y trae consultas.',
            'lead'    => 'Creamos páginas web para empresas, comercios y profesionales de Paraguay: un sitio '
                       . 'web rápido, que se lee bien en el celular, con botón de WhatsApp, formulario de '
                       . 'contacto y la estructura que Google necesita para encontrarlo. Usted recibe un '
                       . 'presupuesto cerrado en guaraníes, factura legal y el control total del dominio y '
                       . 'del contenido.',
        ],
        'includes' => [
            'Relevamiento inicial: qué vende, a quién y qué acción quiere que haga el visitante',
            'Mapa del sitio y estructura de páginas pensada para búsquedas reales en Paraguay',
            'Diseño web adaptado a celular, tablet y computadora',
            'Desarrollo en WordPress o en código a medida, según lo que convenga a su caso',
            'Botón de WhatsApp con mensaje prearmado y formulario de contacto que llega a su correo',
            'SEO técnico básico: títulos, descripciones, velocidad, sitemap y Google Search Console',
            'Instalación de certificado SSL (https) y configuración del dominio',
            'Integración con Google Analytics 4 y medición de clics a WhatsApp y formularios',
            'Una sesión de capacitación para que usted edite textos e imágenes',
            'Entrega de accesos: dominio, hosting, administrador del sitio y cuentas de Google',
        ],
        'excludes' => [
            'Redacción completa de textos, salvo que la contrate como adicional',
            'Sesiones de fotos o video profesional',
            'Campañas pagas en Google Ads o redes sociales',
            'Tienda online con carrito y pagos (se cotiza como ecommerce)',
            'Mantenimiento mensual después de la garantía (se contrata aparte)',
        ],
        'weNeed' => [
            'Logo en buena resolución y, si tiene, colores o manual de marca',
            'Lista de servicios o productos con una descripción breve de cada uno',
            'Fotos propias del negocio, del equipo o de trabajos realizados',
            'Datos de contacto: dirección, horarios, número de WhatsApp y correo',
            'Acceso al dominio si ya lo tiene registrado, o el nombre que quiere registrar',
            'Dos o tres sitios que le gusten como referencia (no hace falta que sean del rubro)',
        ],
        'sections' => [
            [
                'h2'   => 'Qué debe lograr una página web para su empresa',
                'body' => [
                    'Una página web no es un folleto digital. Es el lugar al que llega una persona que '
                        . 'buscó en Google, vio su perfil en Instagram o recibió su enlace por WhatsApp, y en '
                        . 'pocos segundos decide si le escribe o sigue buscando. El diseño web tiene que '
                        . 'responder tres preguntas enseguida: qué hace usted, si atiende en la zona o en todo '
                        . 'el país, y cómo se le contacta.',
                    'Por eso empezamos cada proyecto por el objetivo, no por los colores. Si su negocio vive '
                        . 'de consultas por WhatsApp, el sitio web se arma alrededor de ese botón. Si vende a '
                        . 'otras empresas, lo importante es que cada servicio tenga su propia página con '
                        . 'información concreta, porque esa página es la que aparece cuando alguien busca ese '
                        . 'servicio en Google.',
                ],
                'items' => [
                    ['title' => 'Claridad', 'text' => 'Un titular que dice qué vende y para quién, sin frases genéricas.'],
                    ['title' => 'Confianza', 'text' => 'Datos reales de contacto, dirección, RUC y fotos propias.'],
                    ['title' => 'Acción', 'text' => 'WhatsApp y formulario visibles en cada página, también en el celular.'],
                    ['title' => 'Búsqueda', 'text' => 'Una página por servicio, con el vocabulario que usan sus clientes.'],
                ],
            ],
            [
                'h2'   => 'Cómo trabajamos el desarrollo web, paso a paso',
                'body' => [
                    'El proceso de diseño de páginas web tiene etapas cortas con una aprobación suya al final '
                        . 'de cada una. Así no hay sorpresas al final ni cambios que obliguen a rehacer todo.',
                ],
                'items' => [
                    ['title' => '1. Relevamiento', 'text' => 'Una reunión o llamada para entender el negocio, la competencia y el objetivo del sitio.'],
                    ['title' => '2. Estructura', 'text' => 'Proponemos el mapa de páginas y el contenido de cada una antes de diseñar.'],
                    ['title' => '3. Diseño', 'text' => 'Presentamos la página de inicio y una interna; usted aprueba o pide ajustes.'],
                    ['title' => '4. Desarrollo', 'text' => 'Construimos el sitio completo en un entorno de prueba que usted puede revisar.'],
                    ['title' => '5. Publicación', 'text' => 'Conectamos dominio, SSL, analítica y Search Console, y revisamos todo en vivo.'],
                    ['title' => '6. Capacitación', 'text' => 'Le mostramos cómo editar y le dejamos los accesos documentados.'],
                ],
            ],
            [
                'h2'   => 'WordPress o desarrollo a medida: cuál conviene',
                'body' => [
                    'Para la mayoría de las páginas web de empresas pequeñas y medianas recomendamos WordPress: '
                        . 'es conocido, tiene un panel fácil de usar y cualquier desarrollador puede continuar el '
                        . 'trabajo en el futuro. Si necesita un diseño muy específico, velocidad máxima o '
                        . 'funciones que no existen en un plugin, conviene el desarrollo a medida.',
                    'No hay una respuesta única. Le explicamos las ventajas y los costos de mantenimiento de cada '
                        . 'opción antes de presupuestar, y le decimos con franqueza cuándo una landing page '
                        . 'simple alcanza y cuándo hace falta un sitio más completo.',
                ],
            ],
            [
                'h2'   => 'Qué define el costo de crear una página web',
                'body' => [
                    'El precio de una página web depende de la cantidad de páginas, de si el diseño es a partir '
                        . 'de una plantilla o original, de cuántos idiomas tiene, de si incluye blog, pagos '
                        . 'online o integraciones, y de quién escribe los textos. Un sitio institucional de '
                        . 'cinco páginas y un sitio con catálogo de doscientos productos son trabajos muy '
                        . 'distintos.',
                    'Como referencia general, en el mercado paraguayo un sitio institucional simple suele '
                        . 'ubicarse en un rango bajo de millones de guaraníes y un desarrollo a medida con '
                        . 'integraciones puede multiplicar ese valor. Son rangos orientativos del mercado, a '
                        . 'confirmar con presupuesto. Para una estimación según su caso, use el cotizador de '
                        . 'página web.',
                ],
            ],
            [
                'h2'   => 'Un sitio web que se puede medir',
                'body' => [
                    'Dejamos configurada la medición desde el primer día: cuántas visitas llegan, desde qué '
                        . 'búsquedas, cuántas personas tocan el botón de WhatsApp y cuántas envían el '
                        . 'formulario. Con esos datos usted sabe si el sitio está trabajando y dónde conviene '
                        . 'mejorar, sin depender de impresiones.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Presupuesto cerrado en guaraníes', 'text' => 'Sabe desde el inicio qué incluye y cuánto cuesta, con factura legal.'],
            ['title' => 'Todo a su nombre', 'text' => 'El dominio, el hosting y las cuentas quedan registrados a nombre de su empresa.'],
            ['title' => 'Pensado para el celular', 'text' => 'La mayoría de sus visitas llegan desde el teléfono; el diseño parte de ahí.'],
            ['title' => 'Preparado para Google', 'text' => 'Estructura, velocidad y datos básicos de SEO listos desde la publicación.'],
            ['title' => 'Usted puede editarlo', 'text' => 'Cambia textos, fotos y precios sin depender de nosotros para cada ajuste.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto demora crear una página web para mi empresa?',
                'a' => 'Un sitio institucional de pocas páginas suele estar listo en algunas semanas, siempre '
                     . 'que el contenido (textos, logo, fotos) esté disponible. Lo que más atrasa un proyecto '
                     . 'es la espera de material, por eso le pedimos todo al inicio.',
            ],
            [
                'q' => '¿El dominio y el hosting están incluidos?',
                'a' => 'Podemos registrar el dominio .com.py o .com y contratar el hosting por usted, siempre a '
                     . 'nombre de su empresa. El costo anual de ambos se detalla aparte en el presupuesto para '
                     . 'que sepa exactamente qué renueva cada año.',
            ],
            [
                'q' => '¿Puedo actualizar la página yo mismo?',
                'a' => 'Sí. Al terminar le damos una capacitación y accesos de administrador. Puede cambiar '
                     . 'textos, imágenes, precios y publicar novedades sin conocimientos técnicos.',
            ],
            [
                'q' => '¿La página va a aparecer en Google?',
                'a' => 'La dejamos preparada e indexada en Google Search Console, pero la posición depende de la '
                     . 'competencia y del contenido. Para trabajar posiciones de forma sostenida ofrecemos el '
                     . 'servicio de posicionamiento SEO.',
            ],
            [
                'q' => '¿Qué pasa si ya tengo una página web vieja?',
                'a' => 'La revisamos, rescatamos el contenido que sirve y planificamos las redirecciones para no '
                     . 'perder las posiciones que ya tiene en Google cuando cambiamos a la nueva versión.',
            ],
            [
                'q' => '¿Emiten factura?',
                'a' => 'Sí, todos los trabajos se facturan con factura legal en guaraníes.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto de página web', 'whatsappText' => ''],
        'related' => ['landing-page', 'wordpress', 'ecommerce', 'seo', 'hosting', 'mantenimiento-web'],
        'guides'    => ['como-crear-una-pagina-web-para-mi-negocio', 'wordpress-vs-wix', 'checklist-seo-para-su-sitio'],
        'articles' => ['cuanto-cuesta-una-pagina-web-en-paraguay'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/cotizador-pagina-web/',
                'label' => 'Cotizador de página web',
                'text'  => 'Elija el tipo de sitio y las funciones que necesita y vea un rango orientativo.',
            ],
        ],
    ],

    'landing-page' => [
        'path'            => '/servicios/landing-page/',
        'title'           => 'Landing page',
        'navLabel'        => 'Landing page',
        'cluster'         => 'web',
        'parent'          => 'paginas-web',
        'seoTitle'        => 'Crear landing page en Paraguay',
        'metaDescription' => 'Creamos landing pages para campañas en Paraguay: una sola página enfocada en '
                           . 'una oferta, con WhatsApp, formulario y medición de conversiones.',
        'hero' => [
            'eyebrow' => 'Landing page',
            'h1'      => 'Landing page para campañas y lanzamientos',
            'h2'      => 'Una sola página, un solo objetivo: que el visitante le escriba o se registre.',
            'lead'    => 'Si va a invertir en publicidad en Google, Facebook o Instagram, necesita una landing '
                       . 'page: una página de destino enfocada en una sola oferta, sin menús que distraigan, '
                       . 'con el botón de WhatsApp o el formulario siempre a la vista. Le ayudamos a crear la '
                       . 'landing page, a medir cuántas consultas genera y a mejorarla con datos.',
        ],
        'includes' => [
            'Estructura de la página según el objetivo: consulta, registro, descarga o compra',
            'Diseño adaptado al celular, que es desde donde llega casi todo el tráfico de anuncios',
            'Botón de WhatsApp con mensaje prearmado que identifica la campaña',
            'Formulario corto con envío a su correo o a su CRM',
            'Medición con Google Analytics 4 y eventos de conversión para Google Ads y Meta',
            'Optimización de velocidad de carga',
            'Publicación en su dominio o en un subdominio de campaña',
        ],
        'excludes' => [
            'Gestión de la pauta publicitaria',
            'Producción de fotos o video',
            'Sitio web completo de varias secciones (se cotiza como página web)',
        ],
        'weNeed' => [
            'La oferta concreta: qué vende, a qué precio o con qué condición',
            'A quién va dirigida la campaña',
            'Logo, fotos del producto o servicio y datos de contacto',
            'Acceso a su cuenta de Google Ads o Meta Business, si quiere que configuremos las conversiones',
        ],
        'sections' => [
            [
                'h2'   => 'Qué es una landing page y cuándo la necesita',
                'body' => [
                    'Una landing page es una página creada para recibir a las personas que hacen clic en un '
                        . 'anuncio, un correo o un enlace de campaña. A diferencia de un sitio web institucional, '
                        . 'no explica toda la empresa: presenta una oferta y pide una acción.',
                    'La necesita cuando lanza un producto, abre inscripciones, promociona un servicio puntual o '
                        . 'hace publicidad paga. Enviar el tráfico de un anuncio a la página de inicio suele '
                        . 'desperdiciar presupuesto, porque el visitante tiene que buscar lo que vio en el aviso.',
                ],
            ],
            [
                'h2'   => 'La estructura que usamos para crear una landing page',
                'body' => [
                    'Cada bloque responde una objeción del visitante, en el orden en que aparece en su cabeza.',
                ],
                'items' => [
                    ['title' => 'Titular y oferta', 'text' => 'Lo que gana el visitante, dicho en una frase, con el botón de acción al lado.'],
                    ['title' => 'Problema y solución', 'text' => 'La situación del cliente y cómo su producto la resuelve.'],
                    ['title' => 'Detalle', 'text' => 'Qué incluye, cómo funciona, precios o condiciones.'],
                    ['title' => 'Prueba', 'text' => 'Fotos reales, datos verificables, garantías o certificaciones.'],
                    ['title' => 'Preguntas frecuentes', 'text' => 'Las dudas que hoy le hacen por WhatsApp, respondidas antes.'],
                    ['title' => 'Llamado final', 'text' => 'El mismo botón de acción, repetido al cierre.'],
                ],
            ],
            [
                'h2'   => 'Medición: saber cuánto cuesta cada consulta',
                'body' => [
                    'Una landing page sin medición es una apuesta. Configuramos eventos para los clics en '
                        . 'WhatsApp y los envíos de formulario, y los conectamos con Google Ads y Meta para que '
                        . 'las plataformas optimicen hacia personas que realmente consultan. Así usted puede '
                        . 'calcular cuánto le cuesta cada contacto y comparar campañas.',
                    'Si la campaña lo justifica, preparamos dos versiones del titular o de la oferta para '
                        . 'comparar cuál convierte mejor.',
                ],
            ],
            [
                'h2'   => 'Errores comunes que hacen perder consultas',
                'body' => [
                    'La mayoría de las landing pages que no funcionan fallan por los mismos motivos. Los '
                        . 'revisamos antes de publicar, porque cada uno se paga en presupuesto de publicidad.',
                ],
                'items' => [
                    ['title' => 'Oferta distinta al anuncio', 'text' => 'El visitante no encuentra lo que vio y se va.'],
                    ['title' => 'Carga lenta', 'text' => 'Imágenes pesadas que tardan en aparecer en datos móviles.'],
                    ['title' => 'Formularios largos', 'text' => 'Pedir más datos de los necesarios reduce los envíos.'],
                    ['title' => 'Sin precio ni condiciones', 'text' => 'La duda principal queda sin respuesta.'],
                    ['title' => 'Botón escondido', 'text' => 'En el celular la acción debe estar siempre a la vista.'],
                ],
            ],
            [
                'h2'   => 'Cómo crear landing page tras landing page sin empezar de cero',
                'body' => [
                    'Si su empresa hace campañas seguido, conviene tener una base de bloques reutilizables: '
                        . 'titular, beneficios, detalle, preguntas y llamado a la acción. Armamos esa base con '
                        . 'su marca, de modo que cada nueva campaña solo requiere cambiar textos, imágenes y el '
                        . 'mensaje de WhatsApp. Así se publica más rápido y se mantiene la coherencia visual '
                        . 'entre promociones.',
                ],
            ],
            [
                'h2'   => 'Qué define el costo de una landing page',
                'body' => [
                    'Influyen la cantidad de secciones, si el diseño parte de una plantilla o es original, si '
                        . 'hay que escribir los textos, las integraciones (CRM, pasarela de pago, calendario) y '
                        . 'si se necesitan varias versiones. Es normalmente el tipo de proyecto web más '
                        . 'económico y rápido; el cotizador de página web le da un rango orientativo del '
                        . 'mercado, a confirmar con presupuesto.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Rápida de publicar', 'text' => 'Una sola página se diseña y publica en poco tiempo.'],
            ['title' => 'Enfocada', 'text' => 'Sin menús ni distracciones: un objetivo por página.'],
            ['title' => 'Medible', 'text' => 'Sabe cuántas consultas genera cada campaña.'],
            ['title' => 'Reutilizable', 'text' => 'La misma estructura sirve para la próxima promoción.'],
        ],
        'faq' => [
            [
                'q' => '¿En qué se diferencia una landing page de una página web?',
                'a' => 'Una página web presenta toda la empresa con varias secciones. Una landing page es una sola '
                     . 'página enfocada en una oferta y una acción, pensada para recibir tráfico de campañas.',
            ],
            [
                'q' => '¿Puedo usar la landing page sin tener sitio web?',
                'a' => 'Sí. Se puede publicar en su propio dominio aunque no tenga un sitio completo. Más adelante '
                     . 'puede integrarse a una página web institucional.',
            ],
            [
                'q' => '¿Ustedes manejan los anuncios?',
                'a' => 'Nos enfocamos en la página y la medición. Si ya trabaja con alguien para la pauta, '
                     . 'coordinamos con esa persona para que la configuración de conversiones quede correcta.',
            ],
            [
                'q' => '¿Cuánto demora crear una landing page?',
                'a' => 'Con la oferta y el material definidos, suele estar lista en pocos días hábiles.',
            ],
            [
                'q' => '¿Los formularios pueden llegar a mi CRM?',
                'a' => 'Sí, podemos enviar los datos al correo, a una planilla o a su CRM si tiene una API o '
                     . 'integración disponible.',
            ],
        ],
        'cta'       => ['label' => 'Pedir mi landing page', 'whatsappText' => ''],
        'related'   => ['paginas-web', 'seo', 'wordpress'],
        'guides'    => ['que-es-una-landing-page', 'como-crear-una-pagina-web-para-mi-negocio'],
        'articles'  => [],
        'toolLinks' => [
            [
                'path'  => '/herramientas/cotizador-pagina-web/',
                'label' => 'Cotizador de página web',
                'text'  => 'Elija "landing page" y vea un rango orientativo del mercado.',
            ],
        ],
    ],

    'wordpress' => [
        'path'            => '/servicios/wordpress/',
        'title'           => 'Desarrollo WordPress y Elementor',
        'navLabel'        => 'WordPress y Elementor',
        'cluster'         => 'web',
        'parent'          => 'paginas-web',
        'seoTitle'        => 'Desarrollador WordPress y Elementor',
        'metaDescription' => 'Desarrollador WordPress en Paraguay: sitios con Elementor, temas a medida, '
                           . 'plugins, migrar WordPress de hosting y corregir sitios lentos o rotos.',
        'hero' => [
            'eyebrow' => 'WordPress',
            'h1'      => 'Desarrollo WordPress y Elementor',
            'h2'      => 'Sitios nuevos, correcciones, migraciones y funciones a medida en WordPress.',
            'lead'    => 'Trabajamos como desarrollador WordPress para empresas y agencias de Paraguay: '
                       . 'construimos sitios nuevos con Elementor o con tema a medida, arreglamos sitios lentos '
                       . 'o con errores, desarrollamos plugins y nos encargamos de migrar WordPress de un '
                       . 'hosting a otro sin perder contenido ni posiciones en Google.',
        ],
        'includes' => [
            'Sitios nuevos en WordPress con Elementor o con tema a medida',
            'Plantillas de Elementor reutilizables para que usted cree páginas nuevas sin romper el diseño',
            'Desarrollo de plugins y funciones específicas (formularios, cálculos, integraciones con APIs)',
            'Migrar WordPress entre hostings o dominios, con redirecciones y verificación posterior',
            'Diagnóstico y corrección de errores, pantallas blancas y conflictos entre plugins',
            'Optimización de velocidad: caché, imágenes, limpieza de plugins y base de datos',
            'Actualización segura de versiones de WordPress, PHP, temas y plugins',
            'Documentación de lo que se hizo y de cómo mantenerlo',
        ],
        'excludes' => [
            'Licencias de plugins o temas pagos (se compran a nombre del cliente)',
            'Auditorías de ciberseguridad o respuesta a incidentes graves (derivamos a ciberseguridad.com.py)',
            'Soporte mensual continuo (se contrata en el plan de mantenimiento web)',
        ],
        'weNeed' => [
            'Acceso de administrador a WordPress',
            'Acceso al hosting (panel o FTP/SFTP) y a la base de datos',
            'Descripción del problema o de la función que necesita, con capturas si es un error',
            'Lista de licencias pagas que ya tiene (Elementor Pro, temas, plugins premium)',
        ],
        'sections' => [
            [
                'h2'   => 'Qué hace un desarrollador WordPress',
                'body' => [
                    'WordPress impulsa una gran parte de los sitios web del mundo, y en Paraguay es la '
                        . 'plataforma más común para páginas de empresas. Es fácil de empezar, pero cuando el '
                        . 'sitio crece aparecen problemas: plugins que chocan entre sí, actualizaciones que '
                        . 'rompen el diseño, lentitud o funciones que ningún plugin resuelve del todo.',
                    'Un desarrollador WordPress entiende cómo funciona por dentro: temas, hooks, tipos de '
                        . 'contenido, la base de datos y el servidor. Eso permite resolver el problema de raíz '
                        . 'en lugar de sumar otro plugin encima.',
                ],
            ],
            [
                'h2'   => 'Elementor: rápido de editar, si está bien armado',
                'body' => [
                    'Elementor permite que usted edite visualmente sus páginas. Bien usado, ahorra tiempo; mal '
                        . 'usado, genera sitios pesados y difíciles de mantener. Armamos los sitios con Elementor '
                        . 'usando estilos globales, plantillas y componentes reutilizables, de modo que cambiar '
                        . 'un color o un botón se haga una sola vez.',
                    'Si su sitio en Elementor está lento, revisamos qué widgets y complementos cargan, reducimos '
                        . 'lo que sobra y aplicamos caché y optimización de imágenes.',
                ],
                'items' => [
                    ['title' => 'Kit de estilos global', 'text' => 'Colores, tipografías y botones definidos una vez.'],
                    ['title' => 'Plantillas', 'text' => 'Encabezado, pie y páginas tipo listas para duplicar.'],
                    ['title' => 'Menos complementos', 'text' => 'Solo los paquetes de widgets que realmente se usan.'],
                ],
            ],
            [
                'h2'   => 'Migrar WordPress sin perder nada',
                'body' => [
                    'Cambiar de hosting o de dominio es un momento delicado. Hacemos una copia completa, '
                        . 'migramos archivos y base de datos, reemplazamos las rutas, verificamos formularios y '
                        . 'correos, configuramos el SSL y, si cambia el dominio, las redirecciones 301 para '
                        . 'conservar el posicionamiento. El cambio de DNS se programa en un horario de poco '
                        . 'tráfico.',
                ],
            ],
            [
                'h2'   => 'Funciones a medida en WordPress',
                'body' => [
                    'Cuando un plugin no alcanza, desarrollamos la función: un cotizador, un catálogo con '
                        . 'filtros propios, la conexión con su sistema de gestión, un área privada para clientes '
                        . 'o un formulario que envía los datos a su CRM. El código queda documentado y bajo su '
                        . 'propiedad.',
                ],
            ],
            [
                'h2'   => 'Velocidad en WordPress: dónde se pierde el tiempo',
                'body' => [
                    'Un WordPress lento casi nunca tiene una sola causa. Medimos antes de cambiar nada y '
                        . 'atacamos lo que más pesa: imágenes sin comprimir, plugins que cargan scripts en '
                        . 'todas las páginas, consultas lentas a la base de datos, falta de caché o un hosting '
                        . 'con pocos recursos. Después de cada cambio volvemos a medir, para que la mejora sea '
                        . 'comprobable y no una impresión.',
                ],
                'items' => [
                    ['title' => 'Imágenes', 'text' => 'Formatos modernos, tamaños correctos y carga diferida.'],
                    ['title' => 'Plugins', 'text' => 'Eliminar los que no se usan y los que duplican funciones.'],
                    ['title' => 'Caché', 'text' => 'Caché de página y, si el hosting lo permite, de objetos.'],
                    ['title' => 'Base de datos', 'text' => 'Limpieza de revisiones, transitorios y tablas huérfanas.'],
                ],
            ],
            [
                'h2'   => 'Trabajo para agencias',
                'body' => [
                    'También trabajamos como desarrollador WordPress para agencias de marketing y diseño que '
                        . 'necesitan resolver la parte técnica de sus proyectos. Coordinamos con su equipo y '
                        . 'entregamos con la documentación que su cliente necesita.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Diagnóstico honesto', 'text' => 'Le decimos si conviene arreglar el sitio actual o rehacerlo.'],
            ['title' => 'Sin dependencia', 'text' => 'Código estándar y documentado que cualquier desarrollador puede continuar.'],
            ['title' => 'Copias antes de tocar', 'text' => 'Siempre trabajamos con respaldo y, cuando se puede, en un entorno de prueba.'],
            ['title' => 'Factura legal', 'text' => 'Presupuesto por tarea o por proyecto, en guaraníes.'],
        ],
        'faq' => [
            [
                'q' => '¿Pueden arreglar un WordPress que hizo otra persona?',
                'a' => 'Sí. Primero hacemos un diagnóstico con copia de seguridad, le explicamos qué encontramos y '
                     . 'le presupuestamos la corrección antes de empezar.',
            ],
            [
                'q' => '¿Cuánto tarda migrar WordPress a otro hosting?',
                'a' => 'Un sitio de tamaño normal se migra en uno o dos días hábiles, incluyendo las pruebas. La '
                     . 'propagación de DNS puede tardar algunas horas más.',
            ],
            [
                'q' => '¿Conviene Elementor o un tema a medida?',
                'a' => 'Elementor conviene si usted quiere editar el diseño por su cuenta. Un tema a medida es '
                     . 'más liviano y rápido, pero los cambios de diseño requieren un desarrollador. Lo '
                     . 'explicamos en la guía Elementor vs desarrollo a medida.',
            ],
            [
                'q' => '¿Mi sitio WordPress fue hackeado, pueden ayudar?',
                'a' => 'Podemos restaurar desde una copia limpia y actualizar el sitio. Para una investigación de '
                     . 'seguridad a fondo le recomendamos a ciberseguridad.com.py.',
            ],
            [
                'q' => '¿Compran las licencias de Elementor Pro por mí?',
                'a' => 'Le indicamos qué licencias hacen falta y las compramos a nombre de su empresa, para que '
                     . 'la cuenta y las renovaciones queden bajo su control.',
            ],
        ],
        'cta'       => ['label' => 'Consultar por WordPress', 'whatsappText' => ''],
        'related' => ['paginas-web', 'woocommerce', 'mantenimiento-web', 'hosting'],
        'guides'    => ['wordpress-vs-wix', 'elementor-vs-desarrollo-a-medida'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'ecommerce' => [
        'path'            => '/servicios/ecommerce/',
        'title'           => 'Ecommerce y tiendas online con pagos locales',
        'navLabel'        => 'Ecommerce',
        'cluster'         => 'web',
        'parent'          => null,
        'seoTitle'        => 'Ecommerce con pagos locales en Paraguay',
        'metaDescription' => 'Desarrollo de ecommerce en Paraguay: página web con carrito de compras, '
                           . 'checkout con Bancard o Pagopar, envíos y facturación para vender online.',
        'hero' => [
            'eyebrow' => 'Ecommerce',
            'h1'      => 'Ecommerce y tiendas online con pagos locales',
            'h2'      => 'Venda online con tarjetas, billeteras y medios de pago que usan sus clientes en Paraguay.',
            'lead'    => 'Desarrollamos ecommerce para empresas paraguayas: una página web con carrito de compras, '
                       . 'checkout con pasarelas locales como Bancard o Pagopar, cálculo de envíos, gestión de '
                       . 'stock y conexión con su facturación. Usted empieza a vender online con un sistema que '
                       . 'administra desde el celular y que puede crecer con el negocio.',
        ],
        'includes' => [
            'Relevamiento del catálogo, la logística y los medios de cobro que usa hoy',
            'Tienda en WooCommerce o desarrollo a medida, según volumen y necesidades',
            'Carga inicial de productos con categorías, variantes, fotos y precios en guaraníes',
            'Checkout con pasarela de pago local (Bancard o Pagopar) y opciones de transferencia o contra entrega',
            'Reglas de envío por zona, retiro en local y costos por ciudad',
            'Correos automáticos de pedido, pago y despacho',
            'Panel de pedidos y stock, con usuarios para su equipo',
            'Integración de medición: Google Analytics 4 con eventos de compra y píxel de Meta',
            'Capacitación para cargar productos, gestionar pedidos y ver reportes',
        ],
        'excludes' => [
            'Contratos comerciales y comisiones con la pasarela de pago (los firma su empresa)',
            'Fotografía de productos',
            'Logística y reparto',
            'Integración con facturación electrónica SIFEN, salvo que se incluya en el alcance',
        ],
        'weNeed' => [
            'Catálogo de productos en planilla: nombre, precio, stock, variantes y descripción',
            'Fotos de productos en buena calidad',
            'Contrato o solicitud en curso con la pasarela de pago elegida y sus credenciales de comercio',
            'Políticas de envío, cambios y devoluciones',
            'RUC y datos de facturación de la empresa',
        ],
        'sections' => [
            [
                'h2'   => 'Vender online en Paraguay: lo que cambia respecto a otros países',
                'body' => [
                    'Muchas plataformas de ecommerce están pensadas para otros mercados: cobran en dólares, no '
                        . 'aceptan las tarjetas locales o no conocen el guaraní. Para vender online en Paraguay '
                        . 'hace falta un checkout que funcione con las tarjetas y billeteras de sus clientes, '
                        . 'precios sin decimales, envíos por ciudad y una forma clara de emitir el comprobante.',
                    'Por eso diseñamos cada tienda a partir de cómo vende usted hoy: si el cliente paga con '
                        . 'tarjeta, por transferencia, en efectivo al recibir o con billetera electrónica, y si '
                        . 'el pedido se retira o se envía.',
                ],
            ],
            [
                'h2'   => 'Checkout con Bancard y Pagopar',
                'body' => [
                    'Bancard es la red de procesamiento de tarjetas más extendida del país y ofrece un botón '
                        . 'de pago para comercios electrónicos. Pagopar es una plataforma de cobros que reúne '
                        . 'varios medios de pago locales en un solo checkout. Ambas requieren que su empresa '
                        . 'se registre como comercio y firme sus condiciones; nosotros hacemos la integración '
                        . 'técnica, las pruebas en el entorno de prueba y el paso a producción.',
                    'Las comisiones, plazos de acreditación y requisitos los define cada proveedor y cambian '
                        . 'con el tiempo: consulte el valor vigente directamente con ellos antes de decidir. Le '
                        . 'ayudamos a comparar según su volumen y ticket promedio.',
                ],
                'items' => [
                    ['title' => 'Tarjetas de crédito y débito', 'text' => 'Cobro en línea con confirmación automática del pedido.'],
                    ['title' => 'Otros medios locales', 'text' => 'Billeteras y bocas de cobranza, según lo que ofrezca la pasarela elegida.'],
                    ['title' => 'Transferencia', 'text' => 'Pedido reservado hasta que usted confirma el pago.'],
                    ['title' => 'Contra entrega', 'text' => 'Para zonas donde el reparto propio lo permite.'],
                ],
            ],
            [
                'h2'   => 'Página web con carrito de compras: WooCommerce o a medida',
                'body' => [
                    'Para la mayoría de las tiendas recomendamos WooCommerce sobre WordPress: es flexible, '
                        . 'tiene muchas extensiones y usted puede administrarlo sin ayuda. Si su operación tiene '
                        . 'reglas propias (listas de precios por cliente, pedidos mayoristas, integración '
                        . 'profunda con su ERP), conviene un desarrollo a medida.',
                ],
            ],
            [
                'h2'   => 'Stock, facturación y sistemas internos',
                'body' => [
                    'Una tienda online que no se conecta con el stock real genera ventas de productos '
                        . 'agotados. Podemos sincronizar stock y precios con su sistema de gestión y, si lo '
                        . 'necesita, preparar la emisión de facturas electrónicas a partir de los pedidos. Esa '
                        . 'parte se define en el relevamiento, porque depende del sistema que usted ya usa.',
                ],
            ],
            [
                'h2'   => 'Qué define el costo de un ecommerce',
                'body' => [
                    'Influyen la cantidad de productos y variantes, la pasarela de pago, las reglas de envío, '
                        . 'las integraciones con stock o facturación, el diseño y si se hace sobre WooCommerce o '
                        . 'a medida. Una tienda online es un proyecto mayor que un sitio institucional; use el '
                        . 'cotizador de página web con la opción tienda online para ver un rango orientativo del '
                        . 'mercado, a confirmar con presupuesto.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Pagos locales', 'text' => 'Checkout con los medios de pago que usan sus clientes en Paraguay.'],
            ['title' => 'Precios en guaraníes', 'text' => 'Montos, envíos y comprobantes pensados para el mercado local.'],
            ['title' => 'Administración simple', 'text' => 'Pedidos, stock y productos desde un panel, también en el celular.'],
            ['title' => 'Preparado para crecer', 'text' => 'Integraciones con stock, facturación y marketing cuando las necesite.'],
            ['title' => 'Medición de ventas', 'text' => 'Sabe qué campañas y qué productos generan ingresos.'],
        ],
        'faq' => [
            [
                'q' => '¿Qué necesito para cobrar con tarjeta en mi tienda online?',
                'a' => 'Su empresa debe registrarse como comercio en la pasarela elegida (por ejemplo Bancard o '
                     . 'Pagopar) y obtener sus credenciales. Nosotros hacemos la integración técnica y las '
                     . 'pruebas. Los requisitos exactos los define cada proveedor.',
            ],
            [
                'q' => '¿Cuánto cobra la pasarela de pago?',
                'a' => 'Cada pasarela tiene sus comisiones y plazos de acreditación, que cambian con el tiempo. '
                     . 'Consulte el valor vigente con el proveedor; le ayudamos a comparar opciones.',
            ],
            [
                'q' => '¿Puedo vender por WhatsApp e Instagram además de la tienda?',
                'a' => 'Sí. La tienda puede generar enlaces de producto y de pago para compartir por WhatsApp e '
                     . 'Instagram, y el catálogo se puede sincronizar con Meta.',
            ],
            [
                'q' => '¿Cuánto demora poner en marcha un ecommerce?',
                'a' => 'Depende del catálogo y de las integraciones. El plazo suele estar marcado por la '
                     . 'aprobación de la pasarela de pago y la carga de productos, por eso conviene iniciar esos '
                     . 'trámites cuanto antes.',
            ],
            [
                'q' => '¿Pueden migrar mi tienda de otra plataforma?',
                'a' => 'Sí. Migramos productos, clientes y, cuando la plataforma lo permite, el historial de '
                     . 'pedidos, con redirecciones para no perder posiciones en Google.',
            ],
            [
                'q' => '¿La tienda emite factura electrónica?',
                'a' => 'Puede hacerlo si se integra con su sistema de facturación o con un proveedor habilitado. '
                     . 'Se define en el relevamiento según lo que usted ya utiliza.',
            ],
        ],
        'cta'       => ['label' => 'Cotizar mi tienda online', 'whatsappText' => ''],
        'related' => ['woocommerce', 'paginas-web', 'mantenimiento-web', 'integracion-pagos'],
        'guides'    => ['como-crear-una-tienda-online-en-paraguay'],
        'articles' => ['costo-de-un-ecommerce-en-paraguay'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/cotizador-pagina-web/',
                'label' => 'Cotizador de página web',
                'text'  => 'Elija "tienda online" y active pagos online para ver un rango orientativo.',
            ],
        ],
    ],

    'woocommerce' => [
        'path'            => '/servicios/woocommerce/',
        'title'           => 'Tiendas WooCommerce',
        'navLabel'        => 'WooCommerce',
        'cluster'         => 'web',
        'parent'          => 'ecommerce',
        'seoTitle'        => 'WooCommerce en Paraguay',
        'metaDescription' => 'Tiendas WooCommerce sobre WordPress en Paraguay: instalación, pasarela de pago '
                           . 'local, envíos por ciudad, stock y corrección de tiendas existentes.',
        'hero' => [
            'eyebrow' => 'WooCommerce',
            'h1'      => 'Tiendas WooCommerce para empresas paraguayas',
            'h2'      => 'WooCommerce sobre WordPress, configurado para vender en guaraníes con pagos locales.',
            'lead'    => 'WooCommerce convierte un sitio WordPress en una tienda completa. Instalamos y '
                       . 'configuramos WooCommerce para el mercado paraguayo: precios en guaraníes, pasarela de '
                       . 'pago local, envíos por ciudad y correos en español. También corregimos tiendas '
                       . 'WooCommerce existentes que están lentas, con errores de pago o con stock desordenado.',
        ],
        'includes' => [
            'Instalación y configuración de WooCommerce sobre WordPress',
            'Moneda guaraní sin decimales, impuestos y formato de precios local',
            'Integración con pasarela de pago local (Bancard o Pagopar) y medios manuales',
            'Zonas y métodos de envío por departamento y ciudad',
            'Importación de productos desde planilla, con variantes y atributos',
            'Plantillas de producto, categoría y carrito coherentes con su marca',
            'Correos de pedido traducidos y personalizados',
            'Optimización de velocidad para catálogos grandes',
        ],
        'excludes' => [
            'Licencias de extensiones pagas (se compran a nombre del cliente)',
            'Contrato y comisiones con la pasarela de pago',
            'Carga manual de catálogos muy grandes sin planilla (se cotiza aparte)',
        ],
        'weNeed' => [
            'Acceso a WordPress y al hosting si ya tiene sitio',
            'Planilla de productos con precios y stock',
            'Credenciales de comercio de la pasarela elegida',
            'Reglas de envío y políticas de la tienda',
        ],
        'sections' => [
            [
                'h2'   => 'Por qué WooCommerce para una tienda en Paraguay',
                'body' => [
                    'WooCommerce es gratuito, funciona dentro de WordPress y lo usan muchas tiendas en todo el '
                        . 'mundo. Su ventaja principal es que usted es dueño de la tienda: no paga una comisión '
                        . 'por venta a la plataforma, puede cambiar de hosting cuando quiera y agregar funciones '
                        . 'con extensiones o desarrollo propio.',
                    'La contrapartida es que requiere configuración y mantenimiento: actualizaciones, copias '
                        . 'de seguridad y revisión de extensiones. Por eso lo acompañamos con un plan de '
                        . 'mantenimiento web si lo necesita.',
                ],
            ],
            [
                'h2'   => 'WooCommerce WordPress con pagos locales',
                'body' => [
                    'La integración de la pasarela es la parte más delicada. Instalamos el módulo oficial '
                        . 'cuando existe, o desarrollamos la conexión según la documentación de la pasarela, y '
                        . 'probamos pagos aprobados, rechazados y cancelados antes de publicar. El pedido cambia '
                        . 'de estado automáticamente cuando la pasarela confirma el pago.',
                ],
                'items' => [
                    ['title' => 'Pruebas en entorno de prueba', 'text' => 'Transacciones de prueba antes de cobrar de verdad.'],
                    ['title' => 'Estados automáticos', 'text' => 'Pedido pagado, pendiente o fallido sin intervención manual.'],
                    ['title' => 'Registro de errores', 'text' => 'Si un pago falla, queda el motivo para revisarlo.'],
                ],
            ],
            [
                'h2'   => 'Rescatar una tienda WooCommerce existente',
                'body' => [
                    'Si su tienda está lenta, el checkout falla o las actualizaciones rompen algo, hacemos un '
                        . 'diagnóstico: extensiones duplicadas, consultas pesadas, imágenes sin optimizar, '
                        . 'hosting insuficiente o versiones desactualizadas. Le entregamos un informe con '
                        . 'prioridades y lo corregimos por etapas.',
                ],
            ],
            [
                'h2'   => 'Configuración pensada para el mercado local',
                'body' => [
                    'Una instalación estándar de WooCommerce viene preparada para otros países. La ajustamos '
                        . 'para Paraguay: precios en guaraníes sin decimales, separador de miles con punto, '
                        . 'campos de dirección con ciudad y barrio en lugar de código postal, y un campo opcional '
                        . 'de RUC y razón social para quien necesita factura a nombre de su empresa.',
                    'También definimos los estados de pedido que usa su equipo en la práctica (por ejemplo, '
                        . 'pagado, en preparación, despachado, entregado) y los correos que recibe el cliente en '
                        . 'cada paso, redactados en español formal y con su marca.',
                ],
                'items' => [
                    ['title' => 'Checkout corto', 'text' => 'Solo los campos necesarios para despachar y facturar.'],
                    ['title' => 'Envíos por ciudad', 'text' => 'Costos distintos para Asunción, Gran Asunción e interior.'],
                    ['title' => 'Retiro en local', 'text' => 'Con aviso automático cuando el pedido está listo.'],
                    ['title' => 'Datos de facturación', 'text' => 'RUC y razón social opcionales en el pedido.'],
                ],
            ],
            [
                'h2'   => 'Extensiones: pocas y bien elegidas',
                'body' => [
                    'Es fácil llenar una tienda de extensiones hasta volverla lenta e inestable. Elegimos '
                        . 'extensiones con buen historial de actualizaciones y soporte, evitamos duplicar '
                        . 'funciones y, cuando algo específico no existe, preferimos una pequeña función propia '
                        . 'antes que tres plugins combinados. Le entregamos la lista de lo instalado, con qué '
                        . 'función cumple cada uno y cuáles tienen licencia paga a renovar.',
                ],
            ],
            [
                'h2'   => 'Qué define el costo de una tienda WooCommerce',
                'body' => [
                    'Cantidad de productos y variantes, pasarela de pago, reglas de envío, extensiones pagas, '
                        . 'diseño y si hay que migrar datos. Una tienda con pocas decenas de productos y una sola '
                        . 'pasarela es mucho más simple que un catálogo mayorista con listas de precios. Para '
                        . 'orientarse, use el cotizador de página web; los rangos son orientativos del mercado, '
                        . 'a confirmar con presupuesto.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Sin comisión de plataforma', 'text' => 'WooCommerce no cobra por venta; solo paga hosting y pasarela.'],
            ['title' => 'Todo en un solo sitio', 'text' => 'Tienda, blog y páginas institucionales en el mismo WordPress.'],
            ['title' => 'Extensible', 'text' => 'Nuevas funciones con extensiones o desarrollo propio.'],
            ['title' => 'Portable', 'text' => 'Puede cambiar de hosting o de proveedor sin rehacer la tienda.'],
        ],
        'faq' => [
            [
                'q' => '¿WooCommerce es gratis?',
                'a' => 'El plugin es gratuito. Los costos están en el hosting, el dominio, algunas extensiones '
                     . 'pagas y las comisiones de la pasarela de pago.',
            ],
            [
                'q' => '¿WooCommerce funciona con Bancard?',
                'a' => 'Sí, se puede integrar mediante un módulo o una conexión desarrollada según la '
                     . 'documentación de Bancard. Su empresa necesita estar habilitada como comercio.',
            ],
            [
                'q' => '¿Cuántos productos soporta?',
                'a' => 'Miles, con un hosting adecuado y una configuración cuidada. Para catálogos grandes '
                     . 'optimizamos la base de datos, la caché y las búsquedas.',
            ],
            [
                'q' => '¿Puedo conectar WooCommerce con mi sistema de stock?',
                'a' => 'Sí, si su sistema tiene una API o permite exportar datos. Evaluamos la integración en el '
                     . 'relevamiento.',
            ],
            [
                'q' => '¿Quién mantiene la tienda después?',
                'a' => 'Puede hacerlo usted con la capacitación que le damos, o contratar el mantenimiento web '
                     . 'para que nos ocupemos de actualizaciones, copias y monitoreo.',
            ],
        ],
        'cta'       => ['label' => 'Consultar por WooCommerce', 'whatsappText' => ''],
        'related'   => ['ecommerce', 'wordpress', 'mantenimiento-web'],
        'guides'    => ['como-crear-una-tienda-online-en-paraguay', 'wordpress-vs-wix'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'mantenimiento-web' => [
        'path'            => '/servicios/mantenimiento-web/',
        'title'           => 'Mantenimiento web y soporte',
        'navLabel'        => 'Mantenimiento web',
        'cluster'         => 'web',
        'parent'          => null,
        'seoTitle'        => 'Mantenimiento web y WordPress',
        'metaDescription' => 'Mantenimiento web mensual en Paraguay: actualizaciones de WordPress, backups, '
                           . 'monitoreo, cambios de contenido y soporte técnico con factura legal.',
        'hero' => [
            'eyebrow' => 'Mantenimiento web',
            'h1'      => 'Mantenimiento web y soporte mensual',
            'h2'      => 'Actualizaciones, backups y cambios de contenido sin que usted tenga que pensar en eso.',
            'lead'    => 'Un sitio web necesita cuidado continuo: actualizaciones de WordPress y plugins, copias '
                       . 'de seguridad, revisión de formularios y pequeños cambios de contenido. Con el plan de '
                       . 'mantenimiento web nos ocupamos de todo eso cada mes, y usted tiene a quién escribir '
                       . 'cuando algo no funciona.',
        ],
        'includes' => [
            'Actualizaciones de WordPress, temas y plugins, probadas antes de aplicarlas',
            'Backups automáticos con copia fuera del servidor y prueba periódica de restauración',
            'Monitoreo de disponibilidad del sitio con aviso si se cae',
            'Revisión mensual de formularios, correos y botones de WhatsApp',
            'Una bolsa de horas mensuales para cambios de contenido y ajustes menores',
            'Revisión de velocidad y de errores en Google Search Console',
            'Renovación y control del certificado SSL',
            'Informe mensual breve con lo que se hizo',
        ],
        'excludes' => [
            'Rediseños o secciones nuevas grandes (se presupuestan aparte)',
            'Licencias de plugins pagos',
            'Respuesta a incidentes de seguridad graves o auditorías (ciberseguridad.com.py)',
            'Soporte de sistemas o equipos que no sean el sitio web',
        ],
        'weNeed' => [
            'Accesos de administrador a WordPress y al hosting',
            'Lista de licencias y cuentas vinculadas al sitio',
            'Un contacto de su empresa para aprobar cambios',
        ],
        'sections' => [
            [
                'h2'   => 'Por qué un sitio web necesita mantenimiento',
                'body' => [
                    'WordPress, los temas y los plugins publican actualizaciones con frecuencia para corregir '
                        . 'errores y fallas de seguridad. Un sitio que no se actualiza se vuelve vulnerable; uno '
                        . 'que se actualiza sin revisar puede romperse. El mantenimiento wordpress consiste en '
                        . 'aplicar esas actualizaciones de forma controlada y tener siempre una copia para volver '
                        . 'atrás.',
                    'Además, los sitios dejan de funcionar por motivos menos visibles: un formulario que ya no '
                        . 'envía correos, un certificado SSL vencido o un cambio del hosting. Revisarlo cada mes '
                        . 'evita enterarse por un cliente.',
                ],
            ],
            [
                'h2'   => 'Actualizaciones y backups, con método',
                'body' => [
                    'Antes de actualizar hacemos una copia de seguridad. Aplicamos las actualizaciones, '
                        . 'revisamos las páginas principales, el formulario y, si hay tienda, el checkout. Si '
                        . 'algo falla, restauramos y resolvemos el conflicto antes de volver a intentar.',
                ],
                'items' => [
                    ['title' => 'Backups diarios o semanales', 'text' => 'Según cuánto cambia su sitio.'],
                    ['title' => 'Copia fuera del servidor', 'text' => 'Si el hosting falla, la copia sigue disponible.'],
                    ['title' => 'Prueba de restauración', 'text' => 'Una copia que nunca se probó no es una copia confiable.'],
                ],
            ],
            [
                'h2'   => 'Soporte y cambios de contenido',
                'body' => [
                    'El plan incluye horas mensuales para lo que surja: cambiar un precio, subir una promoción, '
                        . 'agregar un miembro del equipo o corregir un texto. Usted lo pide por WhatsApp o correo '
                        . 'y le confirmamos cuándo queda publicado.',
                ],
            ],
            [
                'h2'   => 'Qué revisamos cada mes',
                'body' => [
                    'El mantenimiento no es solo apretar el botón de actualizar. Cada mes seguimos una lista de '
                        . 'control fija, para que nada dependa de la memoria de una persona y para que usted pueda '
                        . 'ver en el informe qué se verificó y con qué resultado.',
                    'Si detectamos algo que excede el plan, como un plugin abandonado por su autor, un tema que '
                        . 'ya no recibe actualizaciones o un hosting que se quedó corto, se lo informamos con una '
                        . 'recomendación y un presupuesto separado. Usted decide cuándo encararlo.',
                ],
                'items' => [
                    ['title' => 'Versiones', 'text' => 'WordPress, PHP, tema y plugins en versiones con soporte.'],
                    ['title' => 'Formularios', 'text' => 'Envío de prueba y verificación de que el correo llega.'],
                    ['title' => 'Tienda', 'text' => 'Si hay ecommerce, un pedido de prueba hasta el checkout.'],
                    ['title' => 'Search Console', 'text' => 'Errores de indexación, páginas excluidas y avisos de seguridad.'],
                    ['title' => 'Velocidad', 'text' => 'Medición en celular de las páginas principales.'],
                    ['title' => 'Espacio y copias', 'text' => 'Uso de disco del hosting y estado de los backups.'],
                ],
            ],
            [
                'h2'   => 'Mantenimiento de sitios con tienda online',
                'body' => [
                    'Una tienda WooCommerce necesita un cuidado más estricto que un sitio institucional: cada '
                        . 'pedido queda en la base de datos, la pasarela de pago puede cambiar su módulo y una '
                        . 'actualización mal hecha puede frenar las ventas. Para estos casos proponemos copias '
                        . 'más frecuentes, actualizaciones probadas primero en un entorno de prueba y una '
                        . 'ventana de cambios en horarios de poco movimiento.',
                ],
            ],
            [
                'h2'   => 'Qué define el costo del mantenimiento',
                'body' => [
                    'Influyen el tamaño del sitio, la cantidad de plugins, si hay tienda online, la frecuencia '
                        . 'de backups y las horas de cambios que necesita cada mes. Es un servicio mensual; le '
                        . 'proponemos un plan después de revisar su sitio.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Menos sorpresas', 'text' => 'Los problemas se detectan antes de que los note un cliente.'],
            ['title' => 'Siempre con copia', 'text' => 'Si algo sale mal, se vuelve atrás.'],
            ['title' => 'Un contacto técnico', 'text' => 'Sabe a quién escribir cuando necesita un cambio.'],
            ['title' => 'Costo previsible', 'text' => 'Un monto mensual fijo con factura legal.'],
        ],
        'faq' => [
            [
                'q' => '¿Pueden mantener un sitio que no hicieron ustedes?',
                'a' => 'Sí. Primero hacemos una revisión inicial para conocer el sitio y corregir lo urgente; luego '
                     . 'entra en el plan mensual.',
            ],
            [
                'q' => '¿Qué pasa si no uso las horas de cambios de un mes?',
                'a' => 'Las condiciones de acumulación se definen en el plan. Se lo aclaramos por escrito antes de '
                     . 'empezar.',
            ],
            [
                'q' => '¿Con qué frecuencia hacen backups?',
                'a' => 'Depende del sitio: una tienda con pedidos diarios necesita copias diarias; un sitio '
                     . 'institucional puede alcanzar con copias semanales.',
            ],
            [
                'q' => '¿Incluye el hosting?',
                'a' => 'El hosting se puede sumar al plan o mantenerse aparte si ya tiene uno. Lo detallamos en la '
                     . 'propuesta.',
            ],
            [
                'q' => '¿Hay permanencia mínima?',
                'a' => 'Las condiciones de duración y cancelación figuran en la propuesta, antes de que usted '
                     . 'firme nada.',
            ],
        ],
        'cta'       => ['label' => 'Consultar plan de mantenimiento', 'whatsappText' => ''],
        'related'   => ['wordpress', 'woocommerce', 'seo'],
        'guides'    => ['checklist-seo-para-su-sitio'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'seo' => [
        'path'            => '/servicios/seo/',
        'title'           => 'Posicionamiento SEO',
        'navLabel'        => 'Posicionamiento SEO',
        'cluster'         => 'web',
        'parent'          => null,
        'seoTitle'        => 'Posicionamiento SEO en Paraguay',
        'metaDescription' => 'Posicionamiento web y SEO en Paraguay: auditoría técnica, contenido por '
                           . 'servicio, SEO local y medición para aparecer en Google cuando lo buscan.',
        'hero' => [
            'eyebrow' => 'SEO',
            'h1'      => 'Posicionamiento SEO para empresas en Paraguay',
            'h2'      => 'Posicionamiento web basado en lo que sus clientes buscan en Google.',
            'lead'    => 'El SEO es el trabajo de mejorar su sitio para que aparezca en Google cuando alguien busca '
                       . 'lo que usted vende. Como agencia SEO trabajamos tres frentes: la parte técnica del '
                       . 'sitio, el contenido de cada página y la presencia local en Google Maps, con informes '
                       . 'mensuales de qué cambió y por qué.',
        ],
        'includes' => [
            'Auditoría técnica: indexación, velocidad, estructura, enlaces rotos y datos estructurados',
            'Investigación de palabras clave con volúmenes reales de Paraguay',
            'Plan de contenidos: qué páginas crear o mejorar y en qué orden',
            'Optimización de títulos, descripciones, encabezados y enlaces internos',
            'SEO local: recomendaciones para su perfil de empresa en Google y consistencia de datos',
            'Configuración y seguimiento en Google Search Console y Analytics 4',
            'Informe mensual con posiciones, clics, consultas y próximos pasos',
        ],
        'excludes' => [
            'Compra de enlaces o prácticas que violan las directrices de Google',
            'Garantía de una posición determinada (nadie puede garantizarla honestamente)',
            'Campañas de Google Ads',
            'Estrategia de marketing digital general o redes sociales',
        ],
        'weNeed' => [
            'Acceso a Google Search Console y Analytics, o permiso para configurarlos',
            'Acceso al sitio para aplicar cambios',
            'Lista de servicios y zonas prioritarias para el negocio',
            'Una persona que valide la información técnica de los contenidos',
        ],
        'sections' => [
            [
                'h2'   => 'Qué es el posicionamiento en Google y qué no es',
                'body' => [
                    'El posicionamiento en Google no es un truco ni un pago: es el resultado de tener un sitio '
                        . 'técnicamente sano, con páginas que responden bien a lo que la gente busca, y con '
                        . 'señales de confianza. Los resultados llegan de forma gradual y se sostienen con '
                        . 'trabajo continuo.',
                    'Desconfíe de quien le garantice el primer lugar. Lo que sí se puede comprometer es un plan '
                        . 'de trabajo concreto, cambios medibles y un informe honesto de lo que funciona.',
                ],
            ],
            [
                'h2'   => 'Los tres frentes de la agencia SEO',
                'body' => [
                    'Trabajamos en paralelo lo técnico, el contenido y lo local, porque un sitio rápido sin '
                        . 'contenido no posiciona, y buen contenido en un sitio roto tampoco.',
                ],
                'items' => [
                    ['title' => 'SEO técnico', 'text' => 'Que Google pueda leer, indexar y entender cada página, rápido y en el celular.'],
                    ['title' => 'Contenido', 'text' => 'Una página útil por cada servicio y cada pregunta frecuente de sus clientes.'],
                    ['title' => 'SEO local', 'text' => 'Presencia en Google Maps y búsquedas con ciudad para negocios con atención presencial.'],
                ],
            ],
            [
                'h2'   => 'Palabras clave de Paraguay, no traducidas',
                'body' => [
                    'Las búsquedas en Paraguay usan un vocabulario propio. Investigamos cómo buscan sus clientes '
                        . 'reales, con qué volumen y con qué intención, y priorizamos las palabras que traen '
                        . 'consultas, no solo visitas.',
                ],
            ],
            [
                'h2'   => 'Posicionamiento web medible',
                'body' => [
                    'Cada mes le enviamos un informe con clics desde Google, las búsquedas que los generaron, '
                        . 'la evolución de posiciones y, lo más importante, las consultas que llegaron desde el '
                        . 'tráfico orgánico. Así usted decide con datos si el trabajo vale la inversión.',
                    'Si quiere revisar su sitio antes de contratar, use el checklist SEO de nuestras guías.',
                ],
            ],
            [
                'h2'   => 'Cómo es el primer mes de trabajo SEO',
                'body' => [
                    'El primer mes se dedica a entender el punto de partida. Revisamos cómo está indexado el '
                        . 'sitio, qué búsquedas ya le traen visitas, qué competidores aparecen por encima y qué '
                        . 'páginas faltan. Con eso armamos un plan priorizado: primero lo que bloquea (errores '
                        . 'técnicos), luego lo que tiene más potencial con menos esfuerzo (páginas que ya están '
                        . 'cerca de la primera página) y después el contenido nuevo.',
                    'Desde el segundo mes ejecutamos ese plan por etapas y medimos. Si una acción no da '
                        . 'resultado, se ajusta; el plan no es un documento fijo.',
                ],
                'items' => [
                    ['title' => 'Diagnóstico', 'text' => 'Estado técnico, indexación y búsquedas actuales.'],
                    ['title' => 'Competencia', 'text' => 'Quién aparece por sus palabras clave y con qué páginas.'],
                    ['title' => 'Prioridades', 'text' => 'Lista de acciones ordenada por impacto y esfuerzo.'],
                    ['title' => 'Línea base', 'text' => 'Los números de partida para comparar mes a mes.'],
                ],
            ],
            [
                'h2'   => 'SEO para sitios nuevos y rediseños',
                'body' => [
                    'El mejor momento para trabajar el SEO es antes de publicar. Si va a crear una página web '
                        . 'nueva o rediseñar la actual, definimos la estructura de páginas y las direcciones '
                        . 'pensando en las búsquedas, y planificamos las redirecciones para que el cambio no '
                        . 'borre las posiciones que el sitio ya había ganado. Un rediseño sin este cuidado es '
                        . 'una de las causas más comunes de caídas bruscas de tráfico.',
                ],
            ],
            [
                'h2'   => 'Qué define el costo del SEO',
                'body' => [
                    'Influyen la competencia en su rubro, el estado técnico del sitio, la cantidad de contenido '
                        . 'a crear y si incluye SEO local para una o varias sucursales. Normalmente se trabaja '
                        . 'con un plan mensual por un período mínimo, porque los resultados requieren tiempo.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Tráfico que no se apaga', 'text' => 'A diferencia de los anuncios, el tráfico orgánico sigue llegando.'],
            ['title' => 'Clientes con intención', 'text' => 'Quien lo encuentra en Google ya está buscando lo que usted vende.'],
            ['title' => 'Informes claros', 'text' => 'Sabe qué se hizo, qué cambió y qué sigue.'],
            ['title' => 'Prácticas limpias', 'text' => 'Nada que ponga en riesgo su sitio frente a Google.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto tarda en verse el resultado del SEO?',
                'a' => 'Las mejoras técnicas pueden notarse en semanas; el crecimiento sostenido de tráfico suele '
                     . 'llevar varios meses y depende de la competencia del rubro.',
            ],
            [
                'q' => '¿Me garantizan el primer lugar en Google?',
                'a' => 'No. Nadie controla el algoritmo de Google. Nos comprometemos con un plan de trabajo, '
                     . 'cambios concretos y un informe transparente de resultados.',
            ],
            [
                'q' => '¿Hacen marketing digital o redes sociales?',
                'a' => 'Nos enfocamos en el sitio web y su posicionamiento. Para redes sociales y pauta le '
                     . 'recomendamos trabajar con un especialista y coordinamos con esa persona.',
            ],
            [
                'q' => '¿Sirve el SEO si mi negocio es local?',
                'a' => 'Sí, especialmente. Las búsquedas con ciudad o "cerca de mí" y Google Maps son una fuente '
                     . 'muy directa de clientes para negocios con atención presencial.',
            ],
            [
                'q' => '¿Pueden trabajar sobre un sitio que no hicieron ustedes?',
                'a' => 'Sí. Empezamos con una auditoría y le indicamos qué cambios hacen falta y quién puede '
                     . 'aplicarlos.',
            ],
        ],
        'cta'       => ['label' => 'Pedir auditoría SEO', 'whatsappText' => ''],
        'related'   => ['paginas-web', 'mantenimiento-web', 'landing-page'],
        'guides'    => ['checklist-seo-para-su-sitio', 'como-crear-una-pagina-web-para-mi-negocio'],
        'articles'  => [],
        'toolLinks' => [],
    ],
];
