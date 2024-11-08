<?php

class conexao
{

    public
        $host = 'localhost', $user = 'root', $password = '', $banco = 'pids_tech',

        $conn;

    public function __construct()
    {
        $this->conexao();
    }
    private function conexao()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->banco);
    }

    public function logar($user)
    {
        $stmt = $this->conn->prepare("SELECT * FROM login WHERE usuario = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();

        $result = $stmt->get_result();
        $stmt->close();
        $this->conn->close();
        return $result;
    }
    public function cadPessoaFisica($cpf, $nome, $sobrenome, $telefone, $email, $endereco, $cep, $dataCad)
    {
        $stmt = $this->conn->prepare("INSERT INTO pessoa_fisica values(null,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssss", $cpf, $nome, $sobrenome, $email, $endereco, $cep, $dataCad, $telefone);
        $stmt->execute();

        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Cadastro realizado com sucesso!');"
                . "window.location.href='../pages/login.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
    public function cadastrarEmpresa($cnpj, $nomeEmpresa, $nomeResponsavel, $telefoneEmpresa, $telefoneResponsavel, $emailEmpresa, $emailResponsavel, $cargo, $dataCad)
    {
        $stmt = $this->conn->prepare('INSERT INTO empresas values(null,?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param("sssssssss", $cnpj, $nomeEmpresa, $nomeResponsavel, $telefoneEmpresa, $telefoneResponsavel, $emailEmpresa, $emailResponsavel, $cargo, $dataCad);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Cadastro realizado com sucesso!');"
                . "window.location.href='../pages/cadDoacao.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
    public function cadastrarUsuario($user, $password, $cargo, $cpf, $nomeCompleto, $email)
    {
        $senhaHash = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $this->conn->prepare("INSERT INTO login VALUES(null,?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $cpf, $nomeCompleto, $user, $senhaHash, $cargo, $email);
        $stmt->execute();

        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Cadastro realizado com sucesso!');"
                . "window.location.href='../pages/cadDoacao.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
}
