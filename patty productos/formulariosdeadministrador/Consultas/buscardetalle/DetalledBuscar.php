<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
    include '../../registros/conexionBDD/coneccion.php';
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <title>Ver Factura</title>
    <link href="../../../libs/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../../libs/css/css.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

 <SECTION id="contenedor">
   <HEADER>
     SISTEMA DE VENTA DE PRODUCTOS
   </HEADER>
   <hr>
   
<section id="contenido">
 
 <legend><H3 ><p><i><b>Detalle de Factura Compra</b></i></p></H3></legend>
 <article id="formulario">

<?php
$sql="SELECT d.id as Numero ,p.nombre as Nombre,p.preciocompra as Precio, d.cantidad as Cantidad ,d.descuento as Descuento,d.importe as Importe  FROM detallefacturacompra d INNER JOIN producto p ON p.codigo=d.codigoproducto  WHERE d.numerofactura ='".$_REQUEST['numerofactura']."';";
$datos=consultaD($con,$sql);
print imprimetabla1($datos,"buscardetalle/Detalle","table table-bordered table-striped",2,TRUE);
?>
<?php

@$sql1='SELECT SUM(importe) FROM detallefacturacompra d INNER JOIN facturacompra f ON f.numerofactura=d.numerofactura WHERE f.numerofactura=d.numerofactura  AND f.numerofactura='.$_REQUEST['numerofactura'].' ';
 @$datos1= consultaD($con, $sql1,3);
?>
 <table align="right">
    	<tr>
        <td>Importe Total =</td>

 	<td> <input class="cajaTotales" name="preciototal" value="<?php print $datos1[0][0] ?>" type="text"  size="12"  value=0 readonly ></td><td>$</td>
        </tr>
    </table>
 </article>

 <br>
 <br>
 <?php
print"<a id='lin' href='../FormularioConsultarComprapormes.php'>Ver Listado de Facturas</a><legend id='linea'></legend>";
 ?>
 </section>
    
    </SECTION>
    </fieldset>
     <script src="../../../libs/js/jquery.js"></script>
    <script src="../../../libs/js/bootstrap.min.js"></script>
    <script src="../../../libs/js/holder.js"></script>
  </body>
</html>
<?php }else{
    header("Location:../../../../index.php");
 } ?>