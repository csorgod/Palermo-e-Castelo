<?php 
	
	session_start();

	require_once('classes/DAO.php');

	$LOGIN = $_POST['LOGIN'];
	$PSSWORD = $_POST['PSSWORD'];

	$DAO = new DAO();

	$result = $DAO->select("SELECT * FROM TB_USERS WHERE LOGIN = :LOGIN AND PSSWORD = :PASSWORD", array(":LOGIN"=>$LOGIN, ":PASSWORD"=>md5($PSSWORD)));

	if(isset($result) && count($result) > 0){
		$row = $result[0];

		$_SESSION['USER'] = $row['LOGIN'];

		header('Location: home_admin.php');
		
	} else {
		header('Location: index.php?erro=4');
	}

 ?>