<?php
class BD
{

    //atributo estatico donde guardaremos la conexion
    private static $conexion = NULL;

    public static function crearConexion()
    {

        //Verificamos que la conexion no este creada
        if (!isset(self::$conexion)) {

            try {
                self::$conexion = mysqli_connect("localhost", "root", "", "Concecionaria");
            } 
            catch (Exception $e) {
                //Guardamos el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine(), $e->getFile());
                //Lanzamos un mensaje para el usuario
                throw new DatabaseExeption("no se pudimos conectarnos a la base de datos");
            }
        }

        return self::$conexion;
    }
}
