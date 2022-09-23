<?php
    class VendaDAO { 
        function __construct() {}

        function salvarVenda($venda, $conn) {
            $sql = "INSERT INTO venda (EmailCliente, NomeProduto, QntdVendida, Valor) VALUES ('".$venda->getEmail()."', '".$venda->getNomeProduto()."',".$venda->getQntd().",".$venda->getValor().")";
            

            if ($conn -> query($sql) == TRUE) {
                header('Location:../View/tabelaVendas.php');
            }
            else {
                echo "Erro no Cadastramento: <br>" . $conn -> error;
                echo "<br><a class='btn-primary' href='../View/tabelavendasView.php'> Voltar </a>";
            }
        }

        function consultarVendas($conn) {
            $sql = "SELECT * FROM venda";
            $result = $conn->query($sql);
            return $result;
        }
    

        function selecionarVendaPorId($id, $conn) {
            $sql = "SELECT * FROM venda WHERE Id = '$id'";
            $result = $conn->query($sql);
            return $result;
        }
        
        function deletarVenda($id, $conn) {
            $sql = "DELETE FROM venda WHERE Id = '$id'";
            $conn->query($sql);
        }
    }

?>


