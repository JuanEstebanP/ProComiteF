<?php
include 'Master.php';
?>

<div class="content">

  <div id="page-wrapper" >

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="blue">
                      <i class="fa fa-list-alt" aria-hidden="true" style="font-size:2em;"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Listado de fichas de proyecto</h4>
                        <div class="material-datatables table-responsive">
                            <table class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" id="table_fichas">
                              <thead>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Objetivo general</th>
                                <th>Ficha carac.</th>
                                <th>Estado</th>
                                <th>Elegir</th>
                              </thead>
                              <tbody>
                                <?php foreach ($fichasXestado as $key) { ?>
                                  <tr>
                                    <td><?php echo $key['id_ficha'];  ?></td>
                                    <td><?php echo $key['titulo']; ?></td>
                                    <td><?php echo $key['obj_general']; ?></td>
                                    <td><?php echo $key['numeroFicha']; ?></td>
                                    <td><?php echo $key['nombreEstado'];?></td>
                                    <td><input class="listaapren" type="checkbox" name="" value="<?php echo $key['id_ficha'];?>"></td>
                                  </tr>
                                <?php    } ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>


        <div class="row " >
                        <div class="col-md-12 " style=" " >
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                <i class="fa fa-calendar" aria-hidden="true" style="font-size:2em;"></i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Registro programación de comité</h4>
                                    <form method="#" action="#">
                                        <div class="row  col-lg-11 col-xs-12" style=" margin-left:50%; transform: translateX(-50%);" >
                                        <div class="form-group label-floating col-lg-6 col-xs-11" >
                                            <label class="control-label">Titulo Programación:</label>
                                            <input id="titulo" name="titulo" type="text" class="form-control input-md" required="TRUE">

                                        </div>
                                        <div class="form-group label-floating col-lg-6 col-xs-11">
                                            <label class="control-label">Lugar:</label>
                                            <input id="lugar" name="lugar" type="text"  class="form-control input-md">
                                        </div>
                                      </div>
                                      <div class="row col-lg-11  col-xs-12" style=" margin-left:50%; transform: translateX(-50%);">
                                        <div class="form-group label-floating col-lg-6 col-xs-11">
                                            <label >Fecha:</label>
                                            <input id="fecha" name="fecha" type="text" class="form-control datepicker" required="TRUE">
                                        </div>
                                        <div class="form-group label-floating col-lg-6 col-xs-11">
                                            <label >Hora:</label>
                                            <input id="hora" name="hora" type="text"  class="form-control timepicker" required="TRUE">
                                        </div>
                                      </div>

                                          <button type="button"  onclick="Regis()" style="margin-left:40%; margin-top:2%;  " class="btn btn-fill btn-success" name="RegistrarCliente">Registrar</button>


                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>



  <!--MODAL MODIFICAR PROGRAMACION-->

<script type="text/javascript">
$(document).ready(function() {
    $('#table_fichas').DataTable();
} );

</script>
<script type="text/javascript">
$('.timepicker').datetimepicker({
//          format: 'H:mm',    // use this format if you want the 24hours timepicker
   format: 'h:mm A',    //use this format if you want the 12hours timpiecker with AM/PM toggle
   icons: {
       time: "fa fa-clock-o",
       date: "fa fa-calendar",
       up: "fa fa-chevron-up",
       down: "fa fa-chevron-down",
       previous: 'fa fa-chevron-left',
       next: 'fa fa-chevron-right',
       today: 'fa fa-screenshot',
       clear: 'fa fa-trash',
       close: 'fa fa-remove',
       inline: true

   }
});
</script>
<script src="public/js/scriptProgramacion.js"></script>
