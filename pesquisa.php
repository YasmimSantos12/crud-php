<?php
include_once("conexao.php");
if(isset($_POST['buscando'])){
    $pesquisa=$_POST['buscando'];
}else{
    $pesquisa="";
}
$sql="SELECT * FROM `pessoa` WHERE nome LIKE '%$pesquisa%'";
$dados=mysqli_query($conn,$sql);
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="buscando">
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($dados)>0){
                            foreach($dados as $usu){
                                $foto=$usu['foto'];
                                $nome=$usu['nome'];
                                $endereco=$usu['endereco'];
                                $telefone=$usu['telefone'];
                                $email=$usu['email'];
                                $dt_nascimento=$usu['dt_nascimento'];
                                $dt_nascimento=mudarData($dt_nascimento);
                                $id=$usu['id'];

                                echo "
                                <tr>
                            <th scope='row'><img src='imgs/$foto' class='foto'></th>
                            <td>$nome</td>
                            <td>$endereco</td>
                            <td>$telefone</td>
                            <td>$email</td>
                            <td>$dt_nascimento</td>
                            <td>
                            <a href='form_edit.php?id=$id' class='btn btn-warning'>Editar</a>
                            <a href='verifica.php?id=$id' class='btn btn-danger'>Excluir</a>
                            </td>
                            </tr>
                                ";
                            }
                        }
                        ?>
                        
                    </tbody>
                </table>

                <a href="index.php" class="btn btn-primary">Voltar para a página inicial</a>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>