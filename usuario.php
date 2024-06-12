<?php
require_once "classes/comentario.php";
$comentario = new Comentario();
$lista = $comentario->listarComentariosUsuario();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suas Sugestões</title>
    <link rel="stylesheet" href="Estilos/usuario.css">
    <link rel="shortcut icon" type="imagex/png" href="Imagens/icone.ico">
</head>

<body>
    <!--Conteúdo-->
    <div class="sidebar">

        <div class="admin-section">
            <h2>Portal do Usuário</h2>
        </div>
        <hr>
        <div class="suggestions-section">
            <h2><a href="usuario.php">Seus Comentários</a><br></h2>
            <hr>
            <h2><a href="comentario-inserir.php">Faça um Comentário</a><br><br></h2>
            <hr>
            <h2><a href="index.php">Sair</a></h2>
        </div>
    </div>

    <div class="main-content">
        <div class="header">
            Seus Comentários
        </div>

        <table border="1">
            <tr>
                <th>Comentário</th>
                <th id="acoes">Ações</th>
            </tr>

            <?php foreach ($lista as $linha): ?>
                <tr>
                    <td><?php echo $linha['comentario'] ?></td>
                    <td>
                        <button class="botao"><a href="usuario-editar.php?id=<?= $linha['id'] ?>">Atualizar</a></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>