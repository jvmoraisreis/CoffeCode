<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Cliente.php';
include_once '../Persistence/ClienteDAO.php';

if(!empty($_GET['email'])) {

    $email = $_GET['email'];

    $conexao = new Connection();
    $conexao = $conexao -> getConnection();

    $clienteDAO = new ClienteDAO();
    $result = $clienteDAO->selecionarClientePorEmail($email,$conexao);

    if($result->num_rows > 0) {
        $clienteDAO->deletarCliente($email,$conexao);
        header('Location: ../View/tabelaClientesView.php');
    }
}
else {
    header('Location: ../View/tabelaClientesView.php');
}
?>