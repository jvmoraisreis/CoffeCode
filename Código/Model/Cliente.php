<?php
    class Cliente {
        private $nome;
        private $idade;
        private $email;
        private $qntdCompras;

        //Construtor
        function __construct($nome, $idade, $email, $qntdCompras) {
            $this -> nome = $nome;
            $this -> idade = $idade;
            $this -> email = $email;
            $this -> qntdCompras = $qntdCompras;
            
        }
        // Getters
        public function getNome() {
            return $this -> nome;
        }

        public function getIdade() {
            return $this -> idade;
        }

        public function getEmail() {
            return $this -> email;
        }

        public function getQntdCompras() {
            return $this -> qntdCompras;
        }
    }
?>