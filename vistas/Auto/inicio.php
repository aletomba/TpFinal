<div class="card">
    <div class="card-header">
        Filtrar por marca
        <div class="mb-3">
            <input type="text" class="form-control" id="nombre" aria-describedby="helpId" placeholder="Ingrese la marca a buscar">
        </div>
        <input name="" id="" class="btn btn-success" type="submit" value="buscar">
    </div>
</div>
<div class="card" color="blue">
    <div class="card-header">
        Lista de autos
    </div>
<div class="card-body">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Precio</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($autos as $auto) { ?>
            <tr>
                <td scope="row"><?php echo $auto->id ?></td>
                <td><?php echo $auto->marca ?></td>
                <td><?php echo $auto->modelo ?></td>                
                <td><?php echo $auto->año ?></td>
                <td><?php echo $auto->precio ?></td>
                <td><?php echo $auto->descripcion ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="index.php?accion=editar&id=<?php echo $auto->id ?>" class="btn btn-info">Editar</a>
                        <a href="index.php?accion=borrar&id=<?php echo $auto->id ?>" class="btn btn-danger">Borrar</a>
                    </div>
                </td>

            </tr>

        <?php  } ?>
    </tbody>
</table>
</div>
</div>