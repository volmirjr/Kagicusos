<?php
session_start();
include('conexao.php');
 
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: Loguin.php');
	exit();
}
 
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "select nome,email,data,n,re,rg from usuario where email = '{$email}' and senha = '{$senha}'";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 


if($row == 1) {
	$dados = mysqli_fetch_array($result);
	$_SESSION['email'] = $email;
	$_SESSION['data'] = $dados['data'];
	$_SESSION['nome'] = $dados['nome'];
	$_SESSION['re'] = $dados['re'];
	$_SESSION['botao'] = $row;
	header('Location: Perfil.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	exit();
}
