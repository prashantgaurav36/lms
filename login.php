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
            <li><h4><a href="login.php" id="selected">Login</a></h4></li>
            <li><h4><a href="regs.php">Register</a></h4></li>
            <li><h4><a href="contact.php">Contact US</a></h4></li>
        </ul>
    </div>
    <div class="login">
    <form action="loginphp.php" method="post">
        <h5>USERNAME: <input type="text" name="username" id="username"></h5>
        <h5>PASSWORD: <input type="password" name="password" id="password"></h5>
        <button type="submit" name="submit" id="loginsubmit" value=submit> Submit </button>
        </form>
    </div>
</body>
    <footer class="footer">
    <?php include "footer.php"; ?>
    </footer>
</html>