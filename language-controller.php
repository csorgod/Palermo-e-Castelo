<?php 
	$lang = $_GET['language'];
	
	setLanguage($lang);

	function setLanguage($lang){
		if($lang == 'pt_BR'){
			$expire = time() + 60 * 60 * 24 * 30;
			setcookie("language", "en_US", $expire);
			$back = 'language/pt_BR.php';
			header('Location: ' . $back);
		}
		 elseif($lang == 'en_US'){
			$expire = time() + 60 * 60 * 24 * 30;
			setcookie("language", "pt_BR", $expire);
			$back = 'language/en_US.php';
			header('Location: ' . $back);
		}
	}
?>