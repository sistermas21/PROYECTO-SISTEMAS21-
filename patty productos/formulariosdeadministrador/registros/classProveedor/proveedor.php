<?php

class proveedor {
private $id;
private $codigo;
private $nombre;
private $email;
private $telefono;
private $direccion;

public function setId($id){
     $this->id=$id;
}
public function setCodigo($codigo){
    $this->codigo=$codigo;
}
public function setNombre($nombre){
     $this->nombre=$nombre;
}
public function setEmail($email){
       $this->email=$email;
}
public function setTelefono($telefono){
     $this->telefono=$telefono;
}
public function setDireccion($direccion){
      $this->direccion=$direccion;
}

/*mmmmmmmmmmmmmm*/
public function getId(){
    return $this->id;
}
public function getCodigo(){
   return $this->codigo;
}
public function getNombre(){
   return $this->nombre;
}
public function getEmail(){
    return $this->email;
}
public function getTelefono(){
    return $this->telefono;
}
public function getDireccion(){
   return $this->direccion;
 }


}