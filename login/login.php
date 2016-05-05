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
        <link href="bootstrap.min.css" rel="stylesheet"/> 
        
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
 	    	<li><a href="contact.php">Connect with us</a></li>
           </ul>
         </div>
 
     </div>
   </div><!-- /container -->
 </div><!-- /navbar wrapper -->
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
</body>
</html>

