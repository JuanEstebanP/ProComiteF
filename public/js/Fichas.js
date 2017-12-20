function regisFichas() {

  var txtTitular =$('#txtTitular').val();
  var txtNumero  =$('#txtNumero').val();
  var txtIniciolectiva  =$('#txtIniciolectiva').val();
  var txtFinlectiva  =$('#txtFinlectiva').val();

  var numeros = /^[0-9]+$/;

  if (txtTitular == "") {
    alertify.error("Campo titular vacío o incorrecto");
    return false;
  }else if (numeros.test($('#txtNumero').val()) == false) {
    alertify.error("Campo número ficha vacío o incorrecto");
    return false;
  }else if (txtIniciolectiva == "") {
    alertify.error("Campo fecha inicio vacío o incorrecto");
    return false;
  }else if (txtFinlectiva == "") {
    alertify.error("Campo fecha fin vacío o incorrecto");
    return false;
  }else {
    $.ajax({
      url: 'ControllerFicha/InsertarFicha',
      type: 'POST',
      data: {txtTitular:txtTitular,
        txtNumero:txtNumero,
        txtIniciolectiva:txtIniciolectiva,
        txtFinlectiva:txtFinlectiva},
      }).done(function(data){
        swal(
          'Exitoso!',
          'Ficha de grupo registrada satisfactoriamente!',
          'success'
        );
        setTimeout(function(){location.reload()}, 1300);

      }).fail(function(data){
      });
    }
  }




  function Editar(data){
    $('#myModal').show();
    $.ajax({

      url: 'ControllerFicha/Editar',
      type: 'POST',
      dataType: 'JSON',
      data:{id_fichaGrupo:data}
    }).done(function(datos){

      $('[name="txtIdModificar"]').val(datos.id_fichaGrupo);
      $('[name="txtNumeroModificar"]').val(datos.numeroFicha);
      $('[name="txtTitularModificar"]').val(datos.titularFicha);
      $('[name="txtIniciolectivaModificar"]').val(datos.iniciolectiva);
      $('[name="txtFinlectivaModificar"]').val(datos.finlectiva);
      $('#myModal').modal('show');
    }).fail(function(datos){

      alert("error");
    });
  }


  function consultaAprendices(data) {
    var valor = data;
    $.ajax({
      url:'ControllerFicha/consultaAprendices',
      type: "POST",
      data: {id:valor},
      dataType: "JSON"
    }).done(function(data){
      $("#tblaprendices").html("");
      $.each(data, function(i, v) {
        $("#tblaprendices").append("<tr><td>"+v.id_aprendiz+"</td><td>"+v.nombre+"</td><td>"+v.apellido+"</td><td>"+v.documento+"</td><td>"+v.correo+"</td><td><button  style='' class='btn btn-primary' onclick='Xaprendicesfg( "+v.id_aprendiz+ ")'> X</button><td></tr>");

      });

    }).fail(function(data){
      alert("fail");
    });
  }


function Xaprendicesfg(data) {
  swal({
    title: "Desasociar Aprendiz",
    text: "Está opción no se puede revertir!",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Desasociar",
    cancelButtonText: "Cancelar",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm) {

    if (isConfirm) {
      $.ajax({
        url:'ControllerFicha/XaprendicesfgC',
        type:"POST",
        data:{id:data},
        dataType:"JSON"
      })
      swal("Desasociado!", "El aprendiz fue desasociado correctamente.", "success");
      $('#myModaluno').modal('toggle');
    } else {
      swal("Cancelado", "Evento cancelado correctamente.", "error");
    }
  });

}
