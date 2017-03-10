<?php
/**
 * @see https://github.com/dotkernel/dot-controller-plugin-authentication/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/dot-controller-plugin-authentication/blob/master/LICENSE.md MIT License
 */

declare(strict_types = 1);

namespace Dot\Controller\Plugin\Authentication\Factory;

use Dot\Authentication\AuthenticationInterface;
use Dot\Controller\Plugin\Authentication\AuthenticationPlugin;
use Interop\Container\ContainerInterface;

/**
 * Class AuthenticationPluginFactory
 * @package Dot\Controller\Plugin\Authentication\Factory
 */
class AuthenticationPluginFactory
{
    /**
     * @param ContainerInterface $container
     * @return AuthenticationPlugin
     */
    public function __invoke(ContainerInterface $container)
    {
        return new AuthenticationPlugin($container->get(AuthenticationInterface::class));
    }
}
