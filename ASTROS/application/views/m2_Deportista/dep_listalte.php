<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">


            <div class="container">
              <div class="row">
                <div class="col-lg-12">

                  <a href="<?php echo base_url(); ?>index.php/deportista/inscribir">
                    <button type="submit" class="btn btn-danger">Inscribir</button>
                  </a>

                  <h1>Lista Deportistas</h1>
                  <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#agregar" data-coreui-whatever="@mdo">Nuevo Deportista</button>

                </div>
              </div>
            </div>

            <div class="container">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                <a href="<?php echo base_url(); ?>index.php/deportista/deshabilitadoslte">
                  <button class="btn btn-warning" type="button">Deshabilitados</button>
                </a>
              </div>
            </div>

            <br>

            <div class="container">
              <div class="row">
                <div class="col-lg-12">

                  <div class="input-group"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                      </svg></span>
                    <input type="text" class="form-control" id="busqueda" size="16" placeholder="Buscar por nombre, fecha de nacimiento, color cinturón">
                    <div class="input-group-append">
                      <button class="btn btn-secondary" id="buscar" type="button">Buscar</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <br>

            <div class="table">
              <table class="table border mb-0">
                <thead class="table-light fw-semibold">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nombre Completo</th>
                    <th class="text-center">Fecha Nacimiento</th>
                    <th class="text-center">Color Cinturon</th>
                    <th class="text-center">Sexo</th>
                    <th class="text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php
                  $indice = 1;
                  foreach ($deportistas->result() as $row) {
                  ?>
                    <tr>
                      <td><?php echo $indice; ?></td>
                      <td><?php echo $row->nombres . " " . $row->primerApellido . " " . $row->segundoApellido; ?></td>
                      <td><?php echo $row->fechaNacimiento; ?></td>
                      <td><?php echo $row->cinturon; ?></td>
                      <td><?php echo $row->sexo; ?></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                          <?php //formulario modificar
                          //envia datos hasta agregarbd
                          echo form_open_multipart('deportista/modificarlte');
                          ?>

                          <input type="hidden" name="iddeportista" value="<?php echo $row->idDeportista; ?>">
                          <button class="btn btn-info rounded-pill"><img src="<?php echo base_url(); ?>img/edit.png" width="10" height="10"></button>



                          <?php
                          echo form_close();
                          ?>

                          <?php
                          //envia datos hasta agregarbd
                          echo form_open_multipart('deportista/eliminarbdlte');
                          ?>
                          <!-- ocultamos el id en type -- hidden -->
                          <input type="hidden" name="iddeportista" value="<?php echo $row->idDeportista; ?>">
                          <button type="submit" class="btn btn-danger rounded-pill"><img src="<?php echo base_url(); ?>img/delete.png" width="10" height="10"></button>
                          <?php
                          echo form_close();
                          ?>
                          <?php
                          //envia datos hasta agregarbd
                          echo form_open_multipart('deportista/deshabilitarbdlte');
                          ?>
                          <!-- ocultamos el id en type -- hidden -->
                          <input type="hidden" name="iddeportista" value="<?php echo $row->idDeportista; ?>">
                          <button type="submit" class="btn btn-warning rounded-pill"><img src="<?php echo base_url(); ?>img/deshabilitar.png" width="10" height="10"></button>
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
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="agregar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="agregar">Formulario | Nuevo Deportista</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <?php
        //envia datos hasta agregarbd
        echo form_open_multipart('deportista/agregarbdlte');
        ?>

        <form>
          <div class="form-group">
            <label for="input-1">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu Nombre" required>
          </div><br>
          <div class="form-group">
            <label for="input-2">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Escribe tu Apellido Paterno" required>
          </div><br>
          <div class="form-group">
            <label for="input-3">Apellido Materno</label>
            <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Escribe tu Apellido Materno">
          </div><br>
          <div class="form-group">
            <label for="">Fecha Nacimiento</label>
            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="" required>
          </div><br>
          <div class="form-group">
            <label for="">Cinturón</label>
            <select class="form-control" name="colorCinturon" required>
              <option value="" disabled selected>Seleccione un cinturón:</option>
              <option value="Blanco">Blanco</option>
              <option value="Blanco franja Amarillo">Blanco franja Amarilla</option>
              <option value="Amarillo">Amarillo</option>
              <option value="Amarillo franja Verde">Amarillo franja Verde</option>
              <option value="Verde">Verde</option>
              <option value="Verde franja Azul">Verde franja Azul</option>
              <option value="Azul">Azul</option>
              <option value="Azul franja Roja">Azul franja Roja</option>
              <option value="Rojo">Rojo</option>
              <option value="Rojo franja Negra">Rojo franja Negra</option>
              <option value="Negro">Negro</option>
              <option value="Negro 1er DAN">Negro 1er DAN</option>
              <option value="Negro 2do DAN">Negro 2do DAN</option>
              <option value="Negro 3er DAN">Negro 3er DAN</option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="input-5">Sexo</label>
            <select class="form-control" name="sexo" required>
              <option value="" disabled selected>Seleccione un Género:</option>
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
            </select>
          </div><br>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Agregar Deportista</button>
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