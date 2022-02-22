<?php

class ProcesoClass
{

    private $idbanco;
    private $nombre;
    private $numerocuenta;
    private $titularcuenta;




    public function __construct()
    {

        $this->idbanco = 0;
        $this->nombre   = "";
        $this->numerocuenta   = "";
        $this->titularcuenta = "";
    }


    function getIdbanco()
    {
        return $this->idbanco;
    }
    function setIdbanco($idbanco)
    {
        $this->idbanco = $idbanco;
    }

    function getNombre()
    {
        return $this->nombre;
    }
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getNumeroCuenta()
    {
        return $this->numerocuenta;
    }
    function setNumeroCuenta($numerocuenta)
    {
        $this->numerocuenta = $numerocuenta;
    }

    function getTitularCuenta()
    {
        return $this->titularcuenta;
    }
    function setTitularCuenta($titularcuenta)
    {
        $this->titularcuenta = $titularcuenta;
    }
}
