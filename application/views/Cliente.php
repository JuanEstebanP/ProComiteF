<?php
include 'Master.php';
?>
<div class="content">


<div id="page-wrapper" >



          <div class="row " >
                          <div class="col-md-12 " style=" " >
                              <div class="card">
                                  <div class="card-header card-header-icon" data-background-color="blue">
                              <i class="fa fa-user-plus" aria-hidden="true" style="font-size:1.9em;"></i>
                                  </div>
                                  <div class="card-content">
                                      <h4 class="card-title">Registro de clientes de proyectos</h4>
                                      <form method="#" action="#">
                                          <div class="row  col-lg-11 col-xs-12" style=" margin-left:50%; transform: translateX(-50%);" >
                                          <div class="form-group label-floating col-lg-6 col-xs-11" >
                                              <label class="control-label">Nombre:</label>
                                              <input id="textNombreCliente" name="textNombreCliente" type="text"  class="form-control input-md">
                                          </div>
                                          <div class="form-group label-floating col-lg-6 col-xs-11">
                                              <label class="control-label">Apellido:</label>
                                          <input id="textApellidoCliente" name="textApellidoCliente" type="text"  class="form-control input-md">
                                          </div>
                                        </div>
                                        <div class="row col-lg-11  col-xs-12" style=" margin-left:50%; transform: translateX(-50%);">
                                          <div class="form-group label-floating col-lg-6 col-xs-11">
                                              <label class="control-label">Teléfono:</label>
                                              <input id="textTelefonoCliente" name="textTelefonoCliente" type="text"  class="form-control input-md">
                                          </div>
                                          <div class="form-group label-floating col-lg-6 col-xs-11">
                                              <label class="control-label">Correo:</label>
                                              <input id="textCorreoCliente" name="textCorreoCliente" type="text" class="form-control input-md">
                                          </div>
                                        </div>
                                        <div class="row  ">
                                            <button type="button"  onclick="regisCliente()" style="margin-left:50%; transform: translateX(-50%); " class="btn btn-fill btn-success" name="RegistrarCliente">Registrar</button>
                                        </div>

                                      </form>
                                  </div>
                              </div>
                          </div>
                        </div>


      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-icon" data-background-color="blue">
                                          <i class="fa fa-list-alt" aria-hidden="true" style="font-size:2em;"></i>
                  </div>
                  <div class="card-content">
                      <h4 class="card-title">Listado de clientes</h4>
                      <div class="material-datatables table-responsive">
                          <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" id="table_usuario">
                              <thead>
                                  <tr>
                                    <th class="center">#</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Editar</th>
                                  </tr>
                              </thead>
                              <tbody id="">
                                <?php foreach ($Cliente as $c) { ?>

                                  <tr class="odd gradeX">
                                  <td><?php echo $c['id_cliente']; ?></td>
                                  <td><?php echo $c['nombre']; ?></td>
                                  <td><?php echo $c['apellido']; ?></td>
                                  <td><?php echo $c['telefono']; ?></td>
                                  <td class="center"><?php echo $c['correo']; ?></td>

                                  <td>
                                    <button class="btn btn-primary" id="hoa" name="hoa" onclick="Editar(<?php echo $c['id_cliente']; ?>)"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                  </td>
                                </tr>
                                <?php  } ?>

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>


<div id="modalCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Cliente</h4>
      </div>
      <div class="modal-body">
        <!-- <form class="form-horizontal"> -->
        <?php echo form_open('ControllerCliente/ActualizarCliente', array("class"=>"form-horizontal", "id"=>"formActualizarCliente", "role"=>"form", 'method'=>'post')); ?>
        <fieldset>
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">ID: </label>
            <div class="col-md-4">
              <input id="txtIdClienteM" name="txtIdCliente" type="text" class="form-control input-md" readonly="">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Nombre: </label>
            <div class="col-md-4">
              <input id="txtNombreClienteM" name="txtNombreCliente" type="text" placeholder="placeholder" class="form-control input-md">
            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Apellido: </label>
            <div class="col-md-4">
              <input id="txtApellidoClienteM" name="txtApellidoCliente" type="text" placeholder="placeholder" class="form-control input-md">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Teléfono: </label>
            <div class="col-md-4">
              <input id="txtTeleCliente" name="txtTeleCliente" type="text" placeholder="placeholder" class="form-control input-md">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Correo: </label>
            <div class="col-md-4">
              <input id="txtCorreoClienteM" name="txtCorreoCliente" type="text" placeholder="placeholder" class="form-control input-md">
            </div>
          </div>
        </fieldset>
        <!-- </form> -->
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <button type="submit" id="btnActualizarCliente" name="btnActualizarCliente" class="btn btn-success">Enviar</button>
      </div>
    </div>
    <?php echo form_close(); ?>
    </div>
  </div>
</div>
</div>
</div>
</div>
</body>
<!-- <script src="Plantilla/assets/js/Validaciones/ClientesValid.js"></script> -->
<script src="public/js/Clientes.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#table_usuario').DataTable();
} );

</script>
