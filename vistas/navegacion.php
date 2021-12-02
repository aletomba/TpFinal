<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="index.php?accion=inicio">Inicio<span class="visually-hidden">(current)</span></a>
        <a class="nav-item nav-link" href="index.php?accion=registrar">Agregar Auto</a>
        <form action="index.php?accion=BuscarAuto"class="row g-3" method="POST" >       
            <div class="col-auto">               
                <input type="text" class="form-control" name='marca' placeholder="Buscar por marca">
            </div>
            <div class="col-auto">
                <button type="submit" name="buscar"class="btn btn-primary mb-3">Buscar</button>
            </div>
        </form>
    </div>
</nav>