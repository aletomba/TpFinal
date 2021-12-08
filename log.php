<?php
  function guardarError($mensaje, $linea, $archivo){
    $file = "log.txt";
    $nuevoMensaje = "Error: $mensaje. "."Linea: $linea. "."Archivo: $archivo. \n";
    //Abrimos el archivo en modo escritura con el puntero al final del archivo. Si no existe lo crea y 
    $fp = fopen($file, "a");
    //Usamos fwrite y le pasamos el puntero al archivo y el texto
    fwrite($fp, $nuevoMensaje); //escribirá solo: Hola
    fclose($fp);
  }
    
?>