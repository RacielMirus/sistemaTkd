<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">

            <?php
            //envia datos hasta agregarbd
            echo form_open_multipart('entrenador/agregarbdlte');
            ?>

            <div class="card-title">
              <h1>Agregar Nuevo Entrenador</h1>
            </div>
            <hr>
            <form>
              <div class="form-group">
                <label for="input-1">Nombre</label>
                <input type="text" class="form-control" id="input-1" name="nombre1" placeholder="Escribe tu Nombre" required>
              </div>
              <div class="form-group">
                <label for="input-2">Apellido Paterno</label>
                <input type="text" class="form-control" id="input-2" name="apellido1" placeholder="Escribe tu Apellido Paterno" required>
              </div>
              <div class="form-group">
                <label for="input-3">Apellido Materno</label>
                <input type="text" class="form-control" id="input-3" name="apellido2" placeholder="Escribe tu Apellido Materno">
              </div>
              <div class="form-group">
                <label for="input-4">Fecha Nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="input-5">Cinturón</label>
                <select class="form-control" name="cinturon" required>
                  <option value="" disabled selected>Seleccione un cinturón:</option>
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
              </div>
              <div class="form-group">
                <label for="input-5">Sexo</label>
                <select class="form-control" name="sexo" required>
                  <option value="" disabled selected>Seleccione un Género:</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                </select>
              </div>

              <div class="form-group">
                <button type="submit" class="form-control btn-info">Agregar Entrenador</button>
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