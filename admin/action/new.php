<?php 

	session_start();
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }
	require_once('../classes/DAO.php');
  	require_once("../config.php");

  	$dao = new DAO();

  	$result = $dao->select("SELECT TXT_NAME FROM TB_ADVOGADOS ORDER BY ID_LAWYER DESC", Array());

 ?>

<form method="post" action="action/new_publication.php" id="formNewPublication">
	<div class="form-group">
	    <label for="description">Descrição:</label>
	    <input type="text" id="description" name="description" maxlength="64" class="form-control" />
  	</div>
  		<div class="form-group">
	      <select class="form-control" id="category" name="category" style="width: 150px;">
		    <option>Evento</option>
		    <option>Publicação</option>
		    <option>Notícia</option>
		    <option>Novidade</option>
		  </select>
  	</div>
  		<div class="form-group">
	    <label for="content">Conteúdo:</label>
	    <textarea id="content" name="content" class="form-control" rows="5" maxlength="500" placeholder="Max: 500 Caracteres" ></textarea>
  	</div>
  	<div class="form-group">
	  <label for="sel1">Advogado (Opcional):</label>
	  <select class="form-control" id="selectLawyer" name="selectLawyer" style="width: 150px;">
	  			<option disabled selected value>Selecione</option>
	  <?php foreach ($result as $lawyer) { ?>
	  		    <option><?php echo $lawyer['TXT_NAME']; ?></option>
	  <?php } ?>

	  </select>
	</div>
  	<div class="form-group" style="float:right;">
  		<input type="button" name="cancel" class="btn btn-danger" id="cancel" value="Cancelar" />
  		<input type="submit" name="submit" class="btn btn-success" id="submit" value="Adicionar" />
  	</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$("input:text").change(function(){
			if($("#description").val() != "" && $("#description").val() != null){
				$("#description").css("border", "2px solid green");
			}else{
				$("#description").css("border", "2px solid red");
			}
		});
		$("select").change(function(){
  			$("#category").css("border", "2px solid green");
   		});
   		$("#content").change(function(){
			if($("#content").val() != "" && $("#content").val() != null){
				$("#content").css("border", "2px solid green");
			}else{
				$("#content").css("border", "2px solid red");
			}
   		});
   		$( "#formNewPublication" ).submit(function( event ) {
		  if($("#description").val() == "" || $("#description").val() == null || $("#content").val() == "" || $("#content").val() == null){
		  	alert("Algum campo não foi preenchido. Cheque os campos e tente novamente!");
		  	event.preventDefault();	
		  }else{
		  	$( "#formNewPublication" ).submit();
		  }
		  
		});
	});
</script>