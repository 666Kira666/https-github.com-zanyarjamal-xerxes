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

    	<!-- Bootstrap -->
      <link rel="stylesheet" href="<?=assets('template/css/bootstrap.css')?>">
    <!-- end Google Font -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,300" rel='stylesheet' type='text/css'>
    <link href="<?=assets('http://fonts.googleapis.com/css?family=Oswald:400,500,600,700,800,300')?>" rel='stylesheet' type='text/css'>
    <!-- owl carousel SLIDER -->
    <link rel="stylesheet" href="<?=assets('template/css/owl.carousel.css')?>">
    <!-- end awesome icons -->
    <link rel="stylesheet" href="<?=assets('template/csscss/font-awesome.css')?>">
    <!-- lightbox -->
    <link href="<?=assets('template/csscss/prettyPhoto.css')?>" rel="stylesheet">
    
    <!-- Animation Effect CSS -->
    <link rel="stylesheet" href="<?=assets('template/css/animation.css')?>">
    <!-- Main Stylesheet CSS -->
    <link rel="stylesheet" href="<?=assets('template/style.css')?>">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom" class="blog-main">



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

        <!--/Header SECTION -->
        <header class="header" id="whiteheader">
        <div class="container">
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                           <a href="index.html" class="navbar-brand">ATLAS <br> <span class="blogo">CREATIVE <span></a>
                    </div><!-- end navbar-header -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                        <li><a data-scroll href="<?=route('rpp/home.html')?>" class="int-collapse-menu">Principal</a></li>
                        <li><a data-scroll href="<?=route('usrlog')?>" class="int-collapse-menu">Usuários</a></li>
                        <li><a data-scroll href="<?=route('/tccbanco/usrcoment')?>" class="int-collapse-menu">comentários</a></li>
                        <li><a data-scroll href="<?=route('migrate.php')?>" class="int-collapse-menu">Banco</a></li>
                        <li><a data-scroll href="<?=route('autenticacao/logout')?>" class="int-collapse-menu">Logout</a></li>
                        <li><a data-scroll href="<?=route('admpostagem')?>" class="int-collapse-menu">Postar</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>
        </div><!-- end container -->
    </header><!-- end header -->

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
