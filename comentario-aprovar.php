<?php

    require_once "classes/Comentario.php";

    $id=$_GET['id'];
    $pergunta= new Comentario($id);
    $pergunta->aprovar();
    header('Location: adm.php');
?>