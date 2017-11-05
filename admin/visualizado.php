<?php 

	session_start();
	    if(!$_SESSION['USER']){
	        header('Location: index.php?erro=3');
	        $id = session_id();
	    }

	$id = $_GET['id'];
	$see = $_GET['see']; 

	if($see == 1){
		$see = 0;
	} else {
		$see = 1;
	}

  	require_once('classes/DAO.php');
  	require_once("config.php");

  	$DAO = new DAO();

    $result = $DAO->query("UPDATE TB_CONTATO SET BL_VISUALIZED = :SEE WHERE ID_CONTACT = :ID", Array(":SEE"=>$see, ":ID"=>$id));

	if($result){
		header('Location: admin_contato.php?success=1');
	} else {
		header('Location: admin_contato.php?erro=1');
	}

 ?>