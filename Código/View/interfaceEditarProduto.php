<?php
    include_once '../Controller/dadosFormularioEditarProduto.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Editar Produto</title>
</head>
<style>
    #input-readonly{
        background-color: rgb(0, 0, 0,0.2);
    }
</style>
<body>
    <div class="container">
        <h1 class="display-4 text-muted">Editar Produto</h1> 
        <div class="form-group center">
            <form action="../Controller/editarProduto.php" method="POST">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" required name="nome" id="input-readonly" value = <?php echo "$nome"; ?> readonly> <br>
                <label for="descricao">Descrição:</label>
                <input class="form-control" type="text" required name = "descricao" value = <?php echo "$descricao"; ?>> <br>
                <label  for="preco">Preço:</label>
                <input class="form-control" type="number" step="0.01" name = "preco" min = "0" value = <?php echo "$preco"; ?>> <br>
                <input class="form-control" type="number" required min="0" name = "qntdEmEstoque" value = <?php echo "$qtdEmEstoque"; ?>> <br>
                <input class="btn btn-success"type="submit" name="update" id="update" value="Atualizar"> <br><br>
            </form>
        </div>
        <a class='btn btn-primary' href="tabelaProdutos.php">Voltar</a>
    </div>
</body>
</html>