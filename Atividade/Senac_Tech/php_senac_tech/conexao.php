<?php
class conexao
{

    public $servidor = 'localhost', $user = 'root', $pass = '', $banco = 'senac_tech', $conn;

    public function __construct()
    {
        $this->conexao();
    }

    public function conexao()
    {
        $this->conn = new mysqli($this->servidor, $this->user, $this->pass, $this->banco);
    }

    public function cadastroFaleConosco($nomeCompleto, $uf, $cidade, $email, $telefone, $modalidade, $assunto, $mensagem, $cpf)
    {
        $sql = "insert into fale_conosco values (null,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param('sssssssss', $nomeCompleto, $uf, $cidade, $email, $telefone, $modalidade, $assunto, $mensagem, $cpf);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Mensagem enviada com sucesso!');"
                . "window.location.href='../pages/faleconosco.html'"
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
    public function cadastroMeuSenac($nomeCompleto, $telefone, $estado, $cidade, $email, $senha, $cpf)
    {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "insert into meu_senac values (null,?,?,?,?,?,?,null,?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param('sssssss', $nomeCompleto, $telefone, $estado, $cidade, $email, $senhaHash, $cpf);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Cadastro realizado com sucesso!');"
                . "window.location.href='../pages/meu_senac.html'"
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
    public function consultaFaleConosco()
    {
        $sql = "select * from fale_conosco";
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