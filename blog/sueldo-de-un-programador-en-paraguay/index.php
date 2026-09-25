<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'sueldo-de-un-programador-en-paraguay';

$sections = [
    [
        'h2'   => 'Por qué no existe un único sueldo de programador en Paraguay',
        'body' => [
            'La pregunta sobre el sueldo de un programador en Paraguay tiene respuestas muy distintas según a quién se le haga. Un desarrollador que recién termina un curso y consigue su primer puesto en una empresa local no cobra lo mismo que un profesional con años de experiencia que trabaja en remoto para un cliente del exterior. Entre esos dos extremos hay decenas de situaciones intermedias, y cada una tiene su propia lógica.',
            'En este artículo no presentamos una encuesta propia ni cifras exactas, porque no las tenemos y porque el mercado cambia rápido. Lo que sí podemos hacer es explicar qué variables mueven la remuneración, cómo compararlas y qué rangos orientativos se escuchan en el mercado local, siempre como referencia general y no como dato cerrado.',
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
            ['title' => 'Nivel de inglés', 'text' => 'Abre la puerta a clientes y empresas del exterior, donde los rangos suelen ser distintos.'],
            ['title' => 'Modalidad de contratación', 'text' => 'Relación de dependencia con IPS, facturación como profesional independiente o contrato por proyecto cambian el neto que se recibe.'],
            ['title' => 'Tipo de empleador', 'text' => 'Bancos, telcos, consultoras, startups y agencias tienen estructuras salariales diferentes.'],
            ['title' => 'Responsabilidad', 'text' => 'Quien está de guardia, coordina un equipo o responde por sistemas críticos suele cobrar más.'],
        ],
    ],
    [
        'h2'   => 'Rangos orientativos del mercado',
        'body' => [
            'Con todas las advertencias del caso, en el mercado paraguayo se suelen mencionar tres escalones. Un perfil junior, con menos de dos años de experiencia práctica, suele ubicarse en un rango que parte algo por encima del salario mínimo vigente y puede llegar a duplicarlo según la empresa. Un perfil semi senior, que ya resuelve tareas completas por su cuenta, suele moverse en un rango claramente superior. Un perfil senior o líder técnico, con responsabilidad sobre arquitectura o equipos, ocupa el tramo más alto del mercado local.',
            'Estos rangos orientativos del mercado deben confirmarse con ofertas concretas. Para ver cifras actualizadas, lo más útil es revisar publicaciones reales de empleo en portales especializados como trabajo.com.py, donde las empresas paraguayas publican búsquedas de programadores con el detalle de requisitos y, a veces, la banda salarial.',
            'Tenga en cuenta además que el salario mínimo legal se actualiza periódicamente, por lo que cualquier referencia expresada como múltiplo del mínimo debe leerse con el valor vigente al momento de consultar.',
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
            'Para las empresas que necesitan programadores, entender estas variables ayuda a armar ofertas competitivas y a decidir entre contratar, tercerizar o combinar ambas cosas. Si su empresa no tiene volumen para un equipo propio, trabajar con programadores externos por proyecto o por horas puede ser una alternativa razonable mientras define su necesidad real.',
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
            'Antes de hablar de números, reúna información: tres o cuatro ofertas publicadas para perfiles parecidos al suyo, una lista de sus logros concretos en el último año y una idea clara de su piso mínimo. En la conversación, hable de lo que aporta y de lo que el puesto requiere, no de sus gastos personales. Si la empresa no puede llegar a su cifra, explore otras variables: revisión salarial a seis meses, capacitación pagada, días de trabajo remoto o un cambio de rol definido por escrito.',
            'Recuerde que una negociación bien llevada no daña la relación laboral. Las empresas esperan que un profesional conozca su valor y lo defienda con argumentos.',
        ],
    ],
];

$faq = [
    ['q' => '¿Estas cifras salen de una encuesta?', 'a' => 'No. Son rangos orientativos que se mencionan en el mercado local. Para datos actuales, revise ofertas publicadas en portales de empleo como trabajo.com.py.'],
    ['q' => '¿Conviene más facturar como independiente?', 'a' => 'Depende del neto final, la estabilidad y los beneficios. Compare ofertas en base anual y consulte a un contador sobre el régimen impositivo vigente.'],
    ['q' => '¿Cuánto influye el inglés?', 'a' => 'Bastante, porque habilita trabajar para empresas y clientes del exterior, donde las bandas salariales suelen ser distintas a las locales.'],
];

require ROOT_DIR . '/templates/article.php';
