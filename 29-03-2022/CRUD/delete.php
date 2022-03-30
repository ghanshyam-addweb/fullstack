<center>
<form action="" method="POST">
    <input type="number" name="number" id="number" />
<input type="submit" name="delete" id="delete">    
</form>
</center>

<?php
$conn = mysqli_connect("localhost","root", "", "29-march");

if(isset($_POST['delete'])){
    $id=$_POST['number'];

    $deletequery = "delete from Student where id ='$id'";
    $query = mysqli_query($conn, $deletequery) or die ("Error in deletion query..!please check deletion query.");

    if($deletequery){
        echo "Data deleted successfully";
    }
    
    }
?>