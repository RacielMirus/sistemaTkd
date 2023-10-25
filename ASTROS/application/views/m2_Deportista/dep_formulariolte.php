<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="row">
      <div class="card mb-4">
        <div class="card-body">
          <div class="justify-content-between">
            
            <?php
            //envia datos hasta agregarbd
            echo form_open_multipart('deportista/agregarbdlte');
            ?>
            <h1>Agregar Nuevo Deportista</h1>
          <form>
            <div class="form-group">
              <label for="input-1">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu Nombre" required>
            </div>
            <div class="form-group">
              <label for="input-2">Apellido Paterno</label>
              <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Escribe tu Apellido Paterno" required>
            </div>
            <div class="form-group">
              <label for="input-3">Apellido Materno</label>
              <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Escribe tu Apellido Materno">
            </div>
            <div class="form-group">
              <label for="">Fecha Nacimiento</label>
              <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="" required>
            </div>
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
              <button type="submit" class="btn btn-success">Agregar Deportista</button>
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