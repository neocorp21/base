<?php

include_once('controllers/UsuarioControl.php');

//OPCIONALES
include_once('config/Conexion.php');
include_once('datos/UsuarioDAO.php');


$controller = new UsuarioControl();//clase del controlador

if(!isset($_REQUEST['c'])){//si no existe la ruta ,cargamos por defecto index
   $controller->index();
} else {                  //si hay peticiones pintamos el archivo solicitado
   $peticion = $_REQUEST['c'];
   call_user_func(array($controller , $peticion));
}

