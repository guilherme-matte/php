<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of classeAluno
 *
 * @author 182220023
 */
class Aluno {

    public function getNome() {
        return $this->nome;
    }

    public function getTurma() {
        return $this->turma;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setTurma($turma): void {
        $this->turma = $turma;
    }

    private $n1 = 0, $n2 = 0, $n3 = 0, $n4 = 0, $n5 = 0, $nome, $turma;

    public function getN1() {
        return $this->n1;
    }

    public function getN2() {
        return $this->n2;
    }

    public function getN3() {
        return $this->n3;
    }

    public function getN4() {
        return $this->n4;
    }

    public function getN5() {
        return $this->n5;
    }

    public function setN1($n1): void {
        $this->n1 = $n1;
    }

    public function setN2($n2): void {
        $this->n2 = $n2;
    }

    public function setN3($n3): void {
        $this->n3 = $n3;
    }

    public function setN4($n4): void {
        $this->n4 = $n4;
    }

    public function setN5($n5): void {
        $this->n5 = $n5;
    }

    public function media() {
        $media = ($this->n1 + $this->n2 + $this->n3 + $this->n4 + $this->n5) / 5;
        return $media;
    }

    public function aprovacao() {
        $nota = $this->media();
        if ($nota >= 7) {
            $situacao = "Situacao do aluno: APROVADO";
        } else
        if ($nota >= 5) {
            $situacao = "Situacao do aluno: RECUPERACAO";
        } else {
            $situacao = "Situacao do aluno: REPROVADO";
        }

        return $situacao;
    }

}
