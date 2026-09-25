<?php
/** Article body — index record in content/blog/50-ciudades.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'precio-chatbot-whatsapp';

$sections = [
    [
        'h2'   => 'Dos costos distintos: el desarrollo y la plataforma',
        'body' => [
            'El precio de un chatbot de WhatsApp tiene dos partes que conviene separar desde el '
                . 'principio. Una es el costo de construirlo: diseñar las conversaciones, programar las '
                . 'respuestas y conectarlo con sus sistemas. La otra es el costo de usar la plataforma '
                . 'oficial de WhatsApp Business de Meta, que cobra por las conversaciones o mensajes '
                . 'según su política vigente.',
            'Muchos presupuestos solo hablan de la primera parte, y el cliente descubre la segunda '
                . 'cuando llega la primera factura de Meta o del proveedor intermediario. Este artículo '
                . 'explica las dos para que pueda calcular el costo total antes de decidir.',
        ],
    ],
    [
        'h2'    => 'WhatsApp Business app, API y chatbot: no son lo mismo',
        'body'  => [
            'Antes de hablar de precios, conviene distinguir las herramientas, porque cada una tiene '
                . 'un costo y un alcance diferente.',
        ],
        'items' => [
            ['title' => 'WhatsApp Business (app)', 'text' => 'La aplicación gratuita para el celular, con respuestas rápidas, catálogo y mensajes automáticos básicos. Pensada para pocos usuarios.'],
            ['title' => 'WhatsApp Business Platform (API)', 'text' => 'El acceso oficial para empresas, que permite conectar WhatsApp a sistemas, varios agentes y automatizaciones. Tiene costo por uso.'],
            ['title' => 'Chatbot', 'text' => 'El programa que responde automáticamente usando la API: menús, preguntas frecuentes, toma de pedidos, derivación a una persona.'],
        ],
    ],
    [
        'h2'   => 'Qué mueve el precio del desarrollo',
        'body' => [
            'Un chatbot de menú —elija 1 para precios, 2 para horarios, 3 para hablar con alguien— es '
                . 'lo más sencillo de construir. Cuando el bot tiene que entender texto libre, '
                . 'consultar información de su sistema o completar una operación, el trabajo crece.',
            'Las integraciones son el factor más grande. Un bot que consulta el stock, toma un pedido '
                . 'y lo registra en su sistema, genera un link de pago o agenda un turno necesita '
                . 'conectarse con cada una de esas herramientas. Cuanto más ordenado esté su sistema, '
                . 'más fácil es.',
            'También cuenta la bandeja compartida: si varias personas de su equipo atienden por el '
                . 'mismo número, hace falta una herramienta para repartir conversaciones, ver el '
                . 'historial y medir tiempos de respuesta. Puede ser un CRM con WhatsApp integrado o '
                . 'una plataforma de atención.',
            'Por último, el uso de inteligencia artificial para entender preguntas abiertas suma '
                . 'costos de desarrollo y de uso del modelo, y requiere más pruebas para que el bot no '
                . 'responda cosas incorrectas.',
        ],
    ],
    [
        'h2'   => 'Rangos orientativos del mercado en guaraníes',
        'body' => [
            'Los siguientes rangos son orientativos del mercado paraguayo y deben confirmarse con un '
                . 'presupuesto; no son nuestros precios.',
            'Chatbot de menú con respuestas a preguntas frecuentes y derivación a una persona, sobre '
                . 'una plataforma ya existente: en el mercado suele verse desde alrededor de 2.000.000 '
                . 'hasta 6.000.000 de guaraníes de implementación.',
            'Chatbot con toma de pedidos o turnos y conexión a un sistema propio: con frecuencia entre '
                . '6.000.000 y 20.000.000 de guaraníes, según las integraciones.',
            'Soluciones con inteligencia artificial, varias integraciones y bandeja para un equipo de '
                . 'atención: desde 20.000.000 de guaraníes en adelante.',
            'A esto se suma el costo mensual de la plataforma de atención o CRM, si se usa uno, que '
                . 'suele cobrarse por usuario o por volumen.',
        ],
    ],
    [
        'h2'   => 'El costo de las conversaciones en la API de Meta',
        'body' => [
            'La WhatsApp Business Platform cobra según el tipo de mensaje o conversación: marketing, '
                . 'utilidad (por ejemplo, confirmaciones de pedido), autenticación y servicio al '
                . 'cliente. Las tarifas varían por país y Meta las actualiza periódicamente, por lo '
                . 'que conviene consultar el valor vigente en su documentación oficial antes de '
                . 'presupuestar.',
            'Como regla general, responder a un cliente que le escribió primero dentro de la ventana '
                . 'de atención suele ser lo más económico, mientras que los mensajes de marketing que '
                . 'usted inicia son los más caros. Un bot bien diseñado aprovecha esa diferencia: '
                . 'invita al cliente a escribir primero y usa plantillas pagas solo cuando aportan '
                . 'valor.',
            'Si trabaja con un proveedor intermediario, pregunte si le traslada el costo de Meta tal '
                . 'cual o si le agrega un margen por mensaje.',
        ],
    ],
    [
        'h2'    => 'Cuándo conviene un chatbot y cuándo no',
        'body'  => [
            'Un chatbot rinde cuando recibe muchas consultas repetidas. Si su equipo responde veinte '
                . 'veces por día lo mismo, automatizarlo libera tiempo. Si recibe pocas consultas y '
                . 'cada una es distinta, la app gratuita con respuestas rápidas puede alcanzar.',
        ],
        'items' => [
            ['title' => 'Conviene', 'text' => 'Muchas consultas repetidas, pedidos o turnos fuera de horario, varios agentes en un mismo número.'],
            ['title' => 'Puede esperar', 'text' => 'Pocas consultas diarias, cada una distinta, atendidas por una sola persona.'],
            ['title' => 'Primero ordenar', 'text' => 'Si sus precios o stock no están en un sistema, el bot no tiene de dónde leer; empiece por ahí.'],
        ],
    ],
    [
        'h2'   => 'Cómo pedir un presupuesto claro',
        'body' => [
            'Haga una lista de las diez preguntas que más recibe por WhatsApp y marque cuáles podría '
                . 'responder una máquina. Indique cuántas personas atienden el número, en qué horario, '
                . 'y con qué sistemas debería conectarse el bot.',
            'Con esa lista, pida que el presupuesto separe la implementación, el costo mensual de la '
                . 'plataforma y el costo estimado de mensajes de Meta. Así puede comparar ofertas y '
                . 'calcular el costo total del primer año.',
        ],
    ],
];

$faq = [
    [
        'q' => '¿Puedo tener un chatbot con la app gratuita de WhatsApp Business?',
        'a' => 'La app permite mensajes de bienvenida, de ausencia y respuestas rápidas, pero no un chatbot completo con integraciones. Para eso se usa la API oficial.',
    ],
    [
        'q' => '¿Meta cobra por cada mensaje?',
        'a' => 'La plataforma cobra según el tipo de mensaje o conversación y el país, con reglas que Meta actualiza. Consulte las tarifas vigentes en su documentación oficial.',
    ],
    [
        'q' => '¿Mi número actual sirve para la API?',
        'a' => 'En general se puede migrar, pero un número registrado en la API deja de usarse en la app común del celular en las mismas condiciones. Conviene planificarlo antes.',
    ],
];

require ROOT_DIR . '/templates/article.php';
