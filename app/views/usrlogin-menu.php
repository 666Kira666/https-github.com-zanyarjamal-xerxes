<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Simples</title>

    <link rel="stylesheet" href="<?=assets('bootstrap/css/bootstrap.min.css')?>" />
    <script src="<?=assets('bootstrap/js/bootstrap.bundle.min.js')?>" ></script>
    <script src="<?=assets('js/imask.js')?>" ></script>
    <script src="<?=assets('js/main.js')?>" ></script>
    <link rel="stylesheet" href="<?=assets('css/estilo.css')?>" />
</head>
<body class="text-light bg-dark">

<!-- MENU -->

<!-- MENU -->
<nav class="navbar navbar-expand-lg text-light bg-secondary">
  <div class="container-fluid text-light bg-secondary">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    #só exibirá o menu caso esteja logado
    if (isset($_SESSION['user'])):
    ?>


    <div class="collapse navbar-collapse text-light bg-secondary" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?=route('/rpp/home.html')?>">Página Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=route('usrcadastro')?>">Cadastrar-se</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=route('usrcoment')?>">Comentários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=route('autenticacao/logout')?>">Logout</a>
        </li>
      </ul>
    </div>

    <?php endif; ?>

  </div>
</nav>


<div class="container">

<?php

if (getFlash("success")){
    print "<div class='alert alert-success' role='alert'>".getFlash("success")."</div>";
} else
if (getFlash("error")){
    print "<div class='alert alert-danger' role='alert'>".getFlash("error")."</div>";
}

?>
