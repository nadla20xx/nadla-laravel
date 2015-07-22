<?php

namespace App\Modelos;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conductores
 *
 * @ORM\Table(name="conductores")
 * @ORM\Entity
 */
class Conductores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_conductor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConductor;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_completo", type="string", length=45, nullable=false)
     */
    private $nombreCompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="brevete", type="string", length=45, nullable=true)
     */
    private $brevete;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=10, nullable=true)
     */
    private $categoria;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_vigencia_brevete", type="date", nullable=true)
     */
    private $finVigenciaBrevete;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=20, nullable=true)
     */
    private $cargo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     */
    private $estado = '1';


}

