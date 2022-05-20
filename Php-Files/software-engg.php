<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Engg. : Online Book Store</title>
    
    <!-- CSS -->
    <link href="../CSS/drawing.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/book.css">

    <!-- <meta name="robots" content="noindex,follow" /> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->

    <!-- font awesome cdn link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

        <!-- <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest"> -->

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<!-- header section starts here -->
<header class="header">
    <div class="header-1">
        <a href="#" class="logo">
            <i class="fa fa-book"></i>
            Dream Book
        </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="Search Here ..." id="search-box">
            <label for="search-box" class="fa fa-search"></label>
        </form>

        <div class="icons"> 
            <div id="search-btn" class="fa fa-search"></div>
            <a href="#" class="fa fa-heart"></a>
            <a href="cart.php" target="_blank" class="fa fa-shopping-cart"></a>
            <a href="login3.php" id="login-btn" class="fa fa-user">
                <!-- <div id="login-btn" class="fa fa-user"></div> -->
            </a>
        </div>
    </div>

    <script>
        let searchForm = document.querySelector('.search-form');
        document.querySelector('#search-btn').onclick = () => {
            searchForm.classList.toggle('active');
        }

        window.onscroll = () => {
            searchForm.classList.remove('active');
            if (window.scrollY > 80) {
                document.querySelector('.header .header-2').classList.add('active');
            }
            else {
                document.querySelector('.header .header-2').classList.remove('active');
            }
        }

        window.onload = () => {
            if (window.scrollY > 80) {
                document.querySelector('.header .header-2').classList.add('active');
            }
            else {
                document.querySelector('.header .header-2').classList.remove('active');
            }
            fadeout();
        }
    </script>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#featured">Featured</a>
            <a href="#arrivals">arrivals</a>
            <a href="#reviews">Reviews</a>
            <a href="#blogs">Blogs</a>
        </nav>
    </div>
</header>
<!-- heder section ends here -->

<!-- bottom navbar starts -->
<nav class="bottom-navbar">
    <a href="#home" class="fa fa-home"></a>
    <a href="#featured" class="fa fa-list"></a>
    <a href="#arrivals" class="fa fa-tags"></a>
    <a href="#reviews" class="fa fa-comments"></a>
    <a href="#blogs" class="fab fa-bluetooth-b"></a>
    <!-- <a href="#blogs" class="fab fa-blogger"></a> -->
    <!-- <a href="#blogs" class="fab fa-blogger-b"></a> -->
</nav>
<!-- bottom navbar ends -->

<!-- <style>
  .active{
    max-width: 300px;
    max-height: 700px;
    padding: 5px;
  }
</style> -->

<nav class="bottom-navbar">
  <a href="#home" class="fas fa-home"></a>
  <a href="#featured" class="fas fa-list"></a>
  <a href="#arrivals" class="fas fa-tags"></a>
  <a href="#reviews" class="fas fa-comments"></a>
  <a href="#feedback" class="fas fa-feedback"></a>
</nav>
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">
            <img data-image="red" class="active" src="../Images/Books/k6.png" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Books</span>
          <h2>Software Engineering</h2>
          <h3>~ By <i> Roger S. Pressman &nbsp;&&nbsp; Bruce R. Maxim</i></h3>
          <br>
          <p> Software Engineering by <strong><i> Roger S. Pressman &nbsp;&&nbsp; Bruce R. Maxim</i></strong> is suggested as textbook for studying the following subjects :
            <br> Software Engineering in Computer Engineering Semester 3 (Kolhan University)
            </p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
          <span>&#8377; 369</span>
          <a href="./cart.html" class="cart-btn">Add to cart</a>
        </div>
      </div>
    </main>

    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h2>Our Locations</h2>
                <a href="#">
                    <i class="material-icons">location_on</i>
                    <!-- <i class="fas fa-map-marker-alt"></i> -->
                    India
                </a>
                <a href="#">
                    <i class="material-icons">location_on</i>
                    U.S.A.
                </a>
                <a href="#">
                    <i class="material-icons">location_on</i>
                    Russia
                </a>
                <a href="#">
                    <i class="material-icons">location_on</i>
                    France
                </a>
                <a href="#">
                    <i class="material-icons">location_on</i>
                    Africa
                </a>
                <a href="#">
                    <i class="material-icons">location_on</i>
                    Japan
                </a>
            </div>

            <div class="box">
                <h2>Quick Links</h2>
                <a href="#home">
                    <i class="fa fa-arrow-right"></i>
                    Home
                </a>
                <a href="#featured">
                    <i class="fa fa-arrow-right"></i>
                    Featured
                </a>
                <a href="#arrivals">
                    <i class="fa fa-arrow-right"></i>
                    Arrivals
                </a>
                <a href="#reviews">
                    <i class="fa fa-arrow-right"></i>
                    Reviews
                </a>
                <a href="#blogs">
                    <i class="fa fa-arrow-right"></i>
                    Blogs
                </a>
            </div>

            <div class="box">
                <h2>Extra Links</h2>
                <a href="#">
                    <i class="fa fa-arrow-right"></i>
                    Account Info.
                </a>
                <a href="#">
                    <i class="fa fa-arrow-right"></i>
                    Ordered Items
                </a>
                <a href="#">
                    <i class="fa fa-arrow-right"></i>
                    Privacy Policy
                </a>
                <a href="#">
                    <i class="fa fa-arrow-right"></i>
                    Payment Method
                </a>
                <a href="#">
                    <i class="fa fa-arrow-right"></i>
                    Our Services
                </a>
            </div>

            <div class="box">
                <h2>Contact Info.</h2>
                <a href="#">
                    <i class="fa fa-phone"></i>
                    +123-456-7890
                </a>
                <a href="#">
                    <i class="fa fa-phone"></i>
                    +123-456-7890
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    skumar987jsr@gmail.com
                </a>
                <img src="../Images/worldmap.png" class="map" alt="">
            </div>
        </div>

        <div class="share">
            <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
            <a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
            <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a>
            <a href="https://in.linkedin.com/" target="_blank" class="fa fa-linkedin"></a>
            <a href="https://www.pinterest.com/" target="_blank" class="fa fa-pinterest"></a>
        </div>

        <div class="credit">
            <strong>Created By &nbsp;</strong>
            <span>Sourav Kumar - BCA</span>
            <strong>&nbsp; Copyright &copy; | All Rights Reserved!</strong>
        </div>
        <!-- footer section ends -->
        
        <!-- loader starts -->
        <!-- <div class="loader-container">
            <img src="../Images/loader-img.gif" alt="">
        </div>
        
        <script>
            function loader(){
                document.querySelector('.loader-container').classList.add('active');
            }
            function fadeout(){
                setTimeout(loader, 3600);
            }
            </script> -->
        <!-- loader ends -->
    </section>
    <!-- footer section ends -->

    <!-- Scripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
    <script src="./js/product.js"></script> -->
  </body>
</html>