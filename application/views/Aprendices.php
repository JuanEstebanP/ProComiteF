
<div class="tab-pane" id="re">


  <div class="content">


  <div id="page-wrapper" >

    <div class="row " >
                    <div class="col-md-12 " style=" " >
                        <div class="card">
                            <div class="card-header card-header-icon" data-background-color="blue">
                                <i class="fa fa-users" aria-hidden="true" style="font-size:1.9em;"></i>
                            </div>
                            <div class="card-content">
                                <h4 class="card-title">Registrar Aprendices </h4>
                                <div >
                                <form action="<?php base_url();  ?>ControllerAprendiz/ImportarExcel" enctype="multipart/form-data" method="post" class="form-horizontal">

                                      <center>  <div class="col-md-12 col-sm-12">
                                              <!-- <legend>Regular Image</legend> -->
                                              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                  <div class="fileinput-new thumbnail">
                                                    <img alt="No hay archivo">
                                                  </div>
                                                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                  <div>
                                                      <span class="btn btn-rose btn-round btn-file">
                                                          <span class="fileinput-new">Seleccionar archivo</span>
                                                          <span class="fileinput-exists" >Cambiar archivo</span>
                                                          <input type="file" name="file" accept=".xlsx" required/>
                                                      </span>
                                                      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                <button  type="submit" class="btn btn-fill btn-success"><i class="fa fa-upload" aria-hidden="true"></i>Importar</button>

                                              </div>

                                          </div>    </center>

                                </form>
                            </div>

                            <div>
                        </div>
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
                                      <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" id="table_aprendiz2">
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
</div>

          <script type="text/javascript">
          $(document).ready(function() {
              $('#table_aprendiz2').DataTable();
          } );

          </script>
<script src="public/js/Aprendices.js"></script>
