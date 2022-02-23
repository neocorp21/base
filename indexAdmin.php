 
<?php

include_once('controllers/AdminControl.php');

//OPCIONALES
include_once('config/Conexion.php');
include_once('datos/ProcesoDAO.php');


$controller = new AdminControl();//clase del controlador

if(!isset($_REQUEST['c'])){//si no existe la ruta ,cargamos por defecto index
   $controller->lista();
} else {                  //si hay peticiones pintamos el archivo solicitado
   $peticion = $_REQUEST['c'];
   call_user_func(array($controller , $peticion));
}

 