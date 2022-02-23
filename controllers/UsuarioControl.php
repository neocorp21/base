 
<?php

//IMPORTANDO datos-Consulta SQL
include_once('./datos/UsuarioDAO.php');
include_once('./datos/ProcesoDAO.php');
//IMPORTANDO MODELOS-ENTIDAD
include_once('./models/Usuario.php');
include_once('./models/Proceso.php');

if (!isset($_SESSION)) {
  session_start();
}



class UsuarioControl
{

  public $MODEL;
  public $MODEL1;

  public function __construct()
  {
    $this->MODEL = new UsuarioDAO(); //INSTANCIA DE SQL
    $this->MODEL1 = new ProcesoDAO(); //INSTANCIA DE SQL
  }

  public function iniciarSesion() //Cliente
  {
    include_once('views/usuario/iniciarSesion.php');
  }
  //FORMULARIO REGISTRO
  public function nuevo() //Cliente
  {
    include_once('views/usuario/registrar.php');
  }

  public function perfil() //Cliente
  {
    include_once('views/usuario/perfil.php');
  }

  public function billetera() //Cliente
  {
    include_once('views/usuario/billetera.php');
  }
  public function tablero() //Cliente
  {
    include_once('views/usuario/tablero.php');
  }
  public function deposito() //Cliente
  {
    include_once('views/usuario/deposito.php');
  }



  public function lista() //ADMIN
  {
    include_once('views/administrador/index.php');
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
      $correo = $_POST['txtcorreo'];
      $resultado = $this->MODEL->CorreoExiste($correo);

      if ($resultado != true) {
        $resultado1 = $this->MODEL->registrar($alm);
        if ($resultado1) {
          $msg = "Correctamente";
          echo $this->MODEL->success($msg);
          // include_once('views/usuario/lista.php');
        } else {
          $msg = "No se guardo el archivo";
          echo $this->MODEL->error($msg);
        }
      } else {
        $msg = "correo existe";
        echo $this->MODEL->error($msg);
        include_once('views/usuario/registrar.php');
      }
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  //GUARDAR 
  public function guardarProceso() //Deposito
  {

    try {
      $alm = new ProcesoClass(); //INSTANCIA DE MI CLASE EntiedadClass para el uso de metodos set

      $alm->setIdusuario($_SESSION['idUsuario']);
      $alm->setIdbanco($_POST['txtidbanco']);//txtidbanco
      $alm->setCondiccion('Deposito');
      $alm->setMontoProceso(0);
      $alm->setProcesoTexto('Evaluacion');
      
      $alm->setFoto($_POST['txtfoto']);

      $resultado1 = $this->MODEL1->registrar($alm);
      if ($resultado1) {
        $msg = "Correctamente";
        echo $this->MODEL1->success($msg);
        include_once('views/usuario/perfil.php');
      } else {
        $msg = "No se guardo el archivo";
        echo $this->MODEL1->error($msg);
      }
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function Log()
  {

    try {
      $correo = $_POST['txtcorreo'];
      $clave = $_POST['txtclave'];
      $resultado = $this->MODEL->login_($correo, $clave);
      include_once('views/usuario/billetera.php');
    } catch (\Throwable $th) {
      throw $th;
    }
  }


  public function cerrarSesion()
  {
    session_start();
    session_destroy();
    include_once('views/usuario/iniciarSesion.php');
  }
}
