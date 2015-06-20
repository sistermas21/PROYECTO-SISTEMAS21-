<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
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
    <title>Formulario home</title>
    <link href="libs/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="libs/css/css.css" rel="stylesheet" type="text/css" />
    <link href="./libs/fonts/font-awesome.css"rel="stylesheet">
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
                 <a href="indexusuario.php"> <span class="fa fa-home"></span>&nbsp;HOME</a>
                </li>
                 <!--________________________________________-->
                <!--______________________________________-->
                <li class="dropdown">
                   <a href="./Usuario/formsUsuarios/facturaventa/facturaventa1.php"><span class="fa fa-file-text-o"></span>&nbsp;FACTURA VENTA</a>                     
                </li>
                
                <!--______________________________________-->
                 <li class="dropdown">
                 <a href="Usuario/formsUsuarios/verproductos.php"><span class="fa fa-bars"></span>&nbsp;EXISTENCIA DE PRODUCTOS</a> 
                </li>
                <!--______________________________ -->
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-search-plus"></span>&nbsp;CONSULTAR VENTAS<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                   <li><a href="Usuario/formsUsuarios/VerFactura.php"><span class="fa fa-shopping-cart"></span>&nbsp;Consultar Por #Factura</a></li>
                   <li><a href="Usuario/formsUsuarios/VerFactura.php"><span class="fa fa-shopping-cart"></span>&nbsp;Consultar Por Fecha</a></li>
                  </ul>
         <li><a href="logueo/cerrar.php"><span class="fa fa-power-off"></span>&nbsp;CERRAR SESION</a></li>        
                 <!--________________________________________-->

<!--menu-->


              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


</article>
 
</section>
    
    </SECTION>
    </fieldset>
    
    <script src="libs/js/jquery.js"></script>
    <script src="libs/js/bootstrap.min.js"></script>
    <script src="libs/js/holder.js"></script>
  </body>
</html>
<?php }else{
    header("Location:index.php");
 } ?>