var pathname = window.location.pathname;
var instructores = "/ProComite2/ControllerInstructor";
var aprendices = "/ProComite2/ControllerAprendiz";
var fichagrupo = "/ProComite2/ControllerFicha";
var publicaciones = "/SK8/publicaciones";
var promociones = "/SK8/promociones";
var pedidos = "/SK8/pedidos";
var plantillas = "/SK8/plantillas";
var proveedor = "/SK8/proveedores";
var imagenes = "/SK8/imagenes";

console.log(pathname);
if (pathname == instructores) {
  $("#ins").addClass("active");
} else if (pathname == aprendices) {
  $("#apre").addClass("active");
} else if (pathname == fichagrupo) {
  $("#fg").addClass("active");
} else if (pathname == pedidos) {
  $("#ped").addClass("active");
} else if (pathname == promociones) {
  $("#prom").addClass("active");
} else if (pathname == publicaciones) {
  $("#pub").addClass("active");
} else if (pathname == plantillas) {
  $("#plan").addClass("active");
} else if (pathname == proveedor) {
  $("#prove").addClass("active");
} else if (pathname == imagenes) {
  $("#imag").addClass("active");
}
