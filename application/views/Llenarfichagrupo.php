<?php
include 'Master.php';
?>
<div class="content">
  <div id="page-wrapper" >
    <div class="row " >
                    <div class="col-md-12 " style=" " >
                        <div class="card">
                            <div class="card-header card-header-icon" data-background-color="blue">
                                        <i class="fa fa-address-book" aria-hidden="true" style="font-size:2em;"></i>
                            </div>
                            <div class="card-content">
                                <h4 class="card-title">Asociar aprendices a ficha de grupo</h4>
                                <form method="#" action="#">
                                    <div class="row col-lg-11  col-xs-12" style=" margin-left:35%; ">
                                    <div class="form-group  col-lg-5 col-xs-11" >
                                        <label class="control-label">Fichas Grupos:</label>
                                        <select class="selectpicker" data-style="select-with-transition" title="Seleccione ficha de grupo" data-live-search="true"  id="txtFicha1" name="txtFicha" >
                                          <?php foreach ($Ficha as $key):?>
                                            <option value="<?= $key['id_fichaGrupo'] ?>">Numero:
                                              <?=$key['numeroFicha'];?>
                                            </option>
                                          <?php endforeach ?>
                                        </select>
                                    </div>
                                  </div>

                                      <div class="row" style=" margin-left:45%;">
                                          <button type="button" style="margin-left:9%; transform: translateX(-50%); " class="btn btn-fill btn-success"  name="buttonRegistrar" id="hola" >Asociar</button>
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
                        <h4 class="card-title">Listado de aprendices</h4>
                        <div class="material-datatables table-responsive">
                            <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" id="table_aprendiz">
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
                                <tbody id="tblAprendiz">

                                  <?php   foreach ($Aprendiz as $a) { ?>

                                    <tr class="odd gradeX">
                                      <td><?php echo $a['id_aprendiz']; ?></td>
                                      <td><?php echo $a['nombre']; ?></td>
                                      <td><?php echo $a['apellido']; ?></td>
                                      <td><?php echo $a['documento']; ?></td>
                                      <td class="center"><?php echo $a['correo']; ?></td>
                                      <td>
                                        <input  class="checkbox listaapren" type="checkbox" value="<?php echo $a['id_aprendiz'];?>"></input>
                                      </td>
                                      </tr>
                                    <?php
                                   } ?>
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
        $('#table_aprendiz').DataTable();
    } );

    </script>

<script src="public/js/llenarfichasgrupos.js"></script>
