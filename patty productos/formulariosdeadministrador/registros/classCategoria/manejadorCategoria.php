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
//incluimos las clasee creadas anteriormente 
include 'categoria.php';
include '../conexionBDD/Coneccion.php';
include 'categoriaControlador.php';

//creamos las instancias de las clases
$CategoriaA = new categoriaControlador();
$accion=$_REQUEST['accion'];
switch($accion){
	case'save':
	if (isset($_REQUEST['guardar'])){ 
		$CategoriaA->setId('NULL');
		$CategoriaA->setCodigo($_REQUEST['codigo']);
		$CategoriaA->setNombre($_REQUEST['nombre']);

		$datosObj=array($CategoriaA->getId(),
						$CategoriaA->getCodigo(),
						$CategoriaA->getNombre()
						);

            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $CategoriaA->guardarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'../FormularioRegistrarcategoria.php.\'>Registro Nuevo</a>';
            print "</div>";

	}else{
		print 'No se ha enviado datos';
	}
	
	break;
	case 'con':
	$sql='SELECT * FROM categoria';
	print consultaD($con , $sql , 2 , TRUE);
	break;
	case 'del':
	$sql='DELETE from categoria WHERE id='.$_REQUEST['id'].';';
	print consultaA($con, $sql);
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