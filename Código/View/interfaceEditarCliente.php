<?php
    include_once '../Controller/dadosFormularioEditarCliente.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Editar Cliente</title>
</head>
<style>
    #input-readonly{
        background-color: rgb(0, 0, 0,0.2);
    }
</style>
<body>
    <div class="container">
        <h1 class="display-4 text-muted">Editar Cliente</h1> 
        <div class="form-group center">
            <form action="../Controller/editarCliente.php" method="POST">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" required name="nome" value = <?php echo "$nome"; ?>> <br>
                <label for="idade">Idade:</label>
                <input class="form-control" type="number" required name = "idade" min="0" value = <?php echo "$idade"; ?>> <br>
                <label for="email">Email:</label>
                <input class="form-control" type="email" id="input-readonly" name = "email" value = <?php echo "$email"; ?> readonly> <br>
                <label for="qntdCompras">Quantidade de Compras:</label>
                <input class="form-control" type="number" required min="0" name = "qntdCompras" value = <?php echo "$qtdCompras"; ?>> <br>
                <input class="btn btn-success"type="submit" name="update" id="update" value="Atualizar"> <br><br>
            </form>
        </div>
        <a class='btn btn-primary' href="tabelaClientesView.php">Voltar</a>
    </div>
</body>
</html>