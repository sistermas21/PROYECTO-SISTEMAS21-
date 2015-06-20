<?php 
include '../conexionBDD/coneccion.php';
include 'detallefacturacompra.php';
include 'ControladorDcompra.php';
$ventA = new compraDcontrolador();       
        if(isset($_REQUEST['bot'])){
          //guardamos datos
          $ventA->setId('NULL');
          $ventA->setNumerofactura($_REQUEST['numfactura']);
          $ventA->setCod($_REQUEST['codigo']);
          $ventA->setCantidad($_REQUEST['ca']);
          $ventA->setDescuento($_REQUEST['des']);
          $ventA->setImporte($_REQUEST['importe']);
          $datosObj=array($ventA->getId(),
                          $ventA->getNumerofactura(),
                          $ventA->getCodpro(),
                          $ventA->getCantidad(),
                          $ventA->getDescuento(),
                          $ventA->getImporte());                           
          print $ventA->guardarDatos($con,$datosObj);
          //actualizamos producto
    $variableSql="UPDATE producto SET ";
    $variableSql.="cantidad =cantidad + '".$_REQUEST['ca']."'";
    $variableSql.=",preciocompra='".$_REQUEST['precio']."'";
    $variableSql.="WHERE codigo=".$_REQUEST['codigo'].";";
    consultaM($con,$variableSql);
    //mostramoos el codigo en la cajad etexto
    $od=$_REQUEST['numfactura'];



print'<html>

                <head>
                <meta http-equiv="REFRESH" content="0;url=facturacompra2.php?numfactura='.$od.'">
                <head>
                </html>';

       }
?>