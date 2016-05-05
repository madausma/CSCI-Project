<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>8p[anets™</title>
	    <!-- Bootstrap-->
	    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
<!--Jumbotron css-->
.jumbotron {
    position: relative;
    background: #000 url("blacksun.jpg") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;}

<!--Sidebar css-->
#sidebar.affix-top {
    position: static;
    margin-top:30px;
    width:228px;
  }

  #sidebar.affix {
    position: fixed;
    top:70px;
    width:228px;
  }
</style>
</head>
<body>

<!--Navbar/menu-->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" rel="home" href="homepage.php">Home</a>
		</div>
		<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="about.php">About</a></li>
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
	   		<li class="dropdown">
	   			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Moons <b class="caret"></b></a>
					   <ul class="dropdown-menu">
						    <li><a href="moon/moon.html">Earth's Moon</a></li>
					  </ul>
	   		</li>
	   <li><a href="404.html">404</a></li>
	   <li><a href="customsearch.html">Custom search</a></li>
	   <!--<li class="dropdown">
	      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Connect with us<b class="caret"></b></a>
	          <ul class="dropdown-menu">
	             <li><a href="facebook.php">Facebook</a></li>
	             <li><a href="twitter.php">Twitter</a></li>
	              <li class="divider"></li>
	              <li><a href="instagram.php">Instagram</a></li>
	           	  <li class="divider"></li>
	           	  <li><a href="myspace.php">MySpace</a></li>
	           </ul>
			</ul>
			<br>-->
			<a class="btn btn-primary" href="login.php" role="button">Login</a>
			<a class="btn btn-primary" href="formcreation.php" role="button">Register</a>
		<div class="col-sm-3 col-md-3 pull-right">
	        <div class="navbar-text">Use our Custom Google Search API!</div>
			<!--<form class="navbar-form" role="search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
					<div class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</div>
			</form>-->
			<script>
				  (function() {
				    var cx = '010480476330800259148:tvxouhewsia';
				    var gcse = document.createElement('script');
				    gcse.type = 'text/javascript';
				    gcse.async = true;
				    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
				    var s = document.getElementsByTagName('script')[0];
				    s.parentNode.insertBefore(gcse, s);
				  })();
				</script>
<gcse:search></gcse:search>
		</div>
	</div>
</div>

<!--Alert divs (I have not implemented them yet - Marcus)-->


<!--<div class="alert alert-info">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Info!</strong> Indicates a neutral informative change or action.
</div>

<div class="alert alert-warning">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Warning!</strong> Indicates a warning that might need attention.
</div>

<div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>-->

<!--Login form-->
<br>
<br>
<br>
<!--Div before jumbotron-->
<div class="container">
			<div id="message" class="alert alert-success fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
	 			 	<marquee behavior="scroll" direction="left" scrollamount="10">
	 		 		<strong>Hello.</strong> Is this your first time here?
	 		 		Click <a href="http://cscilab.bc.edu/~madausma/project/homepage/formcreation.php" class="alert-link">here</a>
	 		 		to register, or use the login/register buttons.<br></marquee>
			</div>



