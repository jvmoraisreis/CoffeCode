<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Cadastrar Venda </title>
</head>
<body>
    <div class="container"> 
        <h2 class="display-4 text-muted">Nova Venda</h2>  
        <form class="form-group" action="../Controller/cadastrarVenda.php" method="POST">

            <label for="qtdVendida">Quantidade:</label>
            <input class="form-control" type="number" name ="qtdVendida" min=1 required> <br>

            <select class="form-control" name="cliente" required>
                <option  value="">Selecione o email do cliente</option>
                <?php require("../Controller/emailFormularioCadastrarVenda.php")?>
            </select> <br>

            <select class="form-control" name="produto" required>
                <option value="">Selecione o nome do Produto</option>
                <?php require("../Controller/nomeProdutoFormularioCadastrarVenda.php"); ?> <br><br>                
            </select> <br>

            <input class="btn btn-success" type="submit" value="Enviar"> <br><br>

        </form>

        <a class="btn btn-primary" href="../index.html">Voltar</a>

    </div>
</body>
</html>
