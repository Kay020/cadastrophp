<?php

include 'conexao.php';

$numeroProduto  = $_POST['numeroProduto'];
$nomeProduto    = $_POST['nomeProduto'];
$quantProduto   = $_POST['quantProduto'];
$catProduto     = $_POST['catProduto'];
$forProduto     = $_POST['forProduto'];

$sql = "INSERT INTO `produtos`(`numeroProduto`, `nomeProduto`, `quantProduto`, `catProduto`, `forProduto`) 
VALUES ($numeroProduto,'$nomeProduto',$quantProduto,'$catProduto','$forProduto')";

$inserir = mysqli_query($conexao, $sql);

?>


<div class="container" style="width: 300px; text-align: center; margin: auto; margin-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Produto Cadastrado com Sucesso!</h4>

    <div>
        <a href="index.php" role="button" class="btn btn-sm btn-secondary">Cadastrar novo Item</a>
    </div>
</div>