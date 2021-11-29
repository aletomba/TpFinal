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
        <?php foreach($autos as $autos) { ?>
            <tr>
                <td scope="row"><?php echo $autos->id ?></td>
                <td><?php echo $autos->marca ?></td>
                <td><?php echo $autos->modelo ?></td>                
                <td><?php echo $autos->año ?></td>
                <td><?php echo $autos->precio ?></td>
                <td><?php echo $autos->descripcion ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="index.php?accion=editar&id=<?php echo $autos->id ?>" class="btn btn-info">Editar</a>
                        <a href="index.php?accion=borrar&id=<?php echo $autos->id ?>" class="btn btn-danger">Borrar</a>
                    </div>
                </td>

            </tr>

        <?php  } ?>
    </tbody>
</table>