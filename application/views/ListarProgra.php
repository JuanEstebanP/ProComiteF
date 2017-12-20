<?php include 'Master.php' ?>

<div class="content">
<div id="page-wrapper" >


  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header card-header-icon" data-background-color="blue">
                <i class="fa fa-list-ol" aria-hidden="true" style="font-size:2em;"></i>
              </div>
              <div class="card-content">
                  <h4 class="card-title">Listado de clientes</h4>
                  <div class="material-datatables table-responsive">
                      <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" id="table_prog">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>fecha</th>
                                <th>Hora</th>
                                <th>Lugar</th>
                                <th>Modificar</th>
                                <th>Asistencia</th>

                                <th>Reporte</th>

                                <th>Fichas en comité</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($programaciones as $k): ?>
                              <tr>
                                <td><?php echo $k['id_programacion'];?></td>
                                <td><?php echo $k['titulo']; ?></td>
                                <td><?php echo $k['fecha']; ?></td>
                                <td><?php echo $k['hora']; ?></td>
                                <td><?php echo $k['lugar']; ?></td>
                                <td><button class="btn btn-primary" type="button" name="button" onclick="mostrarProgramacion(<?php echo $k['id_programacion']; ?>)"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-primary" type="button" name="button" onclick="consultarInstructores(<?php echo $k['id_programacion']; ?>)" data-toggle="modal" data-target="#myModaluno"><i class="fa fa-users" aria-hidden="true"></i></button></td>

                                <td>
                              <button type="button" class="btn btn-primary" onclick="pdf(<?php echo  $k['id_programacion'];?>)" value="<?php echo  $k['id_programacion'];?>"><i class="fa fa-print"></i></button>

                                </td>
                              <td>
                                <button class="btn btn-primary" type="button" name="button" onclick="fichasXprogramacion(<?php echo  $k['id_programacion']; ?>)"><i class="fa fa-file-text" aria-hidden="true"></i></button>

                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>

  <div id="ModificarProgramacion" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modificar Programación</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" id="formularioModicarProgramacion" method="post" action="Controllerlistprograma/editarProgramacion">
          <fieldset>

            <input type="hidden" id="oculto" name="oculto">

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Titulo Programación</label>
              <div class="col-md-4">
                <input id="tituloModificar" name="tituloModificar" type="text" class="form-control input-md">

              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Fecha</label>
              <div class="col-md-4">
                <input id="fechaModificar" name="fechaModificar" type="date" placeholder="dia-mes-año" class="form-control input-md">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Hora</label>
              <div class="col-md-4">
                <input id="horaModificar" name="horaModificar" type="time" placeholder="00:00" class="form-control input-md">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Lugar</label>
              <div class="col-md-4">
                <input id="lugarModificar" name="lugarModificar" type="text" placeholder="torre norte" class="form-control input-md">

              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="singlebutton"></label>
            </div>
          </fieldset>
          <div class="modal-footer">
            <button id="btnProgramacionModificar" type"submit" name="btnProgramacionModificar" class="btn btn-success" onclick="" >Modificar</button>
            <button type="button" id="cerrar" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- Modal de fichas -->
<div id="myModaldos" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fichas En Comité</h4>
      </div>
      <div class="modal-body">
        <table  class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>titulo</th>
              <th>Objetivo</th>
            </tr>
          </thead>
          <tbody id="proyectosXcomite">
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- fin modal fichas -->
<div id="myModaluno" class="modal fade" role="dialog">
   <div class="row">
       <div class="col-md-6 " style="margin-left: 50%; transform:translateX(-50%); ">
           <div class="card">




               <div class="card-content">
                   <h4 class="card-title">Listado de Asistencia</h4>
                     <button type="button" class="close" data-dismiss="modal" style="color:#3C4858; margin-top: -2.5%" >X</button>
                   <div class="material-datatables table-responsive">
                       <table class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" id="table_ficha1">
                         <tr>
                           <th class="center">#</th>
                           <th>Nombres</th>
                           <th>Apellidos</th>
                           <th>Documento</th>
                           <th>Correo</th>
                         </tr>
                           </thead>
                           <tbody id="listainst">

                             </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
 </div>


<script src="public/js/scriptProgramacion.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#table_prog').DataTable();
} );

</script>
