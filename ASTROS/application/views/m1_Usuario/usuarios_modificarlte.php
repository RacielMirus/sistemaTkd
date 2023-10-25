<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">

            <div class="shadow p-3 mb-5 bg-body rounded">
              <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
                <h1>Modificar Usuario</h1>
              </div>
            </div>

            <?php
            foreach ($infousuario->result() as $row) //inicio de la recursividad
            {
              //envia datos hasta agregarbd
              echo form_open_multipart('usuarios/modificarbdlte');
            ?>
              <form>
                <div class="form-group">
                  <label for="input-1">Nombre</label>
                  <input type="text" class="form-control" id="input-1" name="nombre" value="<?php echo $row->nombres; ?>">
                </div><br>
                <div class="form-group">
                  <label for="input-2">Apellido Paterno</label>
                  <input type="text" class="form-control" id="input-2" name="apellido1" value="<?php echo $row->primerApellido; ?>">
                </div><br>
                <div class="form-group">
                  <label for="input-3">Apellido Materno</label>
                  <input type="text" class="form-control" id="input-3" name="apellido2" value="<?php echo $row->segundoApellido; ?>">
                </div><br>
                <div class="form-group">
                  <label for="input-4">Carnet</label>
                  <input type="text" class="form-control" id="input-4" name="carnet" value="<?php echo $row->carnet; ?>">
                </div><br>
                <div class="form-group">
                  <label for="input-5">Rol</label>
                  <select class="form-control" name="tipo">
                    <option value="" disabled selected>Seleccione un Rol:</option>
                    <option value="administrador">Administrador</option>
                    <option value="invitado">Invitado</option>
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-success"> Modificar </button>
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