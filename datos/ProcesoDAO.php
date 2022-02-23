<?php

//IMPORTAMOS LA CONEXION
include_once('./config/Conexion.php');

//modelo - entidad 
include_once('./models/Proceso.php');

class ProcesoDAO
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
  public function registrar(ProcesoClass $data)
  {
    try {
      $query = "INSERT INTO procesos ( idusuario, idbanco, condicion, montoproceso,procesoTexto, foto) VALUES ( ?, ?, ?, ?, ?, ?)";
      $stm = $this->PDO->ConectarBD()->prepare($query)->execute(
        array(
          $data->getIdusuario(),
          $data->getIdbanco(),
          $data->getCondiccion(),
          $data->getMontoProceso(),
          $data->getProcesoTexto(),
          $data->getFoto()
        )

      );

      return $stm;
    } catch (\Throwable $th) {
      throw $th;
    }
  }
  public function listarCliente()
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

  public function listarProcesoVerificar()
  {
    try {
      $query = "SELECT p.idproceso as idproceso,u.idusuario as idusuario,u.nombre as nombre,u.correo as correo ,p.foto as foto , p.montoproceso as montoproceso from procesos p 
      inner join usuario u on p.idusuario=u.idusuario 
      WHERE p.procesoTexto='Evaluacion'
      
      ";
      $stm = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function ObtenerDatosProcesoEvaluar($idproceso)
  {
    try {
      $query = "SELECT  p.idproceso as idproceso,p.idusuario as idusuario,u.saldoactual as saldoAnterior,p.foto as foto FROM procesos p
      inner JOIN usuario u on  u.idusuario=p.idusuario
      WHERE p.idproceso=$idproceso";
      $stm = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (\Throwable $th) {
      throw $th;
    }
  }




  public function transaccion( $idproceso ,$idusuario, $saldoanterior, $montoproceso)
  {
    $saldoanterior= (int)$saldoanterior;
    $montoproceso=(int)$montoproceso;
    $saldoActulizado=$saldoanterior+$montoproceso ;
  
    try {
      $stm = $this->PDO->ConectarBD();
      $stm->beginTransaction();
 
      $stm->query("INSERT INTO historial (idproceso,condiccionTexto, saldoanterior, montoproceso, saldoactual) VALUES ( $idproceso, 'Deposito', $saldoanterior, $montoproceso, $saldoActulizado)");
      $stm->query("UPDATE  procesos set procesoTexto='Aprobado' ,montoproceso=$montoproceso WHERE idproceso=$idproceso");
      $stm->query("UPDATE  usuario set saldoactual=$saldoActulizado WHERE idusuario=$idusuario");
      $stm->commit();
      echo "Se han introducido los nuevos clientes";
    } catch (Exception $e) {
      echo "Ha habido algún error";
      $stm->rollback();
    }
  }



  public function success($message = "")
  {
    $resultado = '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Message!</strong> ' . $message . '
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
