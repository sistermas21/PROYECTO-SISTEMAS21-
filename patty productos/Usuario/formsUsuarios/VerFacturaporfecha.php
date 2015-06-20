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
<form action="VerFacturaporfecha.php" method="post" id="ven" name="form" class="navbar-form">
    <fieldset>
   <legend><H3 ><p><i><b>Búsqueda de Ventas Por Fecha</b></i></p></H3></legend>
   <div class="table-responsive">
      <table width="800px">
        <tr>
                  
          <td>
        Fecha Inicial
        </td>
        <td>
        <div class="input-group">
        <input type="text" Placeholder="ejemplo: 12/02/2014"  id="fechac" name="fecha1"required class="required  form-control">
        <span id="fechac" class="input-group-addon glyphicon glyphicon-calendar"></span>
        </div>
          </td>
            <td>
            Fecha Final
            </td>
           <td>
        <div class="input-group">
        <input type="text" Placeholder="ejemplo: 12/02/2014"  id="fecha" name="fecha"required class="required  form-control">
        <span id="fechac" class="input-group-addon glyphicon glyphicon-calendar"></span>
        </div>
          </td>

            <td>
              <button type="submit"  class="btn btn-sm btn-success"  name="buscar">Consultar</button>
            </td>
      </tr>

        </tr>
      </table>
      </div>
    </fieldset>
  </form>




 <hr id="hrr">
  
   

 <legend><H3 ><p><i><b>Facturas</b></i></p></H3></legend>

<?php 
@$fecha=$_REQUEST['fecha1'];
@$fecha1=$_REQUEST['fecha'];
if (!isset($_REQUEST['buscar'])) {
  $sql="SELECT f.id as Numero,f.numerofactura as '#Factura',f.carnetusuario as 'Carnet Vendedor'";
  $sql.=",f.fechaventa as 'Fecha de Venta',u.nombre as 'Nombre Vendedor'";
  $sql.=",u.apellido as 'Apellido Vendedor' FROM facturaventa f INNER JOIN usuario u ON f.carnetusuario=u.carnet WHERE f.carnetusuario=u.carnet AND u.usuario='$user' AND u.contrasena='$pws' ORDER BY f.id asc";
  $datos=consultaD($con,$sql);
  print imprimetabla($datos,"facturaventa/buscardetalle/Detalle","table table-bordered table-striped",2,TRUE);

 }else{
$sql="SELECT f.id as Numero,f.numerofactura as '#Factura',f.carnetusuario as 'Carnet Vendedor'";
$sql.=",f.fechaventa as 'Fecha de Venta',u.nombre as 'Nombre Vendedor'";
$sql.=",u.apellido as 'Apellido Vendedor' FROM facturaventa f INNER JOIN usuario u ON f.carnetusuario=u.carnet WHERE f.carnetusuario=u.carnet AND u.usuario='$user' AND u.contrasena='$pws'  AND f.fechaventa between '$fecha' AND '$fecha1' ORDER BY f.id asc ";
$datos=consultaD($con,$sql);
print imprimeSelect($datos,"facturaventa/buscardetalle/Detalle","table table-bordered table-striped",2,TRUE);
print"<a id='lin' href='VerFacturaporfecha.php'>Ver Listado de Facturas</a><legend id='linea'></legend>";
  
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



     $(document).ready(
      function(){
          $("#fechac").datepicker(
          {
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd',
            showAnim:'slide'
          }
        );
      }
    )
     $(document).ready(
      function(){
          $("#fecha").datepicker(
          {
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd',
            showAnim:'slide'
          }
        );
      }
    )

    </script>
</html>
<?php }else{
    header("Location:../../index.php");
 } ?>