<?php 

 session_start();

 include 'config.php';



$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(!empty($usuario ) && !empty($senha)) {
	$sql = mysqli_query($connect, "SELECT * FROM usuarios WHERE usuario =  '$usuario'");

	


	while($line = mysqli_fetch_array($sql)) {
		$usuario_bd = $line['usuario'];
		$senha_bd = $line['senha'];

	}



	if($usuario == $usuario_bd && $senha == $senha_bd) {
		$_SESSION['login'] = $usuario;
		$_SESSION['senha'] = $senha;
		header('location: admin.php');

	}else {

		$_SESSION['erro'] = "Digite  sus dados corretamente";
		header('location: index.php');

	}
 }else{
 	$_SESSION['erro']  = "Usuário não encontrado";
	header('location: index.php');
 }

?>
