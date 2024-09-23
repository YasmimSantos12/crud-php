<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    echo "<script language='javascript'>
    if(confirm('Deseja Realmente Excluir?')){
        window.location.href='excluir_script.php?id=$id';
    }else{
        window.location.href='pesquisa.php';
    }
    </script>";
}
?>