<?php

include "connect.php";

$id = $_POST['deletar'];

mysqli_query($link, "DELETE FROM tb_compra WHERE id = '$id'");

header('location:listar.php');