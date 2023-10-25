  <div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">
        <div class="card mb-4">
          <div class="card-body">
            <div class="justify-content-between">



              <div class="container">
                <div class="row">
                  <div class="col-lg-12">

                    <h1>Campeonatos</h1>
                    <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#exampleModal" data-coreui-whatever="@mdo">Crear Campeonato</button>

                  </div>
                </div>
              </div>

              <br>
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">

                    <div class="input-group">
                      <input type="text" class="form-control" id="busqueda" size="16" placeholder="Buscar por nombre...">
                      <div class="input-group-append">
                        <button class="btn btn-secondary" id="buscar" type="button">
                          <span class="input-group-text">
                            <svg class="icon">
                              <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                            </svg></span>
                        </button>
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
                      <th class="text-center">Nombre</th>
                      <th class="text-center">Fecha </th>
                      <th class="text-center">Lugar</th>
                      <th class="text-center">Acciones</th>

                    </tr>
                  </thead>
                  <tbody class="text-center">

                    <?php
                    $indice = 1;
                    foreach ($campeonato->result() as $row) {
                    ?>
                      <tr>
                        <td><?php echo $indice; ?></td>
                        <td><?php echo $row->nombre; ?></td>
                        <td><?php echo $row->fechaInicio; ?></td>
                        <td><?php echo $row->lugar; ?></td>
                        
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <?php //formulario modificar
                            //envia datos hasta agregarbd
                            echo form_open_multipart('campaonato/modificarbd');
                            ?>
                            <input type="hidden" name="idcampeonato" value="<?php echo $row->idCampeonato; ?>">
                            <button class="btn btn-info rounded-pill"><img src="<?php echo base_url(); ?>img/edit.png" width="10" height="10"></button>

                            <?php
                            echo form_close();
                            ?>

                            <?php
                            //envia datos hasta agregarbd
                            echo form_open_multipart('campeonato/eliminarbd');
                            ?>
                            <!-- ocultamos el id en type -- hidden -->
                            <input type="hidden" name="idcampeonato" value="<?php echo $row->idCampeonato; ?>">
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
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Campeonato</h5>
          <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <?php
          //envia datos hasta agregarbd
          echo form_open_multipart('campeonato/agregarbd');
          ?>

          <form>
            <div class="form-group">
              <label for="input-1">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre ejm: Campeonato Nacional" required>
            </div><br>
            <div class="form-group">
              <label for="">Fecha Inicio</label>
              <input type="date" class="form-control" id="fecha" name="fechaInicio" placeholder="" required>
            </div><br>

            <div class="form-group">
              <label for="">Fecha Final</label>
              <input type="date" class="form-control" id="fecha" name="fechaFin" placeholder="" required>
            </div><br>

            <div class="form-group">
              <label for="">Lugar</label>
              <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Lugar del Campeonato" required>
            </div><br>



            <div class="form-group">
              <button type="submit" class="btn btn-outline-success">Crear</button>
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