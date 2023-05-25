<?php
class Main extends Controller
{
    function __construct()
    {
        // Llama al constructor de la clase padre
        parent::__construct();
        $this->view->render("main/index");
        echo "<p style= 'color:blue'>Este es el main</p>";
    }
    function saludo(){
        echo "<p style= 'color:green'>Llamaste al metodo saludo</p>";
    }
}
?>