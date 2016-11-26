<html>
<head>
<title>Welcome to library.</title>  
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <div class="logo">
    <?php include "logo.php";?>
    </div>
    
    <div class="sub">
    <?php include "sub.php"; ?>
    </div>
    <div class="date">
    <?php include "date&time.php";?>
    </div>
    <div class="nav">
        <ul>
             <li><h4><a href="index.php">Home</a></h4></li>
            <li><h4><a href="login.php">Login</a></h4></li>
            <li><h4><a href="regs.php">Register</a></h4></li>
            <li><h4><a href="contact.php" id = "selected">Contact US</a></h4></li>
        </ul>
    </div>
    <div class="contact">
    <h4>Contact Info</h4>
        <h3>if you have any questionthen you can Email us.</h3>
        <h4>eMAIL: <a href="support@hindlib.org">support@hindulib.org</a></h4>
        <h4>call us: 1800*********</h4>
    </div>
    </body>
    <footer class="footer">
    <?php include "footer.php"; ?>
    </footer>
</html>