<!--
*********************************************************************
*                  Front-End, Back-End & Server-side                *
*                  desenvolvido por Guilherme Csorgo                *
*                  Visite www.guilhermecsorgo.com.br                *
*                     https://github.com/csorgod/                   *
*                       07/2017 - São Paulo/SP                      *
*********************************************************************
-->

<?php 
  
    $error = isset($_GET['error']) ? $_GET['error'] : 0;
    $success = isset($_GET['success']) ? $_GET['success'] : 0;

   require_once('language/lang-control.php');

 ?>

<!DOCTYPE html>
<html lang="pt-br">
  <div id="overlay">
       <img src="img/loader.gif" alt="Loading" class="img-loader"/>
       <h3 style="text-align: center;"><?php echo $lang['index_preload_text'] ?></h3>
  </div>
    <?php require("header.php"); ?>
  <body class="body-background">
    <?php require("menu.php"); ?>
  <!-- Modal de sucesso -->
  <div id="modalSuccess" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $lang['index_modal_modalsuccess1_title'] ?></h4>
        </div>
        <div class="modal-body">
          <p><?php echo $lang['index_modal_modalsuccess1_body'] ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['index_modal_modalsuccess1_footer_button_close'] ?></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal de sucesso -->
  <div id="modalSuccess2" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $lang['index_modal_modalsuccess2_title'] ?></h4>
        </div>
        <div class="modal-body">
          <p><?php echo $lang['index_modal_modalsuccess2_body'] ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['index_modal_modalsuccess2_footer_button_close'] ?></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal de erro -->
    <div id="modalError" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $lang['index_modal_modalError1_title'] ?></h4>
        </div>
        <div class="modal-body">
          <p><?php echo $lang['index_modal_modalError1_body'] ?></a></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['index_modal_modalError1_footer_button_close'] ?></button>
        </div>
      </div>
    </div>
  </div>
<!-- Modal de erro -->
  <div id="modalError2" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $lang['index_modal_modalError2_title'] ?></h4>
        </div>
        <div class="modal-body">
          <p><?php echo $lang['index_modal_modalError2_body'] ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['index_modal_modalError2_footer_button_close'] ?></button>
        </div>
      </div>
    </div>
  </div>

   <div class="row">
      <div id="carrossel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carrossel" data-slide-to="0" class="active"></li>
          <li data-target="#carrossel" data-slide-to="1"></li>
          <li data-target="#carrossel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/carousel_001.jpg" alt="Estante de  livros Palermo e Castelo">
            <div class="carousel-caption">
              <h3><?php echo$lang['index_carrousel_item1_title'] ?></h3>
              <p><?php echo $lang['index_carrousel_item1_description'] ?></p>
            </div>
          </div>

          <div class="item">
            <img src="img/carousel_002.jpg" alt="Corredor iluminado">
            <div class="carousel-caption">
              <h3><?php echo$lang['index_carrousel_item2_title'] ?></h3>
              <p><?php echo $lang['index_carrousel_item2_description'] ?></p>
            </div>
          </div>

          <div class="item">
              <img src="img/carousel_003.jpg" alt="Sala de reunião">
              <div class="carousel-caption">
                <h3><?php echo$lang['index_carrousel_item3_title'] ?></h3>
                <p><?php echo $lang['index_carrousel_item3_description'] ?></p>
              </div>
          </div>
        </div>

        <a class="left carousel-control" href="#carrossel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#carrossel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

      </div>
    </div>
    
    <div class="row separator"></div>

  <div class="row body-background">
    <div class="container">
      <div class="row">
        <div class="col-md-12 div-center">
        <a href="escritorio.php?target=aboutUs">
          <div class="col-md-6 box-content-company">
            <img class="img-details" alt="A Empresa" src="img/Predio.png">
            <h4 class="title-details"><?php echo $lang['index_boxcontent1_title'] ?></h4>
            <p class="text-details"><?php echo $lang['index_boxcontent1_description'] ?></p>
            <button class="btn btn-default"><?php echo $lang['index_boxcontent1_button'] ?></button>
          </div>
        </a>
          <a href="atuacao.php">
            <div class="col-md-6 box-content-actuation">
              <img class="img-details" alt="Atuação" src="img/reuniao.png">
              <h4 class="title-details"><?php echo $lang['index_boxcontent2_title'] ?></h4>  
              <p class="text-details"><?php echo $lang['index_boxcontent2_description'] ?></p>
              <button class="btn btn-default"><?php echo $lang['index_boxcontent2_button'] ?></button>
            </div>
          </a>
          <a href="advogados.php">
            <div class="col-md-6 box-content-lawyers">
              <img class="img-details" alt="Publicações e eventos" src="img/balanca.png">
              <h4 class="title-details"><?php echo $lang['index_boxcontent3_title'] ?></h4>  
              <p class="text-details"><?php echo $lang['index_boxcontent3_description'] ?></p>
              <button class="btn btn-default"><?php echo $lang['index_boxcontent3_button'] ?></button>
            </div>
          </a>
        </div>
      </div>

      <div class="row">
        <h2 class="titles" style=""><?php echo $lang['index_title_contact'] ?></h2>
      </div>
    </div>
  </div>

  <?php require("menu-contato.php"); ?>
  
  <?php require("scripts.php"); ?>

  <script type="text/javascript">
  $(window).load(function (){
    $('#overlay').fadeOut();
    $(document).ready(function(){
      
      $('#file-upload').on('change', '#upload', function(){
        var fileName = $('#upload').val();
        $('#upload').text(fileName + " carregado.");
      });
      function getFileName() {
        if ($('#fupload').val() != '') {
            var fileName = $('#fupload').val().split('\\').pop();
                $('.text-fileupload').text("'" + fileName + "' carregado com sucesso.");
        } else {
            $('#label-fupload').text("Nenhum arquivo carregado!");
        }
    }
    $('#fupload').on("change", getFileName);
    });
  });
  </script>
  <?php 
  if($error == 1){
    echo "<script>
              $('#modalError').modal('show');
          </script>";
  } else if ($error == 2){
    echo "<script>
              $('#modalError2').modal('show');
          </script>";
  }
  if($success == 1){
    echo "<script>
              $('#modalSuccess').modal('show');
          </script>";
  } else if ($success == 2){
    echo "<script>
              $('#modalSuccess2').modal('show');
          </script>";
  }
 ?>

  <?php require("footer.php"); ?>
  
  </body>
</html>