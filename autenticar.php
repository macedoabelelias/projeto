<?php
@session_start();
require_once("conexao.php"); //faz a conexão
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * from usuarios where email = '$usuario' and senha = '$senha'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($res);
echo $linhas;
?>