<?php
    class ClienteDAO { 
        function __construct() {}

        function salvarCliente($cliente, $conn) {
            $sql = "INSERT INTO cliente(Nome, Idade, Email, QtdCompras) VALUES ('".$cliente->getNome()."', ".$cliente->getIdade().",'".$cliente->getEmail()."',".$cliente->getQntdCompras().")";
            

            if ($conn -> query($sql) == TRUE) {
                echo "Cliente Salvo";
            }
            else {
                echo "Erro no Cadastramento: <br>" . $conn -> error;
            }
        }

        function consultarClientes($conn) {
            $sql = "SELECT * FROM cliente";
            $result = $conn->query($sql);
            return $result;
        }
    }
?>