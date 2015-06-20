function validacion() {

 var passw = document.getElementById("passw").value;
 var passwd = document.getElementById("passwd").value;
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