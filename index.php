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

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">

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
            <h1 style="font-family: montBold; text-transform:uppercase; color:#fff; font-size:4.74em; margin-bottom: -15px; margin-top: -50px;">Underground</h1>
            <h1 style="font-family: montReg; text-transform:uppercase; color:#fff; font-size:3.6em;">Flushing Food Map</h1>
            <br>
            <a href="#map" class="btn btn-dark btn-lg">View the Map</a>
            <a href="#restaurants" class="btn btn-dark btn-lg">View the Restaurants</a>
        </div>
    </header>

    <!-- Map -->            
    <div id="map"></div>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->

    <section id="restaurants" class="services bg-primary">
        <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <div class="panel-group" role="tablist">
                
                <!-- Golden Shopping Mall -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <a role="button" data-toggle="collapse" data-target="#goldenshoppingmall" aria-expanded="false" aria-controls="goldenshoppingmall">
                            <h4 class="panel-title">Golden Shopping Mall</h4>
                        </a>
                        <?php
                            $yelp_id = 'golden-shopping-mall-flushing';
                            $gshoppingmall = get_business($yelp_id);
                            $json = json_decode($gshoppingmall, true);
                            $rating_img_url = $json['rating_img_url'];
                            echo yelp_biz_html_generator($yelp_id, $rating_img_url);
                        ?>

                    </div>
                    <div id="goldenshoppingmall" class="panel-collapse collapse">
                        <div class="panel-collapse">
                            <div class="panel-body">
                                Small stalls and foods like dumplings and noodles fill this tiny basement. 
                            </div>
                        </div>
                    <!-- /#goldenshoppingmall -->
                    </div>
                </div>
                
                <!-- New World Mall Food Court -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <a role="button" data-toggle="collapse" data-target="#newworld" aria-expanded="false" aria-controls=newworld>
                            <h4 class="panel-title">New World Mall Food Court</h4>
                        </a>
                        <?php
                            $yelp_id = 'new-world-mall-food-court-flushing';
                            $newworldmallfoodcourt= get_business($yelp_id);
                            $json = json_decode($newworldmallfoodcourt, true);
                            $rating_img_url = $json['rating_img_url'];
                            echo yelp_biz_html_generator($yelp_id, $rating_img_url);
                        ?>
                    </div>
                    <div id="newworld" class="panel-collapse collapse">
                        <div class="panel-body">
                            The mall features an exciting food court in the lower level with over 32 different American and Ethnic food vendors. With a wide range of foods from different areas of North and South-East Asia; stalls offer Malaysian, Thai, Vietnamese, Chinese, Korean and Japanese foods including bento boxes and sushi, ramen noodles, and assorted Asian desserts. In addition, the food court offers a great choice of fast foods.
                        </div>
                    </div>
                </div>
                
                <!-- White Bear -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <a role="button" data-toggle="collapse" data-target="#whitebear" aria-expanded="false" aria-controls=whitebear>
                            <h4 class="panel-title">White Bear</h4>
                        </a>
                        <?php
                            $yelp_id = 'white-bear-flushing';
                            $whitebear = get_business($yelp_id);
                            $json = json_decode($whitebear, true);
                            $rating_img_url = $json['rating_img_url'];
                            echo yelp_biz_html_generator($yelp_id, $rating_img_url);
                        ?>
                    </div>
                    <div id="whitebear" class="panel-collapse collapse">
                        <div class="panel-body">
                            Make sure to try the #6 (pork wontons) and the #17 (dan dan noodles).
                        </div>
                    </div>
                </div>
                
                <!-- Nan Xiang Xiao Long Bao -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <a role="button" data-toggle="collapse" data-target="#nanxiang" aria-expanded="false" aria-controls=nanxiang>
                            <h4 class="panel-title">Nan Xiang Xiao Long Bao</h4>
                        </a>
                        <?php
                            $yelp_id = 'nan-xiang-dumpling-house-flushing';
                            $nanxiang = get_business($yelp_id);
                            $json = json_decode($nanxiang, true);
                            $rating_img_url = $json['rating_img_url'];
                            echo yelp_biz_html_generator($yelp_id, $rating_img_url);
                        ?>
                    </div>
                    <div id="nanxiang" class="panel-collapse collapse">
                        <div class="panel-body">
                            This Chinese restaurant is famous for their pork soup dumplings
                        </div>
                    </div>
                </div>
                
                <!-- Joe's Shanghai -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <a role="button" data-toggle="collapse" data-target="#joesshanghai" aria-expanded="false" aria-controls=joesshanghai>
                            <h4 class="panel-title">Joe's Shanghai</h4>
                        </a>
                        <?php
                            $yelp_id = 'joes-shanghai-flushing';
                            $joesshanghai = get_business($yelp_id);
                            $json = json_decode($joesshanghai, true);
                            $rating_img_url = $json['rating_img_url'];
                            echo yelp_biz_html_generator($yelp_id, $rating_img_url);
                        ?>
                    </div>
                    <div id="joesshanghai" class="panel-collapse collapse">
                        <div class="panel-body">
                            The first Joe's Shanghai was founded in Flushing, New York in 1995. Immediately our two special soup dumplings, crab pork meat became a New York favorite.  Other special dishes includes Spicy Szechuan Style Sliced Beef; Crispy Jumbo Prawns with Lime Sauce; Braised Duck, Braised Pork Shoulders and not to mention our different varieties of cold cuts like Wine Chicken; Shanghai Fried Bean Curd; Braised Sliced Beef.
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.panel -->
            </div>
        </div>
    <!-- /.container -->
        </div>
    </section>
    <!-- Callout -->
    <aside class="callout" id="flushingchamber">
        <div class="text-vertical-center">
            <a href="http://flushingchamber.nyc/" target="_blank">
                <h1>Flushing Chamber of Commerce</h1>
            </a>
        </div>
    </aside>
    
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
    </script>

</body>

</html>
