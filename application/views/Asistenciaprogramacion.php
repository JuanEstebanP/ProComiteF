<?php
include 'Master.php';
?>
<div class="content">
<div id="page-wrapper" >
  <div class="row " >
                  <div class="col-md-12 " style=" " >
                      <div class="card">
                          <div class="card-header card-header-icon" data-background-color="blue">
                            <i class="fa fa-calendar" aria-hidden="true" style="font-size:2em;"></i>
                          </div>
                          <div class="card-content">
                              <h4 class="card-title">Asistencia</h4>
                              <form method="#" action="#">
                                  <div class="row  col-lg-12 col-xs-12" style=" " >
                                  <div class="form-group label-floating col-lg-6 col-xs-6" style="margin-left:27%;" >
                                      <label>Programación:</label>
                                        <select class="selectpicker" data-style="select-with-transition" data-live-search="true" id="txtpro"  name="txtpro" title="">
                                        <option value=""></option>
                                        <?php foreach ($programacion as $f): ?>
                                          <option value="<?=  $f['id_programacion']; ?>">Titulo:
                                            <?= $f['titulo']; ?>        Fecha:
                                            <?= $f['fecha']; ?>
                                          </option>
                                        <?php endforeach ?>
                                      </select>
                                  </div>
                                </div>


                                  <div class="form-group label-floating col-lg-12 ">
                                                <center><button type="button" class="btn btn-success" id="asistencia">Asistencia</button></center>
                                  </div>
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
                                    <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" id="table_inst">
                                        <thead>
                                          <tr>
                                            <th class="center">#</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Documento</th>
                                            <th>Correo</th>
                                            <th>Asociar</th>
                                          </tr>
                                        </thead>
                                        <tbody id="tblasistencia">
                                          <?php   foreach ($instructores as $i) { ?>
                                            <tr class="odd gradeX">
                                              <td><?php echo $i['id_instructor']; ?></td>
                                              <td><?php echo $i['nombre']; ?></td>
                                              <td><?php echo $i['apellido']; ?></td>
                                              <td><?php echo $i['documento']; ?></td>
                                              <td><?php echo $i['correo']; ?></td>
                                              <td><input class="listainst" type="checkbox" value="<?php echo $i['id_instructor'];?>"></input></td>
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

<script type="text/javascript">
  $(document).ready(function() {
  $('#table_inst').DataTable();
  } );
              </script>
<script src="public/js/AsistenciaProgramacion.js"></script>
