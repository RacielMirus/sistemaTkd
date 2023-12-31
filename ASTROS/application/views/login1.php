<!DOCTYPE html><!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->
<html lang="en">

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <title>Inicio de Sesion</title>
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo base_url(); ?>adminCoreIU/assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>adminCoreIU/assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Vendors styles-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminCoreIU/vendors/simplebar/css/simplebar.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminCoreIU/css/vendors/simplebar.css">
  <!-- Main styles for this application-->
  <link href="<?php echo base_url(); ?>adminCoreIU/css/style.css" rel="stylesheet">
  <!-- We use those styles to show code examples, you should remove them in your application.-->
  <link href="<?php echo base_url(); ?>adminCoreIU/css/examples.css" rel="stylesheet">
</head>

<body>
  <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card-group d-block d-md-flex row">
            <div class="card col-md-7 p-4 mb-0">
              <div class="card-body">
                <?php
                switch ($msg) {
                  case '1':
                    $mensaje = "Error de ingreso";
                    $clase = "primary";
                    break;
                  case '2':
                    $mensaje = "Accseso no valido";
                    $clase = "danger";
                    break;
                  case '3':
                    $mensaje = "Gracias por usar el sistema";
                    $clase = "warnig";
                    break;
                  default:
                    $mensaje = "Ingrese su usuario y clave para iniciar sesion";
                    $clase = "primary";
                    break;
                }
                ?>
                <!--<h1>msg:</h1>-->
                <?php
                echo $msg;
                ?>
                <?php
                echo form_open_multipart('usuarios/validarusuario', array('id' => 'form1', 'class' => 'needs-validation', 'method' => 'post'));
                ?>
                <h1>Inicio Sesión</h1>

                <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                    </svg></span>
                  <input class="form-control" type="text" name="login" placeholder="Usuario">
                </div>
                <div class="input-group mb-4"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                    </svg></span>
                  <input class="form-control" type="password" name="password" placeholder="Contraseña">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="submit" class="btn btn-primary px-4">Ingresar</button>
                  </div>

                  <div class="col-6 text-end">
                    <a href="<?php echo base_url(); ?>index.php/usuarios/email">Olvide mi Contraseña</a>
                  </div>
                </div>

                <?php
                echo form_close();
                ?>
              </div>
            </div>


            <div class="card col-md-5 text-white bg-primary py-5">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CoreUI and necessary plugins-->
  <script src="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>adminCoreIU/vendors/simplebar/js/simplebar.min.js"></script>
  

</body>

</html>