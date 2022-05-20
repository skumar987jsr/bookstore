<?php
   // @include 'config.php';
    session_start();
    if(isset($_POST["submit"])){
        $conn = mysqli_connect("localhost", "root", "", "bookstore");
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        $sql = "select * from users where email = '$email' and password = '$pass'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($result);
        if($row > 0){
            $_SESSION["email"] = $row[0];
            header("location: index.php");
        }
        else{
            $message[] = 'Invalid Email Id Or Password';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Online Book Store</title>

    <link rel="stylesheet" href="../CSS/book.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <section class="form-container">
        <form action="login3.php" method="post">
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
                        echo '<span class="message">'.$message.'</span>';
                    }
                };
            ?>

            <h3>Login Now</h3>
            <input type="email" name="email" class="box" required placeholder="Enter Your Email Id">
            <input type="password" name="pass" class="box" required placeholder="Enter Your Password">
            <!-- <select name="user_type" class="box">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select> -->
            <input type="submit" class="btn" name="submit" value="Login">
            <P>
                Don't Have An Account ? &nbsp; 
                <a href="register.php">Create An Account</a>
            </P>
        </form>
    </section>
</body>
</html>