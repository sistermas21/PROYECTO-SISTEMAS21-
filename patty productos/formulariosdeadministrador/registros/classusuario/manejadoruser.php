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
include 'usuario.php';
include '../conexionBDD/coneccion.php';
include 'controladorusuario.php';

   $usuarioA = new usuarioControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['btnU'])){
             $usuarioA->setId('NULL');
             $usuarioA->setCarnet($_REQUEST['codigo']);
             $usuarioA->setNombre($_REQUEST['nombre']);
             $usuarioA->setApellido($_REQUEST['apellido']);
             $usuarioA->setSexo($_REQUEST['sex']);
             $usuarioA->setFechaNac($_REQUEST['fecha']);
             $usuarioA->setTelefono($_REQUEST['telefono']);
             $usuarioA->setDireccion($_REQUEST['direccion']);
             $usuarioA->setUser($_REQUEST['user']);
             $usuarioA->setContra($_REQUEST['pws2']);
           $datosObj=array(   $usuarioA->getId(),
                              $usuarioA->getCarnet(),
                              $usuarioA->getNombre(),
                              $usuarioA->getApellido(),
                              $usuarioA->getSexo(),
                              $usuarioA->getFechaNac(),
                              $usuarioA->getTelefono(),
                              $usuarioA->getDireccion(),
                              $usuarioA->getUser(),
                              $usuarioA->getContra());
                          

           print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print    $usuarioA->guardarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'../FormularioRegistrarusuario.php.\'>Registro Nuevo</a>';
            print "</div>";


       }

       else{

           print 'No se ha enviado datos ';
       }

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

