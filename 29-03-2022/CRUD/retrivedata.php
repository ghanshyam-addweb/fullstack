<title>Retrive data</title>
<form method="post">
    <input type="submit" name="showdata" id="showdata" value="showdata" />
</form>

<?php
if(isset($_POST['showdata'])){ 

    $con = mysqli_connect("localhost", "root", "", "29-march") or die("connection error.....! plese check your connection queries.");
    $query=mysqli_query($con,"select * from Student") or die("Error in query..! please check your query.");
    echo "<table border=2> <tr>  <td>ID</td> <td>Name</td> <td>Address</td> <td>Mobile</td> </tr>";
while($raw=mysqli_fetch_array($query))
{
    echo "<tr>";
    echo "<td>".$raw["id"]."</td>";
    echo "<td>".$raw["Name"]."</td>";
    echo "<td>".$raw["address"]."</td>";
    echo "<td>".$raw["mobile"]."</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);

}
?>