<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BringStorm Shop Products</title>
    <!-- slick link -->
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <!-- css link -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- icons link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <!-- google-font link -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>

    
<body>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
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
        <div class="auth flex items-center">
          <div>
            <i class="fas fa-users"></i>
            
            <a><strong><?php echo $_SESSION['username']; ?></strong></a>
          </div>
          <span class="divider">|</span>
          <div>
            <i class="fas fa-user-plus"></i>
            <a href="../index.php?logout='1'" style="color: red;">logout</a>
          </div>
          <span class="divider">|</span>
          <div>
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
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
              <h5>Call US: (+880) 00 90008 719</h5>
              <h6>E-mail: stormbringer@gmail.com</h6>
            </div>
          </div>
          <!-- logo -->
          <div class="branding">
            <img src="../images/logo.png" alt="" />
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

      <!-- bottom-nav start -->
      <div class="navbar">
        <div class="container flex justify-center">
          <a href="./home.php">Home</a>
          <a href="./about_us.php">About us</a>
          <a href="./products.php">Products</a>
          <a href="./contact.php" class="active">Contact us</a>
        </div>
      </div>
      <!-- bottom-nav end -->
    </nav>
    <!-- Navbar ends here -->

    <div class="container">
      <div class="welcome flex items-center justify-center">
          <span><h2><br></br>BringStorm Shop</h2></span>
        </div>
        <div>
        <p><br></br></p>
          <p>
          BringStorm Shop is an online shop in Dhaka, Bangladesh.
        We believe time is valuable to our fellow Dhaka residents, 
        and that they should not have to waste hours in traffic, 
        brave harsh weather and wait in line just to buy necessities!  
        This is why we are providng every day needs to our customers’ 
        by this platform Dhaka. BringStorm Shop is a work in progress, 
        and we hope to get better over time.
        We are firm believers in using technology and education to improve Bangladesh, 
        and we will continue to invest all our effort in pushing the boundaries of technology.
          </p>
        </br>
        <p>If you have ideas on how we can improve, we would love to hear from you. Please do email us at stormbringer@gmail.com.</p>
        </br>
        </br>
        <span><h2>Contact us:</h2></span>
        <p><h3>
            Md. Rashiqur Rahman &nbsp &nbsp &nbsp Email: rashiqur.rahman@northsouth.edu </br>
            Sabbir Ahmed &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp Email: sabbir.ahmed15@northsouth.edu </br>
            Masruf Jaman &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp Email: masruf.jaman@northsouth.edu </br>
            Anandah Hossain Rafi &nbsp &nbsp &nbsp Email: hossain.rafi@northsouth.edu 
        </h3></p>
        </br>
        </br>

        </div>
      </div>


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

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  <?php endif ?>
  </script>
</body>
</html>