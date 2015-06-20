function validacion() {
//de clarqcion de las variables
  var fecha1 = document.getElementById("fecha_inicial").value;
  var fecha2 = document.getElementById("fecha_final").value;

//
if (fecha1 == "") {
alert('[ERROR] El campo Desde  Esta Vacio');
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
//
if (fecha2 == "") {
alert('[ERROR] El campo Hasta  Esta Vacio');
document.getElementById("fecha_final").focus();
document.getElementById("fecha_final").style.border = "2px solid green";
return false;
}
else if(!(/^\d{1,2}\/\d{1,2}\/\d{2,4}$/.test(fecha2)) ) {
alert('[ERROR] Ingrese Correctamente La Fecha');
document.getElementById("fecha_final").focus();
document.getElementById("fecha_final").style.border = "2px solid green";
  return false;
}
else{
    document.getElementById("fecha_final").style.border = "";    
  }
 
//----
//cierrre
}