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
      <img src="img/atuacao/library.jpg" alt="Biblioteca" class="img-responsive">
    </div>

    <div class="row separator"></div>

    <div class="col-md-11 element-align">
      
      <div class="row">
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="administrativo"><img src="img/icons/ic-administrativo.png" alt="Administrativo" class="icon-style-blue" > 
          <?php echo $lang['atuacao_administrator'] ?></a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="consumidor"><img src="img/icons/ic-direitoconsumidor.png" alt="Direito do Consumidor" class="icon-style-blue" > <?php echo $lang['atuacao_customer'] ?></a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="societario"><img src="img/icons/ic-societario.png" alt="Societário" class="icon-style-blue" > <?php echo $lang['atuacao_societary'] ?></a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="ambiental"><img src="img/icons/ic-ambiental.png" alt="Ambiental" class="icon-style-blue"> <?php echo $lang['atuacao_environmental'] ?></a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="internacional"><img src="img/icons/ic-internacional.png" alt="Direito Internacional" class="icon-style-blue"> <?php echo $lang['atuacao_international'] ?></a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="trabalhista"><img src="img/icons/ic-trabalhista.png" alt="Trabalhista" class="icon-style-blue"> <?php echo $lang['atuacao_labor'] ?></a>
        </div>        
      </div>

      <div class="row">
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="comercial"><img src="img/icons/ic-comercial.png" alt="Comercial" class="icon-style-blue"> <?php echo $lang['atuacao_commercial'] ?></a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="imobiliaria"><img src="img/icons/ic-imobiliario.png" alt="Imobiliária" class="icon-style-blue"> <?php echo $lang['atuacao_realstate'] ?></a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="tributario"><img src="img/icons/ic-tributario.png" alt="Tributário" class="icon-style-blue"> <?php echo $lang['atuacao_tax'] ?></a>
        </div>        
      </div>

      <div class="row">
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="contratual"><img src="img/icons/ic-contratual.png" alt="Contratual" class="icon-style-blue"> <?php echo $lang['atuacao_contractual'] ?></a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="previdenciario"><img src="img/icons/ic-previdenciario.png" alt="Previdenciario" class="icon-style-blue"> <?php echo $lang['atuacao_social_security'] ?></a>
        </div>
        <div class="col-md-4 espacing">
          
        </div>        
      </div>

      <div class="row">
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="civel"><img src="img/icons/ic-civel.png" alt="Cível" class="icon-style-blue"> <?php echo $lang['atuacao_civil'] ?></a>
        </div>
        <div class="col-md-4 espacing">
          <a href="#box-adm" class="text-vertical-center btn-load" id="intelectual"><img src="img/icons/ic-intelectual.png" alt="Propriedade Intelectual" class="icon-style-blue"> <?php echo $lang['atuacao_intellectual_property'] ?></a>
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
    <?php require("scripts.php"); ?>
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
    <?php require("footer.php"); ?>

    

  </body>
</html>