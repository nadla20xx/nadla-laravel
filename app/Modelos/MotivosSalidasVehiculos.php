<?php

namespace App\Modelos;

use Doctrine\ORM\Mapping as ORM;

/**
 * MotivosSalidasVehiculos
 *
 * @ORM\Table(name="motivos_salidas_vehiculos")
 * @ORM\Entity
 */
class MotivosSalidasVehiculos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_motivo_salida", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMotivoSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_motivo", type="string", length=100, nullable=false)
     */
    private $nombreMotivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '1';


}

