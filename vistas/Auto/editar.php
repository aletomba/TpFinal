
<div class="card" color="blue">   
<div class="card-header">
        Editar Auto
</div>
<div class="card">
<div>
    <div class="card-body">
        <form action="" method="post">
        

            <div class="mb-3">
                <label for="id" class="form-label">Id: </label>
                <input type="text" class="form-control" name="id" 
                id="id" value="<?php echo $auto->id ?>" readonly aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca: </label>
                <input type="text" class="form-control" name="marca" 
                id="marca" value="<?php echo $auto->marca ?>" aria-describedby="helpId" placeholder="marca">
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo: </label>
                <input type="text" class="form-control" name="modelo" 
                id="modelo" value="<?php echo $auto->modelo ?>" aria-describedby="helpId" placeholder="modelo">
            </div>
            <div class="mb-3">
                <label for="año" class="form-label">Año: </label>
                <input type="text" class="form-control" name="año" 
                id="año" value="<?php echo $auto->año ?>" aria-describedby="helpId" placeholder="año">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio: </label>
                <input type="text" class="form-control" name="precio" 
                id="precio" value="<?php echo $auto->precio ?>" aria-describedby="helpId" placeholder="precio">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion: </label>
                <input type="text" class="form-control" name="descripcion" 
                id="descripcion" value="<?php echo $auto->descripcion ?>" aria-describedby="helpId" placeholder="descripcion">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Confirmar">
            <a href="index.php?accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>

</div>