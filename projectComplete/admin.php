<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Admin</title>
	    <!-- Bootstrap -->
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
	   <li><a href="404.html">404</a></li>
	   <li><a href="customsearch.html">Custom Search</a></li>
			<a class="btn btn-primary" href="/../~madausma/project/homepage/login.php" role="button">Login</a>
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
 <div class="container">
     <div class="jumbotron">
         <h1>Welcome Admin!</h1>
     </div>
 </div>
<div class="container">
    <div class="table">
        <form action="" method="post">
<?php

$conn = mysql_connect('localhost','mattav','matta') or die(mysql_error());
 mysql_select_db('mattav', $conn) or die(mysql_error());
$result = mysql_query("SELECT UserID, username, firstname, lastname, email, address, phone FROM UserInfo"); // selecting data through mysql_query()
echo '<table border=1px>';  // opening table tag
echo'<th>Username</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Address</th><th>Phone</th><th>Delete?</th>'; //table headers
while($data = mysql_fetch_array($result))
{
// we are running a while loop to print all the rows in a table
echo'<tr>'; // printing table row
echo '<td>'.$data['username'].'</td><td>'.$data['firstname'].'</td><td>'.$data['lastname'].'</td><td>'.$data['email'].'</td><td>'.$data['address'].'</td><td>'.$data['phone'].'</td>'; // we are looping all data to be printed till last row in the table
echo '<td><input type="submit" name="deleteUser" value="'.$data['UserID'].'"/></td>';
}
echo'</tr>'; // closing table row
echo '</table>';
?>
<?php
if(isset($_POST['deleteUser']) and is_numeric($_POST['deleteUser'])){
    $delete = $_POST['deleteUser'];
    $sql = "DELETE FROM UserInfo Where UserID= '$delete'";
    mysql_query($sql);

}
?>
            <br>
            <br>

            <form action="" method="post">
            <input type="submit" name="sendmail" value="Send Mail to All Users">
            </form>

<?php
if(isset($_POST['sendmail'])){
// Send Email
    $rs = mysql_query('SELECT email FROM UserInfo');

while(list($email) = mysql_fetch_row($rs))
{

  mail($email, 'Hello', 'You are recieving this from WeDeservaAnA');
}
}
?>

        </form>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>