<?php

class conexao {

    public $servidor = 'localhost', $user = 'root', $pass = '', $banco = 'livraria', $conn;

    public function __construct() {
        $this->conexao();
    }

    private function conexao() {
        $this->conn = new mysqli($this->servidor, $this->user, $this->pass, $this->banco);
    }

    public function cadastro($titulo, $edicao, $tema, $numPaginas, $anoPublicacao) {
        $sql = "insert into livros values (null,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param('sisis', $titulo, $edicao, $tema, $numPaginas, $anoPublicacao);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
            . "alert('Cadastro realizado com sucesso!');"
            . "window.location.href='./formulario.html'"
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
        $sql = "select * from livros";
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
