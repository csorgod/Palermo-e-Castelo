<?php 

	session_start();
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }
	require_once('../classes/DAO.php');
  	require_once("../config.php");

 ?>

<form method="post" action="lawyer/new_lawyer.php" id="formNewPublication" enctype="multipart/form-data">
	<div class="form-group">
	    <label for="name">Nome Completo:</label>
	    <input type="text" id="name" name="name" maxlength="64" class="form-control" placeholder="Max: 64 Caracteres" />
  	</div>
	<div class="form-group">
	    <label for="age">Idade:</label>
	    <input type="number" id="age" name="age" max="100" class="form-control" placeholder="Ex: 30" />
  	</div>
	<div class="form-group">
	    <label for="description">Breve descrição:</label>
	    <input type="text" id="description" name="description" maxlength="25" class="form-control" placeholder="Max: 25 Caracteres" />
  	</div>
	<div class="form-group">
	    <label for="atuation">Atuação:</label>
	    <textarea id="atuation" name="atuation" class="form-control" maxlength="800" rows="3" placeholder="Max: 800 Caracteres" ></textarea>
  	</div>
	<div class="form-group">
	    <label for="experience">Experiência:</label>
	    <textarea id="experience" name="experience" class="form-control" maxlength="800" rows="3" placeholder="Max: 800 Caracteres" ></textarea>
  	</div>
	<div class="form-group">
	    <label for="graduacao">Graduação:</label>
	    <textarea id="graduacao" name="graduacao" class="form-control" maxlength="800" rows="3" placeholder="Max: 800 Caracteres" ></textarea>
  	</div>
	<div class="form-group">
	    <label for="language">Idiomas:</label>
	    <textarea id="language" name="language" class="form-control" maxlength="500" rows="3" placeholder="Max: 500 Caracteres" ></textarea>
  	</div>
	<div class="form-group">
	    <label for="email">E-mail:</label>
	    <input type="email" id="email" name="email" class="form-control" maxlength="64" placeholder="exemplo@dominio.com.br">
  	</div>
	<div class="form-group">
	    <label for="tel">Fixo:</label>
	    <input type="tel" id="tel" name="tel" class="form-control" maxlength="20" placeholder="(11) 9999-9999">
  	</div>
	<div class="form-group">
	    <label for="cel">Celular:</label>
	    <input type="cel" id="cel" name="cel" class="form-control" maxlength="20" placeholder="(11) 99999-9999">
  	</div>
  	<div class="form-group">
  		<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
  		<label for="image" class="image-text" style="padding: 5px 15px; border: 1px solid #cecece; border-radius: 5px;">Carregar imagem</label>
  		<input type="file" name="image" id="image" onchange="getFileName()" style="display: none;" />
  		<small>Tamanho padrão: 1174x1372 com 300dpi de resolução.</small>
  	</div>
  	<div class="form-group" style="float:right;">
  		<input type="button" name="cancel" class="btn btn-danger" id="cancel" value="Cancelar" />
  		<input type="submit" name="submit" class="btn btn-success" id="submit" value="Adicionar" />
  	</div>
</form>

