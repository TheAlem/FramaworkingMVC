<?php
class Venta extends Controller{
    
    function __construct()
    {
        parent::__construct(); //Llamamos al constructor de la clase base \
        $this->view->render("venta/index");
        echo "<p style= 'color:green'>Llamaste al controlador venta</p>";
    }

    function registrar(){
        echo "<p style= 'color:blue'>Has registrado una venta</p>";
    }
}
?>