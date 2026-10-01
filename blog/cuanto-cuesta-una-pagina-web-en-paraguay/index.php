<?php
/** Article body — index record in content/blog/50-ciudades.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'cuanto-cuesta-una-pagina-web-en-paraguay';

$sections = [
    [
        'h2'   => 'Por qué no hay un precio único',
        'body' => [
            'Preguntar cuánto cuesta una página web en Paraguay es como preguntar cuánto cuesta una '
                . 'casa: depende del tamaño, de los materiales y de quién la construye. En el mercado '
                . 'conviven ofertas muy baratas armadas con una plantilla en una tarde y proyectos a '
                . 'medida que llevan semanas de trabajo. Las dos cosas se llaman "página web", pero no '
                . 'resuelven lo mismo.',
            'Lo útil no es encontrar el número más bajo, sino entender qué estás pagando. Este '
                . 'artículo explica qué factores mueven el costo y te deja una lista de preguntas para '
                . 'comparar presupuestos con criterio.',
        ],
    ],
    [
        'h2'    => 'Los factores que más mueven el costo',
        'body'  => [
            'Cada uno de estos puntos puede duplicar o reducir a la mitad un presupuesto. Conviene '
                . 'tenerlos claros antes de pedir cotizaciones, porque así todos los proveedores '
                . 'cotizan lo mismo.',
        ],
        'items' => [
            ['title' => 'Cantidad de páginas y secciones', 'text' => 'Una landing de una sola pantalla no requiere el mismo trabajo que un sitio con veinte páginas de servicios.'],
            ['title' => 'Diseño a medida o plantilla', 'text' => 'Adaptar una plantilla es más rápido; un diseño propio lleva más horas de diseño y maquetación.'],
            ['title' => 'Quién escribe los textos', 'text' => 'Redactar contenidos pensados para Google y para vender es un trabajo aparte del diseño.'],
            ['title' => 'Funciones especiales', 'text' => 'Tienda, reservas, área de clientes, calculadoras o integraciones suman desarrollo.'],
            ['title' => 'Idiomas', 'text' => 'Una versión en portugués o inglés implica traducir y mantener dos sitios.'],
            ['title' => 'Plataforma', 'text' => 'WordPress, un constructor visual o código a medida tienen costos iniciales y de mantenimiento distintos.'],
        ],
    ],
    [
        'h2'   => 'Qué hace subir o bajar el costo',
        'body' => [
            'Una landing de una sola página, con plantilla adaptada y formulario, es lo más liviano. Un '
                . 'sitio institucional de varias páginas, con panel para editar y SEO básico, requiere '
                . 'más diseño, más contenido y más pruebas.',
            'Una tienda online con catálogo, pasarela de pagos local y envíos crece con la cantidad de '
                . 'productos y las integraciones. Los portales y sitios a medida, con base de datos, '
                . 'usuarios o integraciones con otros sistemas, son los de mayor alcance y no tienen un '
                . 'techo fijo.',
            'Si recibís una oferta muy por debajo del resto, preguntá qué queda afuera. Si recibís una '
                . 'muy por encima, pedí que te detallen las horas o entregables que la justifican.',
            'No publicamos un precio fijo porque depende del alcance: después de una conversación de '
                . '30 minutos te pasamos un presupuesto en guaraníes, por escrito.',
        ],
    ],
    [
        'h2'   => 'Costos que no aparecen en el primer presupuesto',
        'body' => [
            'El precio del desarrollo es solo una parte. Una página web tiene costos recurrentes que '
                . 'conviene conocer desde el principio para no llevarse sorpresas al año siguiente.',
            'El dominio .com.py se renueva cada año ante el NIC Paraguay; consultá el valor vigente. '
                . 'Un dominio .com internacional también tiene costo anual. El hosting —el servidor '
                . 'donde vive la página— se paga mensual o anualmente, y su precio depende del tráfico '
                . 'y de la plataforma.',
            'Si el sitio usa WordPress o plugins pagos, hay licencias que renovar. Y cualquier sitio '
                . 'necesita actualizaciones de seguridad y copias de respaldo: podés hacerlo vos, '
                . 'contratar un plan de mantenimiento o aceptar el riesgo de que algo falle sin aviso.',
            'Finalmente, está el costo de tu propio tiempo: reunir fotos, revisar textos y aprobar '
                . 'entregas. Un proyecto que se demora por falta de material suele costar más en '
                . 'oportunidades perdidas que en horas de desarrollo.',
        ],
    ],
    [
        'h2'   => 'Barato, caro y lo que realmente importa',
        'body' => [
            'Una página económica puede ser la decisión correcta para un negocio que empieza y solo '
                . 'necesita aparecer en Google con su número de WhatsApp. El problema aparece cuando la '
                . 'oferta barata trae condiciones ocultas: el dominio queda a nombre del proveedor, no '
                . 'hay acceso al panel, o cada cambio de texto se cobra aparte.',
            'Del otro lado, pagar más no garantiza nada si el proyecto no tiene objetivos claros. Una '
                . 'web muy linda que carga lento en datos móviles o que no explica qué vende en la '
                . 'primera pantalla no genera consultas.',
            'Lo que realmente importa es que la página cargue rápido en el celular, que diga con '
                . 'claridad qué hace tu negocio y para quién, que tenga un camino directo a WhatsApp o '
                . 'al formulario y que vos seas dueño del dominio, del hosting y de los accesos.',
        ],
    ],
    [
        'h2'    => 'Preguntas para comparar presupuestos',
        'body'  => [
            'Antes de firmar, pedí que cada proveedor responda por escrito estas preguntas. Las '
                . 'respuestas dicen más que el número final.',
        ],
        'items' => [
            ['title' => '¿A nombre de quién quedan el dominio y el hosting?', 'text' => 'Deberían quedar a tu nombre, con tus accesos.'],
            ['title' => '¿Cuántas rondas de cambios incluye?', 'text' => 'Un número concreto evita discusiones al final.'],
            ['title' => '¿Quién escribe los textos y consigue las fotos?', 'text' => 'Si te toca a vos, calculá ese tiempo.'],
            ['title' => '¿Puedo editar el contenido yo mismo?', 'text' => 'Pedí ver el panel antes de contratar.'],
            ['title' => '¿Qué pasa después de la entrega?', 'text' => 'Garantía, soporte y mantenimiento, con su costo.'],
            ['title' => '¿Qué no está incluido?', 'text' => 'La respuesta a esta pregunta suele ser la más reveladora.'],
        ],
    ],
    [
        'h2'   => 'Cómo pedir un presupuesto que sirva',
        'body' => [
            'Cuanto más claro sea tu pedido, más exacto será el presupuesto. Contá a qué se dedica '
                . 'tu negocio, qué querés lograr con la página —más consultas, vender en línea, dar '
                . 'información a clientes—, qué secciones imaginás y si ya tenés dominio, logo y fotos.',
            'Con esa información, cualquier proveedor serio puede devolverte una propuesta con '
                . 'alcance, plazos y presupuesto en guaraníes. Si comparás tres propuestas armadas sobre el '
                . 'mismo pedido, la diferencia de monto va a tener una explicación, y vas a poder '
                . 'decidir con datos en lugar de intuición.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Por qué hay páginas web tan baratas en el mercado?',
        'a' => 'Suelen usar una plantilla sin adaptar, textos genéricos y hosting compartido del proveedor. Pueden servir para empezar, pero preguntá a nombre de quién queda el dominio y qué cuesta cada cambio.',
    ],
    [
        'q' => '¿El dominio y el hosting están incluidos en el precio?',
        'a' => 'Depende del proveedor. Muchas veces el primer año está incluido y luego se renueva aparte. Pedí que se detalle por escrito.',
    ],
    [
        'q' => '¿Cuánto demora hacer una página web?',
        'a' => 'Depende del alcance: una landing lleva menos que un sitio institucional o una tienda. El factor que más demora suele ser reunir textos y fotos, y el plazo se acuerda por escrito en el presupuesto.',
    ],
];

require ROOT_DIR . '/templates/article.php';
