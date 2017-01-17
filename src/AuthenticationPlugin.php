<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-controller-plugin-authentication
 * @author: n3vrax
 * Date: 10/7/2016
 * Time: 7:05 PM
 */

namespace Dot\Controller\Plugin\Authentication;

use Dot\Authentication\AuthenticationInterface;
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
    public function hasIdentity()
    {
        return $this->authentication->hasIdentity();
    }

    /**
     * @return \Dot\Authentication\Identity\IdentityInterface
     */
    public function getIdentity()
    {
        return $this->authentication->getIdentity();
    }
}
