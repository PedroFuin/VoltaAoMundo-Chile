<?php
include_once "classes/conexao.php";

// Define o caminho para o arquivo JSON
$jsonFile = 'JSON/comentarios.json';

// Lê o conteúdo do arquivo JSON
$jsonData = file_get_contents($jsonFile);

// Decodifica o JSON para um array associativo
$comentarios = json_decode($jsonData, true);

if ($comentarios && is_array($comentarios)) {
    // Preparação da consulta SQL
    $stmt = $conn->prepare("INSERT INTO comentarios (nome, email, comentario) VALUES (?, ?, ?)");

    // Bind de parâmetros
    $stmt->bind_param("sss", $nome, $email, $comentario);

    // Inserção dos dados no banco de dados
    foreach ($comentarios as $comentarioData) {
        $nome = $comentarioData['nome'];
        $email = $comentarioData['email'];
        $comentario = $comentarioData['comentario'];
        $stmt->execute();
    }

    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao decodificar o arquivo JSON.";
}

// Fechamento da conexão
$stmt->close();
$conn->close();
?>