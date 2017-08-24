<?php 

	require_once("config.php");

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
    <div class="container">
      <div class="row">
        <h2 style="margin-left: 15px;">Dados de usuário</h2>
        <p style="margin-left: 15px;" class="text-left">Informe os dados de um usuário existente: </p>
      </div>
      <div class="col-md-4">
        <form method="post" action="new_user.php" id="formRegister">
          <div class="form-group">
            <label for="LOGIN">Login:</label>
            <input type="text" id="LOGIN" name="LOGIN" class="form-control" />
          </div>
          <div class="form-group">
            <label for="PSSWORD">Senha:</label>
            <input type="password" id="PSSWORD" name="PSSWORD" class="form-control" />
          </div>
          <p style="margin-left: -15px;" class="text-left">Dados do novo usuário: </p>
          <div class="form-group">
            <label for="LOGINNEW">Login:</label>
            <input type="text" id="LOGINNEW" name="LOGINNEW" class="form-control" />
          </div>
          <div class="form-group">
            <label for="PSSWORDNEW">Senha:</label>
            <input type="password" id="PSSWORDNEW" name="PSSWORDNEW" class="form-control" />
          </div>
          <input type="submit" style="float: right;" value="Login" class="btn btn-primary" id="submit">
        </form>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>