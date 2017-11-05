<?php 

    session_start();
	    if(!$_SESSION['USER']){
	        header('Location: index.php?erro=3');
	        $id = session_id();
	    }

    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
    $success = isset($_GET['success']) ? $_GET['success'] : 0;

  	require_once('classes/DAO.php');
  	require_once("config.php");

  	$DAO = new DAO();

    $result = $DAO->select("SELECT * FROM TB_CONTATO ORDER BY DT_SENDED DESC", array());

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administração - Palermo e Castelo</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	 <?php require_once("admin_navbar.php"); ?>
    <div class="container">
      <?php 
            if($success == 1){

            } if($erro == 1){
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Erro ao marcar como visualizado!
                     </div>';
            }
          ?>
      <div class="row">
         <h2>Contato solicitado</h2>
      </div>
      <div class="row">
           <div class="btn-group" role="group" aria-label="..." style="margin-bottom: 15px;">
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-primary dropdown-toggle link-rel" id="export" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-download-alt"></span> Exportar 
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#" id="csvExport">.CSV</a></li>
                <li><a href="#" id="jsonExportCT">.JSON</a></li>
              </ul>
            </div>
          </div>
      </div>
      <div class="row" id="content_load">
      <table class="table table-responsive table-striped" id="table">
        <tr>
          <th></th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>E-mail</th>
          <th>Título</th>
          <th>Mensagem</th>
          <th>Data da solicitação</th>
        </tr>
        <?php foreach ($result as $row) {
          $sendedDate = new DateTime($row['DT_SENDED']);
          $subject = empty($row['TXT_SUBJECT']) ? "Não informado" : $row['TXT_SUBJECT'];
		  $phone = empty($row['NM_TEL']) ? "Não informado" : $row['NM_TEL'] ?>
          <tr <?php if($row['BL_VISUALIZED']){ echo 'style="border: 2px solid #a3f5a3;"'; } ?>>
            <td><a href="visualizado.php?id=<?php echo $row['ID_CONTACT'] ?>&see=<?php echo $row['BL_VISUALIZED'] ?>">
            <?php if($row['BL_VISUALIZED']){
              echo '<span class="glyphicon glyphicon-eye-close"></span>' ;
              }  else { 
                 echo '<span class="glyphicon glyphicon-eye-open"></span>';
              }  ?>
              </a></td>
            <td><?php echo ucwords(strtolower($row['TXT_NAME'])) ?></td>
            <td><?php echo $phone ?></td>
            <td><a href="mailto:<?php echo $row['TXT_EMAIL'] ?>"><?php echo $row['TXT_EMAIL'] ?></a></td>
            <td><?php echo $subject ?></td>  
            <td><?php echo $row['TXT_MESSAGE']; ?></td>
            <td><?php echo $sendedDate->format('d/m/Y') ?></td>
          </tr>
        <?php } ?>
      </table>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="../js/createCSV.js"></script>
    <script src="../js/createJSON.js"></script>
    <script type="text/javascript">
      $(document).ready(function (){

	  });
    </script>

  </body>
</html>


