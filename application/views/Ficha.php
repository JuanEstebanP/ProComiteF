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
                                        <h4 class="card-title">Registro de fichas </h4>
                                        <form method="#" action="#">
                                          <div class="row col-lg-11  col-xs-12" style=" margin-left:4.2%; ">
                                        <div class="form-group label-floating col-lg-6 col-xs-11" style="margin-top: 1%;" >

                                          <select class="selectpicker" data-style="select-with-transition" title="titular de la ficha" data-live-search="true"  id="txtTitular" name="txtTitular">
                                            <optgroup label="Instructores">
                                              <?php foreach ($Ficha as $key):?>
                                                <option value="<?= $key['id_instructor'] ?>">Documento:
                                                  <?=$key['documento'];?> / Nombre:
                                                  <?=$key['nombre'];?>
                                                </option>
                                              <?php endforeach ?>
                                            </optgroup>
                                        </select>
                                    </div>


                                            <div class="form-group label-floating col-lg-6 col-xs-11" >
                                                <label class="control-label">Número De Ficha:</label>
                                            <input id="txtNumero" name="txtNumero" type="text"  class="form-control input-md" required="true" >
                                            </div>
                                          </div>

                                          <div class="row col-lg-11  col-xs-12"  style=" margin-left:4.2%;">
                                            <div class="form-group label-floating col-lg-6 col-xs-11">
                                                <label >Incio Etapa Lectiva:</label>
                                                <input type="text" class="form-control datepicker" id="txtIniciolectiva" name="txtIniciolectiva" placeholder="Año/Mes/Día" >
                                            </div>
                                            <div class="form-group label-floating col-lg-6 col-xs-11">
                                                <label >Fin Etapa Lectiva:</label>
                                                <input id="txtFinlectiva" name="txtFinlectiva" type="text"  class="form-control datepicker" required="true" placeholder="Año/Mes/Día">
                                            </div>
                                          </div>

                                          <div class="row " >
                                              <button type="button" onclick="regisFichas()" style="margin-left:50%; transform: translateX(-50%); " class="btn btn-fill btn-success" name="">Registrar</button>
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

                          <i class="fa fa-book" aria-hidden="true" style="font-size:1.9em;"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Listado de fichas</h4>
                        <div class="material-datatables table-responsive">
                            <table class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" id="table_ficha">
                                <thead>
                                  <tr>
                                    <th class="center">#</th>
                                    <th>Numero Ficha</th>
                                    <th>Titular Ficha</th>
                                    <th>Inicio Lectiva</th>
                                    <th>Fin Lectiva</th>
                                    <th>Editar</th>
                                    <th>Aprendices en el grupo</th>
                                  </tr>
                                </thead>
                                <tbody id="tblAprendiz">

                                  <?php   foreach ($Ficha2 as $f) { ?>

                                    <tr class="odd gradeX">
                                      <td><?php echo $f['id_fichaGrupo']; ?></td>
                                      <td><?php echo $f['numeroFicha']; ?></td>
                                      <td><?php echo $f['titularFicha']; ?></td>
                                      <td><?php echo $f['iniciolectiva']; ?></td>
                                      <td><?php echo $f['finlectiva']; ?></td>
                                      <td>


                                        <button class="btn btn-primary" id="hoa" name="hoa" onclick="Editar(<?php echo $f['id_fichaGrupo']; ?>)">
                                          <i class="fa fa-pencil" aria-hidden="true"></i></button>

                                        </td>

                                        <td>
                                          <button   class="btn btn-primary" name="button" onclick="consultaAprendices(<?php echo $f['id_fichaGrupo'];?>)" data-toggle="modal" data-target="#myModaluno">
                                            <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
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



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Ficha</h4>
      </div>
      <div class="modal-body">
        <!-- <form class="form-horizontal"> -->
        <?php echo form_open('ControllerFicha/EditarFicha', array("class"=>"form-horizontal", "id"=>"formActualizar", "role"=>"form", 'method'=>'post')); ?>
        <fieldset>

          <div class="form-group">
            <label class="col-md-4 control-label" for="textinputmodificar">ID: </label>
            <div class="col-md-4">
              <input id="textinputmodificar" name="txtIdModificar" type="text" class="form-control input-md" readonly="" required="true">
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Titular De la Ficha:</label>
            <div class="col-md-4">
              <select class=" selectpicker" data-style="select-with-transition"  data-live-search="true"  id="txtTitularModificar"name="txtTitularModificar" style="width: 100%;" >
                <?php foreach ($Ficha as $key):?>
                  <option value="<?= $key['id_instructor'] ?>">Documento:
                    <?=$key['documento'];?> / Nombre completo:
                    <?=$key['nombre'];?>
                  </option>
                <?php endforeach ?>
              </select>
            </div>
          </div>




          <div class="form-group">
            <label class="col-md-4 control-label" for="textinputmodificar">Numero De Ficha: </label>
            <div class="col-md-4">
              <input id="textinputmodificar" name="txtNumeroModificar" type="text" placeholder="placeholder" class="form-control input-md" required="true">
            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinputmodificar">Incio Etapa Lectiva: </label>
            <div class="col-md-4">
              <input id="textinputmodificar" name="txtIniciolectivaModificar" type="text" placeholder="placeholder" class="form-control input-md" required="true">
            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinputmodificar">Fin Etapa Lectiva: </label>
            <div class="col-md-4">
              <input id="textinputmodificar" name="txtFinlectivaModificar" type="text" placeholder="placeholder" class="form-control input-md" required="true">
            </div>
          </div>

          <!-- Text input-->



        </fieldset>
        <!-- </form> -->
      </div>
      <div class="modal-footer">
        <button type="submit" name="BotonEditar" class="btn btn-primary">Enviar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#table_ficha').DataTable();
} );

</script>


<script src="public/js/Fichas.js"></script>
