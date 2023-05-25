<?php

class View
{
    function __construct()
    {
        echo "<p>Vista Base</p>";
    }

    function render($nombre){ //main/index
        $ruta = "views/" . $nombre . ".php";
       // echo $ruta;
        require $ruta;
    }
}

?>