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
include '../registros/classProveedor/proveedor.php';
include '../registros/conexionBDD/coneccion.php';
include '../registros/classProveedor/proveedorControlador.php';
$ProveedorA=new proveedorControlador();

		if(isset($_REQUEST['guardarr'])){
		$ProveedorA->setId($_REQUEST['id']);
    	$ProveedorA->setCodigo($_REQUEST['codigo']);
		$ProveedorA->setNombre($_REQUEST['nombre']);
		$ProveedorA->setTelefono($_REQUEST['telefono']);
		$ProveedorA->setEmail($_REQUEST['email']);
		$ProveedorA->setDireccion($_REQUEST['direccion']);

		$datosObj=array($ProveedorA->getId(),
				$ProveedorA->getCodigo(),
				$ProveedorA->getNombre(),
				$ProveedorA->getEmail(),
				$ProveedorA->getTelefono(),
				$ProveedorA->getDireccion()
				);
				print "<div id='dialogo' title='Actualizaci&oacute;n' style='display: none;'>";
            	print '<p>Mensaje: ';
               	print $ProveedorA->modificarDatos($con,$datosObj);
               	print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            	print '<a href=\'../Consultas/FormularioConsultarproveedor.php?accion=con\'>Ver datos</a>';
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

































