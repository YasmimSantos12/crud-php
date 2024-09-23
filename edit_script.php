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
        <?php
        include_once("conexao.php");
        $nome=$_POST['nome'];
        $endereco=$_POST['endereco'];
        $telefone=$_POST['telefone'];
        $email=$_POST['email'];
        $dt_nascimento=$_POST['dt_nascimento'];
        $id=$_POST['id'];
        

        $sql="UPDATE `pessoa` SET `nome`='$nome',`endereco`='$endereco',
        `telefone`='$telefone',`email`='$email',`dt_nascimento`='$dt_nascimento' WHERE id = '$id'";
        
        if($resul=mysqli_query($conn,$sql)){
            header("location: pesquisa.php");
        }
        ?>
        <a href="index.php" class="btn btn-primary">Voltar para a página inicial</a>
      </div>
    </div>
  </div>


  <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>