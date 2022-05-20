<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="../CSS/book.css"> -->
    <link rel="stylesheet" href="../CSS/book.css">


</head>
<body>
    <div class="login-form-container">
        <!-- <div id="close-login-btn" class="fa fa-times"></div> -->
            <form action="login.php" method="post">
                <?php
                    if(isset($message))
                    {
                        foreach($message as $message)
                        {
                             echo '
                            <div class="message">
                                <span>'.$message.'</span>
                                <i class="fas fa-times" onclick="this.parentElemet.remove();"></i>
                            </div>
                             ';
                            echo '<span class="message">'.$message.'</span>';
                        }
                    };
                ?>   

            <h3>Sign In</h3>
            <span>Username</span>
            <input type="email" name="email" class="box" placeholder="Enter your Email Id" id="">
            <span>Password</span>
            <input type="password" name="pass" class="box" placeholder="Enter Your Password" id="">

            <div class="checkbox">
                <input type="checkbox" name="" id="remember">
                <label for="remember">Remember Me</label>
            </div>

            <input type="submit" value="Sign In" name="sub" class="btn">
            <P>Forget Password ? &nbsp; <a href="#">Click Here</a></P>
            <P>Don't Have An Account ? &nbsp; <a target="_blank" href="register.php">Create An Account</a></P>
        </form>
    </div>
</body>
</html>