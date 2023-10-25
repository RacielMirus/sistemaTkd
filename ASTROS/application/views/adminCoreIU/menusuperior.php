 <!--Menu Superior-->
 <div class="wrapper d-flex flex-column min-vh-100 bg-light">
   <header class="header header-sticky mb-4">
     <div class="container-fluid">
       <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
         <svg class="icon icon-lg">
           <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
         </svg>
       </button><a class="header-brand d-md-none" href="#">
         <svg width="118" height="46" alt="CoreUI Logo">
           <use xlink:href="<?php echo base_url(); ?>adminCoreIU/assets/brand/coreui.svg#full"></use>
         </svg></a>
       <ul class="header-nav d-none d-md-flex">
         <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/deportista/admin_inicio">Panel de Control</a></li>
         <!--<li class="nav-item"><a class="nav-link" href="#">Usuarios</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Configuración</a></li>-->
       </ul>
       <!--<form class="d-flex">
         <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
         <button class="btn btn-outline-success" type="submit">Buscar</button>
       </form>-->
       <ul class="header-nav ms-auto">
         <li class="nav-item"><a class="nav-link" href="#">
             <svg class="icon icon-lg">
               <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
             </svg></a></li>
         <li class="nav-item"><a class="nav-link" href="#">
             <svg class="icon icon-lg">
               <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
             </svg></a></li>
         <li class="nav-item"><a class="nav-link" href="#">
             <svg class="icon icon-lg">
               <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
             </svg></a></li>
       </ul>
       <ul class="header-nav ms-3">
         <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
             <div class="avatar avatar-md"><img class="avatar-img" src="<?php echo base_url(); ?>img/admin.PNG"" alt=" user@email.com"></div>
           </a>
           <div class="dropdown-menu dropdown-menu-end pt-0">
             <div class="dropdown-header bg-light py-2">
               <div class="fw-semibold">Ajustes</div>
             </div><a class="dropdown-item" href="#">
               <svg class="icon me-2">
                 <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
               </svg> Perfil</a><a class="dropdown-item" href="#">
               <svg class="icon me-2">
                 <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
               </svg> Configuración</a><a class="dropdown-item" href="#">
               <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/usuarios/logout">
                 <svg class="icon me-2">
                   <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                 </svg>Salir</a>
           </div>
         </li>
       </ul>
     </div>
     <div class="header-divider"></div>
     <div class="container-fluid">
       <nav aria-label="breadcrumb">
         <ol class="breadcrumb my-0 ms-2">
           <li class="breadcrumb-item">
             <!-- if breadcrumb is single--><span>Inicio</span>
           </li>
           <li class="breadcrumb-item active"><span>Panel</span></li>
         </ol>
       </nav>
     </div>
   </header>
   <!--fin Menu superior-->