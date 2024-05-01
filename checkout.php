<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Checkout Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="tel"], select {
            width: 96%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Checkout</h2>
        <form action="#" method="POST">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" minlength="10" maxlength="10" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            
            <label for="payment">Payment Method:</label>
            <select id="payment" name="payment">
                <option value="cod">Cash On Delivery </option>
            </select>
            
            <input type="submit" name ="submit" value="Place Order">
        </form>
    </div>

    <?php

        include 'config.php';
        
        if(isset($_POST['submit']))
    {
        $name =  $_POST['name'];
        $email = $_POST['email'];
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $payment = mysqli_real_escape_string($conn, $_POST['payment']);
// Add more variables as needed

// SQL query to insert data
$sql = "INSERT INTO orders (name, email, phone, address, payment) VALUES ('$name', '$email', '$phone', '$address', '$payment')";
// Add more columns and variables as needed

        if ($conn->query($sql) === TRUE)
       {
         echo "your order has been placed";
         header("location:index.php");
             
       }
    
   
      else
     {
      echo "Error: " . $sql . "<br>" . $conn->error;
     }
}

// Close connection

?>

        







</body>
</html>
