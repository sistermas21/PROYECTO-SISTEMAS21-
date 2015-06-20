<?php
class admin{
	//declaramos los atributos de la clase
	private $id;
	private $user;
	private $contra;
	
	//definimos lod valores de los atributos de la clase
function setId($id)
	{
		$this->id=$id;
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
function getUser()
	{
		return $this->user;
	}
function getContra()
	{
		return$this->contra;
	}

}
?>