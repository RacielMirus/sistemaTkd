<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">


            <div class="shadow p-3 mb-5 bg-body rounded">
              <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
                <h3>Modificar Deportista</h3>
              </div>
            </div>


            <?php 
          foreach ($infodeportista->result() as $row) //inicio de la recursividad
          {
            //envia datos hasta agregarbd
            echo form_open_multipart('deportista/modificarbdlte');
          ?>
            <form>
              <div class="form-group">
                <input type="hidden" name="iddeportista" class="form-control" value="<?php echo $row->idDeportista; ?>">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu Nombre" value="<?php echo $row->nombres; ?>">
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
                <label for="input-5">Cinturón</label>
                <select class="form-control" name="colorCinturon">
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
                  <option value="Rojo franja Negro">Rojo franja Negra</option>
                  <option value="Negro">Negro</option>
                  <option value="Negro 1er DAN">Negro 1er DAN</option>
                  <option value="Negro 2do DAN">Negro 2do DAN</option>
                  <option value="Negro 3er DAN">Negro 3er DAN</option>
                </select>
              </div><br>

              <div class="form-group">
                <label for="input-5">Sexo</label>
                <select class="form-control" name="sexo">
                  <option value="" disabled selected>Seleccione un Género:</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                </select>
              </div>
              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-outline-info">Modificar Deportista</button>
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