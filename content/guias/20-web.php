<?php
/**
 * Phase "web": how-to guides for the web cluster. Same shape as content/guias.php.
 */

declare(strict_types=1);

$cotizador = [
    'path'  => '/herramientas/cotizador-pagina-web/',
    'label' => 'Cotizador de página web',
    'text'  => 'Elija tipo de sitio y funciones y vea un rango orientativo del mercado.',
];

return [

    'como-crear-una-pagina-web-para-mi-negocio' => [
        'path'            => '/guias/como-crear-una-pagina-web-para-mi-negocio/',
        'title'           => 'Cómo crear una página web para mi negocio',
        'navLabel'        => 'Crear una página web',
        'seoTitle'        => 'Crear una página web para su negocio',
        'metaDescription' => 'Guía paso a paso para crear una página web para su negocio en Paraguay: '
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
            'Esta guía sirve tanto si lo va a hacer usted mismo como si va a contratar a alguien: en el segundo '
                . 'caso, le permite pedir presupuestos comparables y saber qué preguntar.',
        ],
        'steps' => [
            ['title' => 'Defina el objetivo del sitio', 'body' => [
                'Escriba en una frase qué quiere que haga el visitante: escribirle por WhatsApp, pedir un '
                    . 'presupuesto, comprar o reservar. Ese objetivo decide la estructura y el tipo de sitio.',
            ]],
            ['title' => 'Registre el dominio', 'body' => [
                'Elija un nombre corto y fácil de dictar. Para Paraguay, el .com.py transmite presencia local; '
                    . 'el registro se hace a nombre de su empresa. Registre el dominio usted o exija que quede a su '
                    . 'nombre si lo hace un proveedor.',
            ]],
            ['title' => 'Contrate un hosting adecuado', 'body' => [
                'El hosting es el servidor donde vive el sitio. Para un sitio institucional alcanza un hosting '
                    . 'compartido de calidad con SSL incluido; una tienda online con muchas visitas necesita más '
                    . 'recursos.',
            ]],
            ['title' => 'Elija la plataforma', 'body' => [
                'WordPress es la opción más flexible y común; constructores como Wix son más simples pero menos '
                    . 'portables; el desarrollo a medida conviene para necesidades específicas. Compare opciones '
                    . 'en nuestra guía WordPress vs Wix.',
            ]],
            ['title' => 'Prepare el contenido', 'body' => [
                'Reúna logo, fotos propias, la lista de servicios con una descripción de cada uno, datos de '
                    . 'contacto y respuestas a las preguntas que más le hacen. El contenido es lo que más atrasa un '
                    . 'proyecto web.',
            ]],
            ['title' => 'Diseñe pensando en el celular', 'body' => [
                'Revise cada página en un teléfono: titular claro, botón de WhatsApp visible, textos legibles y '
                    . 'carga rápida. La mayoría de sus visitas llegará desde el celular.',
            ]],
            ['title' => 'Configure medición y Google', 'body' => [
                'Instale Google Analytics 4, dé de alta el sitio en Google Search Console, envíe el sitemap y '
                    . 'cree o actualice su perfil de empresa en Google con el enlace al sitio.',
            ]],
            ['title' => 'Publique y mantenga', 'body' => [
                'Después de publicar, revise formularios y enlaces, y planifique actualizaciones y copias de '
                    . 'seguridad periódicas. Un sitio sin mantenimiento se desactualiza y se vuelve vulnerable.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Puedo crear la página web gratis?', 'a' => 'Existen planes gratuitos en algunos constructores, '
                . 'pero muestran publicidad y no permiten usar su propio dominio. Para un negocio conviene al menos '
                . 'dominio y hosting propios.'],
            ['q' => '¿Cuánto cuesta crear una página web?', 'a' => 'Depende del tipo de sitio, las páginas y las '
                . 'funciones. El cotizador de página web le da un rango orientativo del mercado, a confirmar con '
                . 'presupuesto.'],
            ['q' => '¿Necesito una página web si ya tengo Instagram?', 'a' => 'Las redes no le pertenecen y no '
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
            'h1'      => 'WordPress vs Wix: cuál conviene para su empresa',
            'lead'    => 'Una comparación práctica para decidir la plataforma de su sitio según lo que necesita hoy '
                       . 'y lo que puede necesitar mañana.',
        ],
        'intro' => [
            'Wix es un constructor de sitios alojado: paga una suscripción y todo funciona dentro de la '
                . 'plataforma. WordPress es un software libre que se instala en un hosting que usted elige. Los dos '
                . 'sirven para hacer páginas web profesionales, pero la diferencia de fondo es el control.',
            'Los pasos siguientes le ayudan a evaluar cada criterio con su propio caso.',
        ],
        'steps' => [
            ['title' => 'Evalúe quién va a mantener el sitio', 'body' => [
                'Si lo va a editar usted solo y quiere cero configuración técnica, Wix es más simple. Si va a '
                    . 'trabajar con un desarrollador o una agencia, WordPress ofrece más opciones y más '
                    . 'profesionales que lo conocen.',
            ]],
            ['title' => 'Compare la propiedad y la portabilidad', 'body' => [
                'En WordPress puede llevarse el sitio completo a otro hosting. En Wix, el sitio vive en la '
                    . 'plataforma y no se exporta de forma completa; si se va, en la práctica lo rehace.',
            ]],
            ['title' => 'Calcule el costo a varios años', 'body' => [
                'Wix cobra una suscripción periódica que sube con los planes de tienda. WordPress requiere '
                    . 'hosting, dominio, posibles licencias y mantenimiento. Compare el total a tres años, no el '
                    . 'primer mes.',
            ]],
            ['title' => 'Revise las necesidades de SEO', 'body' => [
                'Ambos permiten SEO básico. WordPress da control más fino sobre estructura, velocidad y datos '
                    . 'estructurados, lo que pesa en rubros competidos.',
            ]],
            ['title' => 'Verifique pagos locales si va a vender', 'body' => [
                'Para cobrar con pasarelas paraguayas, WooCommerce sobre WordPress permite integraciones con '
                    . 'proveedores locales. En constructores cerrados depende de que la plataforma lo soporte.',
            ]],
            ['title' => 'Decida y documente', 'body' => [
                'Elija según su prioridad: simplicidad inmediata (Wix) o control y crecimiento (WordPress). '
                    . 'Guarde los accesos de dominio, hosting y plataforma a nombre de su empresa.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Wix es malo para SEO?', 'a' => 'No; hoy permite hacer SEO básico correctamente. La diferencia '
                . 'aparece en proyectos que necesitan control técnico avanzado.'],
            ['q' => '¿Puedo pasar de Wix a WordPress?', 'a' => 'Sí, pero se rehace el diseño y se migra el '
                . 'contenido manualmente o con herramientas parciales, cuidando las redirecciones.'],
            ['q' => '¿WordPress es gratis?', 'a' => 'El software sí. Paga hosting, dominio y, si los usa, temas o '
                . 'plugins pagos.'],
            ['q' => '¿Cuál es más seguro?', 'a' => 'Wix gestiona la seguridad por usted. WordPress es seguro si se '
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
        'metaDescription' => 'Elementor o desarrollo a medida: compare velocidad, costo, autonomía para editar '
                           . 'y mantenimiento antes de encargar el sitio web de su empresa.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Elementor vs desarrollo a medida: cómo decidir',
            'lead'    => 'Cuándo conviene un sitio armado con Elementor y cuándo uno programado a medida, con los '
                       . 'criterios que realmente cambian el resultado.',
        ],
        'intro' => [
            'Elementor es un constructor visual para WordPress: permite diseñar páginas arrastrando bloques. '
                . 'El desarrollo a medida es código escrito específicamente para su sitio, ya sea como tema de '
                . 'WordPress o como aplicación independiente.',
            'Ninguno es mejor en todos los casos. La elección depende de quién edita, cuánto importa la '
                . 'velocidad y qué funciones necesita.',
        ],
        'steps' => [
            ['title' => 'Defina quién va a editar el diseño', 'body' => [
                'Si su equipo necesita crear páginas nuevas con diseño propio sin llamar a un desarrollador, '
                    . 'Elementor da esa autonomía. Si solo cambiará textos e imágenes, un tema a medida con campos '
                    . 'editables alcanza.',
            ]],
            ['title' => 'Evalúe la importancia de la velocidad', 'body' => [
                'Un sitio a medida carga solo lo necesario y suele ser más rápido. Elementor bien configurado '
                    . 'puede ser aceptable, pero tiende a generar más código por página.',
            ]],
            ['title' => 'Liste las funciones especiales', 'body' => [
                'Cotizadores, integraciones con sistemas, áreas privadas o lógica de negocio propia se resuelven '
                    . 'mejor con código a medida, se use o no Elementor para el resto.',
            ]],
            ['title' => 'Compare costo inicial y mantenimiento', 'body' => [
                'Elementor suele ser más económico al inicio. El desarrollo a medida cuesta más al principio pero '
                    . 'depende de menos plugins de terceros y licencias.',
            ]],
            ['title' => 'Considere un enfoque mixto', 'body' => [
                'Muchas veces lo más práctico es un tema liviano con Elementor para páginas de contenido y '
                    . 'desarrollo a medida para las funciones críticas.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Elementor hace lento el sitio?', 'a' => 'Puede hacerlo si se abusa de complementos y widgets. '
                . 'Con estilos globales, pocas extensiones y caché, el resultado es aceptable para la mayoría.'],
            ['q' => '¿Necesito Elementor Pro?', 'a' => 'Para plantillas de encabezado, pie y formularios avanzados, '
                . 'normalmente sí. Consulte el precio vigente de la licencia en el sitio oficial.'],
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
            'lead'    => 'La definición, cuándo usarla y un ejemplo de estructura bloque por bloque que puede '
                       . 'aplicar a su próxima campaña.',
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
            ['title' => 'Defina una sola oferta y una sola acción', 'body' => [
                'Ejemplo: "Chequeo anual completo, reserve por WhatsApp". Si hay dos ofertas, haga dos landing '
                    . 'pages.',
            ]],
            ['title' => 'Escriba el bloque principal', 'body' => [
                'Titular con el beneficio, subtítulo con el detalle concreto y botón de acción. Ejemplo: '
                    . '"Chequeo anual en una mañana — análisis, consulta y resultados en 48 h".',
            ]],
            ['title' => 'Agregue el bloque de problema y solución', 'body' => [
                'Dos o tres frases sobre la situación del cliente y cómo su oferta la resuelve.',
            ]],
            ['title' => 'Detalle qué incluye y cuánto cuesta', 'body' => [
                'Lista corta de lo incluido, condiciones y, si es posible, el precio o la forma de pago. La falta '
                    . 'de precio es la duda más frecuente.',
            ]],
            ['title' => 'Sume pruebas y preguntas frecuentes', 'body' => [
                'Fotos reales, certificaciones, garantías y respuestas a las dudas que hoy le llegan por '
                    . 'WhatsApp.',
            ]],
            ['title' => 'Cierre con el mismo llamado a la acción', 'body' => [
                'Repita el botón al final y mantenga uno fijo visible en el celular.',
            ]],
            ['title' => 'Mida y mejore', 'body' => [
                'Configure eventos para clics en WhatsApp y envíos de formulario, conéctelos con sus anuncios y '
                    . 'pruebe variantes del titular.',
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
                           . 'local, catálogo, envíos, facturación y lanzamiento de su ecommerce.',
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
            ['title' => 'Defina qué, a quién y cómo entrega', 'body' => [
                'Catálogo inicial, público y logística: envío propio, courier, retiro en local o una combinación.',
            ]],
            ['title' => 'Inicie el alta con la pasarela de pago', 'body' => [
                'Solicite el alta como comercio electrónico en la pasarela elegida (por ejemplo Bancard o '
                    . 'Pagopar). Requisitos, comisiones y plazos los define cada proveedor: consulte el valor '
                    . 'vigente.',
            ]],
            ['title' => 'Elija la plataforma', 'body' => [
                'WooCommerce sobre WordPress para la mayoría; desarrollo a medida si tiene reglas propias o '
                    . 'integraciones profundas con su sistema.',
            ]],
            ['title' => 'Prepare el catálogo en planilla', 'body' => [
                'Nombre, precio en guaraníes, stock, variantes, descripción y fotos con fondo uniforme.',
            ]],
            ['title' => 'Configure envíos y políticas', 'body' => [
                'Costos por zona, plazos, cambios y devoluciones, y términos de venta publicados en el sitio.',
            ]],
            ['title' => 'Resuelva la facturación', 'body' => [
                'Defina cómo se emitirá el comprobante de cada venta: manualmente desde su sistema o integrado a '
                    . 'la tienda. Consulte con su contador los requisitos de facturación electrónica vigentes.',
            ]],
            ['title' => 'Pruebe y lance', 'body' => [
                'Haga compras de prueba con pagos aprobados y rechazados, revise los correos y lance con '
                    . 'medición de ventas activa.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Necesito RUC para vender online?', 'a' => 'Para operar formalmente y habilitar una pasarela de '
                . 'pago, en general sí. Consulte los requisitos vigentes con la pasarela y con su contador.'],
            ['q' => '¿Puedo empezar solo con transferencia?', 'a' => 'Sí, y sumar la pasarela después. Pero el pago '
                . 'con tarjeta suele aumentar la conversión.'],
            ['q' => '¿Cuánto demora abrir una tienda online?', 'a' => 'Suele depender más de la aprobación de la '
                . 'pasarela y de la carga del catálogo que del desarrollo.'],
            ['q' => '¿Shopify sirve en Paraguay?', 'a' => 'Puede usarse, pero verifique que acepte las pasarelas '
                . 'locales que necesita antes de elegirla.'],
        ],
        'relatedService' => 'ecommerce',
        'toolLink'       => $cotizador,
        'related'        => ['wordpress-vs-wix', 'como-crear-una-pagina-web-para-mi-negocio'],
    ],

    'checklist-seo-para-su-sitio' => [
        'path'            => '/guias/checklist-seo-para-su-sitio/',
        'title'           => 'Checklist SEO para su sitio',
        'navLabel'        => 'Checklist SEO',
        'seoTitle'        => 'Checklist SEO para su sitio web',
        'metaDescription' => 'Checklist SEO para revisar su sitio web: indexación, títulos, velocidad, '
                           . 'contenido por servicio, SEO local y medición, con pasos concretos.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Checklist SEO para revisar su sitio web',
            'lead'    => 'Una lista de verificación para detectar por qué su sitio no aparece en Google y qué '
                       . 'corregir primero.',
        ],
        'intro' => [
            'Antes de invertir en posicionamiento conviene saber si el sitio tiene problemas básicos. Muchos '
                . 'sitios no aparecen en Google por errores simples: páginas bloqueadas, títulos repetidos o '
                . 'falta de contenido específico.',
            'Recorra estos pasos en orden; los primeros son los que más impacto tienen.',
        ],
        'steps' => [
            ['title' => 'Verifique la indexación', 'body' => [
                'Dé de alta el sitio en Google Search Console, envíe el sitemap y revise el informe de páginas '
                    . 'indexadas y excluidas.',
            ]],
            ['title' => 'Revise títulos y descripciones', 'body' => [
                'Cada página debe tener un título único con la palabra clave principal y una descripción que '
                    . 'invite al clic.',
            ]],
            ['title' => 'Mida la velocidad en el celular', 'body' => [
                'Use PageSpeed Insights. Optimice imágenes, reduzca plugins y active caché si la carga es lenta.',
            ]],
            ['title' => 'Cree una página por servicio', 'body' => [
                'Una sola página que lista todo no posiciona para cada servicio. Cada uno necesita su página con '
                    . 'contenido concreto y preguntas frecuentes.',
            ]],
            ['title' => 'Ordene los enlaces internos', 'body' => [
                'Enlace entre páginas relacionadas con textos descriptivos y corrija los enlaces rotos.',
            ]],
            ['title' => 'Trabaje el SEO local', 'body' => [
                'Complete su perfil de empresa en Google con categoría, horarios, fotos y enlace al sitio, con '
                    . 'nombre, dirección y teléfono idénticos en todos lados.',
            ]],
            ['title' => 'Mida consultas, no solo visitas', 'body' => [
                'Configure eventos en Analytics para WhatsApp y formularios y revise cada mes qué páginas generan '
                    . 'contactos.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Cada cuánto debo revisar el SEO?', 'a' => 'Una revisión mensual de Search Console y una '
                . 'auditoría completa por año son una buena base.'],
            ['q' => '¿Sirve publicar un blog?', 'a' => 'Sí, si responde preguntas reales de sus clientes y enlaza a '
                . 'las páginas de servicio.'],
            ['q' => '¿Los enlaces de otros sitios importan?', 'a' => 'Sí, pero deben ser naturales. Comprar enlaces '
                . 'va contra las directrices de Google y puede perjudicarlo.'],
        ],
        'relatedService' => 'seo',
        'toolLink'       => null,
        'related'        => ['como-crear-una-pagina-web-para-mi-negocio', 'que-es-una-landing-page'],
    ],
];
