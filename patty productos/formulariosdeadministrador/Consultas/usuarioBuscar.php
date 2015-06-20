<?php
include '../registros/conexionBDD/Coneccion.php';
?>
<?php
$sql ="SELECT * FROM usuario WHERE id ='".$_REQUEST['id']."';";
$datos= consultaD($con, $sql,3);
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
    <script src="Validacion/Admin.js"></script>
     <link href="../../libs/fonts/font-awesome.css"rel="stylesheet">    
      <link href="../../libs/css/theme.css" rel="stylesheet">
       
    <link rel="stylesheet" href="../../libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="../../libs/jquery-2.1.0.js"></script>    
    <script src="../../libs/validacion/jquery.validate.min.js"></script>
    <script src="../../libs/validacion/messages.js"></script>
    <script src="../../libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
<body>
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
    <form action="../Actualizaciones/modificaruser.php" method="post" id="usuaro" name="usuario"  onsubmit="return validacion()" class="navbar-form">


<fieldset> <legend> <h3>Datos de Usuario</h3></legend>
 <div class="table-responsive">

    <table class="table">

      <tr>

        <td>

                     <b>Nombre Usuario</b>:

        </td>

        <td>

          <input type="text" value='<?php print $datos[0][8]?>' Placeholder="ejemplo: 35897895" value=""  id="user" name="user" required class="required  form-control">

          </td>

      </tr>

<tr>
        <td>
                    <b>Contrase&ntilde;a </b>:
        </td>
        <td>
          <input type="password" value='<?php print $datos[0][9]?>'  Placeholder="Digite su contrase&ntilde;a Nueva"  name="pws1" required class="required" id="passw">
          </td>
      </tr>
       
       <tr>
        <td>
                    <b>Confirmar Contrase&ntilde;a </b>:
        </td>
        <td>
          <input type="password" value='<?php print $datos[0][9]?>'  Placeholder="Repita la Contraseña Nueva"  name="pws2" required class="required "id="passwd" >
          </td>
      </tr>


</table>
</div>
     


    </fieldset>
   











   
    <fieldset> <LEGEND ><H3 ><p>Modificar Usuario</p></H3></LEGEND>
    <div class="table-responsive">
    <table class="table">
			
			
<tr>
        <td>
                     <b>Carnet</b>:
        </td>
        <td>
        <input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
        <input type="text" Placeholder="ejemplo: 35897895"  id="codigo" name="codigo" value='<?php print $datos[0][1]?>' required class="required digits form-control">
          </td>
      </tr>


<tr>
        <td>
                     <b>Nombre</b>:
        </td>
        <td>
          <input type="text" Placeholder="ejemplo: Luis" id="nombre"  name="nombre" value='<?php print $datos[0][2]?>'required class="required  form-control">
          </td>
      </tr>

<tr>
        <td>
                     <b>Apellido</b>:
        </td>
        <td>
          <input type="text" Placeholder="ejemplo: Cordova" name="apellido" value='<?php print $datos[0][3]?>'required class="required  form-control" >
          </td>
      </tr>


			
			
			<tr>
				<td>
        <b>Sexo</b>:
       
      
				</td>
				<td>
				<input type="text" name="sex" id="sexo" maxlength="1" onkeypress="solletras()" value='<?php print $datos[0][4]; ?>'  required class="required  form-control">
				
				</td>
			</tr>

		
			<tr>
				<td>
                     <b>Fecha Nacimiento</b>:
				</td>
				<td>
        <div class="input-group">
				<input type="text" Placeholder="ejemplo: 12/02/2014"  id="fechac" name="fecha" value='<?php print $datos[0][5]?>'required class="required  form-control">
        <span id="fechac" class="input-group-addon glyphicon glyphicon-calendar"></span>
        </div>
					</td>
			</tr>
			
			<tr>
				<td>
                     <b>Tel&eacute;fono</b>:
				</td>
				<td>
					<input type="text" Placeholder="ejemplo:78682000" name="telefono" id="telefono"value='<?php print $datos[0][6]?>'required class="required digits form-control">
					</td>
			</tr>
        <tr>
        <td>
                    <b>Direcci&oacute;n</b>:
        </td>
        <td>
          <input type="text"  name="direccion" value='<?php print $datos[0][7]?>' required placeholder="Santiago Nonualco">
          </td>
      </tr>
			
			
			</tr>
 
        <td>
       
           <button type="submit"  class="btn btn-sm btn-success"  name="btnU">Guardar</button>
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
<script type="text/javascript">

//validar  compos de solo numeros

function solletras()
{
      if ((event.keyCode!=13)&&(event.keyCode!=77)&&(event.keyCode !=70))
          {
          event.returnValue=false;
          }
}

</script>
