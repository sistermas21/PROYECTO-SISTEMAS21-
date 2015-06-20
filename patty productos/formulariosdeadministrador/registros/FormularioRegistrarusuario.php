<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
    include 'conexionBDD/coneccion.php';
   
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
    <title>Formulario Registrar Usuario</title>
    <link href="../../libs/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../libs/css/css.css" rel="stylesheet" type="text/css" />
    <link href="../../libs/fonts/font-awesome.css"rel="stylesheet">
     <script src="Validacion/Admin.js"></script>  
     <link href="../../libs/css/theme.css" rel="stylesheet"> 
       
    <link rel="stylesheet" href="../../libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="../../libs/jquery-2.1.0.js"></script>    
    <script src="../../libs/validacion/jquery.validate.min.js"></script>
    <script src="../../libs/validacion/messages.js"></script>
    <script src="../../libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
     <style type="text/css">
.error {
    color: #D8000C;
    font-weight: bold;
    background-position: 10px center;
        text-shadow: 5px 4px 5px gray;
  
              }
    </style>
</head>
<body>
 <SECTION id="contenedor">
   
   
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
              background-color:BLUE
              </ul>
                </li>
                 <!--________________________________________-->
                <!--______________________________________-->
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-folder-o"></span>&nbsp;REPORTES<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <li><a href="../Consultas/Formularioproductocompleto.php" target="_blank" > <span class="fa fa-folder-o"></span>&nbsp;Reporte Productos Existentes</a></li>
                  <li><a href="../Consultas/Formulariocomprafecha_inicial.php" > <span class="fa fa-folder-o"></span>&nbsp;Reporte Compras</a></li>
                  <li><a href="../Consultas/Formularioventacompleto.php" target="_blank"> <span class="fa fa-folder-o"></span>&nbsp;Reporte Ventas</a></li>
                   <li><a href="../Reporteporusuario1/indexventa.php"> <span class="fa fa-folder-o"></span>&nbsp;Reporte Ventas por Vendedor</a></li>
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
    <form action="classusuario/manejadoruser.php?accion=save" method="post" id="usuaro" name="usuario"  onsubmit="return validacion()" class="navbar-form">

    <fieldset> 
     <legend><H3 ><p><i><b>Datos de Usuario</b></i></p></H3></legend>

 <div class="table-responsive">

    <table class="table">

      <tr>

        <td>

                     <b>Nombre Usuario</b>:

        </td>

        <td>

          <input type="text" Placeholder="ejemplo: 35897895"  id="user" name="user" required class="required  form-control">

          </td>

      </tr>

<tr>
        <td>
                    <b>Contrase&ntilde;a </b>:
        </td>
        <td>
          <input type="password"  Placeholder="Digite su contrase&ntilde;a Nueva"  name="pws1" required class="required" id="passw">
          </td>
      </tr>
       
       <tr>
        <td>
                    <b>Confirmar Contrase&ntilde;a </b>:
        </td>
        <td>
          <input type="password"  Placeholder="Repita la Contraseña Nueva"  name="pws2" required class="required "id="passwd" >
          </td>
      </tr>


</table>
</div>
     


    </fieldset>
   
    <fieldset> 
     <legend><H3 ><p><i><b>Datos personales</b></i></p></H3></legend>

    <div class="table-responsive">
    <table class="table">
			
			
<tr>
        <td>
                     <b>Carnet</b>:
        </td>
        <td>
          <input type="text" Placeholder="ejemplo: 35897895"  id="codigo" name="codigo" required class="required digits form-control">
          </td>
      </tr>


<tr>
        <td>
                     <b>Nombre</b>:
        </td>
        <td>
          <input type="text" Placeholder="ejemplo: Luis" id="nombre"  name="nombre" required class="required  form-control">
          </td>
      </tr>

<tr>
        <td>
                     <b>Apellido</b>:
        </td>
        <td>
          <input type="text" Placeholder="ejemplo: Cordova" name="apellido" required class="required  form-control" >
          </td>
      </tr>


			
			
			<tr>
				<td>
        <b>Sexo</b>:
				</td>
				<td>
				<input type="radio" name="sex" id="sexo" Value="M" required>M
				<input type="radio" name="sex" id="sexo"  Value="F" required>F
				</td>
			</tr>

		
			<tr>
				<td>
                     <b>Fecha Nacimiento</b>:
				</td>
				<td>
        <div class="input-group">
				<input type="text" Placeholder="ejemplo: 12/02/2014"  id="fechac" name="fecha"required class="required  form-control">
        <span id="fechac" class="input-group-addon glyphicon glyphicon-calendar"></span>
        </div>
					</td>
			</tr>
			
			<tr>
				<td>
                     <b>Tel&eacute;fono</b>:
				</td>
				<td>
					<input type="text" Placeholder="ejemplo:78682000" name="telefono" id="telefono" required class="required digits form-control">
					</td>
			</tr>
        <tr>
        <td>
                    <b>Direcci&oacute;n</b>:
        </td>
        <td>
          <input type="text"  id="cantrasena1" name="direccion" required placeholder="Santiago Nonualco">
          </td>
      </tr>
			<tr>
        
        <td>
  
                  <button type="submit"  class="btn btn-sm btn-success"   name="btnU">Guardar</button>

          </td>
         
      </tr>

		</table>
    </div>
		</fieldset>
	</form>
</fieldset>		
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
    header("Location:../../index.php");
 } ?>