<!--End topbar header-->
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

      <?php 
			//envia datos hasta agregarbd
			echo form_open_multipart('deportista/agregarbdtipo');
			?>

           <div class="card-title"><h1>Combates - Formulario</h1></div>
           <hr>
            <form>
           <div class="form-group">
            <label for="input-1">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu Nombre" required>
           </div>
           <div class="form-group">
            <label for="input-2">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Escribe tu Apellido Paterno" required>
           </div>
           <div class="form-group">
            <label for="input-3">Apellido Materno</label>
            <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Escribe tu Apellido Materno" >
           </div>
           <div class="form-group">
            <label for="">Fecha Nacimiento</label>
            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="" required>
           </div>
           <div class="form-group">
            <label for="input-5">Sexo</label>
            <select class="form-control" name="sexo" required>
                <option value="" disabled selected >Seleccione un Género:</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
           </div>
           <div class="form-group">
            <label for="">Cinturón</label>
            <select class="form-control" name="colorCinturon" required>
                <option value="" disabled selected >Seleccione un cinturón:</option>
                <option value="Blanco" >Blanco</option>
                <option value="Blanco franja Amarillo">Blanco franja Amarilla</option>
                <option value="Amarillo">Amarillo</option>
                <option value="Amarillo franja Verde" >Amarillo franja Verde</option>
                <option value="Verde">Verde</option>
                <option value="Verde franja Azul">Verde franja Azul</option>
                <option value="Azul" >Azul</option>
                <option value="Azul franja Roja">Azul franja Roja</option>
                <option value="Rojo">Rojo</option>
                <option value="Rojo franja Negro" >Rojo franja Negra</option>
                <option value="Negro">Negro</option>
                <option value="Negro 1er DAN">Negro 1er DAN</option>
                <option value="Negro 2do DAN">Negro 2do DAN</option>
                <option value="Negro 3er DAN">Negro 3er DAN</option>
            </select>
            </div>
            <div class="form-group">
            <label for="">Categoria Peso</label>
            <select class="form-control" name="categoriaPeso" required>
                <option value="" disabled selected >Seleccione una categoria:</option>
                <option value="INFANTIL" >INFANTIL</option>
                <option value="CADETE">CADETE</option>
                <option value="JUVENIL">JUVENIL</option>
                <option value="MAYORES" >MAYORES</option>
            </select>
            </div>
            <div class="form-group">
            <label for="">Rango Peso</label>
            <select class="form-control" name="rangoPeso" required>
                <option value="" disabled selected >Seleccione una rango:</option>
                <option value="MINIMOSCA" >MINIMOSCA</option>
                <option value="MOSCA">MOSCA</option>
                <option value="GALLO">GALLO</option>
                <option value="PLUMA" >PLUMA</option>
                <option value="LIGERO" >LIGERO</option>
                <option value="SUPERLIGERO">SUPERLIGERO</option>
                <option value="SEMIMEDIANO">SEMIMEDIANO</option>
                <option value="MEDIANO" >MEDIANO</option>
                <option value="SEMIPESADO">SEMIPESADO</option>
                <option value="PESADO" >PESADO</option>
            </select>
            </div>
            
           
           <div class="form-group">
            <button type="submit" class="form-control btn-info">REGISTRAR</button>
          </div>
      <?php 
			echo form_close();
			?>
          </form>
         </div>
         </div>
      </div>


	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="<?php echo base_url();?>javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->