<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'que-es-una-api-explicado-para-empresarios';

$sections = [
    [
        'h2'   => 'Una definición sin tecnicismos',
        'body' => [
            'Una API, sigla en inglés de interfaz de programación de aplicaciones, es una forma acordada en que dos sistemas se hablan entre sí. Así como un mozo toma el pedido en la mesa, lo lleva a la cocina y vuelve con el plato, una API recibe un pedido de un sistema, lo lleva a otro y devuelve la respuesta. Ninguno de los dos sistemas necesita saber cómo funciona el otro por dentro; solo necesitan respetar el formato del pedido y de la respuesta.',
            'Para un empresario, entender qué es una API es entender por qué algunos sistemas se pueden conectar fácilmente y otros no, y por qué la palabra aparece en cada conversación sobre software.',
        ],
    ],
    [
        'h2'   => 'Por qué las APIs importan en su empresa',
        'body' => [
            'Casi todas las empresas usan varios sistemas: uno para facturar, otro para vender en línea, otro para gestionar clientes, planillas para el stock, WhatsApp para atender. Cuando esos sistemas no están conectados, las personas hacen de puente: copian datos de uno a otro, a mano, con errores y demoras.',
            'Las APIs permiten que esos sistemas intercambien información automáticamente. Una venta en la tienda en línea descuenta stock en el ERP, genera la factura electrónica y envía el comprobante por WhatsApp, sin que nadie cargue nada dos veces.',
        ],
    ],
    [
        'h2'   => 'Ejemplos concretos en Paraguay',
        'body' => [
        ],
        'items' => [
            ['title' => 'Pagos en línea', 'text' => 'Su sitio web usa la API de una pasarela de pago para cobrar con tarjeta y recibe una notificación cuando el pago se aprueba.'],
            ['title' => 'Facturación electrónica', 'text' => 'Su sistema usa los servicios web de SIFEN para enviar documentos electrónicos a la DNIT y recibir su aprobación o rechazo.'],
            ['title' => 'WhatsApp Business', 'text' => 'La API permite enviar confirmaciones, recordatorios y recibir mensajes en su CRM.'],
            ['title' => 'Consulta de datos', 'text' => 'Un sistema puede consultar cotizaciones, estados de envío o datos de otros servicios que ofrecen API.'],
            ['title' => 'Integración entre sistemas propios', 'text' => 'Su ERP y su tienda en línea comparten productos, precios y stock.'],
        ],
    ],
    [
        'h2'   => 'Cómo funciona, en términos simples',
        'body' => [
            'Un sistema envía una solicitud a una dirección de internet de la API, con los datos necesarios y una credencial que demuestra que tiene permiso. La API procesa el pedido y responde con los datos solicitados o con la confirmación de que hizo lo pedido, o con un error que explica qué salió mal.',
            'Hay dos modos habituales. En uno, su sistema pregunta cuando necesita algo. En el otro, llamado webhook, el otro sistema avisa a su sistema cuando ocurre algo, por ejemplo cuando se aprueba un pago. Los dos se combinan con frecuencia.',
        ],
    ],
    [
        'h2'   => 'Qué hace buena a una API',
        'body' => [
            'No todas las APIs son iguales. Al evaluar un proveedor de software o de servicios, estos aspectos indican si la integración será sencilla o un problema.',
        ],
        'items' => [
            ['title' => 'Documentación clara', 'text' => 'Explica cada operación, con ejemplos y errores posibles.'],
            ['title' => 'Ambiente de pruebas', 'text' => 'Permite probar sin afectar datos reales ni generar cobros.'],
            ['title' => 'Credenciales seguras', 'text' => 'Claves que se pueden generar, limitar y revocar.'],
            ['title' => 'Estabilidad', 'text' => 'Cambios anunciados con anticipación y versiones que no se rompen sin aviso.'],
            ['title' => 'Límites conocidos', 'text' => 'Cuántas solicitudes se pueden hacer y qué pasa si se superan.'],
            ['title' => 'Soporte técnico', 'text' => 'A quién consultar cuando algo no funciona.'],
        ],
    ],
    [
        'h2'   => 'Qué preguntar antes de contratar un software',
        'body' => [
            'Si está evaluando un ERP, un CRM, una tienda en línea o cualquier sistema, pregunte si tiene API, qué datos permite leer y escribir, si hay costo adicional por usarla y si la documentación es pública. Un sistema sin API lo condena a cargar datos a mano o a depender del proveedor para cualquier conexión futura.',
            'También pregunte si ofrece webhooks para avisar eventos importantes. Por ejemplo, un sistema de reservas que avisa a su CRM cuando se crea una reserva nueva evita revisar pantallas manualmente.',
        ],
    ],
    [
        'h2'   => 'Riesgos y cuidados',
        'body' => [
            'Conectar sistemas trae beneficios, pero también responsabilidades. Las credenciales de una API son como llaves: deben guardarse en lugares seguros, no en planillas ni mensajes. Cada integración debe manejar errores, porque los servicios externos a veces no responden. Y conviene registrar qué se envió y qué se recibió, para poder investigar si algo falla.',
            'Otro riesgo es la dependencia. Si un proveedor cambia o cierra su API, su integración deja de funcionar. Elegir proveedores con APIs estables y documentadas reduce ese riesgo.',
        ],
    ],
    [
        'h2'   => 'Cuánto cuesta una integración',
        'body' => [
            'El costo de integrar sistemas mediante API depende de la calidad de la documentación, la cantidad de operaciones a conectar, la necesidad de transformar datos entre formatos, el manejo de errores y reintentos, y las pruebas necesarias. Una integración simple con una API bien documentada puede ser rápida; una integración con un sistema antiguo sin API puede requerir soluciones más complejas.',
        ],
    ],
    [
        'h2'   => 'Por dónde empezar',
        'body' => [
            'Haga una lista de las tareas donde alguien copia datos de un sistema a otro. Estime cuántas horas por semana consumen y cuántos errores generan. Esas tareas son las candidatas naturales para una integración por API, y el ahorro de tiempo ayuda a justificar la inversión.',
        ],
    ],
    [
        'h2'   => 'APIs y propiedad de sus datos',
        'body' => [
            'Una API también es una garantía de que sus datos no quedan atrapados en un sistema. Si un proveedor ofrece una API completa, podrá extraer su información cuando lo necesite, ya sea para reportes, para conectar otro sistema o para migrar a otra solución. Si no la ofrece, pregunte al menos cómo se exportan los datos y en qué formato.',
        ],
    ],
    [
        'h2'   => 'Un ejemplo paso a paso',
        'body' => [
            'Imagine una tienda que vende en línea. El cliente paga con tarjeta: el sitio llama a la API de la pasarela y espera la aprobación. La pasarela avisa por webhook que el pago fue aprobado. El sitio llama a la API del ERP para registrar la venta y descontar stock. El ERP genera la factura electrónica y la envía a SIFEN. Finalmente, el sistema usa la API de WhatsApp para enviar el comprobante al cliente. Todo ocurre en segundos, sin intervención manual.',
        ],
    ],
];

$faq = [
    ['q' => '¿Necesito saber programar para usar una API?', 'a' => 'No para decidir. La implementación la hace un programador; usted define qué sistemas conectar y qué debe pasar entre ellos.'],
    ['q' => '¿Todas las aplicaciones tienen API?', 'a' => 'No. Antes de contratar un software, pregunte si tiene API documentada y qué datos permite leer y escribir.'],
    ['q' => '¿Qué es un webhook?', 'a' => 'Es un aviso automático que un sistema envía a otro cuando ocurre un evento, por ejemplo un pago aprobado.'],
];

require ROOT_DIR . '/templates/article.php';
