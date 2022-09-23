<?php 
    $conexao = new Connection();
    $conexao = $conexao -> getConnection();

    $sqlProduto = "SELECT Nome FROM produto ORDER BY Nome ASC";
    $nomes = $conexao->query($sqlProduto);

    if($nomes -> num_rows > 0) {
        while($linha1 = $nomes -> fetch_assoc()) {
?>
            <option value="<?php echo $linha1['Nome'];?>"><?php echo $linha1['Nome']; ?></option>
<?php     
        }                   
    }
?>
