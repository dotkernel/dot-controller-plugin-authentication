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

use Dot\Authentication\AuthenticationInterface;
use Dot\Authentication\Identity\IdentityInterface;
use Dot\Controller\Plugin\PluginInterface;

/**
 * Class AuthenticationPlugin
 * @package Dot\Controller\Plugin\Authentication
 */
class AuthenticationPlugin implements PluginInterface
{
    /** @var  AuthenticationInterface */
    protected $authentication;

    /**
     * AuthenticationPlugin constructor.
     * @param AuthenticationInterface $authentication
     */
    public function __construct(AuthenticationInterface $authentication)
    {
        $this->authentication = $authentication;
    }

    /**
     * @return bool
     */
    public function hasIdentity(): bool
    {
        return $this->authentication->hasIdentity();
    }

    /**
     * @return \Dot\Authentication\Identity\IdentityInterface
     */
    public function getIdentity(): IdentityInterface
    {
        return $this->authentication->getIdentity();
    }

    /**
     * @return mixed
     */
    public function clearIdentity()
    {
        return $this->authentication->clearIdentity();
    }
}
