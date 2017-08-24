<?php

	$name = $_POST['nome'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$file = $_POST['file'];
	$message = $_POST['message'];

	$msg = "Essa é uma mensagem automática de teste\n Alguém tentou entrar em contato. Seguem os dados: ". $name . $tel . $email . $subject . $file . $message;
	$emailAddress = "guilherme.henriques@cibrasec.com.br";

	mail(, "Contato - Formulário Palermo e Castelo", $msg);

?>