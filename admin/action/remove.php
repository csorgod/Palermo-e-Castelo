<?php

	session_start(); 
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }
    require_once('../classes/DAO.php');
  	require_once("../config.php");
  	
  	$description = $_GET['DESC'];
  	$contentType = $_GET['TYPE'];
  	$content = $_GET['CONT'];
  	$date = date('d-m-Y', strtotime($_GET['DATE']));

  	$dao = new DAO();

  	$result = $dao->select("SELECT ID_PUBLICATION FROM TB_PUBLICACOES_E_EVENTOS WHERE TXT_DESCRIPTION = :description AND TXT_TYPE = :contentType AND TXT_CONTENT = :content", Array(":description"=>$description, ":contentType"=>$contentType, ":content"=>$content));

  	if($result){
  		$id_publication = $result[0]['ID_PUBLICATION'];
  	} else{
  		header('Location: ../admin_publicacoes.php?erro=1');
  	}
    
  	$result = $dao->query("DELETE FROM TB_PUBLICACOES_E_EVENTOS WHERE ID_PUBLICATION = :id_publication", Array(":id_publication"=>$id_publication));

  	if($result){
  		header('Location: ../admin_publicacoes.php?success=2');
  	} else{
  		header('Location: ../admin_publicacoes.php?erro=2');
  	}

 ?>
