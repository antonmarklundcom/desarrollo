<?php
/** Phase "software": lead records. Shape documented in content/lead-values.php. */

declare(strict_types=1);

$__ns = static function (string $extra): array {
    return ['Le respondemos dentro del siguiente día hábil.', $extra];
};

return [
    'services' => [
        'desarrollo-de-software' => [
            'menuLabel' => 'Software a medida', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera consultar por desarrollo de software a medida para mi empresa.',
            'nextStep' => $__ns('Tenga a mano ejemplos de las planillas o sistemas que usa hoy.'),
            'crmTag' => 'desarrollo-de-software',
            'nextLink' => ['path' => '/guias/como-contratar-programadores/', 'label' => 'Lea cómo contratar desarrollo'],
        ],
        'desarrollo-de-apps' => [
            'menuLabel' => 'App móvil', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera consultar por el desarrollo de una app móvil.',
            'nextStep' => $__ns('Anote las funciones indispensables de la primera versión de su app.'),
            'crmTag' => 'desarrollo-de-apps',
            'nextLink' => ['path' => '/herramientas/cotizador-app/', 'label' => 'Ubique su app en el cotizador'],
        ],
        'sistemas-erp' => [
            'menuLabel' => 'ERP y sistema de gestión', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera consultar por un ERP o sistema de gestión para mi empresa.',
            'nextStep' => $__ns('Tenga a mano cuántos usuarios, sucursales y productos maneja.'),
            'crmTag' => 'sistemas-erp',
            'nextLink' => ['path' => '/guias/que-es-un-erp/', 'label' => 'Lea la guía sobre ERP'],
        ],
        'sistema-contable' => [
            'menuLabel' => 'Sistema contable', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera consultar por un sistema contable para mi empresa.',
            'nextStep' => $__ns('Si puede, tenga el contacto de su contador para una reunión inicial.'),
            'crmTag' => 'sistema-contable',
            'nextLink' => null,
        ],
        'sistema-de-inventario' => [
            'menuLabel' => 'Sistema de inventario', 'need' => 'software', 'tier' => 'B',
            'whatsappText' => 'Hola, quisiera consultar por un sistema de inventario.',
            'nextStep' => $__ns('Tenga a mano la cantidad aproximada de productos y depósitos.'),
            'crmTag' => 'sistema-de-inventario',
            'nextLink' => null,
        ],
        'punto-de-venta' => [
            'menuLabel' => 'Sistema de punto de venta', 'need' => 'software', 'tier' => 'B',
            'whatsappText' => 'Hola, quisiera consultar por un sistema de punto de venta con factura electrónica.',
            'nextStep' => $__ns('Tenga a mano la cantidad de cajas y si ya emite factura electrónica.'),
            'crmTag' => 'punto-de-venta',
            'nextLink' => ['path' => '/guias/como-elegir-un-sistema-punto-de-venta/', 'label' => 'Lea cómo elegir un POS'],
        ],
        'crm' => [
            'menuLabel' => 'CRM', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera consultar por la implementación de un CRM.',
            'nextStep' => $__ns('Tenga a mano cuántos vendedores usarían el CRM y por qué canales vende.'),
            'crmTag' => 'crm',
            'nextLink' => ['path' => '/guias/kommo-vs-odoo/', 'label' => 'Compare Kommo y Odoo'],
        ],
        'automatizacion-ia' => [
            'menuLabel' => 'Automatización con IA', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera automatizar un proceso de mi empresa.',
            'nextStep' => $__ns('Describa la tarea que quiere automatizar y cuántas horas por semana lleva.'),
            'crmTag' => 'automatizacion-ia',
            'nextLink' => ['path' => '/herramientas/roi-automatizacion/', 'label' => 'Calcule el ahorro'],
        ],
        'programadores' => [
            'menuLabel' => 'Programadores', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, necesito programadores para un proyecto.',
            'nextStep' => $__ns('Tenga a mano la tecnología del proyecto y la dedicación que necesita.'),
            'crmTag' => 'programadores',
            'nextLink' => ['path' => '/guias/como-contratar-programadores/', 'label' => 'Lea cómo contratar programadores'],
        ],
        'desarrollo-mvp' => [
            'menuLabel' => 'MVP para startup', 'need' => 'software', 'tier' => 'B',
            'whatsappText' => 'Hola, quisiera consultar por el desarrollo de un MVP.',
            'nextStep' => $__ns('Resuma su idea en una página: problema, usuario y cómo gana dinero.'),
            'crmTag' => 'desarrollo-mvp',
            'nextLink' => ['path' => '/herramientas/cotizador-app/', 'label' => 'Ubique su MVP en el cotizador'],
        ],
    ],
    'tools' => [
        'cotizador-app' => [
            'menuLabel' => 'Cotizador de apps', 'need' => 'software', 'tier' => 'B',
            'whatsappText' => 'Hola, usé el cotizador de apps y quisiera un presupuesto.',
            'nextStep' => $__ns('Guarde el resultado del cotizador: lo revisamos con usted.'),
            'crmTag' => 'cotizador-app',
            'nextLink' => null,
        ],
        'roi-automatizacion' => [
            'menuLabel' => 'Calculadora de automatización', 'need' => 'software', 'tier' => 'B',
            'whatsappText' => 'Hola, calculé el ahorro por automatizar y quisiera evaluar el proyecto.',
            'nextStep' => $__ns('Guarde el resultado del cálculo y la descripción de la tarea.'),
            'crmTag' => 'roi-automatizacion',
            'nextLink' => ['path' => '/guias/como-automatizar-procesos-con-ia/', 'label' => 'Lea cómo automatizar'],
        ],
    ],
];
