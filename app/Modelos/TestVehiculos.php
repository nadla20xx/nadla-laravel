<?php

namespace App\Modelos;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestVehiculos
 *
 * @ORM\Table(name="test_vehiculos")
 * @ORM\Entity
 */
class TestVehiculos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="placa", type="string", length=10, nullable=true)
     */
    private $placa;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=10, nullable=true)
     */
    private $modelo;


}

