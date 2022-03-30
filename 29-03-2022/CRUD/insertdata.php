<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<body>
    <form method="POST">
        ID: <input type="number" name="id"  /><br><br>
        Name : <input type="text" name="name" /><br><br>
        Address : <input type="text" name="address" /><br><br>
        Mobile : <input type="number" name="mobile"/><br><br>
        <input type="submit" name="insert" id="btn" value='InsertData' />
    </form>
</body>
</html>

<?php

if(isset($_POST['insert'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $con = mysqli_connect("localhost", "root", "", "29-march") or die("connection error.....! plese check your connection queries.");
    $query = mysqli_query($con, "Insert into `Student`(`id`, `Name`, `address`, `mobile`) values($id,'$name','$address',$mobile)") or die("Error in Query...!plese check your queries.");
    
    if ($query) {
        echo "<script>alert('Data Inserted into table studnet');</script>";
        // header('Location:retrivedata.php');
    } else {
        echo "<script>alert('Error in Inserting data ');</script>";
    }

    mysqli_close($con);
}
?>