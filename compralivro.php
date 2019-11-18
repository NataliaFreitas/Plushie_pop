<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Compra</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <link rel="icon" href="img/plushie_pop.png">
</head>

<body>

  <div class="container">
    <div class="container-fluid">
      <form action="insert.php" method="POST" class="formulario">
        <div class="col">
          <div class="col col-md-6">
            <input type="text" class="form-control" placeholder="Nome" name="nome">
          </div>
          <div class="col col-md-6">
            <input type="text" class="form-control" placeholder="Data de Nascimento" name="nascimento">
          </div>
          <div class="col col-md-6">
            <input type="email" class="form-control" placeholder="Email" name="email">
          </div>
          <div class="col col-md-6">
            <input type="password" class="form-control" placeholder="Senha" name="senha">
          </div>
          <div class="col col-md-6">
            <input type="text" class="form-control" placeholder="Endereço" name="endereco">
          </div>
          <div class="col col-md-2">
            <input type="text" class="form-control" placeholder="Nº" name="num">
          </div>
          <div class="col col-md-6">
            <input type="text" class="form-control" placeholder="Complemento" name="complemento">
          </div>
          <div>
            <div class="col col-md-6">
              <input type="text" class="form-control" placeholder="Cartão de Crédito" name="cartao">
            </div>
            <div class="col col-md-6">
              <input type="submit" value="Comprar" class="btn btn-warning btn-block">
              <a href="index.php"><input type="text" value="Cancelar" class="btn btn-secondary btn-block"></a>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>

</body>

</html>
