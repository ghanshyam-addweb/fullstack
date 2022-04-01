<?php

session_start();
$email = $_SESSION['email'];

if(!$email){

    header("Location:login.php");
 }

if(isset($_GET['email'])){
    $getmail=$_GET['email'];
    
    $connection=mysqli_connect("localhost","root","","users") or die("connection error.....! plese check your connection queries.");
    $query=mysqli_query($connection,"select * from user where email='$getmail'") or die("Error in query..! please check your query.");;
    while($row=mysqli_fetch_array($query)){
        
        $u_name=$row['name'];
        $u_email=$row['email'];
        $u_mobile=$row['mobile'];
        $u_address=$row['address'];
        $u_password=$row['password'];
    }
}

else{
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <form method="post">
        Email:<input type="text" name="email" disabled value="<?php echo $u_email ?>" /><br><br>
        Name:<input type="text" name="name" value="<?php echo $u_name ?>" /><br><br>
        Address:<input type="text" name="address" value="<?php echo $u_address ?>" /><br><br>
        Mobile:<input type="text" name="mobile" value="<?php echo $u_mobile ?>" /><br><br>
        <input type="submit" name="Update" value="Update Data" />
    </form>
</body>
</html>

<?php
if (isset($_POST['Update'])) {
    // $nemail=$_POST['email'];
    $nname = $_POST['name'];
    $naddress = $_POST['address'];
    $nmobile = $_POST['mobile'];


    // echo $nemail;
    // echo $nname;
    // echo $naddress;
    // echo $nmobile;

    $con = mysqli_connect("localhost", "root", "", "users") or die("connection error.....! plese check your connection queries.");
    $query = mysqli_query($con, "update user set name='$nname',address='$naddress', mobile=$nmobile where email='$u_email'") or die("Error in updation Query...!please check your query");
    if ($query) {
        echo "<script>alert('your Data is Updated');</script>";
        header("refresh:1,url=dashboard.php");
    } else {
        echo "<script>alert('Error in Updating, please check your query');</script>";
    }
    mysqli_close($con);
}
?>

