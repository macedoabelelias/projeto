<?php
$tabela = 'usuarios';
require_once("../../../conexao.php");

$query = $pdo->query("SELECT * from usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
echo <<<HTML
<small>
    <table class="table table-hover" id="tabela">
    <thead> 
        <tr> 
            <th>Nome</th>	
            <th class="esc">Telefone</th>	
            <th class="esc">Email</th>	
            <th class="esc">Nível</th>	
            <th>Ações</th>
        </tr> 
    </thead> 
    <tbody>	
HTML;
}
for($i=0; $i < $total_reg; $i++){	
    $id = $res[$i]['id'];
    $nome = $res[$i]['nome'];
    $telefone = $res[$i]['telefone'];
    $email = $res[$i]['email'];
    $senha = $res[$i]['senha'];
    $foto = $res[$i]['foto'];
    $nivel = $res[$i]['nivel'];       
    $endereco = $res[$i]['endereco'];
    $ativo = $res[$i]['ativo'];  
    $data = $res[$i]['data'];     
    
    $dataF = implode('/', array_reverse(explode('-', $data)));

echo <<<HTML
<tr>
    <td>{$nome}</td>
    <td>{$telefone}</td>
    <td>{$email}</td>
    <td>{$nivel}</td>
    <td></td>
</tr>
HTML;
}

echo <<<HTML
</tbody>
</table>
HTML;
?>