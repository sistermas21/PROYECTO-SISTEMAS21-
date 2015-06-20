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
include '../registros/classusuario/usuario.php';
include '../registros/conexionBDD/coneccion.php';
include '../registros/classusuario/controladorusuario.php';

$usuarioA = new usuarioControlador();

        if(isset($_REQUEST['btnU'])){
            $usuarioA->setId($_REQUEST['id']);
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
            print $usuarioA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'../Consultas/Formularioconsultaruser.php\'>Ver datos</a>';
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




      


        
       



