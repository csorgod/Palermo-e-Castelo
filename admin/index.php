<?php 

	require_once("config.php");
  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
  $created = isset($_GET['created']) ? $_GET['created'] : 0; 
  $exit = isset($_GET['exit']) ? $_GET['exit'] : 0; 
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administração</title>

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
        <?php
          if($exit == 1){
            $_SESSION = array();
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }
          }
        ?>
    <div class="container" style="margin-top: 15px;">
    <?php 
          if($erro == 3){
            echo '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Login Necessário!
             </div>';
          } else if($erro == 4){
            echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              Erro ao autenticar.
           </div>';
          }
     ?>
      <div class="row">
        <h2 style="margin-left: 15px;">Área restrita</h2>
      </div>
	    <div class="row jumbotron">
	    	<div class="col-md-4">
		    	 <form method="post" action="login.php" id="formLogin">
  				 	<div class="form-group">
  				 		<label for="LOGIN">Login:</label>
  				 		<input type="text" id="LOGIN" name="LOGIN" class="form-control" />
  				 	</div>
  				 	<div class="form-group">
  				 		<label for="PSSWORD">Senha:</label>
  				 		<input type="password" id="PSSWORD" name="PSSWORD" class="form-control" />
  				 	</div>
  				 	<input type="submit" style="float: right;" value="Login" class="btn btn-primary" id="submit">
				 </form>
	    	</div>
        <div class="col-md-8">
          <img src="../img/logo.png" alt="logo da Palermo e Castelo" style="float: right;">
        </div>
	    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>