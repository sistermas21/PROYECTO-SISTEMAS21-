<?php
class ProveedorControlador extends Proveedor{

    public function guardarDatos($con,$objProveedor) {

        $variableSql  = "INSERT INTO proveedor ";
        $variableSql .= "(id,codigo,nombre,email,";
        $variableSql .= "telefono,direccion) ";
        $variableSql .= "VALUES (";
        $variableSql .="'".$objProveedor[0]."',";
        $variableSql .="'".$objProveedor[1]."',";
        $variableSql .="'".$objProveedor[2]."',";
        $variableSql .="'".$objProveedor[3]."',";
        $variableSql .="'".$objProveedor[4]."',";
        $variableSql .="'".$objProveedor[5]."');";
        return consultaA($con,$variableSql);
        
}

public function modificarDatos($con,$objProveedor) {
    $variableSql = "UPDATE proveedor SET  ";
    $variableSql .= "codigo ='".$objProveedor[1]."'";
    $variableSql .= ",nombre ='".$objProveedor[2]."'";
    $variableSql .= ",email ='".$objProveedor[3]."'";
    $variableSql .= ",telefono ='".$objProveedor[4]."'";
    $variableSql .= ",direccion ='".$objProveedor[5]."'";
    $variableSql .= "WHERE id = ".$objProveedor[0].";";
    return consultaA($con,$variableSql);  
}

}