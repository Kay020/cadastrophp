<?php
include 'conexao.php';
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Editar Cliente</title>

</head>

<body>
    <section>
        <div class="container tamanhoFormulario">
            <form action="atualizarCliente.php" method="POST">

                <?php
                $sql = " SELECT * FROM `cliente` WHERE idCliente = $id";

                $busca = mysqli_query($conexao, $sql);

                while ($array        = mysqli_fetch_array($busca)) {
                    $idCliente       = $array['idCliente'];
                    $nomeCliente     = $array['nomeCliente'];
                    $telCliente      = $array['telCliente'];
                    $genCliente      = $array['genCliente'];
                    $emailCliente    = $array['emailCliente'];
                    $endCliente      = $array['endCliente'];
                    $cpfCliente      = $array['cpfCliente'];


                ?>

                    <h3 style="text-align: center;">Edição de Clientes</h3>
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" class="form-control" name="nomeCliente" value="<?php echo $nomeCliente ?>">

                        <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">


                    </div>
                    <div class="form-group">
                        <label>telefone:</label>
                        <input type="text" class="form-control" name="telCliente" value="<?php echo $telCliente ?>">
                    </div>
                    <div class="form-group">
                        <label>Genêro:</label>
                        <select class="form-control" name="genCliente">
                            <option>Feminino</option>
                            <option>Masculino</option>
                            <option>Outros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" name="emailCliente" value="<?php echo $emailCliente ?>">
                    </div>
                    <div class="form-group">
                        <label>Endereço:</label>
                        <input type="text" class="form-control" name="endCliente" value="<?php echo $endCliente ?>">
                    </div>     
                    <div class="form-group">
                        <label>Cpf:</label>
                        <input type="text" class="form-control" name="cpfCliente" value="<?php echo $cpfCliente ?>">
                    </div>
                    <div class="botao">
                        <button type="submit" class="btn btn-info">Atualizar</button>
                    </div>
                <?php } ?>
            </form>
        </div>
    </section>
</body>

</html>