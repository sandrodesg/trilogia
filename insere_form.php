<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

session_start();
include_once("conexao.php");

$email = $_POST['email'];
$msg = $_POST['msg'];



	$result = mysql_query("INSERT INTO usuario (email,mensagem) VALUES ('$email','$msg')");
	
	if(mysql_affected_rows() != 0){
		header("Location:contact.php");
		$_SESSION['msgCad'] = "Obrigado pela preferência,atensiosamente Portal Trilogia!";
	}
?>