<?php 

session_start();

$langs = array('pt','en');

if(isset($_GET['lang']) && $_GET['lang'] != ''){ 
	if(in_array($_GET['lang'], $langs)) {       
      $_SESSION['lang'] = $_GET['lang'];
    }
} 

if(!isset($_SESSION['lang'])){
	$_SESSION['lang'] = 'pt';
}
  
  include('language/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');

 ?>