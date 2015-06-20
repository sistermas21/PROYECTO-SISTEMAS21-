<?php
class ventaControlador extends facturaventa{
   
    public function guardarDatos($con,$objventa) {
        $variableSql = "INSERT INTO facturaventa ";
        $variableSql .= "(id,numerofactura,fechaventa,carnetusuario,idusuario)";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objventa[0]."',";
        $variableSql.="'".$objventa[1]."',";
        $variableSql.="'".$objventa[2]."',";
        $variableSql.="'".$objventa[3]."',";
        $variableSql.="'".$objventa[4]."');"; 
        return consultaA1($con,$variableSql);
        
        }
}
