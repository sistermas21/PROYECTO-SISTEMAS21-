<?php
// cremos la clase SeccionControlador la cual va a heredar de la clase Seccion
class productoControlador extends producto{
  //creamos un metodo dentro de la clasa SeccionControlador LE PASAMOS PARAMETROS
    public function guardarDatos($con,$objProducto){
    // hacemos la sentencia sql para guardar los datos
    $variableSql="INSERT INTO producto";
    $variableSql.="(id,codigo,nombre,codigomarca,codigocategoria,codigoproveedor,
                    preciocompra,cantidad,precioventa)";
    $variableSql.="VALUES(";
    $variableSql.="'".$objProducto[0]."',";
    $variableSql.="'".$objProducto[1]."',";
    $variableSql.="'".$objProducto[2]."',";
    $variableSql.="'".$objProducto[3]."',";
    $variableSql.="'".$objProducto[4]."',";
    $variableSql.="'".$objProducto[5]."',";
    $variableSql.="'".$objProducto[6]."',";
    $variableSql.="'".$objProducto[7]."',";
    $variableSql.="'".$objProducto[8]."');";
              return consultaA($con,$variableSql);

   }
   public function modificarDatos($con,$objProducto) {
    $variableSql = "UPDATE producto SET  ";
    $variableSql .= "codigo ='".$objProducto[1]."'";
    $variableSql .= ",nombre ='".$objProducto[2]."'";
    $variableSql .= ",codigomarca ='".$objProducto[3]."'";
    $variableSql .= ",codigocategoria ='".$objProducto[4]."'";
    $variableSql .= ",codigoproveedor ='".$objProducto[5]."'";
    $variableSql .= ",preciocompra ='".$objProducto[6]."'";
    $variableSql .= ",cantidad ='".$objProducto[7]."'";
    $variableSql .= ",precioventa ='".$objProducto[8]."'";
    $variableSql .= "WHERE id = ".$objProducto[0].";";
    return consultaA($con,$variableSql);  
}
   
}