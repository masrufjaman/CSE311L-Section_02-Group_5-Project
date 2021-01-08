<?php
require('connection.inc.php');
require('functions.inc.php');
$msg = '';
if (isset($_POST['submit'])) {
    $username = get_safe_value($con, $_POST['username']);
    $password = get_safe_value($con, $_POST['password']);
    $sql = "SELECT * FROM admin_users where username='$username' and password='$password'";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        $_SESSION['ADMIN_LOGIN'] = 'yes';
        $_SESSION['ADMIN_USERNAME'] = '$username';
        header('location:admin.php');
        die();
    } else {
        $msg = "Please enter correct login details";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BringStrorm||Login Page</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/admin-login.css" />
</head>

<body>
    <!-- HEADER start here -->
    <header class="topbar">
        <div class="container flex justify-between items-center">
            <div class="icons">
                <a href="./index.html">Home</a>
                <a href="./about-us.html">About us</a>
                <a href="./products.html">Products</a>
                <a href="">Services</a>
                <a href="">Contact us</a>
            </div>
            <div class="auth flex items-center">
                <div>
                    <i class="fas fa-users"></i>
                    <a href="">Log in</a>
                </div>
                <span class="divider">|</span>
                <div>
                    <i class="fas fa-user-plus"></i>
                    <a href="./register.html">Register Now</a>
                </div>
                <span class="divider">|</span>
                <div>
                    <i class="fas fa-shopping-cart"></i>
                    <a href="">0 Items - ($0.00)</a>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER ends here -->

    <!-- Navbar starts here -->
    <nav>
        <!-- top-nav start -->
        <div class="top">
            <div class="container flex justify-between">
                <div class="contact flex items-center">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h5>Call US: (+880) 17 93798 719</h5>
                        <h6>E-mail: masruf.jaman@northsouth.edu</h6>
                    </div>
                </div>
                <!-- logo -->
                <div class="branding">
                    <img src="./images/logo.png" alt="" />
                </div>
                <div class="time flex items-center">
                    <i class="far fa-clock"></i>
                    <div>
                        <h5>Working Hours:</h5>
                        <h6>Mon - Sat (8.00am - 10.00pm)</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- top-nav end -->

        <!-- bottom-nav start -->
        <div class="navbar">
            <div class="container flex justify-center">
                <a href="./index.html">Home</a>
                <a href="">About us</a>
                <a href="./products.html">Products</a>
                <a href="">Blog</a>
                <a href="">Shop</a>
                <a href="">Services</a>
                <a href="">Gallery</a>
                <a href="">Contact us</a>
            </div>
        </div>
        <!-- bottom-nav end -->
    </nav>
    <!-- Navbar ends here -->

    <!-- login Form -->
    <div class="container">
        <form method="post" style="border: none;">
            <label for="uname"><b>Username</b></label>
            <input type="text" name="username" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" name="password" placeholder="Enter Password" required>
            <div class="field_error flex justify-center"><?php echo $msg ?></div>
            <button type="submit" name="submit"><a href="./admin.html" style="text-decoration: none;">Login</a></button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </form>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn"><a href="login.html" style="color: #f1f1f1; text-decoration:none;">Back</a></button>

        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    </form>
    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row flex">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android & ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="/images/play-store.png" alt="" />
                        <img src="/images/app-store.png" alt="" />
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="/images/Logo.png" alt="" />
                    <p>
                        Our Purpose Is To Sustainably Make the pleasure and Benefits of
                        Sports Accessible to the Many.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr />

            <p class="coyright">
                <i class="fa fa-copyright"></i> Copyright 2020 - 2020 |<strong style="color: #eebf00">StormBringers</strong>| All Right Reserved
            </p>
        </div>
    </div>
    <!-- Footer end -->
</body>

</html>