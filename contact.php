<?php $contact =  "class='active'" ?>

<?php  include 'header.php';?>




    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center" style="background-image: url(assets/img/Contact-Rihse.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <p style="text-align:center; font-size:37px">Qui sommes-nous</p>
                    <br>
                    <h1 style="font-size:60px">RIHSE</h1>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding">
        <!-- Fixed BG -->
        <div class="fixed-bg">
            <img src="assets/img/illustration/1.png" alt="Thumb">
        </div>
        <!-- End Fixed BG -->
        <div class="container">
            <div class="contact-items">
                <div class="row align-center">

                    <div class="col-lg-4 right-item">
                        <div class="info-items text-light">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <div class="info">
                                    <h5>Localisation</h5>
                                    <p>
                                        Abidjan Cocody Rivera 2
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <h5>APPELEZ NOUS</h5>
                                    <p>
                                        +225 07 07 09 11 51 <br> 
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <h5>NOTRE EMAIL</h5>
                                    <p>
                                         aambeuflix@yahoo.fr <br> 
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    
                    <div class="col-lg-8 left-item">
                        <div class="content">
                            <h2>Inscrivez vous </h2>
                            <form action="assets/mail/contact.php" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Nom complet" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Telephone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Commentaires *"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Envoyer <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
       

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15889.849154141908!2d-3.9844685811269978!3d5.346183352404804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ec8f2187b68f%3A0xb4823e2f6f9cdafb!2sRivi%C3%A9ra%202%2C%20Abidjan!5e0!3m2!1sfr!2sci!4v1644773203093!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->




<?php include 'footer.php'; ?>
