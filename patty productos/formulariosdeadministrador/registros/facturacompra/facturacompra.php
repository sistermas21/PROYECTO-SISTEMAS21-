<?php
class facturacompra{
	//declaramos los atributos de la clase
	private $id;
	private $numerofactura;
	private $codpro;
	private $fechaventa;
	//definimos el valor de los atributos

function setId($id)
	{
		$this->id=$id;
	}
function setNumerofactura($numerofactura)
	{
		$this->numerofactura=$numerofactura;
	}
function setCod($codpro)
	{
		$this->codpro=$codpro;
	}
function setFechacompra($fechaventa)
	{
		$this->fechaventa=$fechaventa;
	}

	//extraemos valores definido en los atributos de la clase
function getId()
	{
		return $this->id;
	}
function getNumerofactura()
	{
		return $this->numerofactura;
	}
function getCod()
	{
		return $this->codpro;
	}
function getFechacompra()
	{
		return $this->fechaventa;
	}
}
?>