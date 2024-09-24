<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of cadastrar
 *
 * @author 182220023
 */
class cadastrar {

    
    private $nome,$sobrenome,$dataNasc,$endereco,$bairro,$cidade,$estado,$sexo,$fone,$email,$senha,$observacao;
    
    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function getDataNasc() {
        return $this->dataNasc;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getFone() {
        return $this->fone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getObservacao() {
        return $this->observacao;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome): void {
        $this->sobrenome = $sobrenome;
    }

    public function setDataNasc($dataNasc): void {
        $this->dataNasc = $dataNasc;
    }

    public function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

    public function setBairro($bairro): void {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade): void {
        $this->cidade = $cidade;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function setSesxo($sexo): void {
        $this->sexo = $sexo;
    }

    public function setFone($fone): void {
        $this->fone = $fone;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setObservacao($observacao): void {
        $this->observacao = $observacao;
    }


    
    
}
