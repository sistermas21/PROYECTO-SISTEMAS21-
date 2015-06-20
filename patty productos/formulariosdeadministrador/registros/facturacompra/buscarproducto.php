
<script language="javascript">

function pon_prefijo(codigo,descripcion,precio_pvp) {
	opener.document.buscar.codigo.value=codigo;
	opener.document.buscar.nom.value=descripcion;
	opener.document.buscar.pre.value=precio_pvp;
	opener.document.buscar.importe.value=precio_pvp;
	window.close();	
}

function limpiar() {
	opener.document.buscar.codigo.value=" ";
	opener.document.buscar.nom.value=" ";
	opener.document.buscar.pre.value=" ";
	opener.document.buscar.cod.value=" ";
	opener.document.buscar.importe.value=" ";
	window.close();	
}
</script>
<?php 
include '../conexionBDD/coneccion.php';
$sql ="SELECT codigo,nombre,preciocompra  FROM producto WHERE codigo='".$_REQUEST['cod']."';";
$datos= consultaD($con, $sql,3);
if ($sql==false){
		?>
		<script languaje="javascript">
		limpiar();
		</script>
		<?php 
	} else { ?>
	<script>
	pon_prefijo('<?php print $datos[0][0]; ?>','<?php print $datos[0][1]; ?>','<?php print $datos[0][2]; ?>');
	
	</script>
	<?php }
?>

