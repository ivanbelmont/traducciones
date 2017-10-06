<?php 

include "config.php";


function Librerias()
{
	echo '<title>Servicio Traduccion</title>';

	echo '<!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="'.ASSETS.'css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="'.ASSETS.'css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="'.ASSETS.'css/main.css">

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="'.ASSETS.'css/themes.css">
        <!-- END Stylesheets -->
        <script src="'.ASSETS.'js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>';
}

function principalMenu(){


	echo ' <div class="container">
                    <!-- Site Logo -->
                    <a href="index.php" class="site-logo">
                        <i class="gi gi-flash"></i> <strong>Traduccion</strong>ES
                    </a>
                    <!-- Site Logo -->

                    <!-- Site Navigation -->
                    <nav>
                        <!-- Menu Toggle -->
                        <!-- Toggles menu on small screens -->
                        <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- END Menu Toggle -->

                        <!-- Main Menu -->
                        <ul class="site-nav">
                            <!-- Toggles menu on small screens -->
                            <li class="visible-xs visible-sm">
                                <a href="javascript:void(0)" class="site-menu-toggle text-center">
                                    <i class="fa fa-times"></i>
                                </a>
                            </li>
                            <!-- END Menu Toggle -->
                            <li class="active">
                                <a href="index.php" >Inicio</a>
                               
                            <li>
                                <a href="about.php">Nosotros</a>
                              
                            </li>
                            <li>
                                <a href="features.php">Servicios</a>
                            </li>
                            <li>
                                <a href="pricing.php">Cotización</a>
                            </li>
                            <li>
                                <a href="contact.php">Contacto</a>
                            </li>
                            <li>
                                <a href="about.php">Procedimientos</a>
                            </li>
                        </ul>
                        <!-- END Main Menu -->
                    </nav>
                    <!-- END Site Navigation -->
                </div>';
}

function footer(){

	echo '<div class="container">
                    <!-- Footer Links -->
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">About Us</h4>
                            <ul class="footer-nav list-inline">
                                <li><a href="about.html">Company</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="contact.html">Support</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">Legal</h4>
                            <ul class="footer-nav list-inline">
                                <li><a href="javascript:void(0)">Licensing</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">Follow Us</h4>
                            <ul class="footer-nav footer-nav-social list-inline">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading"><span id="year-copy">2014</span> &copy; <a href="http://goo.gl/TDOSuC">ProUI Frontend</a></h4>
                            <ul class="footer-nav list-inline">
                                <li>Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I">pixelcave</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Footer Links -->
                </div>';
}

?>