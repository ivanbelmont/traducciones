<!DOCTYPE html>
<?php 

Include "funciones.php";

?>
 <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        

        <meta name="description" content="ProUI Frontend is a Responsive Bootstrap Site Template created by pixelcave and added as a bonus in ProUI Admin Template package which is published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
       <?php 

        Librerias();


        ?>
    </head>
    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!-- 'boxed' class for a boxed layout -->
        <div id="page-container">
            <!-- Site Header -->
            <header>
               <?php 

               principalMenu();

               ?>
            </header>
            <!-- END Site Header -->

            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                    <h1 class="text-center animation-slideDown"><i class="fa fa-envelope"></i> <strong>Contact Us</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">We will be happy to answer all your questions and work together!</h2>
                </div>
            </section>
            <!-- END Intro -->

            <!-- Google Map -->
            <section class="site-content">
                <!-- Gmaps.js (initialized in js/pages/contact.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html -->
                <div id="gmap"></div>
            </section>
            <!-- END Google Map -->

            <!-- Support Links -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row row-items text-center">
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="gi gi-life_preserver"></i>
                            </a>
                            <h4>Open a <strong>ticket</strong></h4>
                        </div>
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="gi gi-envelope"></i>
                            </a>
                            <h4><strong>Email</strong> Us</h4>
                        </div>
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="fa fa-comments"></i>
                            </a>
                            <h4><strong>Chat</strong> Live</h4>
                        </div>
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <h4><strong>Tweet</strong> Us</h4>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Support Links -->

            <!-- Contact -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 site-block">
                            <div class="site-block">
                                <h3 class="h2 site-heading"><strong>Company</strong> Inc</h3>
                                <address>
                                    Address<br>
                                    Town/City<br>
                                    Region, Zip/Postal Code<br><br>
                                    <i class="fa fa-phone"></i> (000) 000-0000<br>
                                    <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">example@example.com</a>
                                </address>
                            </div>
                            <div class="site-block">
                                <h3 class="h2 site-heading"><strong>About</strong> Us</h3>
                                <p class="remove-margin">
                                    In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-8 site-block">
                            <h3 class="h2 site-heading"><strong>Contact</strong> Form</h3>
                            <form action="contact.html#form-contact" method="post" id="form-contact">
                                <div class="form-group">
                                    <label for="contact-name">Name</label>
                                    <input type="text" id="contact-name" name="contact-name" class="form-control input-lg" placeholder="Your name..">
                                </div>
                                <div class="form-group">
                                    <label for="contact-email">Email</label>
                                    <input type="text" id="contact-email" name="contact-email" class="form-control input-lg" placeholder="Your email..">
                                </div>
                                <div class="form-group">
                                    <label for="contact-message">Message</label>
                                    <textarea id="contact-message" name="contact-message" rows="10" class="form-control input-lg" placeholder="Let us know how we can assist.."></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Contact -->

            <!-- Footer -->
            <footer class="site-footer site-section">
                <?php footer(); ?>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/helpers/gmaps.min.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/contact.js"></script>
        <script>$(function(){ Contact.init(); });</script>
    </body>
</html>