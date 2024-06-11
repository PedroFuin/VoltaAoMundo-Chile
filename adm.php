<?php
require_once "classes/comentario.php";
$comentario = new Comentario();
$lista = $comentario->listarComentarios();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novas Sugestões</title>
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
            <h2><a href="perguntas-inserir.php">Nova Pergunta</a><br></h2>
        </div>
        <hr>
        <div class="suggestions-section">
            <h2><a href="adm.php">Perguntas em Aguardo</a><br></h2>
        </div>
        <hr>
        <div class="suggestions-section">
            <h2><a href="perguntas-aprovadas.php">Perguntas Aprovadas</a><br><br></h2>
        </div>
        <hr>
        <div class="suggestions-section">
            <h2><a href="index.php">Sair</a><br><br></h2>
        </div>
    </div>

    <div class="main-content">
        <div class="header">
            Novas Sugestões
        </div>

        <table border="1">
            <tr>
                <th>Pergunta</th>
                <th>Resposta</th>
                <th id="cat">Categoria</th>
                <th id="acoes">Ações</th>
            </tr>
            <?php foreach ($lista as $linha): ?>
                <tr>
                    <td><?php echo $linha['pergunta'] ?></td>
                    <td><?php echo $linha['resposta'] ?></td>
                    <td><?php echo $linha['categorianome'] ?></td>
                    <td>
                        <button id="postar"><a href="perguntas-aprovar.php?id=<?= $linha['id'] ?>">Aprovar</a></button>
                        <button class="botaoatualizar"><a
                                href="perguntas-editar.php?id=<?= $linha['id'] ?>">Atualizar</a></button>
                        <button class="botao"><a href="perguntas-excluir.php?id=<?= $linha['id'] ?>">Excluir</a></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>