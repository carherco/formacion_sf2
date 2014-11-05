<?php

namespace CHC\FormacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SecurityController extends Controller
{

    public function loginAction()
    {
        $last_username = "";
        return $this->render('CHCFormacionBundle:Security:formlogin.html.twig', array('last_username'=>$last_username));
    }
    
}

