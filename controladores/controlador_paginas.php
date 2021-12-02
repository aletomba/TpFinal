<?php
include_once "conexion.php";
include_once "modelos/auto.php";

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
        $autos=auto::consultar();

        return include_once "vistas/Auto/inicio.php";
    }

    private function registrar()
    {
        //Verificamos que los datos se hallan enviado por el metodo POST
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

    private function editar()
    {
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

        return include_once "vistas/Auto/editar.php";
    }

    private function borrar()
    {
        if (isset($_GET['id'])) {
            auto::borrar($_GET['id']);

            header("Location:./?accion=inicio");
        }
    }

    private function filtrar()
    {

        if (isset($_GET['valor'])) {
            $valor=$_GET['valor'];
      
             auto::filtrarMarca($valor);

           /* if (empty($autos)) {

                //header("Location:./?accion=inicio");
                return include_once "vistas/Auto/inicio.php";
            }
            //return include_once "vistas/Auto/inicio.php";*/
        }
        //header("Location:./?accion=inicio");
    }
}
