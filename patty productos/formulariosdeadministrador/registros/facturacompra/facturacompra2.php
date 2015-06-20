<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
 include '../conexionBDD/coneccion.php';    
 ?>


<html lang="es">
  <head>
    <meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
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
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.js"></script>
      <script src="../js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="../../../libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="../../../libs/jquery-2.1.0.js"></script> 
    <script src="../../../libs/validacion/jquery.validate.min.js"></script>
    <script src="../../../libs/validacion/messages.js"></script>
    <script src="../../../libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <!-- lib de tabla factura -->
     
    
  

</head>
<script type="text/javascript">
var cursor;
    if (document.all) {
    // Está utilizando EXPLORER
    cursor='hand';
    } else {
    // Está utilizando MOZILLA/NETSCAPE
    cursor='pointer';
    }
  var miPopup
  function ventanaArticulos(){
      var codigo=document.getElementById("cod").value;
      if (codigo=="") {
      alert ("Debe introducir el codigo del Producto");
      } else {
      var codigo=document.getElementById("cod").value;
      miPopup=window.open("buscarproducto.php?cod="+codigo,"datos","width=100%,height=100%,scrollbars=yes");
      }
    }
function actualizar_importe()
      {
        var precio=document.getElementById("pre").value;
        var cantidad=document.getElementById("ca").value;
        var descuento=document.getElementById("des").value;
        descuento=descuento/100;
        total=precio*cantidad;
        descuento=total*descuento;
        total=total-descuento;
        var original=parseFloat(total);
        var result=Math.round(original*100)/100 ;
        document.getElementById("importe").value=result;
        
      }
      function validar_cabecera()
      {
        var mensaje="";
        if (document.getElementById("numfactura").value=="") mensaje+="  - Numero de Factura\n";
        if (document.getElementById("fecha").value=="") mensaje+="  - Fecha\n";
        if (document.getElementById("vende").value=="") mensaje+="  - Vendedor\n";
        if (mensaje!="") {
          alert("Atencion, se han detectado las siguientes incorrecciones:\n\n"+mensaje);
        } else {
          document.getElementById("formulario").submit();
        }
      }
  function validar() 
      {
        var mensaje="";
        var entero=0;
        var enteroo=0;
    
        if (document.getElementById("cod").value=="") mensaje="  - Codigo\n";
        if (document.getElementById("nom").value=="") mensaje+="  - Nombre\n";
        if (document.getElementById("pre").value=="") { 
              mensaje+="  - Falta el precio\n"; 
            } else {
              if (isNaN(document.getElementById("precio").value)==true) {
                mensaje+="  - El precio debe ser numerico\n";
              }
            }
        if (document.getElementById("ca").value=="") 
            { 
            mensaje+="  - Falta la cantidad\n";
            } else {
              enteroo=parseInt(document.getElementById("ca").value);
              if (isNaN(enteroo)==true) {
                mensaje+="  - La cantidad debe ser numerica\n";
              } else {
                  document.getElementById("ca").value=enteroo;
                }
            }
        if (document.getElementById("des").value=="") 
            { 
            document.getElementById("des").value=0 
            } else {
              entero=parseInt(document.getElementById("des").value);
              if (isNaN(entero)==true) {
                mensaje+="  - El descuento debe ser numerico\n";
              } else {
                document.getElementById("des").value=entero;
              }
            } 
        if (document.getElementById("importe").value=="") mensaje+="  - Falta el importe\n";
        
        if (mensaje!="") {
          alert("Atencion, se han detectado las siguientes incorrecciones:\n\n"+mensaje);
        } else {
          document.getElementById("baseimponible").value=parseFloat(document.getElementById("baseimponible").value) + parseFloat(document.getElementById("importe").value); 
          cambio_iva();
          document.getElementById("buscar").submit();
          document.getElementById("cod").value="";
          document.getElementById("nom").value="";
          document.getElementById("pre").value="";
          document.getElementById("ca").value=1;
          document.getElementById("importe").value="";
          document.getElementById("des").value=0;           
        }
      }
      function cambio_iva() {
      var original=parseFloat(document.getElementById("baseimponible").value);
      var result=Math.round(original*100)/100 ;
      document.getElementById("baseimponible").value=result;
  
      document.getElementById("baseimpuestos").value=parseFloat(result * parseFloat(document.getElementById("iva").value / 100));
      var original1=parseFloat(document.getElementById("baseimpuestos").value);
      var result1=Math.round(original1*100)/100 ;
      document.getElementById("baseimpuestos").value=result1;
      var original2=parseFloat(result + result1);
      var result2=Math.round(original2*100)/100 ;
      document.getElementById("preciototal").value=result2;
    } 
    function cerrar(){
      window.close();
    }
