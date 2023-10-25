<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">

            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                <a href="<?php echo base_url();?>index.php/entrenador/inscribir" target="_blank">
            <button type="submit" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i>Inscribir</button>
            </a>
            

                  <h1>Lista Entrenadores</h1>
                  <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#exampleModal" data-coreui-whatever="@mdo">Nuevo Entrenador</button>

                </div>
              </div>
            </div>

            <!--<a href="<?php echo base_url(); ?>index.php/entrenador/agregarlte">
				        <button type="button" class="form-control btn-primary">Crear Entrenador</button>
			        </a>-->
            <br>
            <div class="table">
              <table class="table border mb-0">
                <thead class="table-light fw-semibold">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nombre Completo</th>
                    <th class="text-center">Fecha Nacimiento</th>
                    <th class="text-center">Cinturon</th>
                    <th class="text-center">Sexo</th>
                    <th class="text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php
                  $indice = 1;
                  foreach ($entrenador->result() as $row) {
                  ?>
                    <tr>
                      <td><?php echo $indice; ?></td>
                      <td><?php echo $row->nombre . " " . $row->primerApellido . " " . $row->segundoApellido; ?></td>
                      <td><?php echo $row->fechaNacimiento; ?></td>
                      <td><?php echo $row->cinturon; ?></td>
                      <td><?php echo $row->sexo; ?></td>
                      <td>
                        <div class="btn-group">
                          <?php //formulario modificar
                          //envia datos hasta agregarbd
                          echo form_open_multipart('entrenador/modificarlte');
                          ?>
                          <input type="hidden" name="identrenador" value="<?php echo $row->idEntrenador; ?>">
                          <button type="submit" class="btn btn-info rounded-pill"><img src="<?php echo base_url(); ?>img/edit.png" width="10" height="10"></button>
                          <?php
                          echo form_close();
                          ?>
                          <?php
                          //envia datos hasta agregarbd
                          echo form_open_multipart('entrenador/eliminarbdlte');
                          ?>
                          <!-- ocultamos el id en type -- hidden -->
                          <input type="hidden" name="identrenador" value="<?php echo $row->idEntrenador; ?>">
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="exampleModalLabel">Formulario | Nuevo Entrenador</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        //envia datos hasta agregarbd
        echo form_open_multipart('usuarios/agregarbd');
        ?>
        <?php
        if ($this->session->flashdata('error_mesage')) {
          echo '<div class="form-control bg-dark" style="color:red;"> ' . $this->session->flashdata('error_mesage') . '</div>';
        }
        ?>
        <form>
          <div class="form-group">
            <label for="input-1">Nombre</label>
            <input type="text" class="form-control" id="input-1" name="nombre" placeholder="Escribe tu Nombre" required>
          </div><br>
          <div class="form-group">
            <label for="input-2">Apellido Paterno</label>
            <input type="text" class="form-control" id="input-2" name="apellido1" placeholder="Escribe tu Apellido Paterno" required>
          </div><br>
          <div class="form-group">
            <label for="input-3">Apellido Materno</label>
            <input type="text" class="form-control" id="input-3" name="apellido2" placeholder="Escribe tu Apellido Materno">
          </div><br>
          <div class="form-group">
            <label for="input-4">Carnet</label>
            <input type="text" class="form-control" id="input-4" name="carnet" placeholder="Escribe tu carnet" required>
          </div><br>
          <div class="form-group">
            <label for="input-5">Rol</label>
            <select class="form-control" name="tipo" required>
              <option value="" disabled selected>Seleccione un Rol:</option>
              <option value="administrador">Administrador</option>
              <option value="invitado">Invitado</option>
            </select>
          </div><br>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Agregar</button>
          </div>
          <?php
          echo form_close();
          ?>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-coreui-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL FORMULARIO-->