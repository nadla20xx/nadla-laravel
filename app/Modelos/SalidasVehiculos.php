<?php

namespace App\Modelos;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalidasVehiculos
 *
 * @ORM\Table(name="salidas_vehiculos")
 * @ORM\Entity
 */
class SalidasVehiculos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_salidas_vehiculo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSalidasVehiculo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_vehiculo", type="integer", nullable=false)
     */
    private $idVehiculo;

    /**
     * @var integer
     *
     * @ORM\Column(name="motivo_salida", type="integer", nullable=false)
     */
    private $motivoSalida;

    /**
     * @var integer
     *
     * @ORM\Column(name="kilometraje", type="integer", nullable=true)
     */
    private $kilometraje;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_salida", type="date", nullable=false)
     */
    private $fechaSalida;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", length=65535, nullable=true)
     */
    private $observacion;

    /**
     * @var float
     *
     * @ORM\Column(name="costo", type="float", precision=10, scale=0, nullable=false)
     */
    private $costo = '1';


}

