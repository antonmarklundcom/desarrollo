<?php
/** Phase "software": calculators. Same shape as content/tools.php. */

declare(strict_types=1);

return [

    'cotizador-app' => [
        'path'            => '/herramientas/cotizador-app/',
        'title'           => 'Cotizador orientativo de apps',
        'navLabel'        => 'Cotizador de apps',
        'seoTitle'        => 'Cuánto cuesta una app: cotizador',
        'metaDescription' => 'Cotizador orientativo de apps: marque plataformas, login, pagos, panel e '
                           . 'integraciones y vea el nivel de complejidad y un rango de mercado.',
        'hero' => [
            'eyebrow' => 'Herramientas',
            'h1'      => 'Cotizador orientativo: cuánto cuesta una app',
            'lead'    => 'Marque las funciones de su app y vea en qué nivel de complejidad se ubica, con un '
                       . 'rango orientativo del mercado paraguayo.',
        ],
        'intro' => [
            'El costo de una app depende mucho menos de su nombre que de sus funciones. Dos apps de delivery '
                . 'pueden diferir varias veces en trabajo según tengan o no pagos en línea, seguimiento en tiempo '
                . 'real, panel para comercios o integración con el sistema de facturación.',
            'Este cotizador suma puntos por cada decisión que agrega trabajo: publicar en una o dos tiendas, '
                . 'registrar usuarios, cobrar dentro de la app, administrar contenidos desde un panel, conectarse '
                . 'con otros sistemas y la cantidad de pantallas. Con el puntaje ubica su idea en uno de cuatro '
                . 'niveles de complejidad y muestra un rango orientativo.',
            'El resultado no es un presupuesto. Son rangos orientativos del mercado, a confirmar con '
                . 'presupuesto después de una reunión de definición, donde también aparecen detalles que '
                . 'ningún formulario captura: diseño a medida, funcionamiento sin conexión o requisitos de '
                . 'seguridad particulares.',
        ],
        'faq' => [
            ['q' => '¿Por qué una web app suma menos puntos?', 'a' => 'Porque no pasa por la revisión de las tiendas ni requiere probar en dos sistemas operativos. Para muchas ideas es un buen primer paso.'],
            ['q' => '¿Qué cuenta como integración?', 'a' => 'Cualquier conexión con otro sistema: facturación electrónica, ERP, CRM, mapas, mensajería o servicios de terceros.'],
            ['q' => '¿El rango incluye mantenimiento?', 'a' => 'No. El mantenimiento anual y los costos de servidores y cuentas de las tiendas se suman aparte.'],
        ],
        'related'       => ['desarrollo-de-apps', 'desarrollo-mvp'],
        'ctaWhatsapp'   => '',
        'formNeed'      => 'software',
        'analyticsTool' => 'cotizador_app',
    ],

    'roi-automatizacion' => [
        'path'            => '/herramientas/roi-automatizacion/',
        'title'           => 'Calculadora de ahorro por automatización',
        'navLabel'        => 'Ahorro por automatizar',
        'seoTitle'        => 'Calculadora de ahorro por automatizar',
        'metaDescription' => 'Calcule cuántas horas y guaraníes ahorra por mes y por año al automatizar una '
                           . 'tarea manual, según horas, personas, costo por hora y porcentaje.',
        'hero' => [
            'eyebrow' => 'Herramientas',
            'h1'      => 'Calculadora de ahorro por automatización',
            'lead'    => 'Estime las horas y el costo que recupera al automatizar una tarea repetitiva de su '
                       . 'empresa.',
        ],
        'intro' => [
            'Antes de automatizar un proceso conviene saber cuánto cuesta hoy. Esta calculadora multiplica las '
                . 'horas semanales que lleva una tarea por la cantidad de personas que la hacen y por el costo de '
                . 'cada hora, y aplica el porcentaje que razonablemente se puede automatizar.',
            'El costo por hora debería incluir el salario, las cargas sociales y los beneficios, no solo el '
                . 'sueldo neto. Para el porcentaje automatizable, sea conservador: casi siempre queda una parte '
                . 'de revisión o de excepciones que sigue siendo manual. Para pasar de semanas a meses usamos '
                . 'el promedio de 4,33 semanas por mes.',
            'Compare el ahorro anual con el costo de construir y operar la automatización. Si el ahorro de uno '
                . 'o dos años cubre la inversión, es un buen candidato. Las horas recuperadas no siempre se '
                . 'traducen en menos gasto: muchas veces se reasignan a tareas que hoy no se hacen por falta '
                . 'de tiempo.',
        ],
        'faq' => [
            ['q' => '¿Qué porcentaje es realista?', 'a' => 'Para tareas de carga de datos con reglas claras, porcentajes altos son posibles; con muchas excepciones, bastante menos. Si duda, use un valor moderado.'],
            ['q' => '¿Incluye el costo de la automatización?', 'a' => 'No. Muestra el ahorro bruto; réstele el costo de desarrollo y el costo mensual de operación.'],
            ['q' => '¿Cómo calculo el costo por hora?', 'a' => 'Divida el costo mensual total del puesto (salario más cargas y beneficios) por las horas trabajadas en el mes.'],
        ],
        'related'       => ['automatizacion-ia', 'desarrollo-de-software'],
        'ctaWhatsapp'   => '',
        'formNeed'      => 'software',
        'analyticsTool' => 'roi_automatizacion',
    ],
];
