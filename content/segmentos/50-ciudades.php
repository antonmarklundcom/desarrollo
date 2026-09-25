<?php
/**
 * Phase "ciudades": one local landing page per Paraguayan city, as segment
 * records rendered by templates/segment.php. Route files live at
 * /desarrollo-web-<ciudad>/index.php.
 *
 * We do not claim an office in any city: work is remote, with visits by
 * arrangement. Each page carries its own local angle (the city's economy).
 */

declare(strict_types=1);

$__city = static function (string $slug, string $name, string $meta, string $lead, array $angle, array $traps, array $faqExtra): array {
    return [
        'path'            => '/desarrollo-web-' . $slug . '/',
        'navLabel'        => $name,
        'seoTitle'        => 'Páginas web en ' . $name,
        'metaDescription' => $meta,
        'hero' => [
            'eyebrow' => 'Desarrollo web en ' . $name,
            'h1'      => 'Páginas web y desarrollo de software en ' . $name,
            'lead'    => $lead,
        ],
        'leadSlug' => 'paginas-web',
        'bundle'   => ['paginas-web', 'desarrollo-de-software', 'facturacion-electronica-sifen', 'whatsapp-business-api'],
        'traps'    => $traps,
        'sections' => [
            [
                'h2'   => 'Páginas web en ' . $name . ' pensadas para su mercado',
                'body' => $angle,
            ],
            [
                'h2'   => 'Desarrollo de software en ' . $name . ': cómo trabajamos a distancia',
                'body' => [
                    'Trabajamos de forma remota: las reuniones son por videollamada o WhatsApp, el '
                        . 'avance se muestra en un sitio de pruebas que usted puede abrir desde el '
                        . 'celular y cada entrega queda documentada por escrito. No tenemos oficina en '
                        . $name . '; cuando el proyecto lo justifica, coordinamos una visita presencial '
                        . 'con anticipación.',
                    'Antes de empezar recibe una propuesta con el alcance, los plazos y el precio en '
                        . 'guaraníes. Lo que no está en la propuesta no se cobra sin su aprobación previa.',
                ],
            ],
        ],
        'weNeed' => [
            'Nombre del negocio, rubro y qué vende o qué servicio presta',
            'Qué quiere lograr con la página o el sistema (consultas, ventas, facturación, orden interno)',
            'Dominio y hosting actuales, si ya los tiene',
            'Logo, fotos y textos disponibles, aunque sean borradores',
            'Un número de WhatsApp para recibir las consultas',
        ],
        'faq' => array_merge([
            [
                'q' => '¿Tienen oficina en ' . $name . '?',
                'a' => 'No. Trabajamos de forma remota con clientes de todo Paraguay y, cuando el '
                     . 'proyecto lo requiere, coordinamos una visita presencial con anticipación.',
            ],
            [
                'q' => '¿Cuánto cuesta una página web en ' . $name . '?',
                'a' => 'Depende de la cantidad de secciones, si necesita tienda o integraciones y quién '
                     . 'carga los contenidos. Le enviamos un presupuesto por escrito en guaraníes '
                     . 'después de una conversación corta.',
            ],
        ], $faqExtra),
    ];
};

