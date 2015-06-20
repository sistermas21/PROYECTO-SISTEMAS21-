<?php
class categoria{
	// declaramos los atributos de la clas seccion estos son privados
	private $id;
	private $codigo;
	private $nombre;
	//definimos el valor de los atributos
    public function setId($id){
		$this->id=$id;
	}
	public function setCodigo($codigo){
		$this->codigo=$codigo;
	}
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	//extraemos valor definido
    public function getId(){
     return $this->id;
	}
	public function getCodigo(){
		return $this->codigo;
	}
	public function getNombre(){
		return $this->nombre;
	}



}