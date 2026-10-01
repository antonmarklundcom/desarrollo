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
                           . 'gestión para tu pyme en Paraguay, paso a paso y sin sorpresas.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Qué es un ERP y cómo elegir uno para tu empresa',
            'lead'    => 'Para dueños y gerentes de pymes que sienten que las planillas ya no alcanzan y quieren '
                       . 'entender qué es un ERP antes de hablar con proveedores.',
        ],
        'intro' => [
            'Un ERP (planificación de recursos empresariales) es un sistema de gestión que reúne en una sola '
                . 'base de datos las ventas, las compras, el stock, las cobranzas, los pagos y la contabilidad. '
                . 'La idea central es que cada dato se cargue una sola vez: la venta descuenta el stock, genera '
                . 'la factura, la cuenta a cobrar y el asiento contable.',
            'Esta guía recorre los pasos para decidir si lo necesitás, elegir entre las opciones disponibles e '
                . 'implementarlo sin frenar la operación.',
        ],
        'steps' => [
            ['title' => 'Identificá los síntomas', 'body' => [
                'Anotá dónde se pierde tiempo o se cometen errores: stock que no coincide, datos cargados dos '
                    . 'veces, cierres de mes lentos, reportes armados a mano. Si varios se repiten, un ERP '
                    . 'probablemente te sirva.',
            ]],
            ['title' => 'Dibujá tus procesos actuales', 'body' => [
                'Describí en una hoja cómo se hace hoy una venta, una compra y un cobro, quién interviene y qué '
                    . 'documentos se generan. Ese mapa es lo que el proveedor necesita para cotizar con precisión.',
            ]],
            ['title' => 'Definí los módulos prioritarios', 'body' => [
                'No implementes todo a la vez. Elegí el módulo donde está el mayor problema (suele ser ventas, '
                    . 'stock y facturación) y dejá compras, contabilidad o producción para una segunda etapa.',
            ]],
            ['title' => 'Compará opciones', 'body' => [
                'Evaluá al menos un ERP modular como Odoo, un software de gestión desarrollado en Paraguay y, si '
                    . 'tus procesos son muy particulares, un desarrollo propio. Compará el costo total a tres años: '
                    . 'licencias, implementación, adaptaciones y soporte.',
            ]],
            ['title' => 'Verificá la normativa local', 'body' => [
                'Confirmá que el sistema maneja IVA, timbrado y facturación electrónica del SIFEN, o que puede '
                    . 'conectarse con tu proveedor de facturación. Pedí que te lo muestren funcionando.',
            ]],
            ['title' => 'Ordená tus datos antes de migrar', 'body' => [
                'Depurá clientes duplicados, productos sin código y saldos que nadie sabe explicar. Un ERP nuevo '
                    . 'con datos desordenados repite los problemas de antes.',
            ]],
            ['title' => 'Capacitá y arrancá con acompañamiento', 'body' => [
                'Capacitá a cada persona en lo que usa, fijá una fecha de arranque y prevé algunas semanas de '
                    . 'soporte cercano. Durante ese tiempo, las consultas se resuelven rápido o el equipo vuelve '
                    . 'a la planilla.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Un ERP sirve para una empresa chica?', 'a' => 'Sí, si tenés stock, hay varias personas cargando datos o necesitás información confiable para decidir. Para un negocio muy chico, un sistema de punto de venta con facturación puede ser suficiente.'],
            ['q' => '¿Cuánto cuesta un ERP?', 'a' => 'Depende de la licencia, los módulos, los usuarios y las adaptaciones. Pedí siempre el costo total a tres años, no solo la implementación.'],
            ['q' => '¿Cuánto tarda implementarlo?', 'a' => 'Una primera etapa acotada suele llevar uno a tres meses. Los módulos siguientes se suman por etapas.'],
            ['q' => '¿El ERP reemplaza a mi contador?', 'a' => 'No. Te entrega información ordenada; la tarea contable e impositiva sigue siendo del profesional.'],
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
                           . 'decidir según cómo vende tu empresa por WhatsApp o con un ERP.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Kommo vs Odoo: cómo elegir tu CRM',
            'lead'    => 'Para empresas que están por implementar un CRM y dudan entre Kommo y Odoo CRM.',
        ],
        'intro' => [
            'Kommo es un CRM centrado en la venta por mensajería: WhatsApp, Instagram y otros canales llegan a '
                . 'una bandeja común y cada conversación se vincula a una oportunidad del embudo. Odoo es un '
                . 'conjunto de aplicaciones de gestión (ERP) donde el CRM es un módulo más, conectado con '
                . 'presupuestos, ventas, facturación y stock.',
            'No compiten exactamente en lo mismo. Estos pasos te ayudan a decidir cuál encaja con tu forma de '
                . 'vender. Verificá siempre precios y planes vigentes en el sitio de cada fabricante.',
        ],
        'steps' => [
            ['title' => 'Identificá tu canal principal de ventas', 'body' => [
                'Si la mayoría de tus ventas empieza y se cierra en conversaciones de WhatsApp o redes, Kommo '
                    . 'suele encajar mejor. Si la venta implica presupuestos formales, stock y facturación, Odoo '
                    . 'gana terreno.',
            ]],
            ['title' => 'Revisá qué otros sistemas usás', 'body' => [
                'Si ya usás o planeás usar Odoo como ERP, su módulo CRM evita integraciones. Si tu facturación y '
                    . 'stock están en otro sistema, Kommo se integra mediante conectores o desarrollo a medida.',
            ]],
            ['title' => 'Contá usuarios y calculá el costo mensual', 'body' => [
                'Ambos cobran por usuario en sus planes pagos. Multiplicá por la cantidad de vendedores y sumá '
                    . 'el costo de la API de WhatsApp si la usás.',
            ]],
            ['title' => 'Probá el día a día de un vendedor', 'body' => [
                'Usá las versiones de prueba con un caso real: recibir un mensaje, crear la oportunidad, '
                    . 'agendar el seguimiento y cerrarla. La herramienta que tu equipo use sin quejarse es la '
                    . 'correcta.',
            ]],
            ['title' => 'Evaluá automatizaciones', 'body' => [
                'Kommo ofrece bots y flujos de mensajería; Odoo automatiza a lo largo de todo el ciclo, de la '
                    . 'oportunidad a la factura. Decidí cuál automatización te ahorra más tiempo.',
            ]],
            ['title' => 'Decidí y planificá la implementación', 'body' => [
                'Definí las etapas del embudo, los campos obligatorios y los reportes antes de configurar. '
                    . 'Importá contactos y capacitá al equipo con acompañamiento las primeras semanas.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Puedo usar Kommo y Odoo juntos?', 'a' => 'Sí, algunas empresas usan Kommo para la conversación y Odoo para la gestión, conectados por una integración. Suma costo y mantenimiento, así que conviene justificarlo.'],
            ['q' => '¿Cuál es más barato?', 'a' => 'Depende de los usuarios, del plan y de si necesitás otros módulos de Odoo. Compará el costo total mensual con los precios vigentes de cada fabricante.'],
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
        'metaDescription' => 'Cómo elegir un sistema de punto de venta para tu comercio en Paraguay: factura '
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
            ['title' => 'Listá lo que pasa en tu mostrador', 'body' => [
                'Cuántas cajas, cuántas ventas por día, si usás balanza, si vendés a crédito, si hay delivery o '
                    . 'mesas. Esa lista define qué funciones son indispensables.',
            ]],
            ['title' => 'Confirme la facturación electrónica', 'body' => [
                'Verificá que el sistema emita documentos electrónicos del SIFEN o se conecte con un proveedor '
                    . 'habilitado. Consultá con tu contador si ya está obligado y desde cuándo.',
            ]],
            ['title' => 'Decida nube, instalado o mixto', 'body' => [
                'Si tu conexión a internet es inestable, priorizá sistemas que sigan vendiendo sin conexión. '
                    . 'Si tenés varias sucursales, la nube simplifica ver todo junto.',
            ]],
            ['title' => 'Revisá el control de caja', 'body' => [
                'Pedí ver una apertura, un arqueo y un cierre con varios medios de pago. Tiene que quedar registrado '
                    . 'quién cobró qué y las diferencias.',
            ]],
            ['title' => 'Verificá la conexión con stock y gestión', 'body' => [
                'Si ya tenés o planeás un ERP, el POS debe integrarse con él. Si no, que tenga al menos un '
                    . 'inventario básico con alertas de reposición.',
            ]],
            ['title' => 'Calculá el costo total', 'body' => [
                'Sumá la suscripción por caja, implementación, hardware y soporte a tres años. Compará con el '
                    . 'costo de seguir como está.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Puedo usar una tablet como caja?', 'a' => 'Sí, muchos sistemas funcionan en tablet. Verificá la compatibilidad con impresora y lector.'],
            ['q' => '¿Qué pasa con mis comprobantes si cambio de sistema?', 'a' => 'Los documentos electrónicos ya emitidos quedan registrados en el SIFEN. Conservá además una exportación de tu historial antes de cambiar.'],
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
        'metaDescription' => 'Cómo automatizar procesos con IA en tu empresa: elegir la tarea, medir el ahorro, '
                           . 'diseñar el flujo con revisión humana y ponerlo en marcha, paso a paso.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo automatizar procesos con IA en tu empresa',
            'lead'    => 'Para responsables de operaciones o administración que quieren empezar a automatizar '
                       . 'sin perder el control del proceso.',
        ],
        'intro' => [
            'Automatizar procesos con IA combina dos cosas: flujos que mueven datos entre sistemas siguiendo '
                . 'reglas fijas, y modelos de lenguaje que interpretan textos, documentos o mensajes donde las '
                . 'reglas fijas no alcanzan.',
            'Esta guía se centra en la aplicación práctica en una empresa. Para información general sobre '
                . 'inteligencia artificial, consultá inteligenciaartificial.com.py.',
        ],
        'steps' => [
            ['title' => 'Hacé un inventario de tareas repetitivas', 'body' => [
                'Pedí a cada área que anote durante una semana las tareas que repite: copiar datos, reenviar '
                    . 'correos, responder la misma pregunta, armar el mismo reporte.',
            ]],
            ['title' => 'Mida el tiempo que consumen', 'body' => [
                'Para cada tarea anote horas por semana y personas involucradas. Con el costo por hora obtenés '
                    . 'cuánto te cuesta hoy.',
            ]],
            ['title' => 'Elegí una sola tarea para empezar', 'body' => [
                'La mejor candidata es frecuente, con reglas claras y bajo riesgo si algo falla. Dejá para '
                    . 'después lo que involucra dinero o decisiones legales.',
            ]],
            ['title' => 'Diseñá el flujo con tus excepciones', 'body' => [
                'Definí qué dispara la automatización, qué pasos sigue, qué hace cuando un dato falta y en qué '
                    . 'punto revisa una persona.',
            ]],
            ['title' => 'Decidí qué datos salen de tu empresa', 'body' => [
                'Si el flujo usa servicios de IA externos, definí qué información se envía y revisá las '
                    . 'condiciones de uso del proveedor.',
            ]],
            ['title' => 'Probá en paralelo', 'body' => [
                'Durante unas semanas corré la automatización junto al proceso manual y compará resultados '
                    . 'antes de reemplazarlo.',
            ]],
            ['title' => 'Monitoreá y ampliá', 'body' => [
                'Configurá alertas de fallas, revisá el registro de ejecuciones y, cuando la primera tarea esté '
                    . 'estable, pasá a la siguiente de la lista.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Necesito programadores para automatizar?', 'a' => 'Para flujos simples existen plataformas sin código. Para integrar sistemas propios, manejar volúmenes altos o usar agentes de IA con control fino, conviene un desarrollo profesional.'],
            ['q' => '¿Es seguro usar IA con datos de clientes?', 'a' => 'Depende del proveedor y de qué datos envíes. Limitá la información al mínimo necesario y revisá las condiciones de uso.'],
            ['q' => '¿Cómo sé si conviene?', 'a' => 'Compará el costo mensual de la tarea manual con el costo de construir y operar la automatización. Nuestra calculadora de retorno ayuda a hacer esa cuenta.'],
        ],
        'relatedService' => 'automatizacion-ia',
        'toolLink'       => [
            'path'  => '/herramientas/roi-automatizacion/',
            'label' => 'Calculá el retorno',
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
            'h1'      => 'Cómo contratar programadores para tu proyecto',
            'lead'    => 'Para empresas sin área técnica que necesitan contratar desarrollo de software por '
                       . 'primera vez, o que ya tuvieron una mala experiencia.',
        ],
        'intro' => [
            'Contratar programadores es una decisión técnica y comercial a la vez. Los problemas más comunes no '
                . 'son de código: alcance poco claro, código que queda en manos del proveedor y ausencia de '
                . 'alguien que valide el trabajo.',
            'Esta guía cubre la contratación por proyecto o por outsourcing. Si buscás publicar una búsqueda '
                . 'laboral, consultá trabajo.com.py.',
        ],
        'steps' => [
            ['title' => 'Escribí qué necesitás en una página', 'body' => [
                'Qué problema resuelve el software, quién lo usa y qué debe hacer la primera versión. Sin esto, '
                    . 'las cotizaciones no son comparables.',
            ]],
            ['title' => 'Elegí la modalidad', 'body' => [
                'Proyecto cerrado con alcance fijo, bolsa de horas para mantenimiento o refuerzo de equipo con '
                    . 'desarrolladores asignados. Cada una tiene riesgos distintos.',
            ]],
            ['title' => 'Definí el perfil técnico', 'body' => [
                'Desarrollador web, full stack, móvil o especialista en integraciones. Si ya tenés un sistema, '
                    . 'la tecnología existente condiciona el perfil.',
            ]],
            ['title' => 'Pedí propuestas comparables', 'body' => [
                'Solicitá a cada proveedor alcance, entregas, tecnología, plazos, forma de pago y qué pasa con '
                    . 'los cambios. Desconfiá de propuestas sin preguntas.',
            ]],
            ['title' => 'Asegurá la propiedad del código', 'body' => [
                'El contrato debe establecer que el código, el repositorio, el servidor y el dominio son de tu '
                    . 'empresa, y que vos tenés los accesos desde el inicio.',
            ]],
            ['title' => 'Organizá el seguimiento', 'body' => [
                'Acordá entregas cortas, una reunión semanal y un entorno de prueba donde puedas ver avances '
                    . 'reales, no solo informes.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Freelancer o empresa?', 'a' => 'Un freelancer puede ser más económico para tareas acotadas; una empresa ofrece continuidad si alguien se va y varios perfiles. Evaluá el riesgo de depender de una sola persona.'],
            ['q' => '¿Cómo evalúo a un programador sin saber programar?', 'a' => 'Pedí ver trabajos anteriores funcionando, hablá con clientes previos y hacé una prueba pagada chica antes de un proyecto grande.'],
            ['q' => '¿Pago por hora o por proyecto?', 'a' => 'Por proyecto si el alcance está muy claro; por hora si va a cambiar o es mantenimiento. En ambos casos, con informes de avance.'],
        ],
        'relatedService' => 'programadores',
        'toolLink'       => [
            'path'  => '/herramientas/cotizador-app/',
            'label' => 'Ubicá tu proyecto',
            'text'  => 'Si tu proyecto es una app, el cotizador orientativo te da una primera referencia.',
        ],
        'related'        => ['que-es-un-erp', 'como-automatizar-procesos-con-ia'],
    ],
];
