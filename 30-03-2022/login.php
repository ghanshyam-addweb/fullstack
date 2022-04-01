<?php
session_start();

if(isset($_SESSION['email'])){
    header("Location:dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <center>
            <h3 class="text-success">Login</h3>
            <div class="card">
                <div class="card-body,-flex p-2 bd-highlight" >
                    <label for="Email" name="email" >Email :</label>
                    <input type="email" class="rounded,form-control"  class="d-inline-flex p-2 bd-highlight" class="text-info" name="email" id="email" placeholder="input email"  /><br><br>
                    <label for="Email" name="email" >Password :</label>
                    <input type="password" class="rounded,form-control" class="d-inline-flex p-2 bd-highlight" name="password" class="text-info" id="password" placeholder="enter password" /><br><br>
                    <input type="submit" name="login" class="btn btn-primary" id="login" value="login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="signup" class="btn btn-primary" id="signup" value="signup">
                </div>
            </div>
        </center>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['login'])){

     $email = strtolower($_POST['email']);
     $password = strtolower($_POST['password']);
     $_SESSION['email']=$email;
  
     $conn = mysqli_connect("localhost", "root", "", "users") or die("Error in connection query..! please check your query.");
     $selectquery="SELECT * FROM `user` WHERE email='$email'";
     $query = mysqli_query($conn,$selectquery) or die ("error in select query..!please check selection query.");
         
      $rows=mysqli_num_rows($query);
      if($rows>0){
          while($data = mysqli_fetch_array($query)){
          $rowemail = $data['email'];
          $name = $data['name'];
          $rowpassword = $data['password'];
          }
          if($email == $rowemail && $rowpassword == $password){
              echo "Login Successfull.";
              header("refresh:1,url=dashboard.php");
          }else if($email == $rowemail && $rowpassword != $password){
            echo "The value you entered dosen't match our records,please enter valid credentials.";
            header("refresh:2,url=login.php");
          }
    }
    else{
        echo "Email id not registered.Please register first.";
        header("refresh:2,url=login.php");
    }
        mysqli_close($conn);
    }
if(isset($_POST['signup'])){
    header("Location:signup.php");
}


?>


