<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'ia-en-empresas-paraguayas-casos-practicos';

$sections = [
    [
        'h2'   => 'De la conversación a la implementación',
        'body' => [
            'La inteligencia artificial está en todas las conversaciones, pero muchas empresas no saben por dónde empezar. Este artículo no trata sobre qué es la IA en general ni sobre sus tendencias; para eso hay sitios especializados como inteligenciaartificial.com.py. Aquí nos enfocamos en casos prácticos de IA en empresas paraguayas que se pueden construir hoy, integrados con los sistemas que ya usan.',
            'El criterio es simple: la IA sirve cuando resuelve una tarea repetitiva, con volumen, donde un error es detectable y corregible. Si esas condiciones no se cumplen, probablemente haya soluciones más simples.',
        ],
    ],
    [
        'h2'   => 'Caso 1: primera respuesta en WhatsApp',
        'body' => [
            'Muchas empresas reciben por WhatsApp las mismas preguntas una y otra vez: horarios, precios, disponibilidad, medios de pago, ubicación. Un asistente conectado a la API de WhatsApp Business puede responder esas consultas con la información de la empresa, derivar a una persona cuando la pregunta lo requiere y registrar todo en el CRM.',
            'La clave está en limitar su alcance. El asistente responde con información aprobada, no inventa precios ni condiciones y deriva cuando no está seguro. Así se reduce la carga del equipo sin perder control sobre lo que se comunica.',
        ],
    ],
    [
        'h2'   => 'Caso 2: lectura de facturas y documentos',
        'body' => [
            'Empresas que reciben muchas facturas de proveedores, comprobantes de pago o formularios pueden usar modelos de IA para extraer datos de esos documentos, como RUC, montos, fechas y conceptos, y cargarlos en el sistema contable o el ERP. Una persona revisa los casos dudosos en lugar de tipear todo.',
            'Cuando los documentos son electrónicos, como los de SIFEN, lo más confiable es leer el XML directamente, sin IA. La IA aporta valor en documentos escaneados, fotos o formatos variados.',
        ],
    ],
    [
        'h2'   => 'Caso 3: clasificación de consultas y reclamos',
        'body' => [
            'Correos, formularios y mensajes que llegan a un buzón general pueden clasificarse automáticamente por tema, urgencia o área responsable. Un modelo de IA lee el contenido, asigna una categoría y lo deriva. Esto acorta los tiempos de respuesta y permite medir qué tipos de consultas crecen.',
        ],
    ],
    [
        'h2'   => 'Caso 4: búsqueda en documentación interna',
        'body' => [
            'Empresas con manuales, procedimientos, políticas o fichas técnicas extensas pueden construir un buscador que responda preguntas en lenguaje natural citando el documento de origen. Es útil para capacitar personal nuevo, para soporte técnico interno y para equipos comerciales que necesitan datos precisos de productos.',
            'La condición es que la documentación esté ordenada y actualizada. La IA no arregla información desordenada; la expone.',
        ],
    ],
    [
        'h2'   => 'Caso 5: resúmenes y reportes',
        'body' => [
            'A partir de datos del ERP, el CRM o las conversaciones de atención, un sistema puede generar resúmenes periódicos en lenguaje simple: qué productos crecieron, qué reclamos se repiten, qué clientes no compraron este mes. No reemplaza el análisis, pero ahorra tiempo en preparar la información.',
        ],
    ],
    [
        'h2'   => 'Qué se necesita para construir estos casos',
        'body' => [
        ],
        'items' => [
            ['title' => 'Datos accesibles', 'text' => 'La información debe estar en sistemas con API o en formatos que se puedan leer.'],
            ['title' => 'Un proceso definido', 'text' => 'Saber qué debe pasar antes y después de la parte que hace la IA.'],
            ['title' => 'Revisión humana', 'text' => 'Un punto donde una persona valida los casos dudosos, al menos al principio.'],
            ['title' => 'Integraciones', 'text' => 'Conexión con WhatsApp, CRM, ERP o correo, según el caso.'],
            ['title' => 'Criterios de calidad', 'text' => 'Cómo se medirá si funciona, por ejemplo porcentaje de respuestas correctas.'],
            ['title' => 'Cuidado de datos', 'text' => 'Definir qué información se envía a servicios externos y cómo se protege.'],
        ],
    ],
    [
        'h2'   => 'Errores frecuentes',
        'body' => [
            'El error más común es empezar por la tecnología en lugar del problema. Otro es esperar precisión perfecta desde el primer día: los sistemas con IA mejoran con ajustes y ejemplos. También es un error dejar a la IA decidir sobre temas sensibles sin supervisión, como aprobaciones de crédito, precios especiales o respuestas legales.',
            'Y un error frecuente es no medir. Sin un indicador claro, es imposible saber si el sistema ahorra tiempo o genera trabajo extra corrigiendo errores.',
        ],
    ],
    [
        'h2'   => 'Cómo empezar con un piloto',
        'body' => [
            'La mejor forma de empezar es con un piloto acotado: un solo caso, un volumen manejable y un período definido. Por ejemplo, responder preguntas frecuentes en WhatsApp durante un mes, con derivación a personas y revisión semanal de las conversaciones. Al terminar, se mide el resultado y se decide si ampliar, ajustar o descartar.',
        ],
    ],
    [
        'h2'   => 'Qué determina el costo',
        'body' => [
            'El costo de un proyecto de IA aplicada depende del caso, el volumen de uso, el servicio de IA elegido y su costo por consulta, las integraciones necesarias, la preparación de datos y el nivel de revisión humana. Los costos por uso de los modelos cambian con frecuencia; conviene consultar el valor vigente de cada proveedor al estimar.',
        ],
    ],
    [
        'h2'   => 'Cómo elegir el primer caso',
        'body' => [
            'Haga una lista de tareas repetitivas en su empresa y anote, para cada una, cuántas veces ocurre por semana, cuánto tiempo lleva y qué pasa si se comete un error. El mejor primer caso combina volumen alto, tiempo significativo y errores detectables. Por ejemplo, responder preguntas frecuentes o cargar datos de comprobantes suele cumplir esas condiciones; decidir precios especiales, no.',
        ],
    ],
    [
        'h2'   => 'Integración con lo que ya existe',
        'body' => [
            'Un sistema de IA aislado aporta poco. Su valor aparece cuando se conecta con WhatsApp, el CRM, el ERP o el correo, para tomar datos de allí y devolver resultados al mismo lugar donde trabaja el equipo. Por eso, estos proyectos son en gran parte proyectos de integración y automatización, con una pieza de IA en el medio.',
        ],
    ],
];

$faq = [
    ['q' => '¿La IA reemplaza al personal de atención?', 'a' => 'En estos casos prácticos, la IA se ocupa de lo repetitivo y deriva lo complejo a personas. El objetivo es liberar tiempo, no eliminar la atención humana.'],
    ['q' => '¿Dónde aprendo sobre IA en general?', 'a' => 'Para contenido general sobre inteligencia artificial puede consultar sitios especializados como inteligenciaartificial.com.py. Aquí nos enfocamos en implementaciones concretas.'],
    ['q' => '¿Es seguro enviar datos de clientes a un servicio de IA?', 'a' => 'Depende del proveedor y de la configuración. Conviene definir qué datos se envían, revisar las condiciones del servicio y limitar la información sensible.'],
];

require ROOT_DIR . '/templates/article.php';
