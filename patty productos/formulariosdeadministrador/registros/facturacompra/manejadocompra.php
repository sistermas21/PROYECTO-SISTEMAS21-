<html>
<head>
  <title></title>
   <link href="../../../libs/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../../libs/css/css.css" rel="stylesheet" type="text/css" />
    <link href="../../../libs/fonts/font-awesome.css"rel="stylesheet">
     <link href="../../../libs/css/theme.css" rel="stylesheet">
    
    <link rel="stylesheet"href="../../../libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="../../../libs/jquery-2.1.0.js"></script>    
    <script src="../../../libs/validacion/jquery.validate.min.js"></script>
    <script src="../../../libs/validacion/messages.js"></script>
    <script src="../../../libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
<body>
<?php
include '../conexionBDD/coneccion.php';
include 'facturacompra.php';
include 'controladorcompra.php';
$ventA = new compraControlador(); 
$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['guardar'])){
          $ventA->setId('NULL');
          $ventA->setNumerofactura($_REQUEST['numf']);
          $ventA->setCod($_REQUEST['proveedor']);
          $ventA->setFechacompra($_REQUEST['fecha']);
          $datosObj=array($ventA->getId(),
                          $ventA->getNumerofactura(),
                          $ventA->getCod(),
                          $ventA->getFechacompra());            
            print $ventA->guardarDatos($con,$datosObj);

       }else{
        print 'No se ha enviado datos ';
       }

        break;
       }

?>
</body>
<script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
</html>
