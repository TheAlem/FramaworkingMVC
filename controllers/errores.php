<?php

class Errores extends Controller{
    function __construct()
    {
        // Llama al constructor de la clase padre
        parent::__construct();
        $this->view->render("errores/index");
        echo "<p style= 'color:red'>No existe el recursor </p>";
    }
}

?>