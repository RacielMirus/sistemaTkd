<div class="main-panel">
          <div class="content-wrapper">
             <div class="col-sm-4">
                                
             </div>
<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">NUEVO ENTRENADOR</h4>
                    <p class="card-description"> Ingrese Los datos </p>
                    
            <?php
            echo form_open_multipart('entrenador/inscribirbd');
            ?>
                    <form class="forms-sample">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NOMBRE </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="NOMBRE" name="nombre1" value="<?php echo set_value('nombre1'); ?>">
                          <?php echo form_error('nombre1'); ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">apellido1</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="APELLIDO1" name="apellido1" value="<?php echo set_value('nombre1'); ?>">
                          <?php echo form_error('nombre1'); ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">apellido2</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="APELLIDO2" name="apellido2" value="<?php echo set_value('nombre1'); ?>">
                          <?php echo form_error('nombre1'); ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">cinturon</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="CINTURON" name="cinturon1" value="<?php echo set_value('nombre1'); ?>">
                          <?php echo form_error('nombre1'); ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">fechaNacimiento</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="CINTURON" name="fechaNacimiento1" value="<?php echo set_value('nombre1'); ?>">
                          <?php echo form_error('nombre1'); ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">sexo</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="CINTURON" name="sexo1" value="<?php echo set_value('nombre1'); ?>">
                          <?php echo form_error('nombre1'); ?>
                        </div>
                      </div>
                      <select name="idClub" class="form-control form-select form-select-lg" required>
                     <option value="" disabled selected>Seleccione una Categoria</option>
                
                     <?php 
                    foreach($info->result()as $row)
                  {
                   ?>
                   <option value="<?php echo  $row->idClub;?>">
                   <?php echo $row->nombre;?>
                   </option>

                   <?php
                  }
                 ?>
               </select>
               <br>
                      <button type="submit" class="btn btn-outline-light btn-fw">Enviar</button>
                      <button class="btn btn-outline-dark btn-fw">Cancel</button>
                       <?php
                                                     echo form_close();
                                                     
                                                     ?>
                    </form>
                    
                  </div>
                </div>
              </div>