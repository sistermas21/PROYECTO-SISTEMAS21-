<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
       include './facturaventa/coneccion.php';
       $user=$_SESSION['usuario'];
       $pws=$_SESSION['clave'];
  
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
 <link href="../../libs/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../libs/css/css.css" rel="stylesheet" type="text/css" />
    <link href="../../libs/fonts/font-awesome.css"rel="stylesheet">
    <link href="../../libs/css/theme.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="../../libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="../../libs/jquery-2.1.0.js"></script> 
    <script src="../../libs/validacion/jquery.validate.min.js"></script>
    <script src="../../libs/validacion/messages.js"></script>
    <script src="../../libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>

 <SECTION id="contenedor">
   <HEADER>
     SISTEMA DE VENTA DE PRODUCTOS
   </HEADER>
   <hr>
   <fieldset>
<section id="contenido">
<article id="menu">
 <div class="navbar-wrapper">
      <div class="container">
 <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                 <!--______________________________________-->
                <li class="dropdown">
                 <a href="../../indexusuario.php" ><span class="fa fa-home"></span>&nbsp;HOME</a>  
                </li>
                 <!--________________________________________-->
                <!--______________________________________-->
                <li class="dropdown">
                  <a href="./facturaventa/facturaventa1.php"><span class="fa fa-file-text-o"></span>&nbsp;FACTURA VENTA</a>  
                </li>
                 <!--________________________________________-->
                 
                <!--______________________________________-->
                 <li class="dropdown">
                 <li><a href="verproductos.php"><span class="fa fa-bars"></span>&nbsp;EXISTENCIA DE PRODUCTOS</a></li> 
                </li>
                <!--______________________________ -->
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-search-plus"></span>&nbsp;CONSULTAR VENTAS<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <li><a href="VerFactura.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Por #Factura</a></li>
                   <li><a href="VerFacturaporfecha.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Por Fecha</a></li>
                  </ul>
              <li><a href="../../logueo/cerrar.php"><span class="fa fa-power-off"></span>&nbsp;CERRAR SESION</a></li>        
                 <!--________________________________________-->

<!--menu-->


              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
</article> 

    <article id="formulario">
<form action="verproductos.php" method="post" id="ven" name="form" class="navbar-form">
    <fieldset>
     

   

        </tr>
      </table>
      </div>
    </fieldset>
  </form>




 <hr id="hrr">
  
   
     
      <legend><H3 ><p><i><b>Productos</i></p></H3></legend>
  
  


<?php
 @$opcion=$_REQUEST['selec'];
@$nombreSelecion = $_REQUEST['txtNombreSelect'];
if (!isset($_REQUEST['buscar'])) {
  $sql="SELECT p.id as Numero,p.codigo AS Codigo,p.nombre AS Nombre, p.preciocompra AS 'Precio De Compra',p.cantidad AS Cantidad,p.precioventa * 0.13 + p.precioventa AS 'Precio De Venta',m.nombre as Marca, c.nombre as Categoria,pp.nombre as Proveedor
  FROM producto p, marca m, categoria c, proveedor pp WHERE p.codigomarca = m.id AND p.codigocategoria = c.id AND p.codigoproveedor = pp.id ORDER BY p.id asc"  ;
  $datos=consultaD($con,$sql);
  print imprimetabla1($datos,"../Consultas/producto","table table-bordered table-striped",2,TRUE);
 
 }
switch ($opcion) {
  case 0:
  
    break;
    case 1:
   $sql2 = "SELECT p.id as Numero,p.codigo AS Codigo,p.nombre AS Nombre, p.preciocompra AS 'Precio De Compra',p.cantidad AS Cantidad,p.precioventa  * 0.13 + p.precioventa AS 'Precio De Venta',m.nombre as Marca, c.nombre as Categoria,pp.nombre as Proveedor
         FROM producto p, marca m, categoria c, proveedor pp WHERE p.codigomarca = m.id AND p.codigocategoria = c.id AND p.codigoproveedor = pp.id AND p.codigo = '$nombreSelecion' ORDER BY p.id asc ";
          $datosss=consultaD($con,$sql2);
         print imprimetabla11($datosss,"../Consultas/producto","table table-bordered table-striped",2,TRUE);
          print"<a id='lin' href='verproductos.php'>Ver Listado de Datos</a><legend id='linea'></legend>";
    break;
    case 2:
  $sql1 = "SELECT p.id as Numero,p.codigo AS Codigo,p.nombre AS Nombre, p.preciocompra AS 'Precio De Compra',p.cantidad AS Cantidad,p.precioventa  * 0.13 + p.precioventa AS 'Precio De Venta',m.nombre as Marca, c.nombre as Categoria,pp.nombre as Proveedor
              FROM producto p, marca m, categoria c, proveedor pp WHERE p.codigomarca = m.id AND p.codigocategoria = c.id AND p.codigoproveedor = pp.id AND p.nombre = '$nombreSelecion' ORDER BY p.id asc";
             $datoss=consultaD($con,$sql1);
              print imprimetabla11($datoss,"../Consultas/producto","table table-bordered table-striped",2,TRUE);
             print"<a id='lin' href='verproductos.php'>Ver Listado de Datos</a><legend id='linea'></legend>";

   break;
  
  
}

 
    ?>














 
 
   


 </article>



      
    </section>
    
    </SECTION>
    </fieldset>
    
    <script src="../../libs/js/bootstrap.min.js"></script>
    <script src="../../libs/js/holder.js"></script>
  </body>


   <script type="text/javascript">
    $().ready(function () {
      $("#ven").validate({});
    });
  
   
    </script>
    
</html>
<?php }else{
    header("Location:../../index.php");
 } ?>