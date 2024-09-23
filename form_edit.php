<?php
if(isset($_GET['id'])){
    require_once("conexao.php");
    $id=$_GET['id'];
    $sql="SELECT * FROM `pessoa` WHERE id = '$id'";
    $dados=mysqli_query($conn,$sql);
    $linha=mysqli_fetch_assoc($dados);
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Atualizar Dados</h1>
                <form action="edit_script.php" method="POST" >
                    <div class="mb-3">
                        <label class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" autofocus required value="<?php echo $linha['nome']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" required value="<?php echo $linha['endereco']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" required value="<?php echo $linha['telefone']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" required value="<?php echo $linha['email']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dt_nascimento" required value="<?php echo $linha['dt_nascimento']?>">
                    </div>
                    <div class="mb-3">
                        <input type="hidden" value="<?php echo $linha['id']?>" name="id">
                        <input type="submit" class="btn btn-success" value="Atualizar Dados">
                    </div>
                </form>
                <a href="pesquisa.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>