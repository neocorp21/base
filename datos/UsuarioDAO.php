
<?php

//IMPORTAMOS LA CONEXION
include_once('./config/Conexion.php');

//modelo - entidad 
include_once('./models/Usuario.php');

class UsuarioDAO
{

  public $PDO;

  public function __construct()
  {
    try {  //inializamos la clase conexion
      $this->PDO = new Conexion();
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function listar()
  {
    try {
      $query = "SELECT * FROM usuario";
      $stm = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function listarBanco()
  {
    try {
      $query = "SELECT * FROM banco";
      $stm = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function buscarNumeroBanco($idbanco)
  {
    try {
      $query = "SELECT * FROM banco where idbanco=$idbanco";
      $stm = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (\Throwable $th) {
      throw $th;
    }
  }
  public function registrar(UsuarioClass $data)
  {


    try {
      $query = "INSERT INTO usuario ( correo, clave, nombre, dni,saldoactual,saldoaqu) VALUES ( ?, ?, ?, ?,0,0 );";
      $stm = $this->PDO->ConectarBD()->prepare($query)->execute(
        array(
          $data->getCorreo(),
          $data->getClave(),
          $data->getNombre(),
          $data->getDni()
        )
        //  $data->null;
      );

      return $stm;
    } catch (\Throwable $th) {
      throw $th;
    }
  }


  public function CorreoExiste($correo)
  {
    try {
      $query = "SELECT * FROM usuario WHERE correo='$correo'";
      $stm = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      if ($stm->rowcount() == 0) {
        return false;
      } else
        return true;
    } catch (\Throwable $th) {
      throw $th;
    }
  }



  public function login_($correo, $clave)
  {
    try {


      $stmt =  $this->PDO->ConectarBD()->prepare("SELECT * FROM usuario WHERE correo='$correo'and clave='$clave'");
      $stmt->execute();
      $rows = $stmt->rowCount();

      if ($rows > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['idUsuario'] = $row['idusuario'];
        $_SESSION['nombreUsuario'] = $row['nombre'];
        $_SESSION['correoUsuario'] = $row['correo'];
        $_SESSION['dniUsuario'] = $row['dni'];
        $_SESSION['saldoactualUsuario'] = $row['saldoactual'];
        $_SESSION['saldoaquUsuario'] = $row['saldoaqu'];
      } else {
        header('Location: index.php?c=iniciarSesion');
      }
    } catch (\Throwable $th) {
      throw $th;
    }
  }
  public function SaldoActual($idusuario)
  {
    try {
      $query = "SELECT * FROM usuario WHERE idusuario=$idusuario ";
      $stm = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function HistorialTOP3($idusuario)
  {
    try {
      $query = "Select h.condiccionTexto, h.montoproceso from historial h inner join procesos p on h.idproceso=p.idproceso where p.idusuario=$idusuario   order by idhistorial DESC LIMIT 3 ";
      $stm = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (\Throwable $th) {
      throw $th;
    }
  }
  public function Historial($idusuario)
  {
    try {
      $query = "Select h.condiccionTexto, h.montoproceso from historial h inner join procesos p on h.idproceso=p.idproceso where p.idusuario=$idusuario   order by idhistorial DESC  ";
      $stm = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (\Throwable $th) {
      throw $th;
    }
  }


  public function success($message = "")
  {
    $resultado = '
   
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> ' . $message . '</strong>  
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

    ';
    echo $resultado;
  }

  public function error($message = '')
  {
    $resultado = '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Message!</strong> ' . $message . '
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
    echo $resultado;
  }
}
