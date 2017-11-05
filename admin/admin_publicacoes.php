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

    $result = $DAO->select("SELECT * FROM TB_PUBLICACOES_E_EVENTOS ORDER BY DT_CREATED DESC", array());

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
                      Publicação inserida com sucesso!
                   </div>';
            } else if($success == 2){
                  echo '<div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Publicação removida com sucesso!
                   </div>';
            }
            if($erro == 1){
              echo '<div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Atenção:</strong> impossível adicionar a publicação!
               </div>';
            } else if($erro == 2){
              echo '<div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Atenção:</strong> impossível excluir a publicação!
               </div>';
            }?>
      <div class="row">
         <h2>Publicações e eventos</h2>
      </div>
      <div class="row">
           <div class="btn-group" role="group" aria-label="..." style="margin-bottom: 15px;">
            <button type="button" class="btn btn-success link-new" id="new"><span class="glyphicon glyphicon-plus"></span> Nova</button>
            <button type="button" class="btn btn-danger link-delete" id="remove"><span class="glyphicon glyphicon-remove"></span> Remover</button>

            <div class="btn-group" role="group">
              <button type="button" class="btn btn-primary dropdown-toggle link-rel" id="export" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-download-alt"></span> Exportar 
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#" id="csvExport">.CSV</a></li>
                <li><a href="#" id="jsonExportPE">.JSON</a></li>
              </ul>
            </div>
          </div>
      </div>
      <div class="row" id="content_load">
      <table class="table table-responsive table-striped" id="table">
        <tr>
          <th>Marcar</th>
          <th>Descrição</th>
          <th>Tipo</th>
          <th>Conteúdo</th>
          <th>Data da criação</th>
          <td>Advogado</td>
        </tr>
        <?php foreach ($result as $row) { 
          $createDate = new DateTime($row['DT_CREATED']); ?>
          <tr>
            <td><input type="checkbox" name="ckhbox" /></td>
            <td><?php echo $row['TXT_DESCRIPTION']; ?></td>
            <td><?php echo $row['TXT_TYPE']; ?></td>
            <td><?php echo $row['TXT_CONTENT'] ?></td>
            <td><?php echo $createDate->format('d/m/Y') ?></td>
            <td><?php echo isset($row['ID_LAWYER']) ? $row['ID_LAWYER'] : 'Nenhum advogado' ?></td>
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
        $('.link-new').click(function(){
          var get_url = this.id;
          get_url = 'action/' + get_url + '.php';
          $.ajax({
            url: get_url,
            success: function(data){
              $('#content_load').html(data);
            }
          });
        });
        $('.link-delete').click(function(){
          var values = new Array();
          var url = "action/remove.php?DESC=";
          var checked = $("input[name='ckhbox']:checked").length;
          $.each($("input[name='ckhbox']:checked").closest("td").siblings("td"),
                 function () {
                      values.push($(this).text());
                 });
          if(checked > 1){

          } else {
            $.each(values, function(index, value){
              url += encodeURI(value) + "&";
              if(index == 0){ 
                url += "TYPE=";
              } else if (index == 1){
                url += "CONT=";
              } else if (index == 2){
                url += "DATE=";
              }
            });
          }
             $.ajax({
              url: url,
              success: function(data){
                window.location.replace(url);
              }
             });
        });
      });
    </script>
  </body>
</html>
