<?php

namespace CHC\FormacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CHC\FormacionBundle\Form\Type\ProductoType;

/**
 * @Route("/")
 */
class FormulariosController extends Controller
{
    /**
     * @Route("/ejemplo1", name="chc_formacion_formularios_ejemplo1")
     */
    public function ejemplo1aAction()
    {
        $formulario = $this->createForm(new ProductoType());
        return $this->render('CHCFormacionBundle:Formularios:ejemplo1.html.twig', array('formulario'=>$formulario->createView()));
    }
    
    
    
    
    
}

