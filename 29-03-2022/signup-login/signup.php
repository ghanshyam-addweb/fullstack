<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
    <form method="POST">
        <center> 
            username : <input type="text" name="username" id="uname" placeholder="input username"  /><br><br>
            password : <input type="password" name="password" id="pwd" placeholder="enter password" /><br><br>
            <input type="submit" name="signup" id="signup" value="signup" />
        </center>
    </form>
</body>
</html>

<?php 
 if(isset($_POST['signup'])){
     $username = strtolower($_POST['username']);
     $password = strtolower($_POST['password']);
     $con = mysqli_connect("localhost", "root", "", "29-march") or die("Error in connection quer..! please check your query.");
     $insertquery="INSERT INTO `user`(`username`, `password`) VALUES ('$username','$password')";

     $query = mysqli_query($con,$insertquery) or die ("error in insert query..!please check insertion query.");
     if($query){
         echo "Sign up successful.";
         header("refresh:1,url=login.php");
     }
     else{
         echo "Signup failed, please enter valid input.";
         header("Loction:signup.php");
     }
 }
 ?>