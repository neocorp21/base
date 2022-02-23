
<?php

//IMPORTANDO datos-Consulta SQL

include_once('./datos/ProcesoDAO.php');
//IMPORTANDO MODELOS-ENTIDAD

include_once('./models/Proceso.php');



class AdminControl
{

    public $MODEL;


    public function __construct()
    {
        $this->MODEL = new ProcesoDAO(); //INSTANCIA DE SQL

    }


    public function lista() //ADMIN
    {
        include_once('views/administrador/index.php');
    }

    public function procesarHistorial() //Cliente
    {
        include_once('views/administrador/procesarHistorial.php');
    }

    public function Log()
    {
        try {
            
            $idproceso = $_POST['txtidproceso'];
            $idusuario = $_POST['txtidusuario'];
            $saldoanterior = $_POST['txtsaldoanterior'];
            $montoproceso = $_POST['txtmontoproceso'];
           


            $resultado = $this->MODEL->transaccion( $idproceso,  $idusuario, $saldoanterior, $montoproceso);
            // include_once('views/usuario/billetera.php');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
