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

    $result = $DAO->select("SELECT * FROM TB_ADVOGADOS ORDER BY DT_CREATED DESC", array());

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
                        Advogado incluído com sucesso!
                     </div>';
            } else if($success == 2){
                echo '<div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Advogado excluído com sucesso!
                     </div>';
            }
            
            if($erro == 1){ 
               echo '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Atenção:</strong> impossível localizar o advogado!
                     </div>';
            } else if($erro == 2){
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Atenção:</strong> Não foi possivel excluir o advogado!
                      </div>';
            } else if($erro == 3){
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Atenção:</strong> Não foi possivel adicionar o advogado!
                      </div>';
            } else if($erro == 4){
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Atenção:</strong> Imagem com erro ou não carregada! Tente novamente.
                      </div>';
            } else if($erro == 5){
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Atenção:</strong> Só são aceitas imagens com as extensões .jpg, .jpeg, .gif e .png.
                      </div>';
            } else if($erro == 6){
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Atenção:</strong> Impossivel salvar a imagem. Tente novamente mais tarde.
                      </div>';
            } else if($erro == 7){
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Atenção:</strong> Esse advogado têm publicações cadastradas. Exclua as publicações e tente novamente.
                      </div>';
            }
          ?>
      <div class="row">
         <h2>Advogados</h2>
      </div>
      <div class="row">
           <div class="btn-group" role="group" aria-label="..." style="margin-bottom: 15px;">
            <button type="button" class="btn btn-success link-new" id="new"><span class="glyphicon glyphicon-plus"></span> Novo</button>
            <button type="button" class="btn btn-danger link-delete" id="remove"><span class="glyphicon glyphicon-remove"></span> Remover</button>

            <div class="btn-group" role="group">
              <button type="button" class="btn btn-primary dropdown-toggle link-rel" id="export" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-download-alt"></span> Exportar 
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#" id="csvExport">.CSV</a></li>
                <li><a href="#" id="jsonExportAD">.JSON</a></li>
              </ul>
            </div>
          </div>
      </div>
      <div class="row" id="content_load">
      <table class="table table-responsive table-striped" id="table">
        <tr>
          <th>Marcar</th>
          <th>ID</th>
          <th>Nome</th>
          <th>Idade</th>
          <th>Descrição</th>
          <th>Atuação</th>
          <th>Experiência</th>
          <th>Graduação</th>
          <th>Idiomas</th>
          <th>E-mail</th>
          <th>Fixo</th>
          <th>Celular</th>
          <th>Data da criação</th>
        </tr>
        <?php foreach ($result as $row) { 
          $createDate = new DateTime($row['DT_CREATED']); ?>
          <tr>
            <td><input type="checkbox" name="ckhbox" /></td>
            <td style="display: none;"><?php echo $row['ID_LAWYER']; ?></td>
            <td><?php echo $row['ID_LAWYER'] ?></td>
            <td><?php echo $row['TXT_NAME']; ?></td>
            <td><?php echo $row['NM_AGE']; ?></td>
            <td><?php echo $row['TXT_DESCRIPTION'] ?></td>
            <td><?php echo $row['TXT_ATUATION'] ?></td>
            <td><?php echo $row['TXT_EXPERIENCE'] ?></td>
            <td><?php echo $row['TXT_GRADUATION'] ?></td>
            <td><?php echo $row['TXT_LANGUAGE'] ?></td>
            <td><?php echo $row['TXT_EMAIL'] ?></td>
            <td><?php echo $row['TXT_TEL'] ?></td>
            <td><?php echo $row['TXT_CEL'] ?></td>
            <td><?php echo $createDate->format('d/m/Y') ?></td>
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
          get_url = 'lawyer/' + get_url + '.php';
          
          $.ajax({
            url: get_url,
            success: function(data){
              $('#content_load').html(data);
            }
          });
        });
        $('.link-delete').click(function(){
          var values = new Array();
          var url = "lawyer/remove.php?id=";
          var checked = $("input[name='ckhbox']:checked").length;
          $.each($("input[name='ckhbox']:checked").closest("td").siblings("td"),
                 function () {
                      values.push($(this).text());
                 });
            $.each(values, function(index, value){
              url += encodeURI(value) + "&";
            }); 
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
