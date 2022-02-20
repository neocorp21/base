<?php

//IMPORTANDO datos-Consulta SQL
include_once('./datos/UsuarioDAO.php');

//IMPORTANDO MODELOS-ENTIDAD
include_once('./models/Usuario.php');


class UsuarioControl
{

  public $MODEL;

  public function __construct()
  {
    $this->MODEL = new UsuarioDAO(); //INSTANCIA DE SQL
  }

  //VISTA POR DEFECTO
  public function index()
  {
    include_once('views/home.php');
  }

  public function lista()
  {
    include_once('views/administrador/index.php');
  }


  //FORMULARIO REGISTRO
  public function nuevo()
  {
    include_once('views/usuario/registrar.php');
  }
  public function perfil()
  {
    include_once('views/usuario/perfil.php');
  }

  //GUARDAR 
  public function guardar()
  {
 
              try {
                $alm = new UsuarioClass(); //INSTANCIA DE MI CLASE EntiedadClass para el uso de metodos set
                
                $alm->setCorreo($_POST['txtcorreo']); 
                $alm->setClave($_POST['txtclave']); 
                $alm->setNombre($_POST['txtnombre']); 
                $alm->setdni($_POST['txtdni']); 
             
                $alm->setSaldoActual(0); 
                $alm->setSaldoAqu(0); 
                // 
                $resultado = $this->MODEL->registrar($alm);
                if ($resultado) {
                  $msg = "Correctamente";
                  echo $this->MODEL->success($msg);
                 include_once('views/usuario/lista.php');
                } 
               else {
                  $msg = "No se guardo el archivo";
                  echo $this->MODEL->error($msg);
                  include_once('views/usuario/lista.php');
                }


              } catch (\Throwable $th) {
                throw $th;
              }

            
         
     
       
     
  }
 

   
}
