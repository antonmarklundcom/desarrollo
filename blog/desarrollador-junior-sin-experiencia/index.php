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
        'h2'   => 'Construya experiencia antes del empleo',
        'body' => [
            'La forma más directa de romper el círculo es generar experiencia verificable por su cuenta. No hace falta que sea grande; hace falta que esté terminada y que se pueda explicar.',
        ],
        'items' => [
            ['title' => 'Proyectos propios completos', 'text' => 'Una aplicación publicada, con código ordenado y un README, vale como experiencia real.'],
            ['title' => 'Trabajos para conocidos', 'text' => 'Un sitio para un comercio del barrio o un sistema simple para una organización, siempre con alcance claro.'],
            ['title' => 'Contribuciones a código abierto', 'text' => 'Corregir documentación o pequeños errores en proyectos públicos muestra que sabe trabajar con código ajeno.'],
            ['title' => 'Pasantías', 'text' => 'Aunque sean cortas o de medio tiempo, suman experiencia en equipo.'],
            ['title' => 'Hackatones y desafíos', 'text' => 'Muestran capacidad de trabajar bajo presión y en grupo.'],
        ],
    ],
    [
        'h2'   => 'Un portafolio que convenza',
        'body' => [
            'El portafolio es su principal carta. Un reclutador técnico le dedicará pocos minutos, así que priorice calidad sobre cantidad. Tres proyectos bien presentados son mejores que quince repositorios vacíos.',
            'Cada proyecto debería explicar qué problema resuelve, qué tecnologías usa, cómo se ejecuta y qué haría distinto si tuviera más tiempo. Esa última parte demuestra criterio. Si puede, publique una versión funcionando para que se pueda probar sin instalar nada.',
        ],
    ],
    [
        'h2'   => 'Un currículum corto y específico',
        'body' => [
            'Para un puesto junior, una página alcanza. Ponga arriba las tecnologías que realmente sabe usar, luego los proyectos con enlaces y después la formación. Evite listar herramientas que solo vio en un tutorial; en la entrevista se lo preguntarán.',
            'Adapte el currículum a cada búsqueda. Si la oferta pide PHP y MySQL, destaque los proyectos donde los usó. Leer atentamente la descripción del puesto y responder a ella es algo que pocos postulantes hacen y que se nota.',
        ],
    ],
    [
        'h2'   => 'Dónde postularse',
        'body' => [
            'Las ofertas de empleo para programadores en Paraguay se publican en portales especializados como trabajo.com.py, en redes profesionales y en los sitios de las propias empresas. También conviene participar en comunidades de desarrolladores locales, donde a veces circulan búsquedas antes de publicarse.',
            'Postúlese a puestos donde cumpla con buena parte de los requisitos, aunque no con todos. Las descripciones suelen ser una lista de deseos. Si cumple con lo esencial y puede demostrarlo, vale la pena enviar la postulación.',
        ],
    ],
    [
        'h2'   => 'Cómo prepararse para la entrevista técnica',
        'body' => [
            'Las entrevistas para puestos junior suelen combinar preguntas de fundamentos, un ejercicio práctico y una conversación sobre sus proyectos. Prepárese para cada parte.',
        ],
        'items' => [
            ['title' => 'Fundamentos', 'text' => 'Repase estructuras de datos básicas, HTTP, SQL y el lenguaje principal que declara.'],
            ['title' => 'Ejercicio práctico', 'text' => 'Practique resolver problemas pequeños en voz alta, explicando su razonamiento.'],
            ['title' => 'Sus proyectos', 'text' => 'Sepa justificar cada decisión y reconocer qué mejoraría.'],
            ['title' => 'Preguntas propias', 'text' => 'Pregunte cómo es el acompañamiento a juniors y cómo se revisa el código.'],
        ],
    ],
    [
        'h2'   => 'Actitud que se valora',
        'body' => [
            'En un junior se evalúa más la capacidad de aprender que el conocimiento acumulado. Mostrar curiosidad, reconocer cuando no sabe algo y explicar cómo lo averiguaría genera más confianza que intentar aparentar. Las empresas saben que tendrán que formar a quien contraten; buscan personas con las que ese esfuerzo valga la pena.',
            'También ayuda la constancia. Si una entrevista no sale bien, pida retroalimentación y úsela para la siguiente. Muchas personas consiguen su primer empleo después de varias entrevistas, y cada una deja algo aprendido.',
        ],
    ],
    [
        'h2'   => 'Después de conseguir el puesto',
        'body' => [
            'El primer empleo es para aprender. Pida revisiones de código, lea el código de los colegas con más experiencia y anote lo que no entiende para preguntarlo en bloque. En uno o dos años de trabajo sostenido, el salto a semi senior se vuelve un objetivo realista.',
        ],
    ],
    [
        'h2'   => 'Errores que conviene evitar',
        'body' => [
            'Enviar el mismo currículum genérico a decenas de ofertas rara vez funciona. También resta mucho presentar proyectos copiados de un tutorial sin cambios, porque los entrevistadores los reconocen. Otro error frecuente es no revisar la ortografía de la postulación: en un rol donde la precisión importa, los descuidos se notan.',
            'En la entrevista, evite decir que sabe algo que no domina. Es mejor responder que no lo usó todavía y explicar cómo lo aprendería. Tampoco conviene hablar mal de empleadores o compañeros anteriores, aunque haya tenido malas experiencias.',
        ],
    ],
    [
        'h2'   => 'Un plan de búsqueda de ocho semanas',
        'body' => [
            'Organizar la búsqueda como un proyecto ayuda a sostener la constancia. En las dos primeras semanas, termine y pula su mejor proyecto y actualice el currículum. En las semanas tres y cuatro, arme una lista de empresas objetivo y postúlese a las búsquedas activas en portales como trabajo.com.py. En las semanas cinco y seis, practique entrevistas con un colega y agregue un segundo proyecto. En las últimas dos, haga seguimiento de las postulaciones enviadas y ajuste lo que no esté funcionando.',
            'Registrar cada postulación en una planilla, con fecha, empresa y estado, permite ver qué tipo de búsquedas responden y dónde conviene insistir.',
        ],
    ],
    [
        'h2'   => 'Qué proyectos elegir',
        'body' => [
            'Elija proyectos que muestren habilidades distintas: uno con interfaz cuidada, otro con lógica de servidor y base de datos, y otro que consuma una API externa. Si puede, relacione alguno con un problema local, como un sistema de turnos o un catálogo con pedidos. Esos proyectos generan conversación en la entrevista y muestran que entiende necesidades reales de empresas.',
        ],
    ],
];

$faq = [
    ['q' => '¿Cuántos proyectos necesito en el portafolio?', 'a' => 'Tres proyectos completos y bien explicados suelen alcanzar para un puesto junior. La calidad importa más que la cantidad.'],
    ['q' => '¿Vale la pena trabajar gratis para ganar experiencia?', 'a' => 'Un proyecto acotado para una organización o un conocido puede servir, pero conviene definir alcance y plazo para no quedar atrapado en un trabajo sin fin.'],
    ['q' => '¿Dónde encuentro ofertas para juniors?', 'a' => 'En portales de empleo como trabajo.com.py, redes profesionales y comunidades de programadores locales.'],
];

require ROOT_DIR . '/templates/article.php';
