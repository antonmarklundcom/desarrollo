<?php
/** Article body — index record in content/blog/50-ciudades.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'costo-de-integrar-sifen';

$sections = [
    [
        'h2'   => 'Qué significa integrar SIFEN',
        'body' => [
            'SIFEN es el Sistema Integrado de Facturación Electrónica Nacional que administra la DNIT. '
                . 'Con él, las facturas, notas de crédito y otros documentos se emiten como archivos '
                . 'electrónicos firmados digitalmente, se envían al sistema de la DNIT para su '
                . 'aprobación y se entregan al cliente con una representación gráfica (KuDE) que '
                . 'incluye un código QR de verificación.',
            'Integrar SIFEN significa que tu sistema de ventas —el que ya usás o uno nuevo— genere esos '
                . 'documentos en el formato exigido, los firme, los envíe, reciba la respuesta y '
                . 'guarde todo de forma ordenada. El costo de hacerlo depende sobre todo de desde '
                . 'dónde parte tu empresa.',
        ],
    ],
    [
        'h2'    => 'Las tres formas habituales de facturar electrónicamente',
        'body'  => [
            'Antes de hablar de costos, conviene saber que no todas las empresas necesitan una '
                . 'integración a medida. Hay tres caminos principales, cada uno con su lógica de costo.',
        ],
        'items' => [
            ['title' => 'Herramienta gratuita de la DNIT', 'text' => 'Para pocas facturas, la DNIT ofrece una solución de facturación gratuita desde su portal. No se integra con tu stock ni con tu sistema.'],
            ['title' => 'Sistema de facturación de un proveedor', 'text' => 'Un software ya listo que emite documentos electrónicos, con un abono mensual o por volumen.'],
            ['title' => 'Integración con tu sistema propio', 'text' => 'Tu sistema de ventas o ERP emite directamente, conectado a SIFEN mediante desarrollo propio o una API intermediaria.'],
        ],
    ],
    [
        'h2'   => 'Qué mueve el costo de una integración',
        'body' => [
            'El primer factor es el estado de tu sistema actual. Si tu software de ventas es propio y '
                . 'tiene el código disponible, se le puede agregar la emisión electrónica. Si es un '
                . 'sistema cerrado de un proveedor que no ofrece SIFEN, puede ser más barato '
                . 'reemplazarlo que intentar conectarlo.',
            'El segundo es la cantidad de tipos de documento. No es lo mismo emitir solo facturas que '
                . 'también notas de crédito, notas de débito, autofacturas o notas de remisión. Cada '
                . 'tipo tiene sus campos y sus validaciones.',
            'El tercero es el volumen y el modo de operación: emitir desde un solo punto no es lo '
                . 'mismo que desde varias sucursales y cajas, con eventos como cancelaciones e '
                . 'inutilizaciones y con contingencia cuando falla la conexión.',
            'Por último, están la firma digital —que requiere un certificado emitido por un '
                . 'prestador habilitado, con su costo propio— y el tiempo del proceso de habilitación '
                . 'y pruebas en el ambiente de test de la DNIT.',
        ],
    ],
    [
        'h2'   => 'Qué hace subir o bajar el costo',
        'body' => [
            'Según el camino que elijas, el costo se arma de forma distinta. Un sistema de facturación '
                . 'de un proveedor, listo para usar, se cobra normalmente como abono mensual, que varía '
                . 'con el volumen de documentos y los módulos incluidos. Pedí al proveedor su lista de '
                . 'precios vigente por escrito.',
            'Integrar un sistema propio mediante una API intermediaria que se encarga de la firma y el '
                . 'envío implica un desarrollo puntual más el costo recurrente del servicio intermediario, '
                . 'que también define cada proveedor.',
            'La integración directa con SIFEN desde cero, con firma, envío, eventos y contingencia '
                . 'resueltos en tu propio sistema, es la más laboriosa: crece con los tipos de documento '
                . 'y con la cantidad de puntos de emisión.',
            'A cualquiera de estas opciones hay que sumarle el certificado de firma digital, cuyo '
                . 'costo y vigencia dependen del prestador; consultá el valor vigente con él.',
            'No publicamos un precio fijo porque depende del punto de partida y del alcance: después de '
                . 'una conversación de 30 minutos te pasamos un presupuesto en guaraníes, por escrito.',
        ],
    ],
    [
        'h2'   => 'Costos que suelen olvidarse',
        'body' => [
            'La capacitación del personal que factura es un costo real: cambian los pasos para anular '
                . 'un documento, para emitir una nota de crédito o para actuar cuando SIFEN no '
                . 'responde. Un error repetido en la caja puede generar más trabajo contable que el '
                . 'propio desarrollo.',
            'También hay que prever el mantenimiento. La DNIT publica actualizaciones del manual '
                . 'técnico y de las validaciones, y el sistema debe adaptarse a ellas para seguir '
                . 'emitiendo sin rechazos. Preguntale a tu proveedor quién se hace cargo de esas '
                . 'actualizaciones y con qué costo.',
            'Finalmente, está el almacenamiento: los documentos electrónicos deben conservarse y poder '
                . 'consultarse durante los plazos que establece la normativa tributaria.',
        ],
    ],
    [
        'h2'   => 'Cómo elegir el camino correcto',
        'body' => [
            'Si emite pocas facturas y no necesita conectarlas con stock ni con reportes, la '
                . 'herramienta gratuita de la DNIT o un sistema sencillo de un proveedor suelen '
                . 'alcanzar.',
            'Si tu empresa ya trabaja con un sistema de ventas propio y emite muchos documentos, la '
                . 'integración ahorra la doble carga y los errores de copiar datos de un sistema a '
                . 'otro. Ahí el costo del desarrollo se compara con las horas que se dejan de perder.',
            'Si tu sistema actual es viejo, cerrado o no tiene soporte, este es buen momento para '
                . 'evaluar un reemplazo que ya incluya la facturación electrónica y te ordene otros '
                . 'procesos al mismo tiempo.',
        ],
    ],
    [
        'h2'    => 'Qué tener listo antes de pedir presupuesto',
        'body'  => [
            'Con esta información cualquier proveedor puede darte una cotización precisa.',
        ],
        'items' => [
            ['title' => 'Qué sistema usás hoy', 'text' => 'Nombre, quién lo hizo y si tenés acceso al código o a una API.'],
            ['title' => 'Qué documentos emite', 'text' => 'Facturas, notas de crédito, remisiones, autofacturas.'],
            ['title' => 'Cuántos puntos de emisión', 'text' => 'Sucursales, cajas y vendedores que facturan.'],
            ['title' => 'Volumen mensual aproximado', 'text' => 'Cantidad de documentos por mes.'],
            ['title' => 'Estado de tu habilitación', 'text' => 'Si ya fue designado o solicitó ser facturador electrónico ante la DNIT.'],
        ],
    ],
];

$faq = [
    [
        'q' => '¿Puedo facturar electrónicamente sin pagar un sistema?',
        'a' => 'Sí, la DNIT ofrece una herramienta gratuita para emitir desde su portal. Sirve para volúmenes bajos, pero no se integra con tu sistema de ventas ni con el stock.',
    ],
    [
        'q' => '¿Necesito firma digital para SIFEN?',
        'a' => 'Sí, los documentos electrónicos se firman con un certificado digital emitido por un prestador habilitado. Consultá los requisitos y el costo vigentes.',
    ],
    [
        'q' => '¿Cuánto tarda una integración con SIFEN?',
        'a' => 'Depende del sistema de partida y de los documentos a emitir; incluye el desarrollo y las pruebas en el ambiente de test de la DNIT antes de pasar a producción.',
    ],
];

require ROOT_DIR . '/templates/article.php';
