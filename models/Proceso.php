<?php



class ProcesoClass
{
    private $idproceso;
    private $idusuario;
    private $idbanco;
    private $condicion;
    private $montoproceso;
    private $procesoTexto;
    private $foto;



    public function __construct()
    {
        $this->idproceso = 0;
        $this->idusuario = 0;
        $this->idbanco = 0;
        $this->condicion   = "";
        $this->montoproceso   = 0;
        $this->procesoTexto = "";
        $this->foto   = "";
    }
    function getIdproceso()
    {
        return $this->idproceso;
    }
    function setIdproceso($idproceso)
    {
        $this->idproceso = $idproceso;
    }

    function getIdusuario()
    {
        return $this->idusuario;
    }
    function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    function getIdbanco()
    {
        return $this->idbanco;
    }
    function setIdbanco($idbanco)
    {
        $this->idbanco = $idbanco;
    }

    function getCondiccion()
    {
        return $this->condicion;
    }
    function setCondiccion($condicion)
    {
        $this->condicion = $condicion;
    }
 
    function getMontoProceso()
    {
        return $this->montoproceso;
    }
    function setMontoProceso($montoproceso)
    {
        $this->montoproceso = $montoproceso;
    }

    function getProcesoTexto()
    {
        return $this->procesoTexto;
    }
    function setProcesoTexto($procesoTexto)
    {
        $this->procesoTexto = $procesoTexto;
    }

    function getFoto()
    {
        return $this->foto;
    }
    function setSaldoActual($foto)
    {
        $this->foto = $foto;
    }
}
