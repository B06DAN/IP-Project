<?php

include("config.php");


$uname = $_POST['uname'];
$umessage = $_POST['umessage'];

$query = "INSERT INTO chatroom (name, message) VALUES ('$uname', '$umessage')";
$run = mysql_query($con, $query);
?>

