<?php

class Model
{
  function __construct()
  {
    //nuestro objeto de conexion a la DB
    $this->db = new Database();
  }
  function loadModel($model)
  {
    $url = 'models/' . $model . 'model.php';
    if (file_exists($url)) {
      require $url;
      $modelName = $model . 'Model';
      $this->model = new $modelName();
    }
  }
}


?>