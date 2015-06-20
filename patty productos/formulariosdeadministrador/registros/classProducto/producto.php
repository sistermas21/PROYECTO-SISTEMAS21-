<?php
class producto{
    // declaramos los atributos de la clas seccion estos son privados
    private $id;
    private $codigo;
    private $nombre;
    private $marca;
    private $categoria;
    private $proveedor;
    private $precioC;
    private $cantidad;
    private $precioV;

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
    public function setMarca($marca){
        $this->marca=$marca;
    }
    public function setCategoria($categoria){
        $this->categoria=$categoria;
    }
    public function setProveedor($proveedor){
        $this->proveedor=$proveedor;
    }
    public function setPrecioC($precioc){
        $this->precioc=$precioc;
    }
    public function setCantidad($cantidad){
        $this->cantidad=$cantidad;
    }
    public function setPrecioV($preciov){
        $this->preciov=$preciov;
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
    public function getMarca(){
        return $this->marca;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getProveedor(){
        return $this->proveedor;
    }
    public function getPrecioC(){
        return $this->precioc;
    }
        public function getCantidad(){
        return $this->cantidad;
    }
    public function getPrecioV(){
        return $this->preciov;
    }
   


}