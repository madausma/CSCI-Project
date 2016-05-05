<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Thanks!</title>
	    <!-- Bootstrap -->
	    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
						    <li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
					  </ul>
	   		</li>
	   <li><a href="404.html">404</a></li>
	   <li><a href="downloads.html">Downloads</a></li>
	   <li class="dropdown">
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
			<br>
			<a class="btn btn-primary" href="login.php" role="button">Login</a>
			<a class="btn btn-primary" href="formcreation.php" role="button">Register</a>
			<div class="col-sm-3 col-md-3 pull-right">
	        <div class="navbar-text">Searchbar text</div>
			<form class="navbar-form" role="search">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				</div>
			</div>
			</form>
			</div>
		</div>
</div>
<!--------------->

<br>
<br>
<br>
    <!--Div before jumbotron-->
    <div class="container">
    <!--Jumbotron-->
        <div class="jumbotron">
            <h1>Thanks for registering!</h1>
            <p>Click <a href="homepage.php">here</a> to head home.</p>
        </div>
     </div>

    <div class="container">
        <img src="thankyou.gif" alt="Thank You" style="width:1140px;height:475px;">
    </div>
    <br>
</body>
</html>