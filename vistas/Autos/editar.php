<!-- Vista desde donde editaremos un producto -->
<div class="card">
    <div class="card-header">
        Buscar por id
        <div class="mb-3">
            <input type="text" class="form-control" id="nombre" aria-describedby="helpId" placeholder="Ingrese el id del automovil">
        </div>
        <input name="" id="" class="btn btn-success" type="submit" value="buscar">
    </div>
</div>
<div class="card" color="blue">
    <div class="card-header">
        Editar producto
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
                <label for="id" class="form-label">Id: </label>
                <input type="text" class="form-control" name="id" <?php echo $autos->id ?> readonly id="id" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca: </label>
                <input type="text" class="form-control" name="marca" id="marca" value="<?php echo $autos->marca ?>" aria-describedby="helpId" placeholder="marca">
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo: </label>
                <input type="text" class="form-control" name="modelo" id="modelo" value="<?php echo $autos->modelo ?>" aria-describedby="helpId" placeholder="modelo">
            </div>
            <div class="mb-3">
                <label for="año" class="form-label">Año</label>
                <input type="text" class="form-control" name="año" id="año" value="<?php echo $autos->año ?>" aria-describedby="helpId" placeholder="año">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="<?php echo $autos->precio ?>" aria-describedby="helpId" placeholder="precio">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $autos->descripcion ?>" aria-describedby="helpId" placeholder="descripcion">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar producto">
            <a href="index.php?accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>

</div>