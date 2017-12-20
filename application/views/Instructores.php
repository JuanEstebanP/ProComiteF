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
                              <h4 class="card-title">Registro de Instructores</h4>
                              <form method="#" action="#">
                                  <div class="row  col-lg-11 col-xs-12" style=" margin-left:50%; transform: translateX(-50%);" >
                                  <div class="form-group label-floating col-lg-6 col-xs-11" >
                                      <label class="control-label">Nombre:</label>
                                    <input id="txtNombre"  value="<?php echo $this->input->post('txtNombre'); ?>"  name="txtNombre" type="text"  class="form-control input-md">
                                  </div>
                                  <div class="form-group label-floating col-lg-6 col-xs-11">
                                      <label class="control-label">Apellido:</label>
                                  <input id="txtApellido" name="txtApellido" type="text" class="form-control input-md">
                                  </div>
                                </div>
                                <div class="row col-lg-11  col-xs-12" style=" margin-left:50%; transform: translateX(-50%);">
                                  <div class="form-group label-floating col-lg-6 col-xs-11">
                                      <label class="control-label">Documento:</label>
                                      <input id="txtDocumento" name="txtDocumento" type="text"  class="form-control input-md" >
                                  </div>
                                  <div class="form-group label-floating col-lg-6 col-xs-11">
                                      <label class="control-label">Correo:</label>
                                      <input id="txtCorreo" name="txtCorreo" type="text" class="form-control input-md">
                                  </div>
                                </div>
                                <div class="row ">
                                    <button type="button" onclick="regisInstructor()" style="margin-left:50%; transform: translateX(-50%); " class="btn btn-fill btn-success" >Registrar</button>
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
                                <h4 class="card-title">Listado de instructores</h4>
                                <div class="material-datatables table-responsive">
                                    <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" id="table_instructores">
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
                                        <tbody id="tblInstructor">
                                          <?php foreach ($Instructor as $i) { ?>

                                            <tr class="odd gradeX">
                                              <td><?php echo $i['id_instructor']; ?></td>
                                              <td><?php echo $i['nombre']; ?></td>
                                              <td><?php echo $i['apellido']; ?></td>
                                              <td><?php echo $i['documento']; ?></td>
                                              <td class="center"><?php echo $i['correo']; ?></td>

                                              <td>
                                                <button class="btn btn-primary" id="hoa" name="hoa" onclick="Editar(<?php echo $i['id_instructor']; ?>)"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                              </td>
                                            </tr>
                                            <?php } ?>

                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>






  <!---
  MODAL PARA EDITAR
  --->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Instructores</h4>
        </div>
        <div class="modal-body">
          <!-- <form class="form-horizontal"> -->
          <?php echo form_open('ControllerInstructor/ActualizarInstructor', array("class"=>"form-horizontal", "id"=>"formActualizar", "role"=>"form", 'method'=>'post','name'=>'formActualizar')); ?>
          <fieldset>
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">ID: </label>
              <div class="col-md-4">
                <input id="txtIdModificar" name="txtIdModificar" type="text" class="form-control input-md" readonly="">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Nombre: </label>
              <div class="col-md-4">
                <input id="txtNombreModificar" name="txtNombreModificar" type="text" placeholder="placeholder" class="form-control input-md">
              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Apellido: </label>
              <div class="col-md-4">
                <input id="txtApellidoModificar" name="txtApellidoModificar" type="text" placeholder="placeholder" class="form-control input-md">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Documento: </label>
              <div class="col-md-4">
                <input id="txtDocumentoModificar" name="txtDocumentoModificar" type="text" placeholder="placeholder" class="form-control input-md">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Correo: </label>
              <div class="col-md-4">
                <input id="txtCorreoModificar" name="txtCorreoModificar" type="text" placeholder="placeholder" class="form-control input-md">
              </div>
            </div>
          </fieldset>
          <!-- </form> -->
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          <button type="submit" id="btnActualizar" name="btnActualizar" class="btn btn-success">Enviar</button>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
  <!-- <script src="Plantilla/assets/js/Validaciones/InstructoresValid.js"></script> -->
  <script src="public/js/Instructores.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#table_instructores').DataTable();
  } );

  </script>
