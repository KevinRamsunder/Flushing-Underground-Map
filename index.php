<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Underground Flushing Food</title>
    <?php
        include('./lib/functions.php');
        include('./lib/sample.php');
    ?>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/featured.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
    <!-- Mapbox Source Files -->
    <script src='https://api.tiles.mapbox.com/mapbox.js/v2.2.1/mapbox.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox.js/v2.2.1/mapbox.css' rel='stylesheet' />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Underground Flushing</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#map" onclick = $("#menu-close").click(); >Map</a>
            </li>
            <li>
                <a href="#restaurants" onclick = $("#menu-close").click(); >Restaurants</a>
            </li>
            <li>
                <a href="#flushingchamber" onclick = $("#menu-close").click(); >Flushing Chamber</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Underground Flushing Food Map</h1>
            <h3>Discover the food of Flushing, Queens.</h3>
            <br>
            <a href="#map" class="btn btn-dark btn-lg">View the Map</a>
            <a href="#restaurants" class="btn btn-dark btn-lg">View the Restaurants</a>
        </div>
    </header>

    <!-- Map -->            
    <div id="map"></div>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->

    <div id="restaurants">
    <div id="test">
    <section id="featured" class="block equal-height">
                    <div class="container">
                        <header><h2>Featured</h2></header>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="item">
                                    <div class="image">
                                        <a href="http://www.yelp.com/biz/golden-shopping-mall-flushing" target="_blank">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <div class="content">
                                                        <h4>Description</h4>
                                                        <p>Small stalls and foods like dumplings and noodles fill this tiny basement.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="./img/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="wrapper">
                                        <a href="http://www.yelp.com/biz/golden-shopping-mall-flushing" target="_blank"><h3>Golden Shopping Mall</h3></a>
                                        <figure>41-28 Main Street</figure>
                                        <div class="info">
                                            <div class="type">
                                                <i><img src="./img/restaurant.png" alt=""></i>
                                                <span>Restaurant</span>
                                            </div>
                                            <div class="type">
                                                    <i><?php echo getRating('golden-shopping-mall-flushing');?></i>
                                            </div>
                                            <div class="type">
                                                    <i><?php echo getRatingCount('golden-shopping-mall-flushing');?></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.item-->
                            </div>
                            <!--/.col-sm-4-->
                            <div class="col-md-3 col-sm-3">
                                <div class="item">
                                    <div class="image">
                                        <a href="http://www.yelp.com/biz/new-world-mall-food-court-flushing" target="_blank">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <div class="content">
                                                        <h4>Description</h4>
                                                        <p>The mall features an exciting food court in the lower level with over 32 different American and Ethnic food vendors.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="./img/2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="wrapper">
                                        <a href="http://www.yelp.com/biz/new-world-mall-food-court-flushing" target="_blank"><div class="row"><h3>New World Mall Food Court</h3></a></div>
                                        <figure>136-20 Roosevelt Avenue</figure>
                                        <div class="info">
                                            <div class="type">
                                                <i><img src="./img/restaurant.png" alt=""></i>
                                                <span>Restaurant</span>
                                            </div>
                                            <div class="type">
                                                    <i><?php echo getRating('new-world-mall-food-court-flushing');?></i>
                                            </div>
                                            <div class="type">
                                                    <i><?php echo getRatingCount('new-world-mall-food-court-flushing');?></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.item-->
                            </div>
                            <!--/.col-sm-4-->
                            <div class="col-md-3 col-sm-3">
                                <div class="item">
                                        <div class="image">
                                            <a href="http://www.yelp.com/biz/nan-xiang-dumpling-house-flushing" target="_blank">
                                                <div class="overlay">
                                                    <div class="inner">
                                                        <div class="content">
                                                            <h4>Description</h4>
                                                            <p>This Chinese restaurant is famous for their pork soup dumplings.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="./img/3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="wrapper">
                                            <a href="http://www.yelp.com/biz/nan-xiang-dumpling-house-flushing" target="_blank"><div class="row"><h3>Nan Xiang Dumpling House</h3></a></div>
                                            <figure>38-12 Prince Street</figure>
                                            <div class="info">
                                                <div class="type">
                                                    <i><img src="./img/restaurant.png" alt=""></i>
                                                    <span>Restaurant</span>
                                                </div>
                                                 <div class="type">
                                                    <i><?php echo getRating('nan-xiang-dumpling-house-flushing');?></i>
                                                </div>
                                                <div class="type">
                                                    <i><?php echo getRatingCount('nan-xiang-dumpling-house-flushing');?></i>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                                <!-- /.item-->
                            <!--/.col-sm-4-->
                            <!--/.col-sm-4-->
                            <div class="col-md-3 col-sm-3">
                                <div class="item">
                                        <div class="image">
                                            <a href="http://www.yelp.com/biz/joes-shanghai-flushing" target="_blank">
                                                <div class="overlay">
                                                    <div class="inner">
                                                        <div class="content">
                                                            <h4>Description</h4>
                                                            <p>Special dishes includes Spicy Szechuan Style Sliced Beef and Crispy Jumbo Prawns with Lime Sauce.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="./img/4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="wrapper">
                                            <a href="http://www.yelp.com/biz/joes-shanghai-flushing" target="_blank"><h3>Joe’s Shanghai</h3></a>
                                            <figure>136-21 37th Avenue</figure>
                                            <div class="info">
                                                <div class="type">
                                                    <i><img src="./img/restaurant.png" alt=""></i>
                                                    <span>Restaurant</span>
                                                </div>
                                                <div class="type">
                                                    <i><?php echo getRating('joes-shanghai-flushing');?></i>
                                                </div>
                                                <div class="type">
                                                    <i><?php echo getRatingCount('joes-shanghai-flushing');?></i>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                                <!-- /.item-->
                                <!-- /.item-->
                            <!--/.col-sm-4-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.container-->
                    <div class="background opacity-10">
                        <img src="./img/flushing.jpg" alt="">
                    </div>
                </section></div></div>


    <div id="flushingchamber">
        <div id="test">
            <section id="popular" class="block background-color-white">
                <div class="container">
                    <header><h2>Contact Us</h2></header>
                    <div class="owl-carousel wide carousel">
                        <div class="slide">
                            <div class="inner">
                                <div class="image">
                                    <img src="./img/callout1.jpg">
                                </div>
                                <div class="wrapper">
                                    <a href="http://flushingchamber.nyc/" target="_blank"><h3>Greater Flushing Chamber of Commerce</h3></a>
                                    <figure>
                                        <i class="fa fa-map-marker"></i>
                                        <span>The Chamber of Commerce Building, 39-01 Main Street, Suite 511, Flushing NY 11354</span>
                                    </figure>
                                    <p>The Greater Flushing Chamber of Commerce is the collective voice that represents and advocates for the needs of the diverse business and civic community of greater Flushing. We seek to foster the economic growth, inclusive diversity, and shared prosperity of greater Flushing through advocacy, networking, and mutual aid.</p>
                                    <a href="http://flushingchamber.nyc/" target="_blank" class="read-more icon">Learn More</a>
                                </div>
                            </div>
                        </div>
                </div>
                <br><br>
                <div id="contact" class="owl-carousel wide carousel">
                        <div class="slide">
                            <div class="inner">
                                <div class="image">
                                    <img src="./img/callout2.jpg">
                                </div>
                                <div class="wrapper">
                                    <a href="http://quic.nyc/" target="_blank"><h3>Queens College Tech Incubator</h3></a>
                                    <figure>
                                        <i class="fa fa-map-marker"></i>
                                        <span>65-30 Kissena Boulevard Flushing, NY 11367</span>
                                    </figure>
                                    <p>The Incubator seeks to carry forward the mission of the college by attracting high tech business to campus and giving them access to the diverse and talented students, staff and faculty of the college. It is the ambititon of the incubator to reflect the tremendous diversity and resoucefulnees of the many ethnic communities of Queens itself.</p>
                                    <a href="http://quic.nyc/" target="_blank" class="read-more icon">Learn More</a>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Callout
    <aside class="callout" id="flushingchamber">
        <div class="text-vertical-center">
            <a href="http://flushingchamber.nyc/" target="_blank">
                <h1>Flushing Chamber of Commerce</h1>
            </a>
        </div>
    </aside>
    -->

    <!-- Not in use

    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>

            </div>

        </div>

    </section>


    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside> -->

    <!-- Footer -->
    <!--
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Queens College Tech Incubator</strong>
                    </h4>
                    <p>65-30 Kissena Boulevard<br>Flushing, NY 11367</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:info@quic.nyc">info@quic.nyc</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/pages/Queens-College-Tech-Incubator/651083375025310"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/QCTechIncubator"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Queens College Tech Incubator 2015</p>
                </div>
            </div>
        </div>
    </footer>
    -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
    
    <!-- Mapbox -->
    <script>
        L.mapbox.accessToken = 'pk.eyJ1IjoiYXJ5YW5qYWJiYXJpIiwiYSI6IjJhMGM3Y2VjZGU2ZjRhZTVjZGRkYjYzMzI4MmMzMDNiIn0.kZlSR_oToMC4VOmNCIfIfg';
        var map = L.mapbox.map('map', 'aryanjabbari.cb525595', { zoomControl: false});
        
        var featureLayer = L.mapbox.featureLayer()
        .loadURL('geojson.geojson')
        .addTo(map);

        map.scrollWheelZoom.disable();
        map.touchZoom.disable();
        map.dragging.disable();
    </script>

</body>

</html>
