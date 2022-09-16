<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1> 
    <div class="form-group center">
        <form action="../Controller/cadastrarCliente.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" required name="nome"> <br><br>
            <label for="idade">Idade:</label>
            <input type="number" required name = "idade" min="0"> <br><br>
            <label for="email">Email:</label>
            <input type="email" required name = "email" > <br><br>
            <label for="qntdCompras">Quantidade de Compras:</label>
            <input type="number" required min="0" name = "qntdCompras"> <br><br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </form>
    </div>
    <a class='btn' href="tabelaClientesView.php">Voltar</a>
</body>
</html>