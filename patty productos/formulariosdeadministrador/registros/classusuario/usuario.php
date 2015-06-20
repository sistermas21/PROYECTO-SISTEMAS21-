<?php
class usuario{
	//declaramos los atributos de la clase
	private $id;
	private $carnet;
	private $nombre;
	private $apellido;
	private $sexo;
	private $fechaNac;
	private $telefono;
	private $direccion;
	private $user;
	private $contra;
	//definimos lod valores de los atributos de la clase
function setId($id)
	{
		$this->id=$id;
	}
function setCarnet($carnet)
	{
		$this->carnet=$carnet;
	}
function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}
function setApellido($apellido)
	{
		$this->apellido=$apellido;
	}
function setSexo($sexo)
	{
		$this->sexo=$sexo;
	}
function setFechaNac($fechaNac)
	{
		$this->fechaNac=$fechaNac;
	}
function setTelefono($telefono)
	{
		$this->telefono=$telefono;
	}
function setDireccion($direccion)
	{
		$this->direccion=$direccion;
	}
function setUser($user)
	{
		$this->user=$user;
	}
	function setContra($contra)
	{
		$this->contra=$contra;
	}

	//extraemos los valores defenidos en la clase
function getId()
	{
		return $this->id;
	}
function getCarnet()
	{
		return $this->carnet;
	}
function getNombre()
	{
		return $this->nombre;
	}
function getApellido()
	{
	    return $this->apellido;
	}
function getSexo()
	{
		return $this->sexo;
	}
function getFechaNac()
	{
		return $this->fechaNac;
	}
function getTelefono()
	{
		return $this->telefono;
	}
function getDireccion()
	{
		return $this->direccion;
	}
function getUser()
	{
		return $this->user;
	}
	function getContra()
	{
		return $this->contra;
	}
}
?>