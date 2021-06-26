<?php
session_start();
include('verifica_login.php');
include("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$result_usuario = "SELECT * FROM sales WHERE buyer_id = '$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Olym - Editar</title>		
	</head>
	<body>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['buyer_id']; ?>">
			
			<label>IP: </label>
			<input type="text" name="ip" placeholder="Digite o novo IP" value="<?php echo $row_usuario['ip']; ?>"><br><br>
			
			<input type="submit" value="Editar">
		</form>
	</body>
</html>