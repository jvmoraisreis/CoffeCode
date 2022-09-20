<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tabela Consultar Produto</title>
</head>
<body>
    <center><h1>Tabela de Consulta de Produtos</h1></center>

    <div class="m-5">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade em Estoque</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                    require('../Controller/consultarProduto.php');
                ?>
            </tbody>
        </table>
    </div>
    <center><a class="btn btn-primary"href="/View/tabelaProdutos.php">Voltar</a></center><br>

</body>
</html> 