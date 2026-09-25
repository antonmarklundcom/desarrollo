<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'como-elegir-una-empresa-de-desarrollo-de-software';

$sections = [
    [
        'h2'   => 'Una decisión que dura años',
        'body' => [
            'Elegir una empresa de desarrollo de software no es como comprar un producto. Es iniciar una relación que puede durar años, porque el sistema necesitará mantenimiento, ajustes y nuevas funciones. Una mala elección se paga con retrasos, sobrecostos y, en el peor caso, con un sistema que nadie más puede mantener.',
            'Este artículo propone criterios concretos para evaluar proveedores de desarrollo de software en Paraguay y comparar propuestas de manera justa.',
        ],
    ],
    [
        'h2'   => 'Antes de pedir presupuestos',
        'body' => [
            'El primer paso no es buscar proveedores, sino ordenar lo que necesita. Un documento breve que describa el problema, los usuarios, los procesos actuales, los sistemas con los que debe conectarse y lo que considera éxito ayuda a recibir propuestas comparables. No necesita ser técnico; necesita ser claro.',
            'Defina también su presupuesto aproximado y sus plazos. Compartirlos con los proveedores no los hace abusar; les permite proponer un alcance realista.',
        ],
    ],
    [
        'h2'   => 'Criterios para evaluar una empresa de desarrollo',
        'body' => [
        ],
        'items' => [
            ['title' => 'Comprensión del problema', 'text' => 'Una buena empresa hace preguntas sobre su negocio antes de hablar de tecnología.'],
            ['title' => 'Proceso de trabajo', 'text' => 'Cómo relevan requisitos, cada cuánto muestran avances y cómo manejan los cambios.'],
            ['title' => 'Trabajos anteriores', 'text' => 'Pida ver sistemas similares funcionando y, si es posible, hable con clientes anteriores.'],
            ['title' => 'Equipo asignado', 'text' => 'Quién trabajará en su proyecto y quién será su interlocutor.'],
            ['title' => 'Tecnología elegida', 'text' => 'Que sea conocida en el mercado, para que otros programadores puedan mantenerla.'],
            ['title' => 'Soporte posterior', 'text' => 'Qué pasa después de la entrega, con qué tiempos de respuesta y a qué costo.'],
            ['title' => 'Experiencia local', 'text' => 'Conocimiento de requisitos paraguayos como facturación electrónica o medios de pago locales, si su proyecto los necesita.'],
        ],
    ],
    [
        'h2'   => 'Cómo leer una propuesta',
        'body' => [
            'Una propuesta seria describe el alcance con detalle: qué funcionalidades incluye y, tan importante como eso, cuáles no. Indica etapas, entregables, plazos y forma de pago. Explica cómo se manejan los cambios de alcance y cuál es el período de garantía.',
            'Desconfíe de propuestas de una sola página con un precio total y un plazo, sin detalle. Es probable que las diferencias de interpretación aparezcan durante el proyecto, y cada una se convierta en una discusión o un costo extra.',
        ],
    ],
    [
        'h2'   => 'Propiedad del código y acceso',
        'body' => [
            'Este punto se pasa por alto con frecuencia y es de los más importantes. El contrato debería establecer quién es dueño del código fuente, dónde se aloja, quién tiene acceso a los servidores, dominios y bases de datos, y qué documentación se entrega. Si la relación con el proveedor termina, usted necesita poder llevar el sistema a otro equipo.',
            'Pida que las cuentas de hosting, dominio y servicios externos estén a nombre de su empresa, con el proveedor como usuario autorizado. Es una práctica simple que evita problemas graves.',
        ],
    ],
    [
        'h2'   => 'Precio: qué comparar',
        'body' => [
            'Comparar solo el precio total es engañoso. Dos propuestas con precios distintos pueden incluir alcances muy diferentes. Compare qué incluye cada una, cuántas horas estimadas implica, cuánto cuesta el soporte posterior y qué pasa con los cambios. Una propuesta más barata que excluye pruebas, documentación o capacitación puede terminar costando más.',
            'El costo de un desarrollo depende de la complejidad de las reglas de negocio, las integraciones, la cantidad de pantallas y usuarios, y los requisitos de disponibilidad. Pida siempre que la estimación se base en un relevamiento.',
        ],
    ],
    [
        'h2'   => 'Señales de alerta',
        'body' => [
        ],
        'items' => [
            ['title' => 'Promesas de plazos muy cortos', 'text' => 'Sin haber entendido el proyecto en detalle.'],
            ['title' => 'Precio cerrado sin relevamiento', 'text' => 'El riesgo se traslada a usted en forma de recortes o extras.'],
            ['title' => 'Sin entregas intermedias', 'text' => 'Ver el sistema recién al final impide corregir a tiempo.'],
            ['title' => 'Negativa a entregar el código', 'text' => 'O a documentar accesos y credenciales.'],
            ['title' => 'Comunicación difícil desde el inicio', 'text' => 'Si cuesta obtener respuestas antes de firmar, no mejorará después.'],
        ],
    ],
    [
        'h2'   => 'Empezar con un proyecto acotado',
        'body' => [
            'Una forma de reducir riesgo es empezar con una etapa pequeña: un relevamiento pago, un prototipo o un primer módulo con valor propio. Así evalúa cómo trabaja el proveedor antes de comprometer todo el presupuesto. Si la experiencia es buena, se continúa; si no, el costo del aprendizaje es acotado.',
        ],
    ],
    [
        'h2'   => 'Después de elegir',
        'body' => [
            'Designe un responsable interno que conozca el negocio y tenga tiempo para responder consultas, revisar avances y probar. Muchos proyectos se atrasan no por el proveedor, sino porque del lado de la empresa nadie tiene tiempo para validar. Acuerde reuniones periódicas y registre las decisiones por escrito.',
        ],
    ],
    [
        'h2'   => 'Preguntas para hacer en la primera reunión',
        'body' => [
            '¿Cómo relevan los requisitos y quién participa? ¿Cada cuánto veremos avances funcionando? ¿Cómo se manejan los cambios de alcance y cómo se cotizan? ¿Qué pruebas hacen antes de entregar? ¿Qué documentación entregan al final? ¿Qué incluye la garantía y por cuánto tiempo? ¿Quién será mi contacto diario? ¿Qué pasa si esa persona deja la empresa? Las respuestas, y la forma en que se dan, dicen mucho sobre cómo será el proyecto.',
            'Tome nota de las respuestas de cada proveedor y compárelas lado a lado. Así la decisión no depende solo de la impresión de la reunión.',
        ],
    ],
    [
        'h2'   => 'Referencias que conviene pedir',
        'body' => [
            'Pida contactos de clientes con proyectos parecidos al suyo y pregunte si el sistema se entregó en plazo, cómo resolvieron los problemas y si seguirían trabajando con ese proveedor.',
        ],
    ],
];

$faq = [
    ['q' => '¿Conviene una empresa grande o un programador independiente?', 'a' => 'Depende del tamaño y criticidad del proyecto. Una empresa ofrece continuidad y más perfiles; un independiente puede ser suficiente para proyectos acotados si asegura documentación y acceso.'],
    ['q' => '¿Qué debe decir el contrato sobre el código?', 'a' => 'Quién es dueño del código fuente, dónde se aloja, qué documentación se entrega y cómo se transfieren accesos si la relación termina.'],
    ['q' => '¿Cómo comparo presupuestos muy distintos?', 'a' => 'Compare alcance, exclusiones, horas estimadas, soporte y manejo de cambios, no solo el precio total.'],
];

require ROOT_DIR . '/templates/article.php';
