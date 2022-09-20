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
    <h1>Editar Produto</h1> 
    <div class="form-group center">
        <form action="../Controller/editarProduto.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" required name="nome" id="input-readonly" value = <?php echo "$nome"; ?> readonly> <br><br>
            <label for="descricao">Descrição:</label>
            <input type="text" required name = "descricao" value = <?php echo "$descricao"; ?>> <br><br>
            <label for="preco">Preço:</label>
            <input type="number" step="0.01" name = "preco" min = "0" value = <?php echo "$preco"; ?>> <br><br>
            <label for="qntdEmEstoque">Quantidade em Estoque:</label>
            <input type="number" required min="0" name = "qntdEmEstoque" value = <?php echo "$qtdEmEstoque"; ?>> <br><br>
            <input type="submit" name="update" id="update" value="Atualizar">
        </form>
    </div>
    <a class='btn' href="tabelaProdutos.php">Voltar</a>
</body>
</html>