<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <center>
            Username : <input type="text" name="username" id="username" placeholder="input username"  /><br><br>
            Password : <input type="password" name="password" id="password" placeholder="enter password" /><br><br>
            <input type="submit" name="login" id="login" value="login">
        </center>
    </form>
</body>
</html>

<?php 
 if(isset($_POST['login'])){
     $username = strtolower($_POST['username']);
     $password = strtolower($_POST['password']);

     $conn = mysqli_connect("localhost", "root", "", "29-march") or die("Error in connection query..! please check your query.");
     $selectquery="SELECT * FROM `user` WHERE username='$username'";
     $query = mysqli_query($conn,$selectquery) or die ("error in select query..!please check selection query.");
         
      $rows=mysqli_num_rows($query);
      if($rows>0){
          while($data = mysqli_fetch_array($query)){
          $rowusername = $data['username'];
          $rowpassword = $data['password'];
          }
          if($username == $rowusername && $rowpassword == $password){
              echo "Login Successful.Welcome $username";
              }
          else{
                echo "The value you entered dosen't match our records,please enter valid credentials.";
                header("refresh:5,url=login.php");
              }
    }
        mysqli_close($conn);
    }
 ?>