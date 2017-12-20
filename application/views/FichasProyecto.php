<?php
include 'Master.php';
?>
<div class="content">

<div id="page-wrapper" >

  <div class="row " >
                  <div class="col-md-12 " style=" " >
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="blue">
                                        <i class="fa fa-file-text" aria-hidden="true" style="font-size:1.9em;"></i>
                          </div>
                          <div class="card-content">
                              <h4 class="card-title">Registro ficha de proyecto</h4>
                              <form id="formFichaproyecto" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                  <div class="row  col-lg-11 col-xs-12" style=" margin-left:4.3%;" >
                                    <div class="form-group label-floating col-lg-6 col-xs-11"  style="margin-top:1%;">
                                        <select class="selectpicker" data-style="select-with-transition"  data-live-search="true" title="Ficha caracteristica"   id="txtFichagrupo" name="txtFichagrupo"  required="true" >
                                          <?php foreach ($ficha as $key):?>
                                            <option value="<?= $key['id_fichaGrupo'] ?>">Numero:
                                              <?=$key['numeroFicha'];?>
                                            </option>
                                          <?php endforeach ?>
                                        </select>
                                    </div>
                                  <div class="form-group label-floating col-lg-6 col-xs-11"  style="margin-top:1%;">
                                      <select class="selectpicker" data-style="select-with-transition"  data-live-search="true" title="Cliente del proyecto"   id="txtCliente" name="txtCliente" required="true" >

                                        <?php foreach ($Fichaproyectos as $key):?>
                                          <option value="<?= $key['id_cliente'] ?>">Nombre:
                                            <?=$key['nombre'];?>
                                          </option>
                                        <?php endforeach ?>
                                      </select>
                                  </div>

                                </div>
                                <div class="row col-lg-11  col-xs-12" style=" margin-left:50%; transform: translateX(-50%);">
                                  <div class="form-group label-floating col-lg-6 col-xs-11">
                                      <label class="control-label">Nombre del proyecto:</label>
                                    <input id="txtNombre" name="txtNombre" type="text" class="form-control input-md" >
                                  </div>
                                  <div class="form-group label-floating col-lg-6 col-xs-11">
                                      <label class="control-label">Objetivo general:</label>
                                    <input id="txtObjetivo" name="txtObjetivo" type="text"  class="form-control input-md" >
                                  </div>

                                </div>
                                <div class="row col-lg-11  col-xs-12" style=" margin-left:50%; transform: translateX(-50%);">
                                  <div class="form-group label-floating col-lg-6 col-xs-11">
                                      <label class="control-label">Versión:</label>
                                      <input id="txtVersion" name="txtVersion" type="text"  class="form-control input-md" >
                                  </div>
                                  <div class=" label-floating col-lg-6 col-xs-11">
                                      <label class="control-label">Ficha PDF:</label>
                                          <input type="file" name="file_pr" id="file_pr" accept=".pdf">
                                  </div>
                                </div>
                                <div class="form-group label-floating col-lg-6 col-xs-11" style="margin-left:40%;">
                                    <button type="button"  onclick="regisProyecto()"   class="btn btn-fill btn-success" name="">Registrar</button>
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
                                    <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" id="table_fp">
                                        <thead>
                                          <tr>
                                            <th class="center">#</th>
                                            <th>Titulo proyecto</th>
                                            <th>Objetivo General</th>
                                            <th>Versión</th>
                                            <th>Cliente</th>
                                            <th>Ficha a la que pertenece</th>
                                            <th>Estado</th>
                                            <th>Editar</th>
                                            <th>Consultar aprendices</th>

                                          </tr>
                                        </thead>
                                        <tbody id="tbl_fichaproyecto">

                                          <?php   foreach ($Ficha2 as $f) { ?>

                                            <tr class="odd gradeX">
                                              <td><?php echo $f['id_ficha']; ?></td>
                                              <td><?php echo $f['titulo']; ?></td>
                                              <td><?php echo $f['obj_general']; ?></td>
                                              <td><?php echo $f['version']; ?></td>
                                              <td><?php echo $f['id_cliente']; ?></td>
                                              <td><?php echo $f['id_fichaGrupo']; ?></td>
                                              <td><?php echo $f['estado']; ?></td>

                                              <td>


                                                <button class="btn btn-primary" id="hoa" name="hoa" onclick="Editar(<?php echo $f['id_ficha'];?>)">
                                                  <i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                </td>

                                                <td>

                                                  <button data-toggle="modal" data-target="#myModaluno" name="button" class="btn btn-primary" onclick="consultarAprendiz(<?php echo $f['id_ficha'];?>)">
                                                    <i class="fa fa-search" arial-hidden="true"></i>
                                                  </button>
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




<div id="myModaluno" class="modal fade" role="dialog">
   <div class="row">
       <div class="col-md-8 " style="margin-left: 50%; transform:translateX(-50%); ">
           <div class="card">




               <div class="card-content">
                   <h4 class="card-title">Listado de aprendices</h4>
                     <button type="button" class="close" data-dismiss="modal" style="color:#3C4858; margin-top: -2.5%" >X</button>
                   <div class="material-datatables table-responsive">
                       <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" id="table_ficha1">
                           <thead>
                             <tr>
                               <th class="center">#</th>
                               <th>Nombres</th>
                               <th>Apellidos</th>
                               <th>Documento</th>
                               <th>Correo</th>
                               <th>Desasociar</th>
                             </tr>
                           </thead>
                           <tbody id="tblaprendices">

                             </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
 </div>



<!---
MODAL PARA EDITAR -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Ficha De Proyecto</h4>
      </div>
      <div class="modal-body">
        <!-- <form class="form-horizontal"> -->
        <!-- <?php echo form_open('ControllerFichaproyecto/EditarFichaproyecto', array("class"=>"form-horizontal", "id"=>"formActualizar", "role"=>"form", 'method'=>'post')); ?> -->
        <form  id="Actualizarproyecto" class="form-horizontal" action="<?php base_url(); ?>ControllerFichaproyecto/EditarFichaproyecto" method="post" enctype="multipart/form-data">
          <fieldset>

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinputmodificar">ID: </label>
              <div class="col-md-4">
                <input id="textinputmodificar" name="txtIdModificar" type="text" class="form-control input-md" readonly="" >
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Cliente Del Proyecto:</label>
              <div class="col-md-4">
                <select  class="selectpicker" data-style="select-with-transition"  data-live-search="true"  id="txtClienteModificar"name="txtClienteModificar">
                  <?php foreach ($Fichaproyectos as $key):?>
                    <option value="<?= $key['id_cliente'] ?>">Nombre:
                      <?=$key['nombre'];?>
                    </option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Nombre Del Poyecto: </label>
              <div class="col-md-4">
                <input id="txtNombreModificar" name="txtNombreModificar" type="text" placeholder="11524" class="form-control input-md" required="true">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Objetivo General:</label>
              <div class="col-md-4">
                <input id="txtObjetivoModificar" name="txtObjetivoModificar" type="text" placeholder="Falta alcance."  class="form-control input-md" required="true">
              </div>
            </div>

            <div class="" style="margin-left:50%; transform:translateX(-50%); margin-top:4%;">

                <label class="control-label">Archivo Ficha:</label>
                    <input type="file" name="file_pr" id="file_pr">
              </div>

<div class="form-group " style="margin-top:4%;">
              <label class="col-md-4 control-label" for="textinput">Versión Del Poyecto: </label>
              <div class="col-md-4">
                <input id="txtVersionModificar" name="txtVersionModificar" type="text" placeholder="1.1..."  class="form-control input-md" required="true">
              </div>
            </div>


            <input type="hidden" name="txtFichagrupoM" value="">
            <input id="txtEstadoModificar" name="txtEstadoModificar" type="hidden"   class="form-control input-md" required="true">

            <!-- Text input-->
          </fieldset>
          <!-- </form> -->
        </div>
        <div class="modal-footer">
          <button type="submit" name="fileC" class="btn btn-primary">Enviar</button>

        </div>
        <!-- <?php echo form_close(); ?> -->
      </form>
    </div>

  </div>
</div>
<!-- Modal consultar fichas -->
<div id="myModalC" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Ficha De Proyecto</h4>
      </div>
      <div class="modal-body">

        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover"  >
            <thead>
              <tr>
                <th>Fichas: </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($fichasB as $f ){ ?>
              <tr class="odd gradeX">
              <td name="Url"><?php echo '<a href="'.$f['Url'].'"> '.substr($f['Url'],10).' </a>' ?></td>
            </tr>

          <?php } ?>
        </tbody>
      </table>



    </div>
  </div>



</div>
      <button type="submit" name="fileC" class="btn btn-primary">Enviar</button>
</div>
</div>
<!-- <script src="Plantilla/assets/js/Validaciones/ProyectoValid.js"></script> -->
<script type="text/javascript">
$(document).ready(function() {
    $('#table_fp').DataTable();
} );
</script>
<script src="public/js/FichasProyectos.js"></script>
