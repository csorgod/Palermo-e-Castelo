<!--
*********************************************************************
*                  Front-End, Back-End & Server-side                *
*                  desenvolvido por Guilherme Csorgo                *
*                  Visite www.guilhermecsorgo.com.br                *
*                     https://github.com/csorgod/                   *
*                       07/2017 - São Paulo/SP                      *
*********************************************************************
-->

<?php require_once('language/lang-control.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <div id="overlay">
       <img src="img/loader.gif" alt="Loading" class="img-loader"/>
       <h3 style="text-align: center;"><?php echo $lang['index_preload_text'] ?></h3>
  </div>
    <?php require("header.php"); ?>
  <body class="body-background">
    <?php require("menu.php"); ?>

    <div class="row">
      <img src="img/img-contato.png" alt="Contato" class="img-responsive img-contato">
    </div>
    <div class="row separator" style="margin-bottom: 100px; height: 2px;"></div>
    <?php require("menu-contato.php"); ?>
    <?php require("scripts.php"); ?>
        <script type="text/javascript">
        $(window).load(function (){
          $('#overlay').fadeOut();
        });
      </script>

    <?php require("footer.php"); ?>
  </body>
</html>