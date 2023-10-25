<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">

            <h1>Modificar Entrenador</h1>
          
          <?php
          foreach ($infoentrenador->result() as $row) //inicio de la recursividad
          {
            //envia datos hasta agregarbd
            echo form_open_multipart('entrenador/modificarbdlte');
          ?>

            <form>
              <div class="form-group">
                <input type="hidden" name="identrenador" class="form-control" value="<?php echo $row->idEntrenador; ?>">
                <label for="input-1">Nombre</label>
                <input type="text" class="form-control" id="input-1" name="nombre" placeholder="Escribe tu Nombre" value="<?php echo $row->nombre; ?>">
              </div><br>
              <div class="form-group">
                <label for="input-2">Apellido Paterno</label>
                <input type="text" class="form-control" id="input-2" name="apellido1" placeholder="Escribe tu Apellido Paterno" value="<?php echo $row->primerApellido; ?>">
              </div><br>
              <div class="form-group">
                <label for="input-3">Apellido Materno</label>
                <input type="text" class="form-control" id="input-3" name="apellido2" placeholder="Escribe tu Apellido Materno" value="<?php echo $row->segundoApellido; ?>">
              </div><br>
              <div class="form-group">
                <label for="input-4">Fecha Nacimiento</label>
                <input type="date" class="form-control" id="input-4" name="fechaNacimiento" placeholder="Fecha Nacimiento dd/mm/aa" value="<?php echo $row->fechaNacimiento; ?>">
              </div><br>

              <div class="form-group">
                <?php
                foreach ($infoentrenador->result() as $row) {
                ?>
                  <label for="input-5">Cinturón</label>
                  <select class="form-control" name="cinturon">
                    <option value="<?php echo $row->idEntrenador; ?>">
                      <?php echo $row->cinturon; ?>
                    </option>
                    <option value="Negro 1er DAN">Negro 1er DAN</option>
                    <option value="Negro 2do DAN">Negro 2do DAN</option>
                    <option value="Negro 3er DAN">Negro 3er DAN</option>
                    <option value="Negro 4to DAN">Negro 4to DAN</option>
                    <option value="Negro 5to DAN">Negro 5to DAN</option>
                    <option value="Negro 6to DAN">Negro 7to DAN</option>
                    <option value="Negro 7mo DAN">Negro 8vo DAN</option>
                    <option value="Negro 8vo DAN">Negro 9mo DAN</option>
                    <option value="Negro 9no DAN">Negro 9mo DAN</option>
                  </select>
                <?php
                }
                ?>
              </div><br>
              <div class="form-group">
                <?php
                foreach ($infoentrenador->result() as $row) {
                ?>
                  <label for="input-5">Sexo</label>
                  <select class="form-control" name="sexo">
                    <option value="<?php echo $row->idEntrenador; ?>">
                      <?php echo $row->sexo; ?>
                    </option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                  </select>
                <?php
                }
                ?>
              </div>
              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-outline-info">MODIFICAR </button>
              </div>
            <?php
            echo form_close();
              }
            ?>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>