<script type="text/javascript">
  $(document).ready(function(){
    $("#name").change(function(){
      if($("#name").val() != "" && $("#name").val() != null){
        $("#name").css("border", "1px solid green");
      }else{
        $("#name").css("border", "1px solid red");
      }
    });
      $("#age").change(function(){
      if($("#age").val() != "" && $("#age").val() != null){
        $("#age").css("border", "1px solid green");
      }else{
        $("#age").css("border", "1px solid red");
      }
      });
      $("#description").change(function(){
      if($("#description").val() != "" && $("#description").val() != null){
        $("#description").css("border", "1px solid green");
      }else{
        $("#description").css("border", "1px solid red");
      }
      });
      $("#atuation").change(function(){
      if($("#atuation").val() != "" && $("#atuation").val() != null){
        $("#atuation").css("border", "1px solid green");
      }else{
        $("#atuation").css("border", "1px solid red");
      }
      });
      $("#experience").change(function(){
      if($("#experience").val() != "" && $("#experience").val() != null){
        $("#experience").css("border", "1px solid green");
      }else{
        $("#experience").css("border", "1px solid red");
      }
      });
      $("#graduacao").change(function(){
      if($("#graduacao").val() != "" && $("#graduacao").val() != null){
        $("#graduacao").css("border", "1px solid green");
      }else{
        $("#graduacao").css("border", "1px solid red");
      }
      });
      $("#language").change(function(){
      if($("#language").val() != "" && $("#language").val() != null){
        $("#language").css("border", "1px solid green");
      }else{
        $("#language").css("border", "1px solid red");
      }
      });
    $("#email").change(function(){
      if($("#email").val() != "" && $("#email").val() != null){
        $("#email").css("border", "1px solid green");
      }else{
        $("#email").css("border", "1px solid red");
      }
      });
      $("#tel").change(function(){
      if($("#tel").val() != "" && $("#tel").val() != null){
        $("#tel").css("border", "1px solid green");
      }else{
        $("#tel").css("border", "1px solid red");
      }
      });
      $("#cel").change(function(){
      if($("#cel").val() != "" && $("#cel").val() != null){
        $("#cel").css("border", "1px solid green");
      }else{
        $("#cel").css("border", "1px solid red");
      }
      });
    
    function getFileName() {
          if ($('#image').val() != '') {
              var fileName = $('#image').val().split('\\').pop();
                  $('.image-text').text("'" + fileName + "' carregado com sucesso.");
          } else {
              $('.image-text').text("Nenhum arquivo carregado!");
          }
       }
       
       $('#image').on("change", getFileName);
        $( "#formNewPublication" ).submit(function( event ) {
          if($("#name").val() == "" || $("#name").val() == null){
            alert("O nome não foi corretamente preenchido. Cheque todos campos e tente novamente!");
            $("#name").css("border", "1px solid green");
            event.preventDefault(); 
          } else if ($('#age').val() == "" || $('#age').val() == 0 || $('#age').val() > 100){
            alert("A idade não foi corretamente preenchida. Cheque todos campos e tente novamente!");
            $("#age").css("border", "1px solid green");
            event.preventDefault(); 
          } else if ($('#description').val() == "" || $('#description').val() == null){
            alert("A descrição não foi corretamente preenchida. Cheque todos campos e tente novamente!");
            $("#description").css("border", "1px solid green");
            event.preventDefault(); 
          } else if($('#atuation').val() == "" || $('#atuation').val() == null){
            alert("A atuação não foi corretamente preenchida. Cheque todos campos e tente novamente!");
            $("#atuation").css("border", "1px solid green");
            event.preventDefault(); 
          } else if ($('#experience').val() == "" || $('#experience').val() == null){
            alert("A experiência não foi corretamente preenchida. Cheque todos campos e tente novamente!");
            $("#experience").css("border", "1px solid green");
            event.preventDefault(); 
          } else if($('#graduacao').val() == "" || $('#graduacao').val() == null){
            alert("A graduação não foi corretamente preenchida. Cheque todos campos e tente novamente!");
            $("#graduacao").css("border", "1px solid green");
            event.preventDefault(); 
          } else if($('#language').val() == "" || $('#language').val() == null){
            alert("Os idiomas não foi corretamente preenchidos. Cheque todos campos e tente novamente!");
            $("#language").css("border", "1px solid green");
            event.preventDefault(); 
          } else if($('#email').val() == "" || $('#email').val() == null){
            alert("O e-mail não foi corretamente preenchido. Cheque todos campos e tente novamente!");
            $("#email").css("border", "1px solid green");
            event.preventDefault();       
          } else if($('#tel').val() == "" || $('#tel').val() == null){
            alert("O telefone não foi corretamente preenchido. Cheque todos campos e tente novamente!");
            $("#tel").css("border", "1px solid green");
            event.preventDefault(); 
          } else if($('#cel').val() == "" || $('#cel').val() == null){
            alert("O celular não foi corretamente preenchido. Cheque todos campos e tente novamente!");
            $("#cel").css("border", "1px solid green");
            event.preventDefault(); 
          } else{
            $( "#formNewPublication" ).submit();
          }
        });  
  });
</script>
