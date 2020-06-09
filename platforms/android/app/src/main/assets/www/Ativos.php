<?php
  $data = new DateTime();
  $data = $data->format('Y-d-m'); 
  $data_from = date("y-m-d",strtotime(date("Y-m-d")."-2 days"));
  $data_to = date("y-m-d",strtotime(date("Y-m-d")."-1 day"));

  $url = "https://api.covid19api.com/country/Brazil?from=20".$data_from."T00:00:00Z&to=20".$data_to."T00:00:00Z";
  $ch = curl_init($url); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
  $casos = json_decode(curl_exec($ch));

               // echo "<pre>"; print_r($casos); 

  foreach ($casos as $linha){
    $Ativos      = $linha->Active;
    $confirmados = $linha->Confirmed;
    $mortes      = $linha->Deaths;
    $recuperados = $linha->Recovered;
    $data_casos  = $linha->Date;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Slick - Bootstrap 4 Template</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  
  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">    
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php">Casos Covid 19</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="Ativos.php">Nro de Casos Ativos</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="Confirmados.php">Nro de Casos Confirmados</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="Recuperados.php">Nro de Casos Recuperados</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="Mortes.php">Nro de Mortes</a>
              </li>   
              <li class="nav-item">
                <a class="nav-link page-scroll" href="Prevencao.php">Medidas de prevenção</a>
              </li>      
              <li class="nav-item">
                <a class="nav-link page-scroll" href="Sobre.php">Sobre o App</a>
              </li>     
            </ul>
          </div>
        </div>
      </nav> 
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Numero de Ativos: <br><?php echo $Ativos ?></h2>
              <p>Dados referentes a data: <?php echo date("d/m/Y", strtotime($data_casos)) ?></p>
              </br>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 p-0">
            <div class="intro-img">
              <img src="img/COVID.png" alt="">
            </div>            
          </div>
        </div> 
      </div>             
    </header>
    <!-- Header Section End --> 

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>      
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/nivo-lightbox.js"></script>     
    <script src="js/jquery.magnific-popup.min.js"></script>      
    <script src="js/main.js"></script>
    
  </body>
</html>