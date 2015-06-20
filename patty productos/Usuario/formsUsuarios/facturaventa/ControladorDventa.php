<?php
class ventaDcontrolador extends DetalleVenta{
   
    public function guardarDatos($con,$objventa) {
        $variableSql = "INSERT INTO detallefacturaventa ";
        $variableSql .= "(id,numerofactura,codigoproducto,cantidad,descuento,importe)";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objventa[0]."',";
        $variableSql.="'".$objventa[1]."',";
        $variableSql.="'".$objventa[2]."',";
        $variableSql.="'".$objventa[3]."',";
        $variableSql.="'".$objventa[4]."',";
        $variableSql.="'".$objventa[5]."');"; 
        return consultaA($con,$variableSql); 
       
        }
       

}

