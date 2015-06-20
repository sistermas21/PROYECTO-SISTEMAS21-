function validacion() {
//de clarqcion de las variables
 var seleccion = document.getElementById("buscar").selectedIndex;
//
if(seleccion == null || seleccion == 0) {
alert("Porfavor, Seleccione El Proveedor");
document.getElementById("buscar").focus();
document.getElementById("buscar").style.border = "2px solid green";
return false;
} else {
document.getElementById("buscar").style.border = "";
}

//
//----
//cierrre
}