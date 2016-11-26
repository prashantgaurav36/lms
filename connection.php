<?php
$server="localhost";
$username="root";
$password="";
$databse="lib";
$conn = mysqli_connect($server, $username, $password, $databse);
if(!$conn){
    die ("databse is not connected");
}

?>