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

  try {
    $result = $dao->select("SELECT * FROM TB_PUBLICACOES_E_EVENTOS ORDER BY DT_CREATED DESC", Array());
  } catch (Exception $e) {
    echo $e->getMessage();
  }

 ?>

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
          <h3 style="margin-bottom: 15px;"><?php echo $lang['publicacoeseventos_title_filter'] ?></h3>

          <form method="post" action="search.php">
            <div class="form-group">
              <select class="select-custom" name="conteudo">
                <option value="null" disabled selected><?php echo $lang['publicacoeseventos_filter_content'] ?></option>
                <option value="conteudo">CONTEÚDO 1</option>
              </select>
            </div>
            <div class="form-group">
              <select class="select-custom"  name="advogado">
                <option value="null" disabled selected><?php echo $lang['publicacoeseventos_filter_lawyer'] ?></option>
                <option value="advogado">ADVOGADO 1</option>
              </select>
            </div>
            <div class="form-group">
              <select class="select-custom"  name="atuacao">
                <option value="null" disabled selected><?php echo $lang['publicacoeseventos_filter_actuation'] ?></option>
                <option value="atuacao">ATUAÇÃO 1</option>
              </select>
            </div>
            <div class="form-group">
              <select class="select-custom"  name="tipo">
                <option value="null" disabled selected><?php echo $lang['publicacoeseventos_filter_type'] ?></option>
                <option value="tipo">TIPO 1</option>
              </select>
            </div>
            <div class="form-group">
              <select class="select-custom" name="ano">
                <option value="null" disabled selected><?php echo $lang['publicacoeseventos_filter_year'] ?></option>
                <option value="ano">ANO 1</option>
              </select>
            </div>
            <div class="form-group">
              <select class="select-custom" name="mes">
                <option value="null" disabled selected><?php echo $lang['publicacoeseventos_filter_month'] ?></option>
                <option value="mes">MÊS 1</option>
              </select>
            </div>
            <button type="submit" class="btn-custom-filter" id="submit-button"><?php echo $lang['publicacoeseventos_button_send'] ?></button>
          </form>
      </div>
    </div>
    <div class="row separator"></div>
    <div class="container">
      <div class="row div-cards">
        <h3><?php echo $lang['publicacoeseventos_title_publications'] ?></h3>
        <!-- Conteúdo dinâmico aqui -->
      <?php foreach($result as $row){
        $createDate = new DateTime($row['DT_CREATED']); ?>
          <div class="card">
            <p class="card-date"> <?php echo date_format($createDate, 'd/m/Y'); ?>  </p><span> <?php echo $row['TXT_TYPE']; ?> </span>
            <p class="card-title"><?php echo $row['TXT_DESCRIPTION']; ?></p>
            <p class="card-resume"> <?php echo $row['TXT_CONTENT']; ?></p>
            <hr />
          </div>
        <?php } ?>  

      </div>
    </div>

    <?php require("footer-contact.php"); ?>
    <?php require("scripts.php"); ?>
      <script type="text/javascript">
        $(window).load(function (){
          $('#overlay').fadeOut();
        });
      </script>
    <?php require("footer.php"); ?>
  </body>
</html>