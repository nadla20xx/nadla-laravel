<?php

namespace App\Modelos;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposVehiculos
 *
 * @ORM\Table(name="tipos_vehiculos")
 * @ORM\Entity
 */
class TiposVehiculos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_vehiculo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoVehiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_tipo_vehiculo", type="string", length=45, nullable=false)
     */
    private $nombreTipoVehiculo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '1';


}

