<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="personal page">
    <meta name="author" content="Elizabeth Peacock">

    <title>Liz Peacock</title>
    <link rel="icon" href="img/initials.ico">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,700,700i" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link href="css/personal.css" rel="stylesheet">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Liz Peacock</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#resume">CV/Resume</a>
                    </li>
                    <li>
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="#blog">Blog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <div class="container">
                <h1>Liz Peacock</h1>
                <h2>Full Stack Developer</h2>
            </div>
        </div> 
    </header>

    <!-- Page Content -->

<!-- Placeholder ....

-->

    <div class="container">

        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="featurette" id="about">
            <img class="featurette-image img-circle img-responsive pull-right" id="resume" src="/img/desk.jpeg">
            <h2 class="featurette-heading" id="resume"><a href="/resume.php">Curriculum
                <span class="text-muted">Vitae</span></a>
            </h2>
            <p class="lead">I am a professional student of life with a background in customer service. Currently pursuing a passion for technology. Recent graduate of the full-stack web development program at <a href="http://codeup.com">Codeup</a> in San Antonio, Texas.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Second Featurette Carousel-->
        <div id="portfolio-carousel portfolio" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#portfolio-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#portfolio-carousel" data-slide-to="1"></li>
            <li data-target="#portfolio-carousel" data-slide-to="2"></li>
            <li data-target="#portfolio-carousel" data-slide-to="3"></li>
        </ol>
        <!--Carousel Wrapper-->
        <div class="carousel-inner" id="portfolio">
            <div class="item active">
                <img class="featurette-image img-circle img-responsive pull-left" src="/img/portfolio.jpeg">
                <h2 class="featurette-heading"><a href="">My
                    <span class="text-muted">Portfolio</span></a>
                </h2>
                <p class="lead">Check out some of the projects that I've created at Codeup, or spy on my code on <a href="https://github.com/elpeacock">GitHub</a>.</p>
            </div>
            <div class="item" id="portfolio">
                <img class="featurette-image img-circle img-responsive pull-left" src="/img/lightning.jpeg">
                <h2 class="featurette-heading"><a href="/projects/weather/weather_map.html">Weather 
                    <span class="text-muted">Map</span></a>
                </h2>
                <p class="lead">Created using Javascript, Jquery, and AJAX requests to both Google Maps' and Open Weather Map's API's, a user is able to retrieve a 3 day weather forecast for anywhere in the world via pin drag and drop. The front end was done with Twitter Bootstrap and custom CSS for mobile responsiveness.</p>
            </div>
            <div class="item" id="portfolio">
                <img class="featurette-image img-circle img-responsive pull-left" src="/img/simon.png">
                <h2 class="featurette-heading"><a href="/projects/simon/index.html">Simple 
                    <span class="text-muted">Simon</span></a>
                </h2>
                <p class="lead">This replica of the throwback electronic game 'Simon' was created entirely using Javascript and Jquery. The front end utilizes custom CSS for styling and Twitter Bootstrap for mobile responsiveness.</p>
            </div>
<!--             <div class="item" id="portfolio">
                <img class="featurette-image img-circle img-responsive pull-left" src="/img/kitchen.jpg">
                <h2 class="featurette-heading"><a href="">Kitchen 
                    <span class="text-muted">Kweendom</span></a>
                </h2>
                <p class="lead">This adlister project, created with a classmate, 'sells' fun and funky kitchen gadgets. The back end was coded entirely in vanilla PHP and uses mySQL for database implementation. The front end was done with Twitter Bootstrap and custom CSS and is fully mobile responsive.</p>
            </div> -->
            <div class="item" id="portfolio">
                <img class="featurette-image img-circle img-responsive pull-left" src="/img/concert.jpeg">
                <h2 class="featurette-heading"><a href="http://showup.rocks">ShowUp
                    <span class="text-muted">.rocks</span></a>
                </h2>
                <p class="lead">Using the MVC framework Laravel, ShowUp.rocks was built in a team of three over the course of a two week sprint. We set out to create a place where concert-goers could find out about upcoming shows, discover new artists and allow local/underground bands to get the word out about their events. The back end was done with PHP and mySQL, and object-oriented programming was used in order to model the relationships between many database tables. The front end utilized Javascript, Jquery, Twitter Bootstrap, and custom CSS as well as several ajax requests to various API's.</p>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#portfolio-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#portfolio-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        
        <!--close Carousel-->
        </div>

        <hr class="featurette-divider">

        <!-- Third Featurette -->
        <div class="featurette" id="blog">
            <img class="featurette-image img-circle img-responsive pull-right" src="img/contact.jpeg">
            <h2 class="featurette-heading"><a href="#">Through the
                <span class="text-muted">Eyes of Liz</span></a>
            </h2>
            <p class="lead">Blog in development...Come back soon and check it out!</p>
        </div>

        <hr class="featurette-divider">

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer>
    <div class="footer">
        <div class="container">
            <p class="pull-left" id="footer-text"> Copyright © Elizabeth Peacock 2016 </p>
            <div class="pull-right">
                <ul class="social">
                    <li><a href="https://www.linkedin.com/in/elizabeth-peacock"> <i class="fa fa-linkedin"></i> </a></li>
                    <li><a href="https://twitter.com/thatlilpeacock"> <i class="fa fa-twitter"></i> </a></li>
                    <li><a href="https://github.com/elpeacock"> <i class="fa fa-github"></i> </a></li>
                    <li><a href="http://open.spotify.com/user/124805139"> <i class="fa fa-spotify"></i> </a></li>
                </ul>
            </div>
        </div>
    </div><!--/.footer-bottom-->
    </footer>

<!-- Font Awesome -->
<script src="https://use.fontawesome.com/0d9255860f.js"></script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>