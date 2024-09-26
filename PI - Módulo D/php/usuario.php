<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of usuario
 *
 * @author 182220023
 */
class usuario {

    private $cpf,$nome,$sobrenome,$telefone,$email,$endereco,$cep;
    
    public function getCpf() {
        return $this->cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome): void {
        $this->sobrenome = $sobrenome;
    }

    public function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

    public function setCep($cep): void {
        $this->cep = $cep;
    }


}
