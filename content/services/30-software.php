<?php
/**
 * Phase "software": custom software, apps, ERP (+ contable, inventario, punto de
 * venta), CRM, automatización con IA, programadores y MVP. Same record shape as
 * content/services.php.
 */

declare(strict_types=1);

return [

    'desarrollo-de-software' => [
        'path'            => '/servicios/desarrollo-de-software/',
        'title'           => 'Desarrollo de software a medida',
        'navLabel'        => 'Software a medida',
        'cluster'         => 'software',
        'parent'          => null,
        'seoTitle'        => 'Desarrollo de software a medida',
        'metaDescription' => 'Desarrollo de software a medida en Paraguay: sistemas web, portales internos '
                           . 'e integraciones para empresas, con alcance por etapas y código propio.',
        'hero' => [
            'eyebrow' => 'Software a medida',
            'h1'      => 'Desarrollo de software a medida para empresas en Paraguay',
            'h2'      => 'Sistemas que siguen su proceso, no al revés.',
            'lead'    => 'El desarrollo de software a medida tiene sentido cuando ninguna planilla ni '
                       . 'programa enlatado resuelve bien cómo trabaja su empresa. Diseñamos, programamos '
                       . 'y ponemos en producción sistemas web y portales internos, con el alcance '
                       . 'dividido en etapas para que usted vea resultados antes de invertir en la siguiente.',
        ],
        'includes' => [
            'Relevamiento del proceso con las personas que lo usan todos los días',
            'Documento de alcance con pantallas, roles de usuario y reglas de negocio',
            'Prototipo navegable antes de programar',
            'Desarrollo por entregas cortas, con una versión de prueba para revisar',
            'Base de datos, panel de administración y permisos por rol',
            'Integraciones con facturación electrónica SIFEN, pasarelas de pago o WhatsApp cuando corresponde',
            'Puesta en producción, copias de seguridad automáticas y manual de uso',
            'Entrega del código fuente y de los accesos a su nombre',
        ],
        'excludes' => [
            'Licencias de software de terceros (por ejemplo, APIs pagas o servicios en la nube)',
            'Carga masiva de datos históricos desde fuentes desordenadas, que se cotiza aparte',
            'Auditorías de seguridad o pruebas de penetración (vea ciberseguridad.com.py)',
        ],
        'weNeed' => [
            'Una persona de su empresa que conozca el proceso y pueda decidir',
            'Ejemplos reales: planillas, formularios, comprobantes y reportes que usan hoy',
            'Acceso a los sistemas con los que el nuevo software debe conectarse',
            'Una hora por semana para revisar cada entrega',
        ],
        'sections' => [
            [
                'h2'   => 'Cuándo conviene el software a medida y cuándo no',
                'body' => [
                    'Un software a medida no siempre es la respuesta. Si su necesidad es la de muchas '
                        . 'empresas (facturar, llevar un inventario simple, vender en mostrador), un sistema '
                        . 'existente suele ser más barato y más rápido de implementar. Se lo decimos antes de '
                        . 'cotizar.',
                    'El desarrollo a medida se justifica cuando su forma de trabajar es parte de su ventaja: '
                        . 'un circuito de aprobaciones propio, un cálculo de precios que ningún programa hace, '
                        . 'un portal para sus clientes o proveedores, o la necesidad de unir en un solo lugar '
                        . 'datos que hoy viven en tres planillas y dos sistemas que no se hablan.',
                    'También se justifica cuando el costo de las licencias por usuario de un sistema enlatado, '
                        . 'multiplicado por varios años, supera lo que cuesta construir algo propio que usted '
                        . 'controla.',
                ],
                'items' => [
                    ['title' => 'Conviene', 'text' => 'Procesos propios, integraciones entre sistemas, portales para clientes, reglas de negocio que cambian seguido.'],
                    ['title' => 'No conviene', 'text' => 'Necesidades estándar que un ERP, CRM o sistema de punto de venta ya resuelve bien.'],
                    ['title' => 'Mixto', 'text' => 'Un sistema existente más un módulo a medida que cubre lo que le falta.'],
                ],
            ],
            [
                'h2'   => 'Cómo trabajamos un proyecto de desarrollo de software',
                'body' => [
                    'Las empresas de desarrollo de software que entregan todo al final corren un riesgo alto: '
                        . 'lo que se entrega ya no coincide con lo que el cliente necesitaba. Por eso dividimos '
                        . 'el trabajo en etapas cortas y cada una termina con algo que usted puede usar o probar.',
                ],
                'items' => [
                    ['title' => '1. Relevamiento', 'text' => 'Entrevistas con los usuarios, revisión de planillas y documentos, y un mapa del proceso actual.'],
                    ['title' => '2. Alcance y prototipo', 'text' => 'Pantallas navegables y un documento que define qué entra en la primera versión y qué queda para después.'],
                    ['title' => '3. Desarrollo por entregas', 'text' => 'Entregas cada una o dos semanas en un entorno de prueba con datos de ejemplo.'],
                    ['title' => '4. Puesta en producción', 'text' => 'Migración de datos, capacitación y acompañamiento las primeras semanas de uso real.'],
                    ['title' => '5. Mantenimiento', 'text' => 'Correcciones, actualizaciones de seguridad y nuevas funciones según un plan acordado.'],
                ],
            ],
            [
                'h2'   => 'Tecnología: elegimos lo que usted pueda mantener',
                'body' => [
                    'Los desarrolladores de software tienden a elegir la herramienta de moda. Nosotros '
                        . 'priorizamos tecnologías conocidas y con muchos profesionales disponibles en Paraguay '
                        . '(por ejemplo PHP, JavaScript y TypeScript, Python, bases de datos MySQL o PostgreSQL), '
                        . 'para que el día de mañana otro equipo pueda continuar el trabajo si usted lo decide.',
                    'El sistema se aloja en un servidor o servicio en la nube a nombre de su empresa, con copias '
                        . 'de seguridad automáticas. El código queda en un repositorio al que usted tiene acceso '
                        . 'desde el primer día.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo de un software a medida',
                'body' => [
                    'No publicamos un precio fijo porque dos sistemas con el mismo nombre pueden diferir en diez '
                        . 'veces el trabajo. Lo que más pesa en el presupuesto es la cantidad de pantallas y roles, '
                        . 'la complejidad de las reglas de negocio, las integraciones con otros sistemas y la '
                        . 'calidad de los datos que hay que migrar.',
                    'Como referencia, en el mercado paraguayo un sistema interno acotado suele empezar en '
                        . 'algunas decenas de millones de guaraníes y un sistema con varios módulos e integraciones '
                        . 'puede superar los cien millones. Son rangos orientativos del mercado, a confirmar con '
                        . 'presupuesto después del relevamiento.',
                ],
            ],
            [
                'h2'   => 'Integraciones frecuentes en empresas paraguayas',
                'body' => [
                    'La mayoría de los sistemas que construimos necesitan hablar con algo más: la facturación '
                        . 'electrónica del SIFEN, una pasarela de pagos local, WhatsApp para notificar a clientes, '
                        . 'el sistema contable que ya usa su estudio, o una planilla que no se puede abandonar de '
                        . 'un día para otro. Esas conexiones se definen en el alcance y se prueban con datos reales '
                        . 'antes de la puesta en producción.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'El sistema es suyo', 'text' => 'Código, base de datos y accesos quedan a nombre de su empresa.'],
            ['title' => 'Sin licencias por usuario', 'text' => 'Puede sumar usuarios sin que suba un costo mensual por cabeza.'],
            ['title' => 'Resultados por etapas', 'text' => 'Usted ve y prueba cada entrega antes de aprobar la siguiente.'],
            ['title' => 'Mantenible por terceros', 'text' => 'Tecnologías conocidas y documentación para que no dependa de una sola persona.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto demora desarrollar un software a medida?',
                'a' => 'Una primera versión acotada suele estar en uso en uno a tres meses. Un sistema con varios '
                     . 'módulos se construye en etapas durante varios meses, pero la primera etapa ya entra en '
                     . 'producción antes de que termine el resto.',
            ],
            [
                'q' => '¿El código fuente queda a mi nombre?',
                'a' => 'Sí. El repositorio, el servidor y el dominio quedan a nombre de su empresa y le entregamos '
                     . 'los accesos. Si en el futuro decide trabajar con otro equipo, puede hacerlo.',
            ],
            [
                'q' => '¿Qué pasa si durante el proyecto cambian los requisitos?',
                'a' => 'Es normal. Los cambios se anotan, se estiman y se ubican en la etapa que corresponda. Lo '
                     . 'que ya está aprobado no se rehace sin que usted lo decida.',
            ],
            [
                'q' => '¿Pueden continuar un sistema que hizo otra empresa?',
                'a' => 'Sí, después de revisar el código y la documentación disponible. A veces conviene '
                     . 'continuarlo y a veces rehacer partes; se lo explicamos con el diagnóstico en la mano.',
            ],
            [
                'q' => '¿Ofrecen mantenimiento después de la entrega?',
                'a' => 'Sí, con un plan mensual que cubre correcciones, actualizaciones y un número acordado de '
                     . 'horas para mejoras. También puede contratar mantenimiento solo cuando lo necesite.',
            ],
            [
                'q' => '¿El sistema funciona en el celular?',
                'a' => 'Los sistemas web que desarrollamos se adaptan a la pantalla del celular. Si necesita una '
                     . 'aplicación instalable con funciones del teléfono, lo evaluamos como desarrollo de app.',
            ],
        ],
        'cta'       => ['label' => 'Contar mi proyecto', 'whatsappText' => ''],
        'related' => ['sistemas-erp', 'automatizacion-ia', 'programadores', 'facturacion-electronica-sifen', 'integraciones-api'],
        'guides'    => ['como-contratar-programadores', 'que-es-un-erp'],
        'articles'  => [],
        'toolLinks' => [
            [
                'path'  => '/herramientas/roi-automatizacion/',
                'label' => 'Calcule el ahorro',
                'text'  => 'Estime cuántas horas y guaraníes le ahorra automatizar una tarea manual.',
            ],
        ],
    ],

    'desarrollo-de-apps' => [
        'path'            => '/servicios/desarrollo-de-apps/',
        'title'           => 'Desarrollo de apps móviles',
        'navLabel'        => 'Apps móviles',
        'cluster'         => 'software',
        'parent'          => null,
        'seoTitle'        => 'Desarrollo de apps móviles en Paraguay',
        'metaDescription' => 'Desarrollo de apps móviles para Android e iOS en Paraguay: crear una app con '
                           . 'login, pagos y panel de administración, publicada en las tiendas.',
        'hero' => [
            'eyebrow' => 'Apps móviles',
            'h1'      => 'Desarrollo de apps móviles para Android e iOS',
            'h2'      => 'Crear una app que la gente use más de una vez.',
            'lead'    => 'Si quiere crear una app para sus clientes, su equipo de campo o un nuevo negocio, '
                       . 'nos ocupamos del desarrollo de apps de punta a punta: definición, diseño, '
                       . 'programación de aplicaciones móviles para Android e iOS, panel de administración '
                       . 'y publicación en Google Play y App Store.',
        ],
        'includes' => [
            'Definición de funciones y del flujo principal del usuario',
            'Diseño de pantallas y prototipo navegable',
            'Desarrollo multiplataforma (una base de código para Android e iOS) o nativo cuando se justifica',
            'Registro e inicio de sesión de usuarios',
            'Panel web de administración para gestionar contenidos, usuarios y pedidos',
            'Notificaciones push',
            'Integración con pasarelas de pago locales cuando la app cobra',
            'Publicación en Google Play y App Store con las cuentas de su empresa',
        ],
        'excludes' => [
            'Costos de las cuentas de desarrollador de Google y Apple (se pagan a su nombre)',
            'Campañas de marketing para conseguir descargas',
            'Producción de fotos, videos o textos de catálogo',
        ],
        'weNeed' => [
            'Una descripción de quién usará la app y para qué',
            'Su logo y la identidad visual de la marca',
            'Cuentas de desarrollador de Google Play y Apple a nombre de la empresa',
            'Acceso a los sistemas o datos con los que la app debe conectarse',
        ],
        'sections' => [
            [
                'h2'   => 'Antes de crear una app: ¿la necesita?',
                'body' => [
                    'Muchas ideas de app funcionan igual de bien como una web app: una página que se abre en el '
                        . 'navegador del celular, se puede agregar a la pantalla de inicio y no pasa por la '
                        . 'aprobación de las tiendas. Cuesta menos y se actualiza al instante.',
                    'Una app instalable se justifica cuando necesita funciones del teléfono (cámara, ubicación '
                        . 'en segundo plano, funcionamiento sin conexión, notificaciones frecuentes), cuando el '
                        . 'usuario la abre muchas veces por semana, o cuando estar en Google Play y App Store es '
                        . 'parte de la propuesta.',
                ],
                'items' => [
                    ['title' => 'Web app', 'text' => 'Catálogos, reservas, portales de clientes y formularios. Rápida de lanzar.'],
                    ['title' => 'App multiplataforma', 'text' => 'Una sola base de código para Android e iOS. La opción más común.'],
                    ['title' => 'App nativa', 'text' => 'Para usos intensivos de hardware o rendimiento muy exigente.'],
                ],
            ],
            [
                'h2'   => 'Desarrollo de apps paso a paso',
                'body' => [
                    'El desarrollo de apps falla más por un alcance mal definido que por problemas técnicos. '
                        . 'Por eso la primera etapa es decidir qué hace la primera versión y qué queda para después.',
                ],
                'items' => [
                    ['title' => 'Definición', 'text' => 'Usuarios, funciones indispensables, pantallas y datos que se guardan.'],
                    ['title' => 'Diseño', 'text' => 'Prototipo navegable que usted puede probar en su propio celular.'],
                    ['title' => 'Desarrollo', 'text' => 'App, servidor y panel de administración, con versiones de prueba periódicas.'],
                    ['title' => 'Publicación', 'text' => 'Preparación de fichas, capturas y políticas para la revisión de las tiendas.'],
                    ['title' => 'Evolución', 'text' => 'Actualizaciones del sistema operativo, correcciones y nuevas funciones.'],
                ],
            ],
            [
                'h2'   => 'Aplicaciones móviles con pagos, login y panel de administración',
                'body' => [
                    'Detrás de casi toda app hay un servidor que guarda los datos y un panel para que su equipo '
                        . 'administre usuarios, productos, pedidos o contenidos. Lo construimos junto con la app, '
                        . 'no como un agregado posterior.',
                    'Si la app cobra, la integramos con una pasarela de pagos que opere en Paraguay y acepte '
                        . 'tarjetas y billeteras locales. Tenga en cuenta que Apple y Google tienen reglas sobre '
                        . 'qué pagos deben pasar por sus propios sistemas de compra dentro de la app; lo revisamos '
                        . 'al definir el modelo de negocio.',
                ],
            ],
            [
                'h2'   => 'Apps Android: la mayoría de sus usuarios',
                'body' => [
                    'En Paraguay la gran mayoría de los teléfonos usa Android, y muchos son equipos de gama '
                        . 'media o baja. Diseñamos pensando en eso: pantallas livianas, consumo de datos moderado '
                        . 'y pruebas en equipos reales, no solo en el teléfono más nuevo del mercado.',
                    'Si su público es principalmente corporativo o de alto poder adquisitivo, la proporción de '
                        . 'iPhone sube y conviene lanzar en ambas tiendas desde el primer día.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo de una app',
                'body' => [
                    'Las variables que más mueven el presupuesto son: en cuántas plataformas se publica, si hay '
                        . 'registro de usuarios, si hay pagos, cuántas pantallas tiene, qué integraciones necesita '
                        . 'y cuán completo debe ser el panel de administración. Nuestro cotizador orientativo le '
                        . 'ayuda a ubicar su idea antes de hablar con nosotros.',
                    'Como referencia, en el mercado paraguayo una app sencilla con panel básico suele partir de '
                        . 'algunas decenas de millones de guaraníes, y una app con pagos, varios roles e '
                        . 'integraciones puede superar holgadamente los cien millones. Rangos orientativos del '
                        . 'mercado, a confirmar con presupuesto.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Una base de código', 'text' => 'El desarrollo multiplataforma reduce el costo de mantener Android e iOS.'],
            ['title' => 'Cuentas a su nombre', 'text' => 'La app se publica con las cuentas de su empresa, no de un tercero.'],
            ['title' => 'Panel incluido', 'text' => 'Su equipo administra la app sin depender de un programador para cada cambio.'],
            ['title' => 'Pensada para el mercado local', 'text' => 'Pagos locales, equipos Android de gama media y conexiones inestables.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto tiempo lleva crear una app?',
                'a' => 'Una primera versión acotada suele llevar entre dos y cuatro meses, incluyendo diseño, '
                     . 'desarrollo, pruebas y la revisión de las tiendas. Apps con muchas integraciones llevan más.',
            ],
            [
                'q' => '¿Hacen apps solo para Android?',
                'a' => 'Sí, es posible empezar solo con Android. Con desarrollo multiplataforma, sumar iOS después '
                     . 'requiere ajustes y pruebas, no rehacer la app.',
            ],
            [
                'q' => '¿Quién publica la app en las tiendas?',
                'a' => 'Nosotros preparamos y enviamos la publicación, pero desde las cuentas de desarrollador de '
                     . 'su empresa, para que la app sea suya.',
            ],
            [
                'q' => '¿La app puede funcionar sin internet?',
                'a' => 'Sí, para las funciones que lo necesiten: la app guarda los datos en el teléfono y los '
                     . 'sincroniza cuando vuelve la conexión. Esto suma complejidad y se define en el alcance.',
            ],
            [
                'q' => '¿Qué mantenimiento necesita una app?',
                'a' => 'Cada año Google y Apple publican nuevas versiones de sus sistemas y cambian requisitos '
                     . 'de publicación. Una app sin mantenimiento puede dejar de funcionar o ser retirada de la '
                     . 'tienda, por eso recomendamos un plan de mantenimiento.',
            ],
            [
                'q' => '¿Me firman un acuerdo de confidencialidad?',
                'a' => 'Sí, antes de que nos cuente los detalles de su idea si así lo prefiere.',
            ],
        ],
        'cta'       => ['label' => 'Cotizar mi app', 'whatsappText' => ''],
        'related'   => ['desarrollo-mvp', 'desarrollo-de-software', 'programadores'],
        'guides'    => ['como-contratar-programadores'],
        'articles' => ['cuanto-cuesta-una-app-en-paraguay'],
        'toolLinks' => [
            [
                'path'  => '/herramientas/cotizador-app/',
                'label' => 'Cotizador orientativo de apps',
                'text'  => 'Marque las funciones de su app y vea en qué nivel de complejidad se ubica.',
            ],
        ],
    ],

    'sistemas-erp' => [
        'path'            => '/servicios/sistemas-erp/',
        'title'           => 'ERP y sistemas de gestión',
        'navLabel'        => 'ERP y gestión',
        'cluster'         => 'software',
        'parent'          => null,
        'seoTitle'        => 'ERP y sistemas de gestión para pymes',
        'metaDescription' => 'Implementación de ERP y sistemas de gestión para pymes en Paraguay: Odoo o '
                           . 'desarrollo propio, con ventas, stock, contabilidad y facturación SIFEN.',
        'hero' => [
            'eyebrow' => 'ERP y sistemas de gestión',
            'h1'      => 'ERP y sistemas de gestión para empresas paraguayas',
            'h2'      => 'Ventas, compras, stock y contabilidad en un solo lugar.',
            'lead'    => 'Un ERP es el software de gestión que une las áreas de su empresa en una misma '
                       . 'base de datos. Implementamos sistemas ERP para pymes, con Odoo o con desarrollo '
                       . 'propio según el caso, conectados con la facturación electrónica SIFEN y con los '
                       . 'datos que su contador necesita.',
        ],
        'includes' => [
            'Diagnóstico de procesos: ventas, compras, stock, cobranzas, pagos y contabilidad',
            'Recomendación de sistema: Odoo, otro ERP existente o sistema de gestión propio',
            'Configuración de módulos, usuarios, permisos y documentos',
            'Adaptación a la normativa paraguaya: IVA, timbrado, RUC y facturación electrónica',
            'Migración de clientes, proveedores, productos y saldos iniciales',
            'Capacitación por rol y manuales breves',
            'Acompañamiento en el arranque y soporte posterior',
        ],
        'excludes' => [
            'Licencias o suscripciones del ERP elegido, cuando las tenga',
            'Servicios contables o impositivos (los sigue haciendo su contador)',
            'Hardware: computadoras, impresoras, lectores o balanzas',
        ],
        'weNeed' => [
            'Un responsable del proyecto por su empresa, con tiempo asignado',
            'Listados actuales de clientes, proveedores, productos y precios',
            'Los reportes que usa hoy para decidir',
            'Contacto con su contador para acordar el plan de cuentas y los cierres',
        ],
        'sections' => [
            [
                'h2'   => 'Qué es un ERP y qué resuelve',
                'body' => [
                    'ERP significa planificación de recursos empresariales. En la práctica es un sistema de '
                        . 'gestión donde una venta descuenta stock, genera la factura, crea la cuenta a cobrar y '
                        . 'deja el asiento contable, sin que nadie vuelva a cargar los mismos datos.',
                    'Las señales de que una empresa necesita un ERP son conocidas: el stock del sistema no '
                        . 'coincide con el del depósito, las ventas se pasan a mano a otra planilla, el cierre de '
                        . 'mes lleva días y nadie sabe con certeza qué productos dejan margen.',
                ],
            ],
            [
                'h2'   => 'Sistemas ERP: Odoo, otro sistema o desarrollo propio',
                'body' => [
                    'No vendemos un único producto. Recomendamos según su tamaño, su rubro y su presupuesto, y '
                        . 'le explicamos por qué.',
                ],
                'items' => [
                    ['title' => 'Odoo', 'text' => 'ERP modular de código abierto con versión comunitaria y versión con suscripción. Flexible y con muchos módulos.'],
                    ['title' => 'Software de gestión local', 'text' => 'Sistemas desarrollados en Paraguay que ya incluyen la normativa local. Útiles para rubros estándar.'],
                    ['title' => 'Sistema de gestión propio', 'text' => 'Cuando los procesos son muy particulares o se necesita integrar sistemas existentes.'],
                ],
            ],
            [
                'h2'   => 'ERP para pymes: empezar por lo que más duele',
                'body' => [
                    'Un ERP para pymes no se implementa todo de una vez. Empezamos por el módulo donde está el '
                        . 'mayor problema, casi siempre ventas y stock o facturación, y sumamos compras, '
                        . 'cobranzas, contabilidad o producción en etapas siguientes.',
                    'Así su equipo aprende de a poco, los datos se ordenan antes de pasar al siguiente módulo y '
                        . 'la inversión se reparte en el tiempo.',
                ],
            ],
            [
                'h2'   => 'Facturación electrónica y normativa paraguaya',
                'body' => [
                    'Todo sistema de gestión que emita comprobantes en Paraguay debe ajustarse a las reglas de '
                        . 'la DNIT: IVA en sus tasas vigentes, timbrado, numeración y, para los contribuyentes '
                        . 'obligados o adheridos, la facturación electrónica del SIFEN. Configuramos el ERP para '
                        . 'que emita documentos electrónicos o se conecte con el servicio de facturación que '
                        . 'usted ya tenga.',
                    'También acordamos con su contador el plan de cuentas y los reportes que necesita para las '
                        . 'declaraciones, de modo que el sistema le entregue información útil y no un problema más.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo de un ERP',
                'body' => [
                    'El costo total tiene tres partes: la licencia o suscripción del sistema (si la tiene), la '
                        . 'implementación (configuración, migración, capacitación) y las adaptaciones a medida. La '
                        . 'cantidad de usuarios, de módulos, de sucursales y el estado de sus datos actuales son lo '
                        . 'que más mueve la cifra.',
                    'Como referencia, en el mercado paraguayo la implementación de un ERP para una pyme con '
                        . 'pocos módulos suele ubicarse entre unos pocos y algunas decenas de millones de '
                        . 'guaraníes, sin contar licencias. Rangos orientativos del mercado, a confirmar con '
                        . 'presupuesto.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Un solo dato, cargado una vez', 'text' => 'La venta actualiza stock, cuentas a cobrar y contabilidad.'],
            ['title' => 'Stock confiable', 'text' => 'Existencias por depósito y sucursal, con historial de movimientos.'],
            ['title' => 'Cierres más cortos', 'text' => 'Su contador recibe información ordenada y a tiempo.'],
            ['title' => 'Decisiones con datos', 'text' => 'Márgenes por producto, cliente y vendedor sin armar planillas.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto tarda implementar un ERP?',
                'a' => 'La primera etapa (por ejemplo ventas, stock y facturación) suele estar en uso en uno a tres '
                     . 'meses. Los módulos siguientes se suman por etapas.',
            ],
            [
                'q' => '¿Odoo sirve para Paraguay?',
                'a' => 'Sí, con configuración local: impuestos, formatos de comprobante, plan de cuentas y, cuando '
                     . 'corresponde, la conexión con el SIFEN. Evaluamos qué versión y qué módulos le convienen.',
            ],
            [
                'q' => '¿Puedo seguir usando mi sistema contable actual?',
                'a' => 'Sí. Es común que el ERP maneje la operación y exporte o sincronice la información con el '
                     . 'sistema contable del estudio.',
            ],
            [
                'q' => '¿Qué pasa con mis datos actuales?',
                'a' => 'Migramos clientes, proveedores, productos y saldos iniciales. Antes los revisamos con usted, '
                     . 'porque cargar datos desordenados en un sistema nuevo repite los problemas de antes.',
            ],
            [
                'q' => '¿Cuántos usuarios puede tener?',
                'a' => 'Técnicamente no hay un límite práctico. En sistemas con licencia por usuario, la cantidad '
                     . 'afecta el costo mensual, y lo calculamos en la propuesta.',
            ],
            [
                'q' => '¿Funciona con varias sucursales?',
                'a' => 'Sí. Se configuran depósitos, puntos de expedición y permisos por sucursal.',
            ],
        ],
        'cta'       => ['label' => 'Pedir un diagnóstico', 'whatsappText' => ''],
        'related' => ['sistema-contable', 'sistema-de-inventario', 'punto-de-venta', 'crm', 'facturacion-electronica-sifen'],
        'guides'    => ['que-es-un-erp', 'kommo-vs-odoo'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'sistema-contable' => [
        'path'            => '/servicios/sistema-contable/',
        'title'           => 'Sistema contable',
        'navLabel'        => 'Sistema contable',
        'cluster'         => 'software',
        'parent'          => 'sistemas-erp',
        'seoTitle'        => 'Sistema contable para empresas',
        'metaDescription' => 'Sistema contable y software contable para empresas y estudios en Paraguay: '
                           . 'implementación, integración con ventas y compras, y reportes para la DNIT.',
        'hero' => [
            'eyebrow' => 'ERP y gestión',
            'h1'      => 'Sistema contable y software contable para empresas',
            'h2'      => 'Asientos que se generan solos a partir de la operación.',
            'lead'    => 'Un sistema contable bien implementado recibe ventas, compras, cobros y pagos sin '
                       . 'volver a cargarlos. Implementamos software contable para empresas y estudios '
                       . 'contables en Paraguay, o lo conectamos con el sistema de gestión que usted ya usa.',
        ],
        'includes' => [
            'Revisión de cómo se registra hoy la información contable',
            'Selección o configuración del software contable',
            'Plan de cuentas acordado con su contador',
            'Integración con ventas, compras, bancos y facturación electrónica',
            'Libros de compras y ventas y reportes para las declaraciones',
            'Importación de extractos bancarios y reglas de conciliación',
            'Capacitación del equipo administrativo',
        ],
        'excludes' => [
            'La tarea contable e impositiva en sí (liquidaciones, presentaciones, balances firmados)',
            'Licencias del software contable elegido',
            'Regularización de ejercicios anteriores',
        ],
        'weNeed' => [
            'El plan de cuentas actual y los reportes que prepara su contador',
            'Exportaciones de ventas y compras de los últimos meses',
            'Acceso a los extractos bancarios en formato digital',
            'Una reunión con su contador al inicio',
        ],
        'sections' => [
            [
                'h2'   => 'Por qué un sistema contable integrado',
                'body' => [
                    'En muchas empresas la contabilidad se arma al final del mes a partir de planillas, '
                        . 'comprobantes en papel y archivos que llegan por correo. Cada dato se tipea dos o tres '
                        . 'veces y cada tipeo es una oportunidad de error. El resultado son cierres que se '
                        . 'demoran, diferencias que nadie sabe explicar y un contador que dedica su tiempo a '
                        . 'transcribir en lugar de analizar.',
                    'Un sistema contable integrado recibe los movimientos directamente de la operación: cada '
                        . 'factura emitida, cada compra registrada y cada cobro genera su asiento con las cuentas '
                        . 'ya definidas. El contador revisa y ajusta en lugar de transcribir, y la gerencia puede '
                        . 'ver la situación del mes antes de que termine.',
                ],
            ],
            [
                'h2'   => 'Software contable: las opciones habituales',
                'body' => [
                    'Hay tres caminos habituales y el correcto depende del tamaño de la empresa, del volumen '
                        . 'de comprobantes y de cómo trabaja su estudio contable. No existe una respuesta única, '
                        . 'y le explicamos las ventajas y límites de cada uno antes de decidir.',
                ],
                'items' => [
                    ['title' => 'Módulo contable del ERP', 'text' => 'Si ya usa o va a usar un ERP como Odoo, el módulo contable evita integraciones.'],
                    ['title' => 'Software contable del estudio', 'text' => 'Muchos estudios usan un sistema propio; conectamos su operación con ese sistema mediante exportaciones o una integración.'],
                    ['title' => 'Integración a medida', 'text' => 'Cuando la operación vive en un sistema propio, desarrollamos el puente hacia el software contable.'],
                ],
            ],
            [
                'h2'   => 'Normativa paraguaya y reportes para la DNIT',
                'body' => [
                    'El sistema debe reflejar las reglas locales: IVA con sus tasas vigentes, el régimen del '
                        . 'impuesto a la renta que corresponda a su empresa, comprobantes con timbrado y, si '
                        . 'aplica, documentos electrónicos del SIFEN. Configuramos los libros de compras y ventas '
                        . 'y los reportes que su contador usa para preparar las declaraciones en el sistema de '
                        . 'la DNIT.',
                    'Las reglas impositivas cambian. Por eso dejamos las tasas y parámetros configurables y le '
                        . 'recomendamos confirmar siempre con su contador los valores vigentes antes de cada cierre.',
                ],
            ],
            [
                'h2'   => 'Conciliación bancaria y cuentas a cobrar',
                'body' => [
                    'Una de las tareas que más tiempo consume es cruzar el extracto del banco con los cobros y '
                        . 'pagos registrados. Configuramos la importación de extractos y reglas de conciliación '
                        . 'para que la mayoría de los movimientos se emparejen solos y el equipo revise solo las '
                        . 'excepciones.',
                    'Con los cobros conciliados, el sistema muestra un estado de cuentas a cobrar confiable: '
                        . 'qué clientes deben, desde cuándo y cuánto. Ese reporte suele ser el primero que la '
                        . 'gerencia empieza a usar todos los días.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo de un sistema contable',
                'body' => [
                    'Influyen el volumen de comprobantes mensuales, la cantidad de empresas o razones sociales, '
                        . 'las integraciones necesarias y la licencia del software elegido. Como referencia, una '
                        . 'implementación acotada suele ubicarse en el rango de pocos millones a algunas decenas '
                        . 'de millones de guaraníes. Rangos orientativos del mercado, a confirmar con presupuesto.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Menos transcripción', 'text' => 'Los asientos nacen de la operación, no de una planilla.'],
            ['title' => 'Cierres más rápidos', 'text' => 'El contador recibe la información completa y ordenada.'],
            ['title' => 'Menos errores', 'text' => 'Cuentas y tasas definidas una vez, aplicadas siempre igual.'],
            ['title' => 'Trabajo en conjunto con su contador', 'text' => 'El sistema se configura con el estudio, no a sus espaldas.'],
        ],
        'faq' => [
            [
                'q' => '¿Ustedes llevan la contabilidad?',
                'a' => 'No. Implementamos y conectamos el sistema. La contabilidad y las declaraciones siguen a '
                     . 'cargo de su contador o estudio.',
            ],
            [
                'q' => '¿Qué sistema contable recomiendan?',
                'a' => 'Depende de si ya tiene un ERP, del sistema que usa su estudio y del volumen de operaciones. '
                     . 'Lo definimos después de una reunión de diagnóstico.',
            ],
            [
                'q' => '¿Puede integrarse con la facturación electrónica?',
                'a' => 'Sí. Los documentos electrónicos emitidos o recibidos pueden alimentar los libros de ventas '
                     . 'y compras del sistema contable.',
            ],
            [
                'q' => '¿Sirve para un estudio contable con varios clientes?',
                'a' => 'Sí, hay sistemas multiempresa pensados para estudios. Evaluamos cuál se ajusta a su forma '
                     . 'de trabajo.',
            ],
            [
                'q' => '¿Cuánto tarda la implementación?',
                'a' => 'Una implementación acotada suele llevar de algunas semanas a dos meses, según las '
                     . 'integraciones y el estado de los datos.',
            ],
        ],
        'cta'       => ['label' => 'Consultar por un sistema contable', 'whatsappText' => ''],
        'related'   => ['sistemas-erp', 'sistema-de-inventario', 'punto-de-venta'],
        'guides'    => ['que-es-un-erp'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'sistema-de-inventario' => [
        'path'            => '/servicios/sistema-de-inventario/',
        'title'           => 'Sistema de inventario',
        'navLabel'        => 'Sistema de inventario',
        'cluster'         => 'software',
        'parent'          => 'sistemas-erp',
        'seoTitle'        => 'Sistema de inventario y control de stock',
        'metaDescription' => 'Sistema de inventario y software de inventario para comercios y depósitos en '
                           . 'Paraguay: stock por sucursal, códigos de barras, lotes y reposición.',
        'hero' => [
            'eyebrow' => 'ERP y gestión',
            'h1'      => 'Sistema de inventario para controlar su stock',
            'h2'      => 'Saber qué tiene, dónde está y cuándo reponer.',
            'lead'    => 'Un sistema de inventario registra cada entrada, salida y traslado de mercadería '
                       . 'para que el stock del sistema coincida con el del depósito. Implementamos '
                       . 'software de inventario para comercios, distribuidoras y depósitos, solo o como '
                       . 'parte de un ERP.',
        ],
        'includes' => [
            'Relevamiento de depósitos, sucursales y flujo de mercadería',
            'Configuración de productos, variantes, unidades de medida y códigos de barras',
            'Entradas por compra, salidas por venta, traslados y ajustes con motivo',
            'Control de lotes y vencimientos cuando el rubro lo necesita',
            'Stock mínimo y alertas de reposición',
            'Inventario inicial y guía para inventarios periódicos',
            'Reportes de rotación, valorización y diferencias',
        ],
        'excludes' => [
            'Lectores de código de barras, impresoras de etiquetas y colectores (le ayudamos a elegirlos)',
            'El conteo físico del inventario inicial',
        ],
        'weNeed' => [
            'Listado de productos con código, descripción y costo',
            'Cantidad de depósitos y sucursales',
            'Cómo registra hoy compras, ventas y traslados',
        ],
        'sections' => [
            [
                'h2'   => 'Por qué el stock no coincide',
                'body' => [
                    'Las diferencias de inventario casi nunca se deben a un solo problema. Suelen combinarse '
                        . 'ventas que no descuentan stock, compras cargadas tarde, traslados entre sucursales sin '
                        . 'registro, devoluciones que no vuelven al sistema y productos cargados con códigos '
                        . 'duplicados.',
                    'Un software de inventario no corrige esto solo. Lo que hace es obligar a que cada '
                        . 'movimiento tenga un documento y un responsable, y así las diferencias se detectan y se '
                        . 'explican. El resto es proceso: quién recibe la mercadería, quién autoriza un ajuste y '
                        . 'cada cuánto se cuenta. Esas reglas las definimos con usted durante la implementación.',
                ],
            ],
            [
                'h2'   => 'Funciones de un sistema de inventario',
                'body' => [
                    'Configuramos solo lo que su operación necesita. Un comercio con un depósito no necesita '
                        . 'lo mismo que una distribuidora con varias sucursales y vendedores en la calle, y cada '
                        . 'función de más es un campo que alguien tiene que completar.',
                ],
                'items' => [
                    ['title' => 'Multidepósito', 'text' => 'Stock separado por depósito y sucursal, con traslados documentados.'],
                    ['title' => 'Código de barras', 'text' => 'Carga y venta con lector, y etiquetas impresas desde el sistema.'],
                    ['title' => 'Lotes y vencimientos', 'text' => 'Para alimentos, farmacia, veterinaria o insumos con fecha.'],
                    ['title' => 'Reposición', 'text' => 'Stock mínimo por producto y sugerencia de compra.'],
                    ['title' => 'Valorización', 'text' => 'Costo del inventario para la gestión y para su contador.'],
                ],
            ],
            [
                'h2'   => 'Software de inventario solo o dentro de un ERP',
                'body' => [
                    'Si su problema es solo el stock, un sistema de inventario independiente puede ser '
                        . 'suficiente. Pero en cuanto el inventario tiene que conectarse con la facturación, las '
                        . 'compras y la contabilidad, conviene que forme parte de un ERP o sistema de gestión, '
                        . 'para no mantener integraciones entre programas separados.',
                    'También lo conectamos con su tienda online o su punto de venta, para que el stock publicado '
                        . 'sea el real y no venda por internet un producto que ya no tiene.',
                ],
            ],
            [
                'h2'   => 'Cómo implementamos el control de stock',
                'body' => [
                    'Empezamos ordenando el maestro de productos: códigos únicos, descripciones claras, unidades '
                        . 'de medida y costos. Después cargamos el inventario inicial a partir de un conteo físico '
                        . 'y activamos los movimientos de a uno: primero ventas y compras, luego traslados y '
                        . 'ajustes. Durante el primer mes revisamos con usted las diferencias que aparezcan para '
                        . 'corregir el proceso, no solo el número.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo',
                'body' => [
                    'Pesan la cantidad de productos y depósitos, si hay lotes o series, las integraciones con '
                        . 'ventas y tienda online, y si se usa un sistema existente o un desarrollo propio. Como '
                        . 'referencia, una implementación sobre un sistema existente suele ubicarse en el rango '
                        . 'de pocos millones de guaraníes, y un desarrollo propio, bastante más. Rangos '
                        . 'orientativos del mercado, a confirmar con presupuesto.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Menos quiebres de stock', 'text' => 'Alertas de reposición antes de quedarse sin producto.'],
            ['title' => 'Menos capital inmovilizado', 'text' => 'Sabe qué productos no rotan y deja de comprarlos.'],
            ['title' => 'Diferencias explicables', 'text' => 'Cada movimiento tiene documento, fecha y responsable.'],
        ],
        'faq' => [
            [
                'q' => '¿Puedo usarlo en el celular?',
                'a' => 'Sí. Los sistemas web se usan desde el celular y algunos permiten usar la cámara como lector '
                     . 'de códigos de barras para conteos.',
            ],
            [
                'q' => '¿Cómo cargamos el inventario inicial?',
                'a' => 'Con un conteo físico y una planilla que importamos al sistema. Le damos el formato y las '
                     . 'instrucciones para hacerlo ordenado.',
            ],
            [
                'q' => '¿Se conecta con mi tienda online?',
                'a' => 'En la mayoría de los casos sí, mediante la integración que ofrezca la plataforma de la '
                     . 'tienda o un desarrollo a medida.',
            ],
            [
                'q' => '¿Maneja productos con talles y colores?',
                'a' => 'Sí, mediante variantes, con stock y código propio para cada combinación.',
            ],
            [
                'q' => '¿Cada cuánto conviene hacer inventario?',
                'a' => 'Depende del rubro. Muchas empresas combinan un inventario completo anual con conteos '
                     . 'rotativos de grupos de productos durante el año.',
            ],
        ],
        'cta'       => ['label' => 'Ordenar mi stock', 'whatsappText' => ''],
        'related'   => ['sistemas-erp', 'punto-de-venta', 'sistema-contable'],
        'guides'    => ['que-es-un-erp', 'como-elegir-un-sistema-punto-de-venta'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'punto-de-venta' => [
        'path'            => '/servicios/punto-de-venta/',
        'title'           => 'Sistema de punto de venta',
        'navLabel'        => 'Punto de venta (POS)',
        'cluster'         => 'software',
        'parent'          => 'sistemas-erp',
        'seoTitle'        => 'Sistema de punto de venta (POS)',
        'metaDescription' => 'Sistema de punto de venta para comercios en Paraguay: caja, stock, cobro con '
                           . 'tarjeta y factura electrónica SIFEN desde el mostrador.',
        'hero' => [
            'eyebrow' => 'ERP y gestión',
            'h1'      => 'Sistema de punto de venta con factura electrónica',
            'h2'      => 'Vender, cobrar y facturar desde el mostrador.',
            'lead'    => 'Un sistema de punto de venta (sistema POS) registra la venta, descuenta el stock, '
                       . 'cobra y emite el comprobante en un solo paso. Implementamos sistemas de ventas para '
                       . 'negocios en Paraguay con factura electrónica SIFEN, apertura y cierre de caja y '
                       . 'reportes por cajero y sucursal.',
        ],
        'includes' => [
            'Selección del sistema de punto de venta adecuado a su rubro',
            'Configuración de productos, precios, listas de precios y promociones',
            'Emisión de factura electrónica SIFEN o conexión con su proveedor de facturación',
            'Apertura, arqueo y cierre de caja por cajero',
            'Cobro en efectivo, tarjeta, transferencia y billeteras',
            'Integración con el stock y, si corresponde, con el ERP',
            'Capacitación de cajeros y encargados',
        ],
        'excludes' => [
            'Computadoras, cajones, impresoras térmicas y lectores (le indicamos qué comprar)',
            'Contratos con procesadoras de tarjetas o bancos',
            'El trámite de habilitación como facturador electrónico ante la DNIT, salvo que lo contrate aparte',
        ],
        'weNeed' => [
            'Listado de productos con precios',
            'Cantidad de cajas y sucursales',
            'Datos de su timbrado y su situación ante el SIFEN',
            'Los medios de cobro que acepta hoy',
        ],
        'sections' => [
            [
                'h2'   => 'Qué hace un sistema POS',
                'body' => [
                    'En el mostrador todo tiene que ser rápido: buscar el producto o leer el código, aplicar el '
                        . 'precio correcto, cobrar con el medio que elija el cliente y entregar el comprobante. Un '
                        . 'sistema de punto de venta hace eso y, detrás, deja registrado el movimiento de stock y '
                        . 'de caja.',
                    'Al final del turno el cajero declara lo que tiene y el sistema compara con lo que debería '
                        . 'haber por cada medio de pago. Las diferencias quedan registradas con nombre y fecha, y '
                        . 'el encargado puede revisarlas sin contar los billetes de nuevo.',
                ],
            ],
            [
                'h2'   => 'Factura electrónica SIFEN desde la caja',
                'body' => [
                    'El SIFEN es el sistema de facturación electrónica de la DNIT. Los contribuyentes obligados '
                        . 'o adheridos emiten documentos electrónicos que se validan con la administración y '
                        . 'pueden consultarse en el portal e-Kuatia. El sistema de punto de venta debe generar '
                        . 'esos documentos, firmarlos y enviarlos, o conectarse con un proveedor que lo haga.',
                    'Si su comercio todavía no es facturador electrónico, lo tenemos en cuenta al elegir el '
                        . 'sistema para que el cambio no obligue a reemplazarlo. Consulte con su contador el '
                        . 'calendario de obligatoriedad vigente para su caso.',
                ],
            ],
            [
                'h2'   => 'Sistema de ventas para negocio según el rubro',
                'body' => [
                    'No es lo mismo un sistema de ventas para un minimercado que para una farmacia, una '
                        . 'ferretería o un local de comidas. Elegimos y configuramos pensando en cómo atiende su '
                        . 'mostrador.',
                ],
                'items' => [
                    ['title' => 'Comercio minorista', 'text' => 'Código de barras, promociones, balanza y varias cajas.'],
                    ['title' => 'Ferretería y repuestos', 'text' => 'Muchos productos, búsqueda rápida, presupuestos y cuentas corrientes.'],
                    ['title' => 'Farmacia y veterinaria', 'text' => 'Lotes, vencimientos y control de productos especiales.'],
                    ['title' => 'Gastronomía', 'text' => 'Mesas, comandas a cocina y delivery.'],
                ],
            ],
            [
                'h2'   => 'Punto de venta en la nube o instalado',
                'body' => [
                    'Un sistema en la nube permite ver ventas y stock desde cualquier lugar y simplifica tener '
                        . 'varias sucursales. Un sistema instalado en la computadora sigue funcionando si se corta '
                        . 'internet. Hay soluciones que combinan ambos: venden sin conexión y sincronizan cuando '
                        . 'vuelve. Evaluamos la calidad de la conexión de su local antes de recomendar.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo',
                'body' => [
                    'Influyen la cantidad de cajas y sucursales, la licencia o suscripción del sistema, la '
                        . 'integración con facturación electrónica y con el ERP, y el hardware. Como referencia, '
                        . 'muchos sistemas POS se contratan por una suscripción mensual por caja, y la '
                        . 'implementación inicial suele ubicarse en el rango de pocos millones de guaraníes. '
                        . 'Rangos orientativos del mercado, a confirmar con presupuesto.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Atención más rápida', 'text' => 'Menos tiempo por cliente en la fila.'],
            ['title' => 'Caja controlada', 'text' => 'Arqueos por cajero y por medio de pago.'],
            ['title' => 'Facturación al día', 'text' => 'Comprobantes electrónicos emitidos en el momento de la venta.'],
            ['title' => 'Stock actualizado', 'text' => 'Cada venta descuenta existencias en el acto.'],
        ],
        'faq' => [
            [
                'q' => '¿El sistema emite factura electrónica?',
                'a' => 'Implementamos sistemas que emiten documentos electrónicos del SIFEN o que se conectan con '
                     . 'un proveedor de facturación electrónica habilitado.',
            ],
            [
                'q' => '¿Qué pasa si se corta internet?',
                'a' => 'Depende del sistema. Algunos permiten seguir vendiendo y envían los comprobantes cuando '
                     . 'vuelve la conexión, dentro de los plazos que admite la normativa. Lo definimos según la '
                     . 'conectividad de su local.',
            ],
            [
                'q' => '¿Puedo cobrar con tarjeta desde el sistema?',
                'a' => 'Sí, registrando el cobro con el terminal de su procesadora. Algunas integraciones permiten '
                     . 'enviar el monto al terminal automáticamente; depende de la procesadora.',
            ],
            [
                'q' => '¿Sirve para varias sucursales?',
                'a' => 'Sí. Cada sucursal tiene sus cajas y su stock, y usted ve todo consolidado.',
            ],
            [
                'q' => '¿Qué hardware necesito?',
                'a' => 'Como mínimo una computadora o tablet, una impresora de comprobantes y un lector de códigos '
                     . 'de barras. Le damos una lista según el sistema elegido.',
            ],
        ],
        'cta'       => ['label' => 'Consultar por un sistema POS', 'whatsappText' => ''],
        'related' => ['sistema-de-inventario', 'sistemas-erp', 'sistema-contable', 'facturacion-electronica-sifen'],
        'guides'    => ['como-elegir-un-sistema-punto-de-venta'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'crm' => [
        'path'            => '/servicios/crm/',
        'title'           => 'CRM para empresas',
        'navLabel'        => 'CRM',
        'cluster'         => 'software',
        'parent'          => null,
        'seoTitle'        => 'CRM para empresas y pymes',
        'metaDescription' => 'Implementación de CRM para pymes en Paraguay: Kommo, Odoo CRM o sistema CRM '
                           . 'a medida, con WhatsApp, embudo de ventas y seguimiento de clientes.',
        'hero' => [
            'eyebrow' => 'CRM',
            'h1'      => 'CRM para empresas: ventas y clientes en orden',
            'h2'      => 'Ningún cliente potencial olvidado en un chat.',
            'lead'    => 'Un CRM registra cada contacto, conversación y oportunidad de venta para que su equipo '
                       . 'sepa a quién llamar hoy. Implementamos un sistema CRM para pymes con Kommo, Odoo CRM '
                       . 'o desarrollo a medida, conectado con WhatsApp y con su página web.',
        ],
        'includes' => [
            'Diseño del embudo de ventas con sus etapas reales',
            'Implementación de Kommo CRM, Odoo CRM u otra herramienta, o un CRM a medida',
            'Conexión con WhatsApp, formularios de la web y redes sociales',
            'Importación de contactos y oportunidades existentes',
            'Automatizaciones de seguimiento: tareas, recordatorios y mensajes',
            'Tableros para el responsable comercial',
            'Capacitación de vendedores y del responsable',
        ],
        'excludes' => [
            'Suscripciones de la herramienta CRM y del proveedor de WhatsApp Business API',
            'Campañas publicitarias para generar contactos',
            'Envíos masivos que no cumplan las políticas de WhatsApp',
        ],
        'weNeed' => [
            'Una descripción de cómo vende hoy, paso a paso',
            'Listado de contactos y oportunidades abiertas',
            'Acceso a la cuenta de WhatsApp Business y a la página web',
            'El responsable comercial disponible para definir etapas y reportes',
        ],
        'sections' => [
            [
                'h2'   => 'Para qué sirve un CRM',
                'body' => [
                    'En muchas pymes la información de ventas vive en los celulares de los vendedores. Cuando '
                        . 'alguien se va, se va con sus conversaciones. Cuando hay muchos mensajes, algunos no se '
                        . 'responden. Y nadie sabe cuántas oportunidades hay abiertas ni en qué etapa están.',
                    'Un CRM centraliza los contactos y las conversaciones, asigna cada oportunidad a un '
                        . 'vendedor, le recuerda cuándo hacer el seguimiento y muestra al responsable el estado '
                        . 'de todo el embudo.',
                ],
            ],
            [
                'h2'   => 'Kommo CRM, Odoo CRM o sistema CRM a medida',
                'body' => [
                    'Recomendamos la herramienta según cómo vende su empresa, no según cuál conocemos mejor. '
                        . 'Las tres opciones funcionan; lo que cambia es cuánto se ajustan a su forma de trabajo.',
                ],
                'items' => [
                    ['title' => 'Kommo CRM', 'text' => 'Muy orientado a la venta por mensajería. Buena opción cuando WhatsApp es el canal principal.'],
                    ['title' => 'Odoo CRM', 'text' => 'Conviene si también usa o usará Odoo como ERP: la oportunidad pasa a presupuesto, venta y factura.'],
                    ['title' => 'CRM a medida', 'text' => 'Para procesos comerciales muy particulares o cuando hay que integrarlo con sistemas propios.'],
                ],
            ],
            [
                'h2'   => 'CRM para pymes conectado con WhatsApp',
                'body' => [
                    'En Paraguay buena parte de las ventas se conversa por WhatsApp. Conectamos su número '
                        . 'mediante la API oficial de WhatsApp Business o las integraciones que ofrece cada CRM, '
                        . 'para que varios vendedores atiendan desde un mismo número y cada conversación quede '
                        . 'asociada al contacto.',
                    'También conectamos los formularios de su página web y los anuncios, para que cada contacto '
                        . 'nuevo entre al embudo con su origen registrado.',
                ],
            ],
            [
                'h2'   => 'Implementación: primero el proceso, después la herramienta',
                'body' => [
                    'Un CRM mal configurado se abandona a las pocas semanas. Por eso empezamos definiendo las '
                        . 'etapas reales de su venta, qué dato es obligatorio en cada una y qué reporte necesita '
                        . 'el responsable. Recién ahí configuramos la herramienta, importamos los datos y '
                        . 'capacitamos al equipo.',
                    'Durante las primeras semanas revisamos con usted cómo se está usando y ajustamos lo que '
                        . 'genera fricción.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo',
                'body' => [
                    'Influyen la cantidad de usuarios (las herramientas suelen cobrar por usuario al mes), las '
                        . 'integraciones, las automatizaciones y la migración de datos. Como referencia, una '
                        . 'implementación sobre una herramienta existente suele ubicarse en el rango de pocos '
                        . 'millones de guaraníes, más la suscripción. Rangos orientativos del mercado, a confirmar '
                        . 'con presupuesto.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Seguimiento sin olvidos', 'text' => 'Tareas y recordatorios para cada oportunidad.'],
            ['title' => 'La información queda en la empresa', 'text' => 'Contactos y conversaciones no dependen del celular de nadie.'],
            ['title' => 'Embudo visible', 'text' => 'El responsable ve cuántas oportunidades hay y dónde se traban.'],
            ['title' => 'Origen de cada venta', 'text' => 'Sabe qué canal trae clientes y cuál no.'],
        ],
        'faq' => [
            [
                'q' => '¿Kommo o Odoo?',
                'a' => 'Si vende principalmente por WhatsApp y no necesita un ERP, Kommo suele ser más directo. Si '
                     . 'usa o va a usar Odoo para facturación y stock, Odoo CRM evita integraciones. Tenemos una '
                     . 'guía que compara ambos.',
            ],
            [
                'q' => '¿Puedo usar mi número de WhatsApp actual?',
                'a' => 'Generalmente sí, pero migrarlo a la API oficial tiene condiciones. Lo revisamos antes de '
                     . 'empezar para no perder el número ni el historial que necesite.',
            ],
            [
                'q' => '¿Cuánto tarda la implementación?',
                'a' => 'Una implementación básica suele estar lista en dos a cuatro semanas. Con integraciones y '
                     . 'automatizaciones avanzadas, algo más.',
            ],
            [
                'q' => '¿Mis vendedores lo van a usar?',
                'a' => 'Si el CRM les ahorra trabajo, sí. Por eso lo configuramos con pocos campos obligatorios y '
                     . 'con recordatorios útiles, y acompañamos las primeras semanas.',
            ],
            [
                'q' => '¿Se puede integrar con mi sistema de facturación?',
                'a' => 'Sí, mediante la integración nativa si existe o un desarrollo a medida.',
            ],
        ],
        'cta'       => ['label' => 'Implementar un CRM', 'whatsappText' => ''],
        'related' => ['sistemas-erp', 'automatizacion-ia', 'desarrollo-de-software', 'whatsapp-business-api'],
        'guides'    => ['kommo-vs-odoo'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'automatizacion-ia' => [
        'path'            => '/servicios/automatizacion-ia/',
        'title'           => 'Automatización y agentes de IA para empresas',
        'navLabel'        => 'Automatización con IA',
        'cluster'         => 'software',
        'parent'          => null,
        'seoTitle'        => 'Automatización y agentes de IA',
        'metaDescription' => 'Automatización de procesos y agentes de IA para empresas en Paraguay: '
                           . 'flujos entre sistemas, lectura de documentos y asistentes en WhatsApp.',
        'hero' => [
            'eyebrow' => 'Automatización',
            'h1'      => 'Automatización y agentes de IA para empresas',
            'h2'      => 'Que el trabajo repetitivo lo haga el sistema.',
            'lead'    => 'Construimos automatizaciones y agentes de IA que ejecutan tareas concretas de su '
                       . 'empresa: pasar datos entre sistemas, leer comprobantes, responder consultas '
                       . 'frecuentes o preparar reportes. Automatizar procesos libera horas de su equipo para '
                       . 'el trabajo que sí necesita criterio humano.',
        ],
        'includes' => [
            'Relevamiento de tareas repetitivas y cálculo del ahorro esperado',
            'Diseño del flujo: disparador, pasos, validaciones y excepciones',
            'Integraciones entre sus sistemas, planillas, correo y WhatsApp',
            'Agentes de IA para clasificar, extraer datos o responder con información de su empresa',
            'Revisión humana en los pasos sensibles',
            'Registro de cada ejecución y alertas cuando algo falla',
            'Documentación y capacitación del equipo',
        ],
        'excludes' => [
            'Costos de uso de los modelos de IA y de las plataformas de automatización',
            'Cursos o capacitación general sobre inteligencia artificial (vea inteligenciaartificial.com.py)',
            'Decisiones automáticas sin supervisión en temas legales, médicos o financieros',
        ],
        'weNeed' => [
            'La descripción de la tarea tal como se hace hoy, con ejemplos reales',
            'Acceso a los sistemas y cuentas involucrados',
            'Una persona que valide los resultados durante las primeras semanas',
        ],
        'sections' => [
            [
                'h2'   => 'Qué procesos conviene automatizar',
                'body' => [
                    'Los mejores candidatos son tareas frecuentes, con reglas claras y que hoy consisten en '
                        . 'copiar, pegar, revisar o reenviar información. Si una persona hace lo mismo muchas veces '
                        . 'por semana y podría explicarlo en una hoja, probablemente se puede automatizar.',
                    'Las tareas que requieren criterio también pueden beneficiarse: un agente de IA prepara el '
                        . 'borrador o la clasificación y una persona aprueba. Así se reduce el tiempo sin perder '
                        . 'control.',
                ],
                'items' => [
                    ['title' => 'Carga de comprobantes', 'text' => 'Leer facturas recibidas en PDF o correo y cargar los datos en el sistema.'],
                    ['title' => 'Atención de consultas', 'text' => 'Responder preguntas frecuentes en WhatsApp con la información de su empresa y derivar a una persona.'],
                    ['title' => 'Reportes', 'text' => 'Armar y enviar el reporte semanal a partir de varios sistemas.'],
                    ['title' => 'Seguimiento comercial', 'text' => 'Recordatorios de cobro, confirmaciones de turnos y avisos de pedidos.'],
                    ['title' => 'Sincronización', 'text' => 'Mantener iguales los datos entre la tienda, el ERP y el CRM.'],
                ],
            ],
            [
                'h2'   => 'Agentes de IA: qué son y qué no son',
                'body' => [
                    'Un agente de IA es un programa que usa un modelo de lenguaje para interpretar una '
                        . 'solicitud, consultar información y ejecutar acciones dentro de límites definidos. Por '
                        . 'ejemplo, leer un correo de un proveedor, identificar la factura, verificar si coincide '
                        . 'con la orden de compra y dejarla lista para aprobar.',
                    'No es un empleado autónomo. Funciona bien cuando tiene instrucciones precisas, acceso solo '
                        . 'a lo que necesita y una persona que revisa los casos dudosos. Diseñamos los agentes con '
                        . 'esos límites desde el principio.',
                    'Si busca información general sobre inteligencia artificial, cursos o novedades, le '
                        . 'recomendamos inteligenciaartificial.com.py. Nosotros nos enfocamos en construir '
                        . 'soluciones para su operación.',
                ],
            ],
            [
                'h2'   => 'Cómo trabajamos una automatización',
                'body' => [
                    'Empezamos por un proceso, no por diez. Medimos cuánto tiempo lleva hoy, construimos la '
                        . 'automatización, la dejamos funcionando en paralelo con el proceso manual y comparamos '
                        . 'resultados. Cuando los números cierran, se apaga el proceso manual y pasamos al '
                        . 'siguiente.',
                ],
                'items' => [
                    ['title' => '1. Medir', 'text' => 'Horas por semana, errores frecuentes y personas involucradas.'],
                    ['title' => '2. Diseñar', 'text' => 'Flujo, excepciones y puntos de revisión humana.'],
                    ['title' => '3. Construir', 'text' => 'Con plataformas de automatización o código propio, según volumen y costo.'],
                    ['title' => '4. Probar en paralelo', 'text' => 'Comparación con el proceso manual antes de reemplazarlo.'],
                    ['title' => '5. Operar', 'text' => 'Monitoreo, alertas y ajustes.'],
                ],
            ],
            [
                'h2'   => 'Datos y privacidad',
                'body' => [
                    'Automatizar implica que un sistema lea información de su empresa y, a veces, de sus '
                        . 'clientes. Definimos qué datos se envían a servicios externos, elegimos proveedores con '
                        . 'condiciones de uso adecuadas y limitamos los accesos de cada automatización a lo '
                        . 'indispensable. Para evaluaciones de seguridad específicas, le sugerimos consultar a '
                        . 'especialistas como ciberseguridad.com.py.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo',
                'body' => [
                    'Pesan la cantidad de sistemas a conectar, la calidad de los datos de entrada, el volumen '
                        . 'de ejecuciones y cuánta revisión humana se necesita. Además del desarrollo hay un costo '
                        . 'de operación mensual por las plataformas y el uso de modelos de IA. Como referencia, '
                        . 'una automatización acotada suele ubicarse en el rango de pocos millones de guaraníes. '
                        . 'Rangos orientativos del mercado, a confirmar con presupuesto. Nuestra calculadora de '
                        . 'retorno le ayuda a estimar si el ahorro lo justifica.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Horas recuperadas', 'text' => 'Su equipo deja de copiar y pegar y se dedica a atender y decidir.'],
            ['title' => 'Menos errores de carga', 'text' => 'Las reglas se aplican siempre igual.'],
            ['title' => 'Respuesta más rápida', 'text' => 'Consultas y documentos procesados en minutos, también fuera de horario.'],
            ['title' => 'Retorno medible', 'text' => 'Medimos antes y después para saber si valió la pena.'],
        ],
        'faq' => [
            [
                'q' => '¿La IA va a reemplazar a mi equipo?',
                'a' => 'Lo habitual es que la automatización se haga cargo de las partes repetitivas y las personas '
                     . 'se ocupen de lo que requiere criterio, atención o negociación.',
            ],
            [
                'q' => '¿Qué pasa si el agente se equivoca?',
                'a' => 'Diseñamos puntos de revisión humana en los pasos sensibles y un registro de cada ejecución, '
                     . 'para detectar y corregir errores rápido.',
            ],
            [
                'q' => '¿Necesito cambiar mis sistemas?',
                'a' => 'No necesariamente. La mayoría de las automatizaciones se conectan con lo que ya usa, '
                     . 'mediante APIs, correo, planillas o exportaciones.',
            ],
            [
                'q' => '¿Cuánto cuesta mantenerlo funcionando?',
                'a' => 'Depende del volumen. Hay un costo mensual de plataformas y de uso de IA que estimamos en la '
                     . 'propuesta, más el mantenimiento si lo contrata.',
            ],
            [
                'q' => '¿Puede atender clientes por WhatsApp?',
                'a' => 'Sí, respondiendo preguntas frecuentes con información aprobada por usted y derivando a una '
                     . 'persona cuando la consulta lo requiere.',
            ],
            [
                'q' => '¿Dan cursos de inteligencia artificial?',
                'a' => 'No. Construimos soluciones. Para aprender sobre IA en general, consulte '
                     . 'inteligenciaartificial.com.py.',
            ],
        ],
        'cta'       => ['label' => 'Automatizar un proceso', 'whatsappText' => ''],
        'related'   => ['desarrollo-de-software', 'crm', 'sistemas-erp'],
        'guides'    => ['como-automatizar-procesos-con-ia'],
        'articles'  => [],
        'toolLinks' => [
            [
                'path'  => '/herramientas/roi-automatizacion/',
                'label' => 'Calcule el retorno',
                'text'  => 'Horas y guaraníes que recupera por mes y por año al automatizar una tarea.',
            ],
        ],
    ],

    'programadores' => [
        'path'            => '/servicios/programadores/',
        'title'           => 'Programadores y outsourcing de desarrollo',
        'navLabel'        => 'Programadores',
        'cluster'         => 'software',
        'parent'          => null,
        'seoTitle'        => 'Programadores y outsourcing',
        'metaDescription' => 'Programadores para su proyecto: desarrollador web, full stack o equipo por '
                           . 'outsourcing de software, con horas asignadas y código a su nombre.',
        'hero' => [
            'eyebrow' => 'Programadores',
            'h1'      => 'Programadores y outsourcing de desarrollo de software',
            'h2'      => 'Capacidad de desarrollo sin armar un equipo desde cero.',
            'lead'    => 'Si necesita programadores para avanzar un proyecto, sumar un desarrollador web o full '
                       . 'stack a su equipo, o tercerizar el desarrollo completo, le ofrecemos outsourcing de '
                       . 'software con horas asignadas, seguimiento semanal y el código siempre en sus '
                       . 'repositorios.',
        ],
        'includes' => [
            'Entrevista para entender el proyecto, la tecnología y el ritmo esperado',
            'Asignación de desarrolladores con el perfil adecuado: web, full stack, móvil o integraciones',
            'Planificación por tareas con estimaciones',
            'Reunión de seguimiento semanal e informe de horas',
            'Revisión de código y buenas prácticas',
            'Trabajo en sus repositorios y herramientas de gestión',
        ],
        'excludes' => [
            'Búsquedas laborales para contratar empleados en relación de dependencia (vea trabajo.com.py)',
            'Proyectos sin una persona de su lado que priorice y valide',
        ],
        'weNeed' => [
            'Descripción del proyecto y de la tecnología actual',
            'Acceso a repositorios, entornos de prueba y documentación',
            'Una persona que priorice las tareas y apruebe las entregas',
        ],
        'sections' => [
            [
                'h2'   => 'Tres formas de trabajar con nuestros programadores',
                'body' => [
                    'Contratar programadores no es una sola cosa. Según lo que ya tenga en su empresa, conviene '
                        . 'una modalidad u otra.',
                ],
                'items' => [
                    ['title' => 'Refuerzo de equipo', 'text' => 'Un desarrollador web o full stack se suma a su equipo técnico y trabaja con sus procesos.'],
                    ['title' => 'Bolsa de horas', 'text' => 'Horas mensuales para mantenimiento y mejoras de sistemas existentes.'],
                    ['title' => 'Proyecto tercerizado', 'text' => 'Nos hacemos cargo del desarrollo completo con alcance y entregas definidas.'],
                ],
            ],
            [
                'h2'   => 'Desarrollador web y desarrollador full stack: qué perfil necesita',
                'body' => [
                    'Un desarrollador web trabaja sobre sitios y aplicaciones que se usan desde el navegador. '
                        . 'Un desarrollador full stack cubre tanto la parte visible (frontend) como el servidor, '
                        . 'la base de datos y las integraciones (backend). Para un proyecto chico, un perfil full '
                        . 'stack suele ser más eficiente; en proyectos grandes conviene separar roles.',
                    'También hay perfiles específicos: desarrollo móvil, integraciones con facturación '
                        . 'electrónica y pagos, bases de datos o infraestructura. Le ayudamos a definir qué '
                        . 'necesita antes de asignar a alguien.',
                ],
            ],
            [
                'h2'   => 'Por qué outsourcing de software y no contratar directamente',
                'body' => [
                    'Contratar un programador en relación de dependencia tiene sentido cuando hay trabajo '
                        . 'constante por años y alguien en la empresa puede liderarlo técnicamente. Si el trabajo '
                        . 'es por proyecto, variable o necesita varios perfiles, el outsourcing reduce el tiempo '
                        . 'de búsqueda y el riesgo de depender de una sola persona.',
                    'Si lo que busca es publicar una búsqueda laboral o encontrar empleo como programador, '
                        . 'trabajo.com.py es el lugar indicado.',
                ],
            ],
            [
                'h2'   => 'Cómo cuidamos la continuidad',
                'body' => [
                    'El código se escribe en sus repositorios, con documentación y revisiones. Si un '
                        . 'desarrollador cambia, el reemplazo tiene de dónde partir. Usted conserva todos los '
                        . 'accesos y puede auditar el trabajo en cualquier momento.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo',
                'body' => [
                    'Se cotiza por hora o por dedicación mensual y varía según el perfil (junior, semi senior o '
                        . 'senior), la tecnología y la cantidad de horas comprometidas. Como referencia, en el '
                        . 'mercado paraguayo la hora de desarrollo profesional suele ubicarse entre cien mil y '
                        . 'varios cientos de miles de guaraníes según el perfil. Rangos orientativos del mercado, '
                        . 'a confirmar con presupuesto.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Arranque rápido', 'text' => 'Sin procesos de selección largos.'],
            ['title' => 'Flexibilidad', 'text' => 'Más o menos horas según la etapa del proyecto.'],
            ['title' => 'Varios perfiles', 'text' => 'Acceso a frontend, backend, móvil e integraciones según lo necesite.'],
            ['title' => 'Sin dependencia de una persona', 'text' => 'Código documentado y en sus repositorios.'],
        ],
        'faq' => [
            [
                'q' => '¿Con qué tecnologías trabajan?',
                'a' => 'Principalmente PHP, JavaScript y TypeScript, Python, frameworks móviles multiplataforma y '
                     . 'bases de datos MySQL y PostgreSQL. Si su proyecto usa otra tecnología, lo evaluamos.',
            ],
            [
                'q' => '¿Cuál es el mínimo de horas?',
                'a' => 'Lo acordamos según el proyecto. Para refuerzo de equipo suele ser una dedicación parcial o '
                     . 'completa mensual; para mantenimiento, una bolsa de horas.',
            ],
            [
                'q' => '¿Puedo entrevistar al desarrollador?',
                'a' => 'Sí, en la modalidad de refuerzo de equipo le presentamos el perfil antes de empezar.',
            ],
            [
                'q' => '¿Quién es dueño del código?',
                'a' => 'Su empresa. El trabajo se hace en sus repositorios y se cede de acuerdo con el contrato.',
            ],
            [
                'q' => '¿Publican búsquedas de empleo?',
                'a' => 'No. Para búsquedas laborales y ofertas de empleo, consulte trabajo.com.py.',
            ],
        ],
        'cta'       => ['label' => 'Consultar disponibilidad', 'whatsappText' => ''],
        'related'   => ['desarrollo-de-software', 'desarrollo-de-apps', 'desarrollo-mvp'],
        'guides'    => ['como-contratar-programadores'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'desarrollo-mvp' => [
        'path'            => '/servicios/desarrollo-mvp/',
        'title'           => 'MVP para startups',
        'navLabel'        => 'MVP para startups',
        'cluster'         => 'software',
        'parent'          => null,
        'seoTitle'        => 'Desarrollo de MVP para startups',
        'metaDescription' => 'Desarrollo de MVP para startups y nuevos negocios en Paraguay: la versión '
                           . 'mínima de su producto, lista para validar con usuarios reales.',
        'hero' => [
            'eyebrow' => 'MVP',
            'h1'      => 'Desarrollo de MVP para startups y nuevos negocios',
            'h2'      => 'Validar la idea antes de construir todo.',
            'lead'    => 'Un MVP (producto mínimo viable) es la versión más chica de su producto que permite '
                       . 'comprobar si alguien lo usa y lo paga. Le ayudamos a recortar la idea a lo '
                       . 'indispensable, construirla rápido y medir qué pasa con usuarios reales.',
        ],
        'includes' => [
            'Taller para definir la hipótesis principal y el usuario objetivo',
            'Recorte de funciones: qué entra en el MVP y qué espera',
            'Prototipo navegable para mostrar a usuarios e inversores',
            'Desarrollo de la web app o app móvil mínima',
            'Medición de uso con analítica básica',
            'Lista priorizada de mejoras según lo que muestren los datos',
        ],
        'excludes' => [
            'Plan de negocios, rondas de inversión o asesoramiento legal societario',
            'Marketing y adquisición de usuarios',
        ],
        'weNeed' => [
            'La idea explicada en una página: problema, usuario y cómo gana dinero',
            'Acceso a posibles usuarios para entrevistas y pruebas',
            'Disponibilidad para decidir rápido',
        ],
        'sections' => [
            [
                'h2'   => 'Qué es un MVP y qué no es',
                'body' => [
                    'Un MVP no es una versión mal hecha del producto final. Es una versión completa de una '
                        . 'sola cosa: la que valida si su propuesta resuelve un problema por el que alguien está '
                        . 'dispuesto a pagar o a cambiar de hábito.',
                    'A veces el MVP ni siquiera requiere programar: una página de inscripción, un formulario y '
                        . 'un proceso manual detrás pueden validar la demanda antes de invertir en software.',
                ],
            ],
            [
                'h2'   => 'Cómo construimos un MVP',
                'body' => [
                    'El objetivo es tener algo en manos de usuarios reales en semanas, no en meses.',
                ],
                'items' => [
                    ['title' => 'Hipótesis', 'text' => 'Qué tiene que pasar para decir que la idea funciona.'],
                    ['title' => 'Recorte', 'text' => 'Todo lo que no ayuda a probar esa hipótesis queda afuera.'],
                    ['title' => 'Construcción', 'text' => 'Tecnología estándar y herramientas existentes para ir rápido.'],
                    ['title' => 'Medición', 'text' => 'Registro de uso, entrevistas y ajustes.'],
                ],
            ],
            [
                'h2'   => 'Web app o app móvil',
                'body' => [
                    'Para la mayoría de los MVP recomendamos empezar con una web app: se lanza sin esperar la '
                        . 'aprobación de las tiendas y se corrige al instante. Si el valor depende de funciones del '
                        . 'teléfono, vamos directo a una app multiplataforma.',
                ],
            ],
            [
                'h2'   => 'Después del MVP',
                'body' => [
                    'Si los datos confirman la idea, el MVP evoluciona hacia un producto completo. Por eso lo '
                        . 'construimos con tecnologías que se pueden escalar y con el código a su nombre. Si los '
                        . 'datos no la confirman, usted habrá gastado mucho menos que construyendo el producto '
                        . 'entero.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo',
                'body' => [
                    'Depende de cuántas funciones quedan en el recorte, si hay pagos o integraciones y si es web '
                        . 'o móvil. Como referencia, un MVP acotado suele ubicarse en el rango de algunas decenas '
                        . 'de millones de guaraníes. Rangos orientativos del mercado, a confirmar con presupuesto.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Menos riesgo', 'text' => 'Invierte en construir después de validar, no antes.'],
            ['title' => 'Velocidad', 'text' => 'Usuarios reales usando el producto en pocas semanas.'],
            ['title' => 'Base escalable', 'text' => 'Si funciona, se sigue construyendo sobre lo mismo.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto tarda un MVP?',
                'a' => 'Un MVP bien recortado suele estar en manos de usuarios en seis a doce semanas.',
            ],
            [
                'q' => '¿Firman un acuerdo de confidencialidad?',
                'a' => 'Sí, antes de conocer los detalles de su idea si lo prefiere.',
            ],
            [
                'q' => '¿Trabajan a cambio de participación en la empresa?',
                'a' => 'Nuestro modelo habitual es el proyecto pago. Cualquier otra forma se conversa caso por caso.',
            ],
            [
                'q' => '¿Me ayudan a decidir qué dejar afuera?',
                'a' => 'Sí, es la parte más importante del trabajo y la hacemos juntos en el taller inicial.',
            ],
            [
                'q' => '¿El MVP sirve para mostrar a inversores?',
                'a' => 'Sí. Un producto funcionando con datos de uso reales es más convincente que una presentación.',
            ],
        ],
        'cta'       => ['label' => 'Contar mi idea', 'whatsappText' => ''],
        'related'   => ['desarrollo-de-apps', 'desarrollo-de-software', 'programadores'],
        'guides'    => ['como-contratar-programadores'],
        'articles'  => [],
        'toolLinks' => [
            [
                'path'  => '/herramientas/cotizador-app/',
                'label' => 'Ubique su MVP',
                'text'  => 'El cotizador orientativo muestra en qué nivel de complejidad está su idea.',
            ],
        ],
    ],
];
