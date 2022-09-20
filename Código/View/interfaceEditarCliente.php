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
    <h1>Editar Cliente</h1> 
    <div class="form-group center">
        <form action="../Controller/editarCliente.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" required name="nome" value = <?php echo "$nome"; ?>> <br><br>
            <label for="idade">Idade:</label>
            <input type="number" required name = "idade" min="0" value = <?php echo "$idade"; ?>> <br><br>
            <label for="email">Email:</label>
            <input type="email" id="input-readonly" name = "email" value = <?php echo "$email"; ?> readonly> <br><br>
            <label for="qntdCompras">Quantidade de Compras:</label>
            <input type="number" required min="0" name = "qntdCompras" value = <?php echo "$qtdCompras"; ?>> <br><br>
            <input type="submit" name="update" id="update" value="Atualizar">
        </form>
    </div>
    <a class='btn' href="tabelaClientesView.php">Voltar</a>
</body>
</html>