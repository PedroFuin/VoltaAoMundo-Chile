<?php
    require_once "classes/Comentario.php";

    $id=$_GET['id'];
    $pergunta= new Comentario($id);
    $pergunta->excluir();
    header('Location: adm.php');
?>