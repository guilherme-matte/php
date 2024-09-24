<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of classe
 *
 * @author 182220023
 */
class cadastrar {

    private $nomeCompleto, $email,$telefone,$dataNasc,$estado;
   
    public function getNomeCompleto() {
        return $this->nomeCompleto;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getDataNasc() {
        return $this->dataNasc;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setNomeCompleto($nomeCompleto): void {
        $this->nomeCompleto = $nomeCompleto;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }

    public function setDataNasc($dataNasc): void {
        $this->dataNasc = $dataNasc;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }


   

  
}
