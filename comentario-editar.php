<?php
require_once "Classes/Comentario.php";
$comentario = new Comentario();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novos Comentários</title>
    <link rel="stylesheet" href="Estilos/adm.css">
    <link rel="shortcut icon" type="imagex/png" href="Imagens/icone.ico">

</head>

<body>

    <div class="sidebar">
        <div class="admin-section">
            <h2>Portal do Administrador</h2>
        </div>
        <hr>
        <div class="suggestions-section">
            <h2><a href="adm.php">Comentários em Aguardo</a><br></h2>
        </div>
        <hr>
        <div class="suggestions-section">
            <h2><a href="aprovados.php">Comentários Aprovados</a><br><br></h2>
        </div>
        <hr>
        <div class="suggestions-section">
            <h2><a href="index.php">Sair</a><br><br></h2>
        </div>
    </div>

    <div class="main-content">
        <div class="header">
            Atualizar Comentário
        </div>

        <form action="comentario-editar-gravar.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $comentario->nome ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $comentario->email ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Comentário:</label>
                <textarea type="text" class="form-control" id="comentario" name="comentario" rows="6"
                    value="<?= $comentario->comentario ?>"></textarea>
            </div>
            <input type="submit" value="Atualizar" id="atualizar">
        </form>

    </div>
</body>

</html>