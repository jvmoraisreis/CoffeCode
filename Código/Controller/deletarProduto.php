<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Produto.php';
include_once '../Persistence/ProdutoDAO.php';

if(!empty($_GET['nome'])) {

    $nome = $_GET['nome'];

    $conexao = new Connection();
    $conexao = $conexao -> getConnection();

    $produtoDAO = new ProdutoDAO();
    $result = $produtoDAO->selecionarProdutoPorNome($nome,$conexao);

    if($result->num_rows > 0) {
        $produtoDAO->deletarProduto($nome,$conexao);
        header('Location: ../View/tabelaProdutos.php');
    }
}
else {
    header('Location: ../View/tabelaProdutos.php');
}
?>