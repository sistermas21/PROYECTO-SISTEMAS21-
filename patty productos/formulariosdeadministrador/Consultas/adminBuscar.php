
<?php 
include '../registros/conexionBDD/Coneccion.php';
?>
<?php
$sql ="SELECT * FROM abmin WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <title>Captura detos de Proveedor</title>
     <link href="../../libs/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../libs/css/css.css" rel="stylesheet" type="text/css" />
    <link href="../../libs/fonts/font-awesome.css"rel="stylesheet">
     <script src="Validacion/Admin.js"></script> 
     <link href="../../libs/css/theme.css" rel="stylesheet"> 
     <!--<link href="../../libs/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
     -->
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
    <form action="../Actualizaciones/modificaradmin.php" method="POST" id="usuaro" name="proveedor"  class="navbar-form" onsubmit="return validacion()">
   <img  src="../Consultas/img/12.jpg" width="940px" height="190px" />
    <fieldset> <LEGEND ><H3 ><p>Modificar Administrador</p></H3></LEGEND>

    <div class="table-responsive">
    <table class="table">
    
      <tr>
        <td>
                     <b>Administrador</b>:
        </td>
        <td>
        <input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
          <input type="text" Placeholder="ejemplo: 35897895"  name="user" id="codigo" value='<?php print $datos[0][1]?>' class="required form-control">
          </td>
      </tr>
      
      <tr>
        <td>
                    <b>Contrase&ntilde;a </b>:
        </td>
        <td>
          <input type="password" value='<?php print $datos[0][2]?>'  Placeholder="Digite su contrase&ntilde;a Nueva"  name="pws1" required class="required" id="passw">
          </td>
      </tr>
       
       <tr>
        <td>
                    <b>Confirmar Contrase&ntilde;a </b>:
        </td>
        <td>
          <input type="password" value='<?php print $datos[0][2]?>'  Placeholder="Repita la Contraseña Nueva"  name="contra" required class="required "id="passwd" >
          </td>
      </tr>
      
      <tr>
        
        <td>
         <button type="submit"  class="btn btn-sm btn-success" name="guardarr">Guardar</button>

          </td>
          
      </tr>
    

    </table>
 
    </fieldset>
  </form>
      
    </article>



      
    </section>
    
    </SECTION>
    </fieldset>
<!-- <script src="../js/jquery.js"></script>-->
    <script src="../../libs/js/bootstrap.min.js"></script>
    <script src="../../libs/js/holder.js"></script>
    <script type="text/javascript">
    $().ready(function () {
      $("#usuaro").validate({});
    });
  
   
    </script>
  </body>
</html>
