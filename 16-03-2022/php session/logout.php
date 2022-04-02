<?php 
session_start();

if(!isset($_SESSION['username'])){
    header("Location:login.php");
}

if(isset($_SESSION['username'])){
    setcookie("PHPSSID","",time() + 3600, "/");
    echo "<center>Welcome ".$_SESSION['username']."</center><br>";
}

if(isset($_POST['logout'])){
    session_unset();
    setcookie("PHPSSID","",time() - 3600, "/");
    session_destroy();
    header("refresh:0,url=login.php");
}

?>
<center>
<form method="POST">
    <input type="submit" name="logout" value="logout" />
</form>
</center>
