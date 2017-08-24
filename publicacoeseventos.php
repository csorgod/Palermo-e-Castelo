<!DOCTYPE html>
<html lang="pt-br">
    <?php require("window-loader.html"); ?>
    <?php require("header.php"); ?>
  <body class="body-background">
    <?php require("menu.php"); ?>

    <div class="row filter-div">
      <div class="col-md-7 img-side">
        <img src="img/livraria.jpg" alt="Livraria" class="img-responsive">
      </div>
      <div class="col-md-5 padding-top">
          <h3>FILTROS</h3>

          <form method="post" action="search.php">
            <div class="form-group">
              <select class="select-custom">
                <option value="" disabled selected>POR CONTEÚDO</option>
                <option value="conteudo">CONTEÚDO 1</option>
              </select>
            </div>
            <div class="form-group">
              <select class="select-custom">
                <option value="" disabled selected>POR ADVOGADO</option>
                <option value="advogado">ADVOGADO 1</option>
              </select>
            </div>
            <div class="form-group">
              <select class="select-custom">
                <option value="" disabled selected>ÁREAS DE ATUAÇÃO</option>
                <option value="atuacao">ATUAÇÃO 1</option>
              </select>
            </div>
            <div class="form-group">
              <select class="select-custom">
                <option value="" disabled selected>TIPO</option>
                <option value="tipo">TIPO 1</option>
              </select>
            </div>
            <div class="form-group">
              <select class="select-custom">
                <option value="" disabled selected>ANO</option>
                <option value="ano">ANO 1</option>
              </select>
            </div>
            <div class="form-group">
              <select class="select-custom">
                <option value="" disabled selected>MÊS</option>
                <option value="mes">MÊS 1</option>
              </select>
            </div>
            <button type="submit" class="btn-custom-filter" id="submit-button">ENVIAR</button>
          </form>
      </div>
    </div>
    <div class="row separator"></div>
    <div class="container">
      <div class="row div-cards">
        <h3>Publicações</h3>
        <!-- Conteúdo dinâmico aqui -->
        <?php include("card.php"); ?>
        <?php include("card.php"); ?>
        <?php include("card.php"); ?>
        <?php include("card.php"); ?>
      </div>
    </div>

    <?php require("footer-contact.php"); ?>
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