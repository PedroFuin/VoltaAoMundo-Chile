<?php
require_once 'Classes/Comentario.php';

$url = 'JSON/comentarios.json';

$json = file_get_contents($url);

$data = json_decode($json, true);

foreach ($data as $linha) {
    $importar = new Comentario();

    $nome = $linha['nome'];
    $email = $linha['email'];
    $comentario = $linha['comentario'];

    $importar->nome = $nome;
    $importar->email = $email;
    $importar->comentario = $comentario;

    $importar->importar();
}
?>