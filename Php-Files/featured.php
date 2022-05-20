<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Books - Online Book Store</title>

    <link rel="stylesheet" href="../CSS/book.css">
    <!-- <script type="text/javascript" src="../JS/book.js"></script> -->

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <a href="cart.php" class="fa fa-shopping-cart"></a>
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

    <!-- <div class="login-form-container">
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
    </script> -->

    <!-- featured section starts -->
    <section class="featured" id="featured">
        <h1 class="heading">
            <span>All &nbsp;&nbsp;Featured &nbsp;&nbsp;Books</span>
        </h1>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/k1.png" alt="">
                    </div>

                    <div class="content">
                        <h2>Data Communication</h2>
                        <div class="price">
                            <b>&#8377;</b> 399
                            <span><b>&#8377;</b> 439</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/white-tiger-arvind-adiga-harpercollins.jpg" alt="">
                    </div>
                    <div class="content">
                        <h2>The White Tiger</h2>
                        <div class="price">
                            <b>&#8377;</b> 239
                            <span><b>&#8377;</b> 289</span>
                        </div>

                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/k4.png" alt="">
                    </div>

                    <div class="content">
                        <h2>Engg. Mathematics - II</h2>
                        <div class="price">
                            <b>&#8377;</b> 119
                            <span><b>&#8377;</b> 145</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/The Mind.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>The Mind Game</h2>
                        <div class="price">
                            <b>&#8377;</b> 339
                            <span><b>&#8377;</b> 389</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>
            </div>

            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/k5.png" alt="">
                    </div>

                    <div class="content">
                        <h2>Automata Theory</h2>
                        <div class="price">
                            <b>&#8377;</b> 489
                            <span><b>&#8377;</b> 549</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/k2.png" alt="">
                    </div>

                    <div class="content">
                        <h3>Engineering Mechanics</h3>
                        <div class="price">
                            <b>&#8377;</b> 229
                            <span><b>&#8377;</b>  269</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/The Blue Umbrealla.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>The Blue Umbrella</h2>
                        <div class="price">
                            <b>&#8377;</b> 349 
                            <span><b>&#8377;</b> 379</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image image-width">
                        <img style="width: 95%;" src="../Images/Books/k6.png" alt="">
                    </div>

                    <div class="content">
                        <h4>Software Engineering</h4>
                        <div class="price">
                            <b>&#8377;</b> 299
                            <span><b>&#8377;</b> 349</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image image-width">
                        <img src="../Images/Books/k7.png" alt="">
                    </div>

                    <div class="content">
                        <h2>Database Systems</h2>
                        <div class="price">
                            <b>&#8377;</b> 139
                            <span><b>&#8377;</b> 179</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/MAgic & the Lost Temple.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>Magic & the Lost Temple</h2>
                        <div class="price">
                            <b>&#8377;</b> 179
                            <span><b>&#8377;</b> 199</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>
            </div>

            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/k10.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>Learn Web Development</h2>
                        <div class="price">
                            <b>&#8377;</b> 299
                            <span><b>&#8377;</b> 349 </span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/kamala-markandaya-nectar-in-a-sieve-createspace-independent-publishing-platform.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>Nectar In A Sieve</h2>
                        <div class="price">
                            <b>&#8377;</b> 279
                            <span><b>&#8377;</b> 319</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/In Custody.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>In Custody</h2>
                        <div class="price">
                            <b>&#8377;</b> 289
                            <span><b>&#8377;</b> 349</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/k3.png" alt="">
                    </div>

                    <div class="content">
                        <h3>Engineering Drawing</h3>
                        <div class="price">
                            <b>&#8377;</b> 319
                            <span><b>&#8377;</b> 359</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>
            </div>

            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="../Images/Books/k8.png" alt="">
                    </div>

                    <div class="content">
                        <h2>Network Security</h2>
                        <div class="price">
                            <b>&#8377;</b> 129
                            <span><b>&#8377;</b> 179</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img style="width: 96%;" src="../Images/Books/Chemistry.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>Chemistry</h2>
                        <div class="price">
                            <b>&#8377;</b> 319
                            <span><b>&#8377;</b> 359</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <img style="width:95%;" src="../Images/Books/k9.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>ASP.NET in C# & VB</h3>
                        <div class="price">
                            <b>&#8377;</b> 229
                            <span><b>&#8377;</b> 279</span>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        </div>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".featured-slider", {
                // slidesPerView: 1,
                // pagination: {
                //     el: ".swiper-pagination",
                //     clickable: true,
                // },
                // spaceBetween: 10,
                // loop: true,
                // centeredSlides: true,
                // autoplay: {
                //     delay: 1900,
                //     disableOnInteraction: false,
                // },
                // navigation: {
                //     nextE1: ".swiper-button-next",
                //     prevE1: ".swiper-button-prev",
                // },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        // spaceBetween: 10,
                    },
                    400: {
                        slidesPerView: 2,
                        // spaceBetween: 10,
                    },
                    712: {
                        slidesPerView: 3,
                        // spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 4,
                        // spaceBetween: 50,
                    },
                },
            });
        </script>
    </section>
    <!-- featured section ends -->

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