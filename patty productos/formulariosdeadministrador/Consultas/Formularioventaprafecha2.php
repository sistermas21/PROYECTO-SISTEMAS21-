<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
    include '../registros/conexionBDD/coneccion.php';
@$opcion=$_REQUEST['fechac'];
@$nombre = $_REQUEST['fecha'];
$paciente= $_REQUEST['id'];
$carnet= $_REQUEST['carnet'];
$nombrea= $_REQUEST['nombre'];
$telefono= $_REQUEST['telefono'];
$domicilio= $_REQUEST['domicilio'];

$sql = "SELECT * from usuario where id =  '$paciente'";
$datos= consultaD($con, $sql,3)
?>
<!DOCTYPE html>
<html lang="es" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <title>DETALLE DE COMPRAS</title>
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
  
   </HEADER>
   <hr>

    
    <article id="formulario">
    <form action="Formulariocomprafecha_inicial.php"  method="post" id="compra_mes" name="form" class="navbar-form">
    <h3><b>REPORTE DE VENTAS</b></h3>
     <div id="refres">
      <img  src="img/12.jpg" width="940px" height="190px" />
    </div>
    <br>
    <!--AQUI LO DEL BOTON JUGADA MANIACA-->
    <div id="divActualizar"> 
   </div> 
   <script> 
       var indice = 0; 

       //Aqui colocas el texto o HTML que quieres mostrar en tu div 
       var arreglo = [ 
           '<a id="ai" href="javascript:pulsar()">Imprimir</a>', 
       ]; 

       var tuDiv = document.getElementById( 'divActualizar'); 

       function Actualizar() { 
           indice = (indice + 1) % arreglo.length; 
           tuDiv.innerHTML = arreglo[indice]; 
       } 

       //Parametros: funcion, tiempo (milisegundos) 
       setInterval(Actualizar, 1000); 

  </script>
    <br>
    <br>
     <div class="table-responsive">
    <div id="fechaa">  <table class="">
        <tr >
        
        <tr>
        <td>
         <b>Carnet:</b>
         </td>
         <td>
          <?php print  $carnet; ?> 
         </td>
            <tr>
        <td>
         <b>Nombre:</b>
         </td>
         <td>
          <?php print  $nombrea; ?> 
         </td>
          <tr>
        <td>
         <b>Telefono:</b>
         </td>
         <td>
          <?php print  $telefono; ?> 
         </td>
          <tr>
        <td>
         <b>Domicilio:</b>
         </td>
         <td>
          <?php print  $domicilio; ?> 
         </td>
         <tr>
        <td>
       
         <b>Fecha:</b>
          </td><td>
           <?php print  $opcion; ?> 
            <b/><WBR><WBR><WBR><WBR><WBR><WBR>al<WBR><WBR><WBR></b>
            <?php print  $nombre; ?>
           </td>
            
            </tr>
            
            </tr>
      </tr>

        </tr>
      </table></div>
      </div>
  <style type="text/css">
                 #fechaa{
                        background-color:lightblue;
                        padding:5px;
                        border-radius:5px;
                        border:solid 1px lightblue;   
                         
                        }
                
            </style>
  </form>
  
<?php
if (isset($_REQUEST['buscar'])) {
  $sql="SELECT d.numerofactura as '#Factura',p.nombre as 'Nombre del Producto',p.precioventa as Precio ,d.descuento as Descuento, d.cantidad as Cantidad,d.importe as Total,facturaventa.fechaventa as 'Fecha de Venta' 
               FROM detallefacturaventa d 
               INNER JOIN producto p ON p.codigo=d.codigoproducto
               INNER JOIN facturaventa  ON facturaventa.numerofactura = d.numerofactura where facturaventa.fechaventa between '$opcion' and '$nombre' and facturaventa.idusuario = '$paciente' order by facturaventa.fechaventa";
  $datos=consultaD($con,$sql);
  print imprimetablaF2($datos,"./buscardetalle/Detalled","table able-bordred table-striped",2,TRUE);

  $sql="SELECT  sum(d.cantidad) as 'Cantidad Total _-----_' ,round(sum(d.importe),2) as 'Importe Global' 
               FROM detallefacturaventa d 
               INNER JOIN producto p ON p.codigo=d.codigoproducto
               INNER JOIN facturaventa  ON facturaventa.numerofactura = d.numerofactura where facturaventa.fechaventa between '$opcion' and '$nombre' and facturaventa.idusuario = '$paciente' order by facturaventa.fechaventa";
  $datos=consultaD($con,$sql);
  print imprimetablaF2($datos,"./buscardetalle/Detalled"," able-bordredd",2,TRUE);
   }
   elseif (!isset($_REQUEST['buscar'])) {
      
      $sql="SELECT d.numerofactura as '#Factura',p.nombre as 'Nombre del Producto',p.precioventa as Precio,d.descuento as Descuento, d.cantidad as Cantidad ,d.importe as Total,facturaventa.fechaventa as 'Fecha de Venta' 
               FROM detallefacturaventa d 
               INNER JOIN producto p ON p.codigo=d.codigoproducto
               INNER JOIN facturaventa  ON facturaventa.numerofactura = d.numerofactura order by facturaventa.fechaventa";
  $datos=consultaD($con,$sql);
  print imprimetablaF2($datos,"./buscardetalle/Detalled","table able-bordred table-striped",2,TRUE);
  
   }


?>
      <style type="text/css">
                      .able-bordredd{
                        margin-left: 510px;
                         color:green;
                         font-weight: bold;
                         text-align: center;
                         border: 1px solid #ddd;
                         background-color:lightblue;
                         padding: 8px;
  
                        }
      </style>
    </article>
      
    </section>
    
    </SECTION>
    </fieldset>
     <!-- <script src="../js/jquery.js"></script>-->
    <script src="../../libs/js/bootstrap.min.js"></script> 
    <script src="../../libs/js/holder.js"></script>
    
    <script type="text/javascript">

    $().ready(function () {
      $("#compra_mes").validate({});
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
  </body>
   <script type="text/javascript">
  function pulsar(){
  document.getElementById('ai').style.display = 'none';
  window.print();

    }
  </script>
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
    
     float: left;
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
    header("Location:../../index.php");
 } ?>