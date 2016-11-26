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
$username = stripslashes($username);
$sql = "SELECT name FROM regs WHERE username = '$username'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
echo "Welcome"."{$row['name']}";
}
   //$sql = "SELECT message FROM mess WHERE name = '$no'";   
   // $message = "This is the word which i was trying to tell you....";
    //$query = mysql_query($sql)or die(mysql_error());;
    //if(!$query){
        //echo "Hi".$name."<br />".mysql_fetch_assoc($query);
      //  echo "<h1>Thank you for registraing $name</h1>";
    //    header ("location: login.php");
    //die ("hi".mysql_error());
    //}
    //while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
    //  echo "$name is " ." {$row['message']}";  
   // }
?>