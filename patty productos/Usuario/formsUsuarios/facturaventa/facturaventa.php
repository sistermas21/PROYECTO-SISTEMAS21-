<?php
class facturaventa{

	//declaramos los atributos de la clase

	private $id;

	private $numerofactura;

	private $fechaventa;

	private $vendedor;
	private $nu;

	//definimos el valor de los atributos

function setId($id){

		$this->id=$id;
}

function setNumerofactura($numerofactura){

		$this->numerofactura=$numerofactura;
}

function setFechacompra($fechaventa){

		$this->fechaventa=$fechaventa;
}

function setVendedor($vendedor){

		$this->vendedor=$vendedor;
}
function setnu($nu){

		$this->nu=$nu;
}

	//extraemos valores definido en los atributos de la clase
function getId(){

		return $this->id;
}

function getNumerofactura(){

		return $this->numerofactura;
}

function getFechacompra(){

		return $this->fechaventa;
}

function getVendedor(){

		return $this->vendedor;
}
function getnu(){

		return $this->nu;
}
}
?>