return [

    'desarrollo-web-asuncion' => $__city(
        'asuncion', 'Asunción',
        'Páginas web y desarrollo de software en Asunción para empresas de servicios, comercios y '
            . 'estudios profesionales, con SIFEN y cobros integrados.',
        'Sitios, sistemas e integraciones para empresas de la capital que compiten con decenas de '
            . 'proveedores en la misma búsqueda de Google.',
        [
            'En Asunción se concentran oficinas corporativas, estudios profesionales, clínicas, '
                . 'inmobiliarias y buena parte del comercio de servicios del país. Quien busca '
                . 'páginas web en Asunción o un proveedor de su rubro compara varias opciones en '
                . 'pocos minutos, casi siempre desde el celular.',
            'Por eso una página para la capital tiene que cargar rápido, explicar qué hace el negocio '
                . 'en la primera pantalla y llevar a WhatsApp o a un formulario sin pasos de más. '
                . 'Para muchas empresas el siguiente paso es conectar la web con la facturación '
                . 'electrónica SIFEN, con un CRM o con cobros en línea.',
        ],
        [
            ['title' => 'Competir solo con redes sociales', 'text' => 'En la capital, quien compara proveedores busca en Google; sin sitio propio el negocio no aparece en esa comparación.'],
            ['title' => 'Una web lenta en datos móviles', 'text' => 'Imágenes pesadas y plantillas cargadas hacen que el visitante se vaya antes de ver el número de contacto.'],
            ['title' => 'Sistemas que no se hablan', 'text' => 'Facturación, ventas y consultas en planillas separadas obligan a cargar lo mismo dos o tres veces.'],
        ],
        [
            ['q' => '¿Pueden integrar mi sistema con SIFEN?', 'a' => 'Sí. Evaluamos su sistema actual y le proponemos la integración con la facturación electrónica de la DNIT o un sistema nuevo si el actual no lo permite.'],
        ]
    ),

    'desarrollo-web-ciudad-del-este' => $__city(
        'ciudad-del-este', 'Ciudad del Este',
        'Páginas web y desarrollo de software en Ciudad del Este para el comercio fronterizo: '
            . 'catálogos, tiendas online, WhatsApp y facturación electrónica.',
        'Catálogos, tiendas y sistemas para el comercio de frontera, con clientes que consultan en '
            . 'español y en portugués.',
        [
            'Ciudad del Este vive del comercio: importadores, tiendas de electrónica, perfumerías, '
                . 'distribuidores mayoristas y casas de repuestos atienden a compradores de todo el '
                . 'país y del otro lado del Puente de la Amistad. Buena parte de esas consultas '
                . 'empieza por WhatsApp y muchas llegan en portugués.',
            'Una página web para un comercio de CDE suele necesitar un catálogo fácil de actualizar, '
                . 'precios o disponibilidad por consulta, versión en portugués y un flujo claro hacia '
                . 'WhatsApp. Para mayoristas, el paso siguiente es un sistema de pedidos, stock y '
                . 'facturación electrónica que soporte el volumen.',
        ],
        [
            ['title' => 'Catálogo desactualizado', 'text' => 'Con miles de productos que rotan rápido, un catálogo que no se puede editar fácilmente muestra precios y stock que ya no existen.'],
            ['title' => 'Atender solo en español', 'text' => 'Parte de la clientela de frontera consulta en portugués; un sitio sin esa versión pierde consultas.'],
            ['title' => 'Un solo WhatsApp para todo', 'text' => 'Cuando ventas, soporte y mayoristas escriben al mismo número, las consultas se pierden entre cientos de chats.'],
        ],
        [
            ['q' => '¿Pueden hacer la página en español y portugués?', 'a' => 'Sí. Armamos el sitio con ambas versiones y el formulario y el botón de WhatsApp en el idioma de cada visitante.'],
        ]
    ),

    'desarrollo-web-encarnacion' => $__city(
        'encarnacion', 'Encarnación',
        'Páginas web en Encarnación para turismo, hotelería, gastronomía y comercio: reservas, '
            . 'WhatsApp, cobros en línea y visibilidad en Google.',
        'Sitios para hoteles, posadas, restaurantes y comercios que reciben visitantes en temporada '
            . 'y clientes locales todo el año.',
        [
            'Encarnación combina turismo —la costanera, las playas en verano, el Carnaval y las '
                . 'Misiones Jesuíticas de la zona— con un comercio activo y la producción agrícola del '
                . 'departamento de Itapúa. Quien planea un viaje busca alojamiento, comida y '
                . 'actividades en Google semanas antes de llegar.',
            'Para un hotel, una posada o una agencia, la página web tiene que mostrar fotos, tarifas '
                . 'o disponibilidad por consulta, ubicación y un camino directo a WhatsApp o a una '
                . 'reserva. Para comercios y empresas del agro, el foco pasa a catálogos, pedidos y '
                . 'facturación electrónica.',
        ],
        [
            ['title' => 'Depender solo de plataformas de reserva', 'text' => 'Sin sitio propio cada reserva paga comisión y el cliente no queda en su base de contactos.'],
            ['title' => 'Página sin información de temporada', 'text' => 'Fechas, tarifas y horarios viejos generan consultas repetidas y desconfianza.'],
            ['title' => 'No aparecer en el mapa', 'text' => 'Un perfil de Google incompleto hace que el turista elija al vecino que sí muestra fotos y horarios.'],
        ],
        [
            ['q' => '¿Pueden agregar reservas o cobro de seña?', 'a' => 'Sí. Podemos sumar un formulario de reserva y, si lo necesita, cobro en línea con una pasarela de pagos local.'],
        ]
    ),

    'desarrollo-web-san-lorenzo' => $__city(
        'san-lorenzo', 'San Lorenzo',
        'Páginas web y desarrollo de software en San Lorenzo para comercios, institutos, clínicas y '
            . 'pymes, con WhatsApp, catálogo y facturación electrónica.',
        'Sitios y sistemas para comercios, institutos y servicios de una de las ciudades más '
            . 'transitadas del área metropolitana.',
        [
            'San Lorenzo reúne un centro comercial muy activo, universidades e institutos, clínicas '
                . 'y una gran cantidad de pymes sobre las rutas que la conectan con Asunción y el '
                . 'interior. Mucha gente la atraviesa a diario y busca en el celular dónde comprar o '
                . 'a quién consultar.',
            'Una página para un negocio sanlorenzano funciona mejor cuando muestra ubicación, horarios '
                . 'y productos o servicios concretos, con un botón a WhatsApp visible. Institutos y '
                . 'academias suelen necesitar además inscripciones en línea y la información de '
                . 'cursos siempre actualizada.',
        ],
        [
            ['title' => 'Horarios y ubicación desactualizados', 'text' => 'El cliente que llega y encuentra cerrado no vuelve; la web y el perfil de Google deben coincidir.'],
            ['title' => 'Inscripciones por papel', 'text' => 'Institutos que toman datos a mano pierden consultas y duplican trabajo al cargar planillas.'],
            ['title' => 'Página que nadie actualiza', 'text' => 'Si cambiar un precio requiere llamar al programador, la web queda vieja en semanas.'],
        ],
        [
            ['q' => '¿Puedo actualizar yo mismo la página?', 'a' => 'Sí. Le dejamos un panel para editar textos, fotos y productos, y una guía corta de uso.'],
        ]
    ),

    'desarrollo-web-luque' => $__city(
        'luque', 'Luque',
        'Páginas web en Luque para comercios, talleres, joyerías y empresas de logística cerca del '
            . 'aeropuerto, con catálogo, WhatsApp y facturación SIFEN.',
        'Sitios y sistemas para comercios, artesanos y empresas de servicios y logística de Luque.',
        [
            'Luque es conocida por su tradición de orfebrería en filigrana y por instrumentos '
                . 'musicales artesanales, y al mismo tiempo concentra empresas de servicios, depósitos '
                . 'y logística por su cercanía al aeropuerto internacional y a Asunción.',
            'Para un taller o una joyería, la página web es una vitrina: fotos cuidadas, catálogo y '
                . 'pedidos por WhatsApp, incluso para clientes de otras ciudades. Para empresas de '
                . 'logística y servicios, el foco está en sistemas de seguimiento, cotización y '
                . 'facturación electrónica.',
        ],
        [
            ['title' => 'Vender piezas únicas sin fotos buenas', 'text' => 'En artesanía y joyería el cliente decide por la imagen; un catálogo con fotos pobres no vende.'],
            ['title' => 'Cotizar todo a mano', 'text' => 'Empresas de servicios que arman cada presupuesto desde cero demoran respuestas que el cliente espera en minutos.'],
            ['title' => 'Envíos sin información clara', 'text' => 'Si la página no explica cómo y a dónde envía, cada venta empieza con diez preguntas por WhatsApp.'],
        ],
        [
            ['q' => '¿Pueden armar un catálogo para ventas a otras ciudades?', 'a' => 'Sí. Armamos un catálogo con fotos, precios o consulta y la información de envío, conectado a WhatsApp o a un cobro en línea.'],
        ]
    ),

    'desarrollo-web-fernando-de-la-mora' => $__city(
        'fernando-de-la-mora', 'Fernando de la Mora',
        'Desarrollo web en Fernando de la Mora para distribuidoras, comercios y talleres: páginas, '
            . 'catálogos, pedidos por WhatsApp y facturación electrónica.',
        'Páginas y sistemas para distribuidoras, comercios y servicios de una ciudad pegada a la capital.',
        [
            'Fernando de la Mora limita con Asunción y concentra comercios sobre avenidas muy '
                . 'transitadas, distribuidoras, talleres mecánicos y empresas de servicios que '
                . 'atienden a toda el área metropolitana.',
            'Para una distribuidora, lo que más rinde suele ser un catálogo con pedidos para clientes '
                . 'frecuentes y la facturación electrónica conectada al stock. Para talleres y '
                . 'comercios, una página clara con servicios, ubicación y turnos o consultas por '
                . 'WhatsApp.',
        ],
        [
            ['title' => 'Pedidos por audio y foto', 'text' => 'Tomar pedidos de mayoristas por mensajes sueltos genera errores de cantidad y de precio.'],
            ['title' => 'Stock en una planilla aparte', 'text' => 'Si ventas y depósito no comparten el mismo dato, se vende lo que no hay.'],
            ['title' => 'Competir con la capital sin diferenciarse', 'text' => 'Una página genérica no explica por qué conviene comprarle a usted y no a un proveedor de Asunción.'],
        ],
        [
            ['q' => '¿Pueden hacer un sistema de pedidos para mis clientes mayoristas?', 'a' => 'Sí. Evaluamos su proceso actual y le proponemos un portal de pedidos o un sistema a medida con stock y facturación.'],
        ]
    ),

    'desarrollo-web-lambare' => $__city(
        'lambare', 'Lambaré',
        'Páginas web en Lambaré para comercios de barrio, profesionales, gastronomía y servicios, '
            . 'con WhatsApp, Google Maps y opción de pedidos en línea.',
        'Sitios para comercios, gastronomía y profesionales que atienden a su barrio y a la zona sur de la capital.',
        [
            'Lambaré es una ciudad mayormente residencial junto a Asunción, con comercios de barrio, '
                . 'locales gastronómicos, consultorios, gimnasios y profesionales independientes que '
                . 'viven de clientes cercanos.',
            'En ese contexto la página web trabaja junto con el perfil de Google Maps: quien busca '
                . '"cerca de mí" necesita ver horarios, menú o servicios, fotos y un botón para '
                . 'escribir o pedir. Un sitio simple, rápido y bien conectado suele rendir más que uno '
                . 'grande.',
        ],
        [
            ['title' => 'No figurar en "cerca de mí"', 'text' => 'Sin perfil de Google coherente con la web, el vecino que busca en el celular no lo encuentra.'],
            ['title' => 'Menú o lista de precios en imagen', 'text' => 'Un menú en foto no se lee bien en el celular y Google no lo indexa.'],
            ['title' => 'Pagar por una web más grande de lo necesario', 'text' => 'Un negocio de barrio muchas veces necesita una página de una sola pantalla bien hecha, no diez secciones.'],
        ],
        [
            ['q' => '¿Me sirve una landing page de una sola página?', 'a' => 'Para muchos negocios de barrio sí: una página rápida con servicios, ubicación y WhatsApp. Le decimos con franqueza si alcanza.'],
        ]
    ),

    'desarrollo-web-capiata' => $__city(
        'capiata', 'Capiatá',
        'Desarrollo web en Capiatá para industrias, depósitos, distribuidoras y comercios sobre la '
            . 'ruta: páginas, sistemas de gestión e integración con SIFEN.',
        'Páginas y sistemas para industrias, depósitos y comercios sobre uno de los corredores de ruta más transitados del país.',
        [
            'Capiatá creció sobre la ruta que une Asunción con el interior y hoy tiene industrias, '
                . 'fábricas, depósitos, distribuidoras y una zona comercial amplia. Muchas empresas '
                . 'venden a otros negocios más que al consumidor final.',
            'Para una industria o distribuidora, la página web es la carta de presentación ante '
                . 'compradores de empresas: qué fabrica, rubros que atiende y un contacto comercial '
                . 'claro. Detrás, lo que más ordena suele ser un sistema de pedidos, stock y '
                . 'facturación electrónica integrado.',
        ],
        [
            ['title' => 'Web sin datos para compradores de empresa', 'text' => 'Un comprador corporativo busca productos, fichas técnicas y un contacto comercial; sin eso pasa al siguiente proveedor.'],
            ['title' => 'Facturación y stock desconectados', 'text' => 'Emitir facturas en un sistema y descontar stock en otro duplica trabajo y genera diferencias.'],
            ['title' => 'Procesos que dependen de una sola persona', 'text' => 'Cuando solo una persona sabe cómo funciona la planilla, cualquier ausencia frena la operación.'],
        ],
        [
            ['q' => '¿Hacen sistemas de gestión para fábricas o depósitos?', 'a' => 'Sí. Relevamos su proceso y le proponemos un sistema a medida o la integración de sus herramientas actuales, con facturación electrónica si la necesita.'],
        ]
    ),

    'desarrollo-web-pedro-juan-caballero' => $__city(
        'pedro-juan-caballero', 'Pedro Juan Caballero',
        'Páginas web en Pedro Juan Caballero para el comercio de frontera con Brasil: catálogos en '
            . 'español y portugués, WhatsApp y facturación electrónica.',
        'Sitios y catálogos para comercios de frontera que atienden a clientes paraguayos y brasileños.',
        [
            'Pedro Juan Caballero comparte frontera seca con Ponta Porã y buena parte de su comercio '
                . 'atiende a compradores brasileños. A eso se suma la actividad agrícola y ganadera '
                . 'del departamento de Amambay.',
            'Una página para un comercio de PJC necesita versión en portugués, catálogo con '
                . 'información clara y WhatsApp como canal principal. Para empresas del agro y '
                . 'proveedores, el foco pasa a sistemas de pedidos, clientes y facturación '
                . 'electrónica.',
        ],
        [
            ['title' => 'Sitio solo en español', 'text' => 'Si buena parte de la clientela es brasileña, un sitio sin portugués deja consultas afuera.'],
            ['title' => 'Catálogo sin información clave', 'text' => 'Sin marca, modelo y condiciones claras, cada consulta por WhatsApp arranca desde cero.'],
            ['title' => 'Clientes en la agenda del celular', 'text' => 'Sin una base ordenada de clientes no hay forma de avisar novedades ni de hacer seguimiento.'],
        ],
        [
            ['q' => '¿Pueden hacer la página en español y portugués?', 'a' => 'Sí. Armamos ambas versiones y el formulario y el botón de WhatsApp en el idioma de cada visitante.'],
        ]
    ),

    'desarrollo-web-villarrica' => $__city(
        'villarrica', 'Villarrica',
        'Páginas web y desarrollo de software en Villarrica para comercios, educación, turismo y '
            . 'agroindustria del Guairá, con WhatsApp y facturación SIFEN.',
        'Sitios y sistemas para comercios, instituciones educativas, turismo y empresas del Guairá.',
        [
            'Villarrica es la capital del Guairá, con una fuerte vida cultural y educativa, comercio '
                . 'que atiende a toda la zona y actividad agroindustrial en los alrededores. En '
                . 'verano recibe además visitantes que van a los arroyos y saltos cercanos.',
            'Para un comercio o una institución educativa, la página web es el punto donde se '
                . 'informan horarios, cursos, productos y contacto. Para agroindustria y '
                . 'proveedores, el valor está en ordenar pedidos, clientes y facturación '
                . 'electrónica en un solo sistema.',
        ],
        [
            ['title' => 'Información solo en redes', 'text' => 'Publicaciones que se pierden en el muro no reemplazan una página con horarios, cursos o productos siempre visibles.'],
            ['title' => 'Clientes de otras ciudades sin canal claro', 'text' => 'Quien compra desde otra ciudad necesita saber cómo pagar y cómo recibe; sin eso no concreta.'],
            ['title' => 'Facturación electrónica postergada', 'text' => 'Dejar la adecuación a SIFEN para último momento obliga a elegir apurado el sistema.'],
        ],
        [
            ['q' => '¿Trabajan con instituciones educativas?', 'a' => 'Sí. Podemos armar un sitio con información de cursos, inscripciones en línea y consultas por WhatsApp.'],
        ]
    ),
];
