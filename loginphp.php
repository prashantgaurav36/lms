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


if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = stripslashes($username);
    $username = mysql_real_escape_string($username);
    $password = stripslashes($password);
    $password = mysql_real_escape_string($password);
    $query = "select * from regs where username = '$username' and password = '$password' ";
    $result = mysql_query($query) or die (mysql_error());
    $rows = mysql_fetch_array($result);
    if(!empty($rows['username']) AND !empty($rows['password'])) 
    { $_SESSION['username'] = $rows['password']; 
    echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

        header ("location: dashbord.php");
    }
    else{
        echo "Username/Password is incorrect";
    }
}
?>