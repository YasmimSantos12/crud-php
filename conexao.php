<?php
define("SERVER", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "crud");

$conn = mysqli_connect(SERVER, USER, PASS, DB);


function moverFoto($vetor_foto)
{
    if (!$vetor_foto['error']) {
        $nome_arquivo = date('ymdhms') . '.jpg';    
        move_uploaded_file($vetor_foto['tmp_name'], 'imgs/' . $nome_arquivo);
        return $nome_arquivo;
    }
}

function mensagem($tipo, $texto)
{
    echo "
    <div class='alert alert-$tipo' role='alert'>
        $texto
</div>
    ";
}

function mudarData($data){
    $d=explode('-',$data);
    $escreve= $d[2].'/'.$d[1].'/'.$d[0];
    return $escreve;
}
?>
