<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Abies\CatalogoColectivoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity
 * 
 * @author carlos
 */
class Producto {
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=40, nullable=false)
     */
    private $categoria;
    
}