</script>
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
                  <li><a href="../../Consultas/consultarventasdeldia.php"><span class="fa fa-search-plus"></span>&nbsp;Consultar Ventas Del Dia Actual</a></li>
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
  
   



            
               
            

<form id="buscar" name="buscar" action="manejadorDcompra.php"> 
<fieldset><legend><H3 ><p><i><b>Factura Compra</b></i></p></H3></legend>
 <table>
<tr>

<?php if (!isset($_REQUEST['numfactura'])) 
{ @$sql ="SELECT numerofactura FROM facturacompra WHERE numerofactura='".$_REQUEST['numf']."';";
$datos= consultaD($con, $sql,3);?>
<td>Factura #</td>
<td  style='background-color:#EAF7FB'><input type="text"  style='background-color:#EAF7FB'maxlength="6" name="numfactura" value="<?php print $datos[0][0] ?>" id="numfactura"  required class="required digits form-control" onChange="validar_cabecera()" readonly ></td>
<?php }else{ ?>
<td>Factura #</td>
<td  style='background-color:#EAF7FB'><input type="text" style='background-color:#EAF7FB' maxlength="6" name="numfactura" value="<?php print $_REQUEST['numfactura']; ?>" id="numfactura"  required class="required digits form-control" onChange="validar_cabecera()"readonly ></td>
<?php } ?>

</tr>



                <tr>
                  <td  style='background-color:#EAF7FB'>
        
          
                  
                 <p><a href="facturacompra1.php"  class="btn btn-sm btn-success" role="button">Nueva Factura</a></p>
                  </td>
                </tr>

            </table>
            </fieldset>
             <br>




  <table class="table">
  <tr>
    <th>C&oacute;digo del Producto</th>
     <th>Nombre</th>
      <th>precio Compra</th>
       <th>Cantidad</th>
        <th>Descuento</th>
         <th>Importe</th>
         <th>Agregar</th>
  </tr>
  <tr>
    
    <td ><input type="text" name="codigo" id="cod" onChange="ventanaArticulos()" required autofocus>  </td>
    
    <td ><input type="text" name="nom" id="nom" onChange="actualizar_importe()" readonly required></td>
  
        <td ><input type="text" name="precio" id="pre" onChange="actualizar_importe()"  required> </td>
     
           <td ><input type="text" name="ca" id="ca" onChange="actualizar_importe()" required></td>
  
          <td ><input type="text" name="des" id="des" onChange="actualizar_importe()" ></td>

          <td><input type="text" name="importe" id="importe" onChange="actualizar_importe()" readonly required></td>


          <td>
          <button type="submit"  class="btn btn-sm btn-success"  name="bot" onclick="validar()">Agregar</button>
         
          </td>
          </tr>

        
  </table>
<br>
</form>  

 <legend><H3 ><p><i><b>Detalle de Factura Compra</b></i></p></H3></legend>
  <?php 
    @$sql='SELECT  d.codigoproducto as "Codigo Del Producto",p.nombre AS Nombre ,p.preciocompra as "Precio de Compra",d.cantidad as Cantidad,d.descuento as Descuento,d.importe as Importe FROM detallefacturacompra d INNER JOIN producto p ON d.codigoproducto=p.codigo INNER JOIN facturacompra f ON f.numerofactura=d.numerofactura  WHERE f.numerofactura=d.numerofactura  AND f.numerofactura='.$_REQUEST['numfactura'].'  ';
   
    @$datos=consultaD($con,$sql);
  print imprimetable($datos,"./buscardetalle/Detalle11","table table-bordered table-striped",2,TRUE);

    ?>
    <?php
        @$sql ='SELECT SUM(importe) FROM detallefacturacompra d INNER JOIN facturacompra f ON f.numerofactura=d.numerofactura WHERE f.numerofactura=d.numerofactura  AND f.numerofactura='.$_REQUEST['numfactura'].' ';
        @$datos= consultaD($con, $sql,3)

    ?>
    <table align="right">
        <tr>
        <td >Importe Total=</td>
        <td>
  <input class="cajaTotales" name="preciototal" value="<?php print $datos[0][0] ?>" type="text" id="preciototal" size="12" align="right" value=0 readonly></td><td> 
        $</td>
        </tr>
    </table>
  
      </article>
        </section>
          </SECTION>
          </fieldset>
         
     <!-- <script src="../js/jquery.js"></script>-->
              <script src="../../../libs/js/bootstrap.min.js"></script> 
                <script src="../../../libs/js/holder.js"></script>
   
    
    
  </body>
</html>
<?php }else{
    header("Location:../../../index.php");
 } ?>