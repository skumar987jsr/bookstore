<?php
   // @include 'config.php';

    if(isset($_POST['submit']))
    {
        // important for extra security purpose in form        
        // $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        // $name = mysqli_real_escape_string($conn, $filter_name);

        // $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        // $name = mysqli_real_escape_string($conn, $filter_email);
        
        // $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
        // $name = mysqli_real_escape_string($conn, $filter_pass);

        // $filter_cpass = filter_var($_POST['cpass'], FILTER_SANITIZE_STRING);
        // $name = mysqli_real_escape_string($conn, $filter_cpass);

        // $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = `$email`") or die('Query Failed');

        // if(mysqli_num_rows($select_users) > 0){
        //     $message[] = 'User Already Exist';
        // }
        // else{
        //     if($pass != $cpass){
        //         $message[] = 'Confirm Password Not Matched!';
        //     }
        //     else{
        //         mysqli_query($conn, "INSERT INTO `user`(name, email, password) VALUES(`$name`, `$email`, `$pass`)") or die('Query Failed');

        //         $message[] = 'Registered Successfully !';
        //     }
        // }

        $conn = mysqli_connect("localhost", "root", "", "bookstore");
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        // $user_type = $_POST['user_type'];

        // $sql = "insert into users(uname, email, password)
        // values('$username', '$email', '$pass')";

        if($pass == $cpass)
        {
            $sql = "insert into users(uname, email, password)
            values('$username', '$email', '$pass')";
            if(mysqli_query($conn, $sql))
            {
                $message[] = 'Registered Successfully !';
                // header("location: login3.php");
            }
            else
            {
                echo mysqli_error($conn);
            }
            // echo "Registered Successfully !";
        }
        else{
            // echo "Confirm Password Not Matched!";
            $message[] = 'Confirm Password Not Matched!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Online Book Store</title>

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
        <form action="register.php" method="post">
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

            <h3>Register Now</h3>
            <input type="text" name="uname" class="box" required placeholder="Enter Your Username">
            <input type="email" name="email" class="box" required placeholder="Enter Your Email Id">
            <input type="password" name="pass" class="box" required placeholder="Enter Your Password">
            <input type="password" name="cpass" class="box" required placeholder="Confirm Your Password">
            <!-- <select name="user_type" class="box">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select> -->
            <input type="submit" class="btn" name="submit" value="Register Now">
            <p>Already Have An Account?
                <a href="login3.php">Login Now</a>
            </p>
        </form>
    </section>
</body>
</html>