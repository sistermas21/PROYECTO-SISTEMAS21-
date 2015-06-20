<?php
class adminControlador extends admin { 

    public function modificarDatos($con,$objUsuario) {

        $variableSql = "UPDATE abmin SET ";

        $variableSql.="nombre ='".$objUsuario[1]."'";

        $variableSql.=",contrasena ='".$objUsuario[2]."'";

        $variableSql.="WHERE id =".$objUsuario[0].";";  

        return consultaA($con, $variableSql);

  }

}
?>
