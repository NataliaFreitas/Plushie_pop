<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plushie Pop - Loja de Livros Infantis</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="icon" href="img/plushie_pop.png">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


<div class="container-fluid">
<div class="topo row">
<h1 class="logo">Plushie Pop</h1>
<button class="btn_menu"><i class="fa fa-bars fa-lg"></i></button>
<nav class="menu">
<a class="btn_close"><i class="fa fa-times fa-lg">X</i></a>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="produtos.php">Livros</a></li>
        <li><a href="quemsomos.php">Sobre</a></li>
    </ul>
</nav>
</div>

<div class="sobre">
    <div class="bloco">
    <h3>Sobre a Plushie Pop</h3>
    <h3>A Plushie Pop, fundada em 1998, é uma empresa especializada na venda
        de livros infantis
    </h3><br>
    <img src="img/plushie_pop.PNG" alt="Logo Plushie Pop">
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