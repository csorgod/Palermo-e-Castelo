<?php 
	
	session_start();
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }

	require_once('classes/DAO.php');
  	require_once("config.php");

?>