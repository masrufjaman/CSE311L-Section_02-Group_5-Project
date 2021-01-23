<?php
  session_start();
?>

<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
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
          <a href="">Services</a>
          <a href="">Contact us</a>
        </div>
      </div>
      <!-- bottom-nav end -->
    </nav>
    <!-- Navbar ends here -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
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

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
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
  </script>
  <?php endif ?>
</body>

</html>