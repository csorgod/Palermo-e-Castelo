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
      <img src="img/atuacao/library.jpg" alt="Biblioteca" class="img-responsive">
    </div>

    <div class="row separator"></div>

    <div class="col-md-11 element-align">
      
      <div class="row">
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="administrativo"><img src="img/icons/ic-administrativo.png" alt="Administrativo" class="icon-style-blue" > Administrativo</a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="consumidor"><img src="img/icons/ic-direitoconsumidor.png" alt="Direito do Consumidor" class="icon-style-blue" > Direito do Consumidor</a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="societario"><img src="img/icons/ic-societario.png" alt="Societário" class="icon-style-blue" > Societário</a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="ambiental"><img src="img/icons/ic-ambiental.png" alt="Ambiental" class="icon-style-blue"> Ambiental</a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="internacional"><img src="img/icons/ic-internacional.png" alt="Direito Internacional" class="icon-style-blue"> Direito Internacional</a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="trabalhista"><img src="img/icons/ic-trabalhista.png" alt="Trabalhista" class="icon-style-blue"> Trabalhista</a>
        </div>        
      </div>

      <div class="row">
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="comercial"><img src="img/icons/ic-comercial.png" alt="Comercial" class="icon-style-blue"> Comercial</a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="imobiliaria"><img src="img/icons/ic-imobiliario.png" alt="Imobiliária" class="icon-style-blue"> Imobiliária</a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="tributario"><img src="img/icons/ic-tributario.png" alt="Tributário" class="icon-style-blue"> Tributário</a>
        </div>        
      </div>

      <div class="row">
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="contratual"><img src="img/icons/ic-contratual.png" alt="Contratual" class="icon-style-blue"> Contratual</a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="previdenciario"><img src="img/icons/ic-previdenciario.png" alt="Previdenciario" class="icon-style-blue"> Previdenciário</a>
        </div>
        <div class="col-md-4 espacing">
          
        </div>        
      </div>

      <div class="row">
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="civel"><img src="img/icons/ic-civel.png" alt="Cível" class="icon-style-blue"> Cível</a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="intelectual"><img src="img/icons/ic-intelectual.png" alt="Propriedade Intelectual" class="icon-style-blue"> Propriedade Intelectual</a>
        </div>
        <div class="col-md-4 espacing">
          
        </div>        
      </div> 
      
    </div>

    <div class="container">
      <div class="row box-adm" id="box-adm">
          <img src="img/loader.gif" id="loader" class="loader">
      </div>
    </div>

    <?php require("footer-contact.php"); ?>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/page-script.js"></script>

    <?php require("footer.php"); ?>

    <script type="text/javascript">
    $(window).load(function (){
      $('#overlay').fadeOut();
      $(document).ready( function () {
        $('.btn-load').click( function () {
          var get_url = this.id;
          get_url = 'atuacao-content/' + get_url + '.php';
          $.ajax({
            url: get_url,
            success: function(data){
              $('#box-adm').html(data);
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

  </body>
</html>