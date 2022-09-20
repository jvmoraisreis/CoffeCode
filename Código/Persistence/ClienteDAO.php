<?php
    class ClienteDAO { 
        function __construct() {}

        function salvarCliente($cliente, $conn) {
            $sql = "INSERT INTO cliente(Nome, Idade, Email, QtdCompras) VALUES ('".$cliente->getNome()."', ".$cliente->getIdade().",'".$cliente->getEmail()."',".$cliente->getQntdCompras().")";
            

            if ($conn -> query($sql) == TRUE) {
                header('Location:../View/tabelaClientesView.php');
            }
            else {
                echo "Erro no Cadastramento: <br>" . $conn -> error;
                echo "<br><a class='btn-primary' href='../View/tabelaClientesView.php'> Voltar </a>";
            }
        }

        function consultarClientes($conn) {
            $sql = "SELECT * FROM cliente";
            $result = $conn->query($sql);
            return $result;
        }

        function selecionarClientePorEmail($email, $conn) {
            $sql = "SELECT * FROM cliente WHERE Email = '$email'";
            $result = $conn->query($sql);
            return $result;
        }

        function editarCliente($cliente, $conn) {
            $sql = "UPDATE cliente SET Nome = '".$cliente->getNome()."', Idade = '".$cliente->getIdade()."', Email = '".$cliente->getEmail()."', QtdCompras = '".$cliente->getQntdCompras()."' WHERE Email = '".$cliente->getEmail()."'";

            $result = $conn->query($sql);
            header('Location: ../View/tabelaClientesView.php');
        }

        function deletarCliente($email, $conn) {
            $sql = "DELETE FROM cliente WHERE Email = '$email'";
            $conn->query($sql);
        }
    }
?>