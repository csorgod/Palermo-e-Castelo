<?php 

	session_start();
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }

    require_once("DAO.php");
    require_once("../config.php");

    $table = $_GET['table'];
    $dao = new DAO();
    $json = Array();

    if($table == "TB_CONTATO"){
      $result = $dao->select("SELECT * FROM $table", Array());
      foreach ($result as $row) {
        $object =  Array();
        $object['DT_SENDED'] = $row['DT_SENDED'];
        $object['TXT_NAME'] = $row['TXT_NAME'];
        $object['NM_TEL'] = $row['NM_TEL'];
        $object['TXT_EMAIL'] = $row['TXT_EMAIL'];
        $object['TXT_SUBJECT'] = $row['TXT_SUBJECT'];
        $object['TXT_MESSAGE'] = $row['TXT_MESSAGE'];
        $object['BL_VISUALIZED'] = $row['BL_VISUALIZED'];
        $object['UP_FILE'] = base64_encode($row['UP_FILE']);
        $json[] = $object;
      }
      echo json_encode($json);
    } else if($table == "TB_ADVOGADOS") {
      $result = $dao->select("SELECT * FROM $table", Array());
      foreach ($result as $row) {
        $object = Array();
        $object['ID_LAWYER'] = $row['ID_LAWYER']; 
        $object['TXT_NAME'] = $row['TXT_NAME']; 
        $object['NM_AGE'] = $row['NM_AGE']; 
        $object['TXT_DESCRIPTION'] = $row['TXT_DESCRIPTION']; 
        $object['PIC_IMAGE'] = base64_encode($row['PIC_IMAGE']); 
        $object['DT_CREATED'] = $row['DT_CREATED']; 
        $json[] = $object;
      }
      echo json_encode($json);
    } else {
      $result = $dao->select("SELECT * FROM $table", Array());
      echo json_encode($result);
    }

 ?>
