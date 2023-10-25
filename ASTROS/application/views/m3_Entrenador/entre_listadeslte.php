<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">

            <h1>Tabla Entrenadores Deshabilitados</h1>

            <h5 class="card-title"></h5>
            <div class="table-responsive">
              <a href="<?php echo base_url(); ?>index.php/entrenador/indexlte">
                <button type="button" class="btn btn-warning">Ver lista habilitados</button>
              </a>
              <br>
              <br>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre Completo</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Color Cinturon</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Habilitar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $indice = 1;
                  foreach ($entrenador->result() as $row) {
                  ?>
                    <tr>
                      <td><?php echo $indice; ?></td>
                      <td><?php echo $row->nombre . " " . $row->primerApellido . " " . $row->primerApellido; ?></td>
                      <td><?php echo $row->fechaNacimiento; ?></td>
                      <td><?php echo $row->cinturon; ?></td>
                      <td><?php echo $row->sexo; ?></td>
                      <td>
                        <?php
                        //envia datos hasta agregarbd
                        echo form_open_multipart('entrenadores/habilitarbdlte2');
                        ?>
                        <!-- ocultamos el id en type -- hidden -->
                        <input type="hidden" name="identrenador" value="<?php echo $row->idEntrenador; ?>">
                        <button type="submit" class="btn btn-warning">HABILITAR</button>

                        <?php
                        echo form_close();
                        ?>
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