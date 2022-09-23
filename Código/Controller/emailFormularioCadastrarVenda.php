<?php 
    include_once '../Persistence/Connection.php';
    $conn = new Connection();
    $conn = $conn -> getConnection();

    $sql = "SELECT Email FROM cliente ORDER BY Email ASC";
    $result = $conn->query($sql);

    if($result -> num_rows > 0) {
        while($linha = $result -> fetch_assoc()) {
?>
            <option value="<?php echo $linha['Email'];?>"><?php echo $linha['Email']; ?></option>
<?php     
        }                   
    }
?>
