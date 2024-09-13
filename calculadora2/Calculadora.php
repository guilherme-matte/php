<?php

class Calcular {

    private $valor1;
    private $valor2;
    private $operacao;

    public function getOperacao() {
        return $this->operacao;
    }

    public function setOperacao($operacao): void {
        $this->operacao = $operacao;
    }

    public function getValor1() {
        return $this->valor1;
    }

    public function getValor2() {
        return $this->valor2;
    }

    public function setValor1($valor1): void {
        $this->valor1 = $valor1;
    }

    public function setValor2($valor2): void {
        $this->valor2 = $valor2;
    }

    public function soma() {
        $resultado = $this->valor1 + $this->valor2;
        return $resultado;
    }

    public function subtrair() {
        $resultado = $this->valor1 - $this->valor2;
        return $resultado;
    }

    public function multi() {
        $resultado = $this->valor1 * $this->valor2;
        return $resultado;
    }

    public function div() {
        $resultado = $this->valor1 / $this->valor2;
        return $resultado;
    }

    public function operacao() {

        switch ($this->operacao) {
            case "+":
                $resultado = $this->soma();
                return $resultado;
                break;
            case "-":
                $resultado = $this->subtrair();
                return $resultado;
                break;
            case "*":
                $resultado = $this->multi();
                return $resultado;

                break;
            case "/":
                $resultado = $this->div();
                return $resultado;
                break;
        }
    }

}
