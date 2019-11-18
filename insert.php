<?php

include "connect.php";

$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$num = $_POST['num'];
$complemento = $_POST['complemento'];
$cartao = $_POST['cartao'];

mysqli_query($link,"INSERT INTO tb_compra(nome,nascimento,email,senha,endereco,num,complemento,cartao) 
VALUES ('$nome','$nascimento','$email','$senha','$endereco','$num','$complemento','$cartao')");

header('location:listar.php');
