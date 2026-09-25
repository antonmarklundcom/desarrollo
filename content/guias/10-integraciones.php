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
            'Antes de empezar necesita estar habilitado como facturador electrónico y tener un timbrado '
                . 'electrónico vigente, que se gestiona en Marangatu. Las pantallas pueden cambiar; tome '
                . 'esta guía como orientación y verifique siempre en el portal oficial.',
        ],
        'steps' => [
            ['title' => 'Ingrese a ekuatia con su usuario', 'body' => ['Acceda al portal de ekuatia de la DNIT con las credenciales de su RUC, las mismas que habilitó para facturación electrónica.']],
            ['title' => 'Abra el facturador gratuito', 'body' => ['Busque la opción del facturador y elija el tipo de documento: factura electrónica, nota de crédito u otro que tenga habilitado.']],
            ['title' => 'Elija establecimiento y punto de expedición', 'body' => ['Seleccione el establecimiento y el punto de expedición asociados a su timbrado electrónico.']],
            ['title' => 'Cargue los datos del receptor', 'body' => ['Ingrese el RUC o documento del cliente. Si es contribuyente, el sistema suele completar la razón social a partir del RUC.']],
            ['title' => 'Agregue los ítems', 'body' => ['Cargue descripción, cantidad, precio unitario y la tasa de IVA de cada ítem. Revise la condición de la operación: contado o crédito.']],
            ['title' => 'Revise y firme el documento', 'body' => ['Verifique totales e impuestos antes de confirmar. Una vez aprobado, el documento no se edita: se corrige con una nota de crédito o, en los plazos permitidos, se cancela.']],
            ['title' => 'Descargue el KuDE y envíelo al cliente', 'body' => ['Descargue la representación gráfica (KuDE) en PDF con el código QR y envíesela al cliente por correo o WhatsApp.']],
        ],
        'faq' => [
            ['q' => '¿El facturador de ekuatia tiene costo?', 'a' => 'No, es una herramienta gratuita de la DNIT. Lo que tiene costo es el tiempo de carga manual cuando el volumen crece.'],
            ['q' => '¿Puedo cancelar una factura emitida en ekuatia?', 'a' => 'Existe un evento de cancelación con un plazo limitado desde la emisión. Consulte el plazo vigente en la normativa de la DNIT; fuera de ese plazo corresponde una nota de crédito.'],
            ['q' => '¿Necesito imprimir la factura?', 'a' => 'No es obligatorio imprimirla. El cliente puede recibir el KuDE en PDF y verificarlo con el código QR.'],
            ['q' => '¿Cuándo conviene dejar ekuatia?', 'a' => 'Cuando la carga manual le lleva horas por día, tiene varias cajas o sus ventas ya están en otro sistema.'],
        ],
        'relatedService' => 'facturacion-electronica-sifen',
        'toolLink'       => [
            'path'  => '/herramientas/costo-integracion-sifen/',
            'label' => 'Cotizador de integración SIFEN',
            'text'  => 'Si ekuatia le queda corto, vea qué nivel de integración corresponde a su caso.',
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
                . 'timbrado electrónico que después se usa en ekuatia o en su propio sistema.',
            'Los nombres exactos de los menús cambian con el tiempo. Esta guía describe el orden lógico '
                . 'del trámite; confirme cada paso en Marangatu o con su contador.',
        ],
        'steps' => [
            ['title' => 'Verifique su situación en Marangatu', 'body' => ['Ingrese con su usuario y clave y confirme que su RUC esté activo y sin obligaciones pendientes que bloqueen trámites.']],
            ['title' => 'Decida cómo va a emitir', 'body' => ['Antes de solicitar, defina si usará el facturador gratuito o un sistema propio o integrado. Esa decisión afecta la configuración y los puntos de expedición.']],
            ['title' => 'Solicite la habilitación como facturador electrónico', 'body' => ['Busque en Marangatu la solicitud de facturación electrónica, complete los datos y envíela. Si fue designado como obligado, puede que la habilitación ya esté iniciada.']],
            ['title' => 'Solicite el timbrado electrónico', 'body' => ['Pida el timbrado para sus establecimientos y puntos de expedición. El timbrado electrónico es distinto del timbrado de facturas preimpresas.']],
            ['title' => 'Obtenga el Código de Seguridad del Contribuyente (CSC)', 'body' => ['Si emitirá desde un sistema propio, necesitará el CSC, que se usa para generar el código QR del KuDE.']],
            ['title' => 'Haga las pruebas', 'body' => ['Con un sistema propio, los documentos se prueban primero en el ambiente de pruebas de SIFEN. Con el facturador gratuito, puede comenzar a emitir en cuanto esté habilitado.']],
            ['title' => 'Pase a producción', 'body' => ['Una vez superadas las pruebas, configure el sistema con los datos de producción y comience a emitir.']],
        ],
        'faq' => [
            ['q' => '¿Marangatu y ekuatia son lo mismo?', 'a' => 'No. Marangatu es el sistema de trámites tributarios de la DNIT; ekuatia es el sistema de facturación electrónica, que incluye el facturador gratuito.'],
            ['q' => '¿Necesito certificado de firma digital?', 'a' => 'Para emitir desde un sistema propio, sí. Para el facturador gratuito, siga las instrucciones vigentes de la DNIT.'],
            ['q' => '¿Cuánto demora la habilitación?', 'a' => 'Varía según el caso. Consulte el plazo vigente con la DNIT o su contador.'],
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
            'lead'    => 'Una evaluación en pasos para saber si le conviene seguir con el facturador gratuito o integrar SIFEN.',
        ],
        'intro' => [
            'El facturador gratuito de ekuatia resuelve la obligación de emitir documentos electrónicos '
                . 'sin costo de software. La pregunta no es si sirve, sino cuánto le cuesta en tiempo y '
                . 'errores a medida que crece su volumen.',
            'Siga estos pasos con sus números reales para decidir.',
        ],
        'steps' => [
            ['title' => 'Cuente sus facturas por mes', 'body' => ['Con pocas facturas mensuales, la carga manual es razonable. Cuando son decenas por día, el tiempo de carga se vuelve un costo fijo importante.']],
            ['title' => 'Mida el tiempo por factura', 'body' => ['Tome el tiempo de cargar una factura completa y multiplíquelo por su volumen mensual. Ese es el costo que una integración elimina.']],
            ['title' => 'Revise dónde se origina la venta', 'body' => ['Si la venta ya está en un sistema, tienda o planilla, cargarla de nuevo en ekuatia es doble trabajo y fuente de errores.']],
            ['title' => 'Cuente puntos de expedición', 'body' => ['Varias cajas o sucursales facturando a mano complican el control. Un sistema centraliza numeración y reportes.']],
            ['title' => 'Considere cobros y stock', 'body' => ['Si necesita que la factura se vincule con el stock, la cobranza o el pago en línea, necesita un sistema.']],
            ['title' => 'Decida y planifique', 'body' => ['Si dos o más de los puntos anteriores le pesan, cotice una integración. Puede seguir usando ekuatia mientras se desarrolla.']],
        ],
        'faq' => [
            ['q' => '¿Puedo usar ekuatia y un sistema a la vez?', 'a' => 'Sí, siempre que mantenga ordenada la numeración por punto de expedición.'],
            ['q' => '¿Un sistema de facturación es caro?', 'a' => 'Depende del punto de partida. Una integración sobre un sistema existente puede ser acotada; un sistema nuevo completo es un proyecto mayor.'],
            ['q' => '¿Qué pasa con las facturas ya emitidas en ekuatia?', 'a' => 'Siguen siendo válidas. El sistema nuevo continúa con su propia numeración.'],
        ],
        'relatedService' => 'facturacion-electronica-sifen',
        'toolLink'       => [
            'path'  => '/herramientas/costo-integracion-sifen/',
            'label' => 'Cotizador de integración SIFEN',
            'text'  => 'Ubique su caso en un nivel de integración orientativo.',
        ],
        'related' => ['como-emitir-factura-en-ekuatia', 'que-es-sifen'],
    ],

    'que-es-sifen' => [
        'path'            => '/guias/que-es-sifen/',
        'title'           => 'Qué es SIFEN',
        'navLabel'        => 'Qué es SIFEN',
        'seoTitle'        => 'Qué es SIFEN y quién debe usarlo',
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
            ['title' => 'Confirme si está obligado', 'body' => ['La DNIT designa por resolución a los grupos de contribuyentes obligados, con fechas de incorporación. Verifique en Marangatu o con su contador si su RUC está incluido. También puede adherirse voluntariamente.']],
            ['title' => 'Entienda los documentos electrónicos', 'body' => ['Además de la factura electrónica existen notas de crédito y débito, autofactura, nota de remisión y otros. Identifique cuáles usa su empresa.']],
            ['title' => 'Elija cómo va a emitir', 'body' => ['Puede usar el facturador gratuito de ekuatia, un sistema comercial que ya tenga SIFEN o una integración con su sistema actual.']],
            ['title' => 'Gestione la habilitación en Marangatu', 'body' => ['Solicite la habilitación como facturador electrónico y el timbrado electrónico.']],
            ['title' => 'Consiga el certificado de firma digital', 'body' => ['Si emite desde un sistema propio, necesita un certificado emitido por un prestador habilitado.']],
            ['title' => 'Pruebe y comience a emitir', 'body' => ['Valide sus documentos en el ambiente de pruebas y pase a producción.']],
        ],
        'faq' => [
            ['q' => '¿SIFEN y ekuatia son lo mismo?', 'a' => 'Ekuatia es el nombre con el que la DNIT presenta la facturación electrónica y su portal; SIFEN es el sistema técnico que valida los documentos.'],
            ['q' => '¿Qué es el CDC?', 'a' => 'Es el Código de Control, un identificador único de cada documento electrónico que permite verificarlo.'],
            ['q' => '¿Qué es el KuDE?', 'a' => 'Es la representación gráfica del documento electrónico, con un código QR para verificarlo. Es lo que se entrega al cliente.'],
            ['q' => '¿Puedo seguir usando facturas en papel?', 'a' => 'Depende de su situación y de los plazos de la DNIT. Consulte la resolución vigente que le aplica.'],
        ],
        'relatedService' => 'facturacion-electronica-sifen',
        'toolLink'       => [
            'path'  => '/herramientas/costo-integracion-sifen/',
            'label' => 'Cotizador de integración SIFEN',
            'text'  => 'Si va a emitir desde su sistema, vea qué nivel de integración necesita.',
        ],
        'related' => ['marangatu-facturacion-electronica', 'ekuatia-vs-sistema-de-facturacion', 'como-emitir-factura-en-ekuatia'],
    ],

    'como-integrar-bancard' => [
        'path'            => '/guias/como-integrar-bancard/',
        'title'           => 'Cómo integrar Bancard',
        'navLabel'        => 'Cómo integrar Bancard',
        'seoTitle'        => 'Cómo integrar Bancard en su web',
        'metaDescription' => 'Los pasos para integrar Bancard vPOS o QR en una tienda online: afiliación, '
                           . 'claves de staging, confirmación en el servidor y certificación.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Cómo integrar Bancard vPOS o QR en su tienda online',
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
            ['title' => 'Solicite la afiliación comercial', 'body' => ['Contacte a Bancard para afiliar su comercio al vPOS. Le pedirán datos de la empresa y de la cuenta donde recibirá los pagos.']],
            ['title' => 'Obtenga las claves de staging', 'body' => ['Bancard entrega una clave pública y una privada para el entorno de pruebas.']],
            ['title' => 'Cree la orden de pago desde su servidor', 'body' => ['Su sistema genera el pedido con un identificador único y solicita a Bancard el inicio del proceso de pago.']],
            ['title' => 'Muestre el formulario de pago', 'body' => ['El cliente ingresa su tarjeta en el formulario seguro de Bancard, embebido en su sitio. Su servidor no maneja datos de tarjeta.']],
            ['title' => 'Reciba la confirmación en el servidor', 'body' => ['Bancard notifica el resultado a una URL de su servidor. Ahí se marca el pedido como pagado; no dependa solo de la página de retorno.']],
            ['title' => 'Implemente reversas', 'body' => ['Prevea el caso en que un pago debe revertirse, siguiendo el flujo que indica Bancard.']],
            ['title' => 'Pase la certificación', 'body' => ['Con todos los casos funcionando en staging, solicite la revisión a Bancard y reciba las claves de producción.']],
        ],
        'faq' => [
            ['q' => '¿Hay plugin de Bancard para WooCommerce?', 'a' => 'Existen plugins. Conviene revisar que manejen bien la confirmación en el servidor antes de usarlos.'],
            ['q' => '¿Cuánto cobra Bancard?', 'a' => 'Depende del tipo de tarjeta y su acuerdo. Consulte el valor vigente con Bancard.'],
            ['q' => '¿Puedo cobrar con QR sin tienda online?', 'a' => 'Sí, el QR también se usa en ventas presenciales. Consulte las opciones de Bancard para su comercio.'],
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
        'metaDescription' => 'Bancard o Pagopar para su tienda online en Paraguay: medios de pago, '
                           . 'integración, comisiones y en qué casos conviene cada uno o ambos.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Bancard vs Pagopar: cuál conviene para su negocio',
            'lead'    => 'Una comparación práctica para decidir la pasarela de pagos de su tienda online.',
        ],
        'intro' => [
            'Bancard es la procesadora de tarjetas con la que trabajan gran parte de los bancos del país; '
                . 'Pagopar es un agregador que reúne varios medios de pago en un solo checkout. No compiten '
                . 'exactamente en lo mismo, y muchas tiendas usan ambos.',
            'Evalúe su caso con estos pasos.',
        ],
        'steps' => [
            ['title' => 'Mire cómo pagan sus clientes', 'body' => ['Si la mayoría paga con tarjeta, Bancard cubre lo principal. Si muchos usan billeteras o pagan en efectivo en bocas de cobranza, Pagopar suma esas opciones.']],
            ['title' => 'Compare comisiones vigentes', 'body' => ['Pida las comisiones vigentes a ambas y calcúlelas sobre su ticket promedio. Un agregador suele sumar su margen sobre el medio de pago.']],
            ['title' => 'Considere el esfuerzo técnico', 'body' => ['Pagopar suele ser más rápido de poner en marcha en una tienda estándar. Bancard vPOS requiere integración y certificación.']],
            ['title' => 'Revise necesidades especiales', 'body' => ['Si necesita cobros recurrentes con tarjeta guardada, Bancard lo ofrece según su afiliación.']],
            ['title' => 'Evalúe usar las dos', 'body' => ['Ofrecer Bancard para tarjetas y Pagopar para el resto es una combinación común.']],
        ],
        'faq' => [
            ['q' => '¿Cuál es más barato?', 'a' => 'Depende del medio de pago y del acuerdo. Consulte el valor vigente de cada una.'],
            ['q' => '¿Cuál acredita más rápido?', 'a' => 'Los plazos de acreditación dependen de cada pasarela y medio. Pregúntelos al afiliarse.'],
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
            'lead'    => 'Lo que necesita saber antes de sumar Pagopar a su tienda o sistema.',
        ],
        'intro' => [
            'Pagopar es un agregador de pagos: su comercio se integra una vez y el cliente elige entre los '
                . 'medios que Pagopar tenga habilitados. Las comisiones cambian según el medio de pago y '
                . 'pueden actualizarse, por eso en esta guía no damos cifras: consulte el valor vigente en '
                . 'Pagopar.',
        ],
        'steps' => [
            ['title' => 'Cree su cuenta de comercio', 'body' => ['Registre su comercio en Pagopar con los datos de la empresa y la cuenta de acreditación.']],
            ['title' => 'Revise las comisiones por medio de pago', 'body' => ['Pida el detalle vigente por medio de pago y calcule el costo sobre su ticket promedio. Consulte también si hay costos fijos.']],
            ['title' => 'Entienda los plazos de acreditación', 'body' => ['Pregunte en cuántos días se acredita cada medio. Afecta su flujo de caja.']],
            ['title' => 'Integre su tienda', 'body' => ['Use el plugin disponible para su plataforma o la API. Obtenga las claves de integración desde su panel.']],
            ['title' => 'Configure los pagos pendientes', 'body' => ['Los pagos en bocas de cobranza quedan pendientes hasta que el cliente paga. Defina cuánto tiempo reserva el stock.']],
            ['title' => 'Pruebe antes de publicar', 'body' => ['Haga compras de prueba con cada medio y verifique que el pedido cambie de estado solo.']],
        ],
        'faq' => [
            ['q' => '¿Cuánto cobra Pagopar?', 'a' => 'La comisión depende del medio de pago. Consulte el valor vigente directamente en Pagopar.'],
            ['q' => '¿Necesito tienda online para usar Pagopar?', 'a' => 'No necesariamente: también se puede usar desde un sistema propio o con links de pago, según lo que ofrezca Pagopar.'],
            ['q' => '¿Pagopar emite la factura electrónica?', 'a' => 'La factura de su venta la emite su empresa. Se puede integrar para que se genere al confirmarse el pago.'],
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
        'metaDescription' => 'Cómo empezar a cobrar con Tigo Money en su comercio o tienda online: '
                           . 'afiliación, vías de integración, conciliación y costos a consultar.',
        'lastReviewed'    => $__rev,
        'hero' => [
            'eyebrow' => 'Guías',
            'h1'      => 'Tigo Money para comercios: cómo empezar a cobrar',
            'lead'    => 'Los pasos para aceptar pagos con la billetera Tigo Money en su local o en línea.',
        ],
        'intro' => [
            'Tigo Money es una billetera electrónica muy usada en Paraguay. Para un comercio, aceptarla '
                . 'permite cobrar a clientes que no usan tarjeta. Hay que distinguir entre recibir pagos '
                . 'de forma manual y tener el cobro integrado a su sistema.',
        ],
        'steps' => [
            ['title' => 'Defina dónde va a cobrar', 'body' => ['En el local, en su tienda online o en ambos. Cambia la solución adecuada.']],
            ['title' => 'Consulte la afiliación comercial', 'body' => ['Contacte a Tigo Money para comercios para conocer requisitos y condiciones vigentes.']],
            ['title' => 'Evalúe un agregador', 'body' => ['Si vende en línea, un agregador como Pagopar puede incluir billeteras entre sus medios, con menos desarrollo.']],
            ['title' => 'Integre la confirmación', 'body' => ['Evite verificar capturas de pantalla: con la integración, su sistema recibe la confirmación del pago.']],
            ['title' => 'Concilie', 'body' => ['Registre la referencia de cada cobro junto al pedido y la factura para cruzarlos con la acreditación.']],
        ],
        'faq' => [
            ['q' => '¿Cuánto cuesta aceptar Tigo Money?', 'a' => 'Depende del acuerdo comercial. Consulte el valor vigente con Tigo.'],
            ['q' => '¿Necesito una tienda online?', 'a' => 'No. También puede cobrar en el local; la integración es útil cuando quiere el cobro asociado a su sistema.'],
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
            'h1'      => 'WhatsApp Business o WhatsApp Business API: cuál necesita',
            'lead'    => 'Una guía para decidir si su empresa sigue con la app o pasa a la API.',
        ],
        'intro' => [
            'La app de WhatsApp Business es gratuita y alcanza para muchos negocios. La API (WhatsApp '
                . 'Business Platform) está pensada para atender a escala, automatizar y conectar con otros '
                . 'sistemas. Siga estos pasos para ubicar su caso.',
        ],
        'steps' => [
            ['title' => 'Cuente cuántas personas atienden', 'body' => ['Si más de un par de personas responden el mismo número, la app se vuelve difícil de coordinar.']],
            ['title' => 'Mida el volumen de consultas', 'body' => ['Con muchas consultas repetitivas por día, un chatbot ahorra tiempo.']],
            ['title' => 'Revise qué quiere automatizar', 'body' => ['Confirmaciones, recordatorios, estado de pedidos: todo eso requiere la API.']],
            ['title' => 'Piense en integraciones', 'body' => ['Si quiere que las conversaciones lleguen al CRM o consulten su sistema, necesita la API.']],
            ['title' => 'Considere los costos', 'body' => ['La API tiene costo por mensaje según la tarifa de Meta, más la herramienta de atención. Consulte el valor vigente.']],
            ['title' => 'Decida el número', 'body' => ['Un número en la API no puede usarse a la vez en la app. Evalúe usar uno nuevo.']],
        ],
        'faq' => [
            ['q' => '¿La API tiene app para el celular?', 'a' => 'No propia. Se usa a través de una bandeja de atención, que puede tener app o versión web.'],
            ['q' => '¿Puedo volver a la app después?', 'a' => 'Sí, el número puede migrarse de vuelta, aunque conviene planificarlo.'],
            ['q' => '¿Qué es una plantilla?', 'a' => 'Un mensaje preaprobado por Meta, necesario para iniciar conversaciones fuera de la ventana de atención.'],
        ],
        'relatedService' => 'whatsapp-business-api',
        'toolLink'       => null,
        'related'        => [],
    ],
];
