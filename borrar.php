<?php
include("conection.php");?>

<?php
    
    $ID = (isset($_POST['IDDEL']))?$_POST['IDDEL']:"";

    if(isset($_POST['BtnDel'])){
        
        // $sql = "DELETE * FROM tb_ataques WHERE ID = " . $ID;
        $sql = "delete from $tb_ataques where ID = '$ID'"; 
        // "SELECT * FROM tb_ataques WHERE ID = " . $ID;

        $result = mysqli_query($conn, $sql);
    }
?>