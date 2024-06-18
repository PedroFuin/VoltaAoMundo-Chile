<?php
require_once "classes/comentario.php";
$comentario = new Comentario();
$lista = $comentario->listarComentariosUsuario();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" type="imagex/png" href="Imagens/icone.ico">
    <link rel="stylesheet" href="Scripts/Principal.js">
    <link rel="stylesheet" href="Estilos/usuario.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Usuario - Volta ao Mundo</title>
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
            Faça seu Comentário!
        </div>

        <br>
        
        <form action="comentario-gravar.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp"
                    placeholder="Insira seu nome.">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu email.">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Deixe seu Comentário:</label>
                <textarea type="text" class="form-control" id="comentario" name="comentario" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envie seu Comentário!</button>
        </form>
    </div>
</body>

</html>