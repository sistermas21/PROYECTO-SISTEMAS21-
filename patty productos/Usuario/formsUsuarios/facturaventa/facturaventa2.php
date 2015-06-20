<?php session_start(); ?>

<?php 
    if (isset($_SESSION['usuario'])) {
      include 'coneccion.php';

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
    <link rel="stylesheet" href="../../libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
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

 <SECTION id="contenedor">
   <HEADER id="cab">
    SISTEMAS DE INVENTARIO ON LINE
   </HEADER>

   <div id="o">
  <img  src="../img/cabesa.png" width="0" height="0" id="ol" style="float:left; margin-left:70px; border-radius:10px;">

</div>
<p id="pp" style="display:none; background-color:lightblue; border-radius:5px;
   font-weight:bold;font-size: 20px; float:left; margin-left:70px;" >
        LIBRERIA Y VARIEDADES<BR>
             GESTETNER<BR>
             TEL: 330-4173<BR>
   </p>

<hr id="linea">
   <fieldset id="fi"> 

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
                 <!--________________________________________-->
                 <li class="dropdown">
                 <li><a href="../VerFacturaDELDIA.php"><span class="fa fa-shopping-cart"></span>&nbsp;VENTAS DEL DIA ACTUAL</a></li> 
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


 <article id="formulario">
  
    
                  

<form id="buscar" name="buscar" action="manejadorDventa.php"> 
<fieldset 


id="tf"> <legend><H3 ><p><i><b>Factura Venta</b></i></p></H3></legend>
 <table border="1px" id="tf" >
<tr> 

<?php 

if (!isset($_REQUEST['numfactura'])) 
{ @$sql ="SELECT numerofactura FROM facturaventa WHERE numerofactura='".$_GET['numf']."';";
$datos= consultaD($con, $sql,3);?>

<td>Factura #</td>

<td ><input type="text" style='background-color:#EAF7FB' maxlength="6" name="numfactura" value="<?php print $datos[0][0] ?>" id="numfactura"  required class="required digits form-control" onChange="validar_cabecera()" readonly></td>
<?php }else{ ?>

<td>Factura #</td>

<td > <input type="text" style='background-color:#EAF7FB' maxlength="6" name="numfactura" value="<?php print $_REQUEST['numfactura']; ?>" id="numfactura"  required class="required digits form-control" onChange="validar_cabecera()" readonly></td>
<?php } ?>

</tr>
<tr>
  <td><br></td>
   <td><br></td>
</tr>
 
                    <td >Fecha</td>
                  <td  style='background-color:#EAF7FB'>
                  <input type="text"  style='background-color:#EAF7FB'  name="fecha" id="fecha" value="<?php echo date('y-m-d'); ?>" readonly required>  
                  </td>
                </tr>
                <tr>
  <td><br></td>
   <td><br></td>
</tr>
               
                <tr>
                  <td  style='background-color:#EAF7FB'>
                   <p><a href="facturaventa1.php" id="boton"   class="btn btn-sm btn-success" role="button">Nueva Factura</a></p>
                  </td>
                </tr>
            </table>
            </fieldset>
           <div id="po">
         <br id="c">
            <hr id="c">
            </div>



  <table width="100%" class="table"  id="tab">
    <tr>
    <th >C&oacute;digo del Producto</th>
    <th >Nombre</th>
    <th >Precio de Venta</th>
    <th >Cantidad</th>
       <th >Descuento</th>
       <th >Importe</th>
       <th>Agregar</th>

    </tr>
    <td ><input type="text" name="codigo" id="cod" onChange="ventanaArticulos()" required autofocus>  </td>
        
    <td ><input type="text" name="nom" id="nom" onChange="actualizar_importe()" readonly required></td>
       
        <td ><input type="text" name="pre" id="pre" onChange="actualizar_importe()" readonly required> </td>
         
           <td ><input type="text" name="ca" id="ca" onChange="actualizar_importe()" required></td>
         
          <td ><input type="text" name="des" id="des" onChange="actualizar_importe()" ></td>
         
          <td ><input type="text" name="importe" id="importe" onChange="actualizar_importe()" readonly required></td>


          <td>
          <button type="submit" class="btn btn-sm btn-success" name="bot" onclick="validar()">Agregar</button>
         
        
  </table>

<script type="text/javascript">

  function ocultar(){

      document.getElementById('tab').style.display = 'none';
      document.getElementById('boton').style.display = 'none';
      document.getElementById('cab').style.display = 'none';
   
      document.getElementById('ai').style.display = 'none';
       document.getElementById('po').style.display = 'none';
    
      document.getElementById('linea').style.display = 'none';
      document.getElementById('tf').style.display = 'none';
       document.getElementById('pp').style.display = 'block';
        document.getElementById('lo').style.display = 'block';
      document.getElementById('tab').style.border="solid 1px #000";
      document.getElementById('importe').style.borderColor="#fff";
      document.getElementById('numfactura').style.borderColor="#fff";
      document.getElementById('fecha').style.borderColor="#fff";     
      document.getElementById("ol").width = 180;
      document.getElementById("ol").height = 100;
      document.getElementById('num').style.borderColor="#fff";
          document.getElementById('fe').style.borderColor="#fff";
      window.print();
      location.reload();
      }
      </script>






  </form>   
  <hr>
 <legend>
 <H3><p><i><b>Detalle de Factura</b></i></p></H3></legend>
<!--   aquidd   -->
 <table border="1px" id="lo" style="display:none;">
<tr> 
  <td ><p aling="justify" id="num">#Factura ____ </p>  <?php print $_REQUEST['numfactura']; ?></td>
<td><wbr><wbr>
<wbr><wbr><wbr>
                  <p aling="justify" id="fe">Fecha de Venta</p><?php echo date('y-m-d'); ?>  
                  </td>
      </table>

 <h4 id="oc" style="display:none; font-weight:bold;">Detalle de Factura</h4>
  <?php 
    @$sql='SELECT  d.codigoproducto as "Código del Producto",p.nombre as "Nombre",p.precioventa * 0.13 + p.precioventa as "Precio Venta",d.cantidad as Cantidad,d.descuento as Descuento,d.importe  as Importe FROM detallefacturaventa d INNER JOIN producto p ON d.codigoproducto=p.codigo INNER JOIN facturaventa f ON f.numerofactura=d.numerofactura  WHERE f.numerofactura=d.numerofactura  AND f.numerofactura='.$_REQUEST['numfactura'].'  ';
   
     $datos=consultaD($con,$sql);
  print imprimetable($datos,"./buscardetalle/Detalle11","table table-bordered table-striped",2,TRUE);

    ?>
    <?php
        @$sql ='SELECT SUM(importe) FROM detallefacturaventa d INNER JOIN facturaventa f ON f.numerofactura=d.numerofactura WHERE f.numerofactura=d.numerofactura  AND f.numerofactura='.$_REQUEST['numfactura'].' ';
        @$datos= consultaD($con, $sql,3)


    ?>
    <table align="right">
       
        
        <tr>
        <td >Importe Total =</td>
        <td >
    <input class="cajaTotales" name="preciototal" value="<?php print $datos[0][0] ?>" type="text" id="preciototal" size="12" align="right" value=0 readonly> </td><td>
          $</td>
        </tr>
    </table>
    <br>
    <br>
    <br>
  <a id="ai" href="javascript:ocultar()">Imprimir</a>
      </article>
        </section>
          </SECTION>
           </fieldset>
         
     <!-- <script src="../js/jquery.js"></script>-->
              <script src="../../../libs/js/bootstrap.min.js"></script> 
                <script src="../../../libs/js/holder.js"></script>
   
    
    
  </body>
  <br><br><br>
  
  <style type="text/css">
  #ai{ 
   background:#0D98FB; 
    background-image: -webkit-linear-gradient(top,#0D98FB,#1A5DB3);
    background-image: -moz-linear-gradient(top,#0D98FB,#1A5DB3);
    background-image: -o-linear-gradient(top,#0D98FB,#1A5DB3);  
    background-image: linear-gradient(to bottom,#0D98FB,#1A5DB3);   
    border: 1px solid #125CB5;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;  
    border-radius: 5px;
    -moz-box-shadow: 0 1px 1px #71C0FD inset;
    -webkit-box-shadow: 0 1px 1px #71C0FD inset;
    -o-box-shadow: 0 1px 1px #71C0FD inset; 
    box-shadow: 0 1px 1px #71C0FD inset;
    padding: .8em 1.8em;
    color: white;
    font-weight:bold;
    font-size: 14px;
    text-decoration:none;
    
     float: right;
    }
  #ai:hover{
  text-decoration:none;
 background:#1A5DB3;
   background-image: -webkit-linear-gradient(bottom,#0D98FB,#1A5DB3);
    background-image: -moz-linear-gradient(bottom,#0D98FB,#1A5DB3);
    background-image: -o-linear-gradient(bottom,#0D98FB,#1A5DB3);   
    background-image: linear-gradient(to top,#0D98FB,#1A5DB3);
    cursor: pointer;
    }
    </style>
</html>
<?php }else{
    header("Location:../../../index.php");
 } ?>