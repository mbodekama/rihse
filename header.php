<!-- VARIABLE IMPORTANTES -->

<?php
    $numerotel = "+225 07 07 09 11 51";
    // For PHP in Version < 7.4
        // $index = 0;
        // $about = 0;
        // $actualite = 0;
        // $domaine = 0;
        // $contact = 0;


?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fatory - Factory, Industrial & Construction Template">

    <!-- ========== Page Title ========== -->
    <title>RIHSE | Réseau Ivoirien des professionnels HSE</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
    
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
    

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-3 logo shape">
                    <a href="index.php">
                        <img src="assets/img/logo-light.png" class="logo" alt="Logo">
                    </a>
                </div>
                <div class="col-lg-9 info float-right text-right">
                    <div class="info box">
                        <ul class="list">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                Abidjan Cocody Rivera 2
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                aambeuflix@yahoo.fr
                            </li>
                            <li>
                                <i class="fas fa-phone-square"></i>
                                <?=$numerotel?>
                            </li>
                        </ul>
                        <ul class="social">
                            <li class="facebook">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li class="yahoo">
                                <a href="#"><i class="fab fa-yahoo"></i></a>
                            </li>
                            <li class="linkedin">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border logo-less small-pad navbar-sticky bootsnav">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                        
                        <li><a href="index.php" <?=$index?> >ACCUEIL</a></li>
                        <li><a href="about-us.php" <?=$about?> >A PROPOS</a></li>
                         <li>
                            <a href="actualite.php" <?=$actualite?>>ACTUALITE</a>
                        </li>
                        <li class="dropdown">
                            <a href="domaines.php" class="dropdown-toggle <?=$domaine?>" data-toggle="dropdown"  >DOMAINES</a>
                            <ul class="dropdown-menu">
                                <li><a href="hygiene.php">HYGIENE</a></li>
                                <li><a href="securite.php">SECURITE</a></li>
                                <li><a href="environnement.php">ENVIRONNEMENT</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="contact.php" <?=$contact?> >CONTACTS</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->