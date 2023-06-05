<?php

class Producto extends Controller{
    public $view;
    function __construct()
    {
        // Llama al constructor de la clase padre
        parent::__construct();
        $this->view->render("producto/index");
        //echo"Llamaste al controlador producto";
    }
}

?>
