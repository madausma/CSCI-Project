<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','mattav','matta') or die(mysql_error());
 mysql_select_db('mattav') or die(mysql_error());
 $name=$_POST['username'];
 $pwd=$_POST['password'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select admin from UserInfo where username='".$name."' and password='".sha1($pwd)."' and admin=0") or die(mysql_error());
   $res=mysql_fetch_row($query);
   $query2=mysql_query("select admin from UserInfo where username='".$name."' and password='".sha1($pwd)."' and admin=1") or die(mysql_error());
   $res2=mysql_fetch_row($query2);
   if($res)
   {
    ($_SESSION['username']=$name)&&($_SESSION['admin']=0);
    header('location:welcome.php');
    exit();
   }

   elseif($res2)
   {
    ($_SESSION['username']=$name)&&($_SESSION['admin']=1);
    header('location:admin.php');
    exit();
   }
   else
   {
    echo'You entered an incorrect username or password.';
   }
 }
 else
 {
  echo'Enter both username and password.';
 }
}
?>

<html>
<head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
 <!--Navbar/menu-->
 	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 	<div class="container">
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
 		<li class="dropdown">
 		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Planets <b class="caret"></b></a>
 		    <ul class="dropdown-menu">
 			   	 <li><a href="/../~madausma/project/homepage/mercury/mercury.html">Mercury</a></li>
 			  	 <li><a href="/../~madausma/project/homepage/venus/venus.html">Venus</a></li>
 			     <li><a href="/../~madausma/project/homepage/earth/earth.html">Earth</a></li>
 				 <li><a href="/../~madausma/project/homepage/mars/mars.html">Mars</a></li>
 				 <li><a href="/../~madausma/project/homepage/jupiter/jupiter.html">Jupiter</a></li>
 				 <li><a href="/../~madausma/project/homepage/saturn/saturn.html">Saturn</a></li>
 				 <li><a href="/../~madausma/project/homepage/neptune/neptune.html">Neptune</a></li>
 				 <li><a href="/../~madausma/project/homepage/uranus/uranus.html">Uranus</a></li>
 			 </ul>
 	    </li>
 	   <li class="dropdown">
 	     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Moons <b class="caret"></b></a>
 		   <ul class="dropdown-menu">
 			    <li><a href="/../~madausma/project/homepage/moon/moon.html">The Moon</a></li>
 			  </ul>
 	   </li>
 	   <li><a href="/../~madausma/project/homepage/404.html">404</a></li>
 	   <li><a href="/../~madausma/project/homepage/customsearch.html">Custom Search</a></li>
 			<a class="btn btn-primary" href="login.php" role="button">Login</a>
 						<a class="btn btn-primary" href="formcreation.php" role="button">Register</a>

 		</div>
 		</div>
 		</div>
 </div>
 <br>
 <br>
 <br>
 <br>
 <br>
<!--End of navbar-->
<div class='container'>
    <div class='jumbotron'>
        <h1>Log Into Your Account! </h1>
                <p> If you need to create an account click <a href='formcreation.php' >HERE</a>.</p>
    </div>
</div>
<div class='container'>
<form action='#' method='post'>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">UserName:</span>
            <input type='text' name='username' class="form-control"/>

    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon2">Password:</span>
            <input type='password' name='password' class="form-control"/>
    </div>
    <br>
<input type='submit' name='submit' value='Log In'/>


</form>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
