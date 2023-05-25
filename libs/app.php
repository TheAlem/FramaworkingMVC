<?php
class App
{
    function __construct()
    {
        echo "Mi aplicación MVC de WEB II";
        // Lógica en la URL
        $url = isset($_GET['url']) ? $_GET['url'] : '';
        echo "<br>";
        echo $url;
        $url = explode("/", $url);
        echo "<br>";
        echo "<br>";
        echo $url[0];
        echo "<br>";

        // Llamada al controlador
        $ruta = "controllers/" . $url[0] . ".php";
        echo $ruta;
        echo "<br>";

        if (file_exists($ruta)) {
            require_once $ruta;
            $c = new $url[0];
            if (isset($url[1])) {
                if (method_exists($c, $url[1])) {
                    $c->{$url[1]}();
                } else {
                    echo "<p>El controlador no tiene la funcion " . $url[1] . "</p>";
                }
            }
            // Verificar si la función especificada en la URL existe en el controlador

        } else {
            $errorController = "controllers/errores.php";
            require_once $errorController;
            $c = new errores();
            //echo "No existe el recurso";
            //crear un controlador de errores
        }
    }
}
?>