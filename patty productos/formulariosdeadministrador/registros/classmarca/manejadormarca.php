<html>
<head>
  <title></title>
<link href="../../../libs/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../../libs/css/css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../../libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="../../../libs/jquery-2.1.0.js"></script>    
<script src="../../../libs/validacion/jquery.validate.min.js"></script>
<script src="../../../libs/validacion/messages.js"></script>
<script src="../../../libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
<body>
<?php
include '../conexionBDD/coneccion.php';
include 'marca.php';
include 'controladormarca.php';

$marcaA = new marcaControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['btnM'])){
          $marcaA->setId('NULL');
          $marcaA->setCodigo($_REQUEST['codigoM']);
          $marcaA->setNombre($_REQUEST['nombreM']);
          $datosObj=array($marcaA->getId(),
                        $marcaA->getCodigo(),
                        $marcaA->getNombre());
            
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
             print $marcaA->guardarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'../FormularioRegistrarmarca.php.\'>Registro Nuevo</a>';
            print "</div>";
          
           
  

       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':
        $sql = 'SELECT * FROM marca';
        print consultaD($con, $sql,"table table-bordered table-striped",2, TRUE);
       
        break;

    default:
        print 'No hay Accion que realizar';
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
