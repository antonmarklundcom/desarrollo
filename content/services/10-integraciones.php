<?php
/**
 * Phase "integraciones": SIFEN, payments (hub + Bancard, Pagopar, Tigo Money),
 * WhatsApp Business API and custom API integrations. Same shape as
 * content/services.php.
 */

declare(strict_types=1);

return [

    /* ------------------------------------------------------------------ SIFEN */
    'facturacion-electronica-sifen' => [
        'path'            => '/servicios/facturacion-electronica-sifen/',
        'title'           => 'Facturación electrónica SIFEN',
        'navLabel'        => 'Facturación electrónica SIFEN',
        'cluster'         => 'integraciones',
        'parent'          => null,
        'seoTitle'        => 'Facturación electrónica SIFEN',
        'metaDescription' => 'Integramos SIFEN en su ERP, punto de venta o tienda web, o le armamos '
                           . 'un sistema de facturación electrónica a medida para Paraguay.',
        'hero' => [
            'eyebrow' => 'Facturación e integraciones',
            'h1'      => 'Facturación electrónica SIFEN integrada a su sistema',
            'h2'      => 'Emita facturas electrónicas desde el sistema que ya usa, sin cargar dos veces cada venta.',
            'lead'    => 'La facturación electrónica en Paraguay pasa por SIFEN, el Sistema Integrado de '
                       . 'Facturación Electrónica Nacional de la DNIT. Conectamos SIFEN a su ERP, punto de venta '
                       . 'o tienda online, o le desarrollamos un sistema de facturación electrónica propio '
                       . 'cuando el facturador gratuito ekuatia ya no alcanza para su volumen.',
        ],
        'includes' => [
            'Relevamiento de su flujo de ventas, puntos de expedición y tipos de documento que emite',
            'Generación del documento electrónico (XML) según el manual técnico vigente de SIFEN',
            'Firma digital con su certificado y envío a SIFEN por los servicios web oficiales',
            'Gestión de respuestas: aprobado, rechazado, con observaciones, y reintentos',
            'Generación del KuDE (representación gráfica en PDF) con código QR y envío por correo',
            'Eventos: cancelación, inutilización de numeración y notas de crédito o débito',
            'Pruebas completas en el ambiente de pruebas de SIFEN antes de pasar a producción',
            'Documentación técnica y capacitación para su equipo administrativo',
        ],
        'excludes' => [
            'El costo del certificado de firma digital, que se compra a un prestador habilitado',
            'La gestión contable o tributaria de su empresa (le sugerimos trabajar con su contador)',
            'Licencias de ERPs comerciales de terceros',
        ],
        'weNeed' => [
            'Acceso a Marangatu o a la persona que lo administra, para la solicitud del timbrado electrónico',
            'Su certificado de firma digital vigente (o le orientamos para obtenerlo)',
            'Acceso técnico a su sistema actual o a la base de datos de ventas',
            'Un ejemplo de cada documento que emite hoy: factura, nota de crédito, autofactura, remisión',
        ],
        'sections' => [
            [
                'h2'   => 'Qué es SIFEN y por qué afecta a su sistema de ventas',
                'body' => [
                    'SIFEN reemplaza la factura preimpresa por un documento electrónico que se genera en '
                        . 'formato XML, se firma digitalmente y se transmite a la DNIT. Cada documento '
                        . 'aprobado tiene un Código de Control (CDC) único y una representación gráfica, el '
                        . 'KuDE, que es lo que usted entrega o envía al cliente.',
                    'Para la empresa, el cambio no es solo fiscal: la factura deja de ser un papel que se '
                        . 'completa al final y pasa a ser un dato que su sistema tiene que producir en el '
                        . 'momento de la venta, con el formato exacto que pide SIFEN. Si su ERP, su caja o su '
                        . 'tienda web no lo hacen, alguien termina cargando cada venta dos veces.',
                    'La obligación de emitir documentos electrónicos se fue extendiendo por grupos de '
                        . 'contribuyentes según los cronogramas que publica la DNIT. Si recibió la '
                        . 'notificación o quiere adelantarse, conviene decidir primero cómo va a emitir, y '
                        . 'recién después pedir el timbrado.',
                ],
            ],
            [
                'h2'   => 'Ekuatia o un sistema de facturación electrónica integrado',
                'body' => [
                    'La DNIT ofrece un facturador gratuito dentro de ekuatia. Para una empresa que emite '
                        . 'pocas facturas por mes, desde una sola oficina y sin un sistema de ventas propio, '
                        . 'suele ser suficiente y no tiene sentido pagar una integración.',
                    'El facturador gratuito empieza a quedar corto cuando la carga manual se vuelve un '
                        . 'costo: muchas facturas por día, varias sucursales o cajas, ventas que ya están en '
                        . 'un sistema, una tienda online que debería facturar sola, o la necesidad de cruzar '
                        . 'facturación con stock y cobranzas. En esos casos, un sistema de facturación '
                        . 'electrónica integrado evita errores de tipeo y libera horas de trabajo.',
                ],
                'items' => [
                    ['title' => 'Ekuatia alcanza', 'text' => 'Bajo volumen, una persona factura, no hay sistema de ventas que conectar.'],
                    ['title' => 'Conviene integrar', 'text' => 'Volumen diario, varias cajas o sucursales, ventas ya registradas en un sistema.'],
                    ['title' => 'Conviene un sistema propio', 'text' => 'No tiene sistema de ventas y necesita facturar, controlar stock y cobrar en un mismo lugar.'],
                ],
            ],
            [
                'h2'   => 'Cómo integramos SIFEN a su ERP, punto de venta o web',
                'body' => [
                    'Trabajamos sobre lo que usted ya tiene. Si su sistema es propio, agregamos un módulo '
                        . 'que arma el documento electrónico a partir de cada venta. Si usa un ERP comercial '
                        . 'que permite extensiones, lo conectamos por su API o base de datos. Si vende por '
                        . 'internet, la tienda genera la factura cuando se confirma el pago.',
                    'La comunicación con SIFEN se hace por servicios web con certificado digital. '
                        . 'Resolvemos el envío individual o por lotes, la consulta del estado, los '
                        . 'reintentos cuando el servicio no responde y el registro de cada respuesta, para '
                        . 'que nunca quede una venta sin su documento aprobado.',
                ],
                'items' => [
                    ['title' => 'Relevamiento', 'text' => 'Qué documentos emite, desde dónde, con qué volumen y qué sistema los origina.'],
                    ['title' => 'Desarrollo', 'text' => 'Generación del XML, firma, envío, KuDE y eventos, conectados a su flujo.'],
                    ['title' => 'Pruebas', 'text' => 'Validación de cada tipo de documento en el ambiente de pruebas de SIFEN.'],
                    ['title' => 'Producción', 'text' => 'Paso a producción con su timbrado electrónico y acompañamiento las primeras semanas.'],
                ],
            ],
            [
                'h2'   => 'Qué determina el costo de una integración SIFEN',
                'body' => [
                    'No hay un precio único porque el trabajo cambia mucho según el punto de partida. Lo '
                        . 'que más pesa es el sistema actual (si existe y si permite integrarse), la cantidad '
                        . 'de tipos de documento, la cantidad de puntos de expedición y si hay que sumar '
                        . 'integración con la web o con varias cajas.',
                    'Una integración básica sobre un sistema propio bien documentado es un proyecto corto; '
                        . 'una integración con un ERP comercial cerrado, varias sucursales y notas de crédito '
                        . 'automáticas es un proyecto más largo. Antes de cotizar puede usar nuestro cotizador '
                        . 'orientativo para ubicar su caso.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Una sola carga por venta', 'text' => 'La factura sale del mismo sistema donde registra la venta, sin retipear datos.'],
            ['title' => 'Menos rechazos', 'text' => 'Los datos se validan antes de enviar, y los rechazos quedan registrados con su motivo.'],
            ['title' => 'Factura al instante', 'text' => 'El cliente recibe el KuDE por correo o WhatsApp apenas se confirma la venta.'],
            ['title' => 'Código que usted controla', 'text' => 'Entregamos el código y la documentación; no queda atado a una plataforma cerrada.'],
        ],
        'faq' => [
            [
                'q' => '¿Estoy obligado a facturar electrónicamente?',
                'a' => 'Depende de si su RUC fue incluido en alguno de los grupos que la DNIT designó como '
                     . 'obligados, o si usted se adhirió de forma voluntaria. Lo puede confirmar en Marangatu '
                     . 'o con su contador. Consulte siempre la resolución vigente.',
            ],
            [
                'q' => '¿Puedo seguir usando ekuatia y además tener un sistema integrado?',
                'a' => 'Sí. Muchas empresas usan el facturador gratuito para casos puntuales y el sistema '
                     . 'integrado para las ventas del día a día. Lo importante es que cada punto de expedición '
                     . 'lleve su numeración ordenada.',
            ],
            [
                'q' => '¿Necesito un certificado de firma digital?',
                'a' => 'Para emitir desde un sistema propio o integrado, sí: cada documento se firma con un '
                     . 'certificado emitido por un prestador de servicios de certificación habilitado en '
                     . 'Paraguay. Le orientamos sobre el trámite, pero la compra la hace su empresa.',
            ],
            [
                'q' => '¿Cuánto demora una integración SIFEN?',
                'a' => 'Una integración sencilla puede estar lista en pocas semanas; una integración con '
                     . 'ERP comercial y varias sucursales lleva más. El tiempo real lo definimos después del '
                     . 'relevamiento, junto con el presupuesto.',
            ],
            [
                'q' => '¿Qué pasa si SIFEN no responde en el momento de la venta?',
                'a' => 'El sistema guarda el documento y lo reintenta en segundo plano, sin frenar la caja. '
                     . 'Queda registrado qué documentos están pendientes para que nadie tenga que revisarlos '
                     . 'a mano.',
            ],
            [
                'q' => '¿Trabajan con mi ERP?',
                'a' => 'Si el ERP permite exportar datos, tiene API o nos da acceso a su base de datos, en '
                     . 'general sí. Si es un sistema cerrado sin ninguna vía de integración, se lo decimos en '
                     . 'el relevamiento antes de cotizar.',
            ],
        ],
        'cta'       => ['label' => 'Cotizar integración SIFEN', 'whatsappText' => ''],
        'related'   => ['integraciones-api', 'integracion-pagos'],
        'guides'    => ['que-es-sifen', 'ekuatia-vs-sistema-de-facturacion', 'marangatu-facturacion-electronica', 'como-emitir-factura-en-ekuatia'],
        'articles'  => [],
        'toolLinks' => [
            [
                'path'  => '/herramientas/costo-integracion-sifen/',
                'label' => 'Cotizador de integración SIFEN',
                'text'  => 'Responda cuatro preguntas y vea qué nivel de integración corresponde a su caso.',
            ],
        ],
    ],

    /* ------------------------------------------------------------- PAGOS HUB */
    'integracion-pagos' => [
        'path'            => '/servicios/integracion-pagos/',
        'title'           => 'Integración de pagos en Paraguay',
        'navLabel'        => 'Integración de pagos',
        'cluster'         => 'integraciones',
        'parent'          => null,
        'seoTitle'        => 'Integración de pagos en Paraguay',
        'metaDescription' => 'Conectamos Bancard, Pagopar y Tigo Money a su tienda online o sistema: '
                           . 'pasarela de pagos, conciliación y confirmación automática del pedido.',
        'hero' => [
            'eyebrow' => 'Facturación e integraciones',
            'h1'      => 'Integración de pagos en Paraguay: Bancard, Pagopar y Tigo Money',
            'h2'      => 'Cobre con tarjeta, QR o billetera y que su sistema se entere solo.',
            'lead'    => 'Integramos la pasarela de pagos que corresponde a su negocio (Bancard, Pagopar, '
                       . 'Tigo Money u otras) en su tienda online, sistema de gestión o app, con confirmación '
                       . 'automática de cada cobro y conciliación contra sus pedidos y facturas.',
        ],
        'includes' => [
            'Asesoramiento para elegir pasarela según su tipo de venta, ticket promedio y medios de pago',
            'Integración técnica con la API de la pasarela, en entorno de pruebas y producción',
            'Confirmación automática del pago y actualización del pedido en su sistema',
            'Manejo de pagos rechazados, pendientes, reversas y devoluciones',
            'Registro de cada transacción para la conciliación con su banco o procesadora',
            'Acompañamiento en el proceso de certificación que pida la pasarela',
        ],
        'excludes' => [
            'La afiliación comercial y las comisiones, que se acuerdan directamente con cada pasarela',
            'El diseño completo de una tienda online, que se cotiza como proyecto aparte',
        ],
        'weNeed' => [
            'Su RUC y los datos de la empresa para la afiliación con la pasarela',
            'Acceso a su tienda, sistema o servidor',
            'Las credenciales de prueba y producción que entregue la pasarela',
        ],
        'sections' => [
            [
                'h2'   => 'Qué pasarela de pagos conviene en Paraguay',
                'body' => [
                    'No hay una pasarela de pagos que sirva para todo. La elección depende de qué medios de '
                        . 'pago usan sus clientes, cuánto vende, si vende en línea o en local, y cuánto '
                        . 'trabajo técnico quiere asumir.',
                    'En Paraguay las opciones más usadas por comercios son Bancard, que procesa tarjetas y '
                        . 'QR de gran parte de los bancos; Pagopar, que agrupa varios medios de pago en un '
                        . 'solo botón; y las billeteras electrónicas como Tigo Money. Muchas tiendas combinan '
                        . 'dos: una para tarjetas y otra para billeteras y bocas de cobranza.',
                ],
                'items' => [
                    ['title' => 'Bancard', 'text' => 'Tarjetas de crédito y débito, QR y pagos recurrentes con tarjeta guardada.'],
                    ['title' => 'Pagopar', 'text' => 'Varios medios en un solo checkout, con integración más rápida para tiendas.'],
                    ['title' => 'Tigo Money', 'text' => 'Clientes que pagan desde su billetera móvil, sin tarjeta.'],
                ],
            ],
            [
                'h2'   => 'Cómo trabajamos una integración de pagos',
                'body' => [
                    'Primero definimos el flujo: qué pasa cuando el cliente paga, cuando el pago se '
                        . 'rechaza y cuando queda pendiente. Después integramos la pasarela en el entorno de '
                        . 'pruebas, probamos cada caso y recién ahí pasamos a producción.',
                    'La parte que más se descuida es la confirmación. Una integración correcta no depende '
                        . 'de que el cliente vuelva a la página: la pasarela avisa al servidor y el sistema '
                        . 'marca el pedido como pagado, descuenta stock y, si corresponde, emite la factura '
                        . 'electrónica.',
                ],
            ],
            [
                'h2'   => 'Pagos, facturación electrónica y conciliación en un solo flujo',
                'body' => [
                    'Cuando el pago ya está confirmado por el servidor, el siguiente paso natural es emitir '
                        . 'la factura electrónica en SIFEN y dejar registrado el número de transacción. Así la '
                        . 'conciliación se hace cruzando datos, no revisando comprobantes uno por uno.',
                    'La conciliación es donde muchas empresas pierden horas: el banco o la procesadora '
                        . 'acredita un monto neto de comisiones, agrupado por día o por lote, y alguien tiene '
                        . 'que encontrar a qué pedidos corresponde. Si cada cobro quedó guardado con su '
                        . 'referencia de la pasarela, su pedido y su factura, esa tarea se reduce a un reporte.',
                ],
            ],
            [
                'h2'   => 'Dónde se puede integrar una pasarela de pagos',
                'body' => [
                    'La pasarela de pagos no es exclusiva de las tiendas online. Cualquier sistema que '
                        . 'genere un monto a cobrar puede ofrecer un botón o un link de pago: un sistema de '
                        . 'cuotas de un colegio, un portal de clientes que pagan facturas pendientes, una app '
                        . 'de reservas o un sistema de suscripciones.',
                ],
                'items' => [
                    ['title' => 'Tiendas online', 'text' => 'WooCommerce, tiendas a medida y catálogos con carrito.'],
                    ['title' => 'Portales de clientes', 'text' => 'Pago de facturas o cuotas pendientes desde un enlace.'],
                    ['title' => 'Suscripciones', 'text' => 'Cobro recurrente con tarjeta guardada, cuando la pasarela lo permite.'],
                    ['title' => 'Apps móviles', 'text' => 'Pago dentro de la app con confirmación en su servidor.'],
                    ['title' => 'Links de pago por WhatsApp', 'text' => 'El vendedor envía un enlace y el sistema se entera del pago.'],
                ],
            ],
            [
                'h2'   => 'Qué determina el costo de integrar pagos',
                'body' => [
                    'Hay dos costos distintos que conviene no mezclar. El primero es la comisión de la '
                        . 'pasarela, que se paga por cada transacción y se acuerda con ella; consulte el valor '
                        . 'vigente antes de decidir. El segundo es el trabajo de integración, que se paga una '
                        . 'vez y depende de la plataforma, de la cantidad de pasarelas y de qué tiene que '
                        . 'pasar después del pago.',
                    'Instalar un plugin en una tienda WooCommerce estándar es un trabajo corto. Integrar dos '
                        . 'pasarelas en un sistema propio, con tarjeta guardada, facturación electrónica '
                        . 'automática y conciliación, es un proyecto. Se lo cotizamos después de ver su sistema, '
                        . 'con el alcance por escrito.',
                ],
            ],
            [
                'h2'   => 'Seguridad en los pagos en línea',
                'body' => [
                    'En las integraciones que hacemos, los datos de la tarjeta se cargan en el formulario de '
                        . 'la pasarela y no pasan por su servidor. Su sistema recibe solo el resultado y una '
                        . 'referencia. Eso reduce el riesgo y las obligaciones de su empresa. Además, validamos '
                        . 'que cada confirmación venga realmente de la pasarela antes de marcar un pedido como '
                        . 'pagado.',
                    'Si su preocupación es la seguridad general de sus sistemas, más allá de los pagos, '
                        . 'le sugerimos consultar a especialistas como ciberseguridad.com.py.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Pedidos confirmados solos', 'text' => 'El sistema se entera del pago aunque el cliente cierre la ventana.'],
            ['title' => 'Más medios de pago', 'text' => 'Tarjeta, QR y billetera, según lo que usen sus clientes.'],
            ['title' => 'Conciliación ordenada', 'text' => 'Cada cobro queda con su referencia, su pedido y su factura.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto cobran las pasarelas de pago?',
                'a' => 'Cada pasarela cobra una comisión por transacción que depende del medio de pago y del '
                     . 'acuerdo comercial. Consulte el valor vigente directamente con la pasarela; nosotros '
                     . 'cobramos solo por el trabajo de integración.',
            ],
            [
                'q' => '¿Puedo tener Bancard y Pagopar al mismo tiempo?',
                'a' => 'Sí. Es común ofrecer las dos opciones en el checkout. El sistema registra por cuál '
                     . 'pasarela entró cada pago para la conciliación.',
            ],
            [
                'q' => '¿Integran pagos en WooCommerce?',
                'a' => 'Sí. Algunas pasarelas tienen plugin propio y otras requieren desarrollo. En ambos '
                     . 'casos revisamos la confirmación automática y los estados del pedido.',
            ],
            [
                'q' => '¿Quién hace la afiliación con la pasarela?',
                'a' => 'La afiliación comercial la firma su empresa con la pasarela. Nosotros le decimos qué '
                     . 'pedir y nos encargamos de la parte técnica.',
            ],
            [
                'q' => '¿Pueden integrar pagos en una app móvil?',
                'a' => 'Sí, siempre que la pasarela lo permita. En general el pago se procesa en una vista '
                     . 'segura de la pasarela y la app recibe la confirmación desde su servidor.',
            ],
        ],
        'cta'       => ['label' => 'Consultar integración de pagos', 'whatsappText' => ''],
        'related'   => ['integracion-bancard', 'integracion-pagopar', 'integracion-tigo-money'],
        'guides'    => ['bancard-vs-pagopar', 'como-integrar-bancard', 'pagopar-comisiones-y-como-funciona', 'tigo-money-para-comercios'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    /* ---------------------------------------------------------------- BANCARD */
    'integracion-bancard' => [
        'path'            => '/servicios/integracion-bancard/',
        'title'           => 'Integración Bancard',
        'navLabel'        => 'Integración Bancard',
        'cluster'         => 'integraciones',
        'parent'          => 'integracion-pagos',
        'seoTitle'        => 'Integración Bancard vPOS y QR',
        'metaDescription' => 'Integración de Bancard vPOS y Bancard QR en su tienda online, sistema o '
                           . 'app: pagos con tarjeta, confirmación automática y certificación.',
        'hero' => [
            'eyebrow' => 'Integración de pagos',
            'h1'      => 'Integración Bancard: vPOS y QR para su tienda o sistema',
            'h2'      => 'Cobre con tarjeta de crédito, débito o QR, con el pedido confirmado en su sistema.',
            'lead'    => 'Integramos Bancard vPOS y Bancard QR en su sitio web, tienda online, sistema de '
                       . 'gestión o app. Nos ocupamos de la parte técnica: conexión con la API, pruebas en '
                       . 'el entorno de Bancard, certificación y confirmación automática de cada pago.',
        ],
        'includes' => [
            'Integración de Bancard vPOS para pagos con tarjeta en su sitio o app',
            'Integración de pagos con QR cuando su caso lo requiere',
            'Opcional: tarjeta guardada (catastro) para cobros recurrentes o compras en un clic',
            'Recepción de la confirmación de Bancard en su servidor y actualización del pedido',
            'Rollback y reversas según el flujo que define Bancard',
            'Pruebas en el entorno de staging y acompañamiento en la certificación',
            'Registro de transacciones para conciliación',
        ],
        'excludes' => [
            'La afiliación comercial con Bancard y las comisiones por transacción',
            'Terminales POS físicas',
        ],
        'weNeed' => [
            'Su contrato o solicitud de afiliación con Bancard en curso',
            'Las claves pública y privada de staging y, luego, de producción',
            'Acceso a su servidor, tienda o repositorio',
        ],
        'sections' => [
            [
                'h2'   => 'Qué es Bancard vPOS y qué es Bancard QR',
                'body' => [
                    'Bancard vPOS es el punto de venta virtual de Bancard: permite cobrar con tarjeta en un '
                        . 'sitio web o app sin que su sistema toque los datos de la tarjeta, porque el '
                        . 'cliente los ingresa en un formulario seguro provisto por Bancard.',
                    'El cobro con QR permite que el cliente pague escaneando un código desde la app de su '
                        . 'banco o billetera compatible. Sirve tanto en local como en ventas a distancia, y '
                        . 'se integra al sistema para que el cobro quede asociado a la venta.',
                ],
            ],
            [
                'h2'   => 'Cómo es una integración Bancard paso a paso',
                'body' => [
                    'Con las credenciales de staging, su sistema crea la orden de pago, abre el '
                        . 'formulario de Bancard y espera la confirmación. Bancard notifica el resultado al '
                        . 'servidor de su comercio, que responde y actualiza el pedido.',
                    'Una vez que todos los casos funcionan en staging, Bancard revisa la integración antes '
                        . 'de habilitar las claves de producción. Preparamos la integración para pasar esa '
                        . 'revisión sin idas y vueltas.',
                ],
                'items' => [
                    ['title' => 'Orden de pago', 'text' => 'Su sistema genera el pedido y solicita el proceso de pago a Bancard.'],
                    ['title' => 'Pago seguro', 'text' => 'El cliente paga en el formulario de Bancard, dentro de su sitio.'],
                    ['title' => 'Confirmación', 'text' => 'Bancard avisa a su servidor y el pedido queda pagado.'],
                    ['title' => 'Certificación', 'text' => 'Revisión de Bancard y habilitación de producción.'],
                ],
            ],
            [
                'h2'   => 'Bancard en WooCommerce, sistemas propios y apps',
                'body' => [
                    'En WooCommerce se puede usar un plugin o una integración propia; revisamos el plugin '
                        . 'antes de instalarlo, porque la confirmación del pago es la parte crítica. En '
                        . 'sistemas propios y apps integramos directamente contra la API.',
                    'Si además emite factura electrónica, la integración puede disparar el documento '
                        . 'SIFEN apenas Bancard confirma el cobro.',
                ],
            ],
            [
                'h2'   => 'Bancard vPOS en una app móvil',
                'body' => [
                    'En una app, el formulario de Bancard se muestra dentro de una vista web segura. La app '
                        . 'no procesa la tarjeta: pide a su servidor que inicie el pago, muestra el formulario '
                        . 'y espera la confirmación que el servidor recibe de Bancard. Así la lógica de cobro '
                        . 'queda en un solo lugar, compartida entre la web y la app.',
                ],
            ],
            [
                'h2'   => 'Tarjeta guardada para cobros recurrentes',
                'body' => [
                    'Para suscripciones, cuotas o clientes que compran seguido, Bancard ofrece la opción de '
                        . 'registrar la tarjeta del cliente para cobrar sin que la vuelva a cargar. Su sistema '
                        . 'guarda solo una referencia, no el número de la tarjeta. Esta función depende de su '
                        . 'afiliación, así que conviene pedirla desde el inicio si la va a necesitar.',
                    'Diseñamos el flujo completo: alta de la tarjeta, cobro en cada vencimiento, aviso al '
                        . 'cliente cuando un cobro falla y reintento o pedido de otra tarjeta.',
                ],
                'items' => [
                    ['title' => 'Alta', 'text' => 'El cliente registra su tarjeta una vez, en el formulario de Bancard.'],
                    ['title' => 'Cobro', 'text' => 'Su sistema cobra en cada vencimiento usando la referencia guardada.'],
                    ['title' => 'Fallo', 'text' => 'Si el cobro se rechaza, el cliente recibe un aviso para actualizar la tarjeta.'],
                ],
            ],
            [
                'h2'   => 'Errores comunes al integrar Bancard',
                'body' => [
                    'La mayoría de los problemas que vemos en integraciones existentes se repiten: pedidos '
                        . 'que quedan pendientes porque solo se confirmaban en la página de retorno, '
                        . 'identificadores de pedido reutilizados que Bancard rechaza, claves de staging que '
                        . 'quedaron en producción o reversas que nunca se implementaron.',
                    'Si ya tiene Bancard integrado y algo de esto le suena, también revisamos y corregimos '
                        . 'integraciones hechas por otros.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Sin datos de tarjeta en su servidor', 'text' => 'El cliente carga la tarjeta en el formulario de Bancard.'],
            ['title' => 'Certificación acompañada', 'text' => 'Preparamos los casos de prueba que Bancard revisa.'],
            ['title' => 'Cobros recurrentes', 'text' => 'Con tarjeta guardada, puede cobrar suscripciones o cuotas.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto cobra Bancard por transacción?',
                'a' => 'La comisión depende del tipo de tarjeta y de su acuerdo comercial. Consulte el valor '
                     . 'vigente con Bancard al tramitar la afiliación.',
            ],
            [
                'q' => '¿Cuánto demora la integración?',
                'a' => 'La parte técnica suele ser corta; lo que más varía es el tiempo de afiliación y '
                     . 'certificación del lado de Bancard. Le damos una estimación concreta después de ver su '
                     . 'sistema.',
            ],
            [
                'q' => '¿Puedo cobrar suscripciones con Bancard?',
                'a' => 'Sí, con la opción de tarjeta guardada, si su afiliación la incluye. El cliente '
                     . 'registra la tarjeta una vez y su sistema cobra en cada vencimiento.',
            ],
            [
                'q' => '¿Qué pasa si el pago se confirma pero el cliente cierra la ventana?',
                'a' => 'Como la confirmación llega al servidor, el pedido se marca pagado igual. Por eso no '
                     . 'dependemos de la página de retorno.',
            ],
            [
                'q' => '¿Necesito un certificado SSL?',
                'a' => 'Sí, el sitio debe funcionar con HTTPS. Si no lo tiene, lo resolvemos como parte del '
                     . 'trabajo.',
            ],
            [
                'q' => '¿Revisan integraciones de Bancard hechas por otro proveedor?',
                'a' => 'Sí. Revisamos la confirmación en el servidor, las reversas y el manejo de identificadores de pedido, que son los puntos donde más fallan, y corregimos lo necesario.',
            ],
            [
                'q' => '¿Bancard y la factura electrónica se pueden conectar?',
                'a' => 'Sí. Cuando Bancard confirma el pago, el sistema puede emitir la factura electrónica en SIFEN y enviar el KuDE al cliente sin intervención manual.',
            ],
        ],
        'cta'       => ['label' => 'Integrar Bancard', 'whatsappText' => ''],
        'related'   => ['integracion-pagos', 'integracion-pagopar', 'facturacion-electronica-sifen'],
        'guides'    => ['como-integrar-bancard', 'bancard-vs-pagopar'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    /* ---------------------------------------------------------------- PAGOPAR */
    'integracion-pagopar' => [
        'path'            => '/servicios/integracion-pagopar/',
        'title'           => 'Integración Pagopar',
        'navLabel'        => 'Integración Pagopar',
        'cluster'         => 'integraciones',
        'parent'          => 'integracion-pagos',
        'seoTitle'        => 'Integración Pagopar',
        'metaDescription' => 'Integramos Pagopar en su tienda online o sistema: varios medios de pago en '
                           . 'un checkout, confirmación automática y estados de pedido correctos.',
        'hero' => [
            'eyebrow' => 'Integración de pagos',
            'h1'      => 'Integración Pagopar para tiendas y sistemas',
            'h2'      => 'Varios medios de pago en un solo checkout, con el pedido actualizado solo.',
            'lead'    => 'Pagopar reúne distintos medios de pago en una sola integración. Lo conectamos a su '
                       . 'tienda online, WooCommerce o sistema propio, con confirmación automática de cada '
                       . 'pago y manejo correcto de pagos pendientes, como los que se abonan en bocas de '
                       . 'cobranza.',
        ],
        'includes' => [
            'Integración de Pagopar por API o plugin, según su plataforma',
            'Creación del pedido y redirección al checkout de Pagopar',
            'Recepción de la notificación de pago y actualización del pedido',
            'Manejo de pagos pendientes y vencidos',
            'Pruebas en entorno de desarrollo y paso a producción',
        ],
        'excludes' => [
            'El alta comercial en Pagopar y las comisiones por transacción',
            'Diseño o rediseño de la tienda',
        ],
        'weNeed' => [
            'Su cuenta de comercio en Pagopar con las claves de integración',
            'Acceso a la tienda o sistema',
        ],
        'sections' => [
            [
                'h2'   => 'Qué resuelve Pagopar',
                'body' => [
                    'Pagopar funciona como agregador: en lugar de integrar cada medio de pago por separado, '
                        . 'su tienda se conecta una vez y el cliente elige cómo pagar entre las opciones que '
                        . 'Pagopar tenga habilitadas, como tarjetas, billeteras o bocas de cobranza.',
                    'Esto acorta los tiempos para una tienda que recién empieza a vender en línea. A cambio, '
                        . 'hay que tener en cuenta la estructura de comisiones y los plazos de acreditación, '
                        . 'que conviene consultar con Pagopar antes de decidir.',
                ],
            ],
            [
                'h2'   => 'El detalle que más falla: los pagos pendientes',
                'body' => [
                    'Cuando el cliente elige pagar en una boca de cobranza, el pedido queda pendiente hasta '
                        . 'que paga. Si la tienda no procesa bien la notificación posterior, el pedido queda '
                        . 'trabado o se despacha sin cobrar. Configuramos los estados para que eso no pase y '
                        . 'para liberar el stock de los pedidos que vencen sin pago.',
                ],
                'items' => [
                    ['title' => 'Pagado', 'text' => 'El pedido pasa a preparación y, si corresponde, se factura.'],
                    ['title' => 'Pendiente', 'text' => 'El stock queda reservado un tiempo definido.'],
                    ['title' => 'Vencido', 'text' => 'El pedido se cancela y el stock se libera.'],
                ],
            ],
            [
                'h2'   => 'Cómo es la integración de Pagopar paso a paso',
                'body' => [
                    'El flujo general es simple: su tienda crea el pedido en Pagopar con el monto y los '
                        . 'datos del comprador, redirige al cliente al checkout de Pagopar, y Pagopar avisa a '
                        . 'su servidor cuando el pago cambia de estado. Su sistema consulta ese estado y '
                        . 'actualiza el pedido.',
                    'Lo delicado está en los detalles: validar que la notificación venga de Pagopar, no '
                        . 'procesar dos veces el mismo pago, y mostrar al cliente una página de retorno clara '
                        . 'aunque el pago todavía esté pendiente.',
                ],
                'items' => [
                    ['title' => 'Crear el pedido', 'text' => 'Su sistema envía monto, ítems y comprador a Pagopar.'],
                    ['title' => 'Checkout', 'text' => 'El cliente elige el medio de pago en Pagopar.'],
                    ['title' => 'Notificación', 'text' => 'Pagopar avisa a su servidor cada cambio de estado.'],
                    ['title' => 'Actualización', 'text' => 'El pedido pasa a pagado, pendiente o vencido.'],
                ],
            ],
            [
                'h2'   => 'Pagopar en WooCommerce y en sistemas propios',
                'body' => [
                    'Para WooCommerce existe una integración que se instala como plugin. La configuramos, '
                        . 'probamos cada medio de pago y ajustamos los estados del pedido a su forma de '
                        . 'trabajar, incluido el envío de correos y la reserva de stock.',
                    'En sistemas propios integramos directamente con la API de Pagopar. Es habitual para '
                        . 'cobrar cuotas, inscripciones, reservas o facturas pendientes desde un portal de '
                        . 'clientes, sin necesidad de un carrito de compras.',
                ],
            ],
            [
                'h2'   => 'Qué revisar antes de elegir Pagopar',
                'body' => [
                    'Antes de integrar, compare tres cosas con sus números reales: la comisión por cada '
                        . 'medio de pago que usarán sus clientes, el plazo en que se acredita cada uno y si '
                        . 'hay costos fijos. Consulte el valor vigente con Pagopar. Si la mayoría de sus '
                        . 'clientes paga con tarjeta y su volumen es alto, puede convenir sumar Bancard para '
                        . 'tarjetas y dejar Pagopar para el resto de los medios.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Una integración, varios medios', 'text' => 'El cliente elige cómo pagar sin que usted integre cada uno.'],
            ['title' => 'Estados correctos', 'text' => 'Nada se despacha sin cobro confirmado.'],
            ['title' => 'Salida rápida', 'text' => 'Ideal para empezar a vender online sin un proyecto largo.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto cobra Pagopar?',
                'a' => 'Pagopar cobra una comisión que varía según el medio de pago. Consulte el valor '
                     . 'vigente en Pagopar antes de decidir.',
            ],
            [
                'q' => '¿Pagopar funciona con WooCommerce?',
                'a' => 'Sí, existe integración para WooCommerce. La instalamos y revisamos que la '
                     . 'confirmación y los estados funcionen como corresponde.',
            ],
            [
                'q' => '¿Puedo usar Pagopar y Bancard juntos?',
                'a' => 'Sí. Algunos comercios ofrecen Bancard para tarjetas y Pagopar para el resto de los '
                     . 'medios.',
            ],
            [
                'q' => '¿Qué pasa con los pedidos que nunca se pagan?',
                'a' => 'Se configuran para vencer después del plazo que usted defina, liberando el stock.',
            ],
            [
                'q' => '¿Integran Pagopar en sistemas que no son tiendas?',
                'a' => 'Sí, por ejemplo para cobrar cuotas, inscripciones o servicios desde un sistema propio.',
            ],
            [
                'q' => '¿Cuánto demora una integración de Pagopar?',
                'a' => 'En una tienda WooCommerce estándar es un trabajo corto; en un sistema propio depende del flujo de cobro. Le damos el plazo concreto después de ver su plataforma.',
            ],
            [
                'q' => '¿Pagopar me acredita el dinero en mi cuenta?',
                'a' => 'Sí, según los plazos y condiciones de cada medio de pago. Consulte el valor vigente de plazos y comisiones con Pagopar.',
            ],
        ],
        'cta'       => ['label' => 'Integrar Pagopar', 'whatsappText' => ''],
        'related'   => ['integracion-pagos', 'integracion-bancard', 'integracion-tigo-money'],
        'guides'    => ['pagopar-comisiones-y-como-funciona', 'bancard-vs-pagopar'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    /* ------------------------------------------------------------- TIGO MONEY */
    'integracion-tigo-money' => [
        'path'            => '/servicios/integracion-tigo-money/',
        'title'           => 'Integración Tigo Money',
        'navLabel'        => 'Integración Tigo Money',
        'cluster'         => 'integraciones',
        'parent'          => 'integracion-pagos',
        'seoTitle'        => 'Integración Tigo Money para comercios',
        'metaDescription' => 'Cobre con Tigo Money en su tienda o sistema: integramos la billetera como '
                           . 'medio de pago, directa o a través de un agregador, con confirmación.',
        'hero' => [
            'eyebrow' => 'Integración de pagos',
            'h1'      => 'Tigo Money para comercios: cobros integrados a su sistema',
            'h2'      => 'Sume a los clientes que pagan desde la billetera, sin tarjeta.',
            'lead'    => 'Tigo Money para comercios permite cobrar a clientes que pagan desde su billetera '
                       . 'móvil. Le ayudamos a elegir la vía de integración (directa o por un agregador '
                       . 'como Pagopar) y la conectamos a su tienda o sistema con confirmación automática.',
        ],
        'includes' => [
            'Análisis de la vía de integración: directa con Tigo o a través de un agregador',
            'Integración técnica y pruebas',
            'Confirmación automática del pago en su sistema',
            'Registro de transacciones para conciliación',
        ],
        'excludes' => [
            'La afiliación comercial con Tigo Money y sus comisiones',
        ],
        'weNeed' => [
            'Su cuenta de comercio o el trámite de afiliación en curso',
            'Acceso a su tienda o sistema',
        ],
        'sections' => [
            [
                'h2'   => 'Por qué sumar Tigo Money como medio de pago',
                'body' => [
                    'Una parte de los clientes en Paraguay no usa tarjeta para pagar en línea, pero sí '
                        . 'tiene una billetera electrónica. Ofrecer Tigo Money puede ser la diferencia entre '
                        . 'una venta cerrada y un carrito abandonado, sobre todo en tickets chicos y medianos.',
                ],
            ],
            [
                'h2'   => 'Integración directa o a través de un agregador',
                'body' => [
                    'La integración directa le da una relación comercial propia con Tigo, pero requiere su '
                        . 'propio trámite y desarrollo. Un agregador como Pagopar suele incluir billeteras '
                        . 'entre sus medios de pago, lo que simplifica la parte técnica a cambio de su '
                        . 'propia comisión. Le mostramos las dos opciones con sus implicancias antes de '
                        . 'desarrollar.',
                ],
                'items' => [
                    ['title' => 'Directa', 'text' => 'Contrato propio con Tigo y desarrollo específico.'],
                    ['title' => 'Por agregador', 'text' => 'Menos desarrollo, un intermediario más en la comisión.'],
                ],
            ],
            [
                'h2'   => 'El problema de cobrar con capturas de pantalla',
                'body' => [
                    'Muchos comercios ya reciben pagos por billetera de manera informal: el cliente '
                        . 'transfiere y manda una captura por WhatsApp. Funciona con pocos pedidos, pero '
                        . 'tiene costos ocultos: alguien tiene que revisar cada comprobante, cruzarlo con el '
                        . 'pedido y confirmar que el dinero realmente entró. Además, una captura se puede '
                        . 'editar o reenviar.',
                    'Con una integración, el pago se inicia desde su sistema con un monto y una referencia, '
                        . 'y la confirmación llega de la billetera o del agregador. Nadie revisa imágenes y '
                        . 'cada cobro queda asociado a su pedido.',
                ],
            ],
            [
                'h2'   => 'Cómo trabajamos una integración de Tigo Money',
                'body' => [
                    'Primero confirmamos qué opciones tiene disponibles su comercio: integración directa, '
                        . 'cobro a través de un agregador o una combinación. Después definimos el flujo de '
                        . 'pago, lo integramos en un entorno de prueba y verificamos cada estado posible: '
                        . 'pagado, rechazado, cancelado por el cliente y sin respuesta.',
                    'Cuando el pago queda confirmado, el sistema puede seguir con el resto del proceso: '
                        . 'descontar stock, avisar al cliente por WhatsApp o correo y emitir la factura '
                        . 'electrónica en SIFEN.',
                ],
                'items' => [
                    ['title' => 'Relevamiento', 'text' => 'Qué vende, dónde cobra y qué opciones tiene habilitadas.'],
                    ['title' => 'Integración', 'text' => 'Conexión del flujo de pago con su tienda o sistema.'],
                    ['title' => 'Pruebas', 'text' => 'Verificación de cada estado antes de publicar.'],
                    ['title' => 'Puesta en marcha', 'text' => 'Activación en producción y seguimiento de los primeros cobros.'],
                ],
            ],
            [
                'h2'   => 'Tigo Money junto a otros medios de pago',
                'body' => [
                    'Rara vez conviene ofrecer una sola opción. Lo habitual es combinar tarjeta, a través '
                        . 'de Bancard o un agregador, con una o más billeteras. El checkout muestra las '
                        . 'opciones y el sistema registra por cuál entró cada pago, para que la conciliación '
                        . 'no dependa de adivinar.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Más clientes pueden pagar', 'text' => 'Incluye a quienes no usan tarjeta en línea.'],
            ['title' => 'Confirmación automática', 'text' => 'El pedido se actualiza sin revisar capturas de pantalla.'],
        ],
        'faq' => [
            [
                'q' => '¿Cuánto cobra Tigo Money a los comercios?',
                'a' => 'Las condiciones dependen del acuerdo comercial. Consulte el valor vigente con Tigo '
                     . 'Money para comercios.',
            ],
            [
                'q' => '¿Puedo dejar de recibir pagos por transferencia y captura de pantalla?',
                'a' => 'Esa es la idea: con la integración, el sistema recibe la confirmación y usted no '
                     . 'tiene que verificar comprobantes a mano.',
            ],
            [
                'q' => '¿Conviene más la vía directa o Pagopar?',
                'a' => 'Depende de su volumen y de los otros medios de pago que quiera ofrecer. Con poco '
                     . 'volumen, un agregador suele ser más simple.',
            ],
            [
                'q' => '¿Sirve para cobrar en el local?',
                'a' => 'Sí, según las opciones que Tigo tenga para comercios. La integración con el sistema '
                     . 'es útil cuando quiere que el cobro quede asociado a la venta.',
            ],
            [
                'q' => '¿Integran otras billeteras?',
                'a' => 'Sí, según lo que ofrezca cada billetera o agregador. Lo evaluamos en la consulta.',
            ],
            [
                'q' => '¿Puedo enviar un link de pago de Tigo Money por WhatsApp?',
                'a' => 'Depende de las opciones habilitadas para su comercio o del agregador que use. Cuando es posible, el link se genera desde su sistema con el monto y la referencia del pedido.',
            ],
            [
                'q' => '¿La integración emite la factura electrónica?',
                'a' => 'Puede hacerlo si su sistema está integrado con SIFEN: al confirmarse el pago se emite el documento y se envía el KuDE al cliente.',
            ],
        ],
        'cta'       => ['label' => 'Consultar Tigo Money', 'whatsappText' => ''],
        'related'   => ['integracion-pagos', 'integracion-pagopar', 'integracion-bancard'],
        'guides'    => ['tigo-money-para-comercios'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    /* --------------------------------------------------------------- WHATSAPP */
    'whatsapp-business-api' => [
        'path'            => '/servicios/whatsapp-business-api/',
        'title'           => 'WhatsApp Business API y chatbots',
        'navLabel'        => 'WhatsApp Business API',
        'cluster'         => 'integraciones',
        'parent'          => null,
        'seoTitle'        => 'WhatsApp Business API y chatbots',
        'metaDescription' => 'Implementamos WhatsApp Business API, chatbots de WhatsApp y su integración '
                           . 'con CRM y sistemas, para atender y vender por WhatsApp a escala.',
        'hero' => [
            'eyebrow' => 'Facturación e integraciones',
            'h1'      => 'WhatsApp Business API y chatbots para empresas',
            'h2'      => 'Varios agentes, un solo número, respuestas automáticas y todo conectado a su sistema.',
            'lead'    => 'Cuando la app de WhatsApp Business queda chica, la API de WhatsApp permite atender '
                       . 'con varios agentes desde un mismo número, sumar un chatbot de WhatsApp, enviar '
                       . 'notificaciones y conectar las conversaciones con su CRM, su tienda o su sistema de '
                       . 'gestión.',
        ],
        'includes' => [
            'Alta de la cuenta de WhatsApp Business Platform y verificación del número',
            'Configuración de plantillas de mensajes y su envío a aprobación',
            'Bandeja compartida para varios agentes, o conexión con la que ya usa',
            'Chatbot de WhatsApp con menú, preguntas frecuentes y derivación a una persona',
            'Integración con su CRM, tienda o sistema: consultas de pedidos, turnos, saldos',
            'Notificaciones automáticas: confirmaciones, recordatorios, avisos de envío',
            'Capacitación del equipo y documentación',
        ],
        'excludes' => [
            'El costo de los mensajes que cobra Meta, que se paga directamente según su tarifa',
            'Campañas masivas a contactos que no dieron su consentimiento',
        ],
        'weNeed' => [
            'Un número de teléfono que pueda dedicar a la API',
            'Acceso al Business Manager (Meta Business Suite) de su empresa',
            'La información que el bot tiene que responder: horarios, precios, preguntas frecuentes',
        ],
        'sections' => [
            [
                'h2'   => 'WhatsApp Business o WhatsApp Business API: la diferencia',
                'body' => [
                    'La app gratuita de WhatsApp Business sirve para un negocio chico que atiende desde uno '
                        . 'o pocos teléfonos. La API de WhatsApp (WhatsApp Business Platform) es para cuando '
                        . 'necesita varios agentes al mismo tiempo, automatizar respuestas o conectar '
                        . 'WhatsApp con otros sistemas.',
                    'La API no tiene una app propia: se usa a través de una bandeja de atención o de su '
                        . 'propio sistema. Por eso la implementación incluye elegir o construir esa '
                        . 'herramienta.',
                ],
                'items' => [
                    ['title' => 'App Business', 'text' => 'Gratuita, pocos dispositivos, respuestas rápidas simples.'],
                    ['title' => 'API', 'text' => 'Varios agentes, chatbot, integraciones y notificaciones automáticas.'],
                ],
            ],
            [
                'h2'   => 'Chatbot de WhatsApp que deriva a una persona',
                'body' => [
                    'Un bot de WhatsApp útil no intenta responder todo. Resuelve lo repetitivo (horarios, '
                        . 'estado del pedido, precios de lista, turnos) y pasa a una persona cuando la '
                        . 'consulta lo requiere, con la conversación ya encaminada.',
                    'Podemos armar el bot con menús y reglas, o sumar respuestas con inteligencia artificial '
                        . 'sobre la información de su empresa, siempre con la opción de hablar con alguien.',
                ],
            ],
            [
                'h2'   => 'Integración de la API de WhatsApp con su CRM y sistemas',
                'body' => [
                    'El valor real aparece cuando WhatsApp habla con sus sistemas: el cliente consulta su '
                        . 'pedido y el bot lo busca en la tienda; confirma un turno y queda en la agenda; '
                        . 'pide su factura y recibe el KuDE en PDF. Cada conversación puede quedar registrada '
                        . 'en el CRM como contacto y oportunidad.',
                ],
            ],
            [
                'h2'   => 'Cuánto cuesta usar la API de WhatsApp',
                'body' => [
                    'Hay dos componentes: lo que cobra Meta por los mensajes, según la categoría del mensaje '
                        . 'y su tarifa vigente, y el costo de implementación y de la herramienta de atención. '
                        . 'Consulte el valor vigente de Meta; nosotros le ayudamos a estimar el volumen para '
                        . 'que el número no sea una sorpresa.',
                ],
            ],
            [
                'h2'   => 'Qué se puede automatizar con un bot de WhatsApp',
                'body' => [
                    'Las automatizaciones que más rinden son las que responden preguntas repetidas o avisan '
                        . 'algo que el cliente ya espera. No reemplazan al equipo: le sacan de encima lo '
                        . 'rutinario para que atienda las consultas que sí necesitan a una persona.',
                ],
                'items' => [
                    ['title' => 'Estado del pedido', 'text' => 'El cliente escribe su número de pedido y el bot le responde desde la tienda.'],
                    ['title' => 'Turnos y reservas', 'text' => 'Consulta de disponibilidad, reserva y recordatorio el día anterior.'],
                    ['title' => 'Cobranzas', 'text' => 'Aviso de vencimiento con link de pago, con plantilla aprobada.'],
                    ['title' => 'Facturas', 'text' => 'Envío automático del KuDE en PDF al confirmarse la venta.'],
                    ['title' => 'Calificación de consultas', 'text' => 'Preguntas iniciales antes de pasar a un vendedor.'],
                ],
            ],
            [
                'h2'   => 'Cómo trabajamos una implementación de WhatsApp API',
                'body' => [
                    'Empezamos por el uso: quién atiende, qué preguntan los clientes y qué mensajes quiere '
                        . 'enviar. Con eso definimos si alcanza con una bandeja de atención existente o si hace '
                        . 'falta desarrollo propio, y qué plantillas hay que presentar a aprobación.',
                    'Después hacemos el alta en WhatsApp Business Platform, verificamos la empresa en Meta, '
                        . 'configuramos el número y armamos el bot y las integraciones. Al final capacitamos '
                        . 'al equipo y dejamos documentado cómo agregar respuestas o plantillas nuevas.',
                ],
            ],
            [
                'h2'   => 'Buenas prácticas para no perder el número',
                'body' => [
                    'Meta mide la calidad de cada número según cómo reaccionan los destinatarios. Si muchos '
                        . 'bloquean o reportan los mensajes, el número pierde capacidad de envío o queda '
                        . 'restringido. Por eso trabajamos solo con contactos que dieron su consentimiento, '
                        . 'plantillas útiles y una opción clara para dejar de recibir mensajes.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Un número, varios agentes', 'text' => 'Nadie depende de un teléfono en particular.'],
            ['title' => 'Respuestas fuera de horario', 'text' => 'El bot atiende lo repetitivo a cualquier hora.'],
            ['title' => 'Conversaciones medibles', 'text' => 'Sabe cuántas consultas entran y cuántas se convierten.'],
        ],
        'faq' => [
            [
                'q' => '¿Puedo usar mi número actual?',
                'a' => 'Sí, pero ese número deja de funcionar en la app común de WhatsApp o WhatsApp '
                     . 'Business mientras esté en la API. Muchas empresas usan un número nuevo para evitar '
                     . 'la migración.',
            ],
            [
                'q' => '¿Puedo enviar mensajes masivos?',
                'a' => 'Solo con plantillas aprobadas por Meta y a contactos que aceptaron recibirlos. Los '
                     . 'envíos sin consentimiento terminan en bloqueos y en la baja de calidad del número.',
            ],
            [
                'q' => '¿Qué es la ventana de 24 horas?',
                'a' => 'Cuando un cliente le escribe, se abre un período en el que puede responderle con '
                     . 'mensajes libres. Fuera de ese período, solo puede iniciar la conversación con una '
                     . 'plantilla aprobada.',
            ],
            [
                'q' => '¿Cuánto demora la implementación?',
                'a' => 'La puesta en marcha básica es rápida; la verificación de la empresa en Meta y las '
                     . 'integraciones con sus sistemas son las que definen el plazo.',
            ],
            [
                'q' => '¿El chatbot puede usar inteligencia artificial?',
                'a' => 'Sí, con límites claros: responde con la información de su empresa y deriva a una '
                     . 'persona cuando no está seguro.',
            ],
            [
                'q' => '¿Necesito verificar mi empresa en Meta?',
                'a' => 'Para operar con volumen y acceder a todas las funciones, sí. La verificación se hace en el Business Manager con documentación de la empresa; le guiamos en el proceso.',
            ],
            [
                'q' => '¿Pueden conectar WhatsApp con mi CRM?',
                'a' => 'Sí, si el CRM permite integraciones. Cada conversación nueva puede crear o actualizar un contacto y una oportunidad, con el historial del chat.',
            ],
        ],
        'cta'       => ['label' => 'Consultar WhatsApp API', 'whatsappText' => ''],
        'related'   => ['integraciones-api', 'integracion-pagos'],
        'guides'    => ['whatsapp-business-vs-api'],
        'articles'  => [],
        'toolLinks' => [],
    ],

    /* ---------------------------------------------------------------- APIS */
    'integraciones-api' => [
        'path'            => '/servicios/integraciones-api/',
        'title'           => 'Integraciones y APIs a medida',
        'navLabel'        => 'Integraciones y APIs',
        'cluster'         => 'integraciones',
        'parent'          => null,
        'seoTitle'        => 'Integraciones y APIs a medida',
        'metaDescription' => 'Conectamos su ERP, bancos, tienda online, CRM y otros sistemas mediante APIs '
                           . 'a medida, para que los datos pasen solos y sin doble carga.',
        'hero' => [
            'eyebrow' => 'Facturación e integraciones',
            'h1'      => 'Integraciones y APIs a medida entre sus sistemas',
            'h2'      => 'Que los datos pasen solos de un sistema a otro, sin exportar planillas.',
            'lead'    => 'Desarrollamos integraciones y APIs a medida para conectar su ERP, su tienda online, '
                       . 'su CRM, los extractos de sus bancos y otros servicios. El objetivo es concreto: '
                       . 'dejar de copiar datos a mano entre sistemas.',
        ],
        'includes' => [
            'Relevamiento de los sistemas involucrados y del dato que tiene que viajar',
            'Desarrollo de la integración por API, archivos, base de datos o webhooks',
            'Desarrollo de una API propia para exponer datos de su sistema a terceros',
            'Registro de cada sincronización, alertas de error y reintentos',
            'Documentación técnica de la integración',
        ],
        'excludes' => [
            'Licencias de los sistemas de terceros',
            'Cambios en sistemas cerrados que no ofrecen ninguna vía de acceso',
        ],
        'weNeed' => [
            'Acceso de prueba a cada sistema a integrar',
            'La documentación de las APIs disponibles, si existe',
            'Una persona de su equipo que conozca el proceso de punta a punta',
        ],
        'sections' => [
            [
                'h2'   => 'Integraciones más pedidas',
                'body' => [
                    'La mayoría de los proyectos de integración responden a una planilla que alguien '
                        . 'arma todos los días. Si hay un proceso que consiste en exportar de un sistema y '
                        . 'cargar en otro, es candidato a integrarse.',
                ],
                'items' => [
                    ['title' => 'Tienda online y ERP', 'text' => 'Stock, precios y pedidos sincronizados.'],
                    ['title' => 'ERP y facturación electrónica', 'text' => 'Cada venta genera su documento SIFEN.'],
                    ['title' => 'Bancos y cobranzas', 'text' => 'Conciliación de extractos contra facturas pendientes.'],
                    ['title' => 'Formularios y CRM', 'text' => 'Cada consulta llega al CRM como oportunidad.'],
                    ['title' => 'WhatsApp y sistemas', 'text' => 'Consultas de pedidos o saldos desde el chat.'],
                ],
            ],
            [
                'h2'   => 'Cómo hacemos una integración que no se rompe',
                'body' => [
                    'Una integración falla más por lo que pasa cuando algo sale mal que por el caso normal. '
                        . 'Diseñamos cada integración con registro de lo que se envió, reintentos '
                        . 'automáticos y un aviso cuando algo requiere atención humana.',
                    'Cuando un sistema no tiene API, buscamos la vía más estable disponible: exportaciones '
                        . 'programadas, lectura de base de datos o archivos en una carpeta compartida. Si '
                        . 'ninguna es confiable, se lo decimos antes de cotizar.',
                ],
            ],
            [
                'h2'   => 'APIs propias para su empresa',
                'body' => [
                    'A veces el pedido es el inverso: un cliente, proveedor o app necesita consultar datos '
                        . 'de su sistema. Desarrollamos una API propia con autenticación, límites de uso y '
                        . 'documentación, para que terceros se conecten sin acceder a su base de datos.',
                    'Es el caso típico de un distribuidor que quiere que sus clientes consulten stock y '
                        . 'precios desde su propio sistema, o de una empresa que necesita que una app móvil '
                        . 'lea y escriba datos de su sistema de gestión.',
                ],
            ],
            [
                'h2'   => 'Cómo trabajamos un proyecto de integración',
                'body' => [
                    'Antes de escribir código dibujamos el recorrido del dato: dónde nace, qué sistema es la '
                        . 'fuente de verdad, qué pasa si se modifica en los dos lados y con qué frecuencia '
                        . 'tiene que viajar. Esa definición evita la mayoría de los problemas posteriores.',
                ],
                'items' => [
                    ['title' => 'Relevamiento', 'text' => 'Sistemas, datos, volúmenes y quién usa cada cosa.'],
                    ['title' => 'Diseño', 'text' => 'Fuente de verdad, frecuencia, formato y manejo de errores.'],
                    ['title' => 'Desarrollo y pruebas', 'text' => 'Contra entornos de prueba o copias de datos.'],
                    ['title' => 'Puesta en marcha', 'text' => 'Sincronización inicial, monitoreo y ajustes.'],
                ],
            ],
            [
                'h2'   => 'Qué determina el costo de una integración',
                'body' => [
                    'Pesa la cantidad de sistemas, la calidad de sus APIs, el volumen de datos y si la '
                        . 'sincronización es en una dirección o en ambas. Una integración en una sola dirección '
                        . 'con APIs documentadas es un trabajo acotado; una sincronización bidireccional entre '
                        . 'sistemas sin API requiere más diseño y más pruebas.',
                    'También cuenta el mantenimiento: cuando un proveedor cambia su API, la integración '
                        . 'tiene que adaptarse. Lo dejamos previsto desde el inicio.',
                ],
            ],
            [
                'h2'   => 'Integraciones que suelen venir juntas',
                'body' => [
                    'Una integración rara vez viene sola. La tienda que se conecta con el ERP termina '
                        . 'necesitando facturación electrónica SIFEN y una pasarela de pagos; el CRM que '
                        . 'recibe formularios suma después las conversaciones de WhatsApp. Planificamos cada '
                        . 'integración para que la siguiente se sume sin rehacer lo anterior.',
                ],
            ],
        ],
        'benefits' => [
            ['title' => 'Menos carga manual', 'text' => 'Las horas de copiar y pegar pasan a otras tareas.'],
            ['title' => 'Datos consistentes', 'text' => 'El mismo stock, precio y cliente en todos los sistemas.'],
            ['title' => 'Errores visibles', 'text' => 'Si algo falla, se entera por una alerta y no por un cliente.'],
        ],
        'faq' => [
            [
                'q' => '¿Qué pasa si uno de los sistemas no tiene API?',
                'a' => 'Evaluamos otras vías: exportaciones, base de datos o archivos. Si ninguna es '
                     . 'confiable, se lo decimos en el relevamiento.',
            ],
            [
                'q' => '¿Pueden integrar con bancos paraguayos?',
                'a' => 'Depende de lo que ofrezca cada banco: algunos tienen servicios para empresas y otros '
                     . 'solo permiten descargar extractos. Trabajamos con la vía disponible.',
            ],
            [
                'q' => '¿Quién mantiene la integración?',
                'a' => 'Podemos ofrecer soporte y mantenimiento. Además, entregamos documentación para que '
                     . 'otro equipo técnico pueda hacerse cargo.',
            ],
            [
                'q' => '¿Cuánto cuesta una integración?',
                'a' => 'Depende de cuántos sistemas, qué datos y con qué frecuencia. Lo cotizamos después de '
                     . 'un relevamiento corto.',
            ],
            [
                'q' => '¿La integración es en tiempo real?',
                'a' => 'Puede serlo, si los sistemas lo permiten. En otros casos alcanza con una '
                     . 'sincronización cada cierto tiempo.',
            ],
            [
                'q' => '¿Pueden conectar mi tienda online con mi sistema de gestión?',
                'a' => 'Sí, es una de las integraciones más comunes: stock y precios desde el sistema hacia la tienda, y pedidos desde la tienda hacia el sistema.',
            ],
            [
                'q' => '¿Qué pasa si una integración falla un fin de semana?',
                'a' => 'Los datos quedan en cola y se reintentan. Si el error persiste, se envía una alerta a la persona que usted defina, con el detalle de qué falló.',
            ],
        ],
        'cta'       => ['label' => 'Consultar integración', 'whatsappText' => ''],
        'related'   => ['facturacion-electronica-sifen', 'integracion-pagos', 'whatsapp-business-api'],
        'guides'    => [],
        'articles'  => [],
        'toolLinks' => [],
    ],
];
