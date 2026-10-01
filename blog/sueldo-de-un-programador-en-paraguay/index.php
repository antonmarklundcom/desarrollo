<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'sueldo-de-un-programador-en-paraguay';

$sections = [
    [
        'h2'   => 'Por qué no existe un único sueldo de programador en Paraguay',
        'body' => [
            'La pregunta sobre el sueldo de un programador en Paraguay tiene respuestas muy distintas según a quién se le haga. Un desarrollador que recién termina un curso y consigue su primer puesto en una empresa local no cobra lo mismo que un profesional con años de experiencia que trabaja en remoto para un cliente del exterior. Entre esos dos extremos hay decenas de situaciones intermedias, y cada una tiene su propia lógica.',
            'En este artículo no presentamos una encuesta propia ni cifras de sueldos, porque no las tenemos y porque el mercado cambia rápido. Lo que sí podemos hacer es explicar qué variables mueven la remuneración, cómo compararlas y dónde conseguir referencias actualizadas.',
        ],
    ],
    [
        'h2'   => 'Las variables que más pesan en la remuneración',
        'body' => [
            'Cuando un empleador arma una oferta, o cuando un programador negocia, hay un puñado de factores que explican la mayor parte de la diferencia entre un sueldo y otro. Conviene conocerlos antes de comparar ofertas.',
        ],
        'items' => [
            ['title' => 'Seniority real', 'text' => 'No se mide solo en años, sino en la capacidad de resolver problemas sin supervisión, estimar tareas y revisar el trabajo de otros.'],
            ['title' => 'Tecnología', 'text' => 'Algunos lenguajes y plataformas tienen menos oferta de profesionales locales, lo que suele reflejarse en la paga.'],
            ['title' => 'Nivel de inglés', 'text' => 'Abre la puerta a clientes y empresas del exterior, donde las condiciones suelen ser distintas.'],
            ['title' => 'Modalidad de contratación', 'text' => 'Relación de dependencia con IPS, facturación como profesional independiente o contrato por proyecto cambian el neto que se recibe.'],
            ['title' => 'Tipo de empleador', 'text' => 'Bancos, telcos, consultoras, startups y agencias tienen estructuras salariales diferentes.'],
            ['title' => 'Responsabilidad', 'text' => 'Quien está de guardia, coordina un equipo o responde por sistemas críticos suele cobrar más.'],
        ],
    ],
    [
        'h2'   => 'Cómo se ordenan los niveles',
        'body' => [
            'En el mercado paraguayo se suelen distinguir tres escalones. Un perfil junior, con menos de dos años de experiencia práctica, está empezando a ganar autonomía. Un perfil semi senior ya resuelve tareas completas por su cuenta. Un perfil senior o líder técnico tiene responsabilidad sobre arquitectura o equipos. A más autonomía y responsabilidad, mayor remuneración, pero cada empresa fija sus propias bandas.',
            'No publicamos cifras porque cambian y dependen de cada empresa. Para ver montos actualizados, lo más útil es revisar publicaciones reales de empleo en portales especializados como trabajo.com.py, donde las empresas paraguayas publican búsquedas de programadores con el detalle de requisitos y, a veces, la banda salarial.',
            'Tené en cuenta además que el salario mínimo legal se actualiza periódicamente, por lo que cualquier referencia debe leerse con el valor vigente al momento de consultar.',
        ],
    ],
    [
        'h2'   => 'Relación de dependencia o facturación independiente',
        'body' => [
            'Dos ofertas con el mismo número bruto pueden dejar netos muy diferentes. En relación de dependencia, el empleador y el trabajador aportan al IPS, existe aguinaldo, vacaciones pagadas y cierta estabilidad. Como profesional independiente, el programador factura, liquida sus impuestos, gestiona su propia cobertura médica y no tiene aguinaldo salvo que lo negocie.',
            'Por eso, al comparar, conviene llevar ambas ofertas a una base anual y restar lo que el independiente tendrá que cubrir por su cuenta. Un contador puede ayudar a estimar la carga impositiva según el régimen que corresponda; las reglas cambian y es mejor consultar el valor vigente antes de decidir.',
        ],
    ],
    [
        'h2'   => 'Cómo subir de escalón',
        'body' => [
            'El salto más importante en la remuneración de un programador rara vez viene de un aumento anual. Suele venir de un cambio de rol, de empresa o de mercado. Algunas acciones que ayudan de forma consistente:',
        ],
        'items' => [
            ['title' => 'Dominar un área completa', 'text' => 'Por ejemplo, poder llevar una funcionalidad desde la base de datos hasta la interfaz y el despliegue.'],
            ['title' => 'Mostrar trabajo verificable', 'text' => 'Un portafolio con código público o proyectos explicados vale más que una lista de tecnologías.'],
            ['title' => 'Mejorar el inglés técnico', 'text' => 'Leer documentación, participar en reuniones y escribir con claridad en inglés amplía el mercado.'],
            ['title' => 'Aprender el negocio', 'text' => 'Entender facturación, cobros o logística hace que un programador sea más valioso para empresas locales.'],
            ['title' => 'Negociar con información', 'text' => 'Llegar a una entrevista con ofertas publicadas como referencia es más sólido que pedir una cifra al azar.'],
        ],
    ],
    [
        'h2'   => 'Qué mirar además del sueldo',
        'body' => [
            'El número mensual es solo una parte. Horario, posibilidad de trabajo remoto, capacitación pagada, equipo provisto por la empresa, calidad del código con el que se trabajará y posibilidades de crecimiento pesan mucho en el mediano plazo. Un primer empleo algo peor pagado, pero con buenos mentores, puede acelerar la carrera más que una oferta alta en un entorno donde no se aprende.',
            'También conviene preguntar cómo se evalúa el desempeño y cada cuánto se revisan los sueldos. Una empresa que tiene un proceso claro para esto suele ser más previsible que una que decide caso por caso.',
        ],
    ],
    [
        'h2'   => 'Una mirada desde el lado de las empresas',
        'body' => [
            'Para las empresas que necesitan programadores, entender estas variables ayuda a armar ofertas competitivas y a decidir entre contratar, tercerizar o combinar ambas cosas. Si tu empresa no tiene volumen para un equipo propio, trabajar con programadores externos por proyecto o por horas puede ser una alternativa razonable mientras definís tu necesidad real.',
        ],
    ],
    [
        'h2'   => 'Errores frecuentes al comparar ofertas',
        'body' => [
            'Un error habitual es comparar solo el monto mensual sin mirar la modalidad. Otro es aceptar una oferta alta sin preguntar por la carga horaria real, las guardias o las expectativas de disponibilidad fuera de hora. También es frecuente subestimar el costo de trabajar como independiente: equipo propio, conexión a internet, cobertura médica, meses sin proyectos y el tiempo dedicado a administrar la facturación.',
            'Del lado contrario, muchos programadores descartan ofertas que parecen bajas sin considerar la curva de aprendizaje. Un entorno donde se revisa el código, se usan buenas prácticas y hay colegas con experiencia puede valer, en el mediano plazo, más que una diferencia mensual.',
        ],
    ],
    [
        'h2'   => 'Cómo preparar una negociación',
        'body' => [
            'Antes de hablar de números, reuní información: tres o cuatro ofertas publicadas para perfiles parecidos al tuyo, una lista de tus logros concretos en el último año y una idea clara de tu piso mínimo. En la conversación, hablá de lo que aportás y de lo que el puesto requiere, no de tus gastos personales. Si la empresa no puede llegar a tu cifra, explorá otras variables: revisión salarial a seis meses, capacitación pagada, días de trabajo remoto o un cambio de rol definido por escrito.',
            'Recordá que una negociación bien llevada no daña la relación laboral. Las empresas esperan que un profesional conozca su valor y lo defienda con argumentos.',
        ],
    ],
];

$faq = [
    ['q' => '¿Hay cifras de sueldos en este artículo?', 'a' => 'No. Los montos cambian y dependen de cada empresa. Para datos actuales, revisá ofertas publicadas en portales de empleo como trabajo.com.py.'],
    ['q' => '¿Conviene más facturar como independiente?', 'a' => 'Depende del neto final, la estabilidad y los beneficios. Compará ofertas en base anual y consultá a un contador sobre el régimen impositivo vigente.'],
    ['q' => '¿Cuánto influye el inglés?', 'a' => 'Bastante, porque habilita trabajar para empresas y clientes del exterior, donde las condiciones suelen ser distintas a las locales.'],
];

require ROOT_DIR . '/templates/article.php';
