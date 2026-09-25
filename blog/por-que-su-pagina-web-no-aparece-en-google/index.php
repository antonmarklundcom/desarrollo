<?php
/** Blog article (phase: blog). Index record in content/blog/60-blog.php. */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'por-que-su-pagina-web-no-aparece-en-google';

$sections = [
    [
        'h2'   => 'Una pregunta frecuente',
        'body' => [
            'Una empresa invierte en una página web nueva, la publica y, semanas después, busca su nombre o su rubro en Google y no aparece. Es una situación frecuente y casi siempre tiene explicación. Las causas pueden ser técnicas, de contenido o de competencia, y cada una tiene una solución distinta.',
            'Este artículo recorre las razones más comunes por las que una página web no aparece en Google, en el orden en que conviene revisarlas.',
        ],
    ],
    [
        'h2'   => 'Paso 1: verificar si Google conoce su sitio',
        'body' => [
            'Lo primero es saber si Google indexó su sitio, es decir, si lo tiene registrado. Una forma rápida es buscar en Google el operador site seguido de su dominio. Si no aparece ningún resultado, Google todavía no indexó el sitio o algo lo está impidiendo.',
            'La herramienta indicada para diagnosticar es Google Search Console, un servicio gratuito donde se verifica la propiedad del sitio, se envía el mapa del sitio y se ven los errores de indexación. Si su sitio no está registrado allí, ese es el primer paso.',
        ],
    ],
    [
        'h2'   => 'Paso 2: revisar bloqueos técnicos',
        'body' => [
        ],
        'items' => [
            ['title' => 'Indicación de no indexar', 'text' => 'Una etiqueta o configuración que pide a Google no mostrar la página, a veces olvidada después del desarrollo.'],
            ['title' => 'Archivo robots.txt restrictivo', 'text' => 'Reglas que impiden a Google rastrear el sitio.'],
            ['title' => 'Sitio muy nuevo', 'text' => 'Google puede tardar desde días hasta varias semanas en indexar un sitio recién publicado.'],
            ['title' => 'Errores del servidor', 'text' => 'Páginas que responden con errores o tardan demasiado.'],
            ['title' => 'Contenido invisible', 'text' => 'Texto cargado solo dentro de imágenes o de formas que Google no interpreta bien.'],
            ['title' => 'Dominios duplicados', 'text' => 'Versiones con y sin www, o con y sin https, que compiten entre sí.'],
        ],
    ],
    [
        'h2'   => 'Paso 3: aparece por su nombre pero no por su rubro',
        'body' => [
            'Si al buscar el nombre de su empresa aparece, pero no al buscar lo que ofrece, por ejemplo un servicio en su ciudad, el problema ya no es técnico sino de relevancia y competencia. Google muestra primero las páginas que considera más útiles para cada búsqueda, y otras empresas pueden tener páginas más completas sobre ese tema.',
            'Para competir, cada servicio importante necesita una página propia con contenido específico: qué incluye, a quién sirve, cómo funciona, preguntas frecuentes. Una única página de inicio con una lista de servicios difícilmente posicione para búsquedas concretas.',
        ],
    ],
    [
        'h2'   => 'Paso 4: contenido que responde lo que se busca',
        'body' => [
            'El contenido debe estar escrito para las personas que buscan, con las palabras que ellas usan. Si sus clientes buscan un término y su sitio usa otro, Google tendrá menos razones para mostrarlo. Investigue cómo se busca su servicio, incluya esos términos de forma natural en títulos y textos, y responda las preguntas que un cliente se haría antes de contratar.',
            'Evite copiar textos de otros sitios o de proveedores. El contenido duplicado aporta poco y puede perjudicar.',
        ],
    ],
    [
        'h2'   => 'Paso 5: velocidad y experiencia en celulares',
        'body' => [
            'La mayoría de las búsquedas se hacen desde celulares. Un sitio lento, con textos pequeños o botones difíciles de tocar ofrece una mala experiencia y eso influye en su visibilidad. Revise cuánto tarda en cargar su página principal con datos móviles, optimice imágenes pesadas y elimine complementos innecesarios.',
        ],
    ],
    [
        'h2'   => 'Paso 6: el perfil de empresa en Google',
        'body' => [
            'Para búsquedas locales, como un servicio en Asunción o en Ciudad del Este, Google muestra un mapa con empresas cercanas. Esos resultados dependen del Perfil de Empresa en Google, que se gestiona por separado del sitio web. Un perfil completo, con categoría correcta, horarios, fotos y reseñas reales, aumenta la visibilidad local. El sitio web y el perfil deben tener el mismo nombre, dirección y teléfono.',
        ],
    ],
    [
        'h2'   => 'Paso 7: enlaces y reputación',
        'body' => [
            'Google también considera cuántos sitios confiables enlazan al suyo. Directorios empresariales serios, cámaras de comercio, proveedores, medios locales y socios comerciales pueden aportar enlaces legítimos. Evite comprar enlaces masivos o participar en esquemas artificiales; pueden perjudicar más que ayudar.',
        ],
    ],
    [
        'h2'   => 'Cuánto tarda en verse un resultado',
        'body' => [
            'El posicionamiento orgánico no es inmediato. Corregir problemas técnicos puede reflejarse en semanas; mejorar la posición en búsquedas competidas suele llevar meses de trabajo constante en contenido y reputación. Si necesita visibilidad inmediata, los anuncios pagos son una alternativa complementaria, no un reemplazo.',
        ],
    ],
    [
        'h2'   => 'Qué determina el costo de mejorar el SEO',
        'body' => [
            'El costo de un trabajo de SEO depende del estado técnico del sitio, la cantidad de páginas y servicios, la competencia en su rubro, la necesidad de crear contenido nuevo y la gestión del perfil local. Un diagnóstico inicial permite priorizar lo que más impacto tendrá antes de invertir en todo.',
        ],
    ],
    [
        'h2'   => 'Revisar la estructura del sitio',
        'body' => [
            'Además del contenido, importa cómo están organizadas las páginas. Un menú claro, enlaces internos entre páginas relacionadas y direcciones legibles ayudan a Google a entender de qué trata cada sección. Cada página debería tener un título único y una descripción que resuma su contenido. Páginas huérfanas, sin enlaces desde otras partes del sitio, suelen tardar más en indexarse o no indexarse nunca.',
        ],
    ],
    [
        'h2'   => 'Medir el progreso',
        'body' => [
            'Search Console muestra para qué búsquedas aparece su sitio, en qué posición promedio y cuántos clics recibe. Revise esos datos cada mes para ver si las correcciones dan resultado y qué páginas conviene reforzar. Sin medición, es imposible saber qué cambio funcionó.',
        ],
    ],
    [
        'h2'   => 'Errores que conviene evitar',
        'body' => [
            'Repetir palabras clave de forma forzada, crear muchas páginas casi idénticas para distintas ciudades o comprar reseñas son prácticas que pueden perjudicar el sitio. Es mejor avanzar con contenido útil y constante.',
        ],
    ],
];

$faq = [
    ['q' => '¿Cuánto tarda Google en indexar una página nueva?', 'a' => 'Puede ir de días a varias semanas. Registrar el sitio en Google Search Console y enviar el mapa del sitio ayuda a acelerar el proceso.'],
    ['q' => '¿Pagar anuncios mejora el posicionamiento orgánico?', 'a' => 'No directamente. Los anuncios dan visibilidad inmediata, pero el posicionamiento orgánico depende de contenido, técnica y reputación.'],
    ['q' => '¿Por qué aparezco en el mapa pero no en los resultados?', 'a' => 'El mapa depende del Perfil de Empresa en Google y los resultados orgánicos del sitio web. Conviene trabajar ambos.'],
];

require ROOT_DIR . '/templates/article.php';
