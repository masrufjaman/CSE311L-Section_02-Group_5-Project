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
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BringStorm Shop</title>
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
          <div>
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
          </div>
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
          <a href="./home.php" class="active">Home</a>
          <a href="./about_us.php">About us</a>
          <a href="./products.php">Products</a>
          <a href="./contact.php">Contact us</a>
        </div>
      </div>
      <!-- bottom-nav end -->
    </nav>
    <!-- Navbar ends here -->

    <!-- Hero Section -->
    <header class="hero flex items-center">
      <div class="container">
      <div class="welcome flex items-center">
          <span><h3>BringStorm Shop</h3></span>
        </div>
        <div>
          <h1>The World's Best <span>Shopping</span> Website</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum ab
            tempora voluptatem earum atque, explicabo voluptatibus sapiente
            animi cupiditate velit esse blanditiis odit saepe illum.
          </p>
          <div>
            <button class="btn btn-primary">
              <a href="about_us.php">Read More</a>
            </button>
            <button class="btn btn-primary">
              <a href="products.php">Shop Now</a>
            </button>
          </div>
        </div>
      </div>
    </header>
    <!-- Hero Section -->

    <!-- Product Slide -->
    <section class="products">
      <div class="container">
        <h1 class="section-heading">Products</h1>
        <div class="slider">
          <!-- custom slider button -->
          <button class="slider-btn prev-btn">
            <i class="fas fa-angle-left"></i>
          </button>
          <button class="slider-btn next-btn">
            <i class="fas fa-angle-right"></i>
          </button>
          <div class="food-slider">
            <!-- Card-1 -->
            <div class="food-card">
              <div class="product-image flex justify-center">
                <img src="../images/A4 papar.jpg" alt="" />
              </div>
              <hr />
              <div>
                <h2>A4 Papar</h2>
                <div class="stars flex justify-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="fas fa-star-full-alt"></i>
                </div>
                <div class="price">Tk. 500</div>
                <div class="flex justify-center">
                </div>
              </div>
            </div>

            <!-- Card-2 -->
            <div class="food-card">
              <div class="product-image flex justify-center">
                <img src="../images/Coke- 2ltr.jpg" alt="" />
              </div>
              <hr />
              <div>
                <h2>Coke 2ltr</h2>
                <div class="stars flex justify-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-full-alt"></i>
                </div>
                <div class="price">Tk. 110</div>
                <div class="flex justify-center">
                </div>
              </div>
            </div>

            <!-- Card-3 -->
            <div class="food-card">
              <div class="product-image flex justify-center">
                <img src="../images/Pran Rice.jpg" alt="" />
              </div>
              <hr />
              <div>
                <h2>Pran Rice</h2>
                <div class="stars flex justify-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <div class="price">Tk. 287</div>
                <div class="flex justify-center">
                </div>
              </div>
            </div>

            <!-- Card-4 -->
            <div class="food-card">
              <div class="product-image flex justify-center">
                <img src="../images/Apple.jpg" alt="" />
              </div>
              <hr />
              <div>
                <h2>Apple 1Kg</h2>
                <div class="stars flex justify-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Tk. 179</div>
                <div class="flex justify-center">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center btn-wrapper">
          <button class="btn btn-primary"><a href="products.php">View More</a></button>
        </div>
      </div>
    </section>
    <!--Product Slide -->

    <!-- Our services start -->
    <section class="our-services">
      <div class="container">
        <h1 class="section-heading">Our Services</h1>
        <div class="card-wrapper flex">
          <!-- 1st card -->
          <div class="service-card">
            <i class="fas fa-truck" style="font-size: 3rem"></i>
            <h2>Free Home delivery</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta
              earum sed quam eum vitae dolores?
            </p>
            <button class="btn btn-secondary">Read More</button>
          </div>
          <!-- 2nd card -->
          <div class="service-card">
            <i
              class="fas fa-shopping-bag"
              style="font-size: 3rem; color: #eebf00"
            ></i>
            <h2 class="text-primary">30 Days Return Services</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta
              earum sed quam eum vitae dolores?
            </p>
            <button class="btn btn-primary">Read More</button>
          </div>
          <!-- 3rd card -->
          <div class="service-card">
            <i class="fas fa-money-check-alt" style="font-size: 3rem"></i>
            <h2>Money Back Guranted</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta
              earum sed quam eum vitae dolores?
            </p>
            <button class="btn btn-secondary">Read More</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Our services end -->

    <!-- Big deal timer start -->
    <section class="big-deal">
      <div class="container">
        <h1 class="section-heading text-pure">Big Deals of the Week</h1>
        <div class="timer">
          <div>
            <span>02</span>
            <span>Days</span>
          </div>
          <div>
            <span>24</span>
            <span>Hours</span>
          </div>
          <div>
            <span>55</span>
            <span>Minutes</span>
          </div>
          <div>
            <span>58</span>
            <span>Seconds</span>
          </div>
        </div>
      </div>
    </section>
    <!-- Big deal timer end -->

    <!-- Contact us start -->
    <section class="contact-us flex">
      <div class="contact-info-wrapper">
        <h1 class="section-heading">Contact us</h1>
        <div class="contact-info">
          <div>
            <div>
              <i class="fas fa-phone-alt"></i>
              <div>
                <span>Call US:</span>
                <span>(+880) 00 90008 719</span>
              </div>
            </div>
            <!-- 2nd -->
            <div>
              <i class="fas fa-envelope-square"></i>
              <div>
                <span>E-mail:</span>
                <span>stormbringer@gmail.com</span>
              </div>
            </div>
            <!--  -->
            <div>
              <i class="far fa-clock"></i>
              <div>
                <span>We are Available:</span>
                <span>Sat - Thu (8.00am - 10.00pm)</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1816.9066955886406!2d88.59191545793055!3d24.387794238951397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbeef79a4cffd9%3A0x67feb1458d2f5e7!2z4Kak4KeH4Kaw4KeL4KaW4Ka-4Kam4Ka_4Kef4Ka-IOCmieCmpOCnjeCmpOCmsOCmquCmvuCnnOCmvg!5e0!3m2!1sen!2sbd!4v1609501081897!5m2!1sen!2sbd"
          width="100%"
          height="100%"
          frameborder="0"
          style="border: 0"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
      </div>
    </section>
    <!-- Contact us end -->

    <!-- ----- BRANDS ----- -->
    <div class="brands">
      <div class="small-container">
        <div class="row flex justify-center">
          <div class="col-5">
            <img src="/images/logo-godrej.png" alt="" />
          </div>
          <div class="col-5">
            <img src="/images/logo-oppo.png" alt="" />
          </div>
          <div class="col-5">
            <img src="/images/logo-coca-cola.png" alt="" />
          </div>
          <div class="col-5">
            <img src="/images/logo-paypal.png" alt="" />
          </div>
          <div class="col-5">
            <img src="/images/logo-philips.png" alt="" />
          </div>
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
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="js/app.js"></script>

    <?php endif ?>
</div>
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
  </script>
		
</body>
</html>