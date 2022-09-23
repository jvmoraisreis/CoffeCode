<?php
    class Venda {
        private $id;
        private $emailCliente;
        private $nomeProduto;
        private $qntdVendida;
        private $valor;

        function  __construct ($emailCliente, $nomeProduto, $qntdVendida, $valor) {
            $this -> emailCliente = $emailCliente;
            $this -> nomeProduto = $nomeProduto;
            $this -> qntdVendida = $qntdVendida;
            $this -> valor = $valor;
        }

        public function getEmail() {
            return $this -> emailCliente;
        }

        public function getNomeProduto() {
            return $this -> nomeProduto;
        }

        public function getQntd() {
            return $this -> qntdVendida;
        }

        public function getValor() {
            return $this -> valor;
        }
    }
?>
