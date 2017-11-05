<?php 

    session_start();
    if(!$_SESSION['USER']){
        header('Location: index.php?erro=3');
        $id = session_id();
    }

    require_once('classes/DAO.php');
    require_once("config.php");

    $user_id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Alterar senha</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php require_once("admin_navbar.php"); ?>
    <div class="container">
            <div class="row">
                <h3>Alterar senha</h3>
            </div>
            <div class="col-md-4">
                 <form method="post" action="user/password_reset.php" id="formReset">
                 <input type="hidden" name="id" id="id" value="<?php echo "$user_id"; ?>" />
                    <div class="form-group">
                        <label for="pssword">Nova senha:</label>
                        <input type="password" id="pssword" name="pssword" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="confirmPssword">Confirmar Senha:</label>
                        <input type="password" id="confirmPssword" name="confirmPssword" class="form-control" />
                    </div>
                    <input type="submit" style="float: right;" value="Login" class="btn btn-primary" id="submit">
                 </form>
            </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( "#formReset" ).submit(function( event ) {
              if($("#pssword").val() == "" || $("#confirmPssword").val() == ""){
                alert("Algum campo não foi preenchido. Cheque os campos e tente novamente!");
                event.preventDefault(); 
              }else{
                if($("#pssword").val() != $("#confirmPssword").val()){
                    alert("As senhas precisam ser iguais!");
                    $("#pssword").css("border", "2px solid red");
                    $("#confirmPssword").css("border", "2px solid red");
                    event.preventDefault(); 
                }else{
                    if($("#pssword").val().length < 8){
                        alert("O valor fornecido para a senha é insuficiente. Utilize 8 caracteres, no mínimo");
                        event.preventDefault(); 
                    }else{
                        $( "#formReset" ).submit();
                    }
                    
                }
              }
              
            });
        });
    </script>
  </body>
</html>