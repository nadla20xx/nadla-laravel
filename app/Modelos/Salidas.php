<?php

namespace App\Modelos;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salidas
 *
 * @ORM\Table(name="salidas", indexes={@ORM\Index(name="id_producto_salidas_productos_idx", columns={"id_producto"}), @ORM\Index(name="id_trabajador_salidas_trabajadores_idx", columns={"id_trabajador"}), @ORM\Index(name="id_persona_entrega_salida_personal_idx", columns={"id_persona_entrega"})})
 * @ORM\Entity
 */
class Salidas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_salida", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="id_producto", type="string", length=10, nullable=false)
     */
    private $idProducto = '';

    /**
     * @var string
     *
     * @ORM\Column(name="id_trabajador", type="string", length=10, nullable=false)
     */
    private $idTrabajador = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="precio_unitario", type="float", precision=10, scale=0, nullable=false)
     */
    private $precioUnitario = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="monto_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $montoTotal = '0';

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
     * @var integer
     *
     * @ORM\Column(name="id_persona_entrega", type="integer", nullable=false)
     */
    private $idPersonaEntrega = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", length=65535, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock_despues", type="integer", nullable=true)
     */
    private $stockDespues;


}

