<?php 

	session_start();
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }
	require_once('../classes/DAO.php');
  	require_once("../config.php");

 ?>

<form method="post" action="user/new_user.php" id="formNewUser">
	<div class="form-group">
	    <label for="user">Usuário:</label>
	    <input type="text" id="user" name="user" class="form-control" />
  	</div>
	<div class="form-group">
	    <label for="password">Senha:</label>
	    <input type="password" id="password" name="password" class="form-control" />
  	</div>
  		<div class="form-group">
	    <label for="confirmPassword">Confirmar Senha:</label>
	    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" />
  	</div>
  	<div class="form-group" style="float:right;">
  		<input type="button" name="cancel" class="btn btn-danger" id="cancel" value="Cancelar" />
  		<input type="submit" name="submit" class="btn btn-success" id="submit" value="Adicionar" />
  	</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$("#user").change(function(){
			if($("#user").val() != "" && $("#user").val() != null){
				$("#user").css("border", "2px solid green");
			}else{
				$("#user").css("border", "2px solid red");
			}
		});
		$("#password").change(function(){
			if($("#password").val() != "" && $("#password").val() != null){
				$("#password").css("border", "2px solid green");
			}else{
				$("#password").css("border", "2px solid red");
			}
		});
   		$("#confirmPassword").change(function(){
			if($("#confirmPassword").val() != "" && $("#confirmPassword").val() != null){
				$("#confirmPassword").css("border", "2px solid green");
			}else{
				$("#confirmPassword").css("border", "2px solid red");
			}
   		});
   		$( "#formNewUser" ).submit(function( event ) {
		  if($("#user").val() == "" || $("#password").val() == null || $("#confirmPassword").val() == ""){
		  	alert("Algum campo não foi preenchido. Cheque os campos e tente novamente!");
		  	event.preventDefault();	
		  }else{
		  	if($("#password").val() != $("#confirmPassword").val()){
				alert("As senhas precisam ser iguais!");
				$("#password").css("border", "2px solid red");
				$("#confirmPassword").css("border", "2px solid red");
				event.preventDefault();	
		  	}else{
		  		$( "#formNewUser" ).submit();
		  	}
		  }
		  
		});
	});
</script>