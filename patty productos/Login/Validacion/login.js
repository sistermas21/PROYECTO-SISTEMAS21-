function validacion() {
//de clarqcion de las variables
 var user = document.getElementById("nombre").value;
 var pass = document.getElementById("password").value;
 
if( user == "" || /^\s+$/.test(user) ) {
  alert('[ERROR] El Campo Usuario esta Vacio');
  document.getElementById("nombre").focus();
  document.getElementById("nombre").style.border = "2px solid green";
  return false;
}
else if (!isNaN(user)) {
alert('[ERROR] El Campo Debe Contener Caracteres');
  document.getElementById("nombre").focus();
  document.getElementById("nombre").style.border = "2px solid green";
  return false;
}else {
document.getElementById("nombre").style.border = "";
}
//

if( pass == "" ) {
  alert('[ERROR] El Campo Contraseña esta Vacio');
  document.getElementById("password").focus();
    document.getElementById("password").style.border = "2px solid green";
  return false;
}else {
document.getElementById("password").style.border = "";
}



//
//----
//cierrre
}