<?php

namespace App\Modelos;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehiculos
 *
 * @ORM\Table(name="vehiculos")
 * @ORM\Entity
 */
class Vehiculos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vehiculo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVehiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="placa", type="string", length=10, nullable=false)
     */
    private $placa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_vehiculo", type="integer", nullable=false)
     */
    private $idTipoVehiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=20, nullable=true)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=45, nullable=true)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=45, nullable=true)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=30, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=5, nullable=true)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=45, nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="motor", type="string", length=45, nullable=true)
     */
    private $motor;

    /**
     * @var string
     *
     * @ORM\Column(name="tarjeta_propiedad", type="string", length=30, nullable=true)
     */
    private $tarjetaPropiedad;

    /**
     * @var string
     *
     * @ORM\Column(name="propietario", type="string", length=45, nullable=true)
     */
    private $propietario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '1';

    public function getSerie(){
        return $this->serie.'*********';
    }
}

