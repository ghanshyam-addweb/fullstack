<title>dashboard</title>

<?php
    session_start();
    $email = $_SESSION['email'];

    $con = mysqli_connect("localhost", "root", "", "users") or die("connection error.....! plese check your connection queries.");
    $user = mysqli_query($con, "select name from user where email='$email'");
    $rows=mysqli_num_rows($user);
      if($rows>0){
          while($data = mysqli_fetch_array($user)){
          $name = $data['name'];
          echo "welcome $name"."<br><br>";
          }
        }

    // $email=$_SESSION['email'];
    // $con = mysqli_connect("localhost", "root", "", "users") or die("connection error.....! plese check your connection queries.");
    $query=mysqli_query($con,"select * from user") or die("Error in query..! please check your query.");
    echo "<table border=2> <tr>  <td>EmaiID</td> <td>Name</td> <td>Address</td> <td>Mobile</td> <td>Password</td> <td>Update</td> <td>Delete</td>   </tr>";
    while($raw=mysqli_fetch_array($query))
    {
    echo "<tr>";
    echo "<td>".$raw["email"]."</td>";
    echo "<td>".$raw["name"]."</td>";
    echo "<td>".$raw["address"]."</td>";
    echo "<td>".$raw["mobile"]."</td>";
    echo "<td>".$raw["password"]."</td>";
    echo "<td>"."<a href=update.php?email=".$raw["email"].">Update</a>";
    echo "<td>"."<a href=delete.php?email=".$raw["email"].">delete</a>";

    echo "</tr>";
}
echo "</table>";
echo "<br><br>";
mysqli_close($con);

if(isset($_POST['logout'])){
    session_destroy();
    header("Location:login.php");
}
?>

<form method="POST">
    <input type="submit" name="adduser"  id="add" value="add user" />
</form>

<?php 
if(isset($_POST['adduser'])){
header("Location:signup.php");
}
?>

<form action="" method="POST">
            <input type="submit" name="logout" id="logout" value="Logout">
        </form>
        
<?php
if(isset($_POST['logout'])){
    session_destroy();
    header("Location:login.php");
    }
    if(!isset($_SESSION['email'])){
        header("Location:login.php");
    }
    ?>

       