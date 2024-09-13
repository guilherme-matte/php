<?php

class Calcular {

    private $valor1;
    private $valor2;

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

}
