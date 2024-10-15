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
    public function listar()
    {
        $sql = "SELECT id,nomeCompleto ,email,cargo FROM meu_senac";
        $result = $this->conn->query($sql);
        $this->conn->close();
        return $result;
    }
    public function deletar($id)
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
    public function alterar($id, $nomeCompleto, $email, $cargo)
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
            or die("Falha na consulta");
        if ($result == true) {
            return $result;
        } else {
            die("Falha na consulta");
        }
        $this->conn->close();
    }
}
