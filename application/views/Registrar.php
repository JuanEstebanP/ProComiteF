<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="../ProComite2/public/img/logo2.png">
    <title>Comité de proyectos</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <meta name="viewport" content="width=device-width" />

    <link rel="shortcut icon" href="img/icon.ico">
    <link href="../ProComite2/public/css/sweetalert.css" rel="stylesheet" />
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

        <link href="../ProComite2/public/css/alertify.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="" data-image="public/img/fondo3.jpg">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="row">

<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3" style="margin-top:7%">
    <div class="card card-login card-hidden">
		<form class="form" method="">
        <div class="card-header text-center" data-background-color="green">
            <h3 class="card-title">Registro</h3>
        </div>
        <div class="card-content">

            <div class="input-group">
                <span class="input-group-addon">
                        <i class="fa fa-user" style="font-size:2em;"></i>
                    </span>
                <div class="form-group label-floating">
                    <label class="control-label">Usuario</label>
                    <input type="text" class="form-control"  id="usuario">
                </div>
            </div>

            <div class="input-group">
                <span class="input-group-addon">
                        <i class="fa fa-lock" style="font-size:2em;"></i>
                    </span>
                <div class="form-group label-floating">
                    <label class="control-label">Contraseña</label>
                    <input type="password" name="contrasena" id="contrasena" class="form-control" >
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                        <i class="fa fa-lock" style="font-size:2em;"></i>
                    </span>
                <div class="form-group label-floating">
                    <label class="control-label">Repetir Contraseña</label>
                    <input type="password" name="contrasena1" id="contrasena1" class="form-control" >
                </div>
            </div>

        </div>
        <div class="footer text-center">
            <button type="button" id="" class="btn btn-success btn-round btn-wd btn-lg" onclick="registrarU()">Registrarse</button>
            <a href="<?php base_url();?>ControllerLogin"><button type="button" class="btn btn-green btn-simple btn-wd btn-lg">Ya tiene cuenta?</button></a>
            <br>
        </div>
      </form>
    </div>
</div>
<script type="text/javascript" src="../ProComite2/public/js/sweetalert.min.js"></script>
<script type="text/javascript" src="../ProComite2/public/js/alertify.js"></script>
<script src="../ProComite2/public/js/registrar.js" type="text/javascript"></script>
<script src="../ProComite2/public/js/card-hidden.js" type="text/javascript"></script>
