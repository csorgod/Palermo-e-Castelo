<?php 

    session_start();
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }

    require_once('../classes/DAO.php');
    require_once("../config.php");

    $id = $_POST['id'];
	$password = $_POST['pssword'];
	$confirmPassword = $_POST['confirmPssword'];


	if($password === $confirmPassword){
		$DAO = new DAO();
		$result = $DAO->query("UPDATE TB_USERS SET PSSWORD = :pssword WHERE ID_USER = :id", array(":pssword"=>md5($password), ":id"=> $id));

	}

	if($result){
		header('Location: ../admin_usuarios.php?success=1');
	} else {
		header('Location: ../admin_usuarios.php?erro=3');
	}

 ?>

