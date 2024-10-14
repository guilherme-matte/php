<?PHP
session_start();
?>
<?PHP
		if(isset($_SESSION['nome_usu_sessao']) && 
		$_SESSION['cargo_usu_sessao'] === 'ADM'){
			echo "<a href='adm.php?logout'>Logout</a> | ";
			echo "<a href='#'>"
			.$_SESSION['nome_usu_sessao']."</a> | ";
			
			if(isset($_SESSION['nome_usu_sessao']) && 
			($_SESSION['cargo_usu_sessao']) === 'ADM'){
			echo "<a href='./adm.php'>Administrador</a> | ";
			}
		}
		if(isset($_GET['logout'])){
			session_destroy();
			header("Location: ../index.php");
		}
	?>
<?php
	include('conexao.php');
	
	if(isset($_POST['edit_user'])){
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cargo = $_POST['cargo'];
		
		$sql_update = "UPDATE usuarios SET nome='$nome',
		email='$email', cargo='$cargo' WHERE id=$id";
		if($conn->query($sql_update) === true){
			echo "<script>
			alert('Usuário editado com sucesso!');
			</script>";
		}else{
			echo "<script>
			alert('Não foi possível editar usuário!');
			</script>";
		}
	}
	
	if(isset($_POST['delete_user'])){
		$id = $_POST['id'];
		
		$sql_delete = "DELETE FROM usuarios 
		WHERE id=$id";
		
		if($conn->query($sql_delete) === true){
			echo "<script>
			alert('Usuário excluido com sucesso!');
			</script>";
		}else{
			echo "<script>
			alert('Não foi possível excluir usuário!');
			</script>";
		}
	}
	
	$sql = "SELECT id, nome, email, cargo FROM usuarios";
	$result = $conn->query($sql);
?>
<?php
if(isset($_SESSION['nome_usu_sessao']) && 
			($_SESSION['cargo_usu_sessao']) === 'ADM'){
echo '
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Tela administrativa</title>
		<meta charset="utf-8" />
	</head>
<body>
	<h1>Lista de usuários</h1>
	<table border="1">
		<thead>
			<tr>
				<td>ID</td>
				<td>Nome</td>
				<td>Email</td>
				<td>Cargo</td>
				<td>Ação</td>
			</tr>
		</thead>
		<tbody>';
			
			if($result->num_rows > 0 ){
				while($row = $result->fetch_assoc()){
					echo "<tr>
							<form method='post'>
								<td>
								<input type='hidden' name='id' 
								value='".$row["id"]."'/>
								".$row["id"]."</td>
								<td>
								<input type='text' name='nome' 
								value='".$row["nome"]."'/>
								</td>
								<td>
								<input type='email' name='email' 
								value='".$row["email"]."'/>
								</td>
								<td>
								<input type='text' name='cargo' 
								value='".$row["cargo"]."'/>
								</td>
								<td>
								<button type='submit' name='edit_user'>
									Editar
								</button>
								<button type='submit' name='delete_user' 
								onclick='return confirm(\"Tem certeza 
								que deseja excluir este usuário?\")'>
									Excluir
								</button>
								</td>
							</form>					
						</tr>";
				}
			}else{
				echo "<tr>
					<td colspan='5'>
					Nenhum usuário encontrado!
					</td>
				</tr>";
			}
			$conn->close();
			echo '
		</tbody>	
	</table>
	<hr />
	<a href="../index.php">Voltar para tela inicial</a>
</body>	
</html>';
			}
?>