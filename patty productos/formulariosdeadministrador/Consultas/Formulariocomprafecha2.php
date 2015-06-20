<?php session_start(); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
    include '../registros/conexionBDD/coneccion.php';
@$opcion=$_REQUEST['fechac'];
@$nombre = $_REQUEST['fecha'];
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
    <h3><b>REPORTE DE COMPRAS</b></h3>
      <img  src="img/cabesa.png" width="940px" height="190px" />
    <br>
    <a id="ai" href="javascript:pulsar()">Imprimir</a>
    <br>
    <br>
     <div class="table-responsive">
    <div id="fechaa">  <table class="">
        <tr >
        <tr  id="trr">
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
  $sql="SELECT d.numerofactura as '#Factura',p.nombre as Nombre,p.preciocompra as Precio ,d.descuento as Descuento, d.cantidad as Cantidad,d.importe as Total,facturacompra.fechacompra as 'Fecha de Compra' 
               FROM detallefacturacompra d 
               INNER JOIN producto p ON p.codigo=d.codigoproducto
               INNER JOIN facturacompra  ON facturacompra.numerofactura = d.numerofactura where facturacompra.fechacompra between '$opcion' and '$nombre' order by facturacompra.fechacompra";
  $datos=consultaD($con,$sql);
  print imprimetablaF2($datos,"./buscardetalle/Detalled","table able-bordred tabl-striped",2,TRUE);

    $sql="SELECT sum(d.cantidad) as 'Total Cantidad_-----_',round(sum(d.importe),2) as 'Importe Global' 
               FROM detallefacturacompra d 
               INNER JOIN producto p ON p.codigo=d.codigoproducto
               INNER JOIN facturacompra  ON facturacompra.numerofactura = d.numerofactura where facturacompra.fechacompra between '$opcion' and '$nombre' order by facturacompra.fechacompra";
  $datos=consultaD($con,$sql);
  print imprimetablaF2($datos,"./buscardetalle/Detalled","able-bordredd",2,TRUE);
   }
   elseif (!isset($_REQUEST['buscar'])) {
      
      $sql="SELECT d.numerofactura as '#Factura',p.nombre as Nombre,p.preciocompra as Precio, d.cantidad as Cantidad ,d.descuento as Descuento,d.importe as Total,facturacompra.fechacompra as 'Fecha de Compra' 
               FROM detallefacturacompra d 
               INNER JOIN producto p ON p.codigo=d.codigoproducto
               INNER JOIN facturacompra  ON facturacompra.numerofactura = d.numerofactura order by facturacompra.fechacompra";
  $datos=consultaD($con,$sql);
  print imprimetablaF2($datos,"./buscardetalle/Detalled","table able-bordred tabl-striped",2,TRUE);
  
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
   location.reload()
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