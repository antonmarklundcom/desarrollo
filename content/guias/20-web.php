<?php
/**
 * Phase "web": how-to guides for the web cluster. Same shape as content/guias.php.
 */

declare(strict_types=1);

$cotizador = [
    'path'  => '/herramientas/cotizador-pagina-web/',
    'label' => 'Cotizador de página web',
    'text'  => 'Elegí el tipo de sitio y las funciones para ubicar tu caso antes de pedir presupuesto.',
];

return [

    'como-crear-una-pagina-web-para-mi-negocio' => [
        'path'            => '/guias/como-crear-una-pagina-web-para-mi-negocio/',
        'title'           => 'Cómo crear una página web para mi negocio',
        'navLabel'        => 'Crear una página web',
        'seoTitle'        => 'Crear una página web para tu negocio',
        'metaDescription' => 'Guía paso a paso para crear una página web para tu negocio en Paraguay: '
                           . 'objetivo, dominio, hosting, plataforma, contenido y publicación.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo crear una página web para mi negocio, paso a paso',
            'lead'    => 'Para dueños de negocios en Paraguay que quieren un sitio propio y necesitan saber qué '
                       . 'decidir, en qué orden y qué preparar.',
        ],
        'intro' => [
            'Crear una página web ya no requiere saber programar, pero sí requiere tomar varias decisiones: '
                . 'para qué sirve el sitio, dónde se aloja, con qué plataforma se construye y quién escribe el '
                . 'contenido. Tomarlas en el orden correcto ahorra tiempo y dinero.',
            'Esta guía sirve tanto si lo vas a hacer vos mismo como si vas a contratar a alguien: en el segundo '
                . 'caso, te permite pedir presupuestos comparables y saber qué preguntar.',
        ],
        'steps' => [
            ['title' => 'Definí el objetivo del sitio', 'body' => [
                'Escribí en una frase qué querés que haga el visitante: escribirte por WhatsApp, pedir un '
                    . 'presupuesto, comprar o reservar. Ese objetivo decide la estructura y el tipo de sitio.',
            ]],
            ['title' => 'Registrá el dominio', 'body' => [
                'Elegí un nombre corto y fácil de dictar. Para Paraguay, el .com.py transmite presencia local; '
                    . 'el registro se hace a nombre de tu empresa. Registrá el dominio vos o exigí que quede a tu '
                    . 'nombre si lo hace un proveedor.',
            ]],
            ['title' => 'Contratá un hosting adecuado', 'body' => [
                'El hosting es el servidor donde vive el sitio. Para un sitio institucional alcanza un hosting '
                    . 'compartido de calidad con SSL incluido; una tienda online con muchas visitas necesita más '
                    . 'recursos.',
            ]],
            ['title' => 'Elegí la plataforma', 'body' => [
                'WordPress es la opción más flexible y común; constructores como Wix son más simples pero menos '
                    . 'portables; el desarrollo a medida conviene para necesidades específicas. Compará opciones '
                    . 'en nuestra guía WordPress vs Wix.',
            ]],
            ['title' => 'Prepará el contenido', 'body' => [
                'Reuní logo, fotos propias, la lista de servicios con una descripción de cada uno, datos de '
                    . 'contacto y respuestas a las preguntas que más te hacen. El contenido es lo que más atrasa un '
                    . 'proyecto web.',
            ]],
            ['title' => 'Diseñá pensando en el celular', 'body' => [
                'Revisá cada página en un teléfono: titular claro, botón de WhatsApp visible, textos legibles y '
                    . 'carga rápida. La mayoría de tus visitas llegará desde el celular.',
            ]],
            ['title' => 'Configurá medición y Google', 'body' => [
                'Instalá Google Analytics 4, dá de alta el sitio en Google Search Console, enviá el sitemap y '
                    . 'creá o actualizá tu perfil de empresa en Google con el enlace al sitio.',
            ]],
            ['title' => 'Publicá y mantené', 'body' => [
                'Después de publicar, revisá formularios y enlaces, y planificá actualizaciones y copias de '
                    . 'seguridad periódicas. Un sitio sin mantenimiento se desactualiza y se vuelve vulnerable.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Puedo crear la página web gratis?', 'a' => 'Existen planes gratuitos en algunos constructores, '
                . 'pero muestran publicidad y no permiten usar tu propio dominio. Para un negocio conviene al menos '
                . 'dominio y hosting propios.'],
            ['q' => '¿Cuánto cuesta crear una página web?', 'a' => 'Depende del tipo de sitio, la cantidad de páginas y las '
                . 'funciones que necesites. No publicamos un precio fijo porque depende del alcance: después de una '
                . 'conversación de 30 minutos te pasamos un presupuesto en guaraníes, por escrito.'],
            ['q' => '¿Necesito una página web si ya tengo Instagram?', 'a' => 'Las redes no te pertenecen y no '
                . 'aparecen igual en Google. Un sitio propio concentra la información, se encuentra en búsquedas y '
                . 'no depende de un algoritmo ajeno.'],
            ['q' => '¿Cuántas páginas debe tener el sitio?', 'a' => 'Como mínimo: inicio, una página por servicio '
                . 'principal, quiénes somos y contacto. Más páginas por servicio suelen significar más '
                . 'oportunidades de aparecer en Google.'],
        ],
        'relatedService' => 'paginas-web',
        'toolLink'       => $cotizador,
        'related'        => ['wordpress-vs-wix', 'checklist-seo-para-su-sitio', 'que-es-una-landing-page'],
    ],

    'wordpress-vs-wix' => [
        'path'            => '/guias/wordpress-vs-wix/',
        'title'           => 'WordPress vs Wix',
        'navLabel'        => 'WordPress vs Wix',
        'seoTitle'        => 'WordPress vs Wix: cuál elegir',
        'metaDescription' => 'WordPress vs Wix para una empresa en Paraguay: costos, control, SEO, tienda '
                           . 'online y facilidad de uso comparados para elegir con criterio.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'WordPress vs Wix: cuál conviene para tu empresa',
            'lead'    => 'Una comparación práctica para decidir la plataforma de tu sitio según lo que necesitás hoy '
                       . 'y lo que podés necesitar mañana.',
        ],
        'intro' => [
            'Wix es un constructor de sitios alojado: pagás una suscripción y todo funciona dentro de la '
                . 'plataforma. WordPress es un software libre que se instala en un hosting que elegís. Los dos '
                . 'sirven para hacer páginas web profesionales, pero la diferencia de fondo es el control.',
            'Los pasos siguientes te ayudan a evaluar cada criterio con tu propio caso.',
        ],
        'steps' => [
            ['title' => 'Evaluá quién va a mantener el sitio', 'body' => [
                'Si lo vas a editar vos solo y querés cero configuración técnica, Wix es más simple. Si vas a '
                    . 'trabajar con un desarrollador o una agencia, WordPress ofrece más opciones y más '
                    . 'profesionales que lo conocen.',
            ]],
            ['title' => 'Compará la propiedad y la portabilidad', 'body' => [
                'En WordPress podés llevarte el sitio completo a otro hosting. En Wix, el sitio vive en la '
                    . 'plataforma y no se exporta de forma completa; si te vas, en la práctica lo rehacés.',
            ]],
            ['title' => 'Calculá el costo a varios años', 'body' => [
                'Wix cobra una suscripción periódica que sube con los planes de tienda. WordPress requiere '
                    . 'hosting, dominio, posibles licencias y mantenimiento. Compará el total a tres años, no el '
                    . 'primer mes.',
            ]],
            ['title' => 'Revisá las necesidades de SEO', 'body' => [
                'Ambos permiten SEO básico. WordPress da control más fino sobre estructura, velocidad y datos '
                    . 'estructurados, lo que pesa en rubros competidos.',
            ]],
            ['title' => 'Verificá pagos locales si vas a vender', 'body' => [
                'Para cobrar con pasarelas paraguayas, WooCommerce sobre WordPress permite integraciones con '
                    . 'proveedores locales. En constructores cerrados depende de que la plataforma lo soporte.',
            ]],
            ['title' => 'Decidí y documentá', 'body' => [
                'Elegí según tu prioridad: simplicidad inmediata (Wix) o control y crecimiento (WordPress). '
                    . 'Guardá los accesos de dominio, hosting y plataforma a nombre de tu empresa.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Wix es malo para SEO?', 'a' => 'No; hoy permite hacer SEO básico correctamente. La diferencia '
                . 'aparece en proyectos que necesitan control técnico avanzado.'],
            ['q' => '¿Puedo pasar de Wix a WordPress?', 'a' => 'Sí, pero se rehace el diseño y se migra el '
                . 'contenido manualmente o con herramientas parciales, cuidando las redirecciones.'],
            ['q' => '¿WordPress es gratis?', 'a' => 'El software sí. Pagás hosting, dominio y, si los usa, temas o '
                . 'plugins pagos.'],
            ['q' => '¿Cuál es más seguro?', 'a' => 'Wix gestiona la seguridad por vos. WordPress es seguro si se '
                . 'actualiza y mantiene con regularidad.'],
        ],
        'relatedService' => 'wordpress',
        'toolLink'       => $cotizador,
        'related'        => ['elementor-vs-desarrollo-a-medida', 'como-crear-una-pagina-web-para-mi-negocio'],
    ],

    'elementor-vs-desarrollo-a-medida' => [
        'path'            => '/guias/elementor-vs-desarrollo-a-medida/',
        'title'           => 'Elementor vs desarrollo a medida',
        'navLabel'        => 'Elementor vs a medida',
        'seoTitle'        => 'Elementor vs desarrollo a medida',
        'metaDescription' => 'Elementor o desarrollo a medida: comparé velocidad, costo, autonomía para editar '
                           . 'y mantenimiento antes de encargar el sitio web de tu empresa.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Elementor vs desarrollo a medida: cómo decidir',
            'lead'    => 'Cuándo conviene un sitio armado con Elementor y cuándo uno programado a medida, con los '
                       . 'criterios que realmente cambian el resultado.',
        ],
        'intro' => [
            'Elementor es un constructor visual para WordPress: permite diseñar páginas arrastrando bloques. '
                . 'El desarrollo a medida es código escrito específicamente para tu sitio, ya sea como tema de '
                . 'WordPress o como aplicación independiente.',
            'Ninguno es mejor en todos los casos. La elección depende de quién edita, cuánto importa la '
                . 'velocidad y qué funciones necesita.',
        ],
        'steps' => [
            ['title' => 'Definí quién va a editar el diseño', 'body' => [
                'Si tu equipo necesita crear páginas nuevas con diseño propio sin llamar a un desarrollador, '
                    . 'Elementor da esa autonomía. Si solo cambiará textos e imágenes, un tema a medida con campos '
                    . 'editables alcanza.',
            ]],
            ['title' => 'Evaluá la importancia de la velocidad', 'body' => [
                'Un sitio a medida carga solo lo necesario y suele ser más rápido. Elementor bien configurado '
                    . 'puede ser aceptable, pero tiende a generar más código por página.',
            ]],
            ['title' => 'Listá las funciones especiales', 'body' => [
                'Cotizadores, integraciones con sistemas, áreas privadas o lógica de negocio propia se resuelven '
                    . 'mejor con código a medida, se use o no Elementor para el resto.',
            ]],
            ['title' => 'Compará costo inicial y mantenimiento', 'body' => [
                'Elementor suele ser más económico al inicio. El desarrollo a medida cuesta más al principio pero '
                    . 'depende de menos plugins de terceros y licencias.',
            ]],
            ['title' => 'Considerá un enfoque mixto', 'body' => [
                'Muchas veces lo más práctico es un tema liviano con Elementor para páginas de contenido y '
                    . 'desarrollo a medida para las funciones críticas.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Elementor hace lento el sitio?', 'a' => 'Puede hacerlo si se abusa de complementos y widgets. '
                . 'Con estilos globales, pocas extensiones y caché, el resultado es aceptable para la mayoría.'],
            ['q' => '¿Necesito Elementor Pro?', 'a' => 'Para plantillas de encabezado, pie y formularios avanzados, '
                . 'normalmente sí. Consultá el precio vigente de la licencia en el sitio oficial.'],
            ['q' => '¿Un sitio a medida me hace dependiente del programador?', 'a' => 'No si el código es estándar y '
                . 'está documentado; cualquier desarrollador con experiencia puede continuarlo.'],
        ],
        'relatedService' => 'wordpress',
        'toolLink'       => $cotizador,
        'related'        => ['wordpress-vs-wix', 'como-crear-una-pagina-web-para-mi-negocio'],
    ],

    'que-es-una-landing-page' => [
        'path'            => '/guias/que-es-una-landing-page/',
        'title'           => 'Qué es una landing page',
        'navLabel'        => 'Qué es una landing page',
        'seoTitle'        => 'Qué es una landing page y cómo armarla',
        'metaDescription' => 'Qué es una landing page, en qué se diferencia de un sitio web y cuál es la '
                           . 'estructura de ejemplo que usamos, bloque por bloque, para campañas.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Qué es una landing page y cómo se estructura',
            'lead'    => 'La definición, cuándo usarla y un ejemplo de estructura bloque por bloque que podés '
                       . 'aplicar a tu próxima campaña.',
        ],
        'intro' => [
            'Una landing page (página de aterrizaje) es una página web independiente diseñada para una sola '
                . 'acción: que el visitante escriba, se registre, descargue algo o compre. Se usa como destino de '
                . 'anuncios, correos y enlaces de campaña.',
            'Por ejemplo: una clínica que promociona un chequeo anual envía los anuncios a una página que solo '
                . 'habla de ese chequeo, con precio, qué incluye y un botón de WhatsApp para reservar. Los pasos '
                . 'siguientes muestran cómo armarla.',
        ],
        'steps' => [
            ['title' => 'Definí una sola oferta y una sola acción', 'body' => [
                'Ejemplo: "Chequeo anual completo, reservá por WhatsApp". Si hay dos ofertas, hacé dos landing '
                    . 'pages.',
            ]],
            ['title' => 'Escribí el bloque principal', 'body' => [
                'Titular con el beneficio, subtítulo con el detalle concreto y botón de acción. Ejemplo: '
                    . '"Chequeo anual en una mañana — análisis, consulta y resultados en 48 h".',
            ]],
            ['title' => 'Agregá el bloque de problema y solución', 'body' => [
                'Dos o tres frases sobre la situación del cliente y cómo tu oferta la resuelve.',
            ]],
            ['title' => 'Detallá qué incluye y cuánto cuesta', 'body' => [
                'Lista corta de lo incluido, condiciones y, si es posible, el precio o la forma de pago. La falta '
                    . 'de precio es la duda más frecuente.',
            ]],
            ['title' => 'Sumá pruebas y preguntas frecuentes', 'body' => [
                'Fotos reales, certificaciones, garantías y respuestas a las dudas que hoy te llegan por '
                    . 'WhatsApp.',
            ]],
            ['title' => 'Cerrá con el mismo llamado a la acción', 'body' => [
                'Repetí el botón al final y mantené uno fijo visible en el celular.',
            ]],
            ['title' => 'Medí y mejorá', 'body' => [
                'Configurá eventos para clics en WhatsApp y envíos de formulario, conectalos con tus anuncios y '
                    . 'probá variantes del titular.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Una landing page lleva menú?', 'a' => 'Normalmente no. Quitar el menú evita que el visitante se '
                . 'distraiga de la acción principal.'],
            ['q' => '¿Qué largo debe tener?', 'a' => 'El necesario para responder las dudas antes de la acción. Una '
                . 'oferta simple admite una página corta; una compleja necesita más detalle.'],
            ['q' => '¿Sirve para SEO?', 'a' => 'Puede posicionar, pero su función principal es convertir tráfico de '
                . 'campañas. Para posicionar conviene una página de servicio completa.'],
        ],
        'relatedService' => 'landing-page',
        'toolLink'       => $cotizador,
        'related'        => ['como-crear-una-pagina-web-para-mi-negocio', 'checklist-seo-para-su-sitio'],
    ],

    'como-crear-una-tienda-online-en-paraguay' => [
        'path'            => '/guias/como-crear-una-tienda-online-en-paraguay/',
        'title'           => 'Cómo crear una tienda online en Paraguay',
        'navLabel'        => 'Crear una tienda online',
        'seoTitle'        => 'Crear una tienda online en Paraguay',
        'metaDescription' => 'Pasos para crear una tienda online en Paraguay: plataforma, pasarela de pago '
                           . 'local, catálogo, envíos, facturación y lanzamiento de tu ecommerce.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo crear una tienda online en Paraguay',
            'lead'    => 'Qué decidir y qué trámites iniciar para vender online con cobro en guaraníes y medios de '
                       . 'pago locales.',
        ],
        'intro' => [
            'Una tienda online en Paraguay tiene requisitos que las guías genéricas no cubren: cobrar con '
                . 'tarjetas y billeteras locales, calcular envíos por ciudad y emitir el comprobante '
                . 'correspondiente.',
            'Algunos pasos dependen de terceros (la pasarela de pago, por ejemplo), así que conviene iniciarlos '
                . 'en paralelo con el desarrollo.',
        ],
        'steps' => [
            ['title' => 'Definí qué, a quién y cómo entregás', 'body' => [
                'Catálogo inicial, público y logística: envío propio, courier, retiro en local o una combinación.',
            ]],
            ['title' => 'Iniciá el alta con la pasarela de pago', 'body' => [
                'Solicitá el alta como comercio electrónico en la pasarela elegida (por ejemplo Bancard o '
                    . 'Pagopar). Requisitos, comisiones y plazos los define cada proveedor: consultá el valor '
                    . 'vigente.',
            ]],
            ['title' => 'Elegí la plataforma', 'body' => [
                'WooCommerce sobre WordPress para la mayoría; desarrollo a medida si tenés reglas propias o '
                    . 'integraciones profundas con tu sistema.',
            ]],
            ['title' => 'Prepará el catálogo en planilla', 'body' => [
                'Nombre, precio en guaraníes, stock, variantes, descripción y fotos con fondo uniforme.',
            ]],
            ['title' => 'Configurá envíos y políticas', 'body' => [
                'Costos por zona, plazos, cambios y devoluciones, y términos de venta publicados en el sitio.',
            ]],
            ['title' => 'Resolvé la facturación', 'body' => [
                'Definí cómo se emitirá el comprobante de cada venta: manualmente desde tu sistema o integrado a '
                    . 'la tienda. Consultá con tu contador los requisitos de facturación electrónica vigentes.',
            ]],
            ['title' => 'Probá y lanzá', 'body' => [
                'Hacé compras de prueba con pagos aprobados y rechazados, revisá los correos y lanzá con '
                    . 'medición de ventas activa.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Necesito RUC para vender online?', 'a' => 'Para operar formalmente y habilitar una pasarela de '
                . 'pago, en general sí. Consultá los requisitos vigentes con la pasarela y con tu contador.'],
            ['q' => '¿Puedo empezar solo con transferencia?', 'a' => 'Sí, y sumar la pasarela después. Pero el pago '
                . 'con tarjeta suele aumentar la conversión.'],
            ['q' => '¿Cuánto demora abrir una tienda online?', 'a' => 'Suele depender más de la aprobación de la '
                . 'pasarela y de la carga del catálogo que del desarrollo.'],
            ['q' => '¿Shopify sirve en Paraguay?', 'a' => 'Puede usarse, pero verificá que acepte las pasarelas '
                . 'locales que necesita antes de elegirla.'],
        ],
        'relatedService' => 'ecommerce',
        'toolLink'       => $cotizador,
        'related'        => ['wordpress-vs-wix', 'como-crear-una-pagina-web-para-mi-negocio'],
    ],

    'checklist-seo-para-su-sitio' => [
        'path'            => '/guias/checklist-seo-para-su-sitio/',
        'title'           => 'Checklist SEO para tu sitio',
        'navLabel'        => 'Checklist SEO',
        'seoTitle'        => 'Checklist SEO para tu sitio web',
        'metaDescription' => 'Checklist SEO para revisar tu sitio web: indexación, títulos, velocidad, '
                           . 'contenido por servicio, SEO local y medición, con pasos concretos.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Checklist SEO para revisar tu sitio web',
            'lead'    => 'Una lista de verificación para detectar por qué tu sitio no aparece en Google y qué '
                       . 'corregir primero.',
        ],
        'intro' => [
            'Antes de invertir en posicionamiento conviene saber si el sitio tiene problemas básicos. Muchos '
                . 'sitios no aparecen en Google por errores simples: páginas bloqueadas, títulos repetidos o '
                . 'falta de contenido específico.',
            'Recorré estos pasos en orden; los primeros son los que más impacto tienen.',
        ],
        'steps' => [
            ['title' => 'Verifique la indexación', 'body' => [
                'Dá de alta el sitio en Google Search Console, enviá el sitemap y revisá el informe de páginas '
                    . 'indexadas y excluidas.',
            ]],
            ['title' => 'Revisá títulos y descripciones', 'body' => [
                'Cada página debe tener un título único con la palabra clave principal y una descripción que '
                    . 'invite al clic.',
            ]],
            ['title' => 'Medí la velocidad en el celular', 'body' => [
                'Usá PageSpeed Insights. Optimizá imágenes, reducí plugins y activá caché si la carga es lenta.',
            ]],
            ['title' => 'Creá una página por servicio', 'body' => [
                'Una sola página que lista todo no posiciona para cada servicio. Cada uno necesita su página con '
                    . 'contenido concreto y preguntas frecuentes.',
            ]],
            ['title' => 'Ordená los enlaces internos', 'body' => [
                'Enlazá entre páginas relacionadas con textos descriptivos y corregí los enlaces rotos.',
            ]],
            ['title' => 'Trabajá el SEO local', 'body' => [
                'Completá tu perfil de empresa en Google con categoría, horarios, fotos y enlace al sitio, con '
                    . 'nombre, dirección y teléfono idénticos en todos lados.',
            ]],
            ['title' => 'Medí consultas, no solo visitas', 'body' => [
                'Configurá eventos en Analytics para WhatsApp y formularios y revisá cada mes qué páginas generan '
                    . 'contactos.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Cada cuánto debo revisar el SEO?', 'a' => 'Una revisión mensual de Search Console y una '
                . 'auditoría completa por año son una buena base.'],
            ['q' => '¿Sirve publicar un blog?', 'a' => 'Sí, si responde preguntas reales de tus clientes y enlaza a '
                . 'las páginas de servicio.'],
            ['q' => '¿Los enlaces de otros sitios importan?', 'a' => 'Sí, pero deben ser naturales. Comprar enlaces '
                . 'va contra las directrices de Google y puede perjudicarte.'],
        ],
        'relatedService' => 'seo',
        'toolLink'       => null,
        'related'        => ['como-crear-una-pagina-web-para-mi-negocio', 'que-es-una-landing-page'],
    ],
];
