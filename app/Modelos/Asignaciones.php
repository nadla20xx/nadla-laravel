<?php

namespace App\Modelos;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignaciones
 *
 * @ORM\Table(name="asignaciones")
 * @ORM\Entity
 */
class Asignaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_asignacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAsignacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_conductor", type="integer", nullable=false)
     */
    private $idConductor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_vehiculo", type="integer", nullable=false)
     */
    private $idVehiculo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_asignacion", type="date", nullable=false)
     */
    private $fechaAsignacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_desasignacion", type="date", nullable=true)
     */
    private $fechaDesasignacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '1';


}

