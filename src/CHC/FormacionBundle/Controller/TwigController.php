<?php

namespace CHC\FormacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/")
 */
class TwigController extends Controller
{
    /**
     * @Route("/ejemplo1a", name="chc_formacion_twig_ejemplo1a")
     */
    public function ejemplo1aAction()
    {
        return $this->render('CHCFormacionBundle:Twig:ejemplo1a.html.twig', array());
    }
    
    /**
     * @Route("/ejemplo1b", name="chc_formacion_twig_ejemplo1b")
     */
    public function ejemplo1bAction()
    {
        return $this->render('CHCFormacionBundle:Twig:ejemplo1b.html.twig', array());
    }
    
    /**
     * @Route("/ejemplo2", name="chc_formacion_twig_ejemplo2")
     */
    public function ejemplo2Action()
    {
        $title = "Listado de frutas";
        $frutas = array(
            array('nombre'=>'pera'),
            array('nombre'=>'manzana'),
            array('nombre'=>'fresa'),
        );
        return $this->render('CHCFormacionBundle:Twig:ejemplo2.html.twig', array('lista'=>$frutas,'title'=>$title));
    }
    
    /**
     * @Route("/ejemplo3a", name="chc_formacion_twig_ejemplo3a")
     */
    public function ejemplo3aAction()
    {
        $title = "Listado de frutas";
        $frutas = array(
            array('nombre'=>'pera'),
            array('nombre'=>'manzana'),
            array('nombre'=>'fresa'),
        );
        return $this->render('CHCFormacionBundle:Twig:ejemplo3a.html.twig', array('lista'=>$frutas,'title'=>$title));
    }
    
    /**
     * @Route("/ejemplo3b", name="chc_formacion_twig_ejemplo3b")
     */
    public function ejemplo3bAction()
    {
        $title = "Listado de lacteos";
        $lacteos = array(
            array('nombre'=>'leche'),
            array('nombre'=>'queso'),
        );
        return $this->render('CHCFormacionBundle:Twig:ejemplo3b.html.twig', array('lista'=>$lacteos,'title'=>$title));
    }
    
    /**
     * @Route("/ejemplo3c", name="chc_formacion_twig_ejemplo3c")
     */
    public function ejemplo3cAction()
    {
        $title = "Listado de pasta";
        $pasta = array(
            array('nombre'=>'macarrones'),
            array('nombre'=>'spaghetis'),
            array('nombre'=>'fideos'),
        );
        return $this->render('CHCFormacionBundle:Twig:ejemplo3c.html.twig', array('lista'=>$pasta,'title'=>$title));
    }
    
    /**
     * @Route("/ejemplo4a", name="chc_formacion_twig_ejemplo4a")
     */
    public function ejemplo4aAction()
    {
        $categoria = "frutas";
        $title = "Listado de frutas";
        $frutas = array(
            array('id'=>1,'nombre'=>'pera'),
            array('id'=>2,'nombre'=>'manzana'),
            array('id'=>3,'nombre'=>'fresa'),
        );
        return $this->render('CHCFormacionBundle:Twig:ejemplo4a.html.twig', array('lista'=>$frutas,'categoria'=>$categoria,'title'=>$title));
    }
    
    /**
     * @Route("/ejemplo4b", name="chc_formacion_twig_ejemplo4b")
     */
    public function ejemplo4bAction()
    {
        $categoria = "lacteos";
        $title = "Listado de lacteos";
        $lacteos = array(
            array('id'=>4,'nombre'=>'leche'),
            array('id'=>5,'nombre'=>'queso'),
        );
        return $this->render('CHCFormacionBundle:Twig:ejemplo4b.html.twig', array('lista'=>$lacteos,'categoria'=>$categoria,'title'=>$title));
    }
    
    /**
     * @Route("/ejemplo4c", name="chc_formacion_twig_ejemplo4c")
     */
    public function ejemplo4cAction()
    {
        $categoria = "pasta";
        $pasta = array('macarrones','spaghetis','fideos');

        return $this->render('CHCFormacionBundle:Twig:ejemplo4c.html.twig', array('lista'=>$pasta,'categoria'=>$categoria));
    }
    
    
    
}

