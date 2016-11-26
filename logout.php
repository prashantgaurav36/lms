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
            <li><h4><a href="index.php." >Home</a></h4></li>
            <li><h4><a href="login.php">Login</a></h4></li>
            <li><h4><a href="regs.php">Register</a></h4></li>
            <li><h4><a href="contact.php">Contact US</a></h4></li>
        </ul>
    </div>
    <div class="logout">
    <form action="loginphp.php" method="post">
        <h2><?php
die ("You have been sucessfully loged out.");
            ?></h2>
        </form>
    </div>
</body>
    <footer class="footer">
    <?php include "footer.php"; ?>
    </footer>
</html>