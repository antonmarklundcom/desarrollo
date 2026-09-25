<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'pasantias-de-programacion-en-paraguay';

$sections = [
    [
        'h2'   => 'Para qué sirve una pasantía de programación',
        'body' => [
            'Una pasantía de programación es, para muchos estudiantes y recién formados, la forma más directa de pasar de los ejercicios al trabajo real. En pocos meses se aprende a trabajar con código existente, a usar herramientas de equipo, a cumplir plazos y a recibir revisiones. Esa experiencia pesa en cualquier postulación posterior.',
            'En Paraguay las pasantías aparecen en empresas de software, bancos, telcos, consultoras, organizaciones públicas y también en pequeñas empresas que tienen un área de sistemas. Las condiciones varían mucho, por lo que conviene saber qué preguntar.',
        ],
    ],
    [
        'h2'   => 'Dónde buscar pasantías',
        'body' => [
            'No hay un único canal. Lo más efectivo es combinar varios y ser constante.',
        ],
        'items' => [
            ['title' => 'Portales de empleo', 'text' => 'En trabajo.com.py y otros portales se publican búsquedas de pasantes con requisitos y modalidad.'],
            ['title' => 'Universidades e institutos', 'text' => 'Muchas carreras tienen convenios con empresas y oficinas de vinculación que difunden oportunidades.'],
            ['title' => 'Comunidades de desarrolladores', 'text' => 'Grupos y eventos locales donde las empresas buscan talento joven.'],
            ['title' => 'Contacto directo', 'text' => 'Escribir a empresas que le interesan con un mensaje breve y un enlace a su portafolio.'],
            ['title' => 'Redes profesionales', 'text' => 'Un perfil actualizado y publicaciones sobre sus proyectos atraen contactos.'],
        ],
    ],
    [
        'h2'   => 'Qué preguntar antes de aceptar',
        'body' => [
            'Una buena pasantía tiene objetivos de aprendizaje, un referente asignado y condiciones claras. Antes de aceptar, pregunte con cortesía por estos puntos. No es exigir; es asegurarse de que el tiempo invertido rinda.',
            'Las condiciones legales de las pasantías pueden depender de convenios y normativa vigente; si tiene dudas, consulte con la oficina de su universidad o con un profesional.',
        ],
        'items' => [
            ['title' => 'Duración y horario', 'text' => 'Cuántos meses dura y cuántas horas por semana, compatible con sus estudios.'],
            ['title' => 'Tutor o referente', 'text' => 'Quién lo va a guiar y revisar su trabajo.'],
            ['title' => 'Tareas concretas', 'text' => 'En qué proyecto o sistema va a trabajar.'],
            ['title' => 'Remuneración o estipendio', 'text' => 'Si existe, cuánto y cómo se paga.'],
            ['title' => 'Marco formal', 'text' => 'Si hay convenio con su institución educativa o qué tipo de acuerdo se firma.'],
            ['title' => 'Posibilidad de continuidad', 'text' => 'Si la empresa suele contratar a pasantes al terminar.'],
        ],
    ],
    [
        'h2'   => 'Cómo aprovechar los primeros días',
        'body' => [
            'Los primeros días suelen dedicarse a configurar el entorno y entender el sistema. Tome notas de todo: cómo se instala el proyecto, cómo se despliega, dónde están los logs. Esas notas le ahorrarán preguntas repetidas y, si las ordena, pueden convertirse en documentación útil para el equipo, algo que se valora mucho.',
            'Pregunte cuál es el flujo de trabajo: cómo se asignan tareas, cómo se revisa el código y qué se espera de un pasante. Acordar expectativas temprano evita malentendidos al final.',
        ],
    ],
    [
        'h2'   => 'Hábitos que marcan la diferencia',
        'body' => [
            'Lo que distingue a un pasante al que luego se le ofrece un puesto rara vez es el talento técnico puro. Suelen ser hábitos visibles para el equipo.',
            'Avise cuando se traba, pero después de haber intentado resolver solo durante un tiempo razonable y con lo que ya probó anotado. Entregue tareas pequeñas terminadas antes que tareas grandes a medias. Lea los comentarios de revisión con atención y no repita el mismo error. Y cumpla los horarios acordados: la confiabilidad es lo primero que se evalúa.',
        ],
    ],
    [
        'h2'   => 'Cómo convertir la pasantía en empleo',
        'body' => [
            'Hacia la mitad de la pasantía, pida una conversación con su referente para saber cómo va y qué debería mejorar. Al acercarse el final, pregunte directamente si existe posibilidad de continuar. Si no la hay, pida una referencia y permiso para mencionar los proyectos en su currículum.',
            'Aunque no quede en la empresa, la pasantía le deja algo concreto para contar en entrevistas: qué sistema tocó, qué problema resolvió y qué aprendió del trabajo en equipo. Esa historia bien contada es muy valiosa para un primer empleo.',
        ],
    ],
    [
        'h2'   => 'Si todavía no consigue pasantía',
        'body' => [
            'Mientras busca, siga construyendo proyectos propios y participando en comunidades. Colaborar en proyectos de código abierto o hacer un sistema acotado para una organización sin fines de lucro también suma experiencia comprobable. Lo importante es no quedarse solo con cursos.',
        ],
    ],
    [
        'h2'   => 'Cómo presentar la pasantía en el currículum',
        'body' => [
            'Al terminar, describa la pasantía con hechos concretos. En lugar de escribir que colaboró en el área de sistemas, indique qué tipo de sistema, qué tecnologías usó y qué resultado tuvo su trabajo: una pantalla nueva, un reporte automatizado, una corrección de errores recurrentes o la documentación de un proceso. Si firmó un acuerdo de confidencialidad, describa el trabajo en términos generales sin revelar datos de la empresa.',
            'Pida, si es posible, una carta o referencia de su tutor. Una recomendación de alguien que lo vio trabajar tiene mucho peso para un primer empleo, sobre todo en un mercado donde muchas contrataciones se deciden por confianza.',
        ],
    ],
    [
        'h2'   => 'Señales de una pasantía que no conviene',
        'body' => [
            'No todas las ofertas de pasantía son buenas oportunidades. Desconfíe si no hay nadie asignado para guiarlo, si las tareas no tienen relación con la programación, si se espera que cubra un puesto completo con responsabilidad sobre sistemas críticos sin supervisión o si las condiciones cambian después de empezar. Una pasantía debe tener un componente de aprendizaje claro; si solo es trabajo sin guía, es preferible seguir buscando o dedicar ese tiempo a proyectos propios.',
        ],
    ],
    [
        'h2'   => 'Qué aprender más allá del código',
        'body' => [
            'Una pasantía también enseña cómo funciona una empresa por dentro: cómo se priorizan los pedidos, cómo se habla con usuarios que no son técnicos, cómo se planifica una puesta en producción y qué pasa cuando algo falla. Observe esas dinámicas y pregunte por qué se toman ciertas decisiones. Ese conocimiento lo diferenciará de otros postulantes que solo conocen el lado técnico, y le servirá en cualquier puesto futuro.',
            'Anote también los términos del negocio que escucha. Entender la diferencia entre una factura y una nota de crédito, o cómo se maneja el stock, facilita mucho el trabajo del programador.',
        ],
    ],
];

$faq = [
    ['q' => '¿Las pasantías de programación son pagadas?', 'a' => 'Algunas ofrecen estipendio y otras no. Pregunte antes de aceptar y compare con el aprendizaje que le ofrecen.'],
    ['q' => '¿Necesito estar cursando una carrera?', 'a' => 'Muchas pasantías lo piden por convenio con universidades, pero otras aceptan a personas en formación por cursos o autodidactas.'],
    ['q' => '¿Dónde se publican búsquedas de pasantes?', 'a' => 'En portales de empleo como trabajo.com.py, en oficinas de vinculación de universidades y en comunidades de programadores.'],
];

require ROOT_DIR . '/templates/article.php';
