<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Listagem de Clientes</title>
</head>

<body>
    <div class="container">
        <h3 style="text-align:center;">Listagem de Clientes</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Genêro</th>
                    <th scope="col">Email</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">Ação</th>

                </tr>
            </thead>

            <?php

            include 'conexao.php';
            $sql = "SELECT * FROM `cliente`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)){
                $idCliente      = $array['idCliente'];
                $nomeCliente    = $array['nomeCliente'];
                $telCliente     = $array['telCliente'];
                $genCliente     = $array['genCliente'];
                $emailCliente   = $array['emailCliente'];
                $endCliente     = $array['endCliente'];
                $cpfCliente     = $array['cpfCliente'];

            ?>
            <tr>
                <td><?php echo $nomeCliente ?></td>
                <td><?php echo $telCliente?></td>
                <td><?php echo $genCliente ?></td>
                <td><?php echo $emailCliente ?></td>
                <td><?php echo $endCliente ?></td>
                <td><?php echo $cpfCliente ?></td>

                <td>
                <a style="text-decoration:none;" 
                href="editarClientes.php?id=<?php echo $idCliente ?>"><button type="button" class="btn btn-outline-info">Editar</button></a>

                <a style="text-decoration:none;" 
                href="deletarCliente.php?id=<?php echo $idCliente ?>"><button type="button" class="btn btn-outline-danger">Excluir</button></a>
            </td>
            </tr>
            <?php } ?>




        </table>
    </div>
</body>

</html>