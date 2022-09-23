<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Venda.php';
include_once '../Persistence/VendaDAO.php';

if(!empty($_GET['id'])) {

    $id = $_GET['id'];

    $conexao = new Connection();
    $conexao = $conexao -> getConnection();

    $vendaDAO = new vendaDAO();
    $result = $vendaDAO->selecionarVendaPorId($id,$conexao);

    if($result->num_rows > 0) {
        $vendaDAO->deletarVenda($id,$conexao);
        header('Location: ../View/tabelaVendas.php');
    }
}
else {
    header('Location: ../View/tabelaVendas.php');
}
?>