<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!doctype html>
<html><head>
        <meta charset="utf-8">
        <title>Accueil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="BERKOUN Nadir">

        <!-- Le styles -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/font-style.css" rel="stylesheet">
        <link href="assets/css/flexslider.css" rel="stylesheet">

        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

        <style type="text/css">
            body {
                padding-top: 60px;
            }
        </style>

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <!-- Google Fonts call. Font Used Open Sans & Raleway -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

        <script type="text/javascript">
            $(document).ready(function () {

                $("#btn-blog-next").click(function () {
                    $('#blogCarousel').carousel('next')
                });
                $("#btn-blog-prev").click(function () {
                    $('#blogCarousel').carousel('prev')
                });

                $("#btn-client-next").click(function () {
                    $('#clientCarousel').carousel('next')
                });
                $("#btn-client-prev").click(function () {
                    $('#clientCarousel').carousel('prev')
                });

            });

            $(window).load(function () {

                $('.flexslider').flexslider({
                    animation: "slide",
                    slideshow: true,
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });

        </script>
    </head>
    <body>


        <!-- NAVIGATION MENU -->

        <div class="navbar-nav navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index2.php"><img src="assets/img/logo30.png" alt=""> Panneau d'affichage</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index2.php"><i class="icon-home icon-white"></i> Accueil</a></li>
                        <li><a href="tables.php"><i class="icon-th icon-white"></i> Tableau</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div class="container">




 <!-- FIRST ROW OF BLOCKS -->
            <div class="row">

                <!-- USER PROFILE BLOCK -->
                <div class="col-sm-3 col-lg-3">
                    <div class="dash-unit">
                        <dtitle>User Profile</dtitle>
                        <hr>
                        <div class="thumbnail">
                            <img src="assets/img/face80x80.jpg" alt="Marcel Newman" class="img-circle">
                        </div><!-- /thumbnail -->
                        <h1>Marcel Newman</h1>
                        <h3>Madrid, Spain</h3>
                        <br>
                        <div class="info-user">
                            <span aria-hidden="true" class="li_user fs1"></span>
                            <span aria-hidden="true" class="li_settings fs1"></span>
                            <span aria-hidden="true" class="li_mail fs1"></span>
                            <span aria-hidden="true" class="li_key fs1"></span>
                        </div>
                    </div>
                </div>

                <!-- DONUT CHART BLOCK -->
                <div class="col-sm-3 col-lg-3">
                    <div class="dash-unit">
                        <dtitle>Site Bandwidth</dtitle>
                        <hr>
                        <div id="load"></div>
                        <h2>45%</h2>
                    </div>
                </div>

                <!-- DONUT CHART BLOCK -->
                <div class="col-sm-3 col-lg-3">
                    <div class="dash-unit">
                        <dtitle>Disk Space</dtitle>
                        <hr>
                        <div id="space"></div>
                        <h2>65%</h2>
                    </div>
                </div>

                <div class="col-sm-3 col-lg-3">

                    <!-- LOCAL TIME BLOCK -->
                    <div class="half-unit">
                        <dtitle>Local Time</dtitle>
                        <hr>
                        <div class="clockcenter">
                            <digiclock>12:45:25</digiclock>
                        </div>
                    </div>

                    <!-- SERVER UPTIME -->
                    <div class="half-unit">
                        <dtitle>Server Uptime</dtitle>
                        <hr>
                        <div class="cont">
                            <p><img src="assets/img/up.png" alt=""> <bold>Up</bold> | 356ms.</p>
                        </div>
                    </div>

                </div>
            </div><!-- /row -->








































                    </div> <!-- /container -->
        <div id="footerwrap">
            <footer class="clearfix"></footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <p><img src="assets/img/logo.png" alt=""></p>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /footerwrap -->


        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/lineandbars.js"></script>

        <script type="text/javascript" src="assets/js/dash-charts.js"></script>
        <script type="text/javascript" src="assets/js/gauge.js"></script>

        <!-- NOTY JAVASCRIPT -->
        <script type="text/javascript" src="assets/js/noty/jquery.noty.js"></script>
        <script type="text/javascript" src="assets/js/noty/layouts/top.js"></script>
        <script type="text/javascript" src="assets/js/noty/layouts/topLeft.js"></script>
        <script type="text/javascript" src="assets/js/noty/layouts/topRight.js"></script>
        <script type="text/javascript" src="assets/js/noty/layouts/topCenter.js"></script>

        <!-- You can add more layouts if you want -->
        <script type="text/javascript" src="assets/js/noty/themes/default.js"></script>
        <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
        <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
        <script src="assets/js/jquery.flexslider.js" type="text/javascript"></script>

        <script type="text/javascript" src="assets/js/admin.js"></script>

    </body></html>
