<!-- Vista desde donde registraremos un producto -->
<div class="card">
    <div class="card-header">
        Agregar Auto
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="marca" class="form-label">Marca: </label>
              <input type="text"
                class="form-control" name="marca" id="nombre" aria-describedby="helpId" placeholder="Marca del Auto">
            </div>
            <div class="mb-3">
              <label for="modelo" class="form-label">Modelo: </label>
              <input type="text"
                class="form-control" name="modelo" id="modelo" aria-describedby="helpId" placeholder="Modelo">
            </div>
            <div class="mb-3">
              <label for="año" class="form-label">Año:</label>
              <input type="text"
                class="form-control" name="año" id="año" aria-describedby="helpId" placeholder="Año">
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio:</label>
              <input type="text"
                class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="Precio">
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripcion:</label>
              <input type="text"
                class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripcion del vehiculo">
            </div>
            <input name="" id="" class="btn btn-success" type="submit" value="Agregar auto">
            <a href="index.php?accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
</div>