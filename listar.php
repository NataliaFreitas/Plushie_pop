<?php

include "connect.php";

$sql = mysqli_query($link,"SELECT * FROM tb_compra");

echo "<table border='1' style='background-color:white'>

<tr>

<th>Nome</th>
<th>Data de Nascimento</th>
<th>Email</th>
<th>Senha</th>
<th>Endereço</th>
<th>Número</th>
<th>Complemento</th>
<th>Cartão de Crédito</th>
<th>Ações</th>

</tr>\n";

echo "<button style='border-radius: 10px'><a href=".'compralivro.php'.">Adicionar</a></button>";

while($vetor = mysqli_fetch_array($sql)){
   
echo "<tr>\n";

echo "<td>".$nome = $vetor['nome']."</td>\n";
echo "<td>".$nascimento = $vetor['nascimento']."</td>\n";
echo "<td>".$email = $vetor['email']."</td>\n";
echo "<td>".$senha = $vetor['senha']."</td>\n";
echo "<td>".$endereco = $vetor['endereco']."</td>\n";
echo "<td>".$num = $vetor['num']."</td>\n";
echo "<td>".$complemento = $vetor['complemento']."</td>\n";
echo "<td>".$cartao = $vetor['cartao']."</td>\n";
echo "<td>"."<button style='border-radius: 10px'><a href=".'alterar.php'.">Alterar</a></button>"."<button style='border-radius: 10px'><a href=".'deletar.php'."> Excluir</a></button>"."</td>\n";

echo "</tr>\n";

}

echo "</table>\n";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <title>Lista</title>
</head>
<body style="background-color:violet">

</body>
</html>