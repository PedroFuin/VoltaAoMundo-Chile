<?php
require_once "classes/comentario.php";
$comentario = new Comentario();
$lista = $comentario->listarComentariosAprovados();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
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

  <title>Home - Volta ao Mundo</title>
</head>

<body>

  <header>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

      <a class="navbar-brand" href="index.php"><img src="Imagens/logo.png" alt="Logo" width="40px" height="40px"></a>

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
          <li class="nav-item">
            <a class="btn btn-primary" href="login.php">Login </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="div-header">
      <h1><strong>Bem-vindo ao Chile!</strong></h1>
      <h2>Dos Andes ao oceano, a beleza do Chile não tem limites.</h2>

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <!-- Slides -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Imagens/banner.png" alt="Primeiro Slide" class="banner d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="Imagens/banner2.jpg" alt="Segundo Slide" class="banner d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="Imagens/banner3.jpg" alt="Segundo Slide" class="banner d-block w-100">
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="conteudo">
    <div class="container d-flex justify-content-between">
      <div class="txt-conteudo">
        <h1>Conheça o Chile</h1>
        <h3>Perdido nas cores do Chile, onde cada vista é uma obra-prima.</h3>

        <p>Do extremo norte com o deserto mais seco do mundo, ao sul austral com gelo eterno e quedas de água
          invertidas, o Chile é um convite difícil de recusar. Aprenda sobre turismo no Chile, e surpreenda-se com as
          experiências no extremo sul do mundo
        </p>
      </div>

      <img id="img1" src="Imagens/img1.jpg" alt="Imagem paisagem">
    </div>
  </div>

  <hr>

  <div class="cards container">
    <div class="card-deck">

      <div class="card">
        <a href="turismo.html"><img class="card-img-top" src="Imagens/card1.jpg" alt="Imagem de capa do card"></a>
        <div class="card-body">
          <h5 class="card-title">Turismo</h5>
          <p class="card-text">O Chile encanta com suas paisagens diversificadas, que vão desde desertos até montanhas
            nevadas, atraindo turistas em busca de aventura e beleza natural única. Suas vinícolas mundialmente famosas
            e a rica cultura também são pontos de destaque para os viajantes.</p>
        </div>
      </div>

      <div class="card">
        <a href="culinaria.html"><img class="card-img-top" src="Imagens/card2.jpg" alt="Imagem de capa do card"></a>
        <div class="card-body">
          <h5 class="card-title">Culinária</h5>
          <p class="card-text">A culinária chilena é uma mistura vibrante de sabores, destacando-se pela influência
            indígena, espanhola e européia. Pratos como o ceviche, a empanada e o pastel de choclo refletem a rica
            diversidade gastronômica do país.</p>
        </div>
      </div>

      <div class="card">
        <a href="cultura.html"><img class="card-img-top" src="Imagens/card3.jpg" alt="Imagem de capa do card"></a>
        <div class="card-body">
          <h5 class="card-title">Cultura</h5>
          <p class="card-text">
            A cultura chilena é marcada por sua rica herança indígena e colonial, refletida na música, dança e arte do
            país. Festivais como o "Cueca" e o "Carnaval de Viña del Mar" celebram essa diversidade cultural de forma
            vibrante.</p>
        </div>
      </div>

      <div class="card">
        <a
          href="https://www.latamairlines.com/br/pt/destinos/chile?gclsrc=aw.ds&gad_source=1&gclid=CjwKCAjwwr6wBhBcEiwAfMEQszvRiv813atFxmsdqsp03Ptzy2qlKZ5Vs_X1830iXyvGkJKa8pa6CRoCX4sQAvD_BwE"><img
            class="card-img-top" src="Imagens/card4.jpg" alt="Imagem de capa do card"></a>
        <div class="card-body">
          <h5 class="card-title">Viagens</h5>
          <p class="card-text">Voe para o Chile e descubra um pxaís cheio de contrastes, desde a beleza dos Andes até a
            serenidade do Oceano Pacífico. Com voos diretos disponíveis de várias cidades ao redor do mundo, o Chile
            espera por você para uma experiência inesquecível.</p>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="conteudo2">
    <div class="container d-flex justify-content-between">
      <img id="img2" src="Imagens/conteudo2.png" alt="Imagem mapa">
      <div class="txt-conteudo">
        <p>
          Venha conhecer o Chile e descubra um destino repleto de diversidade e encantos! Com paisagens de tirar o
          fôlego, como o Deserto do Atacama e a Patagônia, oferece aventura e contemplação. Em cidades como Valparaíso e
          Santiago, mergulhe na rica cultura local, apreciando arte de rua e arquitetura colonial. Não deixe de se
          deliciar com a culinária chilena, com pratos como ceviche e asado, acompanhados dos renomados vinhos do país.
          Uma experiência única aguarda por você no Chile. ¡Bienvenidos! <br>
        </p>
      </div>
    </div>
  </div>

  <hr>

  <div class="cards container">
    <h2 align="center">Acompanhe nossos comentários</h2>
    <br>
    <div class="row">
      <?php foreach ($lista as $linha): ?>
        <div class="col-sm-4">
          <div class="card-deck">
            <div class="card">
              <div class="card-body">
                <p>
                <h3><?php echo $linha['nome'] ?></h3>
                <p>
                  <?php echo $linha['comentario'] ?>
                </p>
                </p>
              </div>
            </div>
          </div>
          <br>
        </div>
      <?php endforeach ?>
    </div>
    <br>
    <div class="container" align="center">
      <a href="login.php" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Deixe seu
        comentário!</a>
    </div>
  </div>

  <footer class="rodape">
    <p>2023 &#169 Pedro Fuin - Todos os Direitos Reservados</p>
  </footer>
</body>

</html>