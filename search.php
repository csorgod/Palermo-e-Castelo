<?php 

  require_once('admin/classes/DAO.php');
  require_once("admin/config.php");

    $dao = new DAO();

    if(isset($_POST['conteudo'])){
        $conteudo = $_POST['conteudo'];
    } else {
        $conteudo = null;
    }
    if(isset($_POST['advogado'])){
        $advogado = $_POST['advogado'];
    } else {
        $advogado = null;
    }
    if(isset($_POST['atuacao'])){
        $atuacao  =$_POST['atuacao'];
    } else {
        $atuacao = null;
    }
    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
    } else {
        $tipo = null;
    }
    if(isset($_POST['ano'])){
        $ano = $_POST['ano'];
    } else {
        $ano = null;        
    }
    if(isset($_POST['mes'])){
        $mes = $_POST['mes'];
    } else {
        $mes = null; 
    }

    try {
        $result = $dao->select("SELECT * FROM TB_PUBLICACOES_E_EVENTOS ORDER BY DT_CREATED DESC", Array());
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    if($result){
        header('Location: publicacoeseventos.php');
    } else {
        header('Location: publicacoeseventos.php');
    }


?>