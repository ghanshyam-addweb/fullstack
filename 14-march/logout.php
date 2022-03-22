<?php
if(!isset($_COOKIE['username'])){
    header("Location:login.php");
}
if(isset($_COOKIE["username"])){
    echo "<center>Welcome ".$_COOKIE['username']."</center>";
}
if(isset($_POST['logout'])){
    setcookie("username","",time()-3600, "/");
    header("refresh:0;url=login.php");
}
?>
<center>
<form method="post">
<input type="submit" name="logout" value="logout" /> 
</form>
</center>