<!--Jumbotron-->

   <div class="jumbotron">
     <h1><small>8</small>p[anets<small>™</small></h1>
     <p>because astronomy doesn't have to be boring.</p>
   </div>
   <div class="row">
     <div class="col-sm-4">
		<!--Image map-->
       <h3>THE SOLAR MAP</h3>
       <p>select any celestial body to enter its orbit.</p>
       <img src="planetmaplabeled.jpg" alt="planetmap" usemap=#planetmap style="height:800px; width:1300px;">
	   	<map name="planetmap">
	     <area shape="circle" coords="0,390,300" alt="Sun" href="sun/sun.html">
	     <area shape="circle" coords="350,440,20" alt="Mercury" href="mercury/mercury.html">
	     <area shape="circle" coords="440,420,30" alt="Venus" href="venus/venus.html">
	     <area shape="circle" coords="540,390,35" alt="Earth" href="earth/earth.html">
	     <area shape="circle" coords="555,340,10" alt="Moon" href="moon/moon.html">
	     <area shape="circle" coords="630,360,30" alt="Mars" href="mars/mars.html">
	     <area shape="circle" coords="740,330,50" alt="Jupiter" href="jupiter/jupiter.html">
	     <area shape="circle" coords="890,300,50" alt="Saturn" href="saturn/saturn.html">
	     <area shape="circle" coords="1040,270,40" alt="Uranus" href="uranus/uranus.html">
	     <area shape="circle" coords="1150,240,40" alt="Neptune" href="neptune/neptune.html">
	     <area shape="circle" coords="1220,200,15" alt="Pluto" href="pluto/pluto.html">
		</map>
		<!--Blank paragraph below is so that the content below doesn't overlap with the image map-->
		<p></p>
     </div>
     <div class="col-sm-4">
       <h3>SCIENCE</h3>
       <p>We have lots of science facts n stuff</p>
     </div>
     <div class="col-sm-4">
       <h3>TAKE OUR QUIZZES</h3>
		<p>think you know your stuff? check out our <a href ="quizzes.html">planet quizzes.</a></p>
     </div>
	<div>
<div>
<!--Code for login below-->
<header>
	<section class="loginform cf">
			<form name="login" action="index_submit" method="get" accept-charset="utf-8">

				<ul>
					<li>
						<label for="usermail">Email</label>
						<input type="email" name="usermail" placeholder="yourname@email.com" required>
					</li>
					<li>

						<label for="password">Password</label>
						<input type="password" name="password" placeholder="password" required></li>
					<li>
						<input type="submit" value="Login">
						<a href="http://cscilab.bc.edu/~madausma/project/homepage/register.php"><img src = "registerbutton.png" height="34x" ></img></a>
						<br>
					</li>
						<li>
							<br>
							<div style="line-height:50%;">
							<p><small>If you're having problems logging in,</p>
							<p>try updating or using any modern browser </p>
							<p>(Firefox 3.7+, Safari 4+, Chrome 4+ or Opera 11+).</small></p>
							</div>
						</li>
				</ul>
			</form>
		</section>
</header>
<!--Rss Feeds-->
<form>
	<fieldset>
		<legend>RSS feeds from NASA!</legend>

			<?php
			  $feeds = array(
							  'http://www.nasa.gov/rss/dyn/image_of_the_day.rss',
							  'https://www.nasa.gov/rss/dyn/breaking_news.rss',
							  'https://www.nasa.gov/rss/dyn/educationnews.rss',
							  'http://blogs.nasa.gov/stationreport/feed/',
							  'http://blogs.nasa.gov/stationreport/feed/',
							  'https://www.nasa.gov/rss/dyn/onthestation_rss.rss',
							  'https://www.nasa.gov/rss/dyn/mission_pages/kepler/news/kepler-newsandfeatures-RSS.rss',
							  'http://www.nasa.gov/rss/dyn/chandra_images.rss',
							  'https://www.nasa.gov/rss/dyn/shuttle_station.rss',
							  'https://www.nasa.gov/rss/dyn/solar_system.rss',
							  'https://www.nasa.gov/rss/dyn/earth.rss',
							  'https://www.nasa.gov/rss/dyn/aeronautics.rss',
							  'https://www.nasa.gov/rss/dyn/hurricaneupdate.rss'
							);
			  ?>
			  <?php
			  create_form($feeds, "feed");

			  if ( isset( $_GET['getfeed'] ) ) {
			  	handle_form( $_GET['feed'] );
			  }

			  ?>

			<?php
			function handle_form( $myfeed ) {
				  $rss = simplexml_load_file( $myfeed );

			      $title =  $rss->channel->title;
			      echo "<h1>$title</h1>";
			      $items = $rss->channel->item;
			      if (!$items)
			        $items = $rss->item;
			      foreach ( $items as $item ) {
			      	echo "<div class='news'>
			      			<h4>$item->title<h4>\n";
			        echo '<a href="' . $item->link . '">' . $item->title . '</a><br>';
			        echo $item->description . "<br><br>\n";
			        echo "</div>";
			      }
			}
			function create_form( $farray, $menuname ){
			?>
			<form method="get">
				<?php create_menu( $farray, $menuname ); ?>
				<input type="submit" name="getfeed" value="Get Feed!" >
			</form>
			<?php
			}
			function create_menu($farray, $menuname){
				$current_feed = isset( $_GET['feed'] ) ?  $_GET['feed'] : "";
				echo "<select name='$menuname'>";
				foreach ( $farray as $f ) {
					if ( $current_feed == $f )  {
						echo "<option value='$f' selected>$f</option>";
					} else {
						echo "<option value='$f'>$f</option>";
					}
				}
				echo '</select>';
			}
			?>
	</fieldset>
	<br>
	<br>
<!--Links to podcasts and vodcasts-->
	<fieldset>
		<legend>Podcasts and Vodcasts from NASA</legend>

		<a href= "https://itunes.apple.com/us/podcast/nasacast-video/id201661703?mt=2">
			<p>NASACast Video</p><img src="http://www.nasa.gov/images/content/173608main_subscribe_pod-2.gif"></a>
		<a href= "https://www.nasa.gov/multimedia/videogallery/index.html">
			<p>NASA's Video Gallery</p><img src="http://www.nasa.gov/images/content/173608main_subscribe_pod-2.gif"></a>
	</fieldset>
	<br>
	<br>
	<br>
	<br>
	<hr>
	<?php
	if(isset($_GET['OK'])) {
		handleform();
	} else {
		echo "Talk to the webpage! Fill in the form to participate.";
	}
	displayForm();
?>
</div>
<br>
<br>
<br>
<br>
<!--Fieldset containing basic homepage info-->
<fieldset>
		<legend>About 8p[anets<small>™</small></legend>
			<p>8planets<small>™</small> was developed by Marcus M., Sam D., and Victor M.<br>
			   Support for 8planets comes from viewers like you.</p>
	</fieldset>

<!--Scrolling space shuttle-->
<marquee behavior="scroll" direction="left" scrollamount="20"><img src = "https://pixabay.com/static/uploads/photo/2013/07/13/09/47/space-shuttle-156012_960_720.png" height="40px" ></img></marquee>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </div>
</body>
</html>

<!--Code below for "just for fun" simple server to user communication-->
<?php
function handleform(){
	$name      = isset( $_GET['username'] )   ?   $_GET['username'] : "";
	$age  = isset( $_GET['age'] )   ?   $_GET['age'] : "";
	$knowsjava = isset( $_GET['knowsJava'] )  ?   "yes" : "";
	$knowsphp  = isset( $_GET['knowsPHP'] )   ?   "yes" : "";
	$knowsc    = isset( $_GET['knowsC'] )     ?   "yes" : "";
	$activity  = isset( $_GET['activity'] )   ?   $_GET['activity'] : "";
	$comments  = isset( $_GET['comments'] )   ?   $_GET['comments'] : "";
	if ($name == "") {
		echo "You didn't answer 1.";
		}
	else if ($age == "") {
		echo "You didn't enter your age. That's doesn't help me out...";
		}
	else echo "<h3>Hello, $name. </h3> I see you are $age. I am a computer so I don't have an age, meaning I will never die. I see you know ";
	$count = 0;
	if ($knowsjava == "yes") {
		echo "Java";
		$count++;
	}
	if ($knowsc == "yes") {
		if ($count >= 1) echo ", ";
		echo "C";
		$count++;
	}
	if ($knowsphp == "yes") {
		$count = $count + 1;
		if ($count >= 1) echo ", ";
		echo "and PHP.";
		$count ++;

	}
	if ($count == 0 ) {
		echo "nothing!";
	}
	if ($age == "") {
		echo "";
		}
	if ($name == "") {
		echo "";
		}
	echo " <br><br>Here are your comments:<br>";
	echo $comments;

	echo "<br>";
	if ($activity == "both") {
		echo "<br>I also like to do my homework while I run.";
	} else {
		echo "<br>Wow, what a coincidence! $activity is also my favorite planet.";
	}
	echo "<br>\n";
}
?>
<?php
function displayForm() {
?>
<hr>
<form method="get">
	<br>
	Enter your name in this text field:
	<input type=text size=10 name="username" value=""/>
	<br><br>
	Enter your age:
	<br>
	<input type=text size=10 name="age" value=""/>

	<br><br>
	What programming languages do you know?
	<br>
	<input type=checkbox name="knowsJava" id="knowsJava" value="Java" /> Java
	<br>
	<input type=checkbox name="knowsC" id="knowsC"    value="C"  /> C
	<br>
	<input type=checkbox name="knowsPHP" id="knowsPHP"  value="PHP" /> PHP


	<br><br>
	What is your favorite planet?
	<br>
	<select name="activity">
		<option value="Mercury">Mercury</option>
		<option value="Venus">Venus</option>
		<option value="Earth">Earth</option>
		<option value="Mars">Mars</option>
		<option value="Jupiter">Jupiter</option>
		<option value="Uranus">Uranus</option>
		<option value="Neptune">Neptune</option>
		<option value="Saturn">Saturn</option>
	</select>

	<br><br>
	Add some comments and I'll display them back to you:
	<br>
	<textarea rows=6 cols=40 name="comments">
	</textarea>

	<br><br>
	Please submit when ready: <input type=submit name="OK" value="OK"/>
	<br>
</form>
<?php
}
