<?php
/** Phase "integraciones": lead records for its services and tool. */

declare(strict_types=1);

$__next = ['Te respondemos dentro del siguiente día hábil.'];

return [
    'services' => [
        'facturacion-electronica-sifen' => [
            'menuLabel'    => 'Facturación electrónica SIFEN',
            'need'         => 'integracion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera consultar por la integración de facturación electrónica SIFEN.',
            'nextStep'     => array_merge($__next, ['Tené a mano cuántas facturas emitís por mes y qué sistema de ventas usás hoy.']),
            'crmTag'       => 'facturacion-electronica-sifen',
            'nextLink'     => ['path' => '/herramientas/costo-integracion-sifen/', 'label' => 'Mientras tanto, ubicá tu caso en el cotizador'],
        ],
        'integracion-pagos' => [
            'menuLabel'    => 'Integración de pagos',
            'need'         => 'integracion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera consultar por la integración de pagos (Bancard, Pagopar o Tigo Money).',
            'nextStep'     => array_merge($__next, ['Contanos qué plataforma usás (tienda, sistema, app) y qué medios de pago querés ofrecer.']),
            'crmTag'       => 'integracion-pagos',
            'nextLink'     => ['path' => '/guias/bancard-vs-pagopar/', 'label' => 'Leé la comparación Bancard vs Pagopar'],
        ],
        'integracion-bancard' => [
            'menuLabel'    => 'Integración Bancard',
            'need'         => 'integracion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera consultar por la integración de Bancard vPOS o QR.',
            'nextStep'     => array_merge($__next, ['Indicanos si ya tenés la afiliación con Bancard y en qué plataforma está tu tienda.']),
            'crmTag'       => 'integracion-bancard',
            'nextLink'     => ['path' => '/guias/como-integrar-bancard/', 'label' => 'Mirá cómo es el proceso de integración'],
        ],
        'integracion-pagopar' => [
            'menuLabel'    => 'Integración Pagopar',
            'need'         => 'integracion',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera consultar por la integración de Pagopar.',
            'nextStep'     => array_merge($__next, ['Indicanos en qué plataforma está tu tienda o sistema.']),
            'crmTag'       => 'integracion-pagopar',
            'nextLink'     => ['path' => '/guias/pagopar-comisiones-y-como-funciona/', 'label' => 'Leé cómo funciona Pagopar'],
        ],
        'integracion-tigo-money' => [
            'menuLabel'    => 'Integración Tigo Money',
            'need'         => 'integracion',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera consultar por cobrar con Tigo Money en mi comercio.',
            'nextStep'     => array_merge($__next, ['Contanos si cobrás en local, en línea o en ambos.']),
            'crmTag'       => 'integracion-tigo-money',
            'nextLink'     => ['path' => '/guias/tigo-money-para-comercios/', 'label' => 'Leé la guía de Tigo Money para comercios'],
        ],
        'whatsapp-business-api' => [
            'menuLabel'    => 'WhatsApp Business API y chatbots',
            'need'         => 'integracion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera consultar por WhatsApp Business API y un chatbot.',
            'nextStep'     => array_merge($__next, ['Tené a mano cuántas personas atienden WhatsApp y cuántas consultas reciben por día.']),
            'crmTag'       => 'whatsapp-business-api',
            'nextLink'     => ['path' => '/guias/whatsapp-business-vs-api/', 'label' => 'Leé WhatsApp Business vs API'],
        ],
        'integraciones-api' => [
            'menuLabel'    => 'Integraciones y APIs a medida',
            'need'         => 'integracion',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera consultar por una integración entre mis sistemas.',
            'nextStep'     => array_merge($__next, ['Anotá qué sistemas querés conectar y qué dato tiene que pasar de uno a otro.']),
            'crmTag'       => 'integraciones-api',
            'nextLink'     => null,
        ],
    ],
    'tools' => [
        'costo-integracion-sifen' => [
            'menuLabel'    => 'Cotizador de integración SIFEN',
            'need'         => 'integracion',
            'tier'         => 'C',
            'whatsappText' => 'Hola, usé el cotizador de integración SIFEN y quisiera un presupuesto.',
            'nextStep'     => array_merge($__next, ['Guardá el nivel que te indicó el cotizador: lo revisamos con vos.']),
            'crmTag'       => 'costo-integracion-sifen',
            'nextLink'     => ['path' => '/guias/ekuatia-vs-sistema-de-facturacion/', 'label' => 'Leé ekuatia vs sistema de facturación'],
        ],
    ],
];
