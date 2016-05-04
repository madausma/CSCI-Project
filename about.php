<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>8p[anets™</title>
	    <!-- Bootstrap -->
	    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
/* BOOTSTRAP 3.x GLOBAL STYLES
-------------------------------------------------- */
body {
  padding-bottom: 40px;
  color: #5a5a5a;
}



/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
}



/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 1;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 400px;
  background-color:#555;
}
.carousel img {
  position: absolute	;
  top: 0;
  left: 0;
  min-height: 400px;
}



/* MARKETING CONTENT
-------------------------------------------------- */

/* Pad the edges of the mobile views a bit */
.marketing {
  padding-left: 15px;
  padding-right: 15px;
}

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  text-align: center;
  margin-bottom: 20px;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-left: 10px;
  margin-right: 10px;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}
.featurette {
  padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
  overflow: hidden; /* Vertically center images part 2: clear their floats. */
}
.featurette-image {
  margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
}

/* Give some space on the sides of the floated elements so text doesn't run right into it. */
.featurette-image.pull-left {
  margin-right: 40px;
}
.featurette-image.pull-right {
  margin-left: 40px;
}

/* Thin out the marketing headings */
.featurette-heading {
  font-size: 50px;
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}



/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 768px) {

  /* Remve the edge padding needed for mobile */
  .marketing {
    padding-left: 0;
    padding-right: 0;
  }

  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 20px;
    margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
  }
  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }

}
</style>
</head>
<body>
<!--Navbar/menu-->
<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">

        <div class="navbar-header">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="homepage.php">Welcome to 8p[anets</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="homepage.php">Home</a></li>
            <li class="active"><a href="about.php">About</a></li>
            <li><a href="quizzes.html">Quizzes</a></li>
            <li class="dropdown">
					  	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Planets <b class="caret"></b></a>
					  			<ul class="dropdown-menu">
						   	 		<li><a href="mercury/mercury.html">Mercury</a></li>
						  	 		<li><a href="venus/venus.html">Venus</a></li>
						     		<li><a href="earth/earth.html">Earth</a></li>
							 		<li><a href="mars/mars.html">Mars</a></li>
							 		<li><a href="jupiter/jupiter.html">Jupiter</a></li>
							 		<li><a href="saturn/saturn.html">Saturn</a></li>
							 		<li><a href="neptune/neptune.html">Neptune</a></li>
							 		<li><a href="uranus/uranus.html">Uranus</a></li>
						 		</ul>
	    	</li>
	    	<li><a href="contact.php">Connect with us</a></li>
          </ul>
        </div>

    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper -->


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="blurredbackground1.jpg" style="width:100%" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1><small>About</small>8p[anets</h1>
          <p></p>
          <p><a class="btn btn-lg btn-primary" href="http://cscilab.bc.edu/~madausma/project/homepage/about.php">Reload page</a>
        </p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="blurredbackground3.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Education Made Easy</h1>
          <p>8p[lanets features an interactive map to explore information about our solar system.</p>
          <p><a class="btn btn-large btn-primary" href="homepage.php">Explore</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="blurredbackground2.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Test Yourself</h1>
          <p>Our new planet quizzes let you test your knowledge.</p>
          <p><a class="btn btn-large btn-primary" href="quizzes.html">Take quizzes</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
<!-- /.carousel -->

<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Four columns of text/planets below the carousel -->
  <div class="row">
    <div class="col-md-3 text-center">
      <img class="img-circle" src="planeticons/mercury.png" height="140px" width="140px">
      <h2>Mercury</h2>
      <p>It's geologically dead, but still interesting!</p>
      <p><a class="btn btn-default" href="mercury/mercury.html">Visit Mercury</a></p>
    </div>
    <div class="col-md-3 text-center">
      <img class="img-circle" src="planeticons/venus.gif" height="140px" width="140px">
      <h2>Venus</h2>
      <p>A planet with a runaway greenhouse effect.</p>
      <p><a class="btn btn-default" href="venus/venus.html">Visit Venus</a></p>
    </div>
    <div class="col-md-3 text-center">
      <img class="img-circle" src="planeticons/earth.png" height="140px" width="140px">
      <h2>Earth</h2>
      <p>The watery orb we call home.</p>
      <p><a class="btn btn-default" href="earth/earth.html">Visit Earth</a></p>
    </div>
    <div class="col-md-3 text-center">
	        <img class="img-circle" src="planeticons/mars.png" height="140px" width="140px">
	        <h2>Mars</h2>
	        <p>We've put some rovers here.</p>
      <p><a class="btn btn-default" href="mars/mars.html">Visit Mars</a></p>
    </div>
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="planeticons/jupiter.gif" height="512px" width="512px">
    <h2 class="featurette-heading">Jupiter. <span class="text-muted">The first gas giant.</span></h2>
    <p class="lead">Jupiter is pretty big.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-left" src="http://www.geckzilla.com/astro/saturn_transparent.png" height="600px">
    <h2 class="featurette-heading">Saturn. <span class="text-muted">The second gas giant.</span></h2>
    <p class="lead">Saturn is the only gas giant with highly visible rings.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="planeticons/neptune.png" height="512px" width="512px">
    <h2 class="featurette-heading">Neptune. <span class="text-muted">The blue gas giant.</span></h2>
    <p class="lead">It's cold and it's weird.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
      <img class="featurette-image img-circle pull-right" src="planeticons/uranus.png" height="512px" width="512px">
      <h2 class="featurette-heading">Uranus. <span class="text-muted">What even is Uranus?</span></h2>
      <p class="lead">Does anyone even pay attention to this planet? Honestly.</p>
    </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

  <div class="row">
      <div class="col-md-12 text-center">
        <img class="img-circle" src="planeticons/pluto.png" height="100px" width="100px">
        <h2>Pluto</h2>
        <p>Ok, ok...we know it's not a planet. But check it out anyway.</p>
        <p><a class="btn btn-default" href="pluto/pluto.html">Visit Pluto</a></p>
    </div>
  </div>

  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>Page created by Marcus Madaus. <a href="https://github.com/madausma">Check out my code on github.com!</a></p>
  </footer>

</div><!-- /.container -->

<script>
$('#myTab a').click(function (e) {
	 e.preventDefault();
	 $(this).tab('show');
});

$(function () {
$('#myTab a:last').tab('show');
})
</script>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>