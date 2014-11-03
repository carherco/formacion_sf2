<?php

namespace CHC\FormacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RoutingYMLController extends Controller
{
    public function ejemplo1Action()
    {
        return $this->render('CHCFormacionBundle:Routing:ejemplo1.html.twig', array());
    }
    
    public function ejemplo2Action()
    {
        return $this->render('CHCFormacionBundle:Routing:ejemplo2.html.twig', array('nombre'=>'Carlos'));
    }
    
    public function ejemplo3Action($nombre)
    {
        return $this->render('CHCFormacionBundle:Routing:ejemplo2.html.twig', array('nombre'=>$nombre));
    }
    
    public function ejemplo4Action($param)
    {
        $mensaje = "Estoy en la acción 4 y el valor del parámetro es ".$param;
        return $this->render('CHCFormacionBundle:Routing:mensaje.html.twig', array('mensaje'=>$mensaje));
    }
    
    public function ejemplo5Action($param)
    {
        $mensaje = "Estoy en la acción 5 y el valor del parámetro es ".$param;
        return $this->render('CHCFormacionBundle:Routing:mensaje.html.twig', array('mensaje'=>$mensaje));
    }
    
    public function ejemplo6Action($param)
    {
        $mensaje = "Estoy en la acción 6 y el valor del parámetro es ".$param;
        return $this->render('CHCFormacionBundle:Routing:mensaje.html.twig', array('mensaje'=>$mensaje));
    }
}
