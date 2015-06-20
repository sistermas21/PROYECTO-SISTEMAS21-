
<style type="text/css">
#color{
  color: red;
  font-weight: bold;
  font-size: 19px;
}
legend#linea{
  background-color: green;
  height: 5px;
}
a#lin{
  text-decoration: none;
  font-size: 20px;
  font-weight: bold;
}
a#lin:hover{
  text-decoration: none;
  font-size: 20px;
  text-shadow: 5px 4px 5px #78d7f6;

}
 </style>


<?php
$dsn='mysql:dbname=bdinventario;host=127.0.0.1';
$usuario='root';
$clave='';
try{
	$con=new PDO($dsn,$usuario,$clave);

}catch (PDOException $e) {
            print "<div id='dialogo' title='Error Salida' style='display: none;'>";
            print '<p>Error Generado:</p>';
            print '<p><span class="label label-warning glyphicon glyphicon-remove">Codigo: </span></p>';
            print $e->getCode();
            print '<p><span class="label label-warning glyphicon glyphicon-remove">Mensage de Error: </span></p>';
            print $e->getMessage();
            print "</div>";
        }  



function consultaA($coneccion,$sql){
 $ejecutor=$coneccion;
	$msgok=null;
	$msgerror=null;
	try{
		$condicion=strstr(trim($sql)," ",TRUE);
    switch($condicion)
    {
  case "INSERT":
    $msgerror="No se ha Podido Insertar los Datos";
    $msgok="Datos Insertados";
    break;
    case "DELETE":
    $msgerror="No se ha Podido Eliminar los Datos";
    $msgok="Datos Eliminados";
    break;
    case "UPDATE":
    $msgerror="No se ha Podido Actualizar los Datos";
    $msgok="Datos Actualizados";
    break;
    default:
    $msgerror="Es posible que no use un estandar de consulta SQL";
    break;
}
    $ejecutor->beginTransaction();
    $fila=$ejecutor->exec($sql);
    $ejecutor->commit();
    if ($fila==0){
      $msgok=$msgerror."<br>No existe coincidencia para realizar la accion sobre los";
    }
    return $msgok."  "."Correctamente";


	}catch(Exception $exc){
		$ejecutor->rollBack();
		return $msgerror.":(<br>".$exc->getMessage();
      }


}









function consultaM($coneccion,$sql){
 $ejecutor=$coneccion;
  $msgok=null;
  $msgerror=null;
  try{
    $condicion=strstr(trim($sql)," ",TRUE);
    switch($condicion)
    {
  case "INSERT":
    $msgerror="No se ha Podido Insertar los Datos";
    $msgok="Datos Insertados";
    break;
    case "DELETE":
    $msgerror="No se ha Podido Eliminar los Datos";
    $msgok="Datos Eliminados";
    break;
    case "UPDATE":
    $msgerror="No se ha Podido Actualizar los Datos";
    $msgok="Datos Actualizados";
    break;
    default:
    $msgerror="Es posible que no use un estandar de consulta SQL";
    break;
}
    $ejecutor->beginTransaction();
    $fila=$ejecutor->exec($sql);
    $ejecutor->commit();
    if ($fila==0){
      $msgok=$msgerror."<br>No existe coincidencia para realizar la accion sobre los";
    }
    return $msgok."  "."Correctamente";


  }catch(Exception $exc){
    $ejecutor->rollBack();
    return $msgerror.":(<br>".$exc->getMessage();
      }


}


 function consultaD($coneccion, $sql,$modo=2,$presentacion=FALSE)
    {
        $ejecutor = $coneccion;
        $manejador = trim($sql);
        $devolucion = "";
        try {       
            $datos = $ejecutor->query($manejador);
            $datos->setFetchMode($modo);
            if($presentacion == TRUE){
                $devolucion .="<table border=1>";
                foreach ($datos->fetchAll() as $registros) {
                    $devolucion.="<tr>";
                    foreach ($registros as $valor) {
                        $devolucion.="<td>".$valor."</td>";
                    }
                    $devolucion.="</tr>";
                }
                $devolucion .="</table>";
            }else{
                $contenedor = $datos->fetchAll(); 
                $devolucion=$contenedor;
                
                
            }
       
        } catch (Exception $exc) {
            return  "No se pudieron Consultar los Datos<br />".$exc->getMessage();  
        }        
        return $devolucion;
        
    }
       
function imprimetabla($objeto,$form,$estilo="table",$editar=0){
  if ($objeto != NULL) {
    if (is_array($objeto)) {
      $tabla = "<table class=\"$estilo\">";
      $tabla .= "<tr class='info'>";
      foreach (array_keys($objeto[0]) as $value) {
        $tabla .= "<th>";
        $tabla .= $value;
        $tabla .= "</th>";
      }
      if($editar != "0"){
        $tabla .= "<td>Modificar</td>";
        $tabla .= "<td>Eliminar</td>";

      }
      $tabla .= "</tr><tr>";
      foreach ($objeto as $datos) {
        foreach ($datos as $registro) {
          $tabla .= "<td>";
          $tabla .= $registro;
          $tabla .="</td>";
        }
        if($editar != "0" ){
          $tabla .=  "<td><a href=".$form."Buscar.php?id=".$datos['Numero'].">Modificar</a></td>";
          $tabla .=  "<td><a href=".$form."Borrar.php?id=".$datos['Numero'].">Eliminar</a></td>";
      

        }
        $tabla .="</tr>";
      }

        $tabla .="</table>";
    } else {
      $tabla = "No hay registros que mostrar ";
    }
    
  } else {
    $tabla = "No hay registros Existentes";
  }
  
return $tabla;
}

/*AQUIIIIIIIIIIIIII*/
function imprimeSelect($objeto,$form,$estilo="table",$editar=0){
  if ($objeto != NULL) {
    if (is_array($objeto)) {
      $tabla = "<table class=\"$estilo\">";
      $tabla .= "<tr class='info'>";
      foreach (array_keys($objeto[0]) as $value) {
        $tabla .= "<th>";
        $tabla .= $value;
        $tabla .= "</th>";
      }
      if($editar != "0"){
        $tabla .= "<td>Modificar</td>";
        $tabla .= "<td>Eliminar</td>";

      }
      $tabla .= "<p style='color:green; font-size:20px; text-shadow: 5px 4px 5px #78d7f6; font-weight:bold;'><b>______________________________Resultado De Busqueda______________________________</b></p>"."</tr><tr>";
      foreach ($objeto as $datos) {
        foreach ($datos as $registro) {
          $tabla .= "<td>";
          $tabla .= $registro;
          $tabla .="</td>";
        }
        if($editar != "0" ){
          $tabla .=  "<td><a href=".$form."Buscar.php?id=".$datos['Numero'].">Modificar</a></td>";
          $tabla .=  "<td><a href=".$form."Borrar.php?id=".$datos['Numero'].">Eliminar</a></td>";
      

        }
        $tabla .="</tr>";
      }

        $tabla .="</table>";
    } else {
      $tabla = "";
    }
    
  } else {
    $tabla = "<img height='50px' width='50px' src='../../img/advert.png'>"."<p id='color'>No Hay Registros Existentes</p>"."<br>";
  }
  
return $tabla;
}


?>



 

