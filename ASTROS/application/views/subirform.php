  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Deportistas</h1>
          </div>
          
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Agregar Foto Deportista</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
			  <?php 
			//envia datos hasta agregarbd
			echo form_open_multipart('estudiante/subir');
			?>
                <div class="card-body">
                  
                  <input type="hidden" name="idEstudiante" value="<?php echo $idEstudiante; ?>">
                  <input type="file" name="userfile" class="form-control">

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Subir</button>
                </div>
              
			  <?php 
			echo form_close();
			?>
            </div>

          </div>        
        </div>       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
