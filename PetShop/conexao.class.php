<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of conexao
 *
 * @author 182220023
 */
class conexao {

    public $servidor = 'localhost', $user = 'root', $pass = '', $banco = 'petshop', $conn;

    public function __construct() {
        $this->conexao();
    }

    private function conexao() {
        $this->conn = new mysqli($this->servidor, $this->user, $this->pass, $this->banco);
    }

    public function cadastro($nome, $raca, $idade, $pelo, $dono, $cpfDono) {
        $sql = "insert into cachorro values (null,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param('ssisss', $nome, $raca, $idade, $pelo, $dono, $cpfDono);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
            . "alert('Mensagem enviada com sucesso!');"
            . "window.location.href='./formulario'"
            . "</script>";
            die();
        } else {
            echo "Erro: " . sql . "<br>" . $conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
        $stmt->close();
        $this->conn->close();
    }

    public function consulta() {
        $sql = "select * from cachorros";
        $result = $this->conn->query($sql)
                or die("Falha na consutla");
        if ($result == true) {
            return $result;
        } else {
            die("Falha na consulta");
        }
        $this->conn->close();
    }

}
