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
                                        <h4 class="card-title">Asociar aprendices a fichas de proyecto</h4>
                                        <form method="#" action="#">
                                            <div class="row  col-lg-11 col-xs-12" style=" margin-left:4.3%;" >
                                            <div class="form-group label-floating col-lg-6 col-xs-11"style="margin-top:3.1%;" >
                                              <div class="form-group">
                                                  <select class="selectpicker" data-style="select-with-transition" data-live-search="true" id="txtGrupo"  name="txtGrupo" title="Fichas de grupo">
                                                    <?php foreach ($fichasGrupo as $f): ?>
                                                      <option value="<?=  $f['id_fichaGrupo']; ?>">Ficha:
                                                        <?= $f['numeroFicha']; ?>
                                                      </option>
                                                    <?php endforeach ?>
                                                  </select>

                                              </div>
                                            </div>

                                          <div class="form-group label-floating col-lg-6 col-xs-11" >
                                            <div class="form-group">
                                              <label  for="textinput">Fichas de proyecto:</label>
                                              <div class="" id="Seleccionar">
                                          </div>
                                            </div>
                                          </div>

                                          </div>

                                          <div class="row   ">
                                              <button id="asos" type="button"  style="margin-left:50%; transform: translateX(-50%); " class="btn btn-fill btn-success" >Asociar</button>

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
                                              <table class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" id="table_ficha">
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
                                                  <tbody id="tblasociados">
                                              </table>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </div>
                          </div>


<script src="public/js/Llenarfichaproyecto.js"></script>
