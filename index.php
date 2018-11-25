<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LECH</title>
    
    <!-- Personal style CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap/jquery.lineProgressbar.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/bootstrap/magnific-popup.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Node Modules Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./node_modules/bootstrap/dist/js/bootstrap.min.js" />
</head>

<body style="background-color: #e8e8e8">

        <div class="preloader">
            <img class="preloader-img" src="view/images/any/preload.gif" />
        </div>

        <!-- Navbar -->
        <?php include 'includes/navbar.php' ?>
        <!-- Navbar End  -->

        <?php
        switch($_GET['page']){
            	case 'home':
            	   include 'includes/home.php';
            	   break;
            	case 'olech':
            	   include 'includes/olech.php';
            	   break;
            	case 'ensino':
                include 'includes/ensino.php';
            	   break;
            case 'pesquisa':
                include 'includes/pesquisa.php';
                break;
            	case 'publicacoes':
            	   include 'includes/publicacoes.php';
            	   break;
            	case 'galeria':
            	   include 'includes/galeria.php';
            	   break;
            	case 'contato':
            	   include 'includes/contato.php';
            	   break;
             default:
            	   include 'includes/initial.php';
            	   break;
            }
            ?>

        <!-- Footer -->
        <?php include 'includes/footer.php' ?>
        <!-- Footer End -->
<!--
        <nav class="navbar navbar-expand-lg text-center">
        <div class="container text-center">
          <a class="navbar-brand text-center" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto mx-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lech"> Lech</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lech"> Ensino </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lech"> Pesquisa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lech"> Publicações </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lech"> Galeria</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div id="app"></div>

        <footer class="footer navbar-fixed-bottom">s</footer>

-->

<!-- ###################################### JS ###################################### -->
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCs6_DQBH230AV6t9T-NBIwcqfJOLNKssc"type="text/javascript"></script>
      <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    	<script src="./node_modules/popper.js/dist/popper.min.js"></script>
	    <script src="js/route.js"></script>
	    <script src="js/router.js"></script>
	    <script src="js/app.js"></script>

    </body>
</html>