<?php
/**
 * Phase "infra": sector landing pages under /soluciones/<slug>/. Same shape as content/segmentos.php.
 */

declare(strict_types=1);

return [

    'inmobiliarias' => [
        'path'            => '/soluciones/inmobiliarias/',
        'navLabel'        => 'Inmobiliarias',
        'seoTitle'        => 'Software para inmobiliarias',
        'metaDescription' => 'Software para inmobiliarias en Paraguay: portal de propiedades, CRM de '
                           . 'consultas, WhatsApp, cobro de alquileres y factura electrónica SIFEN.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software y web para inmobiliarias',
            'lead'    => 'Las consultas llegan por portales, WhatsApp e Instagram, y sin un sistema que las ordene los interesados se enfrían antes de que alguien los llame.',
        ],
        'leadSlug' => 'crm',
        'bundle'   => ['crm', 'paginas-web', 'whatsapp-business-api', 'facturacion-electronica-sifen', 'integracion-pagos'],
        'traps'    => [
            ['title' => 'Consultas repartidas en teléfonos personales', 'text' => 'Cuando un agente se va, se lleva los contactos y el historial de cada interesado.'],
            ['title' => 'Fichas de propiedades duplicadas', 'text' => 'La misma propiedad cargada a mano en el sitio y en cada portal, con precios que no coinciden.'],
            ['title' => 'Cobro de alquileres en planillas', 'text' => 'Recibos, comisiones y liquidaciones a propietarios calculados a mano, con errores que dañan la confianza.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que una inmobiliaria necesita',
                'body' => ['Un sitio con buscador de propiedades y fichas optimizadas para Google, un CRM que reciba cada consulta con su origen, respuestas por WhatsApp desde un número compartido, cobro de alquileres con pagos en línea y factura electrónica SIFEN por comisiones y administración.'],
                'items' => [
                    ['title' => 'Portal de propiedades', 'text' => 'Fichas con fotos, mapa y filtros, cargadas una vez.'],
                    ['title' => 'CRM de interesados', 'text' => 'Cada consulta asignada a un agente, con seguimiento.'],
                    ['title' => 'Administración de alquileres', 'text' => 'Vencimientos, recibos y liquidaciones a propietarios.'],
                ],
            ],
        ],
        'weNeed' => [
            'Cantidad de propiedades activas y de agentes',
            'Portales y redes donde publica hoy',
            'Si administra alquileres, cómo cobra y liquida actualmente',
        ],
        'faq' => [
            ['q' => '¿Pueden importar mis propiedades actuales?', 'a' => 'Sí, desde una planilla o desde el sitio existente, si los datos están ordenados.'],
            ['q' => '¿Se integra con WhatsApp?', 'a' => 'Sí, con la API de WhatsApp Business se pueden centralizar las conversaciones de varios agentes en un mismo número.'],
            ['q' => '¿Pueden emitir facturas electrónicas por las comisiones?', 'a' => 'Sí, el sistema puede integrarse con SIFEN para emitir documentos electrónicos.'],
        ],
    ],

    'clinicas' => [
        'path'            => '/soluciones/clinicas/',
        'navLabel'        => 'Clínicas y consultorios',
        'seoTitle'        => 'Software para clínicas y consultorios',
        'metaDescription' => 'Software para clínicas y consultorios en Paraguay: turnos en línea, '
                           . 'recordatorios por WhatsApp, historia clínica, cobros y factura SIFEN.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software para clínicas y consultorios',
            'lead'    => 'Las recepcionistas pasan el día confirmando turnos por teléfono, y cada paciente que no se presenta es una hora de agenda perdida.',
        ],
        'leadSlug' => 'desarrollo-de-software',
        'bundle'   => ['desarrollo-de-software', 'whatsapp-business-api', 'paginas-web', 'facturacion-electronica-sifen', 'integracion-pagos'],
        'traps'    => [
            ['title' => 'Agenda en papel o en varias planillas', 'text' => 'Turnos superpuestos y huecos que nadie ve a tiempo.'],
            ['title' => 'Sin recordatorios automáticos', 'text' => 'Los pacientes olvidan el turno y la agenda queda vacía.'],
            ['title' => 'Datos de salud en chats personales', 'text' => 'Estudios y diagnósticos enviados por WhatsApp personal, sin control de acceso.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que una clínica necesita',
                'body' => ['Turnos en línea por profesional y especialidad, recordatorios y confirmaciones por WhatsApp, historia clínica con permisos por rol, cobro con tarjeta o QR, facturación electrónica SIFEN y reportes de ocupación.'],
            ],
        ],
        'weNeed' => [
            'Cantidad de profesionales, especialidades y sedes',
            'Cómo se agenda y confirma hoy',
            'Si trabaja con seguros o prepagas y cómo factura',
        ],
        'faq' => [
            ['q' => '¿Los pacientes pueden sacar turno solos?', 'a' => 'Sí, desde el sitio web o por WhatsApp, con disponibilidad real de cada profesional.'],
            ['q' => '¿Cómo se protegen los datos de los pacientes?', 'a' => 'Con acceso por usuario y rol, conexiones cifradas y copias de seguridad. Para auditorías de seguridad recomendamos ciberseguridad.com.py.'],
            ['q' => '¿Se puede facturar electrónicamente desde el sistema?', 'a' => 'Sí, el sistema puede integrarse con SIFEN para emitir la factura al cerrar la consulta.'],
            ['q' => '¿Sirve para un consultorio con un solo profesional?', 'a' => 'Sí; el alcance se ajusta al tamaño, empezando por turnos y recordatorios.'],
        ],
    ],

    'estudios-contables' => [
        'path'            => '/soluciones/estudios-contables/',
        'navLabel'        => 'Estudios contables',
        'seoTitle'        => 'Software para estudios contables',
        'metaDescription' => 'Software para estudios contables en Paraguay: portal de clientes, carga de '
                           . 'comprobantes, integración SIFEN, vencimientos y automatización de tareas.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software para estudios contables',
            'lead'    => 'Cada mes los comprobantes llegan por WhatsApp, correo y en papel, y el estudio corre para cumplir vencimientos ante la DNIT.',
        ],
        'leadSlug' => 'facturacion-electronica-sifen',
        'bundle'   => ['facturacion-electronica-sifen', 'sistemas-erp', 'automatizacion-ia', 'desarrollo-de-software'],
        'traps'    => [
            ['title' => 'Comprobantes por todos los canales', 'text' => 'Horas de trabajo solo en juntar y ordenar lo que envía cada cliente.'],
            ['title' => 'Vencimientos en la memoria de alguien', 'text' => 'Un olvido se traduce en multas para el cliente y en reclamos para el estudio.'],
            ['title' => 'Carga manual de documentos electrónicos', 'text' => 'Transcribir facturas que ya existen en formato electrónico.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que un estudio contable necesita',
                'body' => ['Un portal donde cada cliente sube sus comprobantes, lectura automática de documentos electrónicos, calendario de vencimientos con avisos, integraciones con SIFEN para clientes que facturan y correo corporativo con dominio del estudio.'],
            ],
        ],
        'weNeed' => [
            'Cantidad de clientes y tipo (personas, pymes, empresas)',
            'Sistema contable que usa hoy',
            'Tareas que más horas consumen cada mes',
        ],
        'faq' => [
            ['q' => '¿Reemplazan mi sistema contable?', 'a' => 'No necesariamente. Lo habitual es integrar con el sistema que ya usa y automatizar lo que está alrededor.'],
            ['q' => '¿Pueden ayudar a clientes del estudio con SIFEN?', 'a' => 'Sí, podemos integrar los sistemas de sus clientes con la facturación electrónica.'],
            ['q' => '¿Los datos de los clientes quedan seguros?', 'a' => 'Se accede con usuario por cliente y permisos por rol, en servidores con copias de seguridad.'],
        ],
    ],

    'abogados' => [
        'path'            => '/soluciones/abogados/',
        'navLabel'        => 'Estudios jurídicos',
        'seoTitle'        => 'Software para abogados',
        'metaDescription' => 'Software para abogados y estudios jurídicos en Paraguay: expedientes, plazos, '
                           . 'portal de clientes, sitio web profesional y correo con dominio propio.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software y web para abogados',
            'lead'    => 'Plazos procesales, expedientes y honorarios repartidos entre carpetas, agendas y correos personales.',
        ],
        'leadSlug' => 'desarrollo-de-software',
        'bundle'   => ['desarrollo-de-software', 'paginas-web', 'crm', 'automatizacion-ia'],
        'traps'    => [
            ['title' => 'Plazos en agendas individuales', 'text' => 'Si el abogado responsable se ausenta, nadie más ve el vencimiento.'],
            ['title' => 'Correo del estudio en cuentas gratuitas', 'text' => 'Resta seriedad y deja la correspondencia del cliente fuera del control del estudio.'],
            ['title' => 'Honorarios sin seguimiento', 'text' => 'Cuotas pactadas que nadie reclama a tiempo.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que un estudio jurídico necesita',
                'body' => ['Gestión de expedientes con plazos y alertas, documentos compartidos con control de acceso, seguimiento de honorarios, un sitio web profesional por áreas de práctica y correo corporativo con retención.'],
            ],
        ],
        'weNeed' => [
            'Cantidad de abogados y áreas de práctica',
            'Cómo registra hoy expedientes y plazos',
            'Si necesita portal para que el cliente consulte su caso',
        ],
        'faq' => [
            ['q' => '¿El correo puede conservar mensajes para auditoría?', 'a' => 'Sí, algunos planes de Google Workspace incluyen retención y búsqueda de correos con Vault.'],
            ['q' => '¿Se puede dar acceso al cliente a su expediente?', 'a' => 'Sí, con un portal donde cada cliente ve solo sus casos y documentos.'],
            ['q' => '¿Hacen el sitio web del estudio?', 'a' => 'Sí, con páginas por área de práctica pensadas para aparecer en Google.'],
        ],
    ],

    'restaurantes' => [
        'path'            => '/soluciones/restaurantes/',
        'navLabel'        => 'Restaurantes',
        'seoTitle'        => 'Software para restaurantes',
        'metaDescription' => 'Software para restaurantes en Paraguay: punto de venta, comandas, pedidos '
                           . 'por WhatsApp, menú digital, pagos con QR y factura electrónica SIFEN.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software para restaurantes',
            'lead'    => 'En hora pico, las comandas en papel, los pedidos de WhatsApp y las apps de delivery compiten por la misma cocina.',
        ],
        'leadSlug' => 'punto-de-venta',
        'bundle'   => ['punto-de-venta', 'facturacion-electronica-sifen', 'integracion-pagos', 'whatsapp-business-api', 'paginas-web'],
        'traps'    => [
            ['title' => 'Pedidos que se pierden entre canales', 'text' => 'WhatsApp, teléfono y apps sin una pantalla única en cocina.'],
            ['title' => 'Stock de insumos sin control', 'text' => 'Se descubre que falta un ingrediente cuando ya se vendió el plato.'],
            ['title' => 'Facturación lenta en caja', 'text' => 'Filas en el mostrador por un sistema que no emite rápido la factura electrónica.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que un restaurante necesita',
                'body' => ['Punto de venta con comandas a cocina, menú digital con pedidos, recepción de pedidos por WhatsApp, cobro con tarjeta y QR, factura electrónica SIFEN desde la caja y control de insumos por receta.'],
            ],
        ],
        'weNeed' => [
            'Cantidad de locales, cajas y mesas',
            'Canales de pedido actuales (salón, delivery, apps)',
            'Sistema de caja y facturación que usa hoy',
        ],
        'faq' => [
            ['q' => '¿Funciona si se corta internet?', 'a' => 'Un punto de venta bien diseñado sigue operando y sincroniza al volver la conexión; lo definimos en el alcance.'],
            ['q' => '¿Puedo recibir pedidos por WhatsApp de forma ordenada?', 'a' => 'Sí, con un menú automatizado que envía el pedido al sistema.'],
            ['q' => '¿Emite factura electrónica?', 'a' => 'Sí, integrada con SIFEN al cerrar cada venta.'],
        ],
    ],

    'logistica' => [
        'path'            => '/soluciones/logistica/',
        'navLabel'        => 'Logística y transporte',
        'seoTitle'        => 'Software para logística y transporte',
        'metaDescription' => 'Software para logística en Paraguay: seguimiento de envíos, app para '
                           . 'choferes, avisos por WhatsApp, remisiones electrónicas y facturación.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software para logística y transporte',
            'lead'    => 'El cliente llama para preguntar dónde está su envío, y la respuesta depende de que alguien consiga hablar con el chofer.',
        ],
        'leadSlug' => 'desarrollo-de-software',
        'bundle'   => ['desarrollo-de-software', 'desarrollo-de-apps', 'sistemas-erp', 'facturacion-electronica-sifen', 'whatsapp-business-api'],
        'traps'    => [
            ['title' => 'Estados de envío por teléfono', 'text' => 'Horas de atención dedicadas a responder la misma pregunta.'],
            ['title' => 'Comprobantes de entrega en papel', 'text' => 'Se pierden, llegan tarde a administración y demoran la facturación.'],
            ['title' => 'Remisiones cargadas a mano', 'text' => 'Doble carga entre el sistema interno y los documentos que exige la DNIT.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que una empresa de logística necesita',
                'body' => ['Seguimiento de envíos con estados, app para choferes con foto y firma de entrega, avisos automáticos al cliente por WhatsApp, nota de remisión y factura electrónica SIFEN, e integración con el sistema de gestión.'],
            ],
        ],
        'weNeed' => [
            'Cantidad de vehículos, choferes y envíos diarios',
            'Cómo registra hoy los estados y las entregas',
            'Sistema de gestión y facturación actual',
        ],
        'faq' => [
            ['q' => '¿Los choferes necesitan un teléfono especial?', 'a' => 'No, la app funciona en teléfonos Android de uso común.'],
            ['q' => '¿Se emiten remisiones electrónicas?', 'a' => 'Sí, el sistema puede integrarse con SIFEN para emitir notas de remisión electrónicas.'],
            ['q' => '¿El cliente puede ver el estado sin llamar?', 'a' => 'Sí, con un enlace de seguimiento o un aviso automático por WhatsApp.'],
        ],
    ],

    'agro' => [
        'path'            => '/soluciones/agro/',
        'navLabel'        => 'Agro y ganadería',
        'seoTitle'        => 'Software para el agro y la ganadería',
        'metaDescription' => 'Software para el agro en Paraguay: gestión de campo, lotes, hacienda, acopio, '
                           . 'apps sin conexión, facturación electrónica e integración con su ERP.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software para el agro y la ganadería',
            'lead'    => 'Lo que pasa en el campo llega a la oficina días después, en cuadernos o mensajes, y las decisiones se toman con datos viejos.',
        ],
        'leadSlug' => 'sistemas-erp',
        'bundle'   => ['sistemas-erp', 'desarrollo-de-apps', 'facturacion-electronica-sifen', 'desarrollo-de-software'],
        'traps'    => [
            ['title' => 'Registros de campo en papel', 'text' => 'Aplicaciones, pesajes y movimientos que se transcriben tarde y con errores.'],
            ['title' => 'Apps que no funcionan sin señal', 'text' => 'Herramientas pensadas para la ciudad que fallan en el establecimiento.'],
            ['title' => 'Costos por lote sin calcular', 'text' => 'Se sabe el resultado del año, pero no qué lote o potrero lo generó.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que una empresa agropecuaria necesita',
                'body' => ['Apps de carga en el campo que funcionen sin conexión, gestión de lotes, insumos y hacienda, acopio y romaneos, facturación electrónica SIFEN y tableros de costos por lote para la dirección.'],
            ],
        ],
        'weNeed' => [
            'Actividades (agricultura, ganadería, acopio) y cantidad de establecimientos',
            'Qué registros se hacen hoy en el campo y cómo',
            'Sistema de gestión y contable actual',
        ],
        'faq' => [
            ['q' => '¿Funciona sin internet en el campo?', 'a' => 'Sí, las apps pueden guardar los datos en el teléfono y sincronizar al recuperar señal.'],
            ['q' => '¿Se integra con mi sistema contable?', 'a' => 'Sí, integramos con el sistema existente en lugar de reemplazarlo cuando conviene.'],
            ['q' => '¿Emite facturas electrónicas por ventas de granos o hacienda?', 'a' => 'El sistema puede integrarse con SIFEN; los tipos de documento se definen según su operación y su contador.'],
        ],
    ],

    'colegios' => [
        'path'            => '/soluciones/colegios/',
        'navLabel'        => 'Colegios',
        'seoTitle'        => 'Software para colegios',
        'metaDescription' => 'Software para colegios en Paraguay: cobro de cuotas en línea, portal para '
                           . 'padres, avisos por WhatsApp, correo institucional y factura electrónica.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software para colegios',
            'lead'    => 'Cobrar cuotas, avisar a los padres y emitir facturas ocupa a la administración más que cualquier otra tarea.',
        ],
        'leadSlug' => 'desarrollo-de-software',
        'bundle'   => ['desarrollo-de-software', 'integracion-pagos', 'facturacion-electronica-sifen', 'whatsapp-business-api', 'paginas-web'],
        'traps'    => [
            ['title' => 'Cuotas cobradas en ventanilla', 'text' => 'Filas, efectivo y conciliaciones manuales cada mes.'],
            ['title' => 'Avisos por grupos informales', 'text' => 'Información que no llega a todos y datos de familias en chats sin control.'],
            ['title' => 'Cuentas de correo personales para docentes', 'text' => 'Cuando un docente se va, el colegio pierde la comunicación y los archivos.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que un colegio necesita',
                'body' => ['Cobro de cuotas con pagos en línea y débito, factura electrónica SIFEN por cada pago, portal de padres con estado de cuenta y comunicados, avisos por WhatsApp y correo institucional para docentes y alumnos.'],
            ],
        ],
        'weNeed' => [
            'Cantidad de alumnos, niveles y sedes',
            'Cómo se cobran y facturan hoy las cuotas',
            'Canales de comunicación con las familias',
        ],
        'faq' => [
            ['q' => '¿Los padres pueden pagar en línea?', 'a' => 'Sí, con pasarelas locales de pago, y la factura se emite automáticamente.'],
            ['q' => '¿Pueden configurar correos institucionales?', 'a' => 'Sí, con Google Workspace y su dominio, con casillas para personal y, si lo desea, para alumnos.'],
            ['q' => '¿Se puede avisar deudas automáticamente?', 'a' => 'Sí, con recordatorios por WhatsApp o correo antes y después del vencimiento.'],
        ],
    ],

    'gimnasios' => [
        'path'            => '/soluciones/gimnasios/',
        'navLabel'        => 'Gimnasios',
        'seoTitle'        => 'Software para gimnasios',
        'metaDescription' => 'Software para gimnasios en Paraguay: membresías, control de acceso, reservas '
                           . 'de clases, cobro recurrente, avisos por WhatsApp y factura electrónica.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software para gimnasios',
            'lead'    => 'Socios con la cuota vencida que siguen entrando, clases llenas sin reserva y renovaciones que nadie recuerda.',
        ],
        'leadSlug' => 'desarrollo-de-apps',
        'bundle'   => ['desarrollo-de-apps', 'integracion-pagos', 'whatsapp-business-api', 'paginas-web', 'facturacion-electronica-sifen'],
        'traps'    => [
            ['title' => 'Control de acceso manual', 'text' => 'En la recepción no se sabe quién está al día.'],
            ['title' => 'Cobro mes a mes en efectivo', 'text' => 'Cada renovación depende de que el socio se acuerde.'],
            ['title' => 'Clases sin reserva', 'text' => 'Salas llenas un día y vacías al siguiente.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que un gimnasio necesita',
                'body' => ['Gestión de socios y membresías, control de acceso por QR, reserva de clases desde una app o web, cobro recurrente con tarjeta, recordatorios por WhatsApp y factura electrónica SIFEN.'],
            ],
        ],
        'weNeed' => [
            'Cantidad de socios, sedes y tipos de plan',
            'Cómo controla hoy el acceso y los pagos',
            'Si ofrece clases con cupo',
        ],
        'faq' => [
            ['q' => '¿Se puede cobrar la cuota automáticamente?', 'a' => 'Sí, con débito recurrente a tarjeta a través de pasarelas locales, según lo que cada una ofrezca.'],
            ['q' => '¿Los socios pueden reservar desde el celular?', 'a' => 'Sí, desde una app o una web adaptada al teléfono.'],
            ['q' => '¿Sirve para varias sedes?', 'a' => 'Sí, con socios y reportes por sede o combinados.'],
        ],
    ],

    'comercios-y-farmacias' => [
        'path'            => '/soluciones/comercios-y-farmacias/',
        'navLabel'        => 'Comercios y farmacias',
        'seoTitle'        => 'Software para comercios y farmacias',
        'metaDescription' => 'Software para comercios y farmacias en Paraguay: punto de venta, stock, '
                           . 'vencimientos, tienda online, cobros con QR y factura electrónica SIFEN.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software para comercios y farmacias',
            'lead'    => 'Stock que no coincide con la góndola, productos que vencen en el depósito y una caja que tarda en facturar.',
        ],
        'leadSlug' => 'punto-de-venta',
        'bundle'   => ['punto-de-venta', 'facturacion-electronica-sifen', 'ecommerce', 'integracion-pagos', 'sistemas-erp'],
        'traps'    => [
            ['title' => 'Stock que nadie actualiza', 'text' => 'Se vende en la tienda online algo que no hay en el local.'],
            ['title' => 'Vencimientos sin control', 'text' => 'En farmacias, lotes que vencen sin que nadie los vea venir.'],
            ['title' => 'Caja lenta en horas pico', 'text' => 'Un sistema que no emite rápido la factura electrónica espanta clientes.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que un comercio necesita',
                'body' => ['Punto de venta rápido con código de barras, stock por sucursal y por lote con alertas de vencimiento, tienda online sincronizada, cobros con tarjeta y QR y factura electrónica SIFEN desde la caja.'],
            ],
        ],
        'weNeed' => [
            'Cantidad de sucursales, cajas y productos',
            'Sistema de caja y stock actual',
            'Si vende o quiere vender en línea',
        ],
        'faq' => [
            ['q' => '¿Pueden migrar mis productos actuales?', 'a' => 'Sí, desde el sistema anterior o desde planillas.'],
            ['q' => '¿Controla lotes y vencimientos?', 'a' => 'Sí, con alertas antes del vencimiento, algo clave en farmacias.'],
            ['q' => '¿La tienda online comparte stock con el local?', 'a' => 'Sí, ambos trabajan sobre el mismo inventario.'],
        ],
    ],

    'cooperativas' => [
        'path'            => '/soluciones/cooperativas/',
        'navLabel'        => 'Cooperativas',
        'seoTitle'        => 'Software para cooperativas',
        'metaDescription' => 'Software para cooperativas en Paraguay: portal y app para socios, consulta '
                           . 'de saldos, pagos en línea, avisos por WhatsApp e integración con el core.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software para cooperativas',
            'lead'    => 'Los socios quieren consultar su saldo y pagar su cuota desde el celular, y el sistema central no fue pensado para eso.',
        ],
        'leadSlug' => 'sistemas-erp',
        'bundle'   => ['sistemas-erp', 'desarrollo-de-apps', 'integracion-pagos', 'facturacion-electronica-sifen', 'whatsapp-business-api'],
        'traps'    => [
            ['title' => 'Todo pasa por la ventanilla', 'text' => 'Consultas simples que llenan la sede.'],
            ['title' => 'Canales digitales aislados del core', 'text' => 'Apps que muestran datos desactualizados porque no están integradas.'],
            ['title' => 'Comunicación masiva sin segmentar', 'text' => 'Avisos de vencimiento que llegan a quien no corresponde.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que una cooperativa necesita',
                'body' => ['Portal web y app para socios con saldos y extractos, pago de cuotas en línea, integración segura con el sistema central, avisos de vencimiento por WhatsApp y facturación electrónica SIFEN.'],
            ],
        ],
        'weNeed' => [
            'Cantidad de socios y servicios ofrecidos',
            'Sistema central (core) y si expone una API',
            'Qué trámites quiere llevar a canales digitales',
        ],
        'faq' => [
            ['q' => '¿Reemplazan el sistema central?', 'a' => 'No, normalmente construimos los canales digitales integrados al core existente.'],
            ['q' => '¿Qué pasa con la seguridad de los datos?', 'a' => 'Se diseña con autenticación, cifrado y permisos. Para auditorías recomendamos ciberseguridad.com.py.'],
            ['q' => '¿Los socios pueden pagar cuotas en línea?', 'a' => 'Sí, con pasarelas de pago locales conectadas al sistema.'],
        ],
    ],

    'concesionarias' => [
        'path'            => '/soluciones/concesionarias/',
        'navLabel'        => 'Concesionarias',
        'seoTitle'        => 'Software para concesionarias',
        'metaDescription' => 'Software para concesionarias en Paraguay: catálogo de vehículos, CRM de '
                           . 'ventas, WhatsApp, turnos de taller, financiación y factura electrónica.',
        'hero' => [
            'eyebrow' => 'Soluciones por rubro',
            'h1'      => 'Software para concesionarias',
            'lead'    => 'Un interesado en un vehículo consulta a tres concesionarias el mismo día: gana la que responde primero y hace el seguimiento.',
        ],
        'leadSlug' => 'crm',
        'bundle'   => ['crm', 'paginas-web', 'whatsapp-business-api', 'sistemas-erp', 'facturacion-electronica-sifen'],
        'traps'    => [
            ['title' => 'Leads sin seguimiento', 'text' => 'Consultas de la web y redes que nadie retoma después del primer contacto.'],
            ['title' => 'Catálogo desactualizado', 'text' => 'Vehículos vendidos que siguen publicados.'],
            ['title' => 'Taller y ventas desconectados', 'text' => 'El cliente vuelve al service y nadie ve su historial de compra.'],
        ],
        'sections' => [
            [
                'h2'   => 'Lo que una concesionaria necesita',
                'body' => ['Catálogo web de 0 km y usados, CRM de ventas con asignación de vendedores, atención por WhatsApp, simulador de financiación, turnos de taller y factura electrónica SIFEN integrada a la gestión.'],
            ],
        ],
        'weNeed' => [
            'Cantidad de vehículos en stock y vendedores',
            'De dónde llegan hoy las consultas',
            'Si tiene taller y cómo agenda los turnos',
        ],
        'faq' => [
            ['q' => '¿Se puede asignar cada consulta a un vendedor?', 'a' => 'Sí, automáticamente por rotación o por marca, con alertas si no se responde.'],
            ['q' => '¿Incluye turnos para el taller?', 'a' => 'Sí, con reserva en línea y recordatorios por WhatsApp.'],
            ['q' => '¿El catálogo se actualiza solo?', 'a' => 'Puede conectarse al sistema de stock para que un vehículo vendido se retire de la web.'],
        ],
    ],
];
