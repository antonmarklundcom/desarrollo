<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'facturacion-electronica-obligatoria-que-cambia-para-su-empresa';

$sections = [
    [
        'h2'   => 'Del talonario al documento electrónico',
        'body' => [
            'Paraguay avanza hacia la facturación electrónica obligatoria a través del Sistema Integrado de Facturación Electrónica Nacional, conocido como SIFEN, administrado por la Dirección Nacional de Ingresos Tributarios (DNIT). Con este sistema, las facturas y otros comprobantes dejan de ser documentos impresos con timbrado tradicional y pasan a ser documentos electrónicos firmados digitalmente y validados por la administración tributaria.',
            'La incorporación de contribuyentes se hace de forma gradual, por grupos designados. Si su empresa todavía no fue alcanzada, es probable que lo sea. Este artículo explica, en términos generales, qué cambia y cómo prepararse. Para fechas, grupos y requisitos exactos, consulte siempre la normativa vigente en la DNIT.',
        ],
    ],
    [
        'h2'   => 'Qué es un documento electrónico en SIFEN',
        'body' => [
            'En SIFEN, una factura electrónica es un archivo en formato XML con una estructura definida, firmado con un certificado digital de la empresa y enviado a la DNIT para su validación. Cada documento tiene un código de control único, conocido como CDC, que lo identifica.',
            'Para el cliente, la empresa entrega una representación gráfica del documento, llamada KuDE, que puede ser impresa o enviada en formato digital e incluye un código QR para verificar el comprobante en el sistema. Además de facturas, SIFEN contempla otros tipos de documentos, como notas de crédito, notas de débito, notas de remisión y autofacturas.',
        ],
    ],
    [
        'h2'   => 'Qué cambia en la operación diaria',
        'body' => [
            'El cambio más visible es que la emisión de comprobantes pasa a depender de un sistema. Ya no alcanza con un talonario; el comprobante se genera en un software que construye el XML, lo firma y lo transmite. Eso afecta a varias áreas de la empresa.',
        ],
        'items' => [
            ['title' => 'Ventas y caja', 'text' => 'El punto de venta o sistema de facturación debe emitir documentos electrónicos válidos.'],
            ['title' => 'Administración', 'text' => 'Anulaciones, notas de crédito y correcciones siguen reglas y plazos específicos.'],
            ['title' => 'Clientes', 'text' => 'Reciben el KuDE por correo, WhatsApp o impreso, y pueden verificarlo con el QR.'],
            ['title' => 'Contabilidad', 'text' => 'Los comprobantes quedan registrados en la DNIT, lo que reduce la carga manual pero exige consistencia.'],
            ['title' => 'Sistemas', 'text' => 'El ERP, la tienda en línea o el sistema de gestión deben integrarse con la emisión electrónica.'],
        ],
    ],
    [
        'h2'   => 'Qué necesita su empresa',
        'body' => [
            'En términos generales, una empresa que emite documentos electrónicos necesita estar habilitada como facturador electrónico ante la DNIT, contar con un certificado digital de firma electrónica emitido por un prestador habilitado, disponer de un software que genere y transmita los documentos según las especificaciones técnicas vigentes y tener procesos internos para manejar rechazos, anulaciones y contingencias.',
            'Los detalles del proceso de habilitación, el costo del certificado y los plazos cambian. Consulte el valor vigente y los pasos actualizados en los canales oficiales de la DNIT, incluido el portal de facturación electrónica ekuatia.',
        ],
    ],
    [
        'h2'   => 'Tres caminos para emitir',
        'body' => [
            'Hay tres formas habituales de cumplir con la facturación electrónica. Elegir bien depende de cuántos comprobantes emite y de los sistemas que ya usa.',
        ],
        'items' => [
            ['title' => 'Solución gratuita de la administración', 'text' => 'Para contribuyentes con bajo volumen, la DNIT ofrece herramientas de emisión. Suelen ser suficientes para pocos comprobantes, pero no se integran con sus sistemas.'],
            ['title' => 'Software de facturación de terceros', 'text' => 'Productos que emiten documentos electrónicos y, en algunos casos, se conectan con sistemas contables.'],
            ['title' => 'Integración con su sistema propio', 'text' => 'Si ya tiene un ERP, punto de venta o tienda en línea, se integra la emisión directamente, para que cada venta genere su documento sin cargar datos dos veces.'],
        ],
    ],
    [
        'h2'   => 'Cuándo conviene integrar su propio sistema',
        'body' => [
            'Si su empresa emite muchos comprobantes, tiene un sistema de gestión propio o vende en línea, la integración suele ser la opción más eficiente. Evita cargar cada venta en dos lugares, reduce errores y permite automatizar el envío del KuDE al cliente. También facilita manejar notas de crédito y conciliaciones desde el mismo sistema donde se registró la venta.',
            'La integración implica trabajo técnico: generar el XML según la especificación, firmarlo, transmitirlo a los servicios web de SIFEN, interpretar las respuestas, manejar rechazos y guardar los documentos. Por eso conviene hacerla con tiempo y probar en el ambiente de pruebas antes de pasar a producción.',
        ],
    ],
    [
        'h2'   => 'Errores frecuentes al prepararse',
        'body' => [
        ],
        'items' => [
            ['title' => 'Dejarlo para el final', 'text' => 'Los plazos de habilitación, certificado y pruebas se suman.'],
            ['title' => 'Datos maestros desordenados', 'text' => 'RUC de clientes mal cargados o productos sin datos completos generan rechazos.'],
            ['title' => 'No planificar contingencias', 'text' => 'Qué hacer si no hay conexión en el momento de facturar.'],
            ['title' => 'Olvidar otros documentos', 'text' => 'Notas de crédito y remisiones también cambian.'],
            ['title' => 'No capacitar al personal', 'text' => 'Caja y administración necesitan entender el nuevo flujo.'],
        ],
    ],
    [
        'h2'   => 'Un plan de preparación',
        'body' => [
            'Un plan razonable empieza por confirmar si su empresa ya fue designada y desde cuándo. Luego, revisar qué sistemas emiten comprobantes hoy y cuántos por mes. Con esa información se elige el camino: solución gratuita, software de terceros o integración. Después se gestionan la habilitación y el certificado, se prueba en el ambiente de pruebas con casos reales y se capacita al personal antes de la fecha de inicio.',
            'Conviene también limpiar datos maestros: clientes con RUC correcto, productos con descripciones y tasas de IVA bien cargadas. Muchos rechazos se deben a datos, no al software.',
        ],
    ],
    [
        'h2'   => 'Qué determina el costo',
        'body' => [
            'El costo de adoptar la facturación electrónica depende del camino elegido, el volumen de comprobantes, la cantidad de puntos de emisión, el estado de sus sistemas actuales y la complejidad de sus operaciones, por ejemplo si maneja varias sucursales, monedas o tipos de documentos. Una integración bien hecha es una inversión que luego ahorra trabajo administrativo todos los meses.',
        ],
    ],
    [
        'h2'   => 'Contingencias y respaldo',
        'body' => [
            'Planifique qué hacer si falla la conexión o el servicio en el momento de facturar, y cómo se regularizan después los documentos. Consulte en la normativa vigente los procedimientos de contingencia admitidos.',
        ],
    ],
];

$faq = [
    ['q' => '¿Mi empresa está obligada a facturar electrónicamente?', 'a' => 'La obligación se asigna por grupos designados por la DNIT. Consulte la normativa vigente y su situación en los canales oficiales.'],
    ['q' => '¿Qué es el KuDE?', 'a' => 'Es la representación gráfica del documento electrónico que se entrega al cliente, con un código QR para verificarlo en el sistema.'],
    ['q' => '¿Puedo seguir usando mi sistema actual?', 'a' => 'Sí, si se integra con SIFEN para generar, firmar y transmitir los documentos. Evalúe si su proveedor ofrece esa integración o si conviene desarrollarla.'],
];

require ROOT_DIR . '/templates/article.php';
