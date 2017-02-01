<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-controller-plugin-authentication
 * @author: n3vrax
 * Date: 10/7/2016
 * Time: 7:05 PM
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
