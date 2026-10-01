<?php
/** Phase "infra": lead records for hosting and correo corporativo. */

declare(strict_types=1);

return [
    'services' => [
        'hosting' => [
            'menuLabel'    => 'Hosting y dominios',
            'need'         => 'soporte',
            'tier'         => 'C',
            'whatsappText' => 'Hola, quisiera consultar por hosting y dominio .com.py para mi empresa.',
            'nextStep'     => [
                'Te respondemos dentro del siguiente día hábil.',
                'Tené a mano tu dominio actual y el nombre de tu proveedor de hosting, si ya tenés uno.',
            ],
            'crmTag'       => 'hosting',
            'nextLink'     => [
                'path'  => '/guias/como-registrar-dominio-com-py/',
                'label' => 'Mientras tanto, leé cómo registrar un .com.py',
            ],
        ],
        'correo-corporativo' => [
            'menuLabel'    => 'Correo corporativo',
            'need'         => 'soporte',
            'tier'         => 'C',
            'whatsappText' => 'Hola, quisiera consultar por correo corporativo con Google Workspace.',
            'nextStep'     => [
                'Te respondemos dentro del siguiente día hábil.',
                'Tené a mano la cantidad de usuarios y quién administra hoy el dominio.',
            ],
            'crmTag'       => 'correo-corporativo',
            'nextLink'     => [
                'path'  => '/guias/google-workspace-precios-paraguay/',
                'label' => 'Mientras tanto, compará los planes',
            ],
        ],
    ],
    'tools' => [],
];
