<!DOCTYPE html>

<html>
    <head>
        <title>Account Creation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <!--Navbar-->
    	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" rel="home" href="#">Welcome</a>
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
<br>
<br>
<br>


        <div class="container">
        <form action ="dbconn2.php" method="post" />
            <div class="jumbotron">
                <h1>Let's Create Your Account!</h1>
                <p>First we are going to need some information!</p>
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">UserName</span>
                <input type="text" name="username" class="form-control" placeholder="Username Goes Here" aria-describedby="basic-addon1">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">First Name</span>
                <input type="text" name="firstname" class="form-control" placeholder="First Name Right Here" aria-describedby="basic-addon2">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">Last Name</span>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name Right Here" aria-describedby="basic-addon3">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon4">Phone Number</span>
                <input type="text" name="phone" class="form-control" placeholder="(XXX)-XXX-XXXX" aria-describedby="basic-addon4">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon5">Home Address</span>
                <input type="text" name="address" class="form-control" placeholder="City, State, Zip Code" aria-describedby="basic-addon5">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon6">Date of Birth</span>
                <input type="text" name="dob" class="form-control" placeholder="YYYY/MM/DD" aria-describedby="basic-addon6">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon7">Email</span>
                <input type="text" name="email" class="form-control" placeholder="GenericEmail@Website.com" aria-describedby="basic-addon7" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            </div>
        <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon8">Password</span>
                <input type="password" name="password" class="form-control" placeholder="Six or more characters" aria-describedby="basic-addon8" pattern=".{6,}">
            </div>
        <br>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">


        </form>
            </div>
        </body>
</html>