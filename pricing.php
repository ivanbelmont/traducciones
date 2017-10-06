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
                    <h1 class="text-center animation-slideDown"><i class="fa fa-thumbs-up"></i> <strong>Flexible Plans</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">Affordable pricing for everyone! We want <strong>you</strong> to get the <strong>best deal</strong>!</h2>
                </div>
            </section>
            <!-- END Intro -->

            <!-- Plans -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="site-block">
                        <div class="row">
                            <div class="col-sm-3">
                                <!-- You can add the class 'table-featured' to feature the best plan. In this case, make sure to remove the hover functionality from js/pages/pricing.js -->
                                <table class="table table-borderless table-pricing animation-fadeIn">
                                    <thead>
                                        <tr>
                                            <th class="table-featured">Personal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>2</strong> Projects</td>
                                        </tr>
                                        <tr>
                                            <td><strong>10GB</strong> Storage</td>
                                        </tr>
                                        <tr>
                                            <td><strong>15</strong> Clients</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email</strong> Support</td>
                                        </tr>
                                        <tr>
                                            <td class="table-price">
                                                <h1>$9<br><small>per month</small></h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-3">
                                <!-- You can add the class 'table-featured' to feature the best plan. In this case, make sure to remove the hover functionality from js/pages/pricing.js -->
                                <table class="table table-borderless table-pricing animation-fadeIn">
                                    <thead>
                                        <tr>
                                            <th class="table-featured"><i class="fa fa-check"></i> Business</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>10</strong> Projects</td>
                                        </tr>
                                        <tr>
                                            <td><strong>30GB</strong> Storage</td>
                                        </tr>
                                        <tr>
                                            <td><strong>100</strong> Clients</td>
                                        </tr>
                                        <tr>
                                            <td><strong>FULL</strong> Support</td>
                                        </tr>
                                        <tr>
                                            <td class="table-price">
                                                <h1>$39<br><small>per month</small></h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-3">
                                <!-- You can add the class 'table-featured' to feature the best plan. In this case, make sure to remove the hover functionality from js/pages/pricing.js -->
                                <table class="table table-borderless table-pricing animation-fadeIn">
                                    <thead>
                                        <tr>
                                            <th class="table-featured">VIP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>50</strong> Projects</td>
                                        </tr>
                                        <tr>
                                            <td><strong>100GB</strong> Storage</td>
                                        </tr>
                                        <tr>
                                            <td><strong>1000</strong> Clients</td>
                                        </tr>
                                        <tr>
                                            <td><strong>FULL</strong> Support</td>
                                        </tr>
                                        <tr>
                                            <td class="table-price">
                                                <h1>$99<br><small>per month</small></h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-3">
                                <!-- You can add the class 'table-featured' to feature the best plan. In this case, make sure to remove the hover functionality from js/pages/pricing.js -->
                                <table class="table table-borderless table-pricing animation-fadeIn">
                                    <thead>
                                        <tr>
                                            <th class="table-featured">Pro</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Unlimited</strong> Projects</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Unlimited</strong> Storage</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Unlimited</strong> Clients</td>
                                        </tr>
                                        <tr>
                                            <td><strong>FULL</strong> Support</td>
                                        </tr>
                                        <tr>
                                            <td class="table-price">
                                                <h1>$199<br><small>per month</small></h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Plans -->

            <!-- Testimonials -->
            <section class="site-content site-section">
                <div class="container">
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
                    <hr>
                </div>
            </section>
            <!-- END Testimonials -->

            <!-- Extra Info -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="site-block">
                        <h3 class="site-heading text-center"><strong>All Plans</strong> Include</h3>
                        <div class="row push-bit">
                            <div class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
                                <ul class="fa-ul ul-breath">
                                    <li><i class="fa fa-check text-primary fa-li"></i> Free updates for life</li>
                                    <li><i class="fa fa-check text-primary fa-li"></i> Premium documentation</li>
                                    <li><i class="fa fa-check text-primary fa-li"></i> Premium back up features</li>
                                </ul>
                            </div>
                            <div class="col-sm-5 col-md-4">
                                <ul class="fa-ul ul-breath">
                                    <li><i class="fa fa-check text-primary fa-li"></i> 100% Uptime</li>
                                    <li><i class="fa fa-check text-primary fa-li"></i> US, Europe & Asia Locations</li>
                                    <li><i class="fa fa-check text-primary fa-li"></i> One year access to our asset library</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="javascript:void(0)" class="btn btn-lg btn-primary"><i class="fa fa-angle-right"></i> Sign Up Now <i class="fa fa-angle-left"></i> </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Extra Info -->

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

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/pricing.js"></script>
        <script>$(function(){ Pricing.init(); });</script>
    </body>
</html>