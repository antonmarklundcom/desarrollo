<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'como-ser-desarrollador-full-stack';

$sections = [
    [
        'h2'   => 'Qué significa ser desarrollador full stack',
        'body' => [
            'Ser desarrollador full stack significa poder construir una aplicación web completa: la interfaz que ve el usuario, la lógica del servidor, la base de datos y la puesta en producción. No implica ser experto en todo, sino tener suficiente dominio de cada capa para entregar una funcionalidad de punta a punta y saber cuándo pedir ayuda a un especialista.',
            'En empresas pequeñas y medianas de Paraguay este perfil es muy buscado, porque un equipo reducido necesita personas capaces de moverse entre capas. En empresas grandes, el full stack suele terminar especializándose, pero la visión completa sigue siendo una ventaja.',
        ],
    ],
    [
        'h2'   => 'Paso 1: fundamentos que no se saltean',
        'body' => [
            'Antes de elegir un framework, conviene dominar los fundamentos. Son los que se reutilizan durante toda la carrera, aunque cambien las herramientas de moda.',
        ],
        'items' => [
            ['title' => 'HTML y CSS', 'text' => 'Estructura semántica, diseño adaptable a móviles y accesibilidad básica.'],
            ['title' => 'JavaScript', 'text' => 'Tipos, funciones, asincronía, manejo del DOM y consumo de APIs con fetch.'],
            ['title' => 'Git', 'text' => 'Ramas, commits claros, resolución de conflictos y trabajo con pull requests.'],
            ['title' => 'Línea de comandos', 'text' => 'Moverse en una terminal, ejecutar scripts y leer errores.'],
            ['title' => 'HTTP', 'text' => 'Métodos, códigos de estado, cabeceras, cookies y cómo viaja una petición.'],
        ],
    ],
    [
        'h2'   => 'Paso 2: elegir un stack y quedarse con él',
        'body' => [
            'El error más común es saltar de tecnología en tecnología. Es mejor elegir un stack razonable y profundizar. Algunas combinaciones habituales en el mercado local son JavaScript o TypeScript con Node.js y React, PHP con Laravel, o Python con Django. Cualquiera de ellas permite conseguir trabajo si se domina bien.',
            'Para decidir, mire qué piden las ofertas publicadas en portales como trabajo.com.py y en empresas que le interesen. Si la mayoría de las búsquedas que le atraen piden una tecnología, esa es una buena señal.',
        ],
    ],
    [
        'h2'   => 'Paso 3: backend y bases de datos',
        'body' => [
            'En el lado del servidor, un full stack debe saber diseñar una API, validar datos, manejar autenticación y escribir consultas eficientes. Una base de datos relacional como PostgreSQL o MySQL es el punto de partida más útil: tablas, relaciones, índices, transacciones y migraciones.',
            'También conviene entender cómo se integran servicios externos, porque en Paraguay muchos proyectos incluyen conexiones con pasarelas de pago, facturación electrónica o mensajería. Saber leer la documentación de una API ajena y manejar sus errores es una habilidad que se valora mucho.',
        ],
    ],
    [
        'h2'   => 'Paso 4: despliegue y operación',
        'body' => [
            'Una aplicación que solo funciona en su computadora no sirve a nadie. Aprenda a publicar un proyecto en un hosting o en un servidor, configurar un dominio, un certificado SSL y variables de entorno. Luego sume lo básico de operación: logs, copias de seguridad y cómo actualizar sin romper lo que ya funciona.',
        ],
        'items' => [
            ['title' => 'Hosting compartido o gestionado', 'text' => 'Suficiente para muchos proyectos pequeños y útil para aprender.'],
            ['title' => 'Servidores virtuales', 'text' => 'Dan más control y obligan a entender Linux y servicios.'],
            ['title' => 'Contenedores', 'text' => 'Docker es cada vez más común en equipos profesionales.'],
            ['title' => 'Integración continua', 'text' => 'Ejecutar pruebas automáticamente antes de publicar.'],
        ],
    ],
    [
        'h2'   => 'Paso 5: proyectos que demuestran lo aprendido',
        'body' => [
            'Un empleador quiere ver que usted puede terminar algo. Tres proyectos completos valen más que diez tutoriales a medio hacer. Elija problemas reales, idealmente cercanos al contexto paraguayo: un sistema de turnos para un consultorio, un catálogo con pedidos por WhatsApp, un pequeño control de stock o un tablero que consuma una API pública.',
            'Cada proyecto debería tener un README claro, instrucciones para ejecutarlo, una versión publicada si es posible y una explicación de las decisiones técnicas. Eso muestra criterio, que es lo que más se evalúa en una entrevista.',
        ],
    ],
    [
        'h2'   => 'Paso 6: habilidades que no son código',
        'body' => [
            'El full stack que progresa rápido suele ser el que se comunica bien. Estimar tareas, avisar a tiempo cuando algo se complica, documentar lo que hizo y entender qué necesita el negocio son habilidades que distinguen a un profesional. El inglés técnico también ayuda, porque la mayor parte de la documentación está en ese idioma.',
        ],
    ],
    [
        'h2'   => 'Cuánto tiempo lleva',
        'body' => [
            'No hay un plazo fijo. Con dedicación constante, muchas personas llegan a un nivel de empleo junior en un período que va de varios meses a un par de años, según el tiempo disponible y la base previa. Lo importante es medir el avance por proyectos terminados, no por horas de curso.',
        ],
    ],
    [
        'h2'   => 'Errores comunes en la ruta full stack',
        'body' => [
            'El primer error es querer aprender todo a la vez: tres frameworks de frontend, dos de backend, varias bases de datos. El resultado suele ser un conocimiento superficial que no alcanza para resolver problemas reales. Es preferible profundizar en una combinación y sumar otras tecnologías cuando el trabajo lo pida.',
            'El segundo error es quedarse en los tutoriales. Un tutorial guía cada paso; un proyecto real obliga a tomar decisiones, equivocarse y corregir. Esa diferencia es la que se nota en una entrevista técnica. El tercer error es descuidar la calidad: sin pruebas, sin manejo de errores y sin validación de datos, una aplicación funciona en la demostración pero falla con usuarios reales.',
        ],
    ],
    [
        'h2'   => 'Cómo organizar el estudio semana a semana',
        'body' => [
            'Una forma práctica de avanzar es dividir el tiempo en bloques. Una parte de la semana para aprender un concepto nuevo, otra para aplicarlo en el proyecto en curso y otra para revisar y documentar lo hecho. Llevar un registro breve de lo aprendido ayuda a ver el progreso y sirve como material para entrevistas.',
            'También conviene buscar retroalimentación: pedir a alguien con más experiencia que revise su código, participar en comunidades y leer el código de proyectos abiertos bien mantenidos. Aprender a leer código ajeno es tan importante como escribir el propio, porque en el trabajo la mayor parte del tiempo se modifica código existente.',
        ],
    ],
    [
        'h2'   => 'Cómo saber si ya está listo para postularse',
        'body' => [
            'Una señal práctica es poder construir, sin seguir un tutorial, una aplicación pequeña con registro de usuarios, una base de datos, algunas pantallas y una versión publicada. Si puede explicar cada parte y corregir errores por su cuenta, ya tiene un nivel suficiente para postularse a puestos junior. No espere a sentirse experto; esa sensación rara vez llega antes del primer empleo.',
        ],
    ],
];

$faq = [
    ['q' => '¿Necesito título universitario para ser full stack?', 'a' => 'No es obligatorio para muchas empresas, pero ayuda en algunas. Un portafolio sólido y buenas entrevistas técnicas pesan mucho en el mercado.'],
    ['q' => '¿Qué lenguaje conviene aprender primero?', 'a' => 'JavaScript es una opción práctica porque sirve en frontend y backend. Lo importante es profundizar en un stack antes de cambiar.'],
    ['q' => '¿Dónde busco mi primer empleo?', 'a' => 'En portales especializados de empleo como trabajo.com.py, además de redes profesionales y contactos en comunidades de programación.'],
];

require ROOT_DIR . '/templates/article.php';
