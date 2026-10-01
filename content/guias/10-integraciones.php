<?php
/** Phase "integraciones": SIFEN, ekuatia, Marangatu, Bancard, Pagopar, Tigo Money, WhatsApp guides. */

declare(strict_types=1);

$__rev = '2026-09-25';

return [

    'como-emitir-factura-en-ekuatia' => [
        'path'            => '/guias/como-emitir-factura-en-ekuatia/',
        'title'           => 'Cómo emitir una factura en ekuatia',
        'navLabel'        => 'Factura en ekuatia',
        'seoTitle'        => 'Cómo emitir factura en ekuatia',
        'metaDescription' => 'Guía paso a paso para emitir una factura electrónica con el facturador '
                           . 'gratuito de ekuatia: acceso, datos del cliente, ítems, envío y KuDE.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo emitir una factura electrónica en ekuatia, paso a paso',
            'lead'    => 'Para contribuyentes habilitados como facturadores electrónicos que usan la herramienta gratuita de la DNIT.',
        ],
        'intro' => [
            'Ekuatia es el nombre del sistema de facturación electrónica de la DNIT, y dentro de él existe '
                . 'un facturador gratuito para emitir documentos electrónicos sin un sistema propio. Esta '
                . 'guía resume el recorrido general para emitir una factura.',
            'Antes de empezar necesitás estar habilitado como facturador electrónico y tener un timbrado '
                . 'electrónico vigente, que se gestiona en Marangatu. Las pantallas pueden cambiar; tomá '
                . 'esta guía como orientación y verificá siempre en el portal oficial.',
        ],
        'steps' => [
            ['title' => 'Ingresá a ekuatia con tu usuario', 'body' => ['Accedé al portal de ekuatia de la DNIT con las credenciales de tu RUC, las mismas que habilitaste para facturación electrónica.']],
            ['title' => 'Abra el facturador gratuito', 'body' => ['Buscá la opción del facturador y elegí el tipo de documento: factura electrónica, nota de crédito u otro que tengas habilitado.']],
            ['title' => 'Elegí establecimiento y punto de expedición', 'body' => ['Seleccioná el establecimiento y el punto de expedición asociados a tu timbrado electrónico.']],
            ['title' => 'Cargue los datos del receptor', 'body' => ['Ingresá el RUC o documento del cliente. Si es contribuyente, el sistema suele completar la razón social a partir del RUC.']],
            ['title' => 'Agregue los ítems', 'body' => ['Cargá descripción, cantidad, precio unitario y la tasa de IVA de cada ítem. Revisá la condición de la operación: contado o crédito.']],
            ['title' => 'Revisá y firmá el documento', 'body' => ['Verificá totales e impuestos antes de confirmar. Una vez aprobado, el documento no se edita: se corrige con una nota de crédito o, en los plazos permitidos, se cancela.']],
            ['title' => 'Descargá el KuDE y enviáselo al cliente', 'body' => ['Descargá la representación gráfica (KuDE) en PDF con el código QR y enviásela al cliente por correo o WhatsApp.']],
        ],
        'faq' => [
            ['q' => '¿El facturador de ekuatia tiene costo?', 'a' => 'No, es una herramienta gratuita de la DNIT. Lo que tiene costo es el tiempo de carga manual cuando el volumen crece.'],
            ['q' => '¿Puedo cancelar una factura emitida en ekuatia?', 'a' => 'Existe un evento de cancelación con un plazo limitado desde la emisión. Consultá el plazo vigente en la normativa de la DNIT; fuera de ese plazo corresponde una nota de crédito.'],
            ['q' => '¿Necesito imprimir la factura?', 'a' => 'No es obligatorio imprimirla. El cliente puede recibir el KuDE en PDF y verificarlo con el código QR.'],
            ['q' => '¿Cuándo conviene dejar ekuatia?', 'a' => 'Cuando la carga manual te lleva horas por día, tenés varias cajas o tus ventas ya están en otro sistema.'],
        ],
        'relatedService' => 'facturacion-electronica-sifen',
        'toolLink'       => [
            'path'  => '/herramientas/costo-integracion-sifen/',
            'label' => 'Cotizador de integración SIFEN',
            'text'  => 'Si ekuatia te queda corto, mirá qué nivel de integración corresponde a tu caso.',
        ],
        'related' => ['ekuatia-vs-sistema-de-facturacion', 'que-es-sifen', 'marangatu-facturacion-electronica'],
    ],

    'marangatu-facturacion-electronica' => [
        'path'            => '/guias/marangatu-facturacion-electronica/',
        'title'           => 'Marangatu y facturación electrónica',
        'navLabel'        => 'Marangatu: timbrado electrónico',
        'seoTitle'        => 'Marangatu: facturación electrónica',
        'metaDescription' => 'Cómo habilitarse como facturador electrónico en Marangatu de la DNIT: '
                           . 'solicitud, timbrado electrónico, CSC, pruebas y paso a producción.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Marangatu: cómo habilitarse como facturador electrónico',
            'lead'    => 'El recorrido general en el sistema Marangatu de la DNIT para empezar a emitir documentos electrónicos.',
        ],
        'intro' => [
            'Marangatu es el sistema de gestión tributaria de la DNIT, donde se hacen la mayoría de los '
                . 'trámites del RUC. Allí se solicita la habilitación como facturador electrónico y el '
                . 'timbrado electrónico que después se usa en ekuatia o en tu propio sistema.',
            'Los nombres exactos de los menús cambian con el tiempo. Esta guía describe el orden lógico '
                . 'del trámite; confirmá cada paso en Marangatu o con tu contador.',
        ],
        'steps' => [
            ['title' => 'Verificá tu situación en Marangatu', 'body' => ['Ingresá con tu usuario y clave y confirmá que tu RUC esté activo y sin obligaciones pendientes que bloqueen trámites.']],
            ['title' => 'Decidí cómo vas a emitir', 'body' => ['Antes de solicitar, definí si vas a usar el facturador gratuito o un sistema propio o integrado. Esa decisión afecta la configuración y los puntos de expedición.']],
            ['title' => 'Solicitá la habilitación como facturador electrónico', 'body' => ['Buscá en Marangatu la solicitud de facturación electrónica, completá los datos y enviala. Si te designaron como obligado, puede que la habilitación ya esté iniciada.']],
            ['title' => 'Solicitá el timbrado electrónico', 'body' => ['Pedí el timbrado para tus establecimientos y puntos de expedición. El timbrado electrónico es distinto del timbrado de facturas preimpresas.']],
            ['title' => 'Obtené el Código de Seguridad del Contribuyente (CSC)', 'body' => ['Si vas a emitir desde un sistema propio, vas a necesitar el CSC, que se usa para generar el código QR del KuDE.']],
            ['title' => 'Hacé las pruebas', 'body' => ['Con un sistema propio, los documentos se prueban primero en el ambiente de pruebas de SIFEN. Con el facturador gratuito, podés comenzar a emitir en cuanto esté habilitado.']],
            ['title' => 'Pasá a producción', 'body' => ['Una vez superadas las pruebas, configurá el sistema con los datos de producción y empezá a emitir.']],
        ],
        'faq' => [
            ['q' => '¿Marangatu y ekuatia son lo mismo?', 'a' => 'No. Marangatu es el sistema de trámites tributarios de la DNIT; ekuatia es el sistema de facturación electrónica, que incluye el facturador gratuito.'],
            ['q' => '¿Necesito certificado de firma digital?', 'a' => 'Para emitir desde un sistema propio, sí. Para el facturador gratuito, seguí las instrucciones vigentes de la DNIT.'],
            ['q' => '¿Cuánto demora la habilitación?', 'a' => 'Varía según el caso. Consultá el plazo vigente con la DNIT o tu contador.'],
        ],
        'relatedService' => 'facturacion-electronica-sifen',
        'toolLink'       => null,
        'related'        => ['que-es-sifen', 'como-emitir-factura-en-ekuatia', 'ekuatia-vs-sistema-de-facturacion'],
    ],

    'ekuatia-vs-sistema-de-facturacion' => [
        'path'            => '/guias/ekuatia-vs-sistema-de-facturacion/',
        'title'           => 'Ekuatia o sistema de facturación',
        'navLabel'        => 'Ekuatia vs sistema propio',
        'seoTitle'        => 'Ekuatia o sistema de facturación',
        'metaDescription' => 'Cuándo alcanza el facturador gratuito de ekuatia y cuándo conviene pasar a '
                           . 'un sistema de facturación electrónica integrado: criterios concretos.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Ekuatia o un sistema de facturación electrónica: cómo decidir',
            'lead'    => 'Una evaluación en pasos para saber si te conviene seguir con el facturador gratuito o integrar SIFEN.',
        ],
        'intro' => [
            'El facturador gratuito de ekuatia resuelve la obligación de emitir documentos electrónicos '
                . 'sin costo de software. La pregunta no es si sirve, sino cuánto te cuesta en tiempo y '
                . 'errores a medida que crece tu volumen.',
            'Seguí estos pasos con tus números reales para decidir.',
        ],
        'steps' => [
            ['title' => 'Contá tus facturas por mes', 'body' => ['Con pocas facturas mensuales, la carga manual es razonable. Cuando son decenas por día, el tiempo de carga se vuelve un costo fijo importante.']],
            ['title' => 'Medí el tiempo por factura', 'body' => ['Tomá el tiempo de cargar una factura completa y multiplicalo por tu volumen mensual. Ese es el costo que una integración elimina.']],
            ['title' => 'Revisá dónde se origina la venta', 'body' => ['Si la venta ya está en un sistema, tienda o planilla, cargarla de nuevo en ekuatia es doble trabajo y fuente de errores.']],
            ['title' => 'Contá puntos de expedición', 'body' => ['Varias cajas o sucursales facturando a mano complican el control. Un sistema centraliza numeración y reportes.']],
            ['title' => 'Considerá cobros y stock', 'body' => ['Si necesitás que la factura se vincule con el stock, la cobranza o el pago en línea, necesitás un sistema.']],
            ['title' => 'Decidí y planificá', 'body' => ['Si dos o más de los puntos anteriores te pesan, cotizá una integración. Podés seguir usando ekuatia mientras se desarrolla.']],
        ],
        'faq' => [
            ['q' => '¿Puedo usar ekuatia y un sistema a la vez?', 'a' => 'Sí, siempre que mantengas ordenada la numeración por punto de expedición.'],
            ['q' => '¿Un sistema de facturación es caro?', 'a' => 'Depende del punto de partida. Una integración sobre un sistema existente puede ser acotada; un sistema nuevo completo es un proyecto mayor.'],
            ['q' => '¿Qué pasa con las facturas ya emitidas en ekuatia?', 'a' => 'Siguen siendo válidas. El sistema nuevo continúa con su propia numeración.'],
        ],
        'relatedService' => 'facturacion-electronica-sifen',
        'toolLink'       => [
            'path'  => '/herramientas/costo-integracion-sifen/',
            'label' => 'Cotizador de integración SIFEN',
            'text'  => 'Ubicá tu caso en un nivel de integración orientativo.',
        ],
        'related' => ['como-emitir-factura-en-ekuatia', 'que-es-sifen'],
    ],

    'que-es-sifen' => [
        'path'            => '/guias/que-es-sifen/',
        'title'           => 'Qué es SIFEN',
        'navLabel'        => 'Qué es SIFEN',
        'seoTitle'        => 'Qué es SIFEN (DNIT) y quién factura',
        'metaDescription' => 'Qué es SIFEN, el sistema de facturación electrónica de la DNIT, quién debe '
                           . 'facturar electrónicamente en Paraguay y cómo empezar a hacerlo.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Qué es SIFEN y quién debe facturar electrónicamente',
            'lead'    => 'Una explicación clara del sistema de facturación electrónica de la DNIT y de los pasos para incorporarse.',
        ],
        'intro' => [
            'SIFEN es el Sistema Integrado de Facturación Electrónica Nacional, administrado por la DNIT '
                . '(Dirección Nacional de Ingresos Tributarios). Reemplaza progresivamente a las facturas '
                . 'preimpresas y autoimpresas por documentos electrónicos validados por la administración '
                . 'tributaria.',
            'Cada documento se genera en formato XML, se firma digitalmente y se transmite a SIFEN. Al '
                . 'aprobarse recibe un Código de Control (CDC) y se entrega al cliente como KuDE, la '
                . 'representación gráfica con código QR.',
        ],
        'steps' => [
            ['title' => 'Confirmá si estás obligado', 'body' => ['La DNIT designa por resolución a los grupos de contribuyentes obligados, con fechas de incorporación. Verificá en Marangatu o con tu contador si tu RUC está incluido. También podés adherirte voluntariamente.']],
            ['title' => 'Entendé los documentos electrónicos', 'body' => ['Además de la factura electrónica existen notas de crédito y débito, autofactura, nota de remisión y otros. Identificá cuáles usa tu empresa.']],
            ['title' => 'Elegí cómo vas a emitir', 'body' => ['Podés usar el facturador gratuito de ekuatia, un sistema comercial que ya tenga SIFEN o una integración con tu sistema actual.']],
            ['title' => 'Gestioná la habilitación en Marangatu', 'body' => ['Solicitá la habilitación como facturador electrónico y el timbrado electrónico.']],
            ['title' => 'Conseguí el certificado de firma digital', 'body' => ['Si emitís desde un sistema propio, necesitás un certificado emitido por un prestador habilitado.']],
            ['title' => 'Probá y empezá a emitir', 'body' => ['Validá tus documentos en el ambiente de pruebas y pasá a producción.']],
        ],
        'faq' => [
            ['q' => '¿SIFEN y ekuatia son lo mismo?', 'a' => 'Ekuatia es el nombre con el que la DNIT presenta la facturación electrónica y su portal; SIFEN es el sistema técnico que valida los documentos.'],
            ['q' => '¿Qué es el CDC?', 'a' => 'Es el Código de Control, un identificador único de cada documento electrónico que permite verificarlo.'],
            ['q' => '¿Qué es el KuDE?', 'a' => 'Es la representación gráfica del documento electrónico, con un código QR para verificarlo. Es lo que se entrega al cliente.'],
            ['q' => '¿Puedo seguir usando facturas en papel?', 'a' => 'Depende de tu situación y de los plazos de la DNIT. Consultá la resolución vigente que te aplica.'],
        ],
        'relatedService' => 'facturacion-electronica-sifen',
        'toolLink'       => [
            'path'  => '/herramientas/costo-integracion-sifen/',
            'label' => 'Cotizador de integración SIFEN',
            'text'  => 'Si vas a emitir desde tu sistema, mirá qué nivel de integración necesitás.',
        ],
        'related' => ['marangatu-facturacion-electronica', 'ekuatia-vs-sistema-de-facturacion', 'como-emitir-factura-en-ekuatia'],
    ],

    'como-integrar-bancard' => [
        'path'            => '/guias/como-integrar-bancard/',
        'title'           => 'Cómo integrar Bancard',
        'navLabel'        => 'Cómo integrar Bancard',
        'seoTitle'        => 'Cómo integrar Bancard en tu web',
        'metaDescription' => 'Los pasos para integrar Bancard vPOS o QR en una tienda online: afiliación, '
                           . 'claves de staging, confirmación en el servidor y certificación.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo integrar Bancard vPOS o QR en tu tienda online',
            'lead'    => 'Un panorama del proceso completo, de la afiliación a la primera venta con tarjeta.',
        ],
        'intro' => [
            'Integrar Bancard en una tienda online tiene una parte comercial (la afiliación) y una parte '
                . 'técnica (la conexión con la API de vPOS). Las dos corren en paralelo y la segunda '
                . 'termina con una revisión de Bancard antes de habilitar producción.',
            'Esta guía resume el proceso general; los detalles técnicos están en la documentación que '
                . 'Bancard entrega a los comercios afiliados.',
        ],
        'steps' => [
            ['title' => 'Solicitá la afiliación comercial', 'body' => ['Contactá a Bancard para afiliar tu comercio al vPOS. Te pedirán datos de la empresa y de la cuenta donde recibirás los pagos.']],
            ['title' => 'Obtené las claves de staging', 'body' => ['Bancard entrega una clave pública y una privada para el entorno de pruebas.']],
            ['title' => 'Creá la orden de pago desde tu servidor', 'body' => ['Tu sistema genera el pedido con un identificador único y solicita a Bancard el inicio del proceso de pago.']],
            ['title' => 'Mostrá el formulario de pago', 'body' => ['El cliente ingresa su tarjeta en el formulario seguro de Bancard, embebido en tu sitio. Tu servidor no maneja datos de tarjeta.']],
            ['title' => 'Recibí la confirmación en el servidor', 'body' => ['Bancard notifica el resultado a una URL de tu servidor. Ahí se marca el pedido como pagado; no dependas solo de la página de retorno.']],
            ['title' => 'Implementá reversas', 'body' => ['Prevé el caso en que un pago debe revertirse, siguiendo el flujo que indica Bancard.']],
            ['title' => 'Pasá la certificación', 'body' => ['Con todos los casos funcionando en staging, solicitá la revisión a Bancard y recibí las claves de producción.']],
        ],
        'faq' => [
            ['q' => '¿Hay plugin de Bancard para WooCommerce?', 'a' => 'Existen plugins. Conviene revisar que manejen bien la confirmación en el servidor antes de usarlos.'],
            ['q' => '¿Cuánto cobra Bancard?', 'a' => 'Depende del tipo de tarjeta y de tu acuerdo. Consultá el valor vigente con Bancard.'],
            ['q' => '¿Puedo cobrar con QR sin tienda online?', 'a' => 'Sí, el QR también se usa en ventas presenciales. Consultá las opciones de Bancard para tu comercio.'],
        ],
        'relatedService' => 'integracion-bancard',
        'toolLink'       => null,
        'related'        => ['bancard-vs-pagopar', 'pagopar-comisiones-y-como-funciona'],
    ],

    'bancard-vs-pagopar' => [
        'path'            => '/guias/bancard-vs-pagopar/',
        'title'           => 'Bancard vs Pagopar',
        'navLabel'        => 'Bancard vs Pagopar',
        'seoTitle'        => 'Bancard vs Pagopar: cuál elegir',
        'metaDescription' => 'Bancard o Pagopar para tu tienda online en Paraguay: medios de pago, '
                           . 'integración, comisiones y en qué casos conviene cada uno o ambos.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Bancard vs Pagopar: cuál conviene para tu negocio',
            'lead'    => 'Una comparación práctica para decidir la pasarela de pagos de tu tienda online.',
        ],
        'intro' => [
            'Bancard es la procesadora de tarjetas con la que trabajan gran parte de los bancos del país; '
                . 'Pagopar es un agregador que reúne varios medios de pago en un solo checkout. No compiten '
                . 'exactamente en lo mismo, y muchas tiendas usan ambos.',
            'Evaluá tu caso con estos pasos.',
        ],
        'steps' => [
            ['title' => 'Mirá cómo pagan tus clientes', 'body' => ['Si la mayoría paga con tarjeta, Bancard cubre lo principal. Si muchos usan billeteras o pagan en efectivo en bocas de cobranza, Pagopar suma esas opciones.']],
            ['title' => 'Compará comisiones vigentes', 'body' => ['Pedí las comisiones vigentes a ambas y calculalas sobre tu ticket promedio. Un agregador suele sumar su margen sobre el medio de pago.']],
            ['title' => 'Considerá el esfuerzo técnico', 'body' => ['Pagopar suele ser más rápido de poner en marcha en una tienda estándar. Bancard vPOS requiere integración y certificación.']],
            ['title' => 'Revisá necesidades especiales', 'body' => ['Si necesitás cobros recurrentes con tarjeta guardada, Bancard lo ofrece según tu afiliación.']],
            ['title' => 'Evaluá usar las dos', 'body' => ['Ofrecer Bancard para tarjetas y Pagopar para el resto es una combinación común.']],
        ],
        'faq' => [
            ['q' => '¿Cuál es más barato?', 'a' => 'Depende del medio de pago y del acuerdo. Consultá el valor vigente de cada una.'],
            ['q' => '¿Cuál acredita más rápido?', 'a' => 'Los plazos de acreditación dependen de cada pasarela y medio. Preguntalos al afiliarte.'],
            ['q' => '¿Puedo cambiar de pasarela más adelante?', 'a' => 'Sí, aunque implica una nueva integración. Por eso conviene separar la lógica de pagos del resto del sistema.'],
        ],
        'relatedService' => 'integracion-pagos',
        'toolLink'       => null,
        'related'        => ['como-integrar-bancard', 'pagopar-comisiones-y-como-funciona', 'tigo-money-para-comercios'],
    ],

    'pagopar-comisiones-y-como-funciona' => [
        'path'            => '/guias/pagopar-comisiones-y-como-funciona/',
        'title'           => 'Pagopar: cómo funciona',
        'navLabel'        => 'Pagopar: cómo funciona',
        'seoTitle'        => 'Pagopar: comisiones y cómo funciona',
        'metaDescription' => 'Cómo funciona Pagopar para comercios: alta, medios de pago, pagos pendientes, '
                           . 'acreditación y dónde consultar las comisiones vigentes.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Pagopar: cómo funciona y qué mirar en las comisiones',
            'lead'    => 'Lo que tenés que saber antes de sumar Pagopar a tu tienda o sistema.',
        ],
        'intro' => [
            'Pagopar es un agregador de pagos: tu comercio se integra una vez y el cliente elige entre los '
                . 'medios que Pagopar tenga habilitados. Las comisiones cambian según el medio de pago y '
                . 'pueden actualizarse, por eso en esta guía no damos cifras: consultá el valor vigente en '
                . 'Pagopar.',
        ],
        'steps' => [
            ['title' => 'Creá tu cuenta de comercio', 'body' => ['Registrá tu comercio en Pagopar con los datos de la empresa y la cuenta de acreditación.']],
            ['title' => 'Revisá las comisiones por medio de pago', 'body' => ['Pedí el detalle vigente por medio de pago y calculá el costo sobre tu ticket promedio. Consultá también si hay costos fijos.']],
            ['title' => 'Entendé los plazos de acreditación', 'body' => ['Preguntá en cuántos días se acredita cada medio. Afecta tu flujo de caja.']],
            ['title' => 'Integrá tu tienda', 'body' => ['Usá el plugin disponible para tu plataforma o la API. Obtené las claves de integración desde tu panel.']],
            ['title' => 'Configurá los pagos pendientes', 'body' => ['Los pagos en bocas de cobranza quedan pendientes hasta que el cliente paga. Definí cuánto tiempo reservás el stock.']],
            ['title' => 'Probá antes de publicar', 'body' => ['Hacé compras de prueba con cada medio y verificá que el pedido cambie de estado solo.']],
        ],
        'faq' => [
            ['q' => '¿Cuánto cobra Pagopar?', 'a' => 'La comisión depende del medio de pago. Consultá el valor vigente directamente en Pagopar.'],
            ['q' => '¿Necesito tienda online para usar Pagopar?', 'a' => 'No necesariamente: también se puede usar desde un sistema propio o con links de pago, según lo que ofrezca Pagopar.'],
            ['q' => '¿Pagopar emite la factura electrónica?', 'a' => 'La factura de tu venta la emite tu empresa. Se puede integrar para que se genere al confirmarse el pago.'],
        ],
        'relatedService' => 'integracion-pagopar',
        'toolLink'       => null,
        'related'        => ['bancard-vs-pagopar', 'tigo-money-para-comercios'],
    ],

    'tigo-money-para-comercios' => [
        'path'            => '/guias/tigo-money-para-comercios/',
        'title'           => 'Tigo Money para comercios',
        'navLabel'        => 'Tigo Money para comercios',
        'seoTitle'        => 'Tigo Money para comercios',
        'metaDescription' => 'Cómo empezar a cobrar con Tigo Money en tu comercio o tienda online: '
                           . 'afiliación, vías de integración, conciliación y costos a consultar.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Tigo Money para comercios: cómo empezar a cobrar',
            'lead'    => 'Los pasos para aceptar pagos con la billetera Tigo Money en tu local o en línea.',
        ],
        'intro' => [
            'Tigo Money es una billetera electrónica muy usada en Paraguay. Para un comercio, aceptarla '
                . 'permite cobrar a clientes que no usan tarjeta. Hay que distinguir entre recibir pagos '
                . 'de forma manual y tener el cobro integrado a tu sistema.',
        ],
        'steps' => [
            ['title' => 'Definí dónde vas a cobrar', 'body' => ['En el local, en tu tienda online o en ambos. Cambia la solución adecuada.']],
            ['title' => 'Consultá la afiliación comercial', 'body' => ['Contactá a Tigo Money para comercios para conocer requisitos y condiciones vigentes.']],
            ['title' => 'Evaluá un agregador', 'body' => ['Si vendés en línea, un agregador como Pagopar puede incluir billeteras entre sus medios, con menos desarrollo.']],
            ['title' => 'Integrá la confirmación', 'body' => ['Evitá verificar capturas de pantalla: con la integración, tu sistema recibe la confirmación del pago.']],
            ['title' => 'Conciliá', 'body' => ['Registrá la referencia de cada cobro junto al pedido y la factura para cruzarlos con la acreditación.']],
        ],
        'faq' => [
            ['q' => '¿Cuánto cuesta aceptar Tigo Money?', 'a' => 'Depende del acuerdo comercial. Consultá el valor vigente con Tigo.'],
            ['q' => '¿Necesito una tienda online?', 'a' => 'No. También podés cobrar en el local; la integración es útil cuando querés el cobro asociado a tu sistema.'],
            ['q' => '¿Es seguro recibir pagos por captura de pantalla?', 'a' => 'Es propenso a errores y fraudes. Lo recomendable es que el sistema reciba la confirmación directamente.'],
        ],
        'relatedService' => 'integracion-tigo-money',
        'toolLink'       => null,
        'related'        => ['pagopar-comisiones-y-como-funciona', 'bancard-vs-pagopar'],
    ],

    'whatsapp-business-vs-api' => [
        'path'            => '/guias/whatsapp-business-vs-api/',
        'title'           => 'WhatsApp Business vs API',
        'navLabel'        => 'WhatsApp Business vs API',
        'seoTitle'        => 'WhatsApp Business vs API',
        'metaDescription' => 'Diferencias entre la app WhatsApp Business y la API de WhatsApp: agentes, '
                           . 'chatbot, plantillas, costos y cuándo conviene dar el salto.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'WhatsApp Business o WhatsApp Business API: cuál necesitás',
            'lead'    => 'Una guía para decidir si tu empresa sigue con la app o pasa a la API.',
        ],
        'intro' => [
            'La app de WhatsApp Business es gratuita y alcanza para muchos negocios. La API (WhatsApp '
                . 'Business Platform) está pensada para atender a escala, automatizar y conectar con otros '
                . 'sistemas. Seguí estos pasos para ubicar tu caso.',
        ],
        'steps' => [
            ['title' => 'Contá cuántas personas atienden', 'body' => ['Si más de un par de personas responden el mismo número, la app se vuelve difícil de coordinar.']],
            ['title' => 'Medí el volumen de consultas', 'body' => ['Con muchas consultas repetitivas por día, un chatbot ahorra tiempo.']],
            ['title' => 'Revisá qué querés automatizar', 'body' => ['Confirmaciones, recordatorios, estado de pedidos: todo eso requiere la API.']],
            ['title' => 'Pensá en integraciones', 'body' => ['Si querés que las conversaciones lleguen al CRM o consulten tu sistema, necesitás la API.']],
            ['title' => 'Considerá los costos', 'body' => ['La API tiene costo por mensaje según la tarifa de Meta, más la herramienta de atención. Consultá el valor vigente.']],
            ['title' => 'Decidí el número', 'body' => ['Un número en la API no puede usarse a la vez en la app. Evaluá usar uno nuevo.']],
        ],
        'faq' => [
            ['q' => '¿La API tiene app para el celular?', 'a' => 'No propia. Se usa a través de una bandeja de atención, que puede tener app o versión web.'],
            ['q' => '¿Puedo volver a la app después?', 'a' => 'Sí, el número puede migrarse de vuelta, aunque conviene planificarlo.'],
            ['q' => '¿Qué es una plantilla?', 'a' => 'Un mensaje preaprobado por Meta, necesario para iniciar conversaciones fuera de la ventana de atención.'],
        ],
        'relatedService' => 'whatsapp-business-api',
        'toolLink'       => null,
        'related'        => ['como-automatizar-procesos-con-ia', 'kommo-vs-odoo'],
    ],
];
