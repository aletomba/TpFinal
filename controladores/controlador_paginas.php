<?php

require_once "exepciones.php";
require_once "log.php";
include_once "conexion.php";
include_once "modelos/auto.php";
set_error_handler('errorHandler');

class ControladorPaginas
{


    public function plantilla()
    {
        //Plantilla principal de la aplicacion
        include_once "vistas/template.php";
    }

    public function obtenerPagina()
    {

        if (isset($_GET['accion'])) {

            //Obtenemos el valor del boton del menu que se apreto
            $accion = $_GET['accion'];

            //Llamamos al metodo que tenga el mismo nombre que la accion 
            return $this->$accion();
        }
    }

    private function inicio()
    {
        try {
            $autos = auto::consultar();
            return include_once "vistas/Auto/inicio.php";
        }
         catch (DatabaseExeption $e) {
            $error = $e->errorMessage();
            return include_once "vistas/error.php";
        }
         catch (Exception $e) {
            $error = "se produjo un error obtener los productos";
            return include_once "vistas/error.php"; //crear el archivo error.php <----
        }
    }

    private function registrar()
    {
        try {
            if ($_POST) {
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $año = $_POST['año'];
                $precio = $_POST['precio'];
                $descripcion = $_POST['descripcion'];
                auto::registrar($marca, $modelo, $año, $precio, $descripcion);
            }
            return include_once "vistas/Auto/registrar.php";
        } 
        
        catch (DatabaseExeption $e) {
            $error = $e->errorMessage();
            return include_once "vistas/error.php";
        }
        //Esta la usamos para capturar cualquier otro error
        catch (Exception $e){
            $error = "se produjo un error al registrar";
            return include_once "vistas/error.php";
        }
    }


    private function BuscarAuto()
    {
        try{
            if (isset($_POST['buscar'])) {
                $autos = auto::busqueda_nombre($_POST['marca']);
            }
            return include_once "vistas/Auto/inicio.php";
        }
        catch (DatabaseExeption $e) 
        {
            $error = $e->errorMessage();
            return include_once "vistas/error.php";
        } 
        catch (Exception $e) 
        {
            $error = "se produjo un error obtener los productos";
            return include_once "vistas/error.php"; //crear el archivo error.php <----
        }

    }


    private function editar()
    {
        try{
            if (isset($_GET['id'])) {
                $auto =  auto::buscar($_GET['id']);
            }

            if ($_POST) {
                print_r($_POST);

                $id = $_POST['id'];
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $año = $_POST['año'];
                $precio = $_POST['precio'];
                $descripcion = $_POST['descripcion'];
                auto::editar($id, $marca, $modelo, $año, $precio, $descripcion);
                header("Location:./?accion=inicio");
            }

        return include_once "vistas/Auto/editar.php";}
        
        catch(DatabaseExeption $e){
            $error = $e->errorMessage();
            return include_once "vistas/error.php";
        }
        catch(Exception $e){
            $error = "ocurrio un error al cargar la vista";
            return include_once "vistas/error.php";
        }
        
    }

    private function borrar()
    {
        if (isset($_GET['id'])) {
            auto::borrar($_GET['id']);

            header("Location:./?accion=inicio");
        }
    }
}
?>
