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
    <?php require("window-loader.html"); ?>
    <?php require("header.php"); ?>
  <body class="body-background">
    <?php require("menu.php"); ?>

    <div class="row office-intro">
		<div class="col-md-6 no-padding-right">
			<img src="img/recepcao.jpg" alt="Recepção Palermo e Castelo" class="img-resizable">
    	</div>
    	
    </div>
    <div class="row separator"></div>
    <div class="row" id="aboutUs">
    	<h1 class="title-style"><?php echo $lang['escritorio_aboutus_title'] ?></h1>
    	<br />
    	<div class="col-md-12">
    		<p class="text"> 
    			<?php echo $lang['escritorio_aboutus_text1'] ?>
			</p>
			<br />
			<p class="text">
				<?php echo $lang['escritorio_aboutus_text2'] ?>
			</p>
			<br />
			<p class="text">
				<?php echo $lang['escritorio_aboutus_text3'] ?>
			</p>

    	</div>
    </div>
    <div class="row box-effect" id="history">
    	<h1 class="title-style"><?php echo $lang['escritorio_history_title'] ?></h1>
    	<br />
    	<div class="col-md-12">
            <img src="img/timeline.png" alt="Linha do tempo">
    	</div>
    </div>
    <div class="row" id="mission">
    	<h1 class="title-style"><?php echo $lang['escritorio_mission_title_main'] ?></h1>
    	<br />
    	<div class="col-md-9 padding-bottom">
    		<h2 class="sub-title"><?php echo $lang['escritorio_mission_title1'] ?></h4>
    		<p class="text">
    			<?php echo $lang['escritorio_mission_text1'] ?>
    		</p>
    		<h2 class="sub-title"><?php echo $lang['escritorio_mission_title1'] ?></h4>
    		<p class="text">
    			<?php echo $lang['escritorio_mission_text2'] ?>
    		</p>
    		<h2 class="sub-title"><?php echo $lang['escritorio_mission_title1'] ?></h4>
    		<p class="text">
    			<?php echo $lang['escritorio_mission_text3'] ?>
			</p>
			<p class="text">
				<?php echo $lang['escritorio_mission_text4'] ?>
			</p>
			<p class="text">
				<?php echo $lang['escritorio_mission_text5'] ?>
			</p>
			<p class="text">
				<?php echo $lang['escritorio_mission_text6'] ?>
    		</p>
    	</div>
    	<div class="col-md-3"></div>
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