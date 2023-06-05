<?php

class View
{
    function __construct()
    {
        //echo "<p>Vista Base</p>";
    }
    //funcion que llama a la vista respectiva
    function render($nombre)
    { //   main/index
        $ruta = "views/" . $nombre . ".php";
        require $ruta;
    }

}

?>