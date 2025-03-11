<?php
$tabela = 'grupo_acessos';
require_once("../../../conexao.php");

$id = $_POST['id'];

$query2 = $pdo->query("SELECT * from acessos where grupo = '$id' ");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$total_acessos = @count($res2);
if($total_acessos > 0){
    echo 'Exclua primeiro os acessos que pertencem a este grupo!';
    exit();
}

$pdo->query("DELETE FROM  $tabela WHERE id = '$id'");
echo 'Excluído com Sucesso';
?>