<?php
/** Article body — index record in content/blog/50-ciudades.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'cuanto-cuesta-una-app-en-paraguay';

$sections = [
    [
        'h2'   => 'Primero: qué tipo de app necesitás',
        'body' => [
            'Cuando alguien pregunta cuánto cuesta una app en Paraguay, puede estar pensando en cosas '
                . 'muy distintas: una aplicación para que tus clientes hagan pedidos desde el celular, '
                . 'un sistema interno para que tus vendedores carguen visitas, o una plataforma con '
                . 'usuarios, pagos y panel de administración. El costo cambia mucho entre una y otra.',
            'También importa dónde corre. Una aplicación web se abre desde el navegador y funciona en '
                . 'cualquier celular o computadora. Una app nativa se instala desde Google Play o App '
                . 'Store. Una app híbrida usa una sola base de código para Android e iOS. Cada camino '
                . 'tiene costos de desarrollo, publicación y mantenimiento diferentes.',
            'Para muchas pymes, una aplicación web bien hecha —que se puede agregar a la pantalla de '
                . 'inicio— resuelve lo mismo que una app nativa a una fracción del costo. Vale la pena '
                . 'preguntarte si realmente necesitás estar en las tiendas de aplicaciones.',
        ],
    ],
    [
        'h2'    => 'Qué encarece el desarrollo de una app',
        'body'  => [
            'El costo de una app se explica casi siempre por la cantidad de pantallas y funciones, y '
                . 'por lo que hay detrás: el servidor, la base de datos y las integraciones.',
        ],
        'items' => [
            ['title' => 'Usuarios y permisos', 'text' => 'Registro, inicio de sesión, recuperación de contraseña y roles distintos suman trabajo en cada pantalla.'],
            ['title' => 'Panel de administración', 'text' => 'Casi toda app necesita un panel web para cargar productos, ver pedidos o gestionar usuarios.'],
            ['title' => 'Pagos', 'text' => 'Integrar una pasarela local o billeteras electrónicas requiere desarrollo, pruebas y certificación.'],
            ['title' => 'Integraciones', 'text' => 'Conectar con tu sistema de facturación, stock o CRM depende de qué tan abiertos sean esos sistemas.'],
            ['title' => 'Funciones del teléfono', 'text' => 'Notificaciones, GPS, cámara o funcionamiento sin conexión agregan complejidad.'],
            ['title' => 'Plataformas', 'text' => 'Publicar en Android e iOS implica dos revisiones de tienda y más pruebas en dispositivos.'],
        ],
    ],
    [
        'h2'   => 'Qué hace subir o bajar el costo',
        'body' => [
            'Una aplicación web sencilla, con pocas pantallas, un formulario de pedidos o reservas y un '
                . 'panel básico es el escenario más liviano. El costo sube cuando se suman usuarios con '
                . 'cuentas, pagos en línea, notificaciones y un panel de administración completo, y '
                . 'más todavía si se publica en Android e iOS.',
            'Las plataformas con varios tipos de usuarios —por ejemplo clientes, repartidores y '
                . 'comercios—, integraciones múltiples y operación en tiempo real son proyectos de otra '
                . 'escala y suelen construirse por etapas.',
            'El costo también varía con el equipo, la experiencia y el nivel de detalle del diseño. Lo '
                . 'importante es comparar presupuestos sobre el mismo alcance escrito.',
            'No publicamos un precio fijo porque depende del alcance: después de una conversación de '
                . '30 minutos te pasamos un presupuesto en guaraníes, por escrito.',
        ],
    ],
    [
        'h2'   => 'Los costos después del lanzamiento',
        'body' => [
            'Una app no termina cuando se publica. Hay costos mensuales de servidor y base de datos, '
                . 'que crecen con la cantidad de usuarios. Las tiendas de aplicaciones cobran sus '
                . 'propias cuentas de desarrollador; consultá el valor vigente en Google Play y en el '
                . 'programa de desarrolladores de Apple.',
            'Además, Android e iOS se actualizan cada año y a veces obligan a adaptar la app para que '
                . 'siga publicada. Las librerías que usa el código también reciben actualizaciones de '
                . 'seguridad. Un presupuesto de mantenimiento anual evita que la app quede '
                . 'desactualizada y termine retirada de la tienda.',
            'Por último, está el costo de hacer crecer el uso: una app que nadie descarga no genera '
                . 'retorno. Reservá presupuesto para comunicarla a tus clientes.',
        ],
    ],
    [
        'h2'   => 'Cómo reducir el riesgo: empezar por un producto mínimo',
        'body' => [
            'La forma más segura de invertir en una app es empezar por lo mínimo que resuelve el '
                . 'problema principal y probarlo con usuarios reales. Si tu objetivo es recibir '
                . 'pedidos, la primera versión puede ser solo catálogo, pedido y aviso por WhatsApp, '
                . 'sin cuentas de usuario ni pagos.',
            'Con esa versión en uso, las siguientes funciones se deciden con datos: qué piden los '
                . 'clientes, dónde abandonan, qué se usa y qué no. Muchas ideas que parecían '
                . 'imprescindibles resultan innecesarias, y el presupuesto se destina a lo que sí '
                . 'mueve el negocio.',
            'Trabajar por etapas también te da control: cada entrega tiene un alcance y un presupuesto '
                . 'cerrados, y vos decidís si continuás, ajustás o frenás.',
        ],
    ],
    [
        'h2'    => 'Qué preparar antes de pedir presupuesto',
        'body'  => [
            'Un buen pedido de presupuesto ahorra reuniones y hace que las cotizaciones sean '
                . 'comparables. No hace falta presentar documentos técnicos, pero sí tener ideas claras.',
        ],
        'items' => [
            ['title' => 'El problema que resuelve', 'text' => 'Una o dos frases sobre qué cambia en tu negocio cuando la app existe.'],
            ['title' => 'Quiénes la usan', 'text' => 'Clientes, empleados, proveedores: cada tipo de usuario es un conjunto de pantallas.'],
            ['title' => 'Las funciones indispensables', 'text' => 'Separá lo que necesitás el primer día de lo que puede esperar.'],
            ['title' => 'Los sistemas con los que se conecta', 'text' => 'Facturación, stock, CRM, pasarelas de pago.'],
            ['title' => 'Ejemplos que te gustan', 'text' => 'Apps que usás y te parecen claras ayudan a definir el diseño.'],
        ],
    ],
    [
        'h2'   => 'Web, híbrida o nativa: una regla práctica',
        'body' => [
            'Si tus usuarios la van a usar de vez en cuando —hacer un pedido, consultar un estado— una '
                . 'aplicación web suele alcanzar y es la opción más económica de construir y mantener.',
            'Si la van a usar a diario, necesitan notificaciones confiables o funciones del teléfono '
                . 'como la cámara o el GPS en segundo plano, una app híbrida publicada en las tiendas '
                . 'tiene sentido. El desarrollo nativo separado para Android e iOS se justifica en '
                . 'casos puntuales de alto rendimiento o funciones muy específicas del dispositivo.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Es más barato hacer una app web que una app nativa?',
        'a' => 'En general sí, porque se construye y se mantiene una sola versión que funciona en cualquier dispositivo. Para muchas pymes es la opción adecuada para empezar.',
    ],
    [
        'q' => '¿Cuánto tarda desarrollar una app?',
        'a' => 'Depende del alcance: una primera versión acotada se entrega antes que una plataforma completa. Trabajar por etapas permite tener algo en uso desde temprano, y el plazo se acuerda por escrito en el presupuesto.',
    ],
    [
        'q' => '¿La app queda a mi nombre?',
        'a' => 'Debería. Pedí por contrato que el código, las cuentas de las tiendas y los servidores queden a nombre de tu empresa.',
    ],
];

require ROOT_DIR . '/templates/article.php';
