<?php 
	
	session_start();
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }

	require_once('../classes/DAO.php');
  	require_once("../config.php");
	
	$description = $_POST['description'];
	$category = $_POST['category'];
	$content = $_POST['content'];
	$idUser = $_SESSION['ID_USER'];

	$lawyer = isset($_POST['selectLawyer']) ? $_POST['selectLawyer'] : null;

	$DAO = new DAO();

	$lawyerResult = $DAO->select("SELECT ID_LAWYER FROM TB_ADVOGADOS WHERE TXT_NAME = :NAME", Array(":NAME"=>$lawyer));

	$lawyerToDB = $lawyerResult[0]['ID_LAWYER'];

	var_dump($lawyerToDB);

	$result = $DAO->query("INSERT INTO TB_PUBLICACOES_E_EVENTOS (ID_USER, TXT_DESCRIPTION, TXT_TYPE, TXT_CONTENT, ID_LAWYER) VALUES (:USER, :DESCRIPTION, :TXT_TYPE, :TXT_CONTENT, :ID_LAWYER)", Array(":USER"=>$idUser, ":DESCRIPTION"=>$description, ":TXT_TYPE"=>$category, ":TXT_CONTENT"=>$content, ":ID_LAWYER"=>$lawyerToDB));

	if($result){
		header('Location: ../admin_publicacoes.php?success=1');
	} else {
		header('Location: ../admin_publicacoes.php?erro=1');
	}
 ?>



