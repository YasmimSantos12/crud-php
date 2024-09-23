<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include "conexao.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Novo Cadastro</h1>
                <form action="cadastro_script.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dt_nascimento" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto Usuário</label>
                        <input type="file" class="form-control" name="foto" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Cadastrar">
                    </div>
                </form>
                <a href="index.php" class="btn btn-primary">Voltar para a página inicial</a>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>