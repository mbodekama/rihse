


    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light" id="myFooter">
        <!-- Footer Top -->
        <div class="footer-top text-center bg-dark text-light">
            <div class="container">
                <div class="row align-center">
                    <div class="logo col-lg-3 text-left">
                        <a href="#"><img src="assets/img/logo-light.png" alt="Logo"></a>
                    </div>
                    <?php 
                    if (isset($_POST['sendMail'])) {
                        
                        // Echo sweelalert
                        //Hide the input box
                      

                    }else
                    {
                        ?>
                                        <div class="subscribe-form col-lg-6">
                                            <form action="#myFooter" method="POST">
                                                <input type="email" name="email" class="form-control" placeholder="Prenez rendez rendez-vous">
                                                <button type="submit" name="sendMail"><i class="fa fa-paper-plane"></i></button>  
                                            </form>
                                        </div>
                        <?php
                    }

                    ?>

                    <div class="col-lg-3 phone text-right">
                        <h4><i class="fas fa-phone"></i><?=$numerotel ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->

        <div class="container">
            <div class="f-items default-padding">
                <div class="row">

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="f-item contact">
                            <h4 class="widget-title">CONTACTEZ NOUS</h4>
                            <p>
                                09 BP 4103 Abidjan 09
                            </p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Côte d'Ivoire, Abidjan, Cocody, Riviera 2
                                </li>
                                <li>
                                    <i class="fas fa-envelope-open"></i>
                                    aambeuflix@yahoo.fr
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-2 col-md-6 single-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Services</h4>
                            <ul>
                                <li>
                                    <a href="hygiene.php">HYGIENE</a>
                                </li>
                                <li>
                                    <a href="securite.php">SECURITE</a>
                                </li>
                                <li>
                                    <a href="environnement.php">ENVIRONNEMENT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-2 col-md-6 single-item">
                        <div class="f-item link">
                            <h4 class="widget-title">LIENS UTILES</h4>
                            <ul>
                                <li>
                                    <a href="index.php">ACCEUIL</a>
                                </li>
                                <li>
                                    <a href="contact.php">CONTACTS</a>
                                </li>
                                <li>
                                    <a href="actualite.php">ACTUALITE</a>
                                </li>
                                <li>
                                    <a href="domaines.php">COMPETENCES</a>
                                </li>
                                <li>
                                    <a href="about-us.php">A PROPOS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="f-item opening-hours">
                            <h4 class="widget-title">Horaires d'ouvertures</h4>
                            <ul>
                                <li> 
                                    <span>lun - Ven :  </span>
                                    <div class="float-right"> 9.00 - 18.00</div>
                                </li>
                                <li> 
                                <li> 
                                    <span>Sam - Dim :</span>
                                    <div class="float-right"> Uniquement sur rendez-vous</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Fixed Shape -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright <?=date('m/Y')?>. Tous droits reservé. Conçut par <a href="https://unsitepro.com" target="_blank">UNSITEPRO</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->

        <div class="fixed-shape">
            <img src="assets/img/shape/3.svg" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>