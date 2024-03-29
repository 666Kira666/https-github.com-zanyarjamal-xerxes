<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="klinger/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?=assets('klinger/css/styles.css')?>" rel="stylesheet" />


        <link rel="stylesheet" href="<?=assets('klinger/bootstrap/css/bootstrap.min.css')?>" />
        <script src="<?=assets('klinger/bootstrap/js/bootstrap.bundle.min.js')?>" ></script>
        <script src="<?=assets('js/imask.js')?>" ></script>
        <script src="<?=assets('js/main.js')?>" ></script>

        <link rel="stylesheet" href="<?=assets('klinger/css/estilo.css')?>" />

    <style>
    #comments-container {
      max-width: 600px;
      margin: auto;
    }
    #comment-form {
      margin-top: 20px;
    }
  </style>

</head>
<body class="">

<!-- MENU -->

<!-- MENU -->
<nav class="navbar navbar-expand-lg text-light bg-warning">
  <div class="container-fluid text-light bg-warning">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    #só exibirá o menu caso esteja logado
    if (isset($_SESSION['user'])):
    ?>


    <div class="collapse navbar-collapse text-light bg-warning" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="<?=route('indexx')?>">Página Principal</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?=route('login')?>">Login</a>
        </li>
        <li class="nav-item">  
        <a class="nav-link" href="<?=route('usrlog')?>">Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=route('/tccbanco/usrcoment')?>">Comentários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=route('/tccbanco/resposta')?>">Resposta</a>
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
