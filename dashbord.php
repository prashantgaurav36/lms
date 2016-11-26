<html>
    <head><title>Welcome to library.</title></head>
    <link rel="stylesheet" type="text/css" href="css.css">
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
        <div class ='name'>
        <?php include "name.php"; ?>
        </div>
    <div class="nav">
        <ul>    
        <li><h4><a href="logout.php">logout</a> </h4></li>
        </ul>
        </div>
        <div class="books">
            <table>
                <thead><h3>Books for all the type</h3></thead>
            <tbody>
                <tr id="first_row">
                    <td>IMAGE</td>
                    <td>NAME OF BOOK</td>
                    <td>AUTHER NAME</td>
                    <td>DETAILS</td>
                </tr>
                <tr>
                    <td><img src="image/book11.jpg" /></td>
                    <td>Digital And Analog Communication</td>
                    <td>K.K.Sharma</td>
                    <td><a href="book1.php">Click To view.</a></td>
                </tr>
                <tr>
                    <td><img src="image/book22.jpg" /></td>
                    <td>Mechanical Measurement and Instruction</td>
                    <td>Er.R.K. Rajput</td>
                    <td><a href="book2.php">Click To View.</a></td>
                </tr>
                <tr>
                    <td><img src="image/book33.jpg" /></td>
                    <td>Security Engineering</td>
                    <td>Ross Anderson</td>
                    <td><a href="book3.php">Click To View.</a></td>
                </tr>
                <tr>
                    <td><img src="image/book44.png" /></td>
                    <td>Java In Sixty Minutes A Day</td>
                    <td>Rich Raposa</td>
                    <td><a href="book4.php">Click To view.</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </body>
    <div class="footer">
    <footer><?php include "footer.php"?></footer>
    </div>
</html>