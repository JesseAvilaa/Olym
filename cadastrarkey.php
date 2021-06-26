<?php
session_start();
include("conexao.php");

$product = mysqli_real_escape_string($conexao, trim($_POST['product']));
$ip = mysqli_real_escape_string($conexao, trim($_POST['ip']));
$license_key = mysqli_real_escape_string($conexao, trim(md5($_POST['license_key'])));
$buyer_id = mysqli_real_escape_string($conexao, trim($_POST['buyer_id']));

$sql = "select count(*) as total from sales where license_key = '$license_key'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['key_existe'] = true;
	header('Location: cadastrokey.php');
	exit;
}

$sql = "INSERT INTO sales (product, ip, license_key, buyer_id, data_cadastro) VALUES ('$product', '$ip', '$license_key', '$buyer_id', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastrokey'] = true;
}

$conexao->close();

header('Location: cadastrokey.php');
exit;
?>