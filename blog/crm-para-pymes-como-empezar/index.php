<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'crm-para-pymes-como-empezar';

$sections = [
    [
        'h2'   => 'Qué es un CRM y para qué sirve',
        'body' => [
            'Un CRM, sigla en inglés de gestión de la relación con clientes, es un sistema para registrar y seguir a los clientes y potenciales clientes de una empresa: quiénes son, cómo llegaron, qué consultaron, qué se les ofreció y en qué etapa está cada negocio. Su objetivo es simple: que ninguna oportunidad se pierda por olvido y que la empresa sepa de dónde vienen sus ventas.',
            'Para una pyme, un CRM reemplaza la libreta del vendedor, la planilla compartida y la memoria de cada persona. Y lo más importante: la información queda en la empresa, no en el teléfono de quien atiende.',
        ],
    ],
    [
        'h2'   => 'Señales de que necesita un CRM',
        'body' => [
        ],
        'items' => [
            ['title' => 'Consultas que se pierden', 'text' => 'Llegan por WhatsApp, redes, correo y teléfono, y no hay un lugar único donde verlas.'],
            ['title' => 'Seguimiento irregular', 'text' => 'Se envían presupuestos y nadie vuelve a contactar al cliente.'],
            ['title' => 'Dependencia del vendedor', 'text' => 'Si alguien se va, se lleva los contactos y el historial.'],
            ['title' => 'Sin datos de origen', 'text' => 'No sabe qué canal o campaña trae clientes.'],
            ['title' => 'Previsión imposible', 'text' => 'No puede estimar cuánto venderá el próximo mes.'],
        ],
    ],
    [
        'h2'   => 'Empiece por el proceso, no por la herramienta',
        'body' => [
            'El error más común es elegir un CRM antes de definir cómo vende la empresa. Antes de mirar opciones, dibuje su embudo de ventas: las etapas por las que pasa una oportunidad desde la primera consulta hasta el cierre. Para muchas pymes alcanza con cinco o seis etapas.',
        ],
        'items' => [
            ['title' => 'Nueva consulta', 'text' => 'Llegó el contacto y todavía no se respondió.'],
            ['title' => 'Contactado', 'text' => 'Se respondió y se entendió la necesidad.'],
            ['title' => 'Presupuesto enviado', 'text' => 'Se envió una propuesta con monto.'],
            ['title' => 'Negociación', 'text' => 'El cliente tiene preguntas o pide ajustes.'],
            ['title' => 'Ganado', 'text' => 'El cliente aceptó y se pasa a facturación.'],
            ['title' => 'Perdido', 'text' => 'No se concretó, con el motivo registrado.'],
        ],
    ],
    [
        'h2'   => 'Qué registrar desde el primer día',
        'body' => [
            'Registrar demasiado desalienta el uso; registrar poco no sirve. Un punto de partida razonable incluye nombre y datos de contacto, empresa y RUC si corresponde, canal de origen, producto o servicio de interés, monto estimado, etapa, vendedor responsable, próxima acción con fecha y notas de cada interacción.',
            'La próxima acción con fecha es el campo más importante. Un CRM que muestra cada mañana a cada vendedor qué contactos debe seguir ese día ya justifica su implementación.',
        ],
    ],
    [
        'h2'   => 'Elegir la herramienta',
        'body' => [
            'Hay CRMs en la nube listos para usar, con planes por usuario, y CRMs a medida o adaptados. Para empezar, muchas pymes pueden usar una herramienta existente. Al compararlas, mire la facilidad de uso en el celular, la posibilidad de personalizar etapas y campos, la integración con WhatsApp y correo, los reportes disponibles, el costo por usuario a medida que crezca el equipo y la posibilidad de exportar sus datos.',
            'Un CRM a medida tiene sentido cuando el proceso de venta es muy particular, cuando se necesita integrar con sistemas propios como un ERP o una plataforma de reservas, o cuando el costo por usuario de las herramientas estándar se vuelve alto.',
        ],
    ],
    [
        'h2'   => 'Integrar WhatsApp y el sitio web',
        'body' => [
            'En Paraguay, la integración con WhatsApp suele ser decisiva. Si las consultas llegan por WhatsApp y el CRM no las registra, los vendedores tendrán que cargar todo a mano y la adopción fallará. Con la API de WhatsApp Business, las conversaciones pueden crear contactos y oportunidades automáticamente y quedar en el historial.',
            'Lo mismo aplica a los formularios del sitio web: cada consulta debería entrar al CRM como una oportunidad nueva, con el origen registrado. Así se sabe qué páginas y campañas generan ventas.',
        ],
    ],
    [
        'h2'   => 'Lograr que el equipo lo use',
        'body' => [
            'Un CRM vale lo que el equipo carga en él. Para lograr adopción, involucre a los vendedores en la definición de etapas y campos, capacite con casos reales, use el CRM en las reuniones de ventas en lugar de pedir reportes aparte y muestre a cada vendedor cómo le ahorra trabajo: recordatorios, historial a mano, menos preguntas repetidas.',
            'La gerencia también debe usarlo. Si los reportes se siguen pidiendo por WhatsApp o en planillas, el mensaje implícito es que el CRM es opcional.',
        ],
    ],
    [
        'h2'   => 'Reportes que conviene mirar',
        'body' => [
            'Con pocas semanas de datos ya se pueden ver indicadores útiles: cantidad de consultas por canal, tasa de conversión por etapa, tiempo promedio de respuesta, motivos de pérdida y valor de las oportunidades abiertas. Estos datos ayudan a decidir dónde invertir en marketing y dónde mejorar la atención.',
        ],
    ],
    [
        'h2'   => 'Qué determina el costo',
        'body' => [
            'El costo de un CRM depende de si se usa una herramienta en la nube o una solución a medida, la cantidad de usuarios, las integraciones con WhatsApp, sitio web, ERP o facturación, la migración de contactos existentes y la capacitación. Empezar simple y sumar integraciones por etapas permite controlar la inversión.',
        ],
    ],
    [
        'h2'   => 'Errores frecuentes al implementar un CRM',
        'body' => [
            'Configurar demasiados campos obligatorios, copiar el proceso de otra empresa, no depurar la base de contactos antes de importarla y no definir quién es responsable de cada oportunidad son errores que hacen fracasar muchas implementaciones. También lo es implementar el CRM sin integración con el canal principal de consultas: si todo llega por WhatsApp y el CRM no lo registra, el equipo volverá a trabajar como antes.',
        ],
    ],
    [
        'h2'   => 'Una primera semana posible',
        'body' => [
            'Día uno, definir etapas y campos. Día dos, importar contactos depurados. Día tres, capacitar al equipo. El resto de la semana, usarlo con acompañamiento y corregir lo que no funciona.',
        ],
    ],
];

$faq = [
    ['q' => '¿Cuál es el mejor CRM para una pyme?', 'a' => 'El que su equipo realmente use. Priorice facilidad de uso, integración con WhatsApp y la posibilidad de adaptar etapas a su proceso.'],
    ['q' => '¿Un CRM reemplaza a WhatsApp?', 'a' => 'No, lo complementa. Integrado con la API de WhatsApp Business, registra las conversaciones y las asocia a clientes y oportunidades.'],
    ['q' => '¿Cuánto tiempo lleva empezar a usar un CRM?', 'a' => 'Una configuración básica con etapas y campos esenciales puede estar lista en poco tiempo; las integraciones se suman por etapas.'],
];

require ROOT_DIR . '/templates/article.php';
