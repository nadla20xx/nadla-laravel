<?php

namespace App\Modelos;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trabajadores
 *
 * @ORM\Table(name="trabajadores")
 * @ORM\Entity
 */
class Trabajadores
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_trabajador", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTrabajador = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_completo", type="string", length=150, nullable=false)
     */
    private $nombreCompleto = '';

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=45, nullable=true)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_interno", type="string", length=10, nullable=true)
     */
    private $codigoInterno;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=10, nullable=true)
     */
    private $dni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="date", nullable=false)
     */
    private $fechaIngreso = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_edicion", type="date", nullable=false)
     */
    private $fechaEdicion = '0000-00-00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '1';


}

