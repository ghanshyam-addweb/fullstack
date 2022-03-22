<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple login logout Using Cookies</title>
</head>
<body><center>
<form  method="post">
    <h3>Login</h3>
Username : <input type="text" name="username"><br><br>
Password : <input type="password" name="password" ><br><br>
<input type="submit" name="login" value="login">
</form>
</center>
</body>
</html>

<?php

if(isset($_POST['login'])){
    $cookie_username = $_POST['username']; 
if(!empty($_POST["username"]) || !empty($_POST["password"])) {
    $cookie_username = $_POST['username'];
    setcookie ("username",$cookie_username,time()+ 3600, "/");
    echo "Cookies Set Successfuly";
    header("Location:logout.php");
}else {
    setcookie ("username","",time() + 3600);
    echo "Cookies Not Set.";
}
}
?>