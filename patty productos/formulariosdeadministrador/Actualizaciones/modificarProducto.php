
<html>
<head>
  <title></title>
<link href="../../libs/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../libs/css/css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="../../libs/jquery-2.1.0.js"></script>    
<script src="../../libs/validacion/jquery.validate.min.js"></script>
<script src="../../libs/validacion/messages.js"></script>
<script src="../../libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
<body>
<?php
//incluimos las clasee creadas anteriormente 
include '../registros/classProducto/producto.php';
include '../registros/conexionBDD/coneccion.php';
include '../registros/classProducto/productoControlador.php';

//creamos las instancias de las clases
$ProductoA = new productoControlador();

  if (isset($_REQUEST['guardar'])){ 
     $ProductoA->setId($_REQUEST['id']);
           $ProductoA->setCodigo($_REQUEST['codigo']);
           $ProductoA->setNombre($_REQUEST['nombre']);
           $ProductoA->setMarca($_REQUEST['marca']);
           $ProductoA->setCategoria($_REQUEST['categoria']);
           $ProductoA->setProveedor($_REQUEST['proveedor']);
           $ProductoA->setPrecioC($_REQUEST['precioc']);
           $ProductoA->setCantidad($_REQUEST['cantidad']);
           $ProductoA->setPrecioV($_REQUEST['preciov']);
 
           $datosObj=array($ProductoA->getId(),
                           $ProductoA->getCodigo(),
                           $ProductoA->getNombre(),
                           $ProductoA->getMarca(),
                           $ProductoA->getCategoria(),
                           $ProductoA->getProveedor(),
                           $ProductoA->getPrecioC(),
                           $ProductoA->getCantidad(), 
                           $ProductoA->getPrecioV()
                           );

    print "<div id='dialogo' title='Exito' style='display: none;'>";
              print '<p>Mensaje: ';
                print $ProductoA->modificarDatos($con,$datosObj);
                print '<span class="badge glyphicon glyphicon-ok"></span></p>';
              print '<a href=\'../Consultas/FormularioConsultarproducto.php?accion=con\'>Ver datos</a>';
              print "</div>";

              
                      }
  

?>
</body>
<script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>

</html>


