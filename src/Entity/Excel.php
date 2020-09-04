<?php
namespace App\Entity;

class Excel {
    private $turno;
    private $llamado;
    private $anio;
    
    
    function getTurno() {
        return $this->turno;
    }

    function setTurno($turno): void {
        $this->turno = $turno;
    }

    function getLlamado() {
        return $this->llamado;
    }

    function setLlamado($llamado): void {
        $this->llamado = $llamado;
    }

    function getAnio() {
        return $this->anio;
    }

    function setAnio($anio): void {
        $this->anio = $anio;
    }






   




}