function validacion() {

 var passw = document.getElementById("pws1").value;
 var passwd = document.getElementById("pws2").value;
//

//
if (passw != passwd) {
alert('[ERROR] Las Contraseñas Nuevas No Coinciden ');
document.getElementById("passwd").style.border = "2px solid green";
document.getElementById("passwd").focus();
return false;
}else {
document.getElementById("passwd").style.border = "";
}
//
//----

//cierrre
}