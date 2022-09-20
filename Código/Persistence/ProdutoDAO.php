<?php
    class ProdutoDAO { 
        function __construct() {}

        function salvarProduto($produto, $conn) {
            $sql = "INSERT INTO produto(Nome, Descricao, Preco, QtdEmEstoque) VALUES ('".$produto->getNome()."', '".$produto->getDescricao()."',".$produto->getPreco().",".$produto->getQntdEmEstoque().")";
            

            if ($conn -> query($sql) == TRUE) {
                header('Location:../View/tabelaProdutos.php');
            }
            else {
                echo "Erro no Cadastramento: <br>" . $conn -> error;
            }
        }

        function consultarProdutos($conn) {
            $sql = "SELECT * FROM produto";
            $result = $conn->query($sql);
            return $result;
        }

        function selecionarProdutoPorNome($nome, $conn) {
            $sql = "SELECT * FROM produto WHERE Nome = '$nome'";
            $result = $conn->query($sql);
            return $result;
        }

        function editarProduto($produto, $conn) {
            $sql = "UPDATE produto SET Nome = '".$produto->getNome()."', Descricao = '".$produto->getDescricao()."', Preco = '".$produto->getPreco()."', QtdEmEstoque = '".$produto->getQntdEmEstoque()."' WHERE Nome = '".$produto->getNome()."'";

            $result = $conn->query($sql);
            header('Location: ../View/tabelaProdutos.php');
        }

        function deletarProduto($nome, $conn) {
            $sql = "DELETE FROM produto WHERE Nome = '$nome'";
            $conn->query($sql);
        }
    }
?>