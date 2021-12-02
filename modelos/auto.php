<?php

class auto
{
    public $id;
    public $marca;
    public $modelo;
    public $año;
    public $precio;
    public $descripcion;

    public function __construct($id, $marca, $modelo, $año, $precio, $descripcion)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
    }


    public static function consultar()
    {
        $listaAutos = [];
        $conexion = BD::crearConexion();
        $consulta = "SELECT * FROM autos";
        if ($resultado = mysqli_query($conexion, $consulta)) {
            //Obtener la lista de usuarios 
            while ($auto = $resultado->fetch_object()) {

                $listaAutos[] = new auto($auto->id, $auto->marca, $auto->modelo, $auto->año, $auto->precio, $auto->descripcion);
            }
        }

        return $listaAutos;
    }

    public static function borrar($id)
    {
        $conexion = BD::crearConexion();
        $query = "DELETE FROM autos WHERE id = '$id'";
        $exito = mysqli_query($conexion, $query);

        if (!$exito) {
            echo "Hubo un error al eliminar auto: " . mysqli_error($conexion);
        }
    }

    public static function registrar($marca, $modelo, $año, $precio, $descripcion)
    {

        $conexion = BD::crearConexion();

        // Codigo SQL para insertar datos en la tabla autos 
        $query = "INSERT INTO autos (marca, modelo, año, precio, descripcion) 
        values ('$marca','$modelo','$año','$precio','$descripcion')";
        $exito = mysqli_query($conexion, $query);

        if ($exito) {
            echo "Se guardaron correctamente los datos";
        } else {
            echo "Hubo un error al guardar los datos" . mysqli_error($conexion);
        }
    }

    public static function busqueda_nombre($marca)
    {
        $listaAutos = [];
        $conexion = BD::crearConexion();
        $consulta = "SELECT * FROM autos WHERE marca ='$marca' ";
        if ($resultado = mysqli_query($conexion, $consulta)) {
            //Obtener la lista de usuarios
            if (mysqli_num_rows($resultado) > 0) {
                while ($auto = $resultado->fetch_object()) {

                    $listaAutos[] = new auto($auto->id, $auto->marca, $auto->modelo, $auto->año, $auto->precio, $auto->descripcion);
                }
           }
        } else echo "no hay autos con esa marca";
        return $listaAutos;
    }

    public static function buscar($id)
    {
        //Obtenemos una conexion a la base de datos
        $conexion = BD::crearConexion();
        //Armamos la consulta que sera ejecutada en la base de datos
        $query = "SELECT * FROM autos WHERE id = '$id' ";
        //Ejecutamos la consulta
        $resultado = mysqli_query($conexion, $query);

        //Vericamos que se halla ejecutado correctamente la consulta
        if ($resultado) {
            //Verificamos que halla encontrado un resultado
            if (mysqli_num_rows($resultado) > 0) {
                //Obtenemos el resultado como un objeto
                $auto = $resultado->fetch_object();

                return  new auto($auto->id, $auto->marca, $auto->modelo, $auto->año, $auto->precio, $auto->descripcion);

                //Devolvemos un objeto del tipo Producto

            } else {
                echo "El auto con ese ID no se encuentro";
            }
        } else {
            echo "Hubo un error al buscar el auto: " . mysqli_error($conexion);
        }
    }

    public static function editar($id, $marca, $modelo, $año, $precio, $descripcion)
    {
        $conexion = BD::crearConexion();
        $query = "UPDATE autos SET 
                            marca ='$marca', 
                            modelo='$modelo', 
                            año='$año',
                            Precio='$precio',
                            descripcion='$descripcion'  
                            WHERE id = '$id'";
        $exito = mysqli_query($conexion, $query);

        if (!$exito) {
            echo "Hubo un error al actualizar el automovil: " . mysqli_error($conexion);
        }
    }
}
