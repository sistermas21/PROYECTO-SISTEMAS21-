function validacion() {
//de clarqcion de las variables
  var fecha1 = document.getElementById("fecha_inicial").value;

//
if (fecha1 == "") {
alert('[ERROR] El campo Fecha  Esta Vacio');
document.getElementById("fecha_inicial").focus();
document.getElementById("fecha_inicial").style.border = "2px solid green";
return false;
}
else if(!(/^\d{1,2}\/\d{1,2}\/\d{2,4}$/.test(fecha1)) ) {
alert('[ERROR] Ingrese Correctamente La Fecha');
document.getElementById("fecha_inicial").focus();
document.getElementById("fecha_inicial").style.border = "2px solid green";
  return false;
}
else{
    document.getElementById("fecha_inicial").style.border = "";    
  }

//----
//cierrre
}