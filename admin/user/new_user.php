<?php 

	session_start();
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }

	require_once('../classes/DAO.php');
  	require_once("../config.php");
	
	$user = $_POST['user'];
	$password = $_POST['password'];

	$DAO = new DAO();

	$result = $DAO->query("INSERT INTO TB_USERS (LOGIN, PSSWORD) VALUES (:LOGIN, :PASSWORD)", array(":LOGIN"=>$user, ":PASSWORD"=>md5($password)));

	if($result){
		header('Location: ../admin_usuarios.php?success=2');
	} else {
		header('Location: ../admin_usuarios.php?erro=3');
	}

?>