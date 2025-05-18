<?php
// index.php
// Include the header
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection failed to database: " . mysqli_connect_error());
    }
    $name = $_POST['name'];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `address`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$address', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        //echo "Successfully inserted";
    } else {
        echo "Error: $sql <br> $con->error";
    }
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>wellcome to iit khadakpoor us trip from</h1>
        <p>Enter your details and submit your form to confirm your participent trip</p>

        <form action="index.php" method="POST">
            <input type="text" name="name" placeholder="Enter your name" >
            <input type="number" name="age" placeholder="Enter your age" >
            <input type="text" name="gender" placeholder="Enter your gender" >
            <input type="email" name="email" placeholder="Enter your email" >
            <input type="number" name="phone" placeholder="Enter your phone number" >
            <input type="text" name="address" placeholder="Enter your address" >
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>