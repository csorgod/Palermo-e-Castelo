<!DOCTYPE html>
<html lang="pt-br">
  <div id="overlay">
       <img src="img/loader.gif" alt="Loading" class="img-loader"/>
       <h3 style="text-align: center;">Carregando</h3>
  </div>
    <?php require("header.php"); ?>
  <body class="body-background">
    <?php require("menu.php"); ?>

    <div clas="container">
      <div class="row lawyers">
        <?php require("multi-item-carousel.php"); ?>
      </div>
    </div>

      <?php require("scripts.php"); ?>
      <script type="text/javascript">
        $(window).load(function (){
          $('#overlay').fadeOut();
        });
      </script>
    <?php require("footer.php"); ?>
  </body>
</html>