<?php
/**
 * Photographs per slot, generated with Higgsfield (gpt_image_2_5, variant
 * sunburst) and converted by webimg into <base>-<width>.avif/.webp. The
 * prompts, job ids and costs are in docs/imagery-manifest.json.
 *
 * They are illustrative: none is captioned or described as this company's
 * team, office or client. Owner photographs go in content/site.php 'photos'
 * and win over these. lib/helpers.php image_for() returns null for a slot
 * whose files are missing, and every template then hides the slot.
 *
 *   'home'               the homepage hero
 *   'about'  => [key]    the homepage "quiénes somos" slots
 *   'service' => [slug]  service hero + homepage pillar card (sub-pages without
 *                        one borrow their parent's)
 *   'segment' => [slug]  /soluciones/ hero + the rubro tile
 */

declare(strict_types=1);

return [
    'home' => ['base' => '/assets/img/home/desarrollo-de-software-paraguay-equipo', 'widths' => [640, 1280, 1920], 'w' => 1920, 'h' => 1440, 'alt' => 'Desarrollador y dueño de una empresa revisan un sistema de ventas en una laptop'],

    'about' => [
        'workspace' => ['base' => '/assets/img/home/equipo-desarrollo-escritorio', 'widths' => [480, 880], 'w' => 880, 'h' => 1173, 'alt' => 'Escritorio de trabajo de un proyecto de desarrollo de software'],
        'meeting'   => ['base' => '/assets/img/home/reunion-planificacion-proyecto', 'widths' => [480, 880], 'w' => 880, 'h' => 880, 'alt' => 'Reunión de planificación de un proyecto de software'],
    ],

    'service' => [
        'facturacion-electronica-sifen' => ['base' => '/assets/img/services/facturacion-electronica-sifen-paraguay', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Cajera entrega una factura electrónica con código QR emitida desde el sistema de ventas'],
        'integracion-pagos' => ['base' => '/assets/img/services/integracion-de-pagos-paraguay', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Cliente paga con tarjeta sin contacto y otro con QR en el mostrador de un comercio'],
        'integracion-bancard' => ['base' => '/assets/img/services/integracion-bancard-vpos-qr', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Pago con tarjeta en una terminal y checkout de tienda online en la laptop'],
        'integracion-pagopar' => ['base' => '/assets/img/services/integracion-pagopar-checkout', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Compra online en el celular con varios medios de pago y un pedido listo para enviar'],
        'integracion-tigo-money' => ['base' => '/assets/img/services/cobros-billetera-movil-comercio', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Dueño de un comercio recibe un pago con billetera móvil en el celular'],
        'whatsapp-business-api' => ['base' => '/assets/img/services/whatsapp-business-api-chatbot-atencion', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Agente de atención responde conversaciones de WhatsApp desde una plataforma compartida'],
        'integraciones-api' => ['base' => '/assets/img/services/integraciones-api-sistemas', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Desarrollador conecta sistemas mediante APIs en dos monitores'],
        'paginas-web' => ['base' => '/assets/img/services/paginas-web-empresas-paraguay', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Diseñador revisa una página web adaptada a laptop, tablet y celular'],
        'landing-page' => ['base' => '/assets/img/services/landing-page-campana', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Responsable de marketing revisa una landing page de campaña en la laptop'],
        'wordpress' => ['base' => '/assets/img/services/desarrollo-wordpress-elementor', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Desarrollador edita un sitio WordPress con un constructor visual'],
        'ecommerce' => ['base' => '/assets/img/services/ecommerce-tienda-online-paraguay', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Equipo de una pyme prepara pedidos de su tienda online'],
        'woocommerce' => ['base' => '/assets/img/services/tienda-woocommerce-productos', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Dueña de una tienda carga productos a su tienda WooCommerce'],
        'mantenimiento-web' => ['base' => '/assets/img/services/mantenimiento-web-soporte', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Técnico monitorea el estado y las copias de seguridad de sitios web'],
        'seo' => ['base' => '/assets/img/services/posicionamiento-seo-paraguay', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Analista revisa el crecimiento del tráfico de búsqueda de un sitio'],
        'desarrollo-de-software' => ['base' => '/assets/img/services/desarrollo-de-software-a-medida', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Dos programadores trabajan juntos en un software a medida'],
        'desarrollo-de-apps' => ['base' => '/assets/img/services/desarrollo-de-apps-moviles', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Prueba de una app móvil junto a los bocetos de sus pantallas'],
        'sistemas-erp' => ['base' => '/assets/img/services/sistema-erp-gestion-empresa', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Encargada usa un sistema ERP de gestión junto al depósito'],
        'sistema-contable' => ['base' => '/assets/img/services/sistema-contable-empresa', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Contadora revisa reportes en un sistema contable'],
        'sistema-de-inventario' => ['base' => '/assets/img/services/sistema-de-inventario-stock', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Operario escanea códigos de barra para controlar el stock'],
        'punto-de-venta' => ['base' => '/assets/img/services/sistema-punto-de-venta-pos', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Caja con sistema de punto de venta táctil en un comercio'],
        'crm' => ['base' => '/assets/img/services/crm-para-empresas-pipeline', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Equipo de ventas revisa su embudo de clientes en un CRM'],
        'automatizacion-ia' => ['base' => '/assets/img/services/automatizacion-ia-agentes', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Profesional supervisa un flujo de trabajo automatizado con IA'],
        'programadores' => ['base' => '/assets/img/services/programadores-outsourcing', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Programador trabaja en un proyecto de outsourcing con videollamada'],
        'desarrollo-mvp' => ['base' => '/assets/img/services/desarrollo-mvp-startup', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Fundadores de una startup bocetan su MVP en una pizarra'],
        'hosting' => ['base' => '/assets/img/services/hosting-dominio-com-py', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Sala de servidores donde se alojan sitios web con copias de seguridad'],
        'correo-corporativo' => ['base' => '/assets/img/services/correo-corporativo-google-workspace', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Profesional usa el correo corporativo con dominio propio'],
    ],

    'segment' => [
        'inmobiliarias' => ['base' => '/assets/img/soluciones/software-inmobiliarias-paraguay', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Agente inmobiliario muestra propiedades a una pareja en una tablet'],
        'clinicas' => ['base' => '/assets/img/soluciones/sistema-clinicas-turnos', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Recepción de una clínica agenda turnos en el sistema'],
        'estudios-contables' => ['base' => '/assets/img/soluciones/software-estudios-contables', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Estudio contable trabaja con los archivos de sus clientes'],
        'abogados' => ['base' => '/assets/img/soluciones/software-estudios-juridicos', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Abogada revisa expedientes en su estudio jurídico'],
        'restaurantes' => ['base' => '/assets/img/soluciones/sistema-restaurantes-pedidos', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Restaurante toma pedidos en una tablet y prepara envíos'],
        'logistica' => ['base' => '/assets/img/soluciones/software-logistica-envios', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Despachante coordina envíos junto a una camioneta de reparto'],
        'agro' => ['base' => '/assets/img/soluciones/software-agro-paraguay', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Productor revisa datos de su campo en una tablet'],
        'colegios' => ['base' => '/assets/img/soluciones/sistema-colegios-gestion', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Administración de un colegio gestiona matrículas en el sistema'],
        'gimnasios' => ['base' => '/assets/img/soluciones/sistema-gimnasios-socios', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Recepción de un gimnasio registra el ingreso de socios'],
        'comercios-y-farmacias' => ['base' => '/assets/img/soluciones/sistema-farmacias-comercios', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Farmacia atiende clientes con su sistema de ventas'],
        'cooperativas' => ['base' => '/assets/img/soluciones/software-cooperativas', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Cooperativa atiende a un socio en su oficina'],
        'concesionarias' => ['base' => '/assets/img/soluciones/software-concesionarias-autos', 'widths' => [480, 960], 'w' => 960, 'h' => 720, 'alt' => 'Vendedor de una concesionaria muestra opciones en una tablet'],
    ],
];
