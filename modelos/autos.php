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
            while ($autos = $resultado->fetch_object()) {

                $listaAutos[] = new auto($autos->id, $autos->marca, $autos->modelo, $autos->año, $autos->precio, $autos->descripcion);
            }
        }

        return $listaAutos;
    }

    public static function registrar($marca, $modelo, $año, $precio, $descripcion)
    {

        $conexion = BD::crearConexion();

        // Codigo SQL para insertar datos en la tabla personas 
        $query = "INSERT INTO autos (marca, modelo, año, precio, descripcion) values ('$marca','$modelo','$año','$precio','$descripcion')";
        $exito = mysqli_query($conexion, $query);

        if ($exito) {
            echo "Se guardaron correctamente los datos";
        } else {
            echo "Hubo un error al guardar los datos" . mysqli_error($conexion);
        }
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
                $autos = $resultado->fetch_object();

                return  new auto($autos->id, $autos->marca, $autos->modelo, $autos->año, $autos->precio, $autos->descripcion);

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
                            Precio='$precio'
                            descripcion='$descripcion'  
                            WHERE id = '$id'";
        $exito = mysqli_query($conexion, $query);

        if (!$exito) {
            echo "Hubo un error al actualizar el automovil: " . mysqli_error($conexion);
        }
    }
}
