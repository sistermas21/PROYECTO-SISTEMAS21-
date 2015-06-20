function validacion() {
//de clarqcion de las variables
 var seleccion = document.getElementById("buscar").selectedIndex;
  var texto = document.getElementById("texto").value;
 var codigo = document.getElementById("codigo").selectedIndex;
 var nombre = document.getElementById("nombre").value; 
//
if(seleccion == null || seleccion == 0) {
alert("Porfavor, Seleccione Una Opcion");
document.getElementById("buscar").focus();
document.getElementById("buscar").style.border = "2px solid green";
return false;
} else {
document.getElementById("buscar").style.border = "";
}
//
if(texto == "") {
alert("Porfavor, Digite Segun Lo Seleccionado");
document.getElementById("texto").focus();
document.getElementById("texto").style.border = "2px solid green";
return false;
} else {
document.getElementById("texto").style.border = "";
}
//

//----
//cierrre
}