<?php
/** Phase "software": guides. Same shape as content/guias.php. */

declare(strict_types=1);

return [

    'que-es-un-erp' => [
        'path'            => '/guias/que-es-un-erp/',
        'title'           => 'Qué es un ERP',
        'navLabel'        => 'Qué es un ERP',
        'seoTitle'        => 'Qué es un ERP y cómo elegir uno',
        'metaDescription' => 'Qué es un ERP, qué módulos tiene y cómo elegir e implementar un sistema de '
                           . 'gestión para su pyme en Paraguay, paso a paso y sin sorpresas.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Qué es un ERP y cómo elegir uno para su empresa',
            'lead'    => 'Para dueños y gerentes de pymes que sienten que las planillas ya no alcanzan y quieren '
                       . 'entender qué es un ERP antes de hablar con proveedores.',
        ],
        'intro' => [
            'Un ERP (planificación de recursos empresariales) es un sistema de gestión que reúne en una sola '
                . 'base de datos las ventas, las compras, el stock, las cobranzas, los pagos y la contabilidad. '
                . 'La idea central es que cada dato se cargue una sola vez: la venta descuenta el stock, genera '
                . 'la factura, la cuenta a cobrar y el asiento contable.',
            'Esta guía recorre los pasos para decidir si lo necesita, elegir entre las opciones disponibles e '
                . 'implementarlo sin frenar la operación.',
        ],
        'steps' => [
            ['title' => 'Identifique los síntomas', 'body' => [
                'Anote dónde se pierde tiempo o se cometen errores: stock que no coincide, datos cargados dos '
                    . 'veces, cierres de mes lentos, reportes armados a mano. Si varios se repiten, un ERP '
                    . 'probablemente le sirva.',
            ]],
            ['title' => 'Dibuje sus procesos actuales', 'body' => [
                'Describa en una hoja cómo se hace hoy una venta, una compra y un cobro, quién interviene y qué '
                    . 'documentos se generan. Ese mapa es lo que el proveedor necesita para cotizar con precisión.',
            ]],
            ['title' => 'Defina los módulos prioritarios', 'body' => [
                'No implemente todo a la vez. Elija el módulo donde está el mayor problema (suele ser ventas, '
                    . 'stock y facturación) y deje compras, contabilidad o producción para una segunda etapa.',
            ]],
            ['title' => 'Compare opciones', 'body' => [
                'Evalúe al menos un ERP modular como Odoo, un software de gestión desarrollado en Paraguay y, si '
                    . 'sus procesos son muy particulares, un desarrollo propio. Compare costo total a tres años: '
                    . 'licencias, implementación, adaptaciones y soporte.',
            ]],
            ['title' => 'Verifique la normativa local', 'body' => [
                'Confirme que el sistema maneja IVA, timbrado y facturación electrónica del SIFEN, o que puede '
                    . 'conectarse con su proveedor de facturación. Pida que se lo muestren funcionando.',
            ]],
            ['title' => 'Ordene sus datos antes de migrar', 'body' => [
                'Depure clientes duplicados, productos sin código y saldos que nadie sabe explicar. Un ERP nuevo '
                    . 'con datos desordenados repite los problemas de antes.',
            ]],
            ['title' => 'Capacite y arranque con acompañamiento', 'body' => [
                'Capacite a cada persona en lo que usa, fije una fecha de arranque y prevea algunas semanas de '
                    . 'soporte cercano. Durante ese tiempo, las consultas se resuelven rápido o el equipo vuelve '
                    . 'a la planilla.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Un ERP sirve para una empresa chica?', 'a' => 'Sí, si tiene stock, varias personas cargando datos o necesita información confiable para decidir. Para un negocio muy chico, un sistema de punto de venta con facturación puede ser suficiente.'],
            ['q' => '¿Cuánto cuesta un ERP?', 'a' => 'Depende de la licencia, los módulos, los usuarios y las adaptaciones. Pida siempre el costo total a tres años, no solo la implementación.'],
            ['q' => '¿Cuánto tarda implementarlo?', 'a' => 'Una primera etapa acotada suele llevar uno a tres meses. Los módulos siguientes se suman por etapas.'],
            ['q' => '¿El ERP reemplaza a mi contador?', 'a' => 'No. Le entrega información ordenada; la tarea contable e impositiva sigue siendo del profesional.'],
        ],
        'relatedService' => 'sistemas-erp',
        'toolLink'       => null,
        'related'        => ['kommo-vs-odoo', 'como-elegir-un-sistema-punto-de-venta'],
    ],

    'kommo-vs-odoo' => [
        'path'            => '/guias/kommo-vs-odoo/',
        'title'           => 'Kommo vs Odoo',
        'navLabel'        => 'Kommo vs Odoo',
        'seoTitle'        => 'Kommo vs Odoo: cuál elegir',
        'metaDescription' => 'Kommo vs Odoo: diferencias entre ambos CRM, cuándo conviene cada uno y cómo '
                           . 'decidir según cómo vende su empresa por WhatsApp o con un ERP.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Kommo vs Odoo: cómo elegir su CRM',
            'lead'    => 'Para empresas que están por implementar un CRM y dudan entre Kommo y Odoo CRM.',
        ],
        'intro' => [
            'Kommo es un CRM centrado en la venta por mensajería: WhatsApp, Instagram y otros canales llegan a '
                . 'una bandeja común y cada conversación se vincula a una oportunidad del embudo. Odoo es un '
                . 'conjunto de aplicaciones de gestión (ERP) donde el CRM es un módulo más, conectado con '
                . 'presupuestos, ventas, facturación y stock.',
            'No compiten exactamente en lo mismo. Estos pasos le ayudan a decidir cuál encaja con su forma de '
                . 'vender. Verifique siempre precios y planes vigentes en el sitio de cada fabricante.',
        ],
        'steps' => [
            ['title' => 'Identifique su canal principal de ventas', 'body' => [
                'Si la mayoría de sus ventas empieza y se cierra en conversaciones de WhatsApp o redes, Kommo '
                    . 'suele encajar mejor. Si la venta implica presupuestos formales, stock y facturación, Odoo '
                    . 'gana terreno.',
            ]],
            ['title' => 'Revise qué otros sistemas usa', 'body' => [
                'Si ya usa o planea usar Odoo como ERP, su módulo CRM evita integraciones. Si su facturación y '
                    . 'stock están en otro sistema, Kommo se integra mediante conectores o desarrollo a medida.',
            ]],
            ['title' => 'Cuente usuarios y calcule el costo mensual', 'body' => [
                'Ambos cobran por usuario en sus planes pagos. Multiplique por la cantidad de vendedores y sume '
                    . 'el costo de la API de WhatsApp si la usa.',
            ]],
            ['title' => 'Pruebe el día a día de un vendedor', 'body' => [
                'Use las versiones de prueba con un caso real: recibir un mensaje, crear la oportunidad, '
                    . 'agendar el seguimiento y cerrarla. La herramienta que su equipo use sin quejarse es la '
                    . 'correcta.',
            ]],
            ['title' => 'Evalúe automatizaciones', 'body' => [
                'Kommo ofrece bots y flujos de mensajería; Odoo automatiza a lo largo de todo el ciclo, de la '
                    . 'oportunidad a la factura. Decida cuál automatización le ahorra más tiempo.',
            ]],
            ['title' => 'Decida y planifique la implementación', 'body' => [
                'Defina las etapas del embudo, los campos obligatorios y los reportes antes de configurar. '
                    . 'Importe contactos y capacite al equipo con acompañamiento las primeras semanas.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Puedo usar Kommo y Odoo juntos?', 'a' => 'Sí, algunas empresas usan Kommo para la conversación y Odoo para la gestión, conectados por una integración. Suma costo y mantenimiento, así que conviene justificarlo.'],
            ['q' => '¿Cuál es más barato?', 'a' => 'Depende de los usuarios, del plan y de si necesita otros módulos de Odoo. Compare el costo total mensual con los precios vigentes de cada fabricante.'],
            ['q' => '¿Cuál se integra mejor con WhatsApp?', 'a' => 'Kommo nació orientado a la mensajería. Odoo lo resuelve con módulos o conectores, con resultados variables según la versión.'],
        ],
        'relatedService' => 'crm',
        'toolLink'       => null,
        'related'        => ['que-es-un-erp', 'como-automatizar-procesos-con-ia'],
    ],

    'como-elegir-un-sistema-punto-de-venta' => [
        'path'            => '/guias/como-elegir-un-sistema-punto-de-venta/',
        'title'           => 'Cómo elegir un sistema de punto de venta',
        'navLabel'        => 'Elegir un punto de venta',
        'seoTitle'        => 'Cómo elegir un sistema POS',
        'metaDescription' => 'Cómo elegir un sistema de punto de venta para su comercio en Paraguay: factura '
                           . 'electrónica SIFEN, caja, stock, hardware y costo total, paso a paso.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo elegir un sistema de punto de venta',
            'lead'    => 'Para comercios que van a cambiar o implementar su sistema de caja y quieren evitar '
                       . 'volver a cambiarlo en un año.',
        ],
        'intro' => [
            'Un sistema de punto de venta (POS) registra la venta, cobra, emite el comprobante y descuenta el '
                . 'stock. Elegir mal significa filas largas, diferencias de caja y, con la facturación '
                . 'electrónica, problemas con la DNIT.',
            'Estos pasos ordenan la decisión.',
        ],
        'steps' => [
            ['title' => 'Liste lo que pasa en su mostrador', 'body' => [
                'Cuántas cajas, cuántas ventas por día, si usa balanza, si vende a crédito, si hay delivery o '
                    . 'mesas. Esa lista define qué funciones son indispensables.',
            ]],
            ['title' => 'Confirme la facturación electrónica', 'body' => [
                'Verifique que el sistema emita documentos electrónicos del SIFEN o se conecte con un proveedor '
                    . 'habilitado. Consulte con su contador si ya está obligado y desde cuándo.',
            ]],
            ['title' => 'Decida nube, instalado o mixto', 'body' => [
                'Si su conexión a internet es inestable, priorice sistemas que sigan vendiendo sin conexión. '
                    . 'Si tiene varias sucursales, la nube simplifica ver todo junto.',
            ]],
            ['title' => 'Revise el control de caja', 'body' => [
                'Pida ver una apertura, un arqueo y un cierre con varios medios de pago. Debe quedar registrado '
                    . 'quién cobró qué y las diferencias.',
            ]],
            ['title' => 'Verifique la conexión con stock y gestión', 'body' => [
                'Si ya tiene o planea un ERP, el POS debe integrarse con él. Si no, que tenga al menos un '
                    . 'inventario básico con alertas de reposición.',
            ]],
            ['title' => 'Calcule el costo total', 'body' => [
                'Sume suscripción por caja, implementación, hardware y soporte a tres años. Compare con el '
                    . 'costo de seguir como está.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Puedo usar una tablet como caja?', 'a' => 'Sí, muchos sistemas funcionan en tablet. Verifique compatibilidad con impresora y lector.'],
            ['q' => '¿Qué pasa con mis comprobantes si cambio de sistema?', 'a' => 'Los documentos electrónicos ya emitidos quedan registrados en el SIFEN. Conserve además una exportación de su historial antes de cambiar.'],
            ['q' => '¿Necesito un sistema distinto por sucursal?', 'a' => 'No. Un sistema multisucursal maneja cajas y stock separados con reportes consolidados.'],
        ],
        'relatedService' => 'punto-de-venta',
        'toolLink'       => null,
        'related'        => ['que-es-un-erp', 'kommo-vs-odoo'],
    ],

    'como-automatizar-procesos-con-ia' => [
        'path'            => '/guias/como-automatizar-procesos-con-ia/',
        'title'           => 'Cómo automatizar procesos con IA',
        'navLabel'        => 'Automatizar con IA',
        'seoTitle'        => 'Cómo automatizar procesos con IA',
        'metaDescription' => 'Cómo automatizar procesos con IA en su empresa: elegir la tarea, medir el ahorro, '
                           . 'diseñar el flujo con revisión humana y ponerlo en marcha, paso a paso.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo automatizar procesos con IA en su empresa',
            'lead'    => 'Para responsables de operaciones o administración que quieren empezar a automatizar '
                       . 'sin perder el control del proceso.',
        ],
        'intro' => [
            'Automatizar procesos con IA combina dos cosas: flujos que mueven datos entre sistemas siguiendo '
                . 'reglas fijas, y modelos de lenguaje que interpretan textos, documentos o mensajes donde las '
                . 'reglas fijas no alcanzan.',
            'Esta guía se centra en la aplicación práctica en una empresa. Para información general sobre '
                . 'inteligencia artificial, consulte inteligenciaartificial.com.py.',
        ],
        'steps' => [
            ['title' => 'Haga un inventario de tareas repetitivas', 'body' => [
                'Pida a cada área que anote durante una semana las tareas que repite: copiar datos, reenviar '
                    . 'correos, responder la misma pregunta, armar el mismo reporte.',
            ]],
            ['title' => 'Mida el tiempo que consumen', 'body' => [
                'Para cada tarea anote horas por semana y personas involucradas. Con el costo por hora obtiene '
                    . 'cuánto le cuesta hoy.',
            ]],
            ['title' => 'Elija una sola tarea para empezar', 'body' => [
                'La mejor candidata es frecuente, con reglas claras y bajo riesgo si algo falla. Deje para '
                    . 'después lo que involucra dinero o decisiones legales.',
            ]],
            ['title' => 'Diseñe el flujo con sus excepciones', 'body' => [
                'Defina qué dispara la automatización, qué pasos sigue, qué hace cuando un dato falta y en qué '
                    . 'punto revisa una persona.',
            ]],
            ['title' => 'Decida qué datos salen de su empresa', 'body' => [
                'Si el flujo usa servicios de IA externos, defina qué información se envía y revise las '
                    . 'condiciones de uso del proveedor.',
            ]],
            ['title' => 'Pruebe en paralelo', 'body' => [
                'Durante unas semanas corra la automatización junto al proceso manual y compare resultados '
                    . 'antes de reemplazarlo.',
            ]],
            ['title' => 'Monitoree y amplíe', 'body' => [
                'Configure alertas de fallas, revise el registro de ejecuciones y, cuando la primera tarea esté '
                    . 'estable, pase a la siguiente de la lista.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Necesito programadores para automatizar?', 'a' => 'Para flujos simples existen plataformas sin código. Para integrar sistemas propios, manejar volúmenes altos o usar agentes de IA con control fino, conviene un desarrollo profesional.'],
            ['q' => '¿Es seguro usar IA con datos de clientes?', 'a' => 'Depende del proveedor y de qué datos envíe. Limite la información al mínimo necesario y revise las condiciones de uso.'],
            ['q' => '¿Cómo sé si conviene?', 'a' => 'Compare el costo mensual de la tarea manual con el costo de construir y operar la automatización. Nuestra calculadora de retorno ayuda a hacer esa cuenta.'],
        ],
        'relatedService' => 'automatizacion-ia',
        'toolLink'       => [
            'path'  => '/herramientas/roi-automatizacion/',
            'label' => 'Calcule el retorno',
            'text'  => 'Estime las horas y los guaraníes que recupera al automatizar una tarea.',
        ],
        'related'        => ['kommo-vs-odoo', 'como-contratar-programadores'],
    ],

    'como-contratar-programadores' => [
        'path'            => '/guias/como-contratar-programadores/',
        'title'           => 'Cómo contratar programadores',
        'navLabel'        => 'Contratar programadores',
        'seoTitle'        => 'Cómo contratar programadores',
        'metaDescription' => 'Cómo contratar programadores o una empresa de desarrollo: definir el perfil, '
                           . 'evaluar propuestas, proteger el código y organizar el trabajo, paso a paso.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo contratar programadores para su proyecto',
            'lead'    => 'Para empresas sin área técnica que necesitan contratar desarrollo de software por '
                       . 'primera vez, o que ya tuvieron una mala experiencia.',
        ],
        'intro' => [
            'Contratar programadores es una decisión técnica y comercial a la vez. Los problemas más comunes no '
                . 'son de código: alcance poco claro, código que queda en manos del proveedor y ausencia de '
                . 'alguien que valide el trabajo.',
            'Esta guía cubre la contratación por proyecto o por outsourcing. Si busca publicar una búsqueda '
                . 'laboral, consulte trabajo.com.py.',
        ],
        'steps' => [
            ['title' => 'Escriba qué necesita en una página', 'body' => [
                'Qué problema resuelve el software, quién lo usa y qué debe hacer la primera versión. Sin esto, '
                    . 'las cotizaciones no son comparables.',
            ]],
            ['title' => 'Elija la modalidad', 'body' => [
                'Proyecto cerrado con alcance fijo, bolsa de horas para mantenimiento o refuerzo de equipo con '
                    . 'desarrolladores asignados. Cada una tiene riesgos distintos.',
            ]],
            ['title' => 'Defina el perfil técnico', 'body' => [
                'Desarrollador web, full stack, móvil o especialista en integraciones. Si ya tiene un sistema, '
                    . 'la tecnología existente condiciona el perfil.',
            ]],
            ['title' => 'Pida propuestas comparables', 'body' => [
                'Solicite a cada proveedor alcance, entregas, tecnología, plazos, forma de pago y qué pasa con '
                    . 'los cambios. Desconfíe de propuestas sin preguntas.',
            ]],
            ['title' => 'Asegure la propiedad del código', 'body' => [
                'El contrato debe establecer que el código, el repositorio, el servidor y el dominio son de su '
                    . 'empresa, y que usted tiene los accesos desde el inicio.',
            ]],
            ['title' => 'Organice el seguimiento', 'body' => [
                'Acuerde entregas cortas, una reunión semanal y un entorno de prueba donde pueda ver avances '
                    . 'reales, no solo informes.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Freelancer o empresa?', 'a' => 'Un freelancer puede ser más económico para tareas acotadas; una empresa ofrece continuidad si alguien se va y varios perfiles. Evalúe el riesgo de depender de una sola persona.'],
            ['q' => '¿Cómo evalúo a un programador sin saber programar?', 'a' => 'Pida ver trabajos anteriores funcionando, hable con clientes previos y haga una prueba pagada chica antes de un proyecto grande.'],
            ['q' => '¿Pago por hora o por proyecto?', 'a' => 'Por proyecto si el alcance está muy claro; por hora si va a cambiar o es mantenimiento. En ambos casos, con informes de avance.'],
        ],
        'relatedService' => 'programadores',
        'toolLink'       => [
            'path'  => '/herramientas/cotizador-app/',
            'label' => 'Ubique su proyecto',
            'text'  => 'Si su proyecto es una app, el cotizador orientativo le da una primera referencia.',
        ],
        'related'        => ['que-es-un-erp', 'como-automatizar-procesos-con-ia'],
    ],
];
