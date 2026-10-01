<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'como-cobrar-online-en-paraguay';

$sections = [
    [
        'h2'   => 'Cobrar en línea ya no es opcional',
        'body' => [
            'Los clientes esperan poder pagar sin ir a una caja: con tarjeta desde el sitio web, con una billetera en el celular, con un código QR o con un enlace enviado por WhatsApp. Para una empresa paraguaya, saber cómo cobrar online se volvió parte de la operación comercial, tanto para tiendas en línea como para servicios, cuotas, reservas o cobranzas.',
            'Este artículo resume las opciones disponibles en el país, qué considerar al elegir y cómo integrarlas con el resto de tus sistemas. Las condiciones comerciales de cada proveedor cambian; consultá siempre el valor vigente de comisiones y plazos directamente con ellos.',
        ],
    ],
    [
        'h2'   => 'Las principales formas de cobro en línea',
        'body' => [
        ],
        'items' => [
            ['title' => 'Pasarelas de pago', 'text' => 'Servicios que procesan pagos con tarjetas de crédito y débito, y a veces otros medios, desde tu sitio o aplicación. En Paraguay operan proveedores como Bancard y Pagopar, entre otros.'],
            ['title' => 'Billeteras electrónicas', 'text' => 'Como Tigo Money y billeteras de bancos y financieras, muy usadas para pagos desde el celular.'],
            ['title' => 'Transferencias bancarias', 'text' => 'Simples y de bajo costo, pero requieren conciliar manualmente cada pago si no se automatizan.'],
            ['title' => 'Links de pago', 'text' => 'Enlaces que se envían por WhatsApp o correo para que el cliente pague sin necesidad de una tienda en línea.'],
            ['title' => 'Pagos con QR', 'text' => 'Códigos que el cliente escanea desde la aplicación de su banco o billetera.'],
            ['title' => 'Bocas de cobranza y redes de pago', 'text' => 'Útiles para clientes que prefieren pagar en efectivo, con referencias generadas por tu sistema.'],
        ],
    ],
    [
        'h2'   => 'Qué considerar al elegir',
        'body' => [
            'No hay un medio de cobro ideal para todas las empresas. La elección depende de quiénes son tus clientes y cómo prefieren pagar. Estos criterios ayudan a comparar.',
        ],
        'items' => [
            ['title' => 'Medios aceptados', 'text' => 'Qué tarjetas, billeteras y bancos cubre cada proveedor.'],
            ['title' => 'Comisiones', 'text' => 'Porcentaje o monto fijo por transacción, según el medio. Consultá las tarifas vigentes.'],
            ['title' => 'Plazo de acreditación', 'text' => 'Cuándo llega el dinero a tu cuenta.'],
            ['title' => 'Requisitos de alta', 'text' => 'Documentación de la empresa, cuenta bancaria, tiempos de aprobación.'],
            ['title' => 'Integración técnica', 'text' => 'Si ofrece API documentada, plugins para tu plataforma o solo links manuales.'],
            ['title' => 'Experiencia del cliente', 'text' => 'Cantidad de pasos para pagar, funcionamiento en celulares, confianza en la marca.'],
            ['title' => 'Soporte', 'text' => 'Canales y tiempos de respuesta ante problemas con un pago.'],
        ],
    ],
    [
        'h2'   => 'Integrar el cobro con tu sitio web o tienda',
        'body' => [
            'Si vendés en línea, la integración de la pasarela con tu sitio es lo más importante. Una buena integración lleva al cliente del carrito al pago y de vuelta a una confirmación, sin salir de la experiencia de compra o con un redireccionamiento claro. Además, el sistema debe recibir la notificación de pago del proveedor para marcar el pedido como pagado automáticamente, sin depender de que alguien revise el correo.',
            'Ese último punto es clave y suele subestimarse. La confirmación que ve el cliente en el navegador no es suficiente; el sistema debe validar el pago con la notificación del proveedor, para evitar pedidos marcados como pagos que no lo están o pagos que quedan sin asociar a un pedido.',
        ],
    ],
    [
        'h2'   => 'Cobrar sin tienda en línea',
        'body' => [
            'Muchas empresas no necesitan una tienda completa. Si vendés por WhatsApp, por teléfono o en persona, los links de pago y los QR permiten cobrar a distancia con poca infraestructura. El vendedor genera el enlace con el monto, lo envía y recibe la confirmación cuando el cliente paga.',
            'Integrar la generación de links con tu sistema de gestión o tu CRM permite que cada link quede asociado a un cliente y a una venta, y que la confirmación de pago actualice el estado automáticamente.',
        ],
    ],
    [
        'h2'   => 'Conciliación: el trabajo invisible',
        'body' => [
            'Cobrar es solo la mitad. La otra mitad es saber qué pago corresponde a qué venta, cuánto se descontó en comisiones y cuándo se acreditó. Cuando los pagos llegan por varios canales, la conciliación manual consume horas y genera errores. Automatizarla, al menos en parte, es una de las mejoras con retorno más claro para empresas con volumen.',
        ],
    ],
    [
        'h2'   => 'Cobro y facturación electrónica',
        'body' => [
            'Cada cobro debería terminar en un comprobante. Si tu empresa emite documentos electrónicos en SIFEN, conviene que el sistema genere la factura en el momento en que se confirma el pago y la envíe al cliente junto con la confirmación. Así se evita la carga manual y se reduce el riesgo de ventas sin facturar o facturas sin cobro.',
        ],
    ],
    [
        'h2'   => 'Cobros recurrentes',
        'body' => [
            'Para servicios con cuotas mensuales, suscripciones o planes, conviene evaluar si el proveedor permite pagos recurrentes con tarjeta registrada o si será necesario enviar un link cada mes. La segunda opción es más simple, pero depende de que el cliente pague a tiempo; la primera requiere más cuidado técnico y de seguridad.',
        ],
    ],
    [
        'h2'   => 'Seguridad al cobrar en línea',
        'body' => [
            'Nunca almacenes números completos de tarjetas en tus sistemas. Las pasarelas existen precisamente para procesar esos datos en entornos certificados. Usá siempre HTTPS en tu sitio, validá las notificaciones de pago con los mecanismos que ofrece el proveedor y restrinja el acceso a los paneles de cobro a las personas que realmente lo necesitan.',
        ],
    ],
    [
        'h2'   => 'Qué determina el costo',
        'body' => [
            'El costo de implementar cobros en línea incluye las comisiones del proveedor, que dependen del medio y del volumen, y el costo de integración, que depende de la plataforma de tu sitio, la cantidad de medios de pago, la necesidad de conciliación automática y la integración con facturación o ERP. No publicamos un precio fijo para la parte de integración porque depende del alcance: después de una conversación de 30 minutos te pasamos un presupuesto en guaraníes, por escrito.',
        ],
    ],
    [
        'h2'   => 'Un orden sugerido para empezar',
        'body' => [
            'Empezá por el medio que más usan tus clientes hoy, integralo bien con confirmación automática y sumá otros medios después. Medí qué porcentaje de pagos llega por cada canal para decidir dónde invertir.',
        ],
    ],
];

$faq = [
    ['q' => '¿Qué pasarelas de pago hay en Paraguay?', 'a' => 'Operan proveedores como Bancard y Pagopar, además de billeteras como Tigo Money y soluciones de bancos. Compará medios aceptados, comisiones vigentes e integración técnica.'],
    ['q' => '¿Puedo cobrar online sin tener una tienda en línea?', 'a' => 'Sí, con links de pago o códigos QR que se envían por WhatsApp o correo.'],
    ['q' => '¿Cómo sé que un pago en línea es real?', 'a' => 'El sistema debe validar la notificación que envía el proveedor de pagos, no solo la pantalla de confirmación del navegador.'],
];

require ROOT_DIR . '/templates/article.php';
