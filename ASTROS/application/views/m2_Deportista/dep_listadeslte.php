<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">

            <h1>Tabla Deportistas Deshabilitados</h1>

            <br>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <a href="<?php echo base_url(); ?>index.php/deportista/indexlte">
                    <button type="button" class="btn btn-warning">Ver lista Habilitados</button>
                  </a>
                </div>
              </div>
            </div>
            <br>
            <h5 class="card-title"></h5>
            <div class="table-responsive">
              <table class="table">
                <thead class="table-dark">
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
                  foreach ($deportistas->result() as $row) {
                  ?>
                    <tr>
                      <td><?php echo $indice; ?></td>
                      <td><?php echo $row->nombres . " " . $row->primerApellido . " " . $row->primerApellido; ?></td>
                      <td><?php echo $row->fechaNacimiento; ?></td>
                      <td><?php echo $row->cinturon; ?></td>
                      <td><?php echo $row->sexo; ?></td>
                      <td>
                        <?php
                        //envia datos hasta agregarbd
                        echo form_open_multipart('deportista/habilitarbdlte');
                        ?>
                        <!-- ocultamos el id en type -- hidden -->
                        <input type="hidden" name="iddeportista" value="<?php echo $row->idDeportista; ?>">
                        <button type="submit" class="btn btn-warning rounded-pill">HABILITAR</button>

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
</div>