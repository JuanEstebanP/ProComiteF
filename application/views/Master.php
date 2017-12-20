<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="shortcut icon" href="../ProComite2/public/img/logo2.png">

    <title>Revisión y Gestión De Proyectos</title>


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <meta name="viewport" content="width=device-width" />

    <link href="../ProComite2/public/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <link rel="stylesheet" href="../ProComite2/public/css/alertify.css">

        <!-- <link rel="stylesheet" href="../ProComite2/public/css/select2.css"> -->
    <!-- Bootstrap core CSS     -->
    <link href="../ProComite2/public/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../ProComite2/public/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../ProComite2/public/css/demo.css" rel="stylesheet" />

    <link href="../ProComite2/public/css/sweetalert.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="../ProComite2/public/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="../ProComite2/public/css/perfect-scrollbar.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

    <script src="../ProComite2/public/js/jquery.min.js" type="text/javascript"></script>

    <script src="../ProComite2/public/js/jquery-ui.min.js" type="text/javascript"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="../ProComite2/public/js/moment.min.js"></script>
    <!--  DataTables.net Plugin    -->
    <script src="../ProComite2/public/js/jquery.datatables.js"></script>
    <!--  Full Calendar Plugin    -->
    <script src="../ProComite2/public/js/fullcalendar.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="green" data-background-color="black" data-image="../ProComite2/public/img/images.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
            <div class="logo">
                <a href="<?php base_url();?>Controllerhome" class="simple-text">
                    Comité de proyectos
                </a>
            </div>
            <div class="logo logo-mini">
                <a  href="<?php base_url();?>Controllerhome" class="simple-text">
                    CP
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="../ProComite2/public/img/user.jpg" />
                    </div>
                    <div class="info">
  <a data-toggle="collapse" href="#collapseExample" class="collapsed">
    <?php if ($this->session->userdata('usuario')) {
      $usuario = $this->session->userdata('usuario');
            echo $usuario;
          }
     ?>
                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">

                            <ul class="nav">
                                <!-- <li>
                                    <a  data-toggle="modal" data-target="#modale" onclick="" >Editar perfil</a>
                                </li> -->
                                <li>
                                    <a href="<?php base_url();?>ControllerLogin/logout">Cerrar Sesión</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="modale" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Editar Perfil</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal">
                        <!-- <?php echo form_open('ControllerFicha/EditarFicha', array("class"=>"form-horizontal", "id"=>"formActualizar", "role"=>"form", 'method'=>'post')); ?> -->


                          <div class="form-group">
                            <!-- <label class="col-md-4 control-label" for="textinputmodificar">ID: </label> -->
                            <div class="col-md-4">
                              <input id="textinputmodificar" name="txtIdModificar" type="hidden" class="form-control input-md" readonly="" required="true">
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="col-md-4 control-label" for="textinputmodificar">Nombre usuario: </label>
                            <div class="col-md-4">
                              <input id="textinputmodificar" name="txtNumeroModificar" type="text" placeholder="Nombre nuevo" class="form-control input-md" required="true">
                            </div>
                          </div>


                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="textinputmodificar">Contraseña: </label>
                            <div class="col-md-4">
                              <input id="textinputmodificar" name="txtIniciolectivaModificar" type="text" placeholder="Contraseña nueva" class="form-control input-md" required="true">
                            </div>
                          </div>


                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="textinputmodificar">Repetir Contraseña: </label>
                            <div class="col-md-4">
                              <input id="textinputmodificar" name="txtFinlectivaModificar" type="text" placeholder="Contraseña nueva" class="form-control input-md" required="true">
                            </div>
                          </div>

                          <!-- Text input-->




                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="BotonEditar" class="btn btn-primary" onclick="EditarUsuario()">Editar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>

                  </div>
                </div>

                <ul class="nav">
                    <li id="ins">
                      <a href="<?php base_url();?>ControllerInstructor">
                            <i class="fa fa-male"></i>
                            <p>Instructor</p>
                        </a>
                    </li>
                    <li id="apre">
                      <a href="<?php base_url(); ?>ControllerAprendiz ">
                          <i class="fa fa-user"></i>
                            <p>Aprendices</p>
                        </a>
                    </li>
                    <li id="pro">
                      <a data-toggle="collapse" href="#fg">
                            <i class="fa fa-users"></i>
                            <p>Fichas de Grupos
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="fg">
                            <ul class="nav">
                                <li>
                                  <a href="<?php base_url();?>ControllerFicha" data-toggle="tooltip" title="Registrar, Consultar, Modificar" data-placement="right"><i class="fa fa-file" aria-hidden="true"></i>Gestionar fichas grupo</a>
                               </li>
                               <li>
                                   <a href="<?php base_url(); ?>ControllerLlenarfichagrupo"><i class="fa fa-refresh" aria-hidden="true"></i>Asociar aprendices</a>
                               </li>
                            </ul>
                        </div>
                        </li>
                    <li>
                       <a data-toggle="collapse" href="#Movimientos">
                           <i class="fa fa-fw fa-file"></i>
                           <p>Fichas de proyectos
                               <b class="caret"></b>
                           </p>
                       </a>
                       <div class="collapse" id="Movimientos">
                           <ul class="nav">
                                <li id="fg">
                                  <a href="<?php base_url();?>ControllerCliente" ><i class="fa fa-briefcase"></i> Clientes</a>
                               </li>
                               <li>
                                <a href="<?PHP base_url(); ?>ControllerFichaproyecto" data-toggle="tooltip" title="Registrar, Consultar, Modificar"  data-placement="right"><i class="fa fa-exchange" aria-hidden="true"></i>Gestionar fichas proyecto</a>
                               </li>
                               <li>
                                <a href="<?php base_url(); ?>ControllerLlenarfichapro"><i class="fa fa-plus" aria-hidden="true"></i>Asociar aprendices</a>
                               </li>

                           </ul>
                       </div>
                              </li>

                              <li>
                       <a data-toggle="collapse" href="#com">
                        <i class="fa fa-qrcode"></i>
                           <p>Comité
                               <b class="caret"></b>
                           </p>
                       </a>
                       <div class="collapse" id="com">
                           <ul class="nav">
                                <li id="">
                                  <a href="<?php base_url();?>ControllerProgramacion"><i class="fa fa-calendar"></i> Registrar Programación</a>
                               </li>
                               <li>
                              <a href="<?php base_url(); ?>Controllerlistprograma"><i class="fa fa-file-text-o" aria-hidden="true"></i>Listar programación</a>
                               </li>
                               <li>
                              <a href="<?php base_url();?>ControllerAsistenciaprogramacion"><i class="fa fa-check-square-o"></i> Asistencia</a>
                               </li>
                               <li>
                              <a href="<?php base_url(); ?>ControllerEvaluarFichas"><i class="fa fa-edit"></i> Evaluar Ficha</a>
                               </li>

                           </ul>
                       </div>

                   </li>



                </ul>
            </div>
        </div>
        <script src="public/js/active.js"></script>

        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-fw fa-bell"></i>
                                    <!-- <span class="notification"><?php echo $numStockR["numR"]+$numStockA["numA"] ?></span> -->
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                  <label style="margin-left:15px;">Prueba</label>

                                </ul>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">

                <!-- </div>
            </div>
        </div>
