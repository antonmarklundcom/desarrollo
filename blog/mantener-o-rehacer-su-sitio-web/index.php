<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'mantener-o-rehacer-su-sitio-web';

$sections = [
    [
        'h2'   => 'Una decisión que aparece tarde o temprano',
        'body' => [
            'Todo sitio web envejece. Cambian los navegadores, las tecnologías, las expectativas de los usuarios y la propia empresa. En algún momento surge la pregunta de si conviene seguir manteniendo el sitio actual con ajustes o rehacerlo desde cero. La respuesta depende del estado técnico, del contenido y de lo que el sitio debe lograr para la empresa.',
            'Este artículo propone un diagnóstico ordenado para decidir si mantener o rehacer su sitio web con criterio, no por impulso.',
        ],
    ],
    [
        'h2'   => 'Paso 1: definir qué debe lograr el sitio',
        'body' => [
            'Antes de evaluar el sitio, defina su objetivo. ¿Debe generar consultas, vender en línea, informar a clientes actuales, reclutar personal? Un sitio que cumple bien su objetivo, aunque se vea algo antiguo, puede necesitar solo ajustes. Un sitio moderno que no genera resultados puede necesitar cambios profundos en contenido y estructura, más que en diseño.',
        ],
    ],
    [
        'h2'   => 'Paso 2: revisar el estado técnico',
        'body' => [
            'Si el sitio usa una tecnología sin soporte, tiene problemas de seguridad recurrentes o nadie tiene acceso completo, rehacerlo suele ser más sensato que seguir parchando.',
        ],
        'items' => [
            ['title' => 'Tecnología', 'text' => '¿El sistema y sus componentes reciben actualizaciones o están abandonados?'],
            ['title' => 'Seguridad', 'text' => '¿Tiene certificado SSL, versiones actualizadas y copias de seguridad?'],
            ['title' => 'Velocidad', 'text' => '¿Cuánto tarda en cargar en un celular con datos móviles?'],
            ['title' => 'Adaptación a móviles', 'text' => '¿Se ve y funciona bien en pantallas pequeñas?'],
            ['title' => 'Errores', 'text' => '¿Hay enlaces rotos, formularios que no llegan o páginas que fallan?'],
            ['title' => 'Acceso', 'text' => '¿Tiene las credenciales del hosting, el dominio y el panel de administración?'],
        ],
    ],
    [
        'h2'   => 'Paso 3: revisar el contenido',
        'body' => [
            'El contenido suele ser el activo más valioso de un sitio y el que más se descuida. Revise si los textos describen bien lo que la empresa hace hoy, si cada servicio tiene su propia página, si hay información desactualizada como precios, direcciones o personal que ya no está, y si las páginas responden las preguntas que hacen los clientes.',
            'Un sitio técnicamente sano con contenido débil necesita trabajo de contenido, no un rediseño completo.',
        ],
    ],
    [
        'h2'   => 'Paso 4: medir resultados actuales',
        'body' => [
            'Si el sitio tiene herramientas de analítica, revise cuántas visitas recibe, desde dónde llegan, qué páginas se ven más y cuántas consultas genera. En Google Search Console puede ver para qué búsquedas aparece. Estos datos son importantes por dos razones: indican qué funciona y qué no, y muestran qué debe preservarse si decide rehacer el sitio.',
        ],
    ],
    [
        'h2'   => 'Cuándo conviene mantener',
        'body' => [
            'Mantener tiene sentido cuando la tecnología está vigente y actualizada, el sitio carga rápido y funciona bien en celulares, el diseño es aceptable aunque mejorable, y los problemas son puntuales: contenido desactualizado, algunas páginas faltantes, formularios a mejorar. En ese caso, un plan de mantenimiento con mejoras por etapas suele dar más resultado por menos inversión.',
        ],
    ],
    [
        'h2'   => 'Cuándo conviene rehacer',
        'body' => [
            'Rehacer tiene sentido cuando la tecnología está obsoleta o sin soporte, el sitio es lento y difícil de adaptar a móviles, cada cambio pequeño cuesta mucho, hay problemas de seguridad recurrentes o la empresa cambió tanto que la estructura del sitio ya no la representa. También cuando el sitio necesita funciones nuevas, como integración con CRM, cobros en línea o catálogos conectados al sistema de gestión, que la base actual no permite agregar con razonable esfuerzo.',
        ],
    ],
    [
        'h2'   => 'Cómo rehacer sin perder lo ganado',
        'body' => [
            'El riesgo principal de rehacer un sitio es perder visitas que llegaban desde Google. Para evitarlo, haga un inventario de las páginas actuales con sus direcciones, identifique las que reciben tráfico, mantenga las mismas direcciones cuando sea posible y, cuando cambien, configure redirecciones permanentes de las direcciones viejas a las nuevas. Después de publicar, revise en Search Console que no aparezcan errores.',
            'También conserve el contenido que funciona. Reescribir todo por reescribir puede hacer perder posiciones ganadas con años.',
        ],
    ],
    [
        'h2'   => 'El costo de no decidir',
        'body' => [
            'Postergar la decisión también tiene costo. Un sitio lento o desactualizado puede estar perdiendo consultas todos los días sin que nadie lo note. Un sitio con componentes sin actualizar puede ser vulnerado. Y un sitio que la empresa no puede editar fácilmente termina con información vieja que genera desconfianza.',
        ],
    ],
    [
        'h2'   => 'Qué determina el costo de cada opción',
        'body' => [
            'El costo de mantener depende de la cantidad de cambios, la frecuencia de actualizaciones y el estado técnico. El costo de rehacer depende de la cantidad de páginas, el diseño, las funciones especiales, las integraciones, la migración de contenido y las redirecciones. Pedir un diagnóstico antes de decidir permite comparar ambas opciones con números concretos.',
        ],
    ],
    [
        'h2'   => 'Un plan de mantenimiento mínimo',
        'body' => [
            'Si decide mantener, establezca rutinas: actualizaciones técnicas mensuales, copias de seguridad verificadas, revisión trimestral de contenido y medición de consultas generadas. Asigne un responsable interno que reciba los pedidos de cambio y los priorice. Un mantenimiento ordenado prolonga la vida útil del sitio y posterga la necesidad de rehacerlo.',
        ],
    ],
    [
        'h2'   => 'Preguntas para decidir',
        'body' => [
            '¿La tecnología recibe soporte? ¿El sitio carga rápido en celulares? ¿Puede editar el contenido sin depender de terceros? ¿Genera consultas? ¿Refleja lo que la empresa es hoy? Si responde que no a la mayoría, rehacer probablemente sea la mejor inversión. Si responde que sí a la mayoría, mantener y mejorar por etapas es lo más razonable.',
        ],
    ],
];

$faq = [
    ['q' => '¿Cada cuánto conviene rehacer un sitio web?', 'a' => 'No hay un plazo fijo. Conviene revisarlo periódicamente y rehacerlo cuando la tecnología, la velocidad o la estructura ya no permiten cumplir su objetivo.'],
    ['q' => '¿Pierdo posicionamiento en Google si rehago el sitio?', 'a' => 'Puede ocurrir si cambian las direcciones sin redirecciones. Con un inventario de páginas y redirecciones permanentes el riesgo baja mucho.'],
    ['q' => '¿Puedo mejorar el diseño sin rehacer todo?', 'a' => 'A veces sí, si la tecnología lo permite. Un cambio de plantilla o estilos puede renovar la apariencia sin rehacer la estructura.'],
];

require ROOT_DIR . '/templates/article.php';
