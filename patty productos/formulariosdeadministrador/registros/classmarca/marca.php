<?php
class marca{
//declaramos los atributos del objeto
private $id;
private $codigo;
private $nombre;
//definimos valores
function setId($id){
	$this->id=$id;
}
function setCodigo($codigo){
	$this->codigo=$codigo;
}
function setNombre($nombre){
	$this->nombre=$nombre;
}
//cogemos valores
function getId(){
	return $this->id;
}
function getCodigo(){
	return $this->codigo;
}
function getNombre(){
	return $this->nombre;
}

}
?>