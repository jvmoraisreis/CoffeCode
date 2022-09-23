<?php
    include_once("../Persistence/Connection.php");
    include_once("../Persistence/ProdutoDAO.php");
    include_once("../Model/Produto.php");
    include_once("../Model/Cliente.php");
    include_once("../Persistence/ClienteDAO.php");
    include_once("../Persistence/VendaDAO.php");
    include_once("../Model/Venda.php");
    
    $conn = new Connection();
    $conn = $conn -> getConnection();

    $produtoDAO = new ProdutoDAO();
    $result = $produtoDAO -> selecionarProdutoPorNome($_POST['produto'],$conn);

    $dadosProduto = $result -> fetch_assoc();
    $qtdEmEstoque = $dadosProduto['QtdEmEstoque'];
    $valorProduto = $dadosProduto['Preco'];

    if($qtdEmEstoque >= $_POST['qtdVendida']){
        $clienteDAO = new ClienteDAO();
        $result = $clienteDAO -> selecionarClientePorEmail($_POST['cliente'],$conn);

        $dadosCliente = $result -> fetch_assoc();
        $qtdCompras = $dadosCliente['QtdCompras'];
        $qtdCompras += $_POST['qtdVendida'];

        $valor = $_POST['qtdVendida'] * ($valorProduto - $qtdCompras * 0.1);
        
        $venda = new Venda($_POST['cliente'], $_POST['produto'],$_POST['qtdVendida'], $valor);

        $vendaDAO = new VendaDAO;
        $vendaDAO -> salvarVenda($venda,$conn);

        $qtdEmEstoque = $qtdEmEstoque - $_POST['qtdVendida'];
        $produto = new Produto($dadosProduto['Nome'],$dadosProduto['Descricao'],$dadosProduto['Preco'],$qtdEmEstoque);
        $produtoDAO->editarProduto($produto,$conn);

        $cliente = new Cliente($dadosCliente['Nome'],$dadosCliente['Idade'],$dadosCliente['Email'],$qtdCompras);
        $clienteDAO -> editarCliente($cliente,$conn);

    } 
    else{
        echo "A quantidade solicitada não está em estoque";
        echo "<br>";
        echo "<a class='btn btn-primary' href='../index.html'>Voltar</a>";
    } 
?>