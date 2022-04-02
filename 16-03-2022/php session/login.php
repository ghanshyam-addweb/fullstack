<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple login logout Using Session </title>
</head>
<body>
    <center>
        <form  method="post">
            <h3>Login</h3>
            Username : <input type="text" name="username" placeholder="enter user-name"><br><br>
            Password : <input type="password" name="password" placeholder="enter password" ><br><br>
            <input type="submit" name="login" value="login">
        </form>
    </center>
</body>
</html>

<?php 
if(isset($_POST['login'])){
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];   
}
if(!empty($_SESSION['username']) || !empty($_SESSION['password'])) {
    header("Location:logout.php");
}
?>
