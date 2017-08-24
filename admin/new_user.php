<?php 

	$LOGIN = $_POST['LOGIN'];
	$PSSWORD = $_POST['PSSWORD']; 

	$LOGINNEW = $_POST['LOGINNEW']; 
	$PSSWORDNEW = $_POST['PSSWORDNEW']; 


	$dao = new DAO();

	$canCreate = $dao->select("SELECT * FROM TB_USERS WHERE LOGIN = :LOGIN AND PSSWORD = :PSSWORD", array(":LOGIN"=>$LOGIN, ":PSSWORD"=> $PSSWORD));

	if(isset($canCreate) && count($canCreate) > 0){
		$row = $canCreate[0];

		$authLogin = $row['LOGIN'];
		$authPssword = $row['PSSWORD'];

		if($LOGIN == $authLogin && md5($PSSWORD) == $authPssword) {
			$authorized = true;
		}

	} else {
		header('');
	}

 ?>