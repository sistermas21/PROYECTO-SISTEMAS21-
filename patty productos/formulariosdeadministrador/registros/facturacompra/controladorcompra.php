<?php
class compraControlador extends facturacompra{
    public function guardarDatos($con,$objcompra){
        $variableSql = "INSERT INTO facturacompra ";
        $variableSql.="(id,numerofactura,codigoproveedor,fechacompra)";
        $variableSql.="VALUES(";
        $variableSql.="'".$objcompra[0]."',";
        $variableSql.="'".$objcompra[1]."',";
        $variableSql.="'".$objcompra[2]."',";
        $variableSql.="'".$objcompra[3]."');"; 
        return consultaA1($con,$variableSql);
        
        }
}

