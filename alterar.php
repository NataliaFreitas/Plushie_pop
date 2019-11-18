

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Alterar</title>
</head>
<body>
    <div class="container-fluid">
    <form action="update.php" method='POST' class='formulario'>
    <div class="col col-md-6">
       <input class="form-control" type="text" placeholder="O que deseja alterar?" name='alterar'>
        </div>
       <div class="col col-md-6">   
       <input class="form-control" type="text" placeholder="Insira a alteração aqui" name='update'>
       </div>
       <div class="col col-md-6">   
       <input class="form-control" type="text" placeholder="Insira a linha que deseja alterar" name='id'>
       </div>
       <div class="col col-md-6">
       <input class="btn btn-warning btn-block" type="submit" value='Alterar'>
       <input class="btn btn-secondary btn-block" href="index.php" type="submit" value="Cancelar">
       </div>
    </form>
    </div>
</body>
</html>
