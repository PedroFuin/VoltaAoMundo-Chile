<?php
    require_once "classes/Comentario.php";
    require_once "classes/Usuario.php";

    $comentario=new Comentario();
    
    $comentario->nome=$_POST['nome'];
    $comentario->email=$_POST['email'];
    $comentario->comentario=$_POST['comentario'];

    $comentario->inserir();
    echo '<script>alert("Comentário feito com sucesso!");</script>';

    header("refresh:0.8; URL=usuario.php");
?>
