<?php

class Main extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render("main/index");
        //echo "<p>Llamaste al controlador main</p>";
    }
    function saludo()
    {
        echo "<p>Llamaste al metodo saludo</p>";
    }
}

?>