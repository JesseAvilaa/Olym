<?php
session_start();
include('verifica_login.php');
include("conexao.php");

$buyer_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$result_usuario = "DELETE FROM sales WHERE buyer_id='$buyer_id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_affected_rows($conexao)) {
  header("Location: painel.php");
}