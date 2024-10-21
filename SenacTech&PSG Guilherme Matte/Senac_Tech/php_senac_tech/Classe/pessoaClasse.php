<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of pessoaClasse
 *
 * @author 182220023
 */
class pessoaClasse {

    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function getNomeCompleto() {
        return $this->nomeCompleto;
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

    public function getUsuario() {
        return $this->usuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome): void {
        $this->sobrenome = $sobrenome;
    }

    public function setNomeCompleto($nomeCompleto): void {
        $this->nomeCompleto = $nomeCompleto;
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

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    public function setFone($fone): void {
        $this->fone = $fone;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    private $nome, $sobrenome, $nomeCompleto, $dataNasc, $endereco, $bairro, $cidade, $estado, $sexo, $fone, $email, $usuario, $senha, $cpf;
    private $assunto, $modalidade, $mensagem;

    public function getAssunto() {
        return $this->assunto;
    }

    public function getModalidade() {
        return $this->modalidade;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setAssunto($assunto): void {
        $this->assunto = $assunto;
    }

    public function setModalidade($modalidade): void {
        $this->modalidade = $modalidade;
    }

    public function setMensagem($mensagem): void {
        $this->mensagem = $mensagem;
    }

}


