<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">

            <?php
            //envia datos hasta agregarbd
            echo form_open_multipart('usuarios/agregarbd')
            ?>

            <div class="card-title">
              <h1>Agregar Nuevo Usuario</h1>
            </div>
            <hr>

            <?php
            if ($this->session->flashdata('error_mesage')) {
              echo '<div class="form-control bg-dark" style="color:red;"> ' . $this->session->flashdata('error_mesage') . '</div>';
            }
            ?>

            <form>
              <div class="form-group">
                <label for="input-1">Nombre</label>
                <input type="text" class="form-control" id="input-1" name="nombre" placeholder="Escribe tu Nombre" required>
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
                <label for="input-4">Carnet</label>
                <input type="text" class="form-control" id="input-4" name="carnet" placeholder="Escribe tu carnet" required>
              </div>
              <div class="form-group">
                <label for="input-5">Rol</label>
                <select class="form-control" name="tipo" required>
                  <option value="" disabled selected>Seleccione un Rol:</option>
                  <option value="administrador">Administrador</option>
                  <option value="invitado">Invitado</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control bg-dark">Agregar</button>
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






