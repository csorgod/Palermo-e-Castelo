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

    $result = $DAO->select("SELECT * FROM TB_NEWSLETTER ORDER BY DT_REGISTRY DESC", array());

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
                echo '<div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        *Mensagem aqui*
                     </div>';
            }
          ?>
      <div class="row">
         <h2>Cadastrados na Newsletter</h2>
      </div>
      <div class="row">
           <div class="btn-group" role="group" aria-label="..." style="margin-bottom: 15px;">
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-primary dropdown-toggle link-rel" id="export" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-download-alt"></span> Exportar 
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#" id="csvExport">.CSV</a></li>
                <li><a href="#" id="jsonExportNL">.JSON</a></li>
              </ul>
            </div>
          </div>
      </div>
      <div class="row" id="content_load">
      <table class="table table-responsive table-striped" id="table">
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Data do registro</th>
          <th>Ativo</th>
        </tr>
        <?php foreach ($result as $row) {
          $registryDate = new DateTime($row['DT_REGISTRY']); ?>
          <tr <?php if($row['BL_ACTIVE']) { echo 'style="border: 2px solid #a3f5a3;"'; } else { echo 'style="border: 2px solid #ff8484;"'; } ?>>
            <td><?php echo ucwords(strtolower($row['TXT_NAME'])) ?></td>
            <td><a href="mailto:<?php echo $row['TXT_EMAIL'] ?>"><?php echo $row['TXT_EMAIL'] ?></a></td>
            <td><?php echo $registryDate->format('d/m/Y') ?></td>
            <td><?php if($row['BL_ACTIVE']){ echo "Ativo"; } else { echo "Inativo"; } ?></td>
            <td></td>
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


