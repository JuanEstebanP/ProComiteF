

<div class="tab-pane" id="ri">
<div class="content">


<div id="page-wrapper" >
  <div class="row " >
                  <div class="col-md-12 " style=" " >
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="blue">
                              <i class="fa fa-user-plus" aria-hidden="true" style="font-size:1.9em;"></i>
                          </div>
                          <div class="card-content">
                              <h4 class="card-title">Registrar Aprendiz</h4>
                              <form method="#" action="#">
                                  <div class="row  col-lg-11 col-xs-12" style=" margin-left:50%; transform: translateX(-50%);" >
                                  <div class="form-group label-floating col-lg-6 col-xs-11" >
                                      <label class="control-label">Documento:</label>
                                      <input id="txtDocumento" name="txtDocumento" type="text"  class="form-control input-md" required="true">
                                  </div>
                                  <div class="form-group label-floating col-lg-6 col-xs-11">
                                      <label class="control-label">Nombre:</label>
                                      <input id="txtNombre"  value="<?php echo $this->input->post('txtNombre'); ?>"
                                      name="txtNombre" type="text"  class="form-control input-md" required="true">
                                  </div>
                                </div>
                                <div class="row col-lg-11  col-xs-12" style=" margin-left:50%; transform: translateX(-50%);">
                                  <div class="form-group label-floating col-lg-6 col-xs-11">
                                      <label class="control-label">Apellido:</label>
                                      <input id="txtApellido" name="txtApellido" type="text"  class="form-control input-md" required="true">
                                  </div>
                                  <div class="form-group label-floating col-lg-6 col-xs-11">
                                      <label class="control-label">Correo:</label>
                                      <input id="txtCorreo" name="txtCorreo" type="text"  class="form-control input-md" required="true">
                                </div>
                                <div class="row  ">
                                    <button type="button"  onclick="regisAprendi()" style="margin-left:50%; transform: translateX(-50%); " class="btn btn-fill btn-success">Registrar</button>
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
                        <h4 class="card-title">Listado de Aprendices</h4>
                        <div class="material-datatables table-responsive">
                            <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" id="table_aprendiz">
                                <thead>

                  <tr>
                    <th class="center">#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Documento</th>
                    <th>Correo</th>
                    <th>Editar</th>
                  </tr>
                </thead>
                <tbody id="tblAprendiz">

                  <?php   foreach ($Aprendiz as $a) { ?>

                    <tr class="odd gradeX">
                      <td><?php echo $a['id_aprendiz']; ?></td>
                      <td><?php echo $a['nombre']; ?></td>
                      <td><?php echo $a['apellido']; ?></td>
                      <td><?php echo $a['documento']; ?></td>
                      <td class="center"><?php echo $a['correo']; ?></td>
                      <td>


                        <button class="btn btn-primary" id="hoa" name="hoa" onclick="Editar(<?php echo $a['id_aprendiz']; ?>)">
                          <i class="fa fa-pencil" aria-hidden="true"></i></button>
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
<!-- <div class="panel panel-default">
         <div class="panel-heading"><center>
           Importar Aprendices
         </div></center>
         <div class="form-group">
           <form action="<?php base_url();  ?>ControllerAprendiz/ImportarExcel" enctype="multipart/form-data" method="post" class="form-horizontal">


             <div class="form-group">
               <label class="col-md-4 control-label" for="filebutton">Cargar archivo:</label>
               <div class="col-md-4">
                   <input type="file" name="file" accept=".xlsx" required/></label>
               </div>
             </div>


             <div class="form-group">
               <label class="col-md-4 control-label" for="singlebutton">Importar:</label>
               <div class="col-md-4">
                 <button name="file" id="file" type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
               </div>
             </div>
           </form>
         </div>
       </div> -->


<!--
MODAL PARA EDITAR
- -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Aprendiz</h4>
      </div>
      <div class="modal-body">
        <!-- <form class="form-horizontal"> -->
        <?php echo form_open('ControllerAprendiz/EditarAprendiz', array("class"=>"form-horizontal", "id"=>"formActualizar", "role"=>"form", 'method'=>'post')); ?>
        <fieldset>
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinputmodificar">ID: </label>
            <div class="col-md-4">
              <input id="textinputmodificar" name="txtIdModificar" type="text" class="form-control input-md" readonly="" required="true">
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-4 control-label" for="textinputmodificar">Documento: </label>
            <div class="col-md-4">
              <input id="textinputmodificar" name="txtDocumentoModificar" type="text" placeholder="placeholder" class="form-control input-md" required="true">
            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinputmodificar">Nombre: </label>
            <div class="col-md-4">
              <input id="textinputmodificar" name="txtNombreModificar" type="text" placeholder="placeholder" class="form-control input-md" required="true">
            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinputmodificar">Apellido: </label>
            <div class="col-md-4">
              <input id="textinputmodificar" name="txtApellidoModificar" type="text" placeholder="placeholder" class="form-control input-md" required="true">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinputmodificar">Correo: </label>
            <div class="col-md-4">
              <input id="textinputmodificar" name="txtCorreoModificar" type="text" placeholder="placeholder" class="form-control input-md" required="true">
            </div>
          </div>


        </fieldset>
        <!-- </form> -->
      </div>
      <div class="modal-footer">
        <input type="submit" name="BotonEditar" class="btn btn-primary" value="Enviar">

      </div>
    </div>

  </div>
</div>
</div>
</div>
<!-- <script src="Plantilla/assets/js/Validaciones/AprendicesValid.js"></script> -->
<script src="public/js/Aprendices.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#table_aprendiz').DataTable();
} );

</script>
