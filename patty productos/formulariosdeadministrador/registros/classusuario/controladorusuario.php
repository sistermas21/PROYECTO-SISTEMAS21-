<?php
class usuarioControlador extends usuario { 
    public function guardarDatos($con,$objUsuario) {
        $variableSql = "INSERT INTO usuario";
        $variableSql .= "(id,carnet,nombre,apellido,sexo,fecha_nacimiento,telefono,direccion,usuario,contrasena)";
        $variableSql .= "VALUES(";
        $variableSql.="'".$objUsuario[0]."',";
        $variableSql.="'".$objUsuario[1]."',";
        $variableSql.="'".$objUsuario[2]."',";
        $variableSql.="'".$objUsuario[3]."',";
        $variableSql.="'".$objUsuario[4]."',";
        $variableSql.="'".$objUsuario[5]."',";
        $variableSql.="'".$objUsuario[6]."',";
        $variableSql.="'".$objUsuario[7]."',";
        $variableSql.="'".$objUsuario[8]."',";
        $variableSql.="'".$objUsuario[9]."');";
        
        
      return consultaA($con, $variableSql);
    }

     public function modificarDatos($con,$objUsuario) {
        $variableSql = "UPDATE usuario SET ";
        $variableSql.="carnet ='".$objUsuario[1]."'";
        $variableSql.=",nombre ='".$objUsuario[2]."'";
        $variableSql.=",apellido ='".$objUsuario[3]."'";
        $variableSql.=",sexo ='".$objUsuario[4]."'";
        $variableSql.=",fecha_nacimiento ='".$objUsuario[5]."'";
        $variableSql.=",telefono ='".$objUsuario[6]."'";
        $variableSql.=",direccion ='".$objUsuario[7]."'";
        $variableSql.=",usuario ='".$objUsuario[8]."'";
        $variableSql.=",contrasena ='".$objUsuario[9]."'";
        $variableSql.="WHERE id =".$objUsuario[0].";";
        
        
      return consultaA($con, $variableSql);
    }    
}
?>
