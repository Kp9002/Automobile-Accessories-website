<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Register</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">

</head>

<body>
    

    <div class="video">
        <video autoplay loop src="Video/Untitled video.mp4"></video>
    </div>

    <div class="wrapper">
        <!-- <span class="icon-close"><i class='bx bx-x'></i></span> -->
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#"  method="POST">
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="email" name="email" required>
                    <label for="email">Email</label>

                </div>
                <div class="input-box">
                    <span class="icon"> <i class='bx bxs-lock'></i></span>
                    <input type="password"  name="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" name="login" class="btn">login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <!-- Registration Form -->

        <div class="form-box register">

            <h2>Registration</h2>
            <form action="#" method="POST">

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-user'></i></i></span>
                    <input type="text" name=username required>
                    <label for="username">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="email"  name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"> <i class='bx bxs-lock'></i></span>
                    <input type="password" id="password"   name="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"> <i class='bx bxs-lock'></i></span>
                    <input type="password" id="cnfrm-password"  name="cnfrmpassword" required>
                    <label>Confirm Password</label>
                    <p id="message"></p>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn" name="submit" onclick="checkPassword()">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>

        
                <script src="login.js"></script>


                <!-- php -->
                <?php

                include 'config.php';

                //register.php

                if(isset($_POST['submit']))
                {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $cpaaword = $_POST['cnfrmpassword'];
                    $duplicate = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username' OR email = '$email'");
                    if(mysqli_num_rows($duplicate) > 0)
                    {
                        echo
                        "<script> alert('Username or Email Has Already Taken') </script>";
                    }
                    else
                    {
                        if($password == $cpaaword)
                        {
                            $query = "INSERT INTO register VALUES('$username', '$email', '$password')";
                            mysqli_query($conn, $query);
                            echo
                            "<script> alert('Registration Successful') </script>";
                        }
                        else
                        {
                            echo
                            "<script> alert('Password Does Not Match') </script>";
                        }
                    }
                }

                //login.php

                if(isset($_POST['login']))
                {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $result  = mysqli_query($conn, "SELECT * FROM register WHERE email = '$email'");
                    $row = mysqli_fetch_assoc($result);
                    if(mysqli_num_rows($result) > 0)
                    {
                        if($password == $row['password'])
                        {
                            $_SESSION['login'] = true;
                            $_SESSION['email'] = $row['email'];
                            header("Location: index.php");
                        }
                        else
                        {
                            echo
                            "<script> alert('Wrong Password') </script>";
                        }
                    }
                    else
                    {
                        echo
                        "<script> alert('User Not Registered') </script>";
                    }
                }
                ?>




</body>

</html>