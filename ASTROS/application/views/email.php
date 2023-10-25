<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
  <!-- loader-->
  <link href="<?php echo base_url();?>adminDash/assets/css/pace.min.css" rel="stylesheet"/>
  <script src="<?php echo base_url();?>adminDash/assets/js/pace.min.js"></script>
  <link rel="icon" href="<?php echo base_url();?>adminDash/assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>adminDash/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url();?>adminDash/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url();?>adminDash/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url();?>adminDash/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="height-100v d-flex align-items-center justify-content-center">
	<div class="card card-authentication1 mb-0">
		<div class="card-body">
    
		   
      <?php
      echo form_open_multipart('usuarios/send_recovery_email')
      ?>
      <div class="card-content p-2">
		  <div class="card-title text-uppercase pb-2">Olvide Mi Contraseña</div>
		    <p class="pb-2">Introduzca su dirección de correo electrónico. <br>
           Recibirá un codigo de verificacion por correo electrónico.</p>
		    
			  <div class="form-group">
			  <label for="exampleInputEmailAddress" class="">Correo Electronico</label>
			   <div class="position-relative has-icon-right">
         <input class="form-control" type="email" id="email" name="email" placeholder="correo electronico" required>
         <?php if ($this->session->flashdata('error_message')) : ?>
				  <div class="form-control-position">
          <?php echo $this->session->flashdata('error_message'); ?>
					  <i class="icon-envelope-open"></i>
				  </div>
          <?php endif; ?>
			   </div>
			  </div>
			 
			  <button type="button" class="btn btn-light btn-block">Enviar Correo de recuperación</button>
			 </form>
		   </div>
		  </div>
		   <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Regrasar a <a href="<?php echo base_url();?>index.php/usuarios/index"> Inicio Sesión</a></p>
		  </div>
	     </div>
	     </div>
       <?php
        echo form_close()
        ?>
        <?php                      
        ?>       
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
