<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Items Details - Online Book Store</title>

    <link rel="stylesheet" href="../CSS/book.css">
    <!-- <script type="text/javascript" src="../JS/book.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- heder section starts here -->
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
                <a href="#" class="fa fa-shopping-cart"></a>
                <div id="login-btn" class="fa fa-user"></div>
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
                <a href="index.html">Home</a>
                <a href="index.html">Featured</a>
                <a href="index.html">arrivals</a>
                <a href="index.html">Reviews</a>
                <a href="index.html">Blogs</a>
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

    <div class="login-form-container">
        <div id="close-login-btn" class="fa fa-times"></div>
        <form action="">
            <h3>Sign In</h3>
            <span>Username</span>
            <input type="email" name="" class="box" placeholder="Enter your Email Id" id="">
            <span>Password</span>
            <input type="password" name="" class="box" placeholder="Enter Your Password" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember">
                <label for="remember">Remember Me</label>
            </div>
            <input type="submit" value="Sign In" class="btn">
            <P>Forget Password ? &nbsp; <a href="#">Click Here</a></P>
            <P>Don't Have An Account ? &nbsp; <a href="#">Create An Account</a></P>
        </form>
    </div>

    <script type="text/javascript">
        let loginForm = document.querySelector('.login-form-container');
        document.querySelector('#login-btn').onclick = () => {
            loginForm.classList.toggle('active');
        }
        document.querySelector('#close-login-btn').onclick = () => {
            loginForm.classList.remove('active');
        }
    </script>

    <!-- cart items details starts -->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Books</th>
                <th>Quantity</th>
                <th>Sub-Total</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="../Images/Books/The Blue Umbrealla.jpg">
                        <div>
                            <p>The Blue Umbrealla</p>
                            <small>Price: $ 25.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1">
                </td>
                <td>$ 25.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="../Images/Books/The Great Indian Novels.jpg">
                        <div>
                            <p>The Great Indian Novels</p>
                            <small>Price: $ 22.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1">
                </td>
                <td>$ 22.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="../Images/Books/Fear Not BE Strong.jpg">
                        <div>
                            <p>Fear Not Be Strong</p>
                            <small>Price: $ 26.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1">
                </td>
                <td>$ 26.00</td>
            </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$ 200.00</td>
                </tr>
                <tr>
                    <td>GST</td>
                    <td>$ 35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$ 235.00</td>
                </tr>
            </table>
        </div>
    </div>
    <!-- cart items details ends -->

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
                <a href="index.html">
                    <i class="fa fa-arrow-right"></i>
                    Home
                </a>
                <a href="index.html">
                    <i class="fa fa-arrow-right"></i>
                    Featured
                </a>
                <a href="index.html">
                    <i class="fa fa-arrow-right"></i>
                    Arrivals
                </a>
                <a href="index.html">
                    <i class="fa fa-arrow-right"></i>
                    Reviews
                </a>
                <a href="index.html">
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
    </section>
    <!-- footer section ends -->
</body>
</html>