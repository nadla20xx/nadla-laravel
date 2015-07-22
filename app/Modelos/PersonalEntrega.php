<?php

namespace App\Modelos;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalEntrega
 *
 * @ORM\Table(name="personal_entrega", indexes={@ORM\Index(name="id_trabajador_personal_entrega_idx", columns={"id_trabajador"})})
 * @ORM\Entity
 */
class PersonalEntrega
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_persona_entrega", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPersonaEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="id_trabajador", type="string", length=10, nullable=false)
     */
    private $idTrabajador = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '1';


}

