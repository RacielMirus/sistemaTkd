<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">

            <h1>Lista de Usuarios</h1>

            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#FORMULARIO" data-coreui-whatever="@mdo">Nuevo Usuario</button>
                </div>
              </div>
            </div>

            <br>

            <div class="table">
              <table class="table border mb-0">
                <thead class="table-light fw-semibold table-dark">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Rol</th>
                    <th class="text-center">Canet</th>
                    <th class="text-center">Acciones</th>

                  </tr>
                </thead>

                <tbody class="text-center">
                  <?php
                  $indice = 1;
                  foreach ($usuario->result() as $row) {
                  ?>
                    <tr>
                      <td><?php echo $indice; ?></td>
                      <td><?php echo $row->nombres . " " . $row->primerApellido . " " . $row->segundoApellido; ?></td>
                      <td><?php echo $row->tipo; ?></td>
                      <td><?php echo $row->carnet; ?></td>

                      <td>
                        <div class="btn-group">
                          <?php //formulario modificar 
                          //envia datos hasta agregarbd 
                          echo form_open_multipart('usuarios/modificarlte');
                          ?>
                          <!-- -->
                          <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>">
                          <button type="submit" class="btn btn-info rounded-pill"><img src="<?php echo base_url(); ?>img/edit.png" width="10" height="10"></button>



                          <?php
                          echo form_close();
                          ?>
                          <?php
                          //envia datos hasta agregarbd 
                          echo form_open_multipart('usuarios/eliminarbdlte');
                          ?>
                          <!-- ocultamos el id en type -- hidden -->
                          <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>">
                          <button type="submit" class="btn btn-danger rounded-pill"><img src="<?php echo base_url(); ?>img/delete.png" width="10" height="10"></button>

                          <?php
                          echo form_close();
                          ?>
                        </div>
                      </td>

                    </tr>
                  <?php
                    $indice++;
                  }
                  ?>
                </tbody>
              </table>
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!--MODAL FORMULARIO-->
<div class="modal fade" id="FORMULARIO" tabindex="-1" aria-labelledby="FORMULARIO" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="FORMULARIO">Formulario | Nuevo Usuario</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <?php
        //envia datos hasta agregarbd
        echo form_open_multipart('usuarios/agregarbd');
        ?>
        
        <form>
          <div class="form-group">
            <label for="input-1">Nombre</label>
            <input type="text" class="form-control" id="input-1" name="nombre" placeholder="Escribe tu Nombre" required>
            <?php echo form_error('nombre'); ?>
          </div><br>
          <div class="form-group">
            <label for="input-2">Apellido Paterno</label>
            <input type="text" class="form-control" id="input-2" name="apellido1" placeholder="Escribe tu Apellido Paterno" required>
            <?php echo form_error('apellido1'); ?>
          </div><br>
          <div class="form-group">
            <label for="input-3">Apellido Materno</label>
            <input type="text" class="form-control" id="input-3" name="apellido2" placeholder="Escribe tu Apellido Materno">
            <?php echo form_error('apellido2'); ?>
          </div><br>
          <div class="form-group">
            <label for="input-4">Carnet</label>
            <input type="text" class="form-control" id="input-4" name="carnet" placeholder="Escribe tu carnet" required>
            <?php echo form_error('carnet'); ?>
          </div><br>
          <div class="form-group">
            <label for="input-5">Rol</label>
            <select class="form-control" name="tipo" required>
              <option value="" disabled selected>Seleccione un Rol:</option>
              <option value="administrador">Administrador</option>
              <option value="invitado">Invitado</option>
            </select>
            <?php echo form_error('rol'); ?>
          </div><br>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Agregar</button>

          </div>
        </form>
        <?php
        echo form_close();
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="btnCerrar" data-coreui-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL FORMULARIO-->