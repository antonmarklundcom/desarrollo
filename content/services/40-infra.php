<?php
/** Phase "infra": hosting, dominios .com.py y correo corporativo. Same shape as content/services.php. */

declare(strict_types=1);

return [

    'hosting' => [
        'path'            => '/servicios/hosting/',
        'title'           => 'Hosting y dominios .com.py',
        'navLabel'        => 'Hosting y dominios',
        'cluster'         => 'infra',
        'parent'          => null,
        'seoTitle'        => 'Hosting y dominio .com.py en Paraguay',
        'metaDescription' => 'Hosting para WordPress y sitios PHP, registro de dominio .com.py, DNS, '
                           . 'SSL y copias de seguridad, gestionado por un equipo local en Paraguay.',
        'hero' => [
            'eyebrow' => 'Hosting, dominios y correo',
            'h1'      => 'Hosting y dominios .com.py para empresas en Paraguay',
            'h2'      => 'Su sitio en un servidor rápido, con dominio propio, SSL y copias de seguridad, sin que usted tenga que administrar nada.',
            'lead'    => 'Contratar hosting y comprar un dominio parece un trámite de cinco minutos, hasta que '
                       . 'el sitio se cae, el certificado vence o nadie recuerda quién tiene la clave del panel. '
                       . 'Le gestionamos el hosting para WordPress o PHP, el registro o traslado de su dominio '
                       . 'Paraguay (.com.py) o .com, la configuración de DNS y el mantenimiento técnico, con '
                       . 'todos los accesos a nombre de su empresa.',
        ],
        'includes' => [
            'Análisis de lo que su sitio necesita: tráfico esperado, WordPress o PHP, tienda o sitio informativo',
            'Contratación del plan de hosting adecuado, a nombre de su empresa',
            'Registro de dominio .com.py ante NIC Paraguay o de dominio .com, o traslado del dominio que ya tiene',
            'Configuración de DNS: sitio, correo (MX), SPF, DKIM y DMARC',
            'Certificado SSL (HTTPS) instalado y con renovación automática',
            'Instalación de WordPress o despliegue de su sitio PHP, con PHP y base de datos en versiones soportadas',
            'Copias de seguridad automáticas y una prueba de restauración',
            'Migración desde su hosting actual sin perder correos ni posicionamiento',
            'Documento de accesos: panel, registrador, DNS y FTP, entregado a su empresa',
        ],
        'excludes' => [
            'El diseño o desarrollo del sitio web (se cotiza como página web o tienda online)',
            'El costo del plan de hosting y del dominio, que se paga al proveedor a nombre de su empresa',
            'Auditorías de ciberseguridad o respuesta a incidentes (ver ciberseguridad.com.py)',
            'Servidores dedicados con administración 24/7 para aplicaciones críticas, salvo acuerdo aparte',
        ],
        'weNeed' => [
            'El dominio que quiere usar, o dos o tres alternativas si todavía no lo tiene',
            'Para .com.py: los datos de la empresa titular (razón social, RUC, contacto administrativo)',
            'Si ya tiene hosting: acceso al panel actual o el contacto del proveedor',
            'La lista de casillas de correo que hoy funcionan en el dominio, para no cortarlas',
            'Una persona de su empresa que reciba y guarde los accesos finales',
        ],
        'sections' => [
            [
                'h2'   => 'Qué hosting necesita realmente su empresa',
                'body' => [
                    'La palabra hosting cubre cosas muy distintas. Un sitio institucional de cinco páginas '
                        . 'funciona bien en un hosting compartido de calidad; una tienda WooCommerce con cientos '
                        . 'de productos y pagos en línea necesita más memoria, PHP actualizado y caché; un '
                        . 'sistema a medida con usuarios concurrentes suele pedir un VPS o un servidor en la nube. '
                        . 'Pagar de más es tan frecuente como quedarse corto.',
                    'Antes de contratar revisamos qué tiene hoy, cuántas visitas recibe, qué plugins o '
                        . 'dependencias usa y dónde está su público. Para un público en Paraguay importa la '
                        . 'latencia: un servidor en Brasil o en Estados Unidos con buena conexión suele '
                        . 'responder bien, mientras que uno saturado y barato hace que el sitio tarde varios '
                        . 'segundos en abrir, algo que Google y los visitantes castigan.',
                ],
                'items' => [
                    ['title' => 'Hosting compartido', 'text' => 'Para sitios institucionales y landing pages con tráfico moderado.'],
                    ['title' => 'Hosting WordPress administrado', 'text' => 'Para sitios y tiendas WordPress que necesitan caché, actualizaciones y copias diarias.'],
                    ['title' => 'VPS o nube', 'text' => 'Para sistemas a medida, APIs, integraciones con SIFEN o pasarelas y tiendas con mucho tráfico.'],
                ],
            ],
            [
                'h2'   => 'Dominio Paraguay: .com.py o .com',
                'body' => [
                    'Un dominio com py le dice al visitante que su empresa opera en Paraguay y suele '
                        . 'favorecer la confianza del público local. Lo administra NIC Paraguay, y el registro '
                        . 'pide datos del titular; conviene que figure la empresa y no un empleado o la agencia '
                        . 'que armó el sitio. Un .com es útil si vende al exterior o si el .com.py ya está tomado.',
                    'Muchas empresas registran ambos y redirigen uno al otro, para proteger la marca. Si ya '
                        . 'tiene un dominio registrado por un tercero, lo primero es recuperar la titularidad: sin '
                        . 'ella no puede cambiar de proveedor ni renovar con tranquilidad. En la guía de registro '
                        . 'de dominio .com.py explicamos el proceso paso a paso.',
                ],
            ],
            [
                'h2'   => 'Hosting WordPress: lo que marca la diferencia',
                'body' => [
                    'La mayor parte de los sitios de empresas en Paraguay corre sobre WordPress. Un hosting '
                        . 'wordpress bien configurado tiene PHP en una versión soportada, caché a nivel de '
                        . 'servidor, límites de memoria acordes a Elementor o WooCommerce, copias automáticas '
                        . 'fuera del mismo servidor y un entorno de pruebas para actualizar sin romper el sitio en '
                        . 'producción.',
                    'Configuramos esos puntos, dejamos el sitio con HTTPS forzado y revisamos que los '
                        . 'formularios envíen correo de forma confiable, que es la falla más común después de una '
                        . 'migración: el sitio funciona, pero las consultas de clientes dejan de llegar.',
                ],
            ],
            [
                'h2'   => 'Migración sin cortes de correo ni pérdida de posicionamiento',
                'body' => [
                    'Cambiar de hosting implica mover archivos, base de datos, certificados y registros DNS. '
                        . 'Si se hace de golpe, lo habitual es que el correo deje de llegar durante horas o que '
                        . 'Google encuentre páginas rotas. Trabajamos con una copia completa en el servidor '
                        . 'nuevo, la probamos antes de apuntar el dominio y bajamos el tiempo de propagación de '
                        . 'los DNS con anticipación.',
                    'Las direcciones de las páginas se mantienen iguales; si alguna cambia, dejamos '
                        . 'redirecciones 301 para conservar el posicionamiento ganado.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo',
                'body' => [
                    'El costo total tiene dos partes: lo que se paga al proveedor (plan de hosting y renovación '
                        . 'anual del dominio) y el trabajo de configuración, migración y mantenimiento. El primero '
                        . 'depende del tipo de plan y de la moneda en que factura el proveedor; el segundo, de '
                        . 'cuántos sitios y casillas hay que mover y del estado en que está hoy la instalación.',
                    'Como referencia, en el mercado un hosting compartido de calidad para una pyme suele '
                        . 'ubicarse en un rango orientativo de Gs. 300.000 a Gs. 1.500.000 al año, y un VPS '
                        . 'administrado bastante más; son rangos orientativos del mercado, a confirmar con '
                        . 'presupuesto. El precio del dominio .com.py lo fija NIC Paraguay: consulte el valor '
                        . 'vigente.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Todo a nombre de su empresa', 'text' => 'El dominio, el hosting y los accesos quedan bajo su titularidad, no la nuestra.'],
            ['title' => 'Un solo interlocutor', 'text' => 'Hosting, dominio, DNS y correo los resuelve la misma persona, en español y en horario de Paraguay.'],
            ['title' => 'Sitio rápido y con HTTPS', 'text' => 'Configuración pensada para que el sitio cargue rápido y Google no lo marque como inseguro.'],
            ['title' => 'Copias que se pueden restaurar', 'text' => 'No alcanza con tener backups: probamos que se puedan recuperar.'],
        ],
        'faq' => [
            [
                'q' => '¿Puedo mantener mi dominio actual si cambio de hosting?',
                'a' => 'Sí. El dominio y el hosting son servicios separados. Se cambian los registros DNS para '
                     . 'que apunten al servidor nuevo y el dominio sigue siendo suyo, con el mismo registrador '
                     . 'o trasladado si lo prefiere.',
            ],
            [
                'q' => '¿Quién figura como titular del dominio .com.py?',
                'a' => 'Su empresa. Registramos el dominio con los datos de la razón social y un contacto '
                     . 'administrativo suyo. Nosotros figuramos, si hace falta, solo como contacto técnico.',
            ],
            [
                'q' => '¿Cuánto demora una migración de hosting?',
                'a' => 'Un sitio WordPress con pocas casillas de correo suele migrarse en pocos días hábiles, '
                     . 'incluida la prueba previa. Depende sobre todo de que el proveedor actual entregue los '
                     . 'accesos a tiempo.',
            ],
            [
                'q' => '¿El hosting incluye correo?',
                'a' => 'Muchos planes incluyen casillas básicas. Para empresas con varios usuarios solemos '
                     . 'recomendar separar el correo en Google Workspace, así un problema del sitio no afecta al '
                     . 'correo y viceversa.',
            ],
            [
                'q' => '¿Qué pasa si el sitio se cae?',
                'a' => 'Revisamos si es un problema del servidor, del dominio, del certificado o del propio '
                     . 'sitio, y lo resolvemos o escalamos al proveedor. Con copias de seguridad probadas, en el '
                     . 'peor caso se restaura la última versión funcional.',
            ],
            [
                'q' => '¿Emiten factura legal?',
                'a' => 'Sí, el trabajo de configuración y mantenimiento se factura en guaraníes. El plan de '
                     . 'hosting lo factura el proveedor directamente a su empresa.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto de hosting'],
        'related'   => ['correo-corporativo'],
        'guides'    => ['como-registrar-dominio-com-py', 'mejor-hosting-para-wordpress'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'correo-corporativo' => [
        'path'            => '/servicios/correo-corporativo/',
        'title'           => 'Correo corporativo con Google Workspace',
        'navLabel'        => 'Correo corporativo',
        'cluster'         => 'infra',
        'parent'          => null,
        'seoTitle'        => 'Correo corporativo con Google Workspace',
        'metaDescription' => 'Correo corporativo con Google Workspace: Gmail con dominio propio, '
                           . 'migración de casillas, SPF, DKIM y DMARC, configurado para su empresa.',
        'hero' => [
            'eyebrow' => 'Hosting, dominios y correo',
            'h1'      => 'Correo corporativo con Google Workspace para su empresa',
            'h2'      => 'Gmail con el dominio de su empresa, bien configurado para que sus correos no terminen en spam.',
            'lead'    => 'Un correo corporativo del tipo nombre@suempresa.com.py transmite seriedad, y con '
                       . 'Google Workspace su equipo usa la interfaz de Gmail que ya conoce, con calendario, '
                       . 'Drive y Meet. Configuramos el email corporativo desde cero o migramos sus casillas '
                       . 'actuales, dejamos la autenticación del dominio en regla y le entregamos la '
                       . 'administración a su empresa.',
        ],
        'includes' => [
            'Elección del plan de Google Workspace según usuarios y almacenamiento',
            'Alta de la cuenta a nombre de su empresa y verificación del dominio',
            'Creación de usuarios, alias y grupos (ventas@, facturacion@, rrhh@)',
            'Registros MX, SPF, DKIM y DMARC configurados y comprobados',
            'Migración de correos, contactos y calendarios desde su proveedor actual',
            'Configuración en computadoras y teléfonos de su equipo',
            'Firmas de correo uniformes para todo el personal',
            'Una sesión de capacitación para el administrador de su empresa',
            'Documento con accesos de administrador entregado a la dirección de la empresa',
        ],
        'excludes' => [
            'El costo de las licencias de Google Workspace, que se pagan a Google o al revendedor',
            'Soporte diario de escritorio a cada usuario, salvo que se acuerde un plan de soporte',
            'Recuperación de correos de cuentas cuyo acceso se perdió antes de contratarnos, que depende del proveedor anterior',
            'Auditorías de seguridad o análisis forense de cuentas comprometidas (ver ciberseguridad.com.py)',
        ],
        'weNeed' => [
            'El dominio de la empresa y acceso a su DNS (o el contacto de quien lo administra)',
            'La lista de personas que necesitan casilla y los alias o grupos que usan hoy',
            'Acceso a las casillas actuales si hay que migrar correos',
            'Un medio de pago a nombre de la empresa para las licencias',
            'Una persona designada como administradora del lado de su empresa',
        ],
        'sections' => [
            [
                'h2'   => 'Por qué un correo empresarial con dominio propio',
                'body' => [
                    'Una dirección de Gmail o Hotmail genérica sirve para empezar, pero cuando la empresa crece '
                        . 'genera problemas concretos: el cliente duda de la legitimidad, la casilla queda '
                        . 'asociada a una persona y, cuando esa persona se va, se va con ella el historial de '
                        . 'clientes y proveedores.',
                    'Con un correo empresarial en su propio dominio las casillas pertenecen a la empresa. Si '
                        . 'alguien deja la organización, el administrador suspende el acceso, transfiere los '
                        . 'correos y reasigna la dirección, sin depender de la buena voluntad de nadie.',
                ],
            ],
            [
                'h2'   => 'Gmail con dominio propio: qué incluye Google Workspace',
                'body' => [
                    'Google Workspace es la versión empresarial de las herramientas de Google. Cada usuario '
                        . 'tiene Gmail con el dominio de la empresa, Calendar compartido, Drive con '
                        . 'almacenamiento según el plan, Meet para videollamadas y Docs, Sheets y Slides. El '
                        . 'administrador controla usuarios, contraseñas, verificación en dos pasos y qué se '
                        . 'puede compartir fuera de la organización.',
                    'Los planes se diferencian principalmente por almacenamiento por usuario, cantidad de '
                        . 'participantes en Meet, grabación de reuniones y funciones de retención y auditoría. '
                        . 'En la guía de precios de Google Workspace en Paraguay repasamos cada plan; los precios '
                        . 'los fija Google y cambian, así que conviene consultar el valor vigente antes de decidir.',
                ],
                'items' => [
                    ['title' => 'Gmail y Calendar', 'text' => 'Correo con su dominio, agenda compartida y salas de reunión.'],
                    ['title' => 'Drive compartido', 'text' => 'Carpetas de la empresa que no dependen de un empleado.'],
                    ['title' => 'Consola de administración', 'text' => 'Altas, bajas, contraseñas y seguridad desde un solo lugar.'],
                ],
            ],
            [
                'h2'   => 'Configuración para que sus correos no lleguen a spam',
                'body' => [
                    'Desde 2024 Gmail y otros proveedores exigen que los remitentes autentiquen su dominio. '
                        . 'Un correo corporativo sin SPF, DKIM y DMARC correctos termina en la carpeta de spam del '
                        . 'cliente o directamente rechazado, y el problema pasa desapercibido hasta que alguien '
                        . 'reclama una cotización que nunca llegó.',
                    'Configuramos los tres registros, incluimos en el SPF a los otros servicios que envían '
                        . 'correo en nombre de su dominio (el formulario del sitio web, el sistema de facturación, '
                        . 'el CRM) y verificamos con pruebas de envío que los mensajes pasen la autenticación.',
                ],
            ],
            [
                'h2'   => 'Migración desde su correo actual',
                'body' => [
                    'Si hoy usa casillas del hosting, de otro proveedor o de Microsoft, migramos los correos, '
                        . 'contactos y calendarios a Google Workspace. Planificamos el cambio de registros MX '
                        . 'para un horario de poco movimiento y mantenemos la casilla anterior activa unos días, '
                        . 'para capturar cualquier mensaje que llegue durante la propagación.',
                    'Al final, cada usuario abre su Gmail y encuentra su historial completo. Dejamos '
                        . 'configurados los teléfonos y las computadoras para que el cambio no frene el trabajo.',
                ],
            ],
            [
                'h2'   => 'Qué determina el costo',
                'body' => [
                    'Hay dos costos separados: las licencias mensuales o anuales por usuario, que cobra Google, '
                        . 'y el trabajo de configuración y migración. El segundo depende de cuántos usuarios hay, '
                        . 'cuánto correo hay que migrar y desde qué proveedor, y de si hace falta ordenar el DNS del '
                        . 'dominio. Le presentamos un presupuesto cerrado en guaraníes para la puesta en marcha.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Casillas que son de la empresa', 'text' => 'El administrador de su empresa controla altas, bajas y contraseñas.'],
            ['title' => 'Correos que llegan', 'text' => 'SPF, DKIM y DMARC configurados y probados, no copiados de un tutorial.'],
            ['title' => 'Sin cortes', 'text' => 'Migración planificada para que nadie pierda correos durante el cambio.'],
            ['title' => 'Herramientas que ya conocen', 'text' => 'La interfaz de Gmail reduce la curva de aprendizaje del equipo.'],
        ],
        'faq' => [
            [
                'q' => '¿Puedo usar Gmail con dominio propio sin cambiar mi sitio web?',
                'a' => 'Sí. El correo se configura con los registros MX del dominio y es independiente del '
                     . 'hosting del sitio. Su página web sigue donde está.',
            ],
            [
                'q' => '¿Cuánto cuesta Google Workspace en Paraguay?',
                'a' => 'Google cobra por usuario y por mes, con precios que varían según el plan y la moneda de '
                     . 'facturación y que cambian con el tiempo. Consulte el valor vigente en la página oficial '
                     . 'de Google Workspace o pídanos la cotización actualizada.',
            ],
            [
                'q' => '¿Qué pasa con los correos que ya tengo?',
                'a' => 'Los migramos a Google Workspace junto con contactos y calendarios, siempre que tengamos '
                     . 'acceso a las casillas actuales.',
            ],
            [
                'q' => '¿Necesito una licencia para cada dirección?',
                'a' => 'No necesariamente. Direcciones como info@ o ventas@ pueden ser alias o grupos que '
                     . 'reenvían a usuarios existentes, sin licencia propia. Lo definimos con usted para no pagar '
                     . 'licencias de más.',
            ],
            [
                'q' => '¿Trabajan también con Microsoft 365?',
                'a' => 'Nuestro servicio estándar es Google Workspace. Si su empresa ya usa Microsoft 365, '
                     . 'podemos revisar la configuración del dominio y la entrega de correo; una migración entre '
                     . 'ambas plataformas se cotiza aparte.',
            ],
            [
                'q' => '¿Quién queda como administrador?',
                'a' => 'Una persona de su empresa. Nosotros podemos mantener un acceso de soporte si lo desea, '
                     . 'pero la cuenta y la facturación de licencias quedan a nombre de su empresa.',
            ],
        ],
        'cta'       => ['label' => 'Pedir presupuesto de correo corporativo'],
        'related'   => ['hosting'],
        'guides'    => ['google-workspace-precios-paraguay', 'como-crear-correo-corporativo'],
        'articles'  => [],
        'toolLinks' => [],
    ],
];
