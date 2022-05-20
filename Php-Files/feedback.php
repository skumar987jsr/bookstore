<?php
   // session_start();
    // if($_SESSION["umame"]){
    //     // echo "welcome";
    // }
    // else{

    // }

    if(isset($_POST['submit']))
    {
        $conn = mysqli_connect("localhost", "root", "", "bookstore");
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST['email'];
        $country = $_POST["country"];
        $subject = $_POST["subject"];

        $sql = "insert into feedback(firstname, lastname, email, country, subject) 
                values('$firstname', '$lastname', '$email', '$country', '$subject')";

        if(mysqli_query($conn, $sql))
        {
            $message[] = 'Thanks, For Your Feedback ...';
            // header("location: login3.php");
        }
        else
        {
            echo mysqli_error($conn);
        }               
    }
?>

<!DOCTYPE html>    
<html>    
    <head>    
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title> Feedback </title>

        <link rel="stylesheet" href="../CSS/book.css"> 
        <link rel="stylesheet" href="../CSS/feedback.css"> 
        <!-- font awesome cdn link  -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
          
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
      
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            .msg-box{
                height: 28px;
                width: 385px;
                /* border: 1.5px solid #FFD700; */
                border-radius: 8px;
                text-align: center;
                position: relative;
                left: 350px;
                bottom: 16px;
            }
        </style>   
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

        <section class="arrivals" id="arrivals">
            <h1 class="heading">
                <span>FEEDBACK &nbsp;&nbsp;FORM</span>
            </h1>

            <!-- <h2>FEED BACK FORM</h2>     -->
            <br>
            <div class="container">    
                <form action="feedback.php" method="post">   
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
    
                      <div class="row">    
                          <div class="col-25">    
                            <label for="fname">First Name</label>    
                          </div>  

                          <div class="col-75">    
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">    
                          </div>    
                      </div>    

                      <div class="row">    
                            <div class="col-25">    
                              <label for="lname">Last Name</label>    
                            </div>   

                            <div class="col-75">    
                              <input type="text" id="lname" name="lastname" placeholder="Your last name..">    
                            </div>    
                      </div>   

                      <div class="row">    
                            <div class="col-25">    
                              <label for="email">Email Id</label>    
                            </div>  

                            <div class="col-75">    
                              <input type="email" id="email" name="email" placeholder="Your mail id..">    
                            </div>    
                      </div>  
                        
                      <div class="row">    
                            <div class="col-25">    
                              <label for="country">Country</label>    
                            </div>   

                            <div class="col-75">    
                                <select id="country" name="country">    
                                    <option value="none">Select Country</option>       
                                    <option value="usa">USA</option>      
                                    <option value="india">India</option>           
                                </select>    
                            </div>    
                      </div>    

                      <div class="row">    
                            <div class="col-25">    
                              <label for="feed_back">Feed Back</label>    
                            </div>  

                            <div class="col-75">    
                              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>    
                            </div>    
                      </div>    

                      <div class="row">    
                            <input type="submit" class="btn" value="Submit" name="submit">    
                      </div>    
                </form>    
            </div>   
      </section> 
    
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

      <script src="./js/script.js"></script>
    </body>    
</html>    