<?php
    class Connection{
        private $serverName = "localhost";
        private $userName = "root";
        private $password = "";
        private $bd = "coffecode_bd";
        private $conn = null;
        
        function __construct() {}
        
        function getConnection() {
            if($this -> conn == null) {
                $this -> conn = mysqli_connect($this -> serverName, $this -> userName, $this -> password, $this -> bd);
            }
            if(!$this -> conn) {
                die("Conexão falhou: ");
            }
            return $this -> conn;
        }
    }
?>