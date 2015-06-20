<?php
// cremos la clase SeccionControlador la cual va a heredar de la clase Seccion
class categoriaControlador extends categoria{
  //creamos un metodo dentro de la clasa SeccionControlador LE PASAMOS PARAMETROS
	public function guardarDatos($con,$objCategoria){
    // hacemos la sentencia sql para guardar los datos
    $variableSql="INSERT INTO categoria";
    $variableSql.="(id,codigo,nombre)";
    $variableSql.="VALUES(";
    $variableSql.="'".$objCategoria[0]."',";
    $variableSql.="'".$objCategoria[1]."',";
    $variableSql.="'".$objCategoria[2]."');";
              return consultaA($con,$variableSql);


   }
   
}