<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tabela Clientes</title>
</head>
<style>
    .table-bg {
        background-color: rgb(0, 0, 0,0.2);
        border-radius: 10px;
    }
</style>
<body>
    <center><h1 class="display-4 text-muted">Tabela Clientes</h1></center>

    <div class="m-5">
        <table class="table table-hover table-bg">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Email</th>
                <th scope="col">Quantidade de Compras</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    require('../Controller/consultarTodosClientes.php');
                ?>
            </tbody>
        </table>
    </div>
    <center><a class="btn btn-primary"href="/View/interfaceCadastrarCliente.html">Cadastrar Cliente</a></center><br>
    <center><a class="btn btn-primary"href="/View/interfaceConsultarCliente.html">Consultar Cliente</a></center><br>
    <center><a class="btn btn-primary"href="../index.html">Voltar</a></center>
</body>
</html>
