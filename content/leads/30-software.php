<?php
/** Phase "software": lead records. Shape documented in content/lead-values.php. */

declare(strict_types=1);

$__ns = static function (string $extra): array {
    return ['Te respondemos dentro del siguiente día hábil.', $extra];
};

return [
    'services' => [
        'desarrollo-de-software' => [
            'menuLabel' => 'Software a medida', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera consultar por desarrollo de software a medida para mi empresa.',
            'nextStep' => $__ns('Tené a mano ejemplos de las planillas o sistemas que usás hoy.'),
            'crmTag' => 'desarrollo-de-software',
            'nextLink' => ['path' => '/guias/como-contratar-programadores/', 'label' => 'Leé cómo contratar desarrollo'],
        ],
        'desarrollo-de-apps' => [
            'menuLabel' => 'App móvil', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera consultar por el desarrollo de una app móvil.',
            'nextStep' => $__ns('Anotá las funciones indispensables de la primera versión de tu app.'),
            'crmTag' => 'desarrollo-de-apps',
            'nextLink' => ['path' => '/herramientas/cotizador-app/', 'label' => 'Ubicá tu app en el cotizador'],
        ],
        'sistemas-erp' => [
            'menuLabel' => 'ERP y sistema de gestión', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera consultar por un ERP o sistema de gestión para mi empresa.',
            'nextStep' => $__ns('Tené a mano cuántos usuarios, sucursales y productos manejás.'),
            'crmTag' => 'sistemas-erp',
            'nextLink' => ['path' => '/guias/que-es-un-erp/', 'label' => 'Leé la guía sobre ERP'],
        ],
        'sistema-contable' => [
            'menuLabel' => 'Sistema contable', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera consultar por un sistema contable para mi empresa.',
            'nextStep' => $__ns('Si podés, tené el contacto de tu contador para una reunión inicial.'),
            'crmTag' => 'sistema-contable',
            'nextLink' => null,
        ],
        'sistema-de-inventario' => [
            'menuLabel' => 'Sistema de inventario', 'need' => 'software', 'tier' => 'B',
            'whatsappText' => 'Hola, quisiera consultar por un sistema de inventario.',
            'nextStep' => $__ns('Tené a mano la cantidad aproximada de productos y depósitos.'),
            'crmTag' => 'sistema-de-inventario',
            'nextLink' => null,
        ],
        'punto-de-venta' => [
            'menuLabel' => 'Sistema de punto de venta', 'need' => 'software', 'tier' => 'B',
            'whatsappText' => 'Hola, quisiera consultar por un sistema de punto de venta con factura electrónica.',
            'nextStep' => $__ns('Tené a mano la cantidad de cajas y si ya emitís factura electrónica.'),
            'crmTag' => 'punto-de-venta',
            'nextLink' => ['path' => '/guias/como-elegir-un-sistema-punto-de-venta/', 'label' => 'Leé cómo elegir un POS'],
        ],
        'crm' => [
            'menuLabel' => 'CRM', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera consultar por la implementación de un CRM.',
            'nextStep' => $__ns('Tené a mano cuántos vendedores usarían el CRM y por qué canales vendés.'),
            'crmTag' => 'crm',
            'nextLink' => ['path' => '/guias/kommo-vs-odoo/', 'label' => 'Compará Kommo y Odoo'],
        ],
        'automatizacion-ia' => [
            'menuLabel' => 'Automatización con IA', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, quisiera automatizar un proceso de mi empresa.',
            'nextStep' => $__ns('Describí la tarea que querés automatizar y cuántas horas por semana lleva.'),
            'crmTag' => 'automatizacion-ia',
            'nextLink' => ['path' => '/herramientas/roi-automatizacion/', 'label' => 'Calculá el ahorro'],
        ],
        'programadores' => [
            'menuLabel' => 'Programadores', 'need' => 'software', 'tier' => 'A',
            'whatsappText' => 'Hola, necesito programadores para un proyecto.',
            'nextStep' => $__ns('Tené a mano la tecnología del proyecto y la dedicación que necesitás.'),
            'crmTag' => 'programadores',
            'nextLink' => ['path' => '/guias/como-contratar-programadores/', 'label' => 'Leé cómo contratar programadores'],
        ],
        'desarrollo-mvp' => [
            'menuLabel' => 'MVP para startup', 'need' => 'software', 'tier' => 'B',
            'whatsappText' => 'Hola, quisiera consultar por el desarrollo de un MVP.',
            'nextStep' => $__ns('Resumí tu idea en una página: problema, usuario y cómo gana dinero.'),
            'crmTag' => 'desarrollo-mvp',
            'nextLink' => ['path' => '/herramientas/cotizador-app/', 'label' => 'Ubicá tu MVP en el cotizador'],
        ],
    ],
    'tools' => [
        'cotizador-app' => [
            'menuLabel' => 'Cotizador de apps', 'need' => 'software', 'tier' => 'B',
            'whatsappText' => 'Hola, usé el cotizador de apps y quisiera un presupuesto.',
            'nextStep' => $__ns('Guardá el resultado del cotizador: lo revisamos con vos.'),
            'crmTag' => 'cotizador-app',
            'nextLink' => null,
        ],
        'roi-automatizacion' => [
            'menuLabel' => 'Calculadora de automatización', 'need' => 'software', 'tier' => 'B',
            'whatsappText' => 'Hola, calculé el ahorro por automatizar y quisiera evaluar el proyecto.',
            'nextStep' => $__ns('Guardá el resultado del cálculo y la descripción de la tarea.'),
            'crmTag' => 'roi-automatizacion',
            'nextLink' => ['path' => '/guias/como-automatizar-procesos-con-ia/', 'label' => 'Leé cómo automatizar'],
        ],
    ],
];
