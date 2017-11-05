<?php 

	require_once('admin/classes/DAO.php');
    require_once("admin/config.php");

    $name = $_POST['nome'];
    $email = $_POST['email'];
    $active = 1;

    $dao = new DAO();

    $result = $dao->query("INSERT INTO TB_NEWSLETTER (TXT_NAME, TXT_EMAIL, BL_ACTIVE) VALUES (:NAME, :EMAIL, :ACTIVE)", array(":NAME"=>$name, ":EMAIL"=>$email, ":ACTIVE"=>$active));

    if($result){
		header('Location: index.php?success=2');
    } else {
		header('Location: index.php?error=2');
    }

 ?>