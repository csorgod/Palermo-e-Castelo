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

  require_once('language/lang-control.php');
  require_once('admin/classes/DAO.php');
  require_once("admin/config.php");

  $dao = new DAO();

  $result = $dao->select("SELECT * FROM TB_ADVOGADOS ORDER BY ID_LAWYER DESC", Array());

 ?>

<!DOCTYPE html>
<html lang="pt-br">
  <!-- <div id="overlay">
       <img src="img/loader.gif" alt="Loading" class="img-loader"/>
       <h3 style="text-align: center;"><?php echo $lang['index_preload_text'] ?></h3>
  </div> -->
    <?php require("header.php"); ?>
  <body class="body-background">
    <?php require("menu.php"); ?>

    <div class="row lawyers">

    <?php require("multi-item-carousel.php"); ?>

    </div>
    <div class="row separator"></div>

    <div class="container lawyer-content" id="lawyer-content">
      <img src="img/loader.gif" id="loader" class="loader">
    </div>
    
      <?php require("footer-contact.php"); ?>

      <?php require("scripts.php"); ?>
      <script type="text/javascript">
      $(window).load(function (){
          $('#overlay').fadeOut();
          $(document).ready(function(){
            $('.link-lawyer').click(function(){
              var lawyer_to_load = 'lawyerLoad.php?id=' + this.id;
              $.ajax({
                url: lawyer_to_load,
                success: function(data){
                  $('#lawyer-content').html(data);
                },
                beforeSend: function(){
                  $('#loader').css({display: "table"});
                },
                complete: function(){
                  $('#loader').css({display: "none"});
                }
              });
            });
          });
        });
      </script>
    <?php require("footer.php"); ?>
  </body>
</html>