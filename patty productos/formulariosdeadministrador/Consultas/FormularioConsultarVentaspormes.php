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
    <title>Consultar Ventas Por Mes</title>
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
   <article id="formulario">
<form action="FormularioConsultarVentaspormes.php" method="post" id="consulta_producto" name="form" class="navbar-form">
   <fieldset>
    
    <img  src="../Consultas/img/12.jpg" width="940px" height="190px" />
    <div class="table-responsive">
      <table class="">
        
        </tr>
      </table>
      </div>
    </fieldset>
  </form>


<hr id="hrr">
  
   
     
     <legend><H3 ><p><i><b>Facturas</b></i></p></H3></legend>

  
  


<?php 
@$opcion=$_REQUEST['selec'];
@$nombreSelecion = $_REQUEST['txtNombreSelect'];
if (!isset($_REQUEST['buscar'])) {
  $sql="SELECT f.id as Numero,f.numerofactura as '#Factura',f.carnetusuario as 'Carnet Vendedor'";
  $sql.=",f.fechaventa as 'Fecha de Venta',u.nombre as 'Nombre Vendedor'";
  $sql.=",u.apellido as 'Apellido Vendedor' FROM facturaventa f INNER JOIN usuario u ON f.carnetusuario=u.carnet WHERE f.carnetusuario=u.carnet ORDER BY f.id asc";
   $datos=consultaD($con,$sql);
  print imprimetablaF1($datos,"./buscardetalle/Detalle","table table-bordered table-striped",2,TRUE);

 }
switch ($opcion) {
  case 0:
  
    break;
    case 1:
     $sql="SELECT f.id as Numero,f.numerofactura as '#Factura',f.carnetusuario as 'Carnet Vendedor'";
  $sql.=",f.fechaventa as 'Fecha de Venta',u.nombre as 'Nombre Vendedor'";
  $sql.=",u.apellido as 'Apellido Vendedor' FROM facturaventa f INNER JOIN usuario u ON f.carnetusuario=u.carnet WHERE f.carnetusuario=u.carnet AND numerofactura='$nombreSelecion' ORDER BY f.id asc";
  $datos=consultaD($con,$sql);
  print imprimetablaF($datos,"./buscardetalle/Detalle","table table-bordered table-striped",2,TRUE);
print"<a id='lin' href='FormularioConsultarVentaspormes.php'>Ver Listado de Facturas</a><legend id='linea'></legend>";
    break;
    case 2:
  $sql="SELECT f.id as Numero,f.numerofactura as '#Factura',f.carnetusuario as 'Carnet Vendedor'";
  $sql.=",f.fechaventa as 'Fecha de Venta',u.nombre as 'Nombre Vendedor'";
  $sql.=",u.apellido as 'Apellido Vendedor' FROM facturaventa f INNER JOIN usuario u ON f.carnetusuario=u.carnet WHERE f.carnetusuario=u.carnet AND u.nombre='$nombreSelecion' ORDER BY f.id asc";
  $datos=consultaD($con,$sql);
    print imprimetablaF($datos,"./buscardetalle/Detalle","table table-bordered table-striped",2,TRUE);
    print"<a id='lin' href='FormularioConsultarVentaspormes.php'>Ver Listado de Facturas</a><legend id='linea'></legend>";
   break;
  
  
}

 
 
?>







      

    </article>



      
    </section>
    
    </SECTION>
    </fieldset>
     <!-- <script src="../js/jquery.js"></script>-->
    <script src="../../libs/js/bootstrap.min.js"></script> 
    <script src="../../libs/js/holder.js"></script>
    
    <script type="text/javascript">

    $().ready(function () {
      $("#consulta_producto").validate({});
    });

    </script>
  </body>
</html>
<?php }else{
    header("Location:../../index.php");
 } ?>