function registrarU() {
var usuario = $('#usuario').val();
var contrasena = $('#contrasena').val();
var contrasena1 = $('#contrasena1').val();
if (usuario == "") {
  alertify.error("Campo usuario incorrecto o vasío ");
}else if (contrasena == "") {
  alertify.error("Campo contraseña incorrecto o vasío ");
}
else if (contrasena1 == "") {
  alertify.error("Campo repetir contrasena incorrecto o vasío ");
}
else
if (contrasena == contrasena1) {
  $.ajax({
    url: 'ControllerRegistro/registrarU',
    type: 'POST',
    data: {usuario:usuario,
          contrasena:contrasena},
    dataType: 'JSON'
  })
  swal(
    'Exitoso!',
    'Se ha registrado satisfactoriamente!',
    'success'
  )
  setTimeout(function(){
    location.href ="../ProComite2/ControllerLogin";
  }, 1300);
}else {
    alertify.error("Las contraseñas no coinciden");
}
}
