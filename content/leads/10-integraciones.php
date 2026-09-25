<?php
/** Phase "integraciones": lead records for its services and tool. */

declare(strict_types=1);

$__next = ['Le respondemos dentro del siguiente día hábil.'];

return [
    'services' => [
        'facturacion-electronica-sifen' => [
            'menuLabel'    => 'Facturación electrónica SIFEN',
            'need'         => 'integracion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera consultar por la integración de facturación electrónica SIFEN.',
            'nextStep'     => array_merge($__next, ['Tenga a mano cuántas facturas emite por mes y qué sistema de ventas usa hoy.']),
            'crmTag'       => 'facturacion-electronica-sifen',
            'nextLink'     => ['path' => '/herramientas/costo-integracion-sifen/', 'label' => 'Mientras tanto, ubique su caso en el cotizador'],
        ],
        'integracion-pagos' => [
            'menuLabel'    => 'Integración de pagos',
            'need'         => 'integracion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera consultar por la integración de pagos (Bancard, Pagopar o Tigo Money).',
            'nextStep'     => array_merge($__next, ['Cuéntenos qué plataforma usa (tienda, sistema, app) y qué medios de pago quiere ofrecer.']),
            'crmTag'       => 'integracion-pagos',
            'nextLink'     => ['path' => '/guias/bancard-vs-pagopar/', 'label' => 'Lea la comparación Bancard vs Pagopar'],
        ],
        'integracion-bancard' => [
            'menuLabel'    => 'Integración Bancard',
            'need'         => 'integracion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera consultar por la integración de Bancard vPOS o QR.',
            'nextStep'     => array_merge($__next, ['Indíquenos si ya tiene la afiliación con Bancard y en qué plataforma está su tienda.']),
            'crmTag'       => 'integracion-bancard',
            'nextLink'     => ['path' => '/guias/como-integrar-bancard/', 'label' => 'Vea cómo es el proceso de integración'],
        ],
        'integracion-pagopar' => [
            'menuLabel'    => 'Integración Pagopar',
            'need'         => 'integracion',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera consultar por la integración de Pagopar.',
            'nextStep'     => array_merge($__next, ['Indíquenos en qué plataforma está su tienda o sistema.']),
            'crmTag'       => 'integracion-pagopar',
            'nextLink'     => ['path' => '/guias/pagopar-comisiones-y-como-funciona/', 'label' => 'Lea cómo funciona Pagopar'],
        ],
        'integracion-tigo-money' => [
            'menuLabel'    => 'Integración Tigo Money',
            'need'         => 'integracion',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera consultar por cobrar con Tigo Money en mi comercio.',
            'nextStep'     => array_merge($__next, ['Cuéntenos si cobra en local, en línea o en ambos.']),
            'crmTag'       => 'integracion-tigo-money',
            'nextLink'     => ['path' => '/guias/tigo-money-para-comercios/', 'label' => 'Lea la guía de Tigo Money para comercios'],
        ],
        'whatsapp-business-api' => [
            'menuLabel'    => 'WhatsApp Business API y chatbots',
            'need'         => 'integracion',
            'tier'         => 'A',
            'whatsappText' => 'Hola, quisiera consultar por WhatsApp Business API y un chatbot.',
            'nextStep'     => array_merge($__next, ['Tenga a mano cuántas personas atienden WhatsApp y cuántas consultas reciben por día.']),
            'crmTag'       => 'whatsapp-business-api',
            'nextLink'     => ['path' => '/guias/whatsapp-business-vs-api/', 'label' => 'Lea WhatsApp Business vs API'],
        ],
        'integraciones-api' => [
            'menuLabel'    => 'Integraciones y APIs a medida',
            'need'         => 'integracion',
            'tier'         => 'B',
            'whatsappText' => 'Hola, quisiera consultar por una integración entre mis sistemas.',
            'nextStep'     => array_merge($__next, ['Anote qué sistemas quiere conectar y qué dato tiene que pasar de uno a otro.']),
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
            'nextStep'     => array_merge($__next, ['Guarde el nivel que le indicó el cotizador: lo revisamos con usted.']),
            'crmTag'       => 'costo-integracion-sifen',
            'nextLink'     => ['path' => '/guias/ekuatia-vs-sistema-de-facturacion/', 'label' => 'Lea ekuatia vs sistema de facturación'],
        ],
    ],
];
