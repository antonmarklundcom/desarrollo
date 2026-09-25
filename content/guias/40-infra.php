<?php
/** Phase "infra": guides on dominios, hosting and correo corporativo. Same shape as content/guias.php. */

declare(strict_types=1);

return [

    'como-registrar-dominio-com-py' => [
        'path'            => '/guias/como-registrar-dominio-com-py/',
        'title'           => 'Cómo registrar un dominio .com.py',
        'navLabel'        => 'Registrar dominio .com.py',
        'seoTitle'        => 'Cómo registrar un dominio .com.py',
        'metaDescription' => 'Guía para registrar un dominio .com.py ante NIC Paraguay: elegir el nombre, '
                           . 'datos del titular, pago, DNS y renovación, paso a paso.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo registrar un dominio .com.py, paso a paso',
            'lead'    => 'Para empresas y profesionales que quieren su dominio Paraguay a nombre propio y sin depender de terceros.',
        ],
        'intro' => [
            'Los dominios terminados en .py los administra NIC Paraguay (nic.py). El proceso general es '
                . 'verificar que el nombre esté libre, cargar los datos del titular y de los contactos, pagar '
                . 'el registro y apuntar el dominio a los servidores DNS de su hosting.',
            'Los requisitos exactos por tipo de dominio (.com.py, .org.py, .edu.py y otros), el precio y la '
                . 'forma de pago los define NIC Paraguay y pueden cambiar: consulte el valor vigente en su '
                . 'sitio antes de iniciar.',
        ],
        'steps' => [
            [
                'title' => 'Elija el nombre y verifique que esté libre',
                'body'  => [
                    'Prefiera un nombre corto, fácil de dictar por teléfono y sin guiones. Consulte la '
                        . 'disponibilidad en el buscador de NIC Paraguay. Revise también si el .com está libre, '
                        . 'para registrarlo y proteger la marca.',
                ],
            ],
            [
                'title' => 'Defina quién será el titular',
                'body'  => [
                    'El titular debe ser la empresa (con su razón social y RUC) o la persona dueña del negocio, '
                        . 'nunca el empleado o la agencia que arma el sitio. Quien figura como titular es quien '
                        . 'puede renovar, transferir o cambiar el dominio.',
                ],
            ],
            [
                'title' => 'Cree la cuenta y cargue los contactos',
                'body'  => [
                    'En el sistema de NIC Paraguay se registran contactos titular, administrativo, técnico y '
                        . 'de facturación. Use correos de la empresa que no dependan de una sola persona, por '
                        . 'ejemplo administracion@.',
                ],
            ],
            [
                'title' => 'Indique los servidores DNS',
                'body'  => [
                    'Su proveedor de hosting le da los nombres de servidor (ns1, ns2). Cárguelos en el '
                        . 'registro. Si todavía no tiene hosting, puede usar un servicio de DNS y cambiarlo después.',
                ],
            ],
            [
                'title' => 'Pague el registro y guarde el comprobante',
                'body'  => [
                    'Realice el pago por los medios que indique NIC Paraguay y guarde el comprobante junto con '
                        . 'los accesos. El registro suele ser anual o por varios años según la opción elegida.',
                ],
            ],
            [
                'title' => 'Configure sitio y correo',
                'body'  => [
                    'Con el dominio activo, cargue en el DNS los registros del sitio (A o CNAME) y del correo '
                        . '(MX, SPF, DKIM y DMARC). Espere la propagación, que puede tardar algunas horas.',
                ],
            ],
            [
                'title' => 'Agende la renovación',
                'body'  => [
                    'Un dominio vencido deja sin sitio ni correo a la empresa. Anote la fecha de vencimiento en '
                        . 'un calendario compartido y verifique que el correo de avisos sea de uso diario.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto cuesta un dominio .com.py?',
                'a' => 'El precio lo fija NIC Paraguay y se actualiza periódicamente. Consulte el valor vigente '
                     . 'en nic.py antes de registrar.',
            ],
            [
                'q' => '¿Puedo registrar un .com.py siendo persona física?',
                'a' => 'Los requisitos varían según el tipo de dominio. Revise en NIC Paraguay qué documentación '
                     . 'pide cada categoría antes de iniciar el trámite.',
            ],
            [
                'q' => '¿Qué hago si mi dominio lo registró otra persona?',
                'a' => 'Solicite al titular actual el cambio de titularidad a nombre de la empresa. Si no '
                     . 'responde, consulte a NIC Paraguay el procedimiento aplicable.',
            ],
            [
                'q' => '¿Comprar dominio .com o .com.py?',
                'a' => 'Si su público es paraguayo, el .com.py genera confianza local. Si puede, registre ambos y '
                     . 'redirija uno al otro.',
            ],
        ],
        'relatedService' => 'hosting',
        'toolLink'       => null,
        'related'        => ['mejor-hosting-para-wordpress', 'como-crear-correo-corporativo'],
    ],

    'google-workspace-precios-paraguay' => [
        'path'            => '/guias/google-workspace-precios-paraguay/',
        'title'           => 'Google Workspace: planes y precios en Paraguay',
        'navLabel'        => 'Precios de Google Workspace',
        'seoTitle'        => 'Google Workspace: precios en Paraguay',
        'metaDescription' => 'Qué incluye cada plan de Google Workspace, cómo se cobra en Paraguay y cómo '
                           . 'elegir según usuarios, almacenamiento y reuniones, sin pagar de más.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Google Workspace en Paraguay: planes, precios y cómo elegir',
            'lead'    => 'Para empresas que quieren correo corporativo con Gmail y necesitan decidir qué plan contratar.',
        ],
        'intro' => [
            'Google Workspace se cobra por usuario y por mes, con descuento si se contrata un compromiso '
                . 'anual. Los planes para empresas se llaman Business Starter, Business Standard, Business Plus '
                . 'y Enterprise, y se diferencian por almacenamiento, funciones de Meet y controles de seguridad.',
            'Google ajusta sus precios y la moneda de facturación varía según el país y el medio de pago. Por '
                . 'eso esta guía no publica cifras: consulte el valor vigente en la página oficial de Google '
                . 'Workspace antes de decidir.',
        ],
        'steps' => [
            [
                'title' => 'Cuente los usuarios reales',
                'body'  => [
                    'Liste quién necesita una casilla propia. Las direcciones compartidas como ventas@ o '
                        . 'info@ pueden ser grupos o alias sin licencia adicional.',
                ],
            ],
            [
                'title' => 'Estime el almacenamiento',
                'body'  => [
                    'Business Starter ofrece menos espacio por usuario que Business Standard. Si su equipo '
                        . 'guarda planos, fotos o videos en Drive, el plan de entrada se queda corto rápido.',
                ],
            ],
            [
                'title' => 'Revise qué necesita de Meet',
                'body'  => [
                    'Grabación de reuniones, más participantes y seminarios web aparecen a partir de Business '
                        . 'Standard. Si solo hace videollamadas internas breves, el plan básico puede alcanzar.',
                ],
            ],
            [
                'title' => 'Evalúe seguridad y retención',
                'body'  => [
                    'Business Plus agrega Vault (retención y búsqueda legal de correos) y controles de '
                        . 'dispositivos. Es útil para estudios jurídicos, contables o empresas con requisitos de '
                        . 'auditoría.',
                ],
            ],
            [
                'title' => 'Compare pago mensual y anual',
                'body'  => [
                    'El plan flexible permite sumar y quitar usuarios cada mes; el anual suele ser más barato '
                        . 'por usuario pero compromete la cantidad de licencias durante el año.',
                ],
            ],
            [
                'title' => 'Verifique medio de pago y facturación',
                'body'  => [
                    'Google cobra con tarjeta a nombre de la empresa. Confirme con su contador cómo se '
                        . 'registra el gasto de un servicio del exterior.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Hay una prueba gratuita?',
                'a' => 'Google suele ofrecer un período de prueba para cuentas nuevas. Verifique las condiciones '
                     . 'vigentes al registrarse.',
            ],
            [
                'q' => '¿Puedo mezclar planes dentro de la misma empresa?',
                'a' => 'En algunos casos Google permite combinar ediciones, con restricciones. Consulte las '
                     . 'condiciones vigentes antes de planificarlo.',
            ],
            [
                'q' => '¿Puedo cambiar de plan después?',
                'a' => 'Sí, se puede subir de plan en cualquier momento; bajar puede tener limitaciones si está en '
                     . 'un compromiso anual.',
            ],
            [
                'q' => '¿Incluye el dominio?',
                'a' => 'No necesariamente. Si ya tiene dominio, se usa ese. Si no, puede registrarlo aparte, por '
                     . 'ejemplo un .com.py ante NIC Paraguay.',
            ],
        ],
        'relatedService' => 'correo-corporativo',
        'toolLink'       => null,
        'related'        => ['como-crear-correo-corporativo', 'como-registrar-dominio-com-py'],
    ],

    'como-crear-correo-corporativo' => [
        'path'            => '/guias/como-crear-correo-corporativo/',
        'title'           => 'Cómo crear un correo corporativo',
        'navLabel'        => 'Crear correo corporativo',
        'seoTitle'        => 'Cómo crear un correo corporativo',
        'metaDescription' => 'Pasos para crear un correo corporativo con su dominio: elegir proveedor, '
                           . 'verificar el dominio, registros MX, SPF, DKIM, DMARC y crear usuarios.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo crear un correo corporativo con su propio dominio',
            'lead'    => 'Para empresas que quieren pasar de una casilla genérica a direcciones con su dominio que lleguen a la bandeja de entrada.',
        ],
        'intro' => [
            'Un correo corporativo necesita tres cosas: un dominio a nombre de la empresa, un proveedor de '
                . 'correo (Google Workspace, Microsoft 365 o las casillas del hosting) y la configuración DNS '
                . 'que conecta uno con otro.',
            'La parte que más se descuida es la autenticación. Sin SPF, DKIM y DMARC, los correos de la '
                . 'empresa terminan en spam o son rechazados por Gmail y Outlook.',
        ],
        'steps' => [
            [
                'title' => 'Asegure el dominio',
                'body'  => ['Verifique que el dominio esté a nombre de la empresa y que tenga acceso a su panel de DNS.'],
            ],
            [
                'title' => 'Elija el proveedor de correo',
                'body'  => [
                    'Las casillas del hosting sirven para pocos usuarios. Para un equipo, Google Workspace o '
                        . 'Microsoft 365 ofrecen más espacio, mejor filtro de spam y administración centralizada.',
                ],
            ],
            [
                'title' => 'Verifique el dominio en el proveedor',
                'body'  => ['El proveedor le pedirá agregar un registro TXT en el DNS para demostrar que el dominio es suyo.'],
            ],
            [
                'title' => 'Cambie los registros MX',
                'body'  => [
                    'Los MX indican a dónde se entregan los correos. Reemplace los anteriores por los del nuevo '
                        . 'proveedor, preferentemente en un horario de poco movimiento.',
                ],
            ],
            [
                'title' => 'Configure SPF, DKIM y DMARC',
                'body'  => [
                    'SPF lista los servidores autorizados a enviar por su dominio; DKIM firma cada mensaje; '
                        . 'DMARC indica qué hacer con los correos que fallan. Incluya en SPF todo servicio que '
                        . 'envíe en su nombre: formulario web, CRM, sistema de facturación.',
                ],
            ],
            [
                'title' => 'Cree usuarios, alias y grupos',
                'body'  => ['Una casilla por persona, y direcciones como ventas@ o info@ como grupos o alias para no pagar licencias de más.'],
            ],
            [
                'title' => 'Pruebe el envío y la recepción',
                'body'  => ['Envíe correos a Gmail y Outlook y revise en los encabezados que SPF, DKIM y DMARC figuren como aprobados.'],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Puedo crear un correo corporativo gratis?',
                'a' => 'Algunos planes de hosting incluyen casillas sin costo adicional, pero con límites de '
                     . 'espacio y filtros de spam más débiles. El dominio siempre tiene un costo de registro.',
            ],
            [
                'q' => '¿Pierdo correos al cambiar los MX?',
                'a' => 'Durante la propagación algunos mensajes pueden llegar a la casilla vieja. Manténgala activa '
                     . 'unos días y revísela.',
            ],
            [
                'q' => '¿Qué política de DMARC conviene al principio?',
                'a' => 'Empiece con p=none para observar los reportes, y endurezca a quarantine o reject cuando '
                     . 'confirme que todos sus envíos legítimos pasan la autenticación.',
            ],
        ],
        'relatedService' => 'correo-corporativo',
        'toolLink'       => null,
        'related'        => ['google-workspace-precios-paraguay', 'como-registrar-dominio-com-py'],
    ],

    'mejor-hosting-para-wordpress' => [
        'path'            => '/guias/mejor-hosting-para-wordpress/',
        'title'           => 'Cómo elegir el mejor hosting para WordPress',
        'navLabel'        => 'Hosting para WordPress',
        'seoTitle'        => 'Cómo elegir hosting para WordPress',
        'metaDescription' => 'Criterios para elegir hosting WordPress en Paraguay: versión de PHP, memoria, '
                           . 'caché, copias de seguridad, ubicación del servidor y soporte técnico.',
        'lastReviewed'    => '2026-09-25',
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo elegir el mejor hosting para WordPress',
            'lead'    => 'Para empresas con un sitio o tienda en WordPress que quieren que cargue rápido y no se caiga.',
        ],
        'intro' => [
            'No existe un único mejor hosting: existe el adecuado para su sitio. Un sitio institucional, una '
                . 'tienda WooCommerce y un portal con mucho contenido tienen necesidades distintas.',
            'Estos criterios le permiten comparar planes con datos técnicos en lugar de promesas comerciales.',
        ],
        'steps' => [
            [
                'title' => 'Defina el tipo de sitio',
                'body'  => ['Anote cuántas páginas y productos tiene, cuántas visitas espera por mes y si procesa pagos en línea.'],
            ],
            [
                'title' => 'Verifique la versión de PHP y la base de datos',
                'body'  => ['El plan debe ofrecer versiones de PHP con soporte vigente y permitir elegirlas desde el panel.'],
            ],
            [
                'title' => 'Revise memoria y límites',
                'body'  => [
                    'Elementor y WooCommerce consumen memoria. Pregunte por el límite de memoria de PHP, los '
                        . 'procesos simultáneos y si hay límites de visitas que suspendan el sitio.',
                ],
            ],
            [
                'title' => 'Pida caché a nivel servidor',
                'body'  => ['LiteSpeed, Nginx con caché o un CDN reducen el tiempo de carga más que cualquier plugin.'],
            ],
            [
                'title' => 'Exija copias de seguridad restaurables',
                'body'  => ['Copias diarias, guardadas fuera del mismo servidor, y la posibilidad de restaurar usted mismo desde el panel.'],
            ],
            [
                'title' => 'Considere la ubicación del servidor',
                'body'  => ['Para un público en Paraguay, un servidor en Sudamérica o con buena conexión regional reduce la latencia.'],
            ],
            [
                'title' => 'Pruebe el soporte antes de contratar',
                'body'  => ['Haga una consulta técnica previa: el tiempo y la calidad de la respuesta dicen mucho del servicio.'],
            ],
        ],
        'faq' => [
            [
                'q' => '¿Sirve un hosting barato para WordPress?',
                'a' => 'Para un sitio pequeño, a veces sí. El problema aparece con tiendas o picos de tráfico: '
                     . 'servidores saturados que hacen lento el sitio.',
            ],
            [
                'q' => '¿Qué es un hosting WordPress administrado?',
                'a' => 'Un plan donde el proveedor se ocupa de actualizaciones, caché y copias de WordPress. '
                     . 'Cuesta más, pero reduce el trabajo técnico propio.',
            ],
            [
                'q' => '¿Cuándo conviene un VPS?',
                'a' => 'Cuando la tienda o el sitio superan lo que permite un plan compartido, o cuando necesita '
                     . 'correr integraciones propias en el servidor.',
            ],
        ],
        'relatedService' => 'hosting',
        'toolLink'       => null,
        'related'        => ['como-registrar-dominio-com-py', 'como-crear-correo-corporativo'],
    ],
];
