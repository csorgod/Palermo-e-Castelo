<?php 

	session_start();

	require_once('classes/DAO.php');

	$DAO = new DAO();

  $result = $DAO->select("SELECT * FROM TB_PUBLICACOES_E_EVENTOS", array())
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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

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
      <div class="row">
         <h2>Publicações e eventos</h2>
      </div>
      <div class="row">
        <div class="btn-group" style="margin-bottom: 15px;">
          <button type="button" class="btn btn-success" id="new"><span class="glyphicon glyphicon-plus"></span> Nova</button>
          <button type="button" class="btn btn-danger" id="remove"><span class="glyphicon glyphicon-remove"></span> Remover</button>
          <button type="button" class="btn btn-primary" id=""><span class="glyphicon glyphicon-download-alt"></span> Exportar</button>
        </div>
      </div>
      <div class="row">
      <table class="table table-responsive table-striped">
        <tr>
          <th>Marcar</th>
          <th>Descrição</th>
          <th>Tipo</th>
          <th>Conteúdo</th>
          <th>Data da criação</th>
        </tr>
        <?php foreach ($result as $row) { 
          $createDate = new DateTime($row['DT_CREATED']); ?>
          <tr>
            <td><input type="checkbox" name="ckhbox"></td>
            <td><?php echo $row['TXT_DESCRIPTION']; ?></td>
            <td><?php echo $row['TXT_TYPE']; ?></td>
            <td><?php echo $row['TXT_CONTENT'] ?></td>
            <td><?php echo $createDate->format('d-m-Y') ?></td>
          </tr>
        <?php } ?>
      </table>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>