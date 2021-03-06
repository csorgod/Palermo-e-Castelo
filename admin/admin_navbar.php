<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home_admin.php">Administração</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="admin_publicacoes.php">Publicações e eventos</a></li>
      <li><a href="admin_advogados.php">Advogados</a></li>
      <li><a href="admin_usuarios.php">Usuários</a></li>
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Formulários <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="admin_newsletter.php">Newsletter</a></li>
            <li><a href="admin_contato.php">Contato</a></li>
          </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo ucfirst($_SESSION['USER']) ?> </a></li>
        <li><a href="index.php?exit=1"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
</div>
</nav>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
