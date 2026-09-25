<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'cursos-de-programacion-recomendados';

$sections = [
    [
        'h2'   => 'Por qué elegir bien un curso importa',
        'body' => [
            'La oferta de cursos de programación es enorme: plataformas internacionales, academias locales, cursos gratuitos, bootcamps intensivos, videos sueltos y programas universitarios de extensión. Elegir mal no solo cuesta dinero; cuesta meses. Un curso que no se termina, o que se termina sin haber construido nada, deja poco para mostrar en una entrevista.',
            'En lugar de una lista de nombres que cambia cada año, este artículo propone criterios para evaluar cualquier curso y una forma de combinarlos para avanzar hacia un primer empleo o una mejora profesional.',
        ],
    ],
    [
        'h2'   => 'Tipos de cursos de programación',
        'body' => [
            'Cada formato tiene ventajas y límites. Conocerlos ayuda a elegir según su situación.',
        ],
        'items' => [
            ['title' => 'Cursos gratuitos en línea', 'text' => 'Excelentes para empezar y probar si la programación le gusta. Exigen autodisciplina.'],
            ['title' => 'Plataformas pagas por suscripción', 'text' => 'Catálogo amplio y rutas organizadas. Conviene aprovecharlas con un objetivo claro.'],
            ['title' => 'Bootcamps intensivos', 'text' => 'Varias semanas o meses de dedicación alta, con proyectos y acompañamiento. Requieren tiempo disponible.'],
            ['title' => 'Academias e institutos locales', 'text' => 'Clases presenciales o híbridas, contacto con docentes y compañeros del mismo mercado.'],
            ['title' => 'Cursos de extensión universitaria', 'text' => 'Útiles para temas específicos y con respaldo institucional.'],
            ['title' => 'Documentación oficial', 'text' => 'No es un curso, pero es la fuente más precisa y la que usará toda su carrera.'],
        ],
    ],
    [
        'h2'   => 'Criterios para evaluar un curso',
        'body' => [
            'Antes de inscribirse, revise estos puntos. Si un curso falla en varios, probablemente no sea la mejor inversión de su tiempo.',
        ],
        'items' => [
            ['title' => 'Proyectos', 'text' => 'El curso debe terminar con algo construido por usted, no solo ejercicios guiados.'],
            ['title' => 'Actualización', 'text' => 'Revise la fecha de las lecciones y las versiones de las herramientas que enseña.'],
            ['title' => 'Temario completo', 'text' => 'Que cubra fundamentos, no solo un framework de moda.'],
            ['title' => 'Acompañamiento', 'text' => 'Existencia de foros, mentores o revisiones de código.'],
            ['title' => 'Opiniones verificables', 'text' => 'Busque comentarios de egresados en comunidades, no solo en la página del curso.'],
            ['title' => 'Promesas realistas', 'text' => 'Desconfíe de garantías de empleo o de sueldos específicos al terminar.'],
        ],
    ],
    [
        'h2'   => 'Una ruta posible para empezar desde cero',
        'body' => [
            'Para quien empieza desde cero, una combinación razonable es comenzar con un curso gratuito de fundamentos de programación y de desarrollo web, seguir con una ruta más estructurada, paga o gratuita, en un stack concreto, y terminar con dos o tres proyectos propios que no sigan un tutorial.',
            'En la primera etapa, el objetivo es entender variables, condicionales, bucles, funciones y cómo funciona una página web. En la segunda, aprender un lenguaje de backend, una base de datos y un framework. En la tercera, aplicar todo en proyectos que resuelvan problemas reales, idealmente cercanos a su entorno: turnos, pedidos, stock, reservas.',
        ],
    ],
    [
        'h2'   => 'Cursos para quienes ya programan',
        'body' => [
            'Si ya trabaja como programador, los cursos útiles son distintos. En lugar de rutas generales, conviene elegir temas que le falten para el siguiente escalón: pruebas automatizadas, arquitectura, bases de datos avanzadas, seguridad en el desarrollo, despliegue con contenedores o integración de APIs de terceros. En el mercado paraguayo, conocer cómo se integran facturación electrónica, pasarelas de pago y mensajería de negocio es un diferencial concreto.',
            'También vale la pena invertir en inglés técnico. Muchos cursos avanzados y casi toda la documentación están en inglés, y el idioma amplía las oportunidades laborales.',
        ],
    ],
    [
        'h2'   => 'Cómo aprovechar cualquier curso',
        'body' => [
            'El curso es solo una parte. Lo que convierte las horas en habilidades es la práctica fuera del material. Algunas prácticas que funcionan:',
            'Programe cada lección, no solo mire los videos. Cuando termine un módulo, haga una variación propia del ejercicio. Mantenga un repositorio con todo lo que hace y escriba notas cortas sobre lo aprendido. Una vez por semana, intente resolver un problema sin mirar el material. Y cuando se trabe, busque primero en la documentación oficial antes de volver al video.',
        ],
    ],
    [
        'h2'   => 'Certificados: cuánto valen',
        'body' => [
            'Los certificados de cursos en línea tienen un valor limitado para las empresas técnicas. Sirven como señal de interés y constancia, pero en una entrevista se evalúa lo que sabe hacer. Un certificado acompañado de un proyecto sólido vale mucho más que varios certificados sin nada construido.',
            'Algunas certificaciones de proveedores de nube o de tecnologías específicas sí tienen peso en ciertos puestos. Revise si las búsquedas que le interesan, por ejemplo en trabajo.com.py, las mencionan como requisito o como ventaja antes de invertir en ellas.',
        ],
    ],
    [
        'h2'   => 'Cuánto invertir',
        'body' => [
            'No hace falta gastar mucho para aprender a programar. Con recursos gratuitos y disciplina es posible llegar a un nivel de empleo junior. Los cursos pagos ahorran tiempo de búsqueda y suman acompañamiento, lo que para muchas personas vale la inversión. Compare el costo con las horas de dedicación que exige y con lo que le entrega al final: proyectos, revisiones y comunidad.',
        ],
    ],
    [
        'h2'   => 'Señales de que es momento de cambiar de curso',
        'body' => [
            'Si lleva varias semanas sin avanzar, si el contenido está desactualizado o si siente que solo copia código sin entenderlo, es momento de revisar. Cambiar de formato, por ejemplo de videos a un libro o a un proyecto guiado por un mentor, puede destrabar el aprendizaje. Lo importante es no confundir cantidad de cursos con progreso real.',
        ],
    ],
    [
        'h2'   => 'Aprender en comunidad',
        'body' => [
            'Estudiar solo es posible, pero aprender con otros acelera el proceso. Grupos de estudio, comunidades de desarrolladores locales, eventos y foros en línea permiten resolver dudas, conocer oportunidades y mantenerse motivado. Explicar a otro lo que aprendió es, además, una de las mejores formas de fijar el conocimiento. Busque espacios donde pueda mostrar sus proyectos y recibir comentarios honestos.',
        ],
    ],
];

$faq = [
    ['q' => '¿Con qué curso de programación conviene empezar?', 'a' => 'Con uno de fundamentos, gratuito o pago, que incluya ejercicios prácticos y termine con un proyecto. Luego profundice en un stack concreto.'],
    ['q' => '¿Los bootcamps garantizan empleo?', 'a' => 'No. Pueden acelerar el aprendizaje, pero el empleo depende de sus proyectos, entrevistas y del mercado. Desconfíe de garantías.'],
    ['q' => '¿Sirven los certificados para conseguir trabajo?', 'a' => 'Suman como señal, pero las empresas evalúan lo que sabe hacer. Acompáñelos con proyectos demostrables.'],
];

require ROOT_DIR . '/templates/article.php';
