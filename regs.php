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
        <ul> <li><h4><a href="index.php">Home</a></h4></li>
            <li><h4><a href="login.php">Login</a></h4></li>
            <li><h4><a href="regs.php" id="selected">Register</a></h4></li>
            <li><h4><a href="contact.php" >Contact US</a></h4></li>
        </ul>
    </div>
    <div class="regs">
        <form  action="regsphp.php" method="POST">
        <h2>Fill The form</h2>
            <h5>Name: <input type="text" name="name" id="reg_name" required><strong>*</strong></h5>
            <h5>Address: <input type="text" name="add" id="reg_add" required><strong>*</strong></h5>
            <h5>Username: <input type="text" name="username" id="reg_username" required><strong>*</strong></h5>
            <h5>Password: <input type="password" name="password" id="reg_password" required><strong>*</strong></h5>
            <h5>Email: <input type="text" name="email" id="reg_email" required><strong>*</strong></h5>
            <h5>Stream:<input type="radio" name="str" value="CSE" checked id="reg_str">CSE<input type="radio" name="str" value="ME" id="reg_str">ME<input type="radio" name="str" value="CE"  id="reg_str">CE </h5>
            <button type="submit" name="submitbutt" id="reg_submit">Register</button>
        </form>
    </div>
    </body>
    <footer class="footer">
    <?php include "footer.php"; ?>
    </footer>
</html>