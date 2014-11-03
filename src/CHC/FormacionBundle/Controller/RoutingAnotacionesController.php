<?php

namespace CHC\FormacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/")
 */
class RoutingAnotacionesController extends Controller
{
    /**
     * @Route("/ejemplo1", name="chc_formacion_routinganotaciones_ejemplo1")
     */
    public function ejemplo1Action()
    {
        return $this->render('CHCFormacionBundle:Routing:ejemplo1.html.twig', array());
    }
    
    /**
     * @Route("/ejemplo2", name="chc_formacion_routinganotaciones_ejemplo2")
     */
    public function ejemplo2Action()
    {
        return $this->render('CHCFormacionBundle:Routing:ejemplo2.html.twig', array('nombre'=>'Carlos'));
    }
    
    /**
     * @Route("/ejemplo3/{nombre}", name="chc_formacion_routinganotaciones_ejemplo3")
     */
    public function ejemplo3Action($nombre)
    {
        return $this->render('CHCFormacionBundle:Routing:ejemplo2.html.twig', array('nombre'=>$nombre));
    }
    
    /**
     * @Route("/ejemplo4/{param}", defaults={"param" = 1 }, name="chc_formacion_routinganotaciones_ejemplo4")
     */
    public function ejemplo4Action($param)
    {
        $mensaje = "Estoy en la acción 4 y el valor del parámetro es ".$param;
        return $this->render('CHCFormacionBundle:Routing:mensaje.html.twig', array('mensaje'=>$mensaje));
    }
    
    /**
     * @Route("/ejemplo5/{param}", requirements={"param" = "\d+"}, defaults={"param" = 1 }, name="chc_formacion_routinganotaciones_ejemplo5")
     */
    public function ejemplo5Action($param)
    {
        $mensaje = "Estoy en la acción 5 y el valor del parámetro es ".$param;
        return $this->render('CHCFormacionBundle:Routing:mensaje.html.twig', array('mensaje'=>$mensaje));
    }
    
    /**
     * @Route("/ejemplo5/{param}", name="chc_formacion_routinganotaciones_ejemplo6")
     */
    public function ejemplo6Action($param)
    {
        $mensaje = "Estoy en la acción 6 y el valor del parámetro es ".$param;
        return $this->render('CHCFormacionBundle:Routing:mensaje.html.twig', array('mensaje'=>$mensaje));
    }
}
