<?php
    include_once '../Persistence/Connection.php';
    include_once '../Model/Cliente.php';
    include_once '../Persistence/ClienteDAO.php';

    if(isset($_POST['update'])) {
        $nome = $_POST ['nome'];
        $idade = $_POST ['idade'];
        $email = $_POST ['email'];
        $qntdCompras = $_POST ['qntdCompras'];

        $c = new Cliente($nome, $idade, $email, $qntdCompras);

        $conexao = new Connection();
        $conexao = $conexao -> getConnection();

        $clienteDAO = new ClienteDAO();
        $clienteDAO->editarCliente($c,$conexao);
    }
?>