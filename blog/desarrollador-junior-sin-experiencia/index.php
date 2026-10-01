<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'desarrollador-junior-sin-experiencia';

$sections = [
    [
        'h2'   => 'El problema de la primera experiencia',
        'body' => [
            'Muchas búsquedas piden experiencia previa, incluso para puestos junior. Para quien busca empleo como desarrollador junior sin experiencia, eso parece un círculo sin salida: no lo contratan porque no tiene experiencia, y no tiene experiencia porque nadie lo contrata. La buena noticia es que la experiencia no se limita a empleos formales. Proyectos propios, trabajos voluntarios, pasantías y colaboraciones cuentan si se presentan bien.',
            'Este artículo resume qué hacer para llegar a una entrevista con algo concreto que mostrar y cómo aprovecharla.',
        ],
    ],
    [
        'h2'   => 'Construí experiencia antes del empleo',
        'body' => [
            'La forma más directa de romper el círculo es generar experiencia verificable por tu cuenta. No hace falta que sea grande; hace falta que esté terminada y que se pueda explicar.',
        ],
        'items' => [
            ['title' => 'Proyectos propios completos', 'text' => 'Una aplicación publicada, con código ordenado y un README, vale como experiencia real.'],
            ['title' => 'Trabajos para conocidos', 'text' => 'Un sitio para un comercio del barrio o un sistema simple para una organización, siempre con alcance claro.'],
            ['title' => 'Contribuciones a código abierto', 'text' => 'Corregir documentación o pequeños errores en proyectos públicos muestra que sabés trabajar con código ajeno.'],
            ['title' => 'Pasantías', 'text' => 'Aunque sean cortas o de medio tiempo, suman experiencia en equipo.'],
            ['title' => 'Hackatones y desafíos', 'text' => 'Muestran capacidad de trabajar bajo presión y en grupo.'],
        ],
    ],
    [
        'h2'   => 'Un portafolio que convenza',
        'body' => [
            'El portafolio es tu principal carta. Un reclutador técnico le dedicará pocos minutos, así que priorizá calidad sobre cantidad. Tres proyectos bien presentados son mejores que quince repositorios vacíos.',
            'Cada proyecto debería explicar qué problema resuelve, qué tecnologías usa, cómo se ejecuta y qué haría distinto si tuviera más tiempo. Esa última parte demuestra criterio. Si podés, publicá una versión funcionando para que se pueda probar sin instalar nada.',
        ],
    ],
    [
        'h2'   => 'Un currículum corto y específico',
        'body' => [
            'Para un puesto junior, una página alcanza. Poné arriba las tecnologías que realmente sabés usar, luego los proyectos con enlaces y después la formación. Evitá listar herramientas que solo viste en un tutorial; en la entrevista te lo van a preguntar.',
            'Adaptá el currículum a cada búsqueda. Si la oferta pide PHP y MySQL, destacá los proyectos donde los usaste. Leer atentamente la descripción del puesto y responder a ella es algo que pocos postulantes hacen y que se nota.',
        ],
    ],
    [
        'h2'   => 'Dónde postularse',
        'body' => [
            'Las ofertas de empleo para programadores en Paraguay se publican en portales especializados como trabajo.com.py, en redes profesionales y en los sitios de las propias empresas. También conviene participar en comunidades de desarrolladores locales, donde a veces circulan búsquedas antes de publicarse.',
            'Postulate a puestos donde cumplas con buena parte de los requisitos, aunque no con todos. Las descripciones suelen ser una lista de deseos. Si cumplís con lo esencial y podés demostrarlo, vale la pena enviar la postulación.',
        ],
    ],
    [
        'h2'   => 'Cómo prepararse para la entrevista técnica',
        'body' => [
            'Las entrevistas para puestos junior suelen combinar preguntas de fundamentos, un ejercicio práctico y una conversación sobre tus proyectos. Prepará cada parte.',
        ],
        'items' => [
            ['title' => 'Fundamentos', 'text' => 'Repasá estructuras de datos básicas, HTTP, SQL y el lenguaje principal que declara.'],
            ['title' => 'Ejercicio práctico', 'text' => 'Practicá resolver problemas pequeños en voz alta, explicando tu razonamiento.'],
            ['title' => 'Tus proyectos', 'text' => 'Sabé justificar cada decisión y reconocer qué mejoraría.'],
            ['title' => 'Preguntas propias', 'text' => 'Preguntá cómo es el acompañamiento a juniors y cómo se revisa el código.'],
        ],
    ],
    [
        'h2'   => 'Actitud que se valora',
        'body' => [
            'En un junior se evalúa más la capacidad de aprender que el conocimiento acumulado. Mostrar curiosidad, reconocer cuando no sabés algo y explicar cómo lo averiguaría genera más confianza que intentar aparentar. Las empresas saben que tendrán que formar a quien contraten; buscan personas con las que ese esfuerzo valga la pena.',
            'También ayuda la constancia. Si una entrevista no sale bien, pedí retroalimentación y usala para la siguiente. Muchas personas consiguen su primer empleo después de varias entrevistas, y cada una deja algo aprendido.',
        ],
    ],
    [
        'h2'   => 'Después de conseguir el puesto',
        'body' => [
            'El primer empleo es para aprender. Pedí revisiones de código, leé el código de los colegas con más experiencia y anotá lo que no entendés para preguntarlo en bloque. Con trabajo sostenido, el salto a semi senior se vuelve un objetivo realista.',
        ],
    ],
    [
        'h2'   => 'Errores que conviene evitar',
        'body' => [
            'Enviar el mismo currículum genérico a decenas de ofertas rara vez funciona. También resta mucho presentar proyectos copiados de un tutorial sin cambios, porque los entrevistadores los reconocen. Otro error frecuente es no revisar la ortografía de la postulación: en un rol donde la precisión importa, los descuidos se notan.',
            'En la entrevista, evitá decir que sabés algo que no dominás. Es mejor responder que no lo usaste todavía y explicar cómo lo aprenderías. Tampoco conviene hablar mal de empleadores o compañeros anteriores, aunque haya tenido malas experiencias.',
        ],
    ],
    [
        'h2'   => 'Un plan de búsqueda de ocho semanas',
        'body' => [
            'Organizar la búsqueda como un proyecto ayuda a sostener la constancia. En las dos primeras semanas, terminá y puliá tu mejor proyecto y actualizá el currículum. En las semanas tres y cuatro, armá una lista de empresas objetivo y postulate a las búsquedas activas en portales como trabajo.com.py. En las semanas cinco y seis, practicá entrevistas con un colega y agregá un segundo proyecto. En las últimas dos, hacé seguimiento de las postulaciones enviadas y ajuste lo que no esté funcionando.',
            'Registrar cada postulación en una planilla, con fecha, empresa y estado, permite ver qué tipo de búsquedas responden y dónde conviene insistir.',
        ],
    ],
    [
        'h2'   => 'Qué proyectos elegir',
        'body' => [
            'Elegí proyectos que muestren habilidades distintas: uno con interfaz cuidada, otro con lógica de servidor y base de datos, y otro que consuma una API externa. Si podés, relacioná alguno con un problema local, como un sistema de turnos o un catálogo con pedidos. Esos proyectos generan conversación en la entrevista y muestran que entendés necesidades reales de empresas.',
        ],
    ],
];

$faq = [
    ['q' => '¿Cuántos proyectos necesito en el portafolio?', 'a' => 'Tres proyectos completos y bien explicados suelen alcanzar para un puesto junior. La calidad importa más que la cantidad.'],
    ['q' => '¿Vale la pena trabajar gratis para ganar experiencia?', 'a' => 'Un proyecto acotado para una organización o un conocido puede servir, pero conviene definir alcance y plazo para no quedar atrapado en un trabajo sin fin.'],
    ['q' => '¿Dónde encuentro ofertas para juniors?', 'a' => 'En portales de empleo como trabajo.com.py, redes profesionales y comunidades de programadores locales.'],
];

require ROOT_DIR . '/templates/article.php';
