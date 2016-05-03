<?php

define('DB_NAME', 'mattav');
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
$value2 = $_POST['firstname'];
$value3 = $_POST['lastname'];
$value4 = $_POST['phone'];
$value5 = $_POST['address'];
$value6 = $_POST['dob'];
$value7 = $_POST['email'];

$sql = "INSERT INTO UserInfo (username, firstname, lastname, phone, address, dob, email) Values ('$value', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7')";

if (!mysql_query($sql)) {
    die('Error:' .mysql_error());
}

mysql_close();



if(isset($_POST['submit'])){
    $to = $_POST['email']; // this is your Email address
    $from = "WeDeserveAnA"; // this is the sender's Email address
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "Form submission";
    $message = "Thank You for Creating an account";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: thankyou.php');
    
    }
?>