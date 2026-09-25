<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'cuanto-tarda-desarrollar-un-software';

$sections = [
    [
        'h2'   => 'No hay un plazo estándar',
        'body' => [
            'Preguntar cuánto tarda desarrollar un software es como preguntar cuánto tarda construir una casa. Depende del tamaño, de la complejidad, de las decisiones que haya que tomar en el camino y de cuántas personas trabajen. Un sistema simple con pocas pantallas puede estar listo en semanas; un sistema con muchas reglas de negocio e integraciones puede llevar varios meses o más.',
            'Lo que sí se puede hacer es entender qué etapas tiene un proyecto, qué factores alargan los plazos y cómo pedir una estimación realista. Eso es lo que resume este artículo.',
        ],
    ],
    [
        'h2'   => 'Las etapas de un proyecto de software',
        'body' => [
            'Cada etapa consume tiempo. Un error común es estimar solo el desarrollo y olvidar el resto, que puede representar una parte importante del plazo total.',
        ],
        'items' => [
            ['title' => 'Relevamiento', 'text' => 'Entender el problema, los usuarios, los procesos y los sistemas existentes.'],
            ['title' => 'Diseño', 'text' => 'Definir la estructura de datos, las pantallas y la arquitectura técnica.'],
            ['title' => 'Desarrollo', 'text' => 'Programar las funcionalidades por partes, con entregas intermedias.'],
            ['title' => 'Pruebas', 'text' => 'Verificar que todo funcione, incluidos los casos poco frecuentes y los errores.'],
            ['title' => 'Puesta en producción', 'text' => 'Instalar, migrar datos y capacitar a los usuarios.'],
            ['title' => 'Acompañamiento', 'text' => 'Corregir problemas que aparecen con el uso real y ajustar detalles.'],
        ],
    ],
    [
        'h2'   => 'Factores que alargan los plazos',
        'body' => [
        ],
        'items' => [
            ['title' => 'Alcance poco definido', 'text' => 'Si no está claro qué debe hacer el sistema, se descubre durante el desarrollo y se rehace trabajo.'],
            ['title' => 'Cambios frecuentes', 'text' => 'Cada cambio de alcance a mitad de camino suma tiempo, aunque parezca pequeño.'],
            ['title' => 'Integraciones', 'text' => 'Conectar con pasarelas de pago, SIFEN, WhatsApp o sistemas existentes depende de terceros, de su documentación y de sus tiempos.'],
            ['title' => 'Datos a migrar', 'text' => 'Limpiar y trasladar información de planillas o sistemas antiguos lleva más de lo que se suele pensar.'],
            ['title' => 'Disponibilidad del cliente', 'text' => 'Si nadie de la empresa tiene tiempo para responder, revisar y probar, el proyecto se frena.'],
            ['title' => 'Aprobaciones externas', 'text' => 'Habilitaciones, certificados o aprobaciones de plantillas que dependen de otras organizaciones.'],
        ],
    ],
    [
        'h2'   => 'Cómo se estima un proyecto',
        'body' => [
            'Una estimación seria se basa en un relevamiento. Se divide el sistema en funcionalidades, se estima cada una y se suma un margen para imprevistos, pruebas y coordinación. Cuanto más detallado es el relevamiento, más confiable es la estimación.',
            'Desconfíe de estimaciones dadas en una primera reunión sin detalle. No es que el proveedor mienta; es que no tiene suficiente información. Es razonable pedir primero un relevamiento, que en proyectos medianos puede ser un trabajo pago en sí mismo, y luego una estimación basada en él.',
        ],
    ],
    [
        'h2'   => 'Rangos orientativos por tipo de proyecto',
        'body' => [
            'Con la advertencia de que cada caso es distinto, se pueden mencionar rangos orientativos. Un sitio institucional o una aplicación sencilla con pocas pantallas suele medirse en semanas. Un sistema de gestión para un área específica, con algunas integraciones, suele medirse en unos pocos meses. Un sistema que abarca varias áreas de la empresa, con muchas reglas e integraciones, puede llevar varios meses y conviene planificarlo por etapas.',
            'Estos rangos sirven para ordenar expectativas, no para presupuestar. El plazo real surge del relevamiento.',
        ],
    ],
    [
        'h2'   => 'Cómo acortar los plazos sin perder calidad',
        'body' => [
        ],
        'items' => [
            ['title' => 'Definir un producto mínimo', 'text' => 'Identificar lo imprescindible para empezar a usar el sistema y dejar el resto para etapas posteriores.'],
            ['title' => 'Tener un responsable interno', 'text' => 'Una persona con autoridad para decidir y tiempo para responder.'],
            ['title' => 'Preparar los datos temprano', 'text' => 'Ordenar la información mientras se desarrolla, no al final.'],
            ['title' => 'Aprovechar componentes existentes', 'text' => 'Usar servicios y herramientas probadas en lugar de construir todo desde cero.'],
            ['title' => 'Revisar entregas intermedias', 'text' => 'Detectar malentendidos en semanas, no al final del proyecto.'],
        ],
    ],
    [
        'h2'   => 'Lo que no conviene acortar',
        'body' => [
            'Presionar plazos recortando pruebas, documentación o capacitación suele salir caro. Un sistema entregado rápido pero con errores frecuentes genera pérdida de confianza, trabajo manual para corregir datos y más tiempo de soporte. Es preferible reducir el alcance inicial que reducir la calidad.',
        ],
    ],
    [
        'h2'   => 'El desarrollo por etapas',
        'body' => [
            'Dividir un proyecto grande en etapas con valor propio tiene varias ventajas: la empresa empieza a usar el sistema antes, los aprendizajes de la primera etapa mejoran las siguientes y el riesgo de inversión se reparte. Cada etapa tiene su propio plazo, más fácil de estimar y de cumplir.',
        ],
    ],
    [
        'h2'   => 'Qué pasa después de la entrega',
        'body' => [
            'Un software no termina el día de la entrega. Aparecen ajustes, pedidos de mejora y cambios en el entorno, como nuevas versiones de navegadores, cambios en APIs de terceros o actualizaciones normativas. Conviene acordar desde el inicio cómo se manejará el mantenimiento y con qué tiempos de respuesta.',
        ],
    ],
    [
        'h2'   => 'Cómo seguir el avance del proyecto',
        'body' => [
            'Pida entregas funcionando cada pocas semanas, no solo informes de avance. Ver el sistema en funcionamiento permite detectar malentendidos a tiempo y da una medida real del progreso. Acuerde reuniones breves y periódicas, un canal único para decisiones y un registro de cambios solicitados con su impacto en plazo. Si una entrega se atrasa, pregunte qué la frenó y qué se hará distinto en la siguiente.',
            'Tenga en cuenta que las semanas finales suelen consumir más tiempo del esperado: pruebas con usuarios reales, ajustes de último momento y migración de datos. Planificar un margen para esa etapa evita que la fecha de lanzamiento se corra.',
        ],
    ],
    [
        'h2'   => 'Señales de que el plazo está en riesgo',
        'body' => [
            'Entregas que se postergan sin explicación, funcionalidades que se muestran incompletas, preguntas que quedan sin responder de su lado y cambios de alcance que se acumulan sin registrarse. Detectarlas temprano permite renegociar alcance o plazo antes de que el problema crezca.',
        ],
    ],
];

$faq = [
    ['q' => '¿Por qué los proyectos de software suelen atrasarse?', 'a' => 'Principalmente por alcance poco definido, cambios durante el desarrollo, integraciones con terceros y falta de disponibilidad para validar.'],
    ['q' => '¿Se puede tener un plazo cerrado?', 'a' => 'Sí, si el alcance está bien definido y documentado. Los cambios posteriores se manejan como agregados con su propio plazo.'],
    ['q' => '¿Qué es un producto mínimo?', 'a' => 'Es la versión con lo imprescindible para empezar a usar el sistema. Permite obtener valor antes y ajustar el resto con experiencia real.'],
];

require ROOT_DIR . '/templates/article.php';