</body> -->
<!--   Core JS Files   -->

<script src="../ProComite2/public/js/jquery.min.js" type="text/javascript"></script>
<script src="../ProComite2/public/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="../ProComite2/public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../ProComite2/public/js/material.min.js" type="text/javascript"></script>
<script src="../ProComite2/public/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="../ProComite2/public/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../ProComite2/public/js/moment.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="../ProComite2/public/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="../ProComite2/public/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="../ProComite2/public/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="../ProComite2/public/js/bootstrap-datetimepicker.js"></script>
<!-- Sliders Plugin -->
<script src="../ProComite2/public/js/nouislider.min.js"></script>
<!-- Select Plugin -->
<script src="../ProComite2/public/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="../ProComite2/public/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="../ProComite2/public/js/sweetalert.min.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../ProComite2/public/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="../ProComite2/public/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="../ProComite2/public/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../ProComite2/public/js/material-dashboard.js"></script>
<!-- idioma full calendar :) -->
<script src="../ProComite2/public/js/es.js"></script>

<script src="../ProComite2/public/js/demo.js"></script>
<!-- <script src="../ProComite2/public/js/select2.js"></script> -->


<script src="../ProComite2/public/js/dataTables/dataTables.bootstrap.js"></script>
<script src="../ProComite2/public/js/alertify.js"></script>
<script type="text/javascript"   src="../ProComite2/public/js/login.js">

</script>
</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('.datepicker').datetimepicker({
           format: 'YYYY/MM/DD',
           icons: {
               time: "fa fa-clock-o",
               date: "fa fa-calendar",
               up: "fa fa-chevron-up",
               down: "fa fa-chevron-down",
               previous: 'fa fa-chevron-left',
               next: 'fa fa-chevron-right',
               today: 'fa fa-screenshot',
               clear: 'fa fa-trash',
               close: 'fa fa-remove',
               inline: true
           }
        });
    });
</script>
