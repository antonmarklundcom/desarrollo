<?php
/**
 * Every UI string on the site, in one file — the single-locale layer. Nothing
 * in partials/ or templates/ contains a visible word; they all read from here,
 * so translating the site is this one file plus content/*.
 *
 * The strings below are Paraguayan Spanish with voseo (the register the
 * services, guides, blog and segment pages use). A Swedish site rewrites this file in
 * Swedish and sets 'market' => 'se' in content/site.php; no code changes.
 *
 * Nothing here may name a month, a year, a price or a client: strings must stay
 * true without anyone remembering to edit them.
 */

declare(strict_types=1);

return [

    // Cluster labels, in the order the mega-menu and the services hub use them.
    // A cluster key is referenced by every service record ('cluster' => ...).
    'clusters' => [
        'integraciones' => 'Facturación e integraciones',
        'web'           => 'Páginas web y WordPress',
        'software'      => 'Software, sistemas y apps',
        'infra'         => 'Hosting, dominios y correo',
        'principal'     => 'Servicios principales',
    ],

    // One line under each cluster heading on the services hub. Keyed by cluster id.
    'cluster_leads' => [
        'integraciones' => 'SIFEN, Bancard, Pagopar, Tigo Money y WhatsApp conectados a tu sistema.',
        'web'           => 'Sitios que cargan rápido, se encuentran en Google y generan consultas.',
        'software'      => 'Sistemas a medida, ERP, CRM, apps y automatización con IA.',
        'infra'         => 'Todo lo que tu sitio y tu correo necesitan para funcionar sin sorpresas.',
        'principal'     => 'Servicios principales.',
    ],

    'nav' => [
        'home'         => 'Inicio',
        'services'     => 'Servicios',
        'pricing'      => 'Precios',
        'tools'        => 'Herramientas',
        'guides'       => 'Guías',
        'about'        => 'Nosotros',
        'blog'         => 'Blog',
        'contact'      => 'Contacto',
        'privacy'      => 'Privacidad',
        'terms'        => 'Términos',
        'menu'         => 'Menú',
        'close'        => 'Cerrar',
        'open_menu'    => 'Abrir el menú',
        'close_menu'   => 'Cerrar el menú',
        'skip'         => 'Ir al contenido principal',
        'firm'         => 'La empresa',
        'all_services' => 'Ver todos los servicios',
    ],

    'cta' => [
        'quote'         => 'Pedir presupuesto',
        'whatsapp'      => 'WhatsApp',
        'whatsapp_long' => 'Escribir por WhatsApp',
        'consult'       => 'Solicitar una consulta',
        'contact'       => 'Contactar',
        'see_included'  => 'Ver qué incluye',
        'talk'          => 'Hablar con nosotros',
    ],

    // The WhatsApp menu. These are BUTTON LABELS only — the message that
    // actually reaches WhatsApp always comes from content/lead-values.php and
    // names a service, never a generic "consulta gratis".
    'whatsapp' => [
        'menu_title' => '¿Sobre qué querés escribirnos?',
        'menu_note'  => 'Abrimos WhatsApp con el mensaje ya escrito. Podés cambiarlo antes de enviarlo.',
        'other'      => 'Otra consulta',
        'this_page'  => 'Lo que estás viendo',
        'open_menu'  => 'Abrir opciones de WhatsApp',
        'close_menu' => 'Cerrar',
    ],

    'home' => [
        'eyebrow'   => 'Desarrollo de software en Paraguay',
        'h1_lead'   => 'Software, páginas web e integraciones ',
        'h1_accent' => 'para empresas paraguayas.',
        'lead'      => 'SIFEN, Bancard, Pagopar y WhatsApp conectados al sistema que ya usás, '
                     . 'o un sistema nuevo a medida, pensado para cómo se factura, se cobra y se '
                     . 'vende en Paraguay.',

        'services_eyebrow' => 'Servicios',
        'services_title'   => 'Lo que hacemos',
        'services_lead'    => 'Los seis servicios que más nos piden. Abajo está el catálogo completo, por área.',

        'unsure_title' => '¿No sabés qué necesitás?',
        'unsure_text'  => 'Contanos qué querés resolver y te proponemos la solución más simple, sin costo.',

        // Hero: the second button opens WhatsApp with the homepage's prefill.
        'cta_primary'  => 'Pedir presupuesto',
        'cta_whatsapp' => 'Escribir por WhatsApp',

        // The three commitments under the hero buttons and every service hero.
        // Each one is a promise the site already makes elsewhere (ui.contact,
        // ui.about) — never a figure nobody confirmed.
        'trust' => [
            'Presupuesto en guaraníes, por escrito',
            'Factura legal',
            'Respuesta el siguiente día hábil',
        ],

        // The six pillars shown with an image on the homepage, in order. The
        // rest of the catalogue is listed by cluster right below them.
        'featured' => [
            'facturacion-electronica-sifen',
            'integracion-pagos',
            'paginas-web',
            'whatsapp-business-api',
            'sistemas-erp',
            'desarrollo-de-software',
        ],
        'all_title' => 'Todos los servicios',

        // Homepage FAQ → FAQPage JSON-LD. Answers restate what the site already
        // commits to; no price, duration or client count.
        'faq_title' => 'Preguntas frecuentes',
        'faq' => [
            [
                'q' => '¿Cuánto cuesta una página web o un sistema?',
                'a' => 'Depende del alcance. Después de una conversación de 30 minutos te pasamos un '
                     . 'presupuesto en guaraníes, por escrito, con lo que incluye y lo que no. Para '
                     . 'ubicar tu caso antes de escribirnos podés usar los cotizadores de la sección Herramientas.',
            ],
            [
                'q' => '¿Emiten factura legal?',
                'a' => 'Sí. Cada proyecto se factura con factura legal paraguaya, en guaraníes.',
            ],
            [
                'q' => '¿Pueden integrar SIFEN, Bancard o WhatsApp al sistema que ya uso?',
                'a' => 'En la mayoría de los casos, sí: trabajamos sobre tu ERP, punto de venta o tienda '
                     . 'actual. Si el sistema no permite integrarse, te lo decimos en el relevamiento y '
                     . 'te proponemos la alternativa más simple.',
            ],
            [
                'q' => '¿De quién es el código y los accesos?',
                'a' => 'Tuyos. El código, el dominio y los accesos quedan a nombre de tu empresa.',
            ],
            [
                'q' => '¿Cómo es el primer paso?',
                'a' => 'Nos escribís por WhatsApp o dejás tus datos en el formulario. Te respondemos '
                     . 'dentro del siguiente día hábil y coordinamos una llamada de 30 minutos, sin costo.',
            ],
        ],
    ],

    // Sister sites. PLAN.md: cybersecurity, job listings and general AI content
    // live there — this site only links out to them, from the footer.
    'sister' => [
        'title' => 'Otros sitios',
        'items' => [
            ['label' => 'Ciberseguridad', 'url' => 'https://ciberseguridad.com.py/', 'host' => 'ciberseguridad.com.py'],
            ['label' => 'Empleos en Paraguay', 'url' => 'https://trabajo.com.py/', 'host' => 'trabajo.com.py'],
            ['label' => 'Inteligencia artificial', 'url' => 'https://inteligenciaartificial.com.py/', 'host' => 'inteligenciaartificial.com.py'],
        ],
    ],

    // The panel at the foot of the homepage hero. Labels only: no amounts, no
    // dates, no percentages, no client name — see partials/status-panel.php.
    'panel' => [
        'title' => 'Tu proyecto, a la vista',
        'badge' => 'En curso',
        'tiles' => [
            ['label' => 'Alcance y presupuesto', 'value' => 'Aprobado'],
            ['label' => 'Diseño',                'value' => 'Aprobado'],
            ['label' => 'Desarrollo',            'value' => 'En curso'],
        ],
        'foot'  => 'Próxima entrega acordada',
        'note'  => 'Ejemplo del tablero de proyecto',
    ],

    // The "quiénes somos" band on the homepage. Every line here is a commitment
    // about how the business works, never a claim about size or results — those
    // need the owner's confirmation and belong in content/site.php.
    'about' => [
        'eyebrow' => 'Quiénes somos',
        'title'   => 'Software hecho para cómo se factura y se cobra en Paraguay.',
        'text'    => 'Construimos software para empresas paraguayas: conocemos SIFEN, los pagos '
                   . 'locales y cómo se vende por WhatsApp. Usamos herramientas modernas e IA '
                   . 'para entregar más rápido, y cada proyecto tiene alcance y precio por escrito.',
        // Shown while content/site.php has no credentials[] of its own.
        'credentials' => [
            'Un responsable técnico asignado a tu proyecto',
            'Alcance y precio en guaraníes, por escrito antes de empezar',
            'El código y los accesos quedan a nombre de tu empresa',
        ],
        'badge_note'     => 'de experiencia',
        'badge_fallback' => 'Alcance por escrito',
    ],

    // The four-step "cómo trabajamos" block, reused on service pages.
    'process' => [
        'eyebrow' => 'Cómo trabajamos',
        'title'   => 'De la primera conversación a tu sistema en producción, con fechas acordadas.',
        'steps'   => [
            [
                'title' => 'Conversación inicial',
                'text'  => 'Media hora para entender qué querés resolver, qué usás hoy y con qué presupuesto.',
            ],
            [
                'title' => 'Propuesta por escrito',
                'text'  => 'Alcance detallado y precio, con lo que está incluido y lo que no.',
            ],
            [
                'title' => 'Desarrollo por etapas',
                'text'  => 'Entregas cortas que vos probás y aprobás antes de pasar a la siguiente.',
            ],
            [
                'title' => 'Puesta en producción y soporte',
                'text'  => 'Publicamos, capacitamos a tu equipo y quedamos a cargo del mantenimiento.',
            ],
        ],
    ],

    // Rendered in place of the testimonials band while content/site.php has
    // none. Sectors, not clients: nothing to verify.
    'industries' => [
        'eyebrow' => 'Rubros',
        'title'   => 'Soluciones por rubro',
        'lead'    => 'Cada rubro tiene sus propias trampas. Estos son los que trabajamos.',
        // Each item is either a plain string or ['label' => ..., 'path' => ...]
        // pointing at a segment page in content/segmentos.php.
        'items'   => [
            ['label' => 'Inmobiliarias', 'path' => '/soluciones/inmobiliarias/'],
            ['label' => 'Clínicas', 'path' => '/soluciones/clinicas/'],
            ['label' => 'Estudios contables', 'path' => '/soluciones/estudios-contables/'],
            ['label' => 'Abogados', 'path' => '/soluciones/abogados/'],
            ['label' => 'Restaurantes', 'path' => '/soluciones/restaurantes/'],
            ['label' => 'Logística', 'path' => '/soluciones/logistica/'],
            ['label' => 'Agro', 'path' => '/soluciones/agro/'],
            ['label' => 'Colegios', 'path' => '/soluciones/colegios/'],
            ['label' => 'Gimnasios', 'path' => '/soluciones/gimnasios/'],
            ['label' => 'Comercios y farmacias', 'path' => '/soluciones/comercios-y-farmacias/'],
            ['label' => 'Cooperativas', 'path' => '/soluciones/cooperativas/'],
            ['label' => 'Concesionarias', 'path' => '/soluciones/concesionarias/'],
        ],
    ],

    // The band renders only when content/site.php has testimonials.
    'testimonials' => [
        'eyebrow' => 'Casos',
        'title'   => 'Lo que dicen nuestros clientes',
    ],

    'services_hub' => [
        'eyebrow'      => 'Servicios',
        'title'        => 'Todo lo que hacemos, en un solo lugar.',
        'lead'         => 'Contratá lo que necesitás hoy y sumá servicios cuando haga falta.',
        'unsure_title' => '¿No sabés qué necesitás?',
        'unsure_text'  => 'Contanos tu caso y te decimos qué servicios te corresponden.',
        'unsure_cta'   => 'Escribinos',
    ],

    'cta_band' => [
        'eyebrow' => 'Solicitar consulta',
        'title'   => 'Empecemos con una conversación de 30 minutos.',
        'lead'    => 'Sin costo y sin compromiso. Te respondemos con una propuesta y un presupuesto en guaraníes.',
    ],

    'form' => [
        'legend'          => 'Solicitar una consulta',
        'name'            => 'Nombre',
        'company'         => 'Empresa o rubro',
        'phone'           => 'WhatsApp o teléfono',
        'phone_hint'      => 'Ej.: 0981 123 456',
        'email'           => 'Correo (opcional)',
        'need'            => '¿Qué necesitás?',
        'message'         => 'Contanos brevemente',
        'message_hint'    => 'Qué querés construir o integrar, en dos líneas…',
        'submit'          => 'Solicitar una consulta',
        'sending'         => 'Enviando…',
        'privacy_note'    => 'Usamos tus datos solo para responderte. Ver la política de privacidad.',
        'success_title'   => 'Recibimos tu consulta.',
        'success_text'    => 'Te respondemos dentro del siguiente día hábil. Si preferís, escribinos ahora.',
        'error_title'     => 'No pudimos enviar el formulario.',
        'error_text'      => 'Volvé a intentarlo en un momento o escribinos directamente.',
        'error_phone'     => 'Necesitamos un teléfono o WhatsApp válido para responderte.',
        'required'        => 'obligatorio',
        'thanks_next'     => 'Qué sigue',
        'thanks_whatsapp' => 'Si preferís no esperar, escribinos ahora por WhatsApp.',
        'remind_title'    => 'Que te avisemos antes de cada vencimiento',
        'remind_text'     => 'Anotamos tu caso y te escribimos por WhatsApp unos días antes.',
        'remind_phone'    => 'Tu WhatsApp',
        'remind_submit'   => 'Quiero que me recuerden',
        'remind_ok'       => 'Anotado. Te escribimos antes del próximo vencimiento.',
    ],

    // The chip selector in the lead form. Every key here needs a matching entry
    // in content/lead-values.php's 'needs' — verify.sh checks that.
    'needs' => [
        'web'         => 'Página web o tienda',
        'software'    => 'Software o sistema',
        'integracion' => 'SIFEN, pagos o WhatsApp',
        'soporte'     => 'Hosting, correo o soporte',
        'otro'        => 'Otro',
    ],

    'contact' => [
        'eyebrow' => 'Contacto',
        'title'   => 'Hablemos de tu caso.',
        'lead'    => 'Escribinos por WhatsApp o dejanos tus datos y te respondemos dentro '
                   . 'del siguiente día hábil.',
        'address' => 'Dirección',
        'hours'   => 'Horario',
        'phone'   => 'Teléfono',
        'email'   => 'Correo',
        'expect'  => 'Qué pasa después',
        'steps'   => [
            'Te respondemos dentro del siguiente día hábil.',
            'Coordinamos una llamada de 30 minutos, sin costo ni compromiso.',
            'Recibís una propuesta con el alcance y el precio por escrito.',
        ],
    ],

    'service' => [
        'includes'     => 'Qué incluye',
        'excludes'     => 'Qué no incluye',
        'we_need'      => 'Qué necesitamos de vos',
        'benefits'     => 'Beneficios',
        'faq'          => 'Preguntas frecuentes',
        'related'      => 'Servicios relacionados',
        'guides'       => 'Guía relacionada',
        'articles'     => 'Artículo relacionado',
        'form_eyebrow' => 'Presupuesto',
        'form_lead'    => 'Dejanos tus datos y te respondemos con una propuesta concreta, '
                        . 'sin costo y sin compromiso.',
        'breadcrumb'   => 'Ruta de navegación',
    ],

    // Segment landing pages (content/segmentos.php).
    'segment' => [
        'traps_title'  => 'Los errores que más cuestan en tu rubro',
        'bundle_title' => 'Lo que armamos para tu rubro',
        'form_eyebrow' => 'Presupuesto para tu rubro',
        'form_lead'    => 'Contanos tu rubro y tu volumen; te respondemos con una propuesta concreta.',
    ],

    // Shared microcopy across the tool pages. Calculator-specific labels live in
    // each tool's own PHP/JS; only the repeated strings are here.
    'tools' => [
        'reviewed_prefix' => 'Datos revisados el',
        'orientativo'     => 'Los resultados son orientativos y no reemplazan un cálculo oficial.',
        'calculate'       => 'Calcular',
        'result_title'    => 'Resultado',
        'use_result'      => 'Usar este resultado en el formulario',
        'need_js'         => 'Esta calculadora necesita JavaScript activado en tu navegador.',
        'restart'         => 'Volver a empezar',
    ],

    // Shared microcopy across the guide pages.
    'guide' => [
        'reviewed_prefix'       => 'Revisado el',
        'orientativo'           => 'Es una guía general: para tu caso puntual, confirmalo con nosotros.',
        'delegate_eyebrow'      => 'Delegarlo',
        'delegate_title'        => '¿Preferís que lo hagamos nosotros?',
        'delegate_lead'         => 'Te respondemos dentro del siguiente día hábil con los pasos exactos '
                                 . 'para tu caso.',
        'delegate_form_heading' => 'Pedir que nos encarguemos',
        'related'               => 'Otras guías',
    ],

    // Article chrome (templates/article.php). The long date itself is formatted
    // by the market module's fmt_date_long().
    'article' => [
        'reading_time' => 'min de lectura',
        'updated'      => 'Actualizado el',
        'read_more'    => 'Leer el artículo',
    ],

    // Hub pages: the listings under /servicios/, /blog/, /herramientas/, /guias/.
    'hub' => [
        'empty' => 'Todavía no hay nada publicado en esta sección.',
    ],

    'pricing' => [
        'quote'    => 'A cotizar',
        'per_month' => 'por mes',
        'cta'      => 'Pedir presupuesto',
        'note'     => 'Los planes se ajustan al volumen real; el precio final se acuerda por escrito.',
    ],

    'placeholder' => [
        // Shown on a stub page until the phase that owns it writes the content.
        'notice' => 'Estamos preparando esta página.',
        'action' => 'Mientras tanto, escribinos y te respondemos por WhatsApp.',
    ],

    'error404' => [
        'title' => 'No encontramos esta página',
        'lead'  => 'Puede que el enlace haya cambiado. Estas son las secciones más buscadas.',
    ],

    'footer' => [
        'blurb'   => 'Desarrollo de software, páginas web e integraciones para empresas de Paraguay.',
        'rights'  => 'Todos los derechos reservados.',
        'contact' => 'Contacto',
    ],
];
