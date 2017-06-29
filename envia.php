<?php 
// dados obtidos
$nome = $_POST['nome'];
$email  = trim($_POST['email']);
$comentario = $_POST['comentario'];
$emailDestinatario = 'caosemlar12@gmail.com';
// enviar para o email
$corpoEmail =
'
<p>Dados Preenchidos no site localhost:8000/menu-mobile</p>
<p> <b>Nome:<b> '.$nome.' </p>
<p> <b>E-mail:<b> '.$email.' </p>
<p> <b>Senha:<b> '.$senha.' </p>

';//fecha corpoEmail

// 3) enviar dados para o email com variáveis $headers
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n";
$headers .= "Return-Path: $emaildestinatario \r\n";
$envio = mail($emailDestinatario, $comentario, $corpoEmail, $headers);
if($envio){
		header("localhost:8000/menu-mobile");
		echo"Enviado com sucesso!";
	}else{
		echo"Erro";
	}
 ?>