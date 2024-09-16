<?php

class Folha {

    private $nome, $cargo, $horasTrabalhadas, $valorHoras, $valorVT, $valorVR;

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getHorasTrabalhadas() {
        return $this->horasTrabalhadas;
    }

    public function getValorHoras() {
        return $this->valorHoras;
    }

    public function getValorVT() {
        return $this->valorVT;
    }

    public function getValorVR() {
        return $this->valorVR;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setCargo($cargo): void {
        $this->cargo = $cargo;
    }

    public function setHorasTrabalhadas($horasTrabalhadas): void {
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function setValorHoras($valorHoras): void {
        $this->valorHoras = $valorHoras;
    }

    public function setValorVT($valorVT): void {
        $this->valorVT = $valorVT;
    }

    public function setValorVR($valorVR): void {
        $this->valorVR = $valorVR;
    }

    public function calcularFolha() {

        $descontoINSS = $this->calcINSS();
        echo '<hr>';
        $descontoIRPF = $this->calcIRPF($descontoINSS);
        echo '<hr>';
        $descontoVR = $this->calcVR();
        echo '<hr>';
        $descontoVT = $this->calcVT();
        echo '<hr>';
        $descontos = ($descontoINSS + ($descontoIRPF) + $descontoVR + $descontoVT);
        echo 'Valor total dos DESCONTOS: ' . $descontos . '<br>';
        $total = ($this->horasTrabalhadas * $this->valorHoras) - ($descontoINSS + ($descontoIRPF / 12) + $descontoVR + $descontoVT);
        echo 'Salario Liquido: R$' . $total;
    }

    public function calcINSS() {
        $salarioBruto = $this->horasTrabalhadas * $this->valorHoras;
        if ($salarioBruto <= 1412) {
            $al = 0.075;
            $parcela = 0;
            $descontoINSS = ($salarioBruto * $al) - $parcela;
        } elseif ($salarioBruto > 1412 && $salarioBruto <= 2666.68) {
            $al = 0.09;
            $parcela = 21.18;
            $descontoINSS = ($salarioBruto * $al) - $parcela;
        } elseif ($salarioBruto > 2666.68 && $salarioBruto <= 4000.03) {
            $al = 0.12;
            $parcela = 101.18;
            $descontoINSS = ($salarioBruto * $al) - $parcela;
        } elseif ($salarioBruto > 4000.04 && $salarioBruto <= 7786.02) {
            $al = 0.14;
            $parcela = 181.18;
            $descontoINSS = ($salarioBruto * $al) - $parcela;
        } elseif ($salarioBruto > 7786.02) {
            $al = 0.14;
            $parcela = 181.18;
            $descontoINSS = 908.85;
        }
        echo 'Valor do DESCONTO do INSS <br/>';

        echo 'Aliquota: ' . ($al * 100) . '%<br/>';
        echo 'Parcela a deduzir: ' . $parcela . '<br/>';
        echo 'Desconto: ' . $descontoINSS . '<br/>';
        return $descontoINSS;
    }

    public function calcIRPF($descontoINSS) {
        echo 'Valor do DESCONTO do IMPOSTO de RENDA: <br/>';

        $alIR = 0;
        $descontoIR = 0;
        $salarioBruto = $this->horasTrabalhadas * $this->valorHoras;
        if ($salarioBruto > 2112.01 && $salarioBruto <= 2826.66) {
            $alIR = 0.075;
            $descontoIR = ($salarioBruto - $descontoINSS) * $alIR;
        } elseif ($salarioBruto > 2826.66 && $salarioBruto <= 3751.06) {
            $alIR = 0.15;
            $descontoIR = ($salarioBruto - $descontoINSS) * $alIR;
        } elseif ($salarioBruto > 3751.06 && $salarioBruto <= 4664.68) {
            $alIR = 0.225;
            $descontoIR = ($salarioBruto - $descontoINSS) * $alIR;
        } elseif ($salarioBruto > 4664.68) {
            $alIR = 0.275;
            $descontoIR = ($salarioBruto - $descontoINSS) * $alIR;
        }

        if ($salarioBruto < 2112) {
            echo 'Aliquota: ###ISENTO### <br>';
            echo 'Desconto: ###ISENTO### <br>';
        } else {
            echo 'Aliquota: ' . ($alIR * 100) . '%<br/>';
            echo 'Desconto: ' . $descontoIR . '<br/>';
        }
    }

    public function calcVT() {
        $salarioBruto = $this->horasTrabalhadas * $this->valorHoras;
        echo 'Valor do VT: ' . $this->valorVT . '<br/>';
        $descontoVT = $salarioBruto * 0.06;
        echo 'Valor do desconto do VT: ' . $descontoVT . '<br/>';

        if (($salarioBruto * 0.06) > $this->valorVT) {
            echo 'Valor do DESCONTO do Vale Transporte e MAIOR que o beneficio recebido! <br/>';
        } else {
            echo 'Valor do DESCONTO do Vale Transporte e MENOR que o beneficio recebido! <br/>';
        }
    }

    public function calcVR() {
        $salarioBruto = $this->horasTrabalhadas * $this->valorHoras;

        echo 'Valor do VR: ' . $this->valorVR . '<br/>';
        $descontoVR = $this->valorVR * 0.20;
        echo 'Valor do desconto do VR: ' . $descontoVR . '<br/>';

        
    }

}
