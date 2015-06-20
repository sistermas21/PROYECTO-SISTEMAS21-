<?php

class marcaControlador extends marca{
    
   
    public function guardarDatos($con,$objMarca) {
        $variableSql = "INSERT INTO  marca ";
        $variableSql .= "(id,codigo,nombre)";
        $variableSql .= "VALUES(";
        $variableSql.="'".$objMarca[0]."',";
        $variableSql.="'".$objMarca[1]."',";
        $variableSql.="'".$objMarca[2]."');";
        
        
      return consultaA($con, $variableSql);
    }
    
    
   
}


