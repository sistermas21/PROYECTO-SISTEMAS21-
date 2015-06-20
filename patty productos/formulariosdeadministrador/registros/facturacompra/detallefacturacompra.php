<?php
class Detallecompra{
	//declaramos los atributos de la clase
	private $id;
	private $numerofactura;
	private $codpro;
	private $cantidad;
	private $descuento;
	private $importe;
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
function setCantidad($cantidad)
	{
		$this->cantidad=$cantidad;
	}
function setDescuento($descuento)
	{
		$this->descuento=$descuento;
	}
function setImporte($importe)
	{
		$this->importe=$importe;
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
function getCodpro()
	{
		return $this->codpro;
	}
function getCantidad()
	{
		return $this->cantidad;
	}
function getDescuento()
	{
		return $this->descuento;
	}
function getImporte()
	{
		return $this->importe;
	}




}
?>