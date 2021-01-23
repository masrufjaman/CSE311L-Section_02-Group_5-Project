<?php 
  session_start(); 

  if (!isset($_SESSION['adminname'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['adminname']);
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
    <style>
    
      table {
      border-collapse: collapse;
      width: 100%;
      color: #232b38;
      font-family: monospace;
      font-size: 25px;
      text-align: left;
      }

      th {
        background-color: #232b38;
        color: white;
      }

      tr:nth-child(even) {
      background-color: #f2f2f2
      }    
  
    </style>

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
    <?php  if (isset($_SESSION['adminname'])) : ?>
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
            <i class="fa fa-briefcase"></i>
            
            <a><strong><?php echo $_SESSION['adminname']; ?></strong></a>
          </div>
          <span class="divider">|</span>
          <div>
            <i class="fas fa-user-plus"></i>
            <a href="../index.php?logout='1'" style="color: red;">logout</a>
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
          <a href="./userdetails.php">User Details</a>
          <a href="./employee.php">Employee Details</a>
          <a href="./productdetails.php" class="active">Products Details</a>
        </div>
      </div>
      <!-- bottom-nav end -->
    </nav>
    <!-- Navbar ends here -->

    <form method="post" action="productdetails.php">
    <div class="container">
    <table>
      <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Product Code</th>
      </tr>
      <?php
        $conn = mysqli_connect("localhost", "root", "", "supershop_management_system");
      // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
     
      $sql = "SELECT id, product_name, product_price, product_qty, product_code FROM product";
      $result = $conn->query($sql);
  
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["id"]. "</td><td>" . $row["product_name"] . "</td><td>". $row["product_price"]. "</td><td>". $row["product_qty"]. "</td><td>". $row["product_code"]. "</td></tr>";
      }
        echo "</table>";
      } 
        else { echo "0 results"; }
      $conn->close();
      ?>
    </table>
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

  <?php endif ?>
  </script>
</body>
</html>

