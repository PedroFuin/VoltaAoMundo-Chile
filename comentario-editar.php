<?php
require_once "classes/comentario.php";
$comentario = new Comentario();
$aprovados = $comentario->listarComentariosAprovados();
$lista = $comentario->listarComentarios();
?>

<!DOCTYPE html>
<html lang="en">

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

        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Comentário</th>
                <th id="acoes">Ações</th>
            </tr>
        </table>

        <form action="comentario-editar-gravar.php" method="POST">
            <input type="hidden" name="id" value="<?= $comentario->id ?>">
            <input type="text" id="nome" name="nome" value="<?=$comentario->nome?>">
            <input type="text" id="email" name="email" value="<?=$comentario->email?>">
            <input type="text" id="comentario" name="comentario" value="<?= $comentario->comentario?>">


            <input type="submit" value="Atualizar" id="atualizar">
        </form>

    </div>
</body>

</html>