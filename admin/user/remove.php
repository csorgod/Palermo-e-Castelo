<?php 

    session_start();
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }

	require_once('../classes/DAO.php');
    require_once("../config.php");

    $id = $_GET['ID'];

	$DAO = new DAO();

	$result = $DAO->query("DELETE FROM TB_USERS WHERE ID_USER = :ID", Array(":ID"=>$id));

  	if($result){
  		header('Location: ../admin_usuarios.php?success=3');
  	} else {
  		header('Location: ../admin_usuarios.php?erro=2');
  	}

 ?>