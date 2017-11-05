<?php

	require_once('admin/classes/DAO.php');
    require_once("admin/config.php");

	$name = $_POST['nome'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$visualized = 0;

	if($tel == ""){
		$tel = 0;
	}

	if(file_exists($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {

		$fileTmp = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileType = $_FILES['file']['type'];
		$fileName = $_FILES['file']['name'];
		$fileError = $_FILES['file']['error'];

		$fileUpload = fopen($fileTmp, 'r');
		$content = fread($fileUpload, filesize($fileTmp));
		$content = addslashes($content);
		fclose($fileUpload);

		if(!get_magic_quotes_gpc()) {
    		$fileName = addslashes($fileName);
		}
	} else {
		$content = "null";
	}

	$dao = new DAO();

	$result = $dao->query("INSERT INTO TB_CONTATO (TXT_NAME, NM_TEL, TXT_EMAIL, TXT_SUBJECT, TXT_MESSAGE, BL_VISUALIZED, UP_FILE) VALUES (:NAME, :TEL, :EMAIL, :SUBJECT, :MESSAGE, :BL_VISUALIZED, :FILE)", Array(":NAME"=>$name, ":TEL"=>$tel, ":EMAIL"=>$email, ":SUBJECT"=>$subject, ":MESSAGE"=>$message, ":BL_VISUALIZED"=>$visualized, ":FILE"=>$content));

	if($result){
		header('Location: index.php?success=1');
	} else {
		header('Location: index.php?error=1');
	}

?>