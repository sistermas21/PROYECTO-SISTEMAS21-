<?php session_start(); ?>

<?php 

//hacemos la conexion

	include '../formulariosdeadministrador/registros/conexionBDD/Coneccion.php';

// hacemos la consulta para el administrador

	if(isset($_REQUEST['bot'])){

		$sql = "SELECT * FROM abmin WHERE nombre='";

		$sql .= $_REQUEST['usuario'];

		$sql .= "' AND contrasena ='";

		$sql .=($_REQUEST['clave']);

		$sql .= "';";
		
		$datos=consultaD($con,$sql);

		$numero = count($datos);

//hacemos la consulta para el usuario

		$sql1 = "SELECT usuario,contrasena FROM usuario WHERE usuario='";

		$sql1 .= $_REQUEST['usuario'];

		$sql1 .= "' AND contrasena ='";

		$sql1 .=($_REQUEST['clave']);

		$sql1 .= "';";
		
		$datos1=consultaD($con,$sql1);

		$numero1 = count($datos1);


		if($numero !=0){

		$_SESSION['usuario'] = $datos[0]['nombre'];

		$_SESSION['clave'] = $datos[0]['contrasena'];

		$_SESSION['id_session'] = session_id();

		header("Location:../indexabmin.php");

		}

		else if($numero1!=0){

		$_SESSION['usuario'] = $datos1[0]['usuario'];

		$_SESSION['clave'] = $datos1[0]['contrasena'];

		$_SESSION['id_session'] = session_id();

		header("Location:../indexusuario.php"); 

		}

		else{

		header("Location:../index.php?msg=1");

		}

			

	}

 ?>