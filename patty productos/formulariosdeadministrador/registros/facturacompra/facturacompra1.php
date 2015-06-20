<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
   include '../conexionBDD/coneccion.php';    
 ?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registrar Compra</title>
    <link href="../../../libs/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../../libs/css/css.css" rel="stylesheet" type="text/css" />
    <link href="../../../libs/fonts/font-awesome.css"rel="stylesheet">
     <link href="../../../libs/css/theme.css" rel="stylesheet">
    
    <link rel="stylesheet"href="../../../libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
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
               
                      <li><a href="../../registros/FormularioRegistrarusuario.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Vendedor</a></li>
                    <li><a href="../../registros/FormularioRegistrarProveedor.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Proveedor</a></li>
                    <li><a href="../../registros/FormularioRegistrarmarca.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Marca</a></li>
                    <li><a href="../../registros/FormularioRegistrarcategoria.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Categoria</a></li>
                   <li><a href="./facturacompra1.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Compra</a></li>
                    <li><a href="../../registros/FormularioRegistrarProducto.php"><span class="fa fa-pencil-square-o"></span>&nbsp;Registrar Producto</a></li>
       
                    
                  </ul>
                </li>
                 <!--________________________________________-->
                <!--______________________________________-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-search-plus"></span>&nbsp;CONSULTAS<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <li><a  href="../../Consultas/FormularioAdmin.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Administrador</a></li>
                 <li><a  href="../../Consultas/FormularioConsultarproducto.php" ><span class="fa fa-search-plus"></span>&nbsp;Consultar Productos</a></li>
                  <li><a href="../../Consultas/FormularioConsultarComprapormes.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Compras Por Proveedor,#Factura</a></li>
                  <li><a href="../../Consultas/consultarcomprasporfecha.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Compras Por Fecha</a></li>
                  <li><a href="../../Consultas/FormularioConsultarVentaspormes.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Ventas Por Vendedor,#Factura</a></li>
                  <li><a href="../../Consultas/ventasporfecha.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Ventas Por Fecha</a></li>
                  <li><a href="../../Consultas/FormularioConsultarproveedor.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Proveedores</a></li>
                  <li><a href="../../Consultas/Formularioconsultaruser.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Vendedores</a></li>
              
              </ul>
                </li>
                 <!--________________________________________-->
                <!--______________________________________-->
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-folder-o"></span>&nbsp;REPORTES<b class="caret"></b></a>
                  <ul class="dropdown-menu">

                  <li><a href="../../Consultas/Formularioproductocompleto.php" target="_blank" ><span class="fa fa-folder-o"></span>&nbsp;Reporte Productos Existentes</a></li>
                  <li><a href="../../Consultas/Formulariocomprafecha_inicial.php" ><span class="fa fa-folder-o"></span>&nbsp;Reporte Compras</a></li>
                  <li><a href="../../Consultas/Formularioventacompleto.php" target="_blank"><span class="fa fa-folder-o"></span>&nbsp;Reporte Ventas</a></li>
                   <li><a href="../../Reporteporusuario1/indexventa.php"><span class="fa fa-folder-o"></span>&nbsp;Reporte Ventas por Vendedor</a></li>
                  </ul>
                 <li><a href="../../../logueo/cerrar.php"><span class="fa fa-power-off"></span>&nbsp;CERRAR SECION</a></li>
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
  
    


<fieldset> <legend><H3 ><p><i><b>Factura Compra</b></i></p></H3></legend>
<form id="formula"name="formualrio"action="manejadocompra.php?accion=save" method="post">
            <table class="table">
                <tr>
                    <td ># Factura </td>
                    <td ><input type="text" name="numf" id="numf" maxlength="6" required class="required digits form-control" ></td>
                </tr>
                <tr>
                  <td>Proveedor</td>
                  <td>
          <select id="proveedor"name="proveedor"class="required form-control"required >
                        <option value=""></option>
                        <?php 
                            $sql="SELECT id,nombre FROM proveedor;";
                            $datos=consultaD($con, $sql);
                            foreach($datos as $value) {
                                print "<option value='";
                                print $value['id'];
                                print "'>";
                                print $value['nombre'];
                                print "</option>";
                            }                
                        ?>
                    </select>
          </td>
                </tr>
                <tr>
                    <td >Fecha Venta</td>
                  <td>
                      
                 <div class="input-group">
                    <input type="text" Placeholder="2014-05-01"  id="fechac" name="fecha" required class="required  form-control">
                    <span id="fechac" class="input-group-addon glyphicon glyphicon-calendar"></span> 
                    </td>
                </tr>
                <tr>
              <td>
                 <button type="submit"  class="btn btn-sm btn-success"  name="guardar">Crear Factura</button>
          
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
              <script src="../../../libs/js/bootstrap.min.js"></script> 
                <script src="../../../libs/js/holder.js"></script>
   <script type="text/javascript">
    $().ready(function () {
      $("#formula").validate({});
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
    </script>
    
    
  </body>
</html>
<?php }else{
    header("Location:../../../index.php");
 } ?>