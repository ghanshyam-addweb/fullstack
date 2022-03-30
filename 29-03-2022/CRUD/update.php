<?php
$id=1;
$con = mysqli_connect("localhost", "root", "", "29-march") or die("connection error.....! plese check your connection queries.");
$Myquery=mysqli_query($con,"select * from Student where id=$id") or die("Error in query..! please check your query.");
while($data=mysqli_fetch_array($Myquery))
{
    $stu_id=$data["id"];
    $stu_name=$data["Name"];
    $stu_address=$data["address"];
    $stu_mobile=$data["mobile"];
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
        Id:<input type="text" name="id" value="<?php echo $stu_id ?>" /><br><br>
        Name:<input type="text" name="name" value="<?php echo $stu_name ?>" /><br><br>
        Address:<input type="text" name="address" value="<?php echo $stu_address ?>" /><br><br>
        Mobile:<input type="text" name="mobile" value="<?php echo $stu_mobile ?>" /><br><br>
        <input type="submit" name="Update" value="Update Data" />
    </form>
</body>
</html>

<?php
if (isset($_POST['Update'])) {
    $nid=$_POST['id'];
    $nname = $_POST['name'];
    $naddress = $_POST['address'];
    $nmobile = $_POST['mobile'];

    $query = mysqli_query($con, "update Student set name='$nname',address='$naddress', mobile=$nmobile where id=$nid") or die("Error in Query...!please check your query");
    if ($query) {
        echo "<script>alert('your Data is Updated');</script>";
    } else {
        echo "<script>alert('Error in Updating, please check your query');</script>";
    }
    mysqli_close($con);
}
?>