<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-controller-plugin-authentication
 * @author: n3vrax
 * Date: 10/7/2016
 * Time: 7:06 PM
 */

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
