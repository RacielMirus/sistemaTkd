   <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="<?php echo base_url();?>img/club-astros-kwan-sin-fondo.jpg" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Astros Kwan</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">Panel de Control</li>
      <li>
        <a href="<?php echo base_url(); ?>index.php/invitado/index">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="<?php echo base_url(); ?>index.php/invitado/invitadolte">
          <i class="zmdi zmdi-accounts-list-alt"></i> <span>Deportistas</span>
        </a>
      </li>

<!--  <li>
        <a href="<?php echo base_url(); ?>index.php/entrenador/indexlte">
          <i class="zmdi zmdi-accounts-add"></i> <span>Entrenadores</span>
        </a>
      </li>

      <li>
        <a href="<?php echo base_url(); ?>index.php/deportista/admin_tipoCompeticion">
          <i class="zmdi zmdi-assignment-o"></i> <span>Tipo de Competición</span>
        </a>
      </li>

      <li>
        <a href="<?php echo base_url(); ?>index.php/deportista/admin_material">
          <i class="zmdi zmdi-assignment-o"></i> <span>Material</span>
        </a>
      </li>-->

      <!--<li>
        <a href="calendar.html">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li>-->

      <li>
        <a href="<?php echo base_url(); ?>index.php/invitado/perfil">
          <i class="zmdi zmdi-face"></i> <span>Mi Perfil</span>
        </a>
      </li>

      <!--<li>
        <a href="login.html" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Login</span>
        </a>
      </li>

       <li>
        <a href="register.html" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
        </a>
      </li>-->
	  
      <li class="sidebar-header">Mensajes</li>
      <li><a href="<?php echo base_url();?>javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="<?php echo base_url();?>javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="<?php echo base_url();?>javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->