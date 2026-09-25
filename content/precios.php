<?php
/**
 * Pricing plans, rendered by /precios/index.php. A price is shown only when the
 * business has supplied a real figure: until then the plan lists its scope and
 * the CTA is a quotation. Never a placeholder number, never a foreign currency.
 *
 *   name      string   plan name
 *   audience  string   who it is for, one line
 *   price     ?int     price per month in whole units of the market's currency
 *                      (fmt_money() formats it), or null to hide the figure
 *   includes  string[] scope lines
 *   featured  bool     highlighted card
 *   example   bool     seed record only — see content/services.php
 */

declare(strict_types=1);

return [
    [
        'name'     => 'Landing page',
        'audience' => 'Para un negocio o una campaña que necesita una sola página que convierta.',
        'price'    => null,
        'includes' => [
            'Una página con secciones de servicio, beneficios, preguntas y contacto',
            'Diseño adaptado al celular y carga rápida',
            'Botón de WhatsApp con mensaje prearmado y formulario de consulta',
            'Configuración de dominio, SSL y Google Analytics',
            'Textos base redactados a partir de su información',
        ],
        'featured' => false,
    ],
    [
        'name'     => 'Sitio institucional',
        'audience' => 'Para empresas y profesionales que necesitan presentar varios servicios.',
        'price'    => null,
        'includes' => [
            'Varias páginas: inicio, servicios, nosotros, contacto y las que su negocio necesite',
            'Panel para editar textos, fotos y noticias usted mismo',
            'SEO básico: títulos, descripciones, sitemap y perfil de Google',
            'Formularios conectados a su correo, WhatsApp o CRM',
            'Correo corporativo con su dominio',
        ],
        'featured' => true,
    ],
    [
        'name'     => 'Tienda online / integración de pagos',
        'audience' => 'Para comercios que quieren vender y cobrar en línea en Paraguay.',
        'price'    => null,
        'includes' => [
            'Catálogo de productos con categorías, stock y variantes',
            'Carrito y cobro con una pasarela de pagos local',
            'Opciones de envío, retiro y pago contra entrega',
            'Avisos de pedido por correo y WhatsApp',
            'Capacitación para cargar productos y gestionar pedidos',
        ],
        'featured' => false,
    ],
    [
        'name'     => 'Software a medida / SIFEN',
        'audience' => 'Para empresas que necesitan un sistema propio o facturación electrónica integrada.',
        'price'    => null,
        'includes' => [
            'Relevamiento del proceso y propuesta de alcance por escrito',
            'Sistema web a medida: usuarios, permisos, reportes',
            'Integración con la facturación electrónica SIFEN de la DNIT',
            'Integraciones con WhatsApp, pasarelas de pago u otros sistemas',
            'Documentación y entrega del código a su nombre',
        ],
        'featured' => false,
    ],
    [
        'name'     => 'Mantenimiento mensual',
        'audience' => 'Para sitios y sistemas en producción que necesitan quien los cuide.',
        'price'    => null,
        'includes' => [
            'Actualizaciones de plataforma, plugins y dependencias',
            'Copias de seguridad y monitoreo de disponibilidad',
            'Cambios menores de contenido cada mes',
            'Soporte por WhatsApp en horario laboral',
            'Informe mensual de lo realizado',
        ],
        'featured' => false,
    ],
];
