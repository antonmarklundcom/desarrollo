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
                'Le respondemos dentro del siguiente día hábil.',
                'Tenga a mano su dominio actual y el nombre de su proveedor de hosting, si ya tiene uno.',
            ],
            'crmTag'       => 'hosting',
            'nextLink'     => [
                'path'  => '/guias/como-registrar-dominio-com-py/',
                'label' => 'Mientras tanto, lea cómo registrar un .com.py',
            ],
        ],
        'correo-corporativo' => [
            'menuLabel'    => 'Correo corporativo',
            'need'         => 'soporte',
            'tier'         => 'C',
            'whatsappText' => 'Hola, quisiera consultar por correo corporativo con Google Workspace.',
            'nextStep'     => [
                'Le respondemos dentro del siguiente día hábil.',
                'Tenga a mano la cantidad de usuarios y quién administra hoy el dominio.',
            ],
            'crmTag'       => 'correo-corporativo',
            'nextLink'     => [
                'path'  => '/guias/google-workspace-precios-paraguay/',
                'label' => 'Mientras tanto, compare los planes',
            ],
        ],
    ],
    'tools' => [],
];
