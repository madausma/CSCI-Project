<!DOCTYPE html>
<head>
<title>dbconnquiz</title>
</head>
<body>
	<h1>Connection complete!</h1>
</body>
</html>


<?php
define('DB
_NAME', 'mattav');
define('DB_USER', 'mattav');
define('DB_PASSWORD', 'matta');
define('DB_HOST', 'localhost');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$link) {
    die('could not connect:' .mysql_error());
}
$db_selected = mysql_select_db(DB_NAME, $link);
if(!$db_selected) {
    die('Can\'t use ' . DB_NAME . '; ' . mysql_error());
}
$value = $_POST['username'];
$value2 = $_POST['quiztitle'];
$value3 = $_POST['score'];
$value4 = $_POST['questions'];
$sql = "INSERT INTO Quiz (username, quiztitle, score, questions) Values ('$value', '$value2', '$value3', '$value4')";
if (!mysql_query($sql)) {
    die('Error:' .mysql_error());
}
if(isset($_POST['submit'])){
    $to = $_POST['email']; // this is your Email address
    $from = "8planets"; // this is the sender's Email address
    $first_name = $_POST['username'];
    $last_name = $_POST['quiztitle'];
    $subject = "You just completed a quiz";
    $message = "Thanks for taking the quiz! take some more. lol";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: quizdone.php');
/*$user=  mysql_real_escape_string($POST['username']);

mysql_close();
?>