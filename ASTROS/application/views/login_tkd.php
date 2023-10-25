<!doctype html>
<html lang="en">

<head>
    <title>Inicio de Sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>login-form-20/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(<?php echo base_url(); ?>login-form-20/images/tkdBol.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Inicio Sesión</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">

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
                   
                        <h3 class="mb-4 text-center"><strong>Astros Kwan TKD</strong></h3>
                        <form action="#" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="login" placeholder="Usuario" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Contraseña" required>
                                <span toggle="#password-field"  class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-success submit px-3">Ingresar</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Recuerdame
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="<?php echo base_url(); ?>index.php/usuarios/email"" style="color: #fff">Olvide mi Contraseña</a>
                                </div>
                            </div>
                            <?php
                            echo form_close();
                            ?>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url(); ?>login-form-20/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>login-form-20/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>login-form-20/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>login-form-20/js/main.js"></script>

</body>

</html>