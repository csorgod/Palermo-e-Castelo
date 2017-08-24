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
    	<h1 class="title-style">QUEM SOMOS</h1>
    	<br />
    	<div class="col-md-9">
    		<p class="text"> 
    			Palermo e Castelo Advogados, escritório fundado em 1.990, com enfoque na atuação
				multidisciplinar, busca soluções jurídicas, originais e diferenciadas para o
				melhor atendimento aos interesses de seus clientes dentro de um ambiente de
				negócios em constante evolução e altamente flexível.
			</p>
			<br />
			<p class="text">
				A formação e a experiência dos sócios do escritório Palermo e Castelo Advogados
				permite o desenvolvimento de atividades diferenciadas, modernas e originais, com
				segurança, estabilidade, extensão e profundidade na multidisciplinaridade dos eventos
				analisados.
			</p>
			<br />
			<p class="text">
				Acompanhando a tendência mundial de profissionalização em Administração Legal,
				a sociedade investe em áreas voltadas à Tecnologia da Informação, Recursos Humanos,
				Finanças e Marketing, além de uma biblioteca cujo acervo possui mais de mil e
				duzentos títulos, contendo um sistema informatizado de arquivamento físico e
				eletrônico de documentos.
			</p>

    	</div>
    	<div class="col-md-3">
    		
    	</div>
    </div>
    <div class="row box-effect" id="history">
    	<h1 class="title-style">HISTÓRICO</h1>
    	<br />
    	<div class="col-md-3"></div>
    	<div class="col-md-9">
    		<p class="text">
    			O escritório Palermo & Castelo Advogados, fundado em 1.990, constitui uma
				sociedade que adquiriu ao longo do tempo ampla expertise na atuação
				multidisciplinar e desenvolveu profissionais competentes, estabelecendo relações
				sólidas com seus clientes.
    		</p>
    		<br />
    		<p class="text">
    			A parceria firmada entre Dr. Paulo Sérgio Gagliardi Palermo e Dr. Jorge Castelo
				proporcionou excelentes resultados e a conseqüente expansão das atividades dessa
				sociedade, agregando uma atuação mais ampla tanto na área contenciosa como na
				área de consultoria.
    		</p>
    		<br />
    		<p class="text">
    			Atualmente, a Sociedade se destaca por exercer suas atividades seguindo os mais
				modernos métodos e práticas da advocacia, com critérios de excelência e sempre
				orientada por uma postura ética, transparente e atenta às modificações do mercado.
    		</p>
    	</div>
    </div>
    <div class="row" id="mission">
    	<h1 class="title-style">MISSÃO, VISÃO E VALORES</h1>
    	<br />
    	<div class="col-md-9 padding-bottom">
    		<h2 class="sub-title">Missão</h4>
    		<p class="text">
    			Oferecer o melhor serviço, com ética e responsabilidade para a total satisfação dos
				clientes e dos nossos integrantes.
    		</p>
    		<h2 class="sub-title">Visão</h4>
    		<p class="text">
    			Ser a referência em escritório de advocacia com atuação multidisciplinar, inovadora
				e de alta performance.
    		</p>
    		<h2 class="sub-title">Valores</h4>
    		<p class="text">
    			-Ética e responsabilidade
			</p>
			<p class="text">
				-Assertividade
			</p>
			<p class="text">
				-Valorização das pessoas
			</p>
			<p class="text">
				-Pioneirismo e Inovação
    		</p>
    	</div>
    	<div class="col-md-3"></div>
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
            $('html,body').animate({ scrollTop: $('#<?php echo $_GET['target'];  ?>').offset().top - 100 }, 'slow');
        });
      </script>
    <?php require("footer.php"); ?>
  </body>
</html>