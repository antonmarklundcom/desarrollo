<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'wordpress-o-sitio-a-medida';

$sections = [
    [
        'h2'   => 'La pregunta de fondo',
        'body' => [
            'Cuando una empresa decide crear o renovar su página web, una de las primeras preguntas es si usar WordPress o encargar un sitio a medida. Ambos caminos son válidos y ambos pueden salir mal. La diferencia está en qué necesita el sitio, quién lo va a actualizar y cuánto quiere invertir en mantenimiento.',
            'Este artículo compara las dos opciones con criterios prácticos para que pueda decidir con información.',
        ],
    ],
    [
        'h2'   => 'Qué es WordPress',
        'body' => [
            'WordPress es un sistema de gestión de contenidos de código abierto que permite crear y administrar un sitio web desde un panel. Tiene miles de temas y plugins que agregan funciones: formularios, tiendas, reservas, idiomas. Su gran ventaja es que personas sin conocimientos técnicos pueden publicar y editar contenido.',
            'Su contracara es que cada plugin es código de terceros que necesita actualizaciones. Un WordPress sin mantenimiento acumula versiones viejas, se vuelve lento y queda expuesto a vulnerabilidades conocidas.',
        ],
    ],
    [
        'h2'   => 'Qué es un sitio a medida',
        'body' => [
            'Un sitio a medida se programa específicamente para su empresa, con el código justo para lo que necesita. Puede ser un sitio estático muy liviano, una aplicación con lógica propia o una combinación. No depende de plugins de terceros y suele ser más rápido y más simple de asegurar.',
            'A cambio, editar contenido puede requerir un programador, salvo que se construya un panel de administración a propósito, lo que suma costo.',
        ],
    ],
    [
        'h2'   => 'Comparación práctica',
        'body' => [
        ],
        'items' => [
            ['title' => 'Actualización de contenido', 'text' => 'WordPress lo resuelve con su panel; el sitio a medida depende de cómo se construya.'],
            ['title' => 'Velocidad', 'text' => 'Un sitio a medida bien hecho suele ser más liviano; WordPress puede ser rápido, pero requiere cuidado con temas y plugins.'],
            ['title' => 'Mantenimiento', 'text' => 'WordPress exige actualizaciones frecuentes de núcleo, tema y plugins; un sitio a medida simple requiere menos intervención.'],
            ['title' => 'Seguridad', 'text' => 'WordPress es un objetivo frecuente de ataques automatizados por su popularidad; un sitio a medida tiene menos superficie expuesta.'],
            ['title' => 'Funciones especiales', 'text' => 'WordPress tiene plugins para casi todo; a medida se construye exactamente lo necesario.'],
            ['title' => 'Costo inicial', 'text' => 'WordPress con un tema suele ser más económico; un diseño a medida requiere más horas.'],
        ],
    ],
    [
        'h2'   => 'Cuándo conviene WordPress',
        'body' => [
            'WordPress es una buena elección cuando su equipo publica contenido con frecuencia, como noticias, artículos o productos, y necesita hacerlo sin depender de un programador. También cuando necesita funciones estándar que existen como plugins confiables, o cuando quiere una tienda en línea básica con WooCommerce.',
            'La condición es contratar o asignar mantenimiento: actualizaciones periódicas, copias de seguridad, monitoreo y revisión de plugins. Sin eso, el ahorro inicial se pierde en problemas posteriores.',
        ],
    ],
    [
        'h2'   => 'Cuándo conviene un sitio a medida',
        'body' => [
            'Un sitio a medida conviene cuando el contenido cambia poco, cuando la velocidad y la seguridad son prioritarias, cuando necesita lógica específica que ningún plugin resuelve bien o cuando el sitio debe integrarse con sistemas propios, por ejemplo un catálogo conectado a su ERP o un formulario que alimenta su CRM.',
            'Muchos sitios institucionales de empresas paraguayas, con una decena de páginas y un formulario de contacto, funcionan mejor como sitios a medida livianos que como instalaciones de WordPress con muchos plugins.',
        ],
    ],
    [
        'h2'   => 'El mito de que WordPress es gratis',
        'body' => [
            'El software WordPress es gratuito, pero el sitio no. Hay costos de hosting, dominio, tema premium en muchos casos, plugins pagos, diseño, carga de contenido y mantenimiento. Del mismo modo, un sitio a medida no es necesariamente caro: un sitio institucional simple bien planificado puede tener un costo comparable.',
            'Lo que determina el costo en ambos casos es la cantidad de páginas, el diseño, las funciones especiales, las integraciones y el mantenimiento acordado.',
        ],
    ],
    [
        'h2'   => 'Qué preguntar a su proveedor',
        'body' => [
            'Pregunte quién va a actualizar el contenido y cómo. Pregunte qué plugins se usarán y quién los mantendrá. Pregunte cuánto pesa la página principal y cuánto tarda en cargar en un celular con datos móviles. Pregunte si el sitio y el dominio quedarán a nombre de su empresa. Las respuestas le dirán más que la elección de tecnología.',
        ],
    ],
    [
        'h2'   => 'Si ya tiene un WordPress',
        'body' => [
            'Si su sitio actual está en WordPress y funciona bien, no hace falta cambiarlo por moda. Si está lento, desactualizado o con problemas recurrentes, evalúe primero un mantenimiento a fondo: actualizar, eliminar plugins innecesarios y optimizar imágenes. Si aun así no alcanza, puede considerar una migración.',
        ],
    ],
    [
        'h2'   => 'Una tercera vía: sitio estático con edición simple',
        'body' => [
            'Existen soluciones intermedias. Un sitio a medida puede incluir un panel sencillo para editar textos, noticias o precios, sin la complejidad de un WordPress con muchos plugins. También es posible usar WordPress solo como gestor de contenido y mostrar el sitio con una capa más liviana. Estas opciones combinan facilidad de edición con velocidad y menor mantenimiento, y conviene evaluarlas cuando ninguna de las dos alternativas clásicas encaja del todo.',
        ],
    ],
    [
        'h2'   => 'Cómo decidir en cinco preguntas',
        'body' => [
            '¿Con qué frecuencia cambiará el contenido? ¿Quién lo cambiará? ¿Necesita funciones especiales o integraciones? ¿Quién hará el mantenimiento técnico? ¿Qué presupuesto tiene para el primer año, incluido el mantenimiento? Si el contenido cambia a diario y lo edita personal no técnico, WordPress suele ganar. Si cambia poco y la prioridad es velocidad y seguridad, un sitio a medida suele ser mejor.',
            'Con esas respuestas por escrito, cualquier proveedor serio podrá recomendarle una opción justificada en lugar de la que prefiere vender.',
        ],
    ],
];

$faq = [
    ['q' => '¿WordPress es inseguro?', 'a' => 'No por sí mismo, pero por su popularidad es blanco de ataques automatizados. Con actualizaciones, pocos plugins confiables y copias de seguridad, el riesgo baja mucho.'],
    ['q' => '¿Puedo editar un sitio a medida sin programador?', 'a' => 'Solo si se construye un panel de administración para eso. Defínalo desde el inicio si lo necesita.'],
    ['q' => '¿Cuál es más rápido?', 'a' => 'Un sitio a medida liviano suele ser más rápido, aunque un WordPress bien optimizado también puede cargar rápido.'],
];

require ROOT_DIR . '/templates/article.php';
