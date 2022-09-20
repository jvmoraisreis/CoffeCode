<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Produto.php';
include_once '../Persistence/ProdutoDAO.php';

$nome = $_POST ['nome'];
$descricao = $_POST ['descricao'];
$preco = $_POST ['preco'];
$qntdEmEstoque = $_POST ['qntdEmEstoque'];

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$p = new Produto($nome, $descricao, $preco, $qntdEmEstoque);

$produtoDAO = new ProdutoDAO();
$produtoDAO -> salvarProduto($p, $conexao);

?>