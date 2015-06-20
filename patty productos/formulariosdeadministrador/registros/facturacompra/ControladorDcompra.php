<?php
class compraDcontrolador extends Detallecompra{
   
    public function guardarDatos($con,$objcompra) {
        $variableSql = "INSERT INTO detallefacturacompra ";
        $variableSql .= "(id,numerofactura,codigoproducto,cantidad,descuento,importe)";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objcompra[0]."',";
        $variableSql.="'".$objcompra[1]."',";
        $variableSql.="'".$objcompra[2]."',";
        $variableSql.="'".$objcompra[3]."',";
        $variableSql.="'".$objcompra[4]."',";
        $variableSql.="'".$objcompra[5]."');"; 
        return consultaA($con,$variableSql); 
        }
       

}



