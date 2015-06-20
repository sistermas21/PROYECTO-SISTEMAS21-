<?php session_start(); ?>

<?php 
    if (isset($_SESSION['usuario'])) {
   
    include 'coneccion.php';

    $sql = "SELECT id,carnet,nombre,apellido FROM usuario WHERE usuario='";

    $sql .= $_SESSION['usuario'];

    $sql .= "' AND contrasena ='";

    $sql .= ($_SESSION['clave']);

    $sql .= "';";
    
    $datos=consultaD($con,$sql,3);

 ?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registrar Venta</title>
    <link href="../../../libs/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../../libs/css/css.css" rel="stylesheet" type="text/css" />
    <link href="../../../libs/fonts/font-awesome.css"rel="stylesheet">
    <link href="../../../libs/css/theme.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.js"></script>
      <script src="../js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="../../libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="../../../libs/jquery-2.1.0.js"></script> 
    <script src="../../../libs/validacion/jquery.validate.min.js"></script>
    <script src="../../../libs/validacion/messages.js"></script>
    <script src="../../../libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <!-- lib de tabla factura -->
</head>

<style type="text/css">
.error {
    color: #D8000C;
    font-weight: bold;
    background-position: 10px center;
    text-shadow: 5px 4px 5px gray;
  
              }
    </style>


<body>
<SECTION id="contenedor">
   <HEADER>
     SISTEMA DE VENTA DE PRODUCTOS
   </HEADER>
   <hr>
   <fieldset > 
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
                 <a href="../../../indexusuario.php" ><span class="fa fa-home"></span>&nbsp;HOME</a>  
                </li>
                 <!--________________________________________-->
                <!--______________________________________-->
                <li class="dropdown">
                  <a href="facturaventa1.php"><span class="fa fa-file-text-o"></span>&nbsp;FACTURA VENTA</a>  
                </li>
               
                <!--______________________________________-->
                 <li class="dropdown">
                <li><a href="../verproductos.php"><span class="fa fa-bars"></span>&nbsp;EXISTENCIA DE PRODUCTOS</a></li>  
                </li>
                <!--______________________________ -->
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-search-plus"></span>&nbsp;CONSULTAR VENTAS<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <li><a href="../VerFactura.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Por #Factura</a></li>
                   <li><a href="../VerFacturaporfecha.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Por Fecha</a></li>
                  </ul>
             <li><a href="../../../logueo/cerrar.php"><span class="fa fa-power-off"></span>&nbsp;CERRAR SESION</a></li>      
                 <!--________________________________________-->

<!--menu-->


              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>














</article>



 <article di="formulario">
  
    <fieldset>  <legend><H3 ><p><i><b>Factura Venta</b></i></p></H3></legend>

<form id="formulario"name="formualrio"action="manejadoventa.php?accion=save" method="post">
            <table class="table" >
                <tr>
                    <td ># Factura </td>
                    <td ><input type="text"  name="numf" id="numf" maxlength="6" required class="required digits form-control" ></td>
                </tr>
                <tr>
                  <td>Carnet del Vendedor</td>
                  <td><input type="text" name="vende" value="<?php print $datos [0][1]; ?>" id="vende" readonly ></td>
                </tr>
                <tr>
                  <td>Nombres del Vendedor</td>
                  <td><input type="text" name="nombre" value="<?php print $datos [0][2]." ".$datos [0][3]; ?>"></td>
                </tr>
                <tr>
                    <td >Fecha Venta</td>
                  <td>
                      
                  <input type="text"   name="fecha" id="fecha" value="<?php echo date('y-m-d'); ?>" readonly >
                     
                  </td>
                     <input type="hidden" name="nu" value="<?php print $datos [0][0]; ?>" id="vende"  >
                </tr>
                                  
                
                <tr>
              <td>
                <!--<input type="submit" role="button" name="guardar" value="Crear Factura" onclick="ventanaArticulos()">-->
       
              <button type="submit" class="btn btn-sm btn-success" name="guardar">Crear Factura</button>
       
       
       
        
                 </td>
                </tr>
            </table>
               
               </form>
               </fieldset>
  
      </article>
         
  </section>
    
    </SECTION>
    </fieldset>

 

         
     <!-- <script src="../js/jquery.js"></script>-->
              <script src="../../../libs/js/bootstrap.min.js"></script> 
                <script src="../../../libs/js/holder.js"></script>
   <script type="text/javascript">
    $().ready(function () {
      $("#formulario").validate({});
    });
  
   
    </script>
    
    
  </body>
</html>
<?php }else{
    header("Location:../../../index.php");
 } ?>