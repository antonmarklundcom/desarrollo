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
            'Lo útil no es encontrar el número más bajo, sino entender qué está pagando. Este '
                . 'artículo explica qué factores mueven el precio, da rangos orientativos del mercado '
                . 'paraguayo y le deja una lista de preguntas para comparar presupuestos con criterio.',
        ],
    ],
    [
        'h2'    => 'Los factores que más mueven el precio',
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
        'h2'   => 'Rangos orientativos del mercado en guaraníes',
        'body' => [
            'Los rangos que siguen son orientativos del mercado paraguayo, surgen de ofertas públicas '
                . 'y conversaciones habituales con clientes, y deben confirmarse con un presupuesto. '
                . 'No son nuestros precios ni una tarifa oficial; sirven para ubicar si un presupuesto '
                . 'está en un orden de magnitud razonable.',
            'Landing page de una sola página, con plantilla adaptada y formulario: en el mercado suele '
                . 'verse desde alrededor de 1.500.000 hasta 4.000.000 de guaraníes.',
            'Sitio institucional de cinco a diez páginas, con panel para editar y SEO básico: '
                . 'habitualmente entre 4.000.000 y 12.000.000 de guaraníes.',
            'Tienda online con catálogo, pasarela de pagos local y envíos: con frecuencia entre '
                . '8.000.000 y 25.000.000 de guaraníes, según la cantidad de productos y las '
                . 'integraciones.',
            'Portales y sitios a medida con base de datos, usuarios o integraciones con otros '
                . 'sistemas: desde alrededor de 20.000.000 de guaraníes en adelante, sin techo fijo.',
            'Si recibe una oferta muy por debajo de estos rangos, pregunte qué queda afuera. Si recibe '
                . 'una muy por encima, pida que le detallen las horas o entregables que la justifican.',
        ],
    ],
    [
        'h2'   => 'Costos que no aparecen en el primer presupuesto',
        'body' => [
            'El precio del desarrollo es solo una parte. Una página web tiene costos recurrentes que '
                . 'conviene conocer desde el principio para no llevarse sorpresas al año siguiente.',
            'El dominio .com.py se renueva cada año ante el NIC Paraguay; consulte el valor vigente. '
                . 'Un dominio .com internacional también tiene costo anual. El hosting —el servidor '
                . 'donde vive la página— se paga mensual o anualmente, y su precio depende del tráfico '
                . 'y de la plataforma.',
            'Si el sitio usa WordPress o plugins pagos, hay licencias que renovar. Y cualquier sitio '
                . 'necesita actualizaciones de seguridad y copias de respaldo: puede hacerlo usted, '
                . 'contratar un plan de mantenimiento o aceptar el riesgo de que algo falle sin aviso.',
            'Finalmente, está el costo de su propio tiempo: reunir fotos, revisar textos y aprobar '
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
                . 'claridad qué hace su negocio y para quién, que tenga un camino directo a WhatsApp o '
                . 'al formulario y que usted sea dueño del dominio, del hosting y de los accesos.',
        ],
    ],
    [
        'h2'    => 'Preguntas para comparar presupuestos',
        'body'  => [
            'Antes de firmar, pida que cada proveedor responda por escrito estas preguntas. Las '
                . 'respuestas dicen más que el número final.',
        ],
        'items' => [
            ['title' => '¿A nombre de quién quedan el dominio y el hosting?', 'text' => 'Deberían quedar a su nombre, con sus accesos.'],
            ['title' => '¿Cuántas rondas de cambios incluye?', 'text' => 'Un número concreto evita discusiones al final.'],
            ['title' => '¿Quién escribe los textos y consigue las fotos?', 'text' => 'Si le toca a usted, calcule ese tiempo.'],
            ['title' => '¿Puedo editar el contenido yo mismo?', 'text' => 'Pida ver el panel antes de contratar.'],
            ['title' => '¿Qué pasa después de la entrega?', 'text' => 'Garantía, soporte y mantenimiento, con su costo.'],
            ['title' => '¿Qué no está incluido?', 'text' => 'La respuesta a esta pregunta suele ser la más reveladora.'],
        ],
    ],
    [
        'h2'   => 'Cómo pedir un presupuesto que sirva',
        'body' => [
            'Cuanto más claro sea su pedido, más exacto será el presupuesto. Cuente a qué se dedica '
                . 'su negocio, qué quiere lograr con la página —más consultas, vender en línea, dar '
                . 'información a clientes—, qué secciones imagina y si ya tiene dominio, logo y fotos.',
            'Con esa información, cualquier proveedor serio puede devolverle una propuesta con '
                . 'alcance, plazos y precio en guaraníes. Si compara tres propuestas armadas sobre el '
                . 'mismo pedido, la diferencia de precio va a tener una explicación, y va a poder '
                . 'decidir con datos en lugar de intuición.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Por qué hay páginas web tan baratas en el mercado?',
        'a' => 'Suelen usar una plantilla sin adaptar, textos genéricos y hosting compartido del proveedor. Pueden servir para empezar, pero pregunte a nombre de quién queda el dominio y qué cuesta cada cambio.',
    ],
    [
        'q' => '¿El dominio y el hosting están incluidos en el precio?',
        'a' => 'Depende del proveedor. Muchas veces el primer año está incluido y luego se renueva aparte. Pida que se detalle por escrito.',
    ],
    [
        'q' => '¿Cuánto demora hacer una página web?',
        'a' => 'Una landing puede estar en una o dos semanas si el material está listo; un sitio institucional o una tienda, varias semanas. El factor que más demora suele ser reunir textos y fotos.',
    ],
];

require ROOT_DIR . '/templates/article.php';
