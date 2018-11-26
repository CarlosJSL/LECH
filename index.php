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
    <link rel="stylesheet" type="text/css" media="screen" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/popper.js/dist/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="./node_modules/bootstrap/dist/js/bootstrap.min.js" />
    <link href="assets/css/bootstrap/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap/jquery.lineProgressbar.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/bootstrap/magnific-popup.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Node Modules Bootstrap core CSS -->
</head>

<body style="background-color: #e8e8e8">

    <div class="preloader">
        <img class="preloader-img" src="view/images/any/preload.gif" />
    </div>

    <!-- Navbar -->
    <?php include 'includes/navbar.php' ?>
    <!-- Navbar End  -->

    <?php
        switch($_GET['page']) {
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
    <?php include 'includes/footer.php' ?>

<!-- ###################################### JS ###################################### -->
    <script src = "js/map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCy2Eckah-aiMh0NL3_XVJlAALZcMs5iLQ&callback=initMap" type="text/javascript"></script>
</body>
</html>