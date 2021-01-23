<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- icons link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/register.css" />
  </head>
<body>
  <!-- HEADER start here -->
  <header class="topbar">
      <div class="container flex justify-between items-center">
        <div class="icons">
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-google"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fas fa-search"></i></a>
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
              <h5>Call US: (+880) 00 90008 719</h5>
              <h6>E-mail: stormbringer@gmail.com</h6>
            </div>
          </div>
          <!-- logo -->
          <div class="branding">
            <a href="../index.php"><img src="../images/logo.png" alt="" /></a>
          </div>
          <div class="time flex items-center">
            <i class="far fa-clock"></i>
            <div>
              <h5>We are Available:</h5>
              <h6>Sat - Thu (8.00am - 10.00pm)</h6>
            </div>
          </div>
        </div>
      </div>
      <!-- top-nav end -->

      
    </nav>
    <!-- Navbar ends here -->

    <!-- register Form -->
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
    
    <div class="container">
  	<h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
    <hr />
      <div class="input-group">
        <label>Username</label>
          <input
          type="text"
          placeholder="Enter Username"
          name="username"
          value="<?php echo $username; ?>"
          id="username"
          required
        />
      </div>
        <div class="input-group">
  	        <label>Email</label>
            <input
                type="text"
                placeholder="Enter Email"
                name="email"
                value="<?php echo $email; ?>"
                id="email"
                required
            />
  	    </div>
  	    <div class="input-group">
  	        <label>Password</label>
            <input
                type="password"
                placeholder="Enter Password"
                name="password_1"
                id="password_1"
                required
            />
  	    </div>
  	    <div class="input-group">
  	        <label>Confirm password</label>
  	        <input
                type="password"
                placeholder="Repeat Password"
                name="password_2"
                id="password_2"
                required
            />
  	    </div>
  	    
          
        <button type="submit" class="registerbtn">Register</button>
        <p>
          By creating an account you agree to our
          <a href="#">Terms & Privacy</a>.
        </p>
        <p>
  		  Already have an account?  <a href="login.php">Sign in</a>
  	  </p>
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
              <img src="../images/play-store.png" alt="" />
              <img src="../images/app-store.png" alt="" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="../images/Logo2.png" alt="" />
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
          <i class="fa fa-copyright"></i> Copyright 2020 - 2020 |<strong
            style="color: #eebf00"
            >StormBringers</strong
          >| All Right Reserved
        </p>
      </div>
    </div>
    <!-- Footer end -->
</body>
</html>