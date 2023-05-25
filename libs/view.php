<?php

class View
{
    function __construct()
    {
        echo "<p>Vista Base</p>";
    }

    function render($nombre)
    {
        $ruta = "views/" . $nombre . ".php";
        if (file_exists($ruta)) {
            require $ruta;
        } else {
            echo "<p>Error: No se encontró la vista '$nombre'</p>";
        }
    }
}

?>