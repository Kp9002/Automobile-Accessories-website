<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">

</head>

<body>
    

    <div class="video">
        <video autoplay loop src="Video/Untitled video.mp4"></video>
    </div>

    <div class="wrapper">
        <!-- <span class="icon-close"><i class='bx bx-x'></i></span> -->
        <div class="form-box contctus">

            <h2>CONTACT US</h2>
            <form action="#" method="POST">

            <div class="input-box">
                <span class="icon"><i class='bx bxs-user'></i></span>
                <input type="name" name="name" required>
                <label for="Enter Your Name">Enter Your Name</label>
                </div>    

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="email" name="email" required>
                    <label for="email">Email</label>

                </div>


               <div class="input-box">
                    <span class="icon"> <i class='bx bxs-mobile'></i></span>
                    <input type="mobile number"  name="number" required>
                    <label>Number</label>
                </div>


                <div class="input-box">
                    <span class="icon"> <i class='bx bxs-message'></i></span>
                    <input type="message" " id="" cols="30" rows="10" name="message" required>
                    <label>Enter Your Message</label>
                </div>

                <button type="submit" name="send" class="btn">SEND</button>

        
                <script src="login.js"></script>


                </div>
            </form>
        </div>
</div>
        <?php

        include 'config.php';

        if(isset($_POST['send']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $number=$_POST['number'];
            $message=$_POST['message'];

            $sql="INSERT INTO `contact` (`name`, `email`, `number`, `message`) VALUES ('$name', '$email', '$number', '$message')";
            
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                echo "Data inserted successfully";
                header("location:index.php");
            }
            else
            {
                echo "Data not inserted successfully";
            }

        }

        ?>




</body>

</html>