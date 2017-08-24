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
              <h3>Lorem Lorem</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>

          <div class="item">
            <img src="img/carousel_002.jpg" alt="Corredor iluminado">
            <div class="carousel-caption">
              <h3>Lorem Lorem</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>

          <div class="item">
              <img src="img/carousel_003.jpg" alt="Sala de reunião">
              <div class="carousel-caption">
                <h3>Lorem Lorem</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
    <div class="row separator">
    
  </div>
  <div class="row body-background">
    <div class="container">
      <div class="row">
        <div class="col-md-12 div-center">
          <div class="col-md-6 box-content-company">
            <img class="img-details" alt="A Empresa" src="img/Predio.png">
            <h4 class="title-details">A EMPRESA</h4>
            <p class="text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="btn btn-default">Saiba Mais</button>
          </div>
          <div class="col-md-6 box-content-actuation">
            <img class="img-details" alt="Atuação" src="img/reuniao.png">
            <h4 class="title-details">ATUAÇÃO</h4>  
            <p class="text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="btn btn-default">Saiba Mais</button>
          </div>
          <div class="col-md-6 box-content-lawyers">
            <img class="img-details" alt="Publicações e eventos" src="img/balanca.png">
            <h4 class="title-details">ADVOGADOS</h4>  
            <p class="text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="btn btn-default">Saiba Mais</button>
          </div>
        </div>
      </div>

      <div class="row">
        <h2 class="titles" style="">CONTATO</h2>
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
    });
  });
  </script>

  <?php require("footer.php"); ?>
  
  </body>
</html>