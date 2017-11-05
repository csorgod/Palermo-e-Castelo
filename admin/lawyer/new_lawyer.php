<?php 

	session_start();
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }
	
	  require_once('../classes/DAO.php');
	  require_once("../config.php");

  	$name = $_POST['name'];
  	$age =  $_POST['age'];
  	$description = $_POST['description'];
  	$atuation = $_POST['atuation'];
  	$experience = $_POST['experience'];
  	$graduacao = $_POST['graduacao'];
  	$language = $_POST['language'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $cel = $_POST['cel'];

  	$upload_foto = false;

	if(isset($_FILES['image']['name']) && $_FILES['image']['error'] == 0){
		$arquivo_tmp = $_FILES['image']['tmp_name'];
    	$nome = $_FILES['image']['name'];

    	$extensao = pathinfo ($nome, PATHINFO_EXTENSION);

    	if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
    		$novoNome = uniqid(time()).'.'.$extensao;
    		$destino = '../../imagens-advogados/'.$novoNome;

    		if (@move_uploaded_file($arquivo_tmp, $destino)) {
    			$upload_foto = true;
    		} else {
    			header('Location: ../admin_advogados.php?erro=6');
    		}
    	} else {
    		header('Location: ../admin_advogados.php?erro=5');
    	}
	} else {
		header('Location: ../admin_advogados.php?erro=4');
	}

	if($upload_foto){

		$DAO = new DAO();

		try {
      $result = $DAO->query("INSERT INTO TB_ADVOGADOS (TXT_NAME, NM_AGE, TXT_DESCRIPTION, TXT_ATUATION, TXT_EXPERIENCE, TXT_GRADUATION, TXT_LANGUAGE, IMG_PATH, TXT_EMAIL, TXT_TEL, TXT_CEL) VALUES (:NAME, :AGE, :DESCRIPTION, :ATUATION, :EXPERIENCE, :GRADUATION, :LANGUAGE, :IMG_PATH, :EMAIL, :TEL, :CEL)", array(":NAME"=> $name, ":AGE"=> $age, ":DESCRIPTION"=> $description, ":ATUATION"=>$atuation, ":EXPERIENCE"=>$experience, ":GRADUATION"=>$graduacao, ":LANGUAGE"=>$language, ":IMG_PATH"=>$destino, ":EMAIL"=>$email, ":TEL"=>$tel, ":CEL"=>$cel));
    } catch (Exception $e) {
      echo $e->getMessage();
    }

	} 

  if($result){
    header('Location: ../admin_advogados.php?success=1');
  } else {
    header('Location: ../admin_advogados.php?erro=3');
  }

 ?>
