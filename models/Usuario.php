<?php

 
 



class UsuarioClass
{
    private $idusuario;
    private $correo;
    private $clave;
    private $nombre;
    private $foto;
    private $telefono;
    private $saldoactual;
    private $saldoaqu;

    public function __construct()
    {
        $this->idusuario = 0;
        $this->correo = "";
        $this->clave = "";
        $this->nombre   = "";
        $this->foto   = "";
        $this->telefono   = "";
        $this->saldoactual   = 0;  
        $this->saldoaqu   = 0;
    }

    function getIdusuario(){
        return $this->idusuario;
    }
    function setIdusuario($idusuario){
        $this->idusuario = $idusuario;
    }

    function getCorreo(){
        return $this->correo;
    }
    function setCorreo($correo){
        $this->correo = $correo;
    }

    function getClave(){
        return $this->clave;
    }
    function setClave($clave){
        $this->clave = $clave;
    }


    
    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function getFoto(){
        return $this->foto;
    }
    function setFoto($foto){
        $this->foto = $foto;
    }
    function getTelefono(){
        return $telefono->telefono;
    }
    function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    function getSaldoActual(){
        return $this->saldoactual;
    }
    function setSaldoActual($saldoactual){
        $this->saldoactual = $saldoactual;
    }
    function getSaldoAqu(){
        return $this->saldoactual;
    }
    function setSaldoAqu($saldoaqu){
        $this->saldoaqu = $saldoaqu;
    }
}
