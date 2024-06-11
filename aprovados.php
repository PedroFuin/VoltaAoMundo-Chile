<?php
require_once "classes/comentario.php";
$comentario = new Comentario();
$aprovados = $comentario->listarComentariosAprovados();
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
            Comentários Aprovados
        </div>

        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Comentário</th>
                <th id="acoes">Ações</th>
            </tr>
            <?php foreach ($aprovados as $linha): ?>
                <tr>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['email'] ?></td>
                    <td><?php echo $linha['comentario'] ?></td>
                    <td>
                        <button class="botaoatualizar"><a
                                href="comentario-editar.php?id=<?= $linha['id'] ?>">Atualizar</a></button>
                        <button class="botao"><a href="comentario-excluir.php?id=<?= $linha['id'] ?>">Excluir</a></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>