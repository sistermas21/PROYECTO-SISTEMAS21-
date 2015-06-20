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
include 'proveedor.php';
include 'proveedorControlador.php';

$ProveedorA=new proveedorControlador();
$accion=$_REQUEST['accion'];
switch($accion){
	case 'save':
		if(isset($_REQUEST['guardarr'])){
		$ProveedorA->setId('NULL');
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
               
                      	
                 print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $ProveedorA->guardarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'../FormularioRegistrarProveedor.php.\'>Registro Nuevo</a>';
            print "</div>";

                     
	         
	            
                      }
         else{
            print 'No se ha enviado datos';
            }

		break;
		case'con':
		$sql = 'SELECT * FROM proveedor';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"proveedor","table table-bordered table-striped",1);

		break;

		case 'del':
		$sql='DELETE from Proveedor WHERE id='.$_REQUEST['id'].';';
		print consultaA($con,$sql);
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




























