<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Concecionaria</title>
</head>

<body>
    <?php
        include_once "navegacion.php";
    ?>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    //A partir del metodo obtener paginas del controladore iremos cambiando la pagina
                    $controlador = new ControladorPaginas();
                    $controlador -> obtenerPagina();
                ?>
            </div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>