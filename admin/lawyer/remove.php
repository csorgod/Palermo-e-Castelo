<?php 

	session_start(); 
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }
    require_once('../classes/DAO.php');
  	require_once("../config.php");

  	$id = $_GET['id'];

  	$dao = new DAO();

    $result = $dao->select("SELECT * FROM TB_PUBLICACOES_E_EVENTOS WHERE ID_LAWYER = :ID", Array(":ID"=>$id));

    if(isset($result[0]['ID_LAWYER'])){
      header('Location: ../admin_advogados.php?erro=7');
    } else {
      $dao->query("DELETE FROM TB_ADVOGADOS WHERE ID_LAWYER = :ID", Array(":ID"=>$id));
      header('Location: ../admin_advogados.php?success=2');
    }

 ?>