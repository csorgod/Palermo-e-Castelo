<!DOCTYPE html>
<html lang="pt-br">
  <div id="overlay">
       <img src="img/loader.gif" alt="Loading" class="img-loader"/>
       <h3 style="text-align: center;">Carregando</h3>
  </div>
    <?php require("header.php"); ?>
  <body class="body-background">
    <?php require("menu.php"); ?>

    <div class="row">
      <img src="img/img-contato.png" alt="Contato" class="img-responsive img-contato">
    </div>
    <div class="row separator" style="margin-bottom: 100px; height: 2px;"></div>
    <?php require("menu-contato.php"); ?>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/page-script.js"></script>
      <script type="text/javascript">
        $(window).load(function (){
          $('#overlay').fadeOut();
        });
      </script>

    <?php require("footer.php"); ?>
  </body>
</html>