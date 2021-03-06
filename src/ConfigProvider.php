<?php
/**
 * @see https://github.com/dotkernel/dot-controller-plugin-authentication/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/dot-controller-plugin-authentication/blob/master/LICENSE.md MIT License
 */

declare(strict_types = 1);

namespace Dot\Controller\Plugin\Authentication;

use Dot\Controller\Plugin\Authentication\Factory\AuthenticationPluginFactory;

/**
 * Class ConfigProvider
 * @package Dot\Controller\Plugin\Authentication
 */
class ConfigProvider
{
    /**
     * @return array
     */
    public function __invoke(): array
    {
        return [
            'dot_controller' => [
                'plugin_manager' => [
                    'factories' => [
                        'authentication' => AuthenticationPluginFactory::class,
                    ],
                ],
            ],
        ];
    }
}
