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
    public function consultarEmpresa()
    {
        $result = $this->conn->query("SELECT * FROM empresas") or die("Falha na consulta " . $this->conn->error);
        if ($result == TRUE) {
            return $result;
        } else {
            die("Erro na conexão!");
        }
    }
    public function consultarEmpresaDoacao()
    {
        $result = $this->conn->query("SELECT * FROM cadastro_produto_empresas") or die("Falha na consulta " . $this->conn->error);
        if ($result == TRUE) {
            return $result;
        } else {
            die("Erro na conexão!");
        }
    }
    public function consultarPF()
    {
        $result = $this->conn->query("SELECT * FROM pessoa_fisica") or die("Falha na consulta " . $this->conn->error);
        if ($result == TRUE) {
            return $result;
        } else {
            die("Erro na conexão!");
        }
    }
    public function excluirPFConsulta($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM pessoa_fisica where pessoaFisica_id = $id");
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Perfil excluido com sucesso!');"
                . "window.location.href='../pages/conDoadores.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
    public function excluirEmpresaConsulta($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM empresas where empresa_id = $id");
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Perfil excluido com sucesso!');"
                . "window.location.href='../pages/conDoadores.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
    public function alterarEmpresaConsulta($id, $nomeEmpresa, $responsavel, $cargo, $emailResponsavel, $telefoneResponsavel, $emailEmpresa, $telefoneEmpresa)
    {

        $stmt = $this->conn->prepare("UPDATE empresas SET nome_empresa = ?,nome_responsavel = ?,telefone_empresa = ?, telefone_responsavel = ?,email_empresa=?,email_responsavel=?,cargo=? where empresa_id=$id");
        $stmt->bind_param("sssssss", $nomeEmpresa, $responsavel, $telefoneEmpresa, $telefoneResponsavel, $emailEmpresa, $emailResponsavel, $cargo);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Usuário editado com sucesso!');"
                . "window.location.href='../pages/conDoadores.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }

    public function alterarEmpresaDoacao($id, $categoria, $quantidade, $nomeEmpresa, $responsavel, $descricao)
    {

        $stmt = $this->conn->prepare("UPDATE cadastro_produto_empresas SET categoria = ?,quantidade = ?,nomeEmpresa = ?,responsavel = ?,descricao=? where produto_id=$id");
        $stmt->bind_param("sisssss", $categoria, $quantidade, $nomeEmpresa, $responsavel, $descricao);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Computador editado com sucesso!');"
                . "window.location.href='../pages/conComputadores.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
    public function alterarPFConsulta($id, $nome, $sobrenome, $email, $endereco, $cep, $telefone)
    {

        $stmt = $this->conn->prepare("UPDATE pessoa_fisica SET nome = ?,sobrenome = ?,email = ?, endereco = ?,cep=?,telefone=? where pessoaFisica_id=$id");
        $stmt->bind_param("ssssss", $nome, $sobrenome, $email, $endereco, $cep, $telefone);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Usuário editado com sucesso!');"
                . "window.location.href='../pages/conDoadores.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
    public function excluirUsuarioConsulta($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM login where login_id = $id");
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Perfil excluido com sucesso!');"
                . "window.location.href='../pages/conColaboradores.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
    public function alterarUsuarioConsulta($id, $nomeCompleto, $usuario, $email, $perfil)
    {

        $stmt = $this->conn->prepare("UPDATE login SET nome_completo = ?,usuario=?, email=?, perfil = ? where login_id=$id");
        $stmt->bind_param("ssss", $nomeCompleto, $usuario, $email, $perfil);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Perfil editado com sucesso!');"
                . "window.location.href='../pages/conColaboradores.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }

    public function alterarUsuario($id, $nomeCompleto, $usuario, $email)
    {

        $stmt = $this->conn->prepare("UPDATE login SET nome_completo = ?,usuario=?,email=? where login_id=$id");
        $stmt->bind_param("sss", $nomeCompleto, $usuario, $email);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Perfil editado com sucesso!');"
                . "window.location.href='../pages/editarPerfil.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: <br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
    }
    public function consultarUsuarios()
    {
        $result = $this->conn->query("SELECT * FROM login") or die("Falha na consulta " . $this->conn->error);
        if ($result == TRUE) {
            return $result;
        } else {
            die("Erro na conexão!");
        }
    }
}
