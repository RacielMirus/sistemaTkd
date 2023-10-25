<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Inicio de Sesión | Astros Kwan</title>
  <!-- loader-->
  <link href="<?php echo base_url();?>adminDash/assets/css/pace.min.css" rel="stylesheet"/>
  <script src="<?php echo base_url();?>adminDash/assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url();?>img/club-astros-kwan-sin-fondo.jpg" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>adminDash/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url();?>adminDash/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url();?>adminDash/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url();?>adminDash/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme6">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">

    <?php 
    switch($msg)
    {
      case '1':
        $mensaje="Error de ingreso";
        $clase="primary";
        break;
      case '2':
        $mensaje="Accseso no valido";
        $clase="danger";
        break;
      case '3':
        $mensaje="Gracias por usar el sistema";
        $clase="warnig";
        break;
      default:
      $mensaje="Ingrese su usuario y clave para iniciar sesion";
      $clase="primary";
        break;
    }
    ?>

<!--<h1>msg:</h1>-->
<?php 
echo $msg;
?>      
    <?php 
      echo form_open_multipart('usuarios/validarusuario', array('id'=>'form1','class'=>'needs-validation','method'=>'post'));
    ?>


		 <div class="card-content p-2">
		 	<div class="text-center">
        <h3>Astros Kwan</h3>
		 		<img src="<?php echo base_url();?>img/club-astros-kwan-sin-fondo.jpg" class="avatar" alt="Avatar Image" width="200px" height="200px">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Inicio Sesión</div>
		    <form>
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only" >Nombre Usuario</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="exampleInputUsername" name="login" class="form-control input-shadow" placeholder="Escriba su Nombre de Usuario" required>
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Contraseña</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="Escriba su Constraseña" required>
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
        <div class="form-group text-right">
			  <a href="<?php echo base_url();?>index.php/usuarios/email">Olvide mi Contraseña</a>
			 </div>
			</div>
		
			 <button type="submit" class="btn btn-light btn-block">Ingresar</button>
			 
       
      
    <?php 
        echo form_close();
    ?>
  
			 </form>
		   </div>
		  </div>
		
    
     <!--Start Back To Top Button-->
    <a href="<?php echo base_url();?>javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
       
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		    <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>adminDash/assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>adminDash/assets/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>adminDash/assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="<?php echo base_url();?>adminDash/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="<?php echo base_url();?>adminDash/assets/js/app-script.js"></script>
  
</body>
</html>
