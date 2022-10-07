<?php

include 'conexao.php';
echo $id = $_POST["id"];

$numeroProduto  = $_POST['numeroProduto'];
$nomeProduto    = $_POST['nomeProduto'];
$quantProduto   = $_POST['quantProduto'];
$catProduto     = $_POST['catProduto'];
$forProduto     = $_POST['forProduto'];


$sql = "UPDATE `produtos` SET `numeroProduto`= $numeroProduto,`nomeProduto`='$nomeProduto',`quantProduto`=$quantProduto,`catProduto`='$catProduto',`forProduto`= '$forProduto' WHERE idProduto = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<div class="container" style="width: 300px; text-align: center; margin: auto; margin-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Produto Atualizado com sucesso!</h4>

    <div>
        <a href="listarProduto.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>