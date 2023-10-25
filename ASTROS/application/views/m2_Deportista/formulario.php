<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">



            <h4 class="card-title">NUEVO</h4>
            <p class="card-description"> Ingrese Los datos </p>

            <?php
            echo form_open_multipart('deportista/inscribirbd');
            ?>
            <form class="">
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NOMBRE </label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="exampleInputUsername2" placeholder="NOMBRE" name="nombre1">
                  
                </div>
              </div><br>
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">apellido1</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="exampleInputUsername2" placeholder="APELLIDO1" name="apellido1">
                  
                </div>
              </div><br>
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">apellido2</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="exampleInputUsername2" placeholder="APELLIDO2" name="apellido2">
                  
                </div>
              </div><br>
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">cinturon</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="exampleInputUsername2" placeholder="CINTURON" name="colorCinturon1">
                  
                </div>
              </div><br>
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">fechaNacimiento</label>
                <div class="col-sm-6">
                  <input type="date" class="form-control" id="exampleInputUsername2" placeholder="FECHA NACIMIENTO" name="fechaNacimiento1">
                 
                </div>
              </div><br>
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">sexo</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="exampleInputUsername2" placeholder="SEXO" name="sexo1">
              </div><br>

              <div class="form-group">
              <div class="col-sm-6">
              <label for="">Club</label>
              <select name="idClub" class="form-control form-select" required>
                <option value="" disabled selected>Seleccione una CLub</option>

                <?php
                foreach ($info2->result() as $row) {
                ?>
                  <option value="<?php echo  $row->idClub; ?>">
                    <?php echo $row->nombre; ?>
                  </option>

                <?php
                }
                ?>
              </select>
              </div>
              </div>

              <div class="form-group">
              <div class="col-sm-6">
              <label for="">Entrenador</label>
              <select name="idEntrenador" class="form-control form-select" required>
                <option value="" disabled selected>Seleccione una Entrenador</option>

                <?php
                foreach ($info1->result() as $row) {
                ?>
                  <option value="<?php echo  $row->idEntrenador; ?>">
                    <?php echo $row->nombre; ?>
                  </option>

                <?php
                }
                ?>
              </select>
              </div>
              </div>
              

              <div class="form-group">
              <div class="col-sm-6">
              <label for="">Categoria Peso</label>
              <select name="idCategoria_peso" class="form-control form-select" required>
                <option value="" disabled selected>Seleccione una Categoria Peso</option>

                <?php
                foreach ($info3->result() as $row) {
                ?>
                  <option value="<?php echo  $row->idCategoria_peso; ?>">
                    <?php echo $row->nombre; ?>
                  </option>

                <?php
                }
                ?>
              </select>
              </div>
              </div><br>

              <br>

              <div class="form-group">
              <button type="submit" class="btn btn-success">Enviar</button>
              <button class="btn btn-danger">Cancel</button>
              </div>
              <?php
              echo form_close();

              ?>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>