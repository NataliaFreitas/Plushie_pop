<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delete</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <link rel="icon" href="img/plushie_pop.png">
</head>

<body>

  <div class="container">
    <div class="container-fluid">
      <form action="delete.php" method="POST" class="formulario">
        <div class="col">
          <div class="col col-md-6">
            <input type="number" class="form-control" placeholder="Qual linha deseja excluir?" name="deletar">
          </div>
            <div class="col col-md-6">
              <input type="submit" value="Excluir" class="btn btn-warning btn-block">
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>

</body>

</html>