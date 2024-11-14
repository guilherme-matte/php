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
    public function buscarCNPJ($cnpj)
    {
        $stmt = $this->conn->prepare("SELECT * FROM empresas where cnpj=?");
        $stmt->bind_param("s", $cnpj);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    }
    public function buscarCPF($cpf)
    {
        $stmt = $this->conn->prepare("SELECT * FROM pessoa_fisica where cpf=?");
        $stmt->bind_param("s", $cpf);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
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
    public function cadProdutoPF($cpf, $nomeCompleto, $quantidade, $categoria, $descricao)
    {
        if (!$this->conn) {
            die("Erro na conexão: " . $this->conn->error);
        }
        $stmt = $this->conn->prepare("INSERT INTO cadastro_produto_pessoafisica (cpf, nomePF, quantidade, categoria, descricao) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $cpf, $nomeCompleto, $quantidade, $categoria, $descricao);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
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
    public function cadPessoaFisica($cpf, $nome, $sobrenome, $telefone, $email, $endereco, $cep, $dataCad)
    {
        $stmt = $this->conn->prepare("INSERT INTO pessoa_fisica values(null,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssss", $cpf, $nome, $sobrenome, $email, $endereco, $cep, $dataCad, $telefone);
        $stmt->execute();

        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Cadastro realizado com sucesso!');"
                . "window.location.href='../pages/cadDoador.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
    public function cadProdutoEmpresa($cnpj, $categoria, $quantidade, $nomeEmpresa, $responsavel, $descricao)
    {
        if (!$this->conn) {
            die("Erro na conexão: " . $this->conn->error);
        }
        $stmt = $this->conn->prepare("INSERT INTO cadastro_produto_empresas (cnpj, categoria, quantidade, nomeEmpresa,responsavel, descricao) VALUES (?, ?, ?, ?, ?,?)");
        $stmt->bind_param("ssisss", $cnpj, $categoria, $quantidade, $nomeEmpresa, $responsavel, $descricao);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
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
    public function cadastrarEmpresa($cnpj, $nomeEmpresa, $nomeResponsavel, $telefoneEmpresa, $telefoneResponsavel, $emailEmpresa, $emailResponsavel, $cargo, $dataCad)
    {
        $stmt = $this->conn->prepare('INSERT INTO empresas values(null,?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param("sssssssss", $cnpj, $nomeEmpresa, $nomeResponsavel, $telefoneEmpresa, $telefoneResponsavel, $emailEmpresa, $emailResponsavel, $cargo, $dataCad);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Cadastro realizado com sucesso!');"
                . "window.location.href='../pages/cadDoador.php'"
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
                . "window.location.href='../pages/cadUsuarios.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
    public function buscarID($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM login where login_id=?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    }
    public function alterarUsuario($id, $nomeCompleto, $usuario, $email)
    {

        $stmt = $this->conn->prepare("UPDATE login SET nome_completo = ?,usuario=?,email=? where login_id=$id");
        $stmt->bind_param("sss",$nomeCompleto,$usuario,$email);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Alteração realizada com sucesso!');"
                . "window.location.href='../pages/editarPerfil.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
}
