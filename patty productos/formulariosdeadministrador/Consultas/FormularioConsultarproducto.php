<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
    include '../registros/conexionBDD/coneccion.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <title>Consultar Productos</title>

        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" language="javascript" src="funciones.js"></script>

    <link href="../../libs/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../libs/css/css.css" rel="stylesheet" type="text/css" />
    <link href="../../libs/fonts/font-awesome.css"rel="stylesheet">
     <link href="../../libs/css/theme.css" rel="stylesheet">
    
    
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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-pencil-square-o"></span>&nbsp;REGISTROS <b class="caret"></b></a>
                  <ul class="dropdown-menu">
               
                      <li><a href="../registros/FormularioRegistrarusuario.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Vendedor</a></li>
                    <li><a href="../registros/FormularioRegistrarProveedor.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Proveedor</a></li>
                    <li><a href="../registros/FormularioRegistrarmarca.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Marca</a></li>
                    <li><a href="../registros/FormularioRegistrarcategoria.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Categoria</a></li>
                   <li><a href="../registros/facturacompra/facturacompra1.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Compra</a></li>
                    <li><a href="../registros/FormularioRegistrarProducto.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Producto</a></li>


                    
                  </ul>
                </li>
                 <!--________________________________________-->
                <!--______________________________________-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-search-plus"></span>&nbsp;CONSULTAS<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <li><a  href="../Consultas/FormularioAdmin.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Administrador</a></li>
                 <li><a  href="../Consultas/FormularioConsultarproducto.php" ><span class="fa fa-search-plus"></span>&nbsp;Consultar Productos</a></li>
                  <li><a href="../Consultas/FormularioConsultarComprapormes.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Compras Por Proveedor,#Factura</a></li>
                  <li><a href="../Consultas/consultarcomprasporfecha.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Compras Por Fecha</a></li>
                  <li><a href="../Consultas/FormularioConsultarVentaspormes.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Ventas Por Vendedor,#Factura</a></li>
                  <li><a href="../Consultas/ventasporfecha.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Ventas Por Fecha</a></li>
                  <li><a href="../Consultas/FormularioConsultarproveedor.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Proveedores</a></li>
                  <li><a href="../Consultas/Formularioconsultaruser.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Vendedores</a></li>
              
              </ul>
                </li>
                 <!--________________________________________-->
                <!--______________________________________-->
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-folder-o"></span>&nbsp;REPORTES<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <li><a href="Formularioproductocompleto.php" target="_blank" ><span class="fa fa-folder-o"></span>&nbsp;Reporte Productos Existentes</a></li>
                  <li><a href="Formulariocomprafecha_inicial.php" ><span class="fa fa-folder-o"></span>&nbsp;Reporte Compras</a></li>
                  <li><a href="Formularioventacompleto.php" target="_blank"><span class="fa fa-folder-o"></span>&nbsp;Reporte Ventas</a></li>
                   <li><a href="../Reporteporusuario1/indexventa.php"><span class="fa fa-folder-o"></span>&nbsp;Reporte Ventas por Vendedor</a></li>
                  </ul>
              <li><a href="../../logueo/cerrar.php"><span class="fa fa-power-off"></span>&nbsp;CERRAR SECION</a></li>
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
    <form action="FormularioConsultarproducto.php" method="post" id="consulta_producto" name="form" class="navbar-form">
   <img  src="../Consultas/img/12.jpg" width="940px" height="190px" />
     
    <div class="table-responsive">
      <table class="">
        

        </tr>
      </table>
      </div>
    </fieldset>

  </form>

 <legend><H3 ><p><i><b>Productos</b></i></p></H3></legend>
 <article id="contenido">
 <?php
// @$opcion=$_REQUEST['selec'];
//@$nombreSelecion = $_REQUEST['txtNombreSelect'];
//if (!isset($_REQUEST['buscar'])) {
  $sql="SELECT p.id as Numero,p.codigo AS Codigo,p.nombre AS Nombre, p.preciocompra AS 'Precio De Compra',p.cantidad AS Cantidad,p.precioventa * 0.13 + p.precioventa AS 'Precio De Venta',m.nombre as Marca, c.nombre as Categoria,pp.nombre as Proveedor
  FROM producto p, marca m, categoria c, proveedor pp WHERE p.codigomarca = m.id AND p.codigocategoria = c.id AND p.codigoproveedor = pp.id ORDER BY p.id asc"  ;
  $datos=consultaD($con,$sql);
  print imprimetabla($datos,"../Consultas/producto","table table-bordered table-striped",2,TRUE);
 
 //}
/*switch ($opcion) {
    case 1:
   $sql2 = "SELECT p.id as Numero,p.codigo AS Codigo,p.nombre AS Nombre, p.preciocompra AS 'Precio De Compra',p.cantidad AS Cantidad,p.precioventa  * 0.13 + p.precioventa AS 'Precio De Venta',m.nombre as Marca, c.nombre as Categoria,pp.nombre as Proveedor
         FROM producto p, marca m, categoria c, proveedor pp WHERE p.codigomarca = m.id AND p.codigocategoria = c.id AND p.codigoproveedor = pp.id AND p.codigo = '$nombreSelecion' ORDER BY p.id asc";
          $datosss=consultaD($con,$sql2);
         print imprimeSelect($datosss,"../Consultas/producto","table table-bordered table-striped",2,TRUE);
          print"<a id='lin' href='FormularioConsultarproducto.php'>Ver Listado de Datos</a><legend id='linea'></legend>";
    break;
    case 2:
  $sql1 = "SELECT p.id as Numero,p.codigo AS Codigo,p.nombre AS Nombre, p.preciocompra AS 'Precio De Compra',p.cantidad AS Cantidad,p.precioventa  * 0.13 + p.precioventa AS 'Precio De Venta',m.nombre as Marca, c.nombre as Categoria,pp.nombre as Proveedor
              FROM producto p, marca m, categoria c, proveedor pp WHERE p.codigomarca = m.id AND p.codigocategoria = c.id AND p.codigoproveedor = pp.id AND p.nombre = '$nombreSelecion' ORDER BY p.id asc";
             $datoss=consultaD($con,$sql1);
              print imprimeSelect($datoss,"../Consultas/producto","table table-bordered table-striped",2,TRUE);
             print"<a id='lin' href='FormularioConsultarproducto.php'>Ver Listado de Datos</a><legend id='linea'></legend>";

   break;
  
  
}*/

 
    ?>

      
</article>
    </article> 
    </section>
    
    </SECTION>
    </fieldset>
    
    <script src="../../libs/js/bootstrap.min.js"></script>
    <script src="../../libs/js/holder.js"></script>
      <script type="text/javascript">

    $().ready(function () {
      $("#consulta_producto").validate({});
    });  

    /**/

    </script>
  </body>
</html>
<script type="text/javascript">

//validar  compos de solo numeros
function solonumeros()
{ 
      if ((event.keyCode>13)&&(event.keyCode<48)||(event.keyCode > 57)) 
          {
          event.returnValue=false;
          }
}
//validar campos de solo letras
function solletras()
{
      if ((event.keyCode>13)&&(event.keyCode !=32)&&(event.keyCode <65)||(event.keyCode>90) &&(event.keyCode<97)|| (event.keyCode>122))
          {
          event.returnValue=false;
          }
}
  function selectoption()
      {
        var indice = document.getElementById("proveedor").selectedIndex;
        if(indice==1)
          {
            solonumeros()

          }
        else if (indice==2) 
          {
            solletras()
          }
        
    }

</script>
<?php }else{
    header("Location:../../index.php");
 } ?>