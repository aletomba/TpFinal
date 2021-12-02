
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
                <?php foreach ($autos as $auto) { ?>
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