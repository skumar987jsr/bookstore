<?php
    session_start();
    $email = $_SESSION["email"] ?? null;
     if($email){
         $login = 1;
    //     echo $_SESSION["uname"].", Welcome To Home Page !!!";
     }
     else{
         $login = 0;
      //  header("Location: login3.php");
     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Book Store</title>

    <link rel="stylesheet" href="../CSS/book.css">
    <!-- <script type="text/javascript" src="../JS/book.js"></script> -->

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>4444444
    
    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <!-- header section starts here -->
    <header class="header">
        <div class="header-1">
            <a href="index.php" class="logo">
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
                <a href="login3.php" id="login-btn" class="fa fa-user"></a>
                <!-- <a href="login3.php" id="login-btn" class="fa fa-user user-icon"> -->
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
                <a href="#feedback">Feedback</a>
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
        <a href="#feedback" class="material-icons"></a>
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
            <P>Don't Have An Account ? &nbsp; <a target="_blank" href="register.php">Create An Account</a></P>
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

    <!-- home section starts -->
    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h2>Upto 45% Off</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia pra nt expedi tam voluptates est,
                    ex officiis voluptatum necessitatibus! Exercitationem.</p>
                <a href="#" class="btn">Shop Now</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide">
                        <img src="../Images/Books/Fear Not BE Strong.jpg" alt="">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="../Images/Books/k2.png" alt="">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="../Images/Books/The Blue Umbrealla.jpg" alt="">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="../Images/Books/k3.png" alt="">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="../Images/Books/In Custody.jpg" alt="">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="../Images/Books/k8.png" alt="">
                    </a>
                </div>
                <img src="../Images/stand.png" class="stand" alt="">
            </div>

            <script>
                var swiper = new Swiper(".books-slider", {
                    // slidesPerView: 1,
                    // spaceBetween: 10,
                    // pagination: {
                    //     el: ".swiper-pagination",
                    //     clickable: true,
                    // },
                    loop: true,
                    centeredSlides: true,
                    autoplay: {
                        delay: 1900,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1,
                            // spaceBetween: 10,
                        },
                        712: {
                            slidesPerView: 2,
                            // spaceBetween: 20,
                        },
                        1024: {
                            slidesPerView: 3,
                            // spaceBetween: 50,
                        },
                    },
                });
            </script>
        </div>
    </section>
    <!-- home section ends -->

    <!-- icons settings starts -->
    <section class="icons-container">
        <div class="icons">
            <i class="fa fa-paper-plane"></i>
            <div class="content">
                <h2>Free Shipping</h2>
                <p>Order Over <b>&#8377;</b> 225</p>
            </div>
        </div>

        <div class="icons">
            <i class="fa fa-lock"></i>
            <div class="content">
                <h2>Secure Payment</h2>
                <p>100% Secure Payments</p>
            </div>
        </div>

        <div class="icons">
            <!-- <i class="fas fa-redo"></i> -->
            <i class="material-icons">redo</i>
            <div class="content">
                <h2>Easy Returns</h2>
                <p>10 Days Returns</p>
            </div>
        </div>

        <div class="icons">
            <!-- <i class='fas'&#xf2f9;></i> -->
            <!-- <i class="fas fa-headset"></i> -->
            <!-- <i style='font-size: 20px' class='fas'>&#xf590;</i> -->
            <i class="material-icons">headset_mic</i>
            <div class="content">
                <h2>24/7 Support</h2>
                <p>Call Us Anytime</p>
            </div>
        </div>
    </section>
    <!-- icons settings ends -->

    <!-- featured section starts -->
    <section class="featured" id="featured">
        <h1 class="heading">
            <span>Featured &nbsp;&nbsp;Books</span>
        </h1>
        <div class=" swiper featured-slider">
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
                        <h2 style="font-size: 1.575rem;">Data Communication</h2>
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
                        <h2>Engg. Maths - II</h2>
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
                        <img src="../Images/Books/The Mind Game.jpg" alt="">
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

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>

                    <div class="image">
                        <a href="software-engg.php">
                            <img src="../Images/Books/k6.png" alt="">

                        </a>
                    </div>

                    <div class="content">
                        <h2>Software Engineering</h2>
                        <div class="price">
                            <b>&#8377;</b> 369
                            <span><b>&#8377;</b> 399</span>
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
                        <img src="../Images/Books/Learn How To Fly.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>Learn How To Fly</h2>
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
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        </div>

        <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
        <script>
            var swiper = new Swiper(".featured-slider", {
                // slidesPerView: 1,
                // pagination: {
                //     el: ".swiper-pagination",
                //     clickable: true,
                // },
                spaceBetween: 10,
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 1900,
                    disableOnInteraction: false,
                },
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

        <a href="featured.php" target="_blank" class="btn">&nbsp;&nbsp;See More &#8594;</a>
    </section>
    <br><br>
    <!-- featured section ends -->

    <!-- newsletter section starts -->
    <?php
        if(isset($_POST['submit']))
        {
            $conn = mysqli_connect("localhost", "root", "", "bookstore");
            $email = $_POST['email'];
    
            $sql = "insert into subscribers(email) 
                    values('$email')";
    
            if(mysqli_query($conn, $sql))
            {
                $message[] = 'Thanks, For Subscribing ...';
                // header("location: login3.php");
            }
            else
            {
                echo mysqli_error($conn);
            }               
        }
    ?>
    <section class="newsletter">
        <form action="index.php" method="post">
            <?php
                if(isset($message))
                {
                    foreach($message as $message)
                    {
                                    // echo '
                                    // <div class="message">
                                    //     <span>'.$message.'</span>
                                    //     <i class="fas fa-times" onclick="this.parentElemet.remove();"></i>
                                    // </div>
                                    // ';
                        echo '<div class="msg-box">
                                 <span class="message">'.$message.'</span>
                              </div>';
                    }
                };
            ?>   

            <h2>Subscribe For Latest Updates</h2>
            <input type="email" name="email" placeholder="Enter Email Id" class="box">
            <input type="submit" name="submit" value="Subscribe" class="box box-touch">
        </form>
    </section>
    <!-- newsletter section ends -->

    <!-- arirvals section starts -->
    <br><br>
    <section class="arrivals" id="arrivals">
        <h1 class="heading">
            <span>New &nbsp;&nbsp;Arrivals</span>
        </h1>

        <div class="swiper arrivals-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Books/k9.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>ASP.NET in C# & VB</h3>
                        <div class="price">
                            <b>&#8377;</b> 129
                            <span><b>&#8377;</b> 142</span>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Books/k10.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>Learning Web App Development</h3>
                        <div class="price">
                            <b>&#8377;</b> 249
                            <span><b>&#8377;</b> 299</span>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Arrivals/a3.jpg"
                            alt="">
                    </div>

                    <div class="content">
                        <h3>Godan</h3>
                        <div class="price">
                            <b>&#8377;</b> 299
                            <span><b>&#8377;</b> 229</span>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Books/k11.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>C# 6.0 in a Nutshell</h3>
                        <div class="price">
                            <b>&#8377;</b> 199
                            <span><b>&#8377;</b> 249</span>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Books/k12.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>C++ 14 Quick Syntax</h3>
                        <div class="price">
                            <b>&#8377;</b> 329
                            <span><b>&#8377;</b> 379</span>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="swiper arrivals-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Arrivals/a9.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>Sea Of Poppies</h3>
                        <div class="price">
                            <b>&#8377;</b> 289 
                            <span><b>&#8377;</b> 269</span>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Arrivals/a10.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>Fasting Feasting<h3>
                        <div class="price">
                            <b>&#8377;</b> 179
                            <span><b>&#8377;</b> 219</span>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Arrivals/a11.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>The House Of Blue Mangoes</h3>
                        <div class="price">
                        <b>&#8377;</b> 289
                            <span><b>&#8377;</b> 349</span>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Books/k14.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>JavaScript For Web Developers</h3>
                        <div class="price">
                        <b>&#8377;</b> 289
                            <span><b>&#8377;</b> 349</span>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Arrivals/a13.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>India's Struggle For Independence</h3>
                        <div class="price">
                            <b>&#8377;</b> 149
                            <span><b>&#8377;</b> 179</span>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Arrivals/a14.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>The Complete Works of Swami Vivekanand</h3>
                        <div class="price">
                            <b>&#8377;</b> 349
                            <span><b>&#8377;</b> 429</span>
                        </div>

                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <script>
            var swiper = new Swiper(".arrivals-slider", {
                spaceBetween: 10,
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        // spaceBetween: 10,
                    },
                    712: {
                        slidesPerView: 2,
                        // spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        // spaceBetween: 50,
                    },
                },
            });
        </script>
    </section>
    <!-- ariivals section ends -->

    <!-- deals section starts -->
    <section class="deal">
        <div class="content">
            <h2>Deal of the Day</h2>
            <h1>Upto 65% Off</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo enim magnam, explicabo necessitatibus
                tempore vero dolorum quo cupiditate ab pariatur.</p>
            <a href="#" class="btn">Shop Now</a>
        </div>

        <div class="image">
            <img src="../Images/Random/deal-img.jpg" alt="">
        </div>
    </section>
    <!-- deals section ends -->

    <!-- review section starts -->
    <br><br>
    <section class="reviews" id="reviews">
        <h1 class="heading">
            <span>Client's &nbsp;&nbsp;Reviews</span>
        </h1>

        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="../Images/People/p6.jpg" alt="">
                    <h2>Rao Harisha</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempore voluptatum repellendus
                        veniam recusandae dolorem, id debitis voluptatibus nemo? Sequi similique commodi maxime eaque.
                    </p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../Images/People/p7.jpg" alt="">
                    <h2>Valentina Sanders</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempore voluptatum repellendus
                        veniam recusandae dolorem, id debitis voluptatibus nemo? Sequi similique commodi maxime eaque.
                    </p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../Images/People/p8.jpeg" alt="">
                    <h2>Shane Mathews</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempore voluptatum repellendus
                        veniam recusandae dolorem, id debitis voluptatibus nemo? Sequi similique commodi maxime eaque.
                    </p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../Images/People/p9.jpeg" alt="">
                    <h2>Marlin Luna</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempore voluptatum repellendus
                        veniam recusandae dolorem, id debitis voluptatibus nemo? Sequi similique commodi maxime eaque.
                    </p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../Images/People/p13.jpeg" alt="">
                    <h2>Olive Peterson</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempore voluptatum repellendus
                        veniam recusandae dolorem, id debitis voluptatibus nemo? Sequi similique commodi maxime eaque.
                    </p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../Images/People/p11.jpeg" alt="">
                    <h2>Joey Tucker</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum tempore voluptatum repellendus
                        veniam recusandae dolorem, id debitis voluptatibus nemo? Sequi similique commodi maxime eaque.
                    </p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <!-- <i class="fa fa-star-half-o"></i> -->
                    </div>
                </div>
            </div>
        </div>

        <script>
            var swiper = new Swiper(".reviews-slider", {
                spaceBetween: 10,
                grabCursor: true,
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        // spaceBetween: 10,
                    },
                    712: {
                        slidesPerView: 2,
                        // spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        // spaceBetween: 50,
                    },
                },
            });
        </script>
    </section>
    <!-- review section ends -->

    <!-- blogs section stars -->
    <section class="blogs" id="blogs">
        <h1 class="heading">
            <span>Our &nbsp;&nbsp;Blogs</span>
        </h1>

        <div class="swiper blogs-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/People/p1.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>The Magic Of Words</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur similique consectetur possimus temporibus magni enim commodi perferendis pariatur tempore veritatis!</p>
                        <a href="#" class="btn">Read More ...</a>
                        <!-- <p>
                            <details>
                                <summary></summary>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione consequatur, maxime laudantium velit amet reiciendis obcaecati itaque ex eius aliquid veniam necessitatibus beatae reprehenderit iusto, autem aut vel corporis sunt temporibus explicabo. Impedit, nesciunt.
                            </details>
                        </p> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/People/p2.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>Igniting The World</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur similique consectetur possimus temporibus magni enim commodi perferendis pariatur tempore veritatis!</p>
                        <a href="#" class="btn">Read More ...</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/People/p3.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>The Travelling Pages</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur similique consectetur possimus temporibus magni enim commodi perferendis pariatur tempore veritatis!</p>
                        <a href="#" class="btn">Read More ...</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/People/p4.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2>Book Weaver</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur similique consectetur possimus temporibus magni enim commodi perferendis pariatur tempore veritatis!</p>
                        <a href="#" class="btn">Read More ...</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/People/p12.jpeg" alt="">
                    </div>

                    <div class="content">
                        <h2>Fiction Tournament</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur similique consectetur possimus temporibus magni enim commodi perferendis pariatur tempore veritatis!</p>
                        <a href="#" class="btn">Read More ...</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="../Images/Random/b7.jpeg" alt="">
                    </div>

                    <div class="content">
                        <h2>Sparkly Literary</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur similique consectetur possimus temporibus magni enim commodi perferendis pariatur tempore veritatis!</p>
                        <a href="#" class="btn">Read More ...</a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var swiper = new Swiper(".blogs-slider", {
                spaceBetween: 10,
                grabCursor: true,
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        // spaceBetween: 10,
                    },
                    712: {
                        slidesPerView: 2,
                        // spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        // spaceBetween: 50,
                    },
                },
            });
        </script>
    </section>
    <!-- blogs section ends -->

    <!-- feedback section starts  -->
    <section class="feedback" id="feedback">
        <h1 class="heading">
            <span>Feedback</span>
        </h1><br><br>
        <section class="newsletter">
            <form action="">
                <h2>Give Your Feedback Here ...</h2>
                <a href="feedback.php" class="btn">Feedback</a>
            </form>
        </section>
    </section>
    <!-- feedback section ends -->

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
                <a href="#feedback">
                    <i class="fa fa-arrow-right"></i>
                    Feedback
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
         -->
        <script>
            function loader(){
                document.querySelector('.loader-container').classList.add('active');
            }
            function fadeout(){
                setTimeout(loader, 3600);
            }
            </script>
        <!-- loader ends -->
    </section>

    <script type="text/javascript">
        let isLogged = +("<?php echo"$login"?>")? true : false;
        console.log(isLogged)
        if(isLogged){
           const btn = document.querySelector('#login-btn');
           btn.classList.remove("fa", "fa-user");
           btn.textContent = "logout";
           btn.href = "logout.php";
        } 

    </script>

</body>

</html>