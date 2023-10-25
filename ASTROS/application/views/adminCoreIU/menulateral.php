
<!--Menu Lateral-->
<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="<?php echo base_url();?>adminCoreIU/assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="<?php echo base_url();?>adminCoreIU/assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <!--<ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/deportista/admin_inicio">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Inicio</a></li>-->
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-title">Usuarios</li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/usuarios/indexlte">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
            </svg> Usuario</a></li>
        
        <li class="nav-title">Administración</li>
        <li class="nav-group"><a class="nav-link" href="<?php echo base_url(); ?>index.php/deportista/indexlte">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-list"></use>
            </svg> Deportistas</a>
        </li>
        <li class="nav-group"><a class="nav-link" href="<?php echo base_url(); ?>index.php/entrenador/indexlte">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
            </svg> Entrenadores</a>
        </li>
        <li class="nav-divider"></li>
        <li class="nav-title">Tipo Competición</li>
        <li class="nav-group"><a class="nav-link" href="<?php echo base_url(); ?>index.php/campeonato/indexlte">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-flag-alt"></use>
            </svg>Campeonatos</a>
        </li>
        <li class="nav-group"><a class="nav-link" href="<?php echo base_url(); ?>index.php/campeonato/inscribir">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-walk"></use>
            </svg> Incripcion</a>
        </li>
        <!--<li class="nav-group"><a class="nav-link" href="<?php echo base_url(); ?>index.php/campeonato/formas">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-task"></use>
            </svg> Formas</a>
          </li>-->
            
        <li class="nav-divider"></li>
        <li class="nav-title">Gestión</li>
        <li class="nav-group"><a class="nav-link" href="pagos.php">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-money"></use>
            </svg> Pagos</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="widgets.html">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg> Material Deportivo </a></li>
        
        <li class="nav-group"><a class="nav-link" href="almacen.php">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-clipboard"></use>
            </svg> Almacen</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="reportes.php">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url();?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-library-add"></use>
            </svg> Reportes</a></li>        
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <!--FIN lateral-->