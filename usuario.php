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
            <h2><a href="index.php">Sair</a><br><br></h2>
        </div>
    </div>

    <div class="main-content">
        <div class="header">
            Novo Comentário
        </div>

        <table border="1">
            <tr>
                <th>Comentário</th>
            </tr>
        </table>

        <form action="comentario-gravar.php" method="POST">

            <input type="text" name="comentario" id="comentario">
            <input type="submit" value="Inserir" id="botaoinserir">
            
        </form>
    </div>
</body>

</html>