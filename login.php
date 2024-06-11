<html lang="pt-br">

<head>
    <link rel="stylesheet" href="Estilos/Login.css">
    <link rel="stylesheet" href="Estilos/Principal.css">
    <title>Login</title>
    <script src="Scripts/Script.js" defer></script>
    <link rel="shortcut icon" type="imagex/png" href="Imagens/icone.ico">
    <link rel="stylesheet" href="Scripts/Principal.js">
    <link rel="stylesheet" href="Estilos/Principal.css">

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

</head>

<body>

    <!--Alertar o usuário que ele foi cadastrado, quando o usuário é cadastrado, alerta o usuário que o cadastro foi realizado com sucesso -->
    <?php
    session_start();
    if (isset($_SESSION['cadastro_sucesso'])) {
        echo '<script>alert("Sua conta foi cadastrada com sucesso!");</script>';
        unset($_SESSION['cadastro_sucesso']); // Remove a variável de sessão após exibir o alerta
    }
    ?>

    <header>

        <!-- Barra de navegação -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

            <a class="navbar-brand" href="index.php"><img src="Imagens/logo.png" alt="Logo" width="40px"
                    height="40px"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Início / </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="turismo.php">Turismo / </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="culinaria.php">Culinária / </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cultura.php">Cultura / </a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>


    <!--Conteúdo-->
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login e seja<br> um colaborador</h1>
            <img src="Imagens/thesis-animate.svg" alt="svg" class="left-login-image">
        </div>

        <form action="usuario-login.php" method="POST">
            <div class="right-login">
                <div class="card-login">
                    <h1>Login</h1>

                    <div class="textfield">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="aluno@outlook.com">
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" placeholder="*************">
                    </div>

                    <button type="submit" class="btn-login">Login</button>

                    <a href="cad.php" class="registrar">Não possui uma conta? Clique aqui</a>

        </form>

    </div>
    </div>
    </div>


    <footer class="rodape">

        <p>2023 &#169 Pedro Fuin - Todos os Direitos Reservados</p>

    </footer>

</body>

</html>