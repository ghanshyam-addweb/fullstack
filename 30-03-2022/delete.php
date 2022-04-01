<?php

header('refresh:1');

if(isset($_GET['email'])){
    
    $del=$_GET['email'];
    echo $del; 
    $con=mysqli_connect("localhost","root","","users") or die("Error in connection query....! Please check connection query.");
    $query=mysqli_query($con,"delete from user where email='$del'") or die('error in deletion query...!please check query');
    if($query){
    echo"<script>alert('data deleted')</script>";
    header('location:dashboard.php');
}
}
if(isset($_GET['email'])){
     header('location:dashboard.php');
}

?>