<?php
if(isset($_GET['id'])){
    include_once("conexao.php");
    $id=$_GET['id'];
    $sql="DELETE FROM `pessoa` WHERE id = '$id'";
    if(mysqli_query($conn,$sql)){
        header("location: pesquisa.php");
    }
}
?>