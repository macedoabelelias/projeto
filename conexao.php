

<?php
//definir fuso horario
date_default_timezone_set('America/Sao_Paulo');

// conexao banco de dados local
    $servidor = 'localhost';
    $banco = 'projeto';
    $usuario = 'root';
    $senha = '';

    try{
        $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
    }catch(Exception $e){
        echo 'Erro ao conectar ao banco de dados!<br>';
        // echo '<br>';
        echo $e;
    }

    // //variáveis globais
    // $nome_sistema = 'AM Systems';
    // $email_sistema = 'contato@amsystems.com.br';
    
?>