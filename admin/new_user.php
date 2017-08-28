<?php 

	require_once('classes/DAO.php');

	$LOGIN = $_POST['LOGIN'];
	$PSSWORD = $_POST['PSSWORD']; 

	$LOGINNEW = $_POST['LOGINNEW']; 
	$PSSWORDNEW = $_POST['PSSWORDNEW']; 


	$dao = new DAO();

	$canCreate = $dao->select("SELECT * FROM TB_USERS WHERE LOGIN = :LOGIN AND PSSWORD = :PSSWORD", array(":LOGIN"=>$LOGIN, ":PSSWORD"=> md5($PSSWORD)));

	if(isset($canCreate) && count($canCreate) > 0){
		$row = $canCreate[0];

		$authLogin = $row['LOGIN'];
		$authPssword = $row['PSSWORD'];

		if($LOGIN == $authLogin && md5($PSSWORD) == $authPssword) {
			$authorized = true;
		}else{
			$authorized = false;
		}

		if($authorized){
			try{
				$create = $dao->query("INSERT INTO TB_USERS (LOGIN, PSSWORD) VALUES(:LOGIN, :PSSWORD)", array(":LOGIN"=>$LOGINNEW, ":PSSWORD"=> md5($PSSWORDNEW)));
				header('Location: index.php?created=1');
			} catch (Exception $e) {
				header('Location: index.php?erro=1');
			}
			
		}else{
			header('Location: index.php?erro=2');
		}

	} else {
		header('Location: index.php?erro=1');
	}

 ?>