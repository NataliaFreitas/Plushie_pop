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
<a class="btn_close"><i class="fa fa-times"></i></a>
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

<div class="livros row">
<div class="livraria">
		<a href="compralivro.php"><img src="img/livro1.jpg" alt="Um livro" class="produto1"></a>
	</div>
<div class="livraria">
		<a href="compralivro.php"><img src="img/livro2.jpg" alt="Um livro" class="produto2"></a>
</div>
<div class="livraria">
		<a href="compralivro.php"><img src="img/livro3.jpg" alt="Um livro" class="produto3"></a>
</div>
</div>


<div class="row rodape">
<a href="https://github.com/NataliaFreitas/Plushie_pop"><button><i class="fa fa-github-alt" aria-hidden="true"></i> GitHub</button></a>
    <footer class="contato">
        <h1>Contato</h1>
        <h3>Rua: Antonio José Gonçalves Filho, Bairro Antártica, 748 </h3>
        <h3>Tel: (11) 3224-2113</h3>
        <h3>Email: plushiepop@gmail.com</h>
    </footer>     
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