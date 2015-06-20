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
include '../registros/claseeadmin/admin.php';
include '../registros/conexionBDD/coneccion.php';
include '../registros/claseeadmin/controladoradmin.php';

$usuarioA = new adminControlador();

        if(isset($_REQUEST['guardarr'])){
            $usuarioA->setId($_REQUEST['id']);
            $usuarioA->setUser($_REQUEST['user']);
            $usuarioA->setContra($_REQUEST['contra']);
           $datosObj=array(   $usuarioA->getId(),
                              $usuarioA->getUser(),
                              $usuarioA->getContra());
           
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $usuarioA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'../Consultas/FormularioAdmin.php\'>Ver datos</a>';
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




      


        
       



