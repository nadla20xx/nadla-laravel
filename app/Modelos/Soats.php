<?php

namespace App\Modelos;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soats
 *
 * @ORM\Table(name="soats")
 * @ORM\Entity
 */
class Soats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_soat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSoat;

    /**
     * @var string
     *
     * @ORM\Column(name="aseguradora", type="string", length=45, nullable=false)
     */
    private $aseguradora;

    /**
     * @var string
     *
     * @ORM\Column(name="certificado", type="string", length=45, nullable=true)
     */
    private $certificado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vigencia", type="date", nullable=false)
     */
    private $vigencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vencimiento", type="date", nullable=false)
     */
    private $vencimiento;

    /**
     * @var float
     *
     * @ORM\Column(name="costo", type="float", precision=10, scale=0, nullable=true)
     */
    private $costo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_vehiculo", type="integer", nullable=false)
     */
    private $idVehiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="poliza", type="string", length=30, nullable=true)
     */
    private $poliza;


}

