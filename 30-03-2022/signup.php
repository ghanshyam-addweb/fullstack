<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <center>
        <h2>Sign Up</h2>
        <form action="" method="POST">
           <label for="Name">Name :</label>
           <input type="text" name="name" id="name" placeholder="Enter your name" required /><br><br>
           <label for="Email">Email :</label>
           <input type="Email" name="email" id="email" placeholder="Enter your email" required><br><br>
           <label for="Address">Address :</label>
           <textarea name="Address" id="address" cols="25" rows="3" placeholder="Enter address" required></textarea><br><br>
           <label for="Mobile" >Mobile :</label>
           <input type="number" name="mo_num" id="mo_num" maxlength="10" placeholder="enter mobile number" required><br><br>
           <label for="password">Password :</label>
           <input type="password" name="password" id="password" placeholder="Enter password" required><br><br>
           <label for="confirmpassword">confirmpassword :</label>
           <input type="password" name="confirmpassword" id="confirmpassword" placeholder="retype password" required oninvalid="this.setCustomValidity('Enter valid password')"><br><br>
           <input type="submit" name="signup" id="signup" value="submit" />
        </form>
    </center>
</body>
</html>

<?php 
session_start();
if(isset($_POST['signup'])){
    $email = strtolower($_POST['email']);
    $name=$_POST['name'];
    $address = $_POST['Address'];
    $mobile = $_POST['mo_num'];
    $password = strtolower($_POST['password']);
    $confirmpassword = $_POST['confirmpassword'];

    // echo $name."<br>";
    // echo $email."<br>";
    // echo $address."<br>";
    // echo $mobile."<br>";
    // echo $password;
    
if($password == $confirmpassword){
    $con = mysqli_connect("localhost", "root", "", "users") or die("Error in connection quer..! please check your query.");
    $insert="INSERT INTO `user`(`email`, `name`, `address`, `mobile`, `password`) VALUES ('$email','$name','$address','$mobile','$password')";
    $query = mysqli_query($con,$insert) or die ("error in insert query..!please check insertion query.");
    if($query){
        echo "Sign up successful.";
        header("refresh:1,url=login.php");
    }
}
else if($password != $confirmpassword){
    echo "password doesn't match.please retype password."."<script>document.getElementById('confirmpassword').reset();document.getElementById('password').reset();</script>.";
    header("refresh:1,url=signup.php");
}
else{
        echo "Signup failed, please enter valid input.";
        header("Loction:signup.php");
    }
}
?>