<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'trabajo-remoto-para-programadores-paraguayos';

$sections = [
    [
        'h2'   => 'El trabajo remoto como opción real',
        'body' => [
            'El trabajo remoto para programadores paraguayos dejó de ser una excepción. Empresas locales permiten trabajar desde casa parte de la semana, y empresas del exterior contratan desarrolladores en Paraguay para equipos distribuidos. La zona horaria cercana a la de buena parte de América y la posibilidad de colaborar en tiempo real con equipos de la región son ventajas concretas.',
            'Sin embargo, conseguir y sostener un trabajo remoto exige habilidades que van más allá de programar bien. Este artículo resume qué preparar y qué cuidar.',
        ],
    ],
    [
        'h2'   => 'Remoto local o remoto internacional',
        'body' => [
            'Hay dos escenarios distintos. En el remoto local, una empresa paraguaya lo contrata con las mismas condiciones que a un empleado presencial, pero trabaja desde su casa. En el remoto internacional, una empresa del exterior lo contrata directamente, a través de una plataforma intermediaria o como contratista independiente.',
            'El primero es más sencillo en lo administrativo: se aplican las reglas laborales locales. El segundo suele ofrecer rangos distintos, pero implica gestionar cobros del exterior, facturación e impuestos por cuenta propia, sin los beneficios automáticos de la relación de dependencia.',
        ],
    ],
    [
        'h2'   => 'Habilidades que exige el trabajo remoto',
        'body' => [
            'Un equipo remoto no puede ver lo que usted hace. Solo ve lo que entrega y lo que comunica. Por eso, estas habilidades pesan tanto como el conocimiento técnico.',
        ],
        'items' => [
            ['title' => 'Comunicación escrita clara', 'text' => 'Explicar avances, bloqueos y decisiones en mensajes breves y precisos.'],
            ['title' => 'Inglés funcional', 'text' => 'Para equipos internacionales, poder participar en reuniones y escribir documentación.'],
            ['title' => 'Autonomía', 'text' => 'Organizar el propio día, priorizar y avanzar sin supervisión constante.'],
            ['title' => 'Estimación honesta', 'text' => 'Anticipar cuánto llevará una tarea y avisar temprano si se complica.'],
            ['title' => 'Manejo de herramientas', 'text' => 'Control de versiones, gestores de tareas, videollamadas y documentación compartida.'],
            ['title' => 'Disponibilidad acordada', 'text' => 'Respetar los horarios de solapamiento con el equipo.'],
        ],
    ],
    [
        'h2'   => 'Cómo buscar trabajo remoto',
        'body' => [
            'Para puestos locales con modalidad remota o híbrida, los portales de empleo como trabajo.com.py permiten filtrar búsquedas y ver condiciones. Para puestos internacionales, existen plataformas y bolsas de trabajo especializadas en empleo remoto, además de redes profesionales donde los reclutadores buscan perfiles.',
            'Un perfil profesional en inglés, un portafolio con proyectos explicados y un historial visible de contribuciones de código aumentan mucho las posibilidades. Las empresas remotas suelen evaluar con ejercicios técnicos a distancia y varias entrevistas por videollamada.',
        ],
    ],
    [
        'h2'   => 'Cobrar desde el exterior',
        'body' => [
            'Si trabaja para una empresa del exterior, necesitará una forma de recibir pagos. Las opciones más comunes son transferencias bancarias internacionales a una cuenta local, plataformas de pago internacionales y servicios intermediarios de contratación que pagan en nombre de la empresa. Cada una tiene comisiones, plazos y tipos de cambio distintos.',
            'Antes de aceptar, pregunte cómo y cuándo le pagarán, en qué moneda y quién asume las comisiones. Compare el monto neto que llegará a su cuenta, no el bruto acordado.',
        ],
    ],
    [
        'h2'   => 'Facturación e impuestos',
        'body' => [
            'Como contratista independiente, en general deberá estar inscripto como contribuyente y emitir comprobantes por sus servicios, incluso si el cliente está en el exterior. Las reglas sobre exportación de servicios, IVA e impuesto a la renta personal tienen particularidades y cambian con el tiempo. Lo recomendable es consultar con un contador antes de empezar a facturar y revisar el régimen vigente en la DNIT.',
            'Llevar un registro ordenado de ingresos, comprobantes y gastos desde el primer mes evita problemas y facilita la declaración.',
        ],
    ],
    [
        'h2'   => 'Cuidado con las ofertas dudosas',
        'body' => [
            'El trabajo remoto también atrae fraudes. Desconfíe de ofertas que piden pagar por capacitación, equipos o inscripción, que prometen sueldos muy altos por tareas simples, que se comunican solo por mensajería sin una empresa verificable o que piden datos bancarios completos antes de firmar nada. Investigue la empresa, busque a sus empleados en redes profesionales y pida un contrato por escrito.',
        ],
    ],
    [
        'h2'   => 'Organizar el espacio y la rutina',
        'body' => [
            'Trabajar en remoto de forma sostenible requiere un espacio adecuado, una conexión a internet confiable con alternativa de respaldo y una rutina que separe trabajo y vida personal. Cortes de energía o de conexión ocurren; tener un plan B, como datos móviles o un lugar alternativo, y avisar al equipo con anticipación demuestra profesionalismo.',
        ],
    ],
    [
        'h2'   => 'Crecer trabajando en remoto',
        'body' => [
            'El riesgo del trabajo remoto es quedar aislado. Participe activamente en las reuniones del equipo, pida revisiones de código, ofrezca ayuda a colegas y proponga mejoras. Documentar lo que hace y compartir aprendizajes le da visibilidad dentro de la empresa, lo que en un entorno remoto es clave para acceder a más responsabilidad.',
        ],
    ],
    [
        'h2'   => 'Preparar el perfil para empresas del exterior',
        'body' => [
            'Para postularse a empresas internacionales, conviene tener el currículum y el perfil profesional en inglés, con logros concretos y enlaces a proyectos. Prepare una breve presentación oral de su experiencia, de uno o dos minutos, porque suele ser la primera pregunta en las entrevistas. Practique también ejercicios técnicos en inglés, explicando su razonamiento en voz alta.',
            'Indique su zona horaria y su disponibilidad de solapamiento con distintas regiones. Para muchas empresas, la posibilidad de trabajar en horario compatible es un factor decisivo al elegir entre candidatos.',
        ],
    ],
    [
        'h2'   => 'Contratos y acuerdos por escrito',
        'body' => [
            'Aunque la relación sea a distancia, todo acuerdo debe quedar por escrito: tareas, horario esperado, forma y fecha de pago, moneda, propiedad del trabajo y condiciones de terminación. Lea con atención las cláusulas de exclusividad y confidencialidad antes de firmar.',
        ],
    ],
];

$faq = [
    ['q' => '¿Necesito inglés para trabajar en remoto?', 'a' => 'Para empresas locales no siempre. Para equipos internacionales, un inglés funcional para reuniones y escritura es prácticamente indispensable.'],
    ['q' => '¿Cómo facturo servicios a un cliente del exterior?', 'a' => 'En general debe estar inscripto como contribuyente y emitir comprobantes. Consulte con un contador y revise el régimen vigente en la DNIT.'],
    ['q' => '¿Dónde busco empleos remotos locales?', 'a' => 'En portales de empleo como trabajo.com.py, filtrando por modalidad remota o híbrida.'],
];

require ROOT_DIR . '/templates/article.php';
