<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Pessoa {

    private $nome, $sobrenome, $endereco, $bairro, $cidade, $cpf, $rg;
    private $idade, $nasc;

    public function getSobrenome() {
        return $this->sobrenome;
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

    public function getCpf() {
        return $this->cpf;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getNasc() {
        return $this->nasc;
    }

    public function setSobrenome($sobrenome): void {
        $this->sobrenome = $sobrenome;
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

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    public function setRg($rg): void {
        $this->rg = $rg;
    }

    public function setNasc($nasc): void {
        $this->nasc = date("d/m/y", strtotime($nasc));
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function setIdade($i) {
        $this->idade = $i;
    }

}
