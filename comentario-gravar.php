<?php
    require_once "classes/Comentario.php";
    require_once "classes/Usuario.php";

    $comentario=new Comentario();
    $usuario=new Usuario();
    
    $usuario->nome=$_POST['nome'];
    $usuario->email=$_POST['email'];
    $comentario->comentario=$_POST['comentario'];

    $comentario->inserir();

    header("refresh:0.8; URL=usuario.php");
?>
