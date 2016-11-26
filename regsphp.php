<?php

$server="localhost";
$username="root";
$password="";
$database="lib";
$conn = mysql_connect($server, $username, $password) or die("Failed to connect to MySQL: " . mysql_error());

 $db=mysql_select_db($database,$conn) or die("Failed to connect to MySQL: " . mysql_error());

if(!$conn){
    die ("databse is not connected");
}

$name = $_POST["name"];
$address = $_POST["add"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$stream = $_POST["str"];

$sql = "INSERT INTO regs( name, username, password, email, stream, address) VALUES ('$name', '$username', '$password', '$email', '$stream', '$address')";
$query = mysql_query($sql)or die(mysql_error());;
if($query){
    echo "<h1>Thank you for registraing $name</h1>";
    header ("location: registered.php");
}
?>