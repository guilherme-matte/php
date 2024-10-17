<?php
class conexao
{

    public $servidor = 'localhost', $user = 'root', $pass = '', $banco = 'senac_tech', $conn;

    public function __construct()
    {
        $this->conexao();
    }

    private function conexao()
    {
        $this->conn = new mysqli($this->servidor, $this->user, $this->pass, $this->banco);
    }

    public function logar($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM meu_senac WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $this->conn->close();
        return $result;
    }
    public function listar() //metodo para listar usuario na tabela de administração
    {
        $sql = "SELECT id,nomeCompleto ,email,cargo FROM meu_senac";
        $result = $this->conn->query($sql);
        $this->conn->close();
        return $result;
    }
    public function deletarFaleConoscoPSG($id){
        $sql_delete = "DELETE FROM fale_conosco_psg WHERE id = $id";
        if ($this->conn->query($sql_delete) === true) {
            echo "<script>
    alert('Usuário excluído com sucesso!');
    </script>";
        } else {
            echo "<script>
    alert('Não foi possível excluir usuário! ');
    </script>";
            echo $this->conn->error;
        }
    }
    public function deletarFaleConosco($id){
        $sql_delete = "DELETE FROM fale_conosco WHERE id = $id";
        if ($this->conn->query($sql_delete) === true) {
            echo "<script>
    alert('Usuário excluído com sucesso!');
    </script>";
        } else {
            echo "<script>
    alert('Não foi possível excluir usuário! ');
    </script>";
            echo $this->conn->error;
        }
    }
    public function deletar($id) //metodo para deletar usuario na tabela de administração
    {
        $sql_delete = "DELETE FROM meu_senac WHERE id = $id";
        if ($this->conn->query($sql_delete) === true) {
            echo "<script>
    alert('Usuário excluído com sucesso!');
    </script>";
        } else {
            echo "<script>
    alert('Não foi possível excluir usuário! ');
    </script>";
            echo $this->conn->error;
        }
    }
    public function alterarFaleConoscoPSG($id, $nome, $sobrenome, $dataNasc, $endereco, $bairro, $cidade, $estado, $sexo,$fone,$email,$obs)
    {
        $sql_update = "UPDATE fale_conosco_psg SET nome='$nome',sobrenome='$sobrenome',cidade='$cidade',estado='$estado',sexo='$sexo',fone='$fone',email='$email',obs='$obs' WHERE id = $id";
        if ($this->conn->query($sql_update) === true) {
            echo "<script>
        alert('Usuário editado com sucesso!');
        </script>";
        } else {
            echo "<script>
        alert('Não foi possivel alterar usuário!');
        </script>";
            echo $this->conn->error;
        }
    }
    public function alterarFaleConosco($id, $nomeCompleto, $cpf, $uf, $cidade, $email, $telefone, $modalidade, $assunto,$mensagem)
    {
        $sql_update = "UPDATE fale_conosco SET nomeCompleto='$nomeCompleto',cpf='$cpf',uf='$uf',cidade='$cidade',email='$email',telefone='$telefone',modalidade='$modalidade',assunto='$assunto',mensagem='$mensagem'  WHERE id = $id";
        if ($this->conn->query($sql_update) === true) {
            echo "<script>
        alert('Usuário editado com sucesso!');
        </script>";
        } else {
            echo "<script>
        alert('Não foi possivel alterar usuário!');
        </script>";
            echo $this->conn->error;
        }
    }
    public function alterar($id, $nomeCompleto, $email, $cargo) //metodo para alterar usuario na tabela de administração
    {
        $sql_update = "UPDATE meu_senac SET nomeCompleto='$nomeCompleto',email='$email',cargo='$cargo' WHERE id = $id";
        if ($this->conn->query($sql_update) === true) {
            echo "<script>
            alert('Usuário editado com sucesso!');
            </script>";
           
        } else {
            echo "<script>
            alert('Não foi possivel alterar usuário!');
            </script>";
            echo $this->conn->error;
        }
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
                . "window.location.href='../pages/faleconosco.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: " . sql . "<br>" . $this->conn->error;
            echo '<br>';
            echo 'Cadastro nao realizado';
        }
        $stmt->close();
        $this->conn->close();
    }
    public function cadastroFaleConoscoPSG( $nome, $sobrenome, $dataNasc, $endereco, $bairro, $cidade, $estado, $sexo,$fone,$email,$usuario,$senha,$obs)
    {
        $sql = "insert into fale_conosco_psg values (null,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param('sssssssssssss', $nome, $sobrenome, $dataNasc, $endereco, $bairro, $cidade, $estado, $sexo,$fone,$email,$usuario,$senha,$obs);
        $stmt->execute();
        if ($stmt == true) {
            echo "<script language='javascript' type='text/javascript'>"
                . "alert('Mensagem enviada com sucesso!');"
                . "window.location.href='../pages/fale_conosco.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: " . sql . "<br>" . $this->conn->error;
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
                . "window.location.href='../pages/meu_senac.php'"
                . "</script>";
            die();
        } else {
            echo "Erro: " . sql . "<br>" . $this->conn->error;
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
            or die("Falha na consulta " . $this->conn->error);
        if ($result == true) {
            return $result;
        } else {
            die("Falha na consulta");
        }

    }
    public function consultaFaleConoscoPSG()
    {
        $sql = "select * from fale_conosco_psg";
        $result = $this->conn->query($sql)
            or die("Falha na consulta " . $this->conn->error);
        if ($result == true) {
            return $result;
        } else {
            die("Falha na consulta");
        }

    }
}