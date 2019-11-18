<?php
session_start();

include 'livros.php';

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="icon" href="img/plushie_pop.png">
    <title>Produtos</title>
</head>

<body>

<div class="container-fluid">
<div class="topo row">
<h1 class="logo">Plushie Pop</h1>
<button class="btn_menu"><i class="fa fa-bars fa-lg"></i></button>
<nav class="menu">
<a class="btn_close"><i class="fa fa-times">X</i></a>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="produtos.php">Livros</a></li>
        <li><a href="quemsomos.php">Sobre</a></li>
    </ul>
</nav>
</div>

<div class="banner">
        
    <h2 class="title"> Diversos livros para você escolher! </h2>
    
</div>

<div>

    <div class="produtos">
    <h1>Lista de Produtos</h1>
        <div class="item">
            <p>Zeca no Dia do Brinquedo</p>
            <p><a href="compralivro.php"><img src="img/livro1.jpg" alt="Primeiro livro"></a></p>
            <p>R$ 14,99</p>
        </div>
        <div class="item">
            <p>Dot</p>
            <p><a href="compralivro.php"><img src="img/livro2.jpg" alt="Segundo livro"></a></p>
            <p>R$ 52,00</p>
        </div>
        <div class="item">
            <p>O Pequeno Príncipe</p>
            <p><a href="compralivro.php"><img src="img/livro3.jpg" alt="Terceiro livro"></a></p>
            <p>R$ 24,90</p>
        </div>
        <div class="item">
            <p>O Coelho Caco</p>
            <p><a href="compralivro.php"><img src="img/livro4.jpg" alt="Quarto livro"></a></p>
            <p>R$ 15,92</p>
        </div>
        <div class="item">
            <p>A menina bonita do laço de fita</p>
            <p><a href="compralivro.php"><img src="img/livro5.jpg" alt="Quinto livro"></a></p>
            <p>R$ 32,90</p>
        </div>
    </div>
   
    <div class="row rodape">
    <footer class="contato">
        <h1>Contato</h1>
        <h3>Rua: Antonio José Gonçalves Filho, Bairro Antártica, 748 </h3>
        <h3>Tel: (11) 3224-2113</h3>
        <h3>Email: plushiepop@gmail.com</h3>
    </footer>        
</div>

</div>    

</div>

        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

<script>

$(".btn_menu").click(function(){

$(".menu").show();

})

$(".btn_close").click(function(){

$(".menu").hide();

})

</script>

</body>
</html>