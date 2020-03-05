<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Classificados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Classificados</a>
     </div>
        
   <ul class="nav navbar-nav navbar-right">
      <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
      <li><a href="meus-anuncios.php"><span class="glyphicon glyphicon-bullhorn"></span>Meus Anúncios</a></li>

      <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"></span> Sair </a></li>

    <?php else: ?>
      <li><a href="cadastre-se.php"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <?php endif; ?>
    </ul>
  </div>