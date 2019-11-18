<?php

include "connect.php";

$alterar = $_POST['alterar'];
$update = $_POST['update'];
$id = $_POST['id'];

if ($alterar == 'nome') {
   $nome = $update;
    
    mysqli_query($link, "UPDATE tb_compra SET nome = '$nome' WHERE id = '$id'");

}

if ($alterar == 'nascimento') {
    $nascimento = $update;

    mysqli_query($link, "UPDATE tb_compra SET nascimento = '$nascimento' WHERE id = '$id'");

}

if ($alterar == 'email') {
    $email = $update;

    mysqli_query($link, "UPDATE tb_compra SET email = '$email' WHERE id = '$id'");

}

if ($alterar == 'senha'){
    $senha = $update;

    mysqli_query($link, "UPDATE tb_compra SET senha = '$senha' WHERE id = '$id'");

}

if ($alterar == 'endereco'){
    $endereco = $update;

    mysqli_query($link, "UPDATE tb_compra SET endereco = '$endereco' WHERE id = '$id'");

}

if ($alterar == 'num'){
    $num = $update;

    mysqli_query($link, "UPDATE tb_compra SET num = '$num' WHERE id = '$id'");

}

if ($alterar == 'complemento'){
    $complemento = $update;

    mysqli_query($link, "UPDATE tb_compra SET complemento = '$complemento' WHERE id = '$id'");

}

if ($alterar == 'cartao'){
    $cartao = $update;

    mysqli_query($link, "UPDATE tb_compra SET cartao = '$cartao' WHERE id = '$id'");

}

else {


    echo "O campo " . $alterar . " não existe!";  

}

header('location:listar.php');


