<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace CHC\FormacionBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\SimpleFormAuthenticatorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
/**
 * Description of WSAuthenticator
 *
 * @author carlos
 */
class WSAuthenticator implements SimpleFormAuthenticatorInterface
{
    private $encoderFactory;

    public function __construct(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function authenticateToken(TokenInterface $token, UserProviderInterface $userProvider, $providerKey)
    {
        var_dump($token->getUsername());
        var_dump($token->getCredentials());
        echo "Aquí hay que hacer la autenticación con web services"; exit;
    
    
//        try {
//            $user = $userProvider->loadUserByUsername($token->getUsername());
//        } catch (UsernameNotFoundException $e) {
//            throw new AuthenticationException('Invalid username or password');
//        }
//
//        $encoder = $this->encoderFactory->getEncoder($user);
//        $passwordValid = $encoder->isPasswordValid(
//            $user->getPassword(),
//            $token->getCredentials(),
//            $user->getSalt()
//        );
//
//        if ($passwordValid) {
//            $currentHour = date('G');
//            if ($currentHour < 14 || $currentHour > 16) {
//                throw new AuthenticationException(
//                    'You can only log in between 2 and 4!',
//                    100
//                );
//            }
//
//            return new UsernamePasswordToken(
//                $user,
//                $user->getPassword(),
//                $providerKey,
//                $user->getRoles()
//            );
//        }
//
//        throw new AuthenticationException('Invalid username or password');
    }

    public function supportsToken(TokenInterface $token, $providerKey)
    {
        return $token instanceof UsernamePasswordToken
            && $token->getProviderKey() === $providerKey;
    }

    public function createToken(Request $request, $username, $password, $providerKey)
    {
        
        return new UsernamePasswordToken($username, $password, $providerKey);
    }
}
