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

            <!-- Home Carousel -->
            <div id="home-carousel" class="carousel carousel-home slide" data-ride="carousel" data-interval="5000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="active item">
                        <section class="site-section site-section-light site-section-top themed-background-dark-default">
                            <div class="container">
                                <h1 class="text-center animation-slideDown hidden-xs"><strong>Traducción especializada</strong></h1>
                                <h2 class="text-center animation-slideUp push hidden-xs">
                                 Hacemos traducciones de documentos de español a inglés e inglés a español. Estos pueden ser o no certificados.</h2>
                                <p class="text-center animation-fadeIn">
                                    <img src="img/placeholders/screenshots/traducciones.jpg" alt="Promo Image 1">
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="item">
                        <section class="site-section site-section-light site-section-top themed-background-dark-fire">
                            <div class="container">
                                <h1 class="text-center animation-fadeIn360 hidden-xs"><strong>Traducciones legales</strong></h1>
                                <h2 class="text-center animation-fadeIn360 push hidden-xs">Traducciones de documentos legales certificados por peritos
autorizados por el Tribunal Superior de Justicia del Distrito Federal</h2>
                                <p class="text-center animation-fadeInLeft">
                                    <img src="img/placeholders/screenshots/legales.jpg" alt="Promo Image 2">
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="item">
                        <section class="site-section site-section-light site-section-top themed-background-dark-amethyst">
                            <div class="container">
                                <h1 class="text-center animation-hatch hidden-xs"><strong>Subtitulos</strong></h1>
                                <h2 class="text-center animation-hatch push hidden-xs">Envianos tu video para agregar subtitulos en español e ingles</h2>
                                <p class="text-center animation-hatch">
                                    <img src="img/placeholders/screenshots/subtitulo.jpg" alt="Promo Image 3">
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="item">
                        <section class="site-section site-section-light site-section-top themed-background-dark-modern">
                            <div class="container">
                                <h1 class="text-center animation-fadeInLeft hidden-xs"><strong>Interprete en el momento</strong></h1>
                                <h2 class="text-center animation-fadeInRight push hidden-xs">¿Tienes una junta con algún extranjero y no lograste prepararte?  contáctanos</h2>
                                <p class="text-center animation-fadeIn360">
                                    <img src="img/placeholders/screenshots/interprete.jpg" alt="Promo Image 4">
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- END Wrapper for slides -->

                <!-- Controls -->
                <a class="left carousel-control" href="#home-carousel" data-slide="prev">
                    <span>
                        <i class="fa fa-chevron-left"></i>
                    </span>
                </a>
                <a class="right carousel-control" href="#home-carousel" data-slide="next">
                    <span>
                        <i class="fa fa-chevron-right"></i>
                    </span>
                </a>
                <!-- END Controls -->
            </div>
            <!-- END Home Carousel -->

            <!-- Action -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="site-block text-center">
                        <a href="http://goo.gl/TDOSuC" class="btn btn-lg btn-success"><i class="fa fa-shopping-cart"></i> Purchase ProUI ($20)</a>
                        <a href="http://pixelcave.com/demo/proui" class="btn btn-lg btn-primary"><i class="fa fa-share"></i> Live Preview</a>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Action -->

            <!-- Promo #1 -->
            <section class="site-content site-section site-slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                            <img src="img/placeholders/screenshots/promo_desktop_left.png" alt="Promo #1" class="img-responsive">
                        </div>
                        <div class="col-sm-6 col-md-5 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                            <h3 class="h2 site-heading site-heading-promo"><strong>Clean and Modern</strong> Design</h3>
                            <p class="promo-content">ProUI is a professional, modern and solid foundation for your next awesome project. It comes packed with great features that you will love. <a href="features.html">Learn More..</a></p>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Promo #1 -->

            <!-- Promo #2 -->
            <section class="site-content site-section site-slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-5 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                            <h3 class="h2 site-heading site-heading-promo"><strong>Powerful</strong> Admin Template</h3>
                            <p class="promo-content">ProUI has a powerful and flexible layout to meet every need. It comes packed with 9 awesome and fresh color themes that you will love, too. <a href="features.html">Learn More..</a></p>
                        </div>
                        <div class="col-sm-6 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                            <img src="img/placeholders/screenshots/promo_desktop_right.png" alt="Promo #2" class="img-responsive">
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Promo #2 -->

            <!-- Promo #3 -->
            <section class="site-content site-section site-slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                            <img src="img/placeholders/screenshots/promo_tablet.png" alt="Promo #3" class="img-responsive">
                        </div>
                        <div class="col-sm-6 col-md-5 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                            <h3 class="h2 site-heading site-heading-promo"><strong>Fully</strong> Responsive</h3>
                            <p class="promo-content">The User Interface will just work in mobile phones, tablets, laptops and desktops. You can focus on creating the project you want. <a href="features.html">Learn More..</a></p>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Promo #3 -->

            <!-- Promo #4 -->
            <section class="site-content site-section site-slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-5 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                            <h3 class="h2 site-heading site-heading-promo"><strong>Mobile</strong> First</h3>
                            <p class="promo-content">The layout adjusts as we move up from mobile devices to large desktop screens and not the other way around. This speed things up a lot. <a href="features.html">Learn More..</a></p>
                        </div>
                        <div class="col-sm-6 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                            <img src="img/placeholders/screenshots/promo_mobile.png" alt="Promo #4" class="img-responsive">
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Promo #4 -->

            <!-- Testimonials -->
            <section class="site-content site-section">
                <div class="container">
                    <!-- Testimonials Carousel -->
                    <div id="testimonials-carousel" class="carousel slide carousel-html" data-ride="carousel" data-interval="4000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                            <li data-target="#testimonials-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- END Indicators -->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner text-center">
                            <div class="active item">
                                <p>
                                    <img src="img/placeholders/avatars/avatar12.jpg" alt="Avatar" class="img-circle">
                                </p>
                                <blockquote class="no-symbol">
                                    <p>An awesome team that brought our ideas to life! Highly recommended!</p>
                                    <footer><strong>Sophie Illich</strong>, example.com</footer>
                                </blockquote>
                            </div>
                            <div class="item">
                                <p>
                                    <img src="img/placeholders/avatars/avatar7.jpg" alt="Avatar" class="img-circle">
                                </p>
                                <blockquote class="no-symbol">
                                    <p>I have never imagined that our final product would look that good!</p>
                                    <footer><strong>David Cull</strong>, example.com</footer>
                                </blockquote>
                            </div>
                            <div class="item">
                                <p>
                                    <img src="img/placeholders/avatars/avatar9.jpg" alt="Avatar" class="img-circle">
                                </p>
                                <blockquote class="no-symbol">
                                    <p>An extraordinary service that helped us grow way too fast!</p>
                                    <footer><strong>Nathan Brown</strong>, example.com</footer>
                                </blockquote>
                            </div>
                        </div>
                        <!-- END Wrapper for slides -->
                    </div>
                    <!-- END Testimonials Carousel -->
                </div>
            </section>
            <!-- END Testimonials -->

            <!-- Sign Up Action -->
            <section class="site-content site-section site-section-light themed-background-dark-night">
                <div class="container">
                    <h3 class="site-heading text-center"><strong>Sign Up Today</strong> and receive <strong>30% discount</strong>!</h3>
                    <div class="site-block text-center">
                        <form action="features.html" method="post" class="form-horizontal" onsubmit="return false;">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <label class="sr-only" for="register-email">Your Email</label>
                                    <div class="input-group input-group-lg">
                                        <input type="email" id="register-email" name="register-email" class="form-control" placeholder="Your Email..">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- END Sign Up Action -->

            <!-- Quick Stats -->
            <section class="site-content site-section themed-background">
                <div class="container">
                    <!-- Stats Row -->
                    <!-- CountTo (initialized in js/app.js), for more examples you can check out https://github.com/mhuggins/jquery-countTo -->
                    <div class="row" id="counters">
                        <div class="col-sm-4">
                            <div class="counter site-block">
                                <span data-toggle="countTo" data-to="6800" data-after="+"></span>
                                <small>Projects</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter site-block">
                                <span data-toggle="countTo" data-to="5500" data-after="+"></span>
                                <small>Happy Customers</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter site-block">
                                <span data-toggle="countTo" data-to="100" data-after="+"></span>
                                <small>New Accounts Today</small>
                            </div>
                        </div>
                    </div>
                    <!-- END Stats Row -->
                </div>
            </section>
            <!-- END Quick Stats -->

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
    </body>
</html>