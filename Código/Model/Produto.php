<?php
    class Produto {
        private $nome;
        private $descricao;
        private $preco;
        private $qntdEmEstoque;

        //Construtor
        function __construct($nome, $descricao, $preco, $qntdEmEstoque) {
            $this -> nome = $nome;
            $this -> descricao = $descricao;
            $this -> preco = $preco;
            $this -> qntdEmEstoque = $qntdEmEstoque;
            
        }

        // Getters
        public function getNome() {
            return $this -> nome;
        }

        public function getDescricao() {
            return $this -> descricao;
        }

        public function getPreco() {
            return $this -> preco;
        }

        public function getQntdEmEstoque() {
            return $this -> qntdEmEstoque;
        }
    }
?>