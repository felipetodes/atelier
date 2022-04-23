	<?php
	session_start(); //variavel global, criar sessão

	include("conexao.php");//conexão com Banco de Dados
	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$cidade = $_POST["cidade"];
	$notas = $_POST["notas"];
	$servicos = $_POST["servicos"];
	
	
	$resultado = mysqli_query($conexao, "insert into cliente (nome, email, cidade, notas, interesse) values
('$nome','$email', '$cidade', '$notas', '$servicos')");



//Mensagem de confirmação

if(mysqli_insert_id($conexao)){
	$_SESSION['msg'] = "<p style= 'color: blue;'>Usuário cadastrado com sucesso!</p>";
	
	header("location:index.php");//voltar para o form
	
}else{
	$_SESSION['msg'] = "<p style= 'color: red;'>Usuário não cadastrado!</p>";
	header("location:index.php");//voltar para o form
}
	
	
	
	?>
	
	
	
	