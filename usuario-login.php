<?php
$email = $_POST["email"];
$senhaLimpa = $_POST["senha"];
$senha = hash("sha256", $senhaLimpa);


$sql = "SELECT * FROM usuario WHERE
        email = :email
        AND senha = :psswd ";

include_once "classes/conexao.php";
$resultado = $conexao->prepare($sql);
$resultado->bindParam(':email', $email);
$resultado->bindParam(':psswd', $senha);
$resultado->execute();

$linha = $resultado->fetch();
$usuario_logado = $linha['email'];
$diretiva =  $linha['diretiva'];

if ($usuario_logado == null) {
	header('Location: usuario-erro.php');
} 

elseif($diretiva == 1){
	session_start();
	$_SESSION['usuario_logado'] = $usuario_logado;
	header('Location: adm.php');
}

elseif($diretiva == 2) {
	session_start();
	$_SESSION['usuario_logado'] = $usuario_logado;
	header('Location: usuario.php');
}

?>