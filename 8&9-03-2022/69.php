<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Number: <input type="number" name="number1"><br>
<input type="submit" >
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $raw = (int)$_POST['number1'];
    echo "first pattern :";
    echo "<br>";
    for($i = 1; $i <= $raw; $i++){
        for($j = 1; $j <= $i; $j++){
            echo "$j ";
        
        }echo "<br />";

    }
    
    echo "<br><br>";
    echo "second pattern :";
    echo "<br>";
    for($i = 1; $i <= $raw; ++$i){
        for($j = 1; $j <= $i; ++$j){
            echo "* ";
            
        }echo "<br />";

 
    }

    echo "<br><br>";
    echo "Third pattern :";
    echo "<br>";
    $number = 1;
    for($i = 1; $i <= $raw; $i++){
        for($j = 1; $j <= $i; $j++){
            echo "$number ";
            ++$number;
            
        
        }echo "<br />";

    }


    echo "<br><br>";
        echo "Fourth pattern :";
        echo "<br>";
        for($i = 1; $i <= $raw; $i++){
            for($j = 1; $j <= $i; $j++){
                echo "$i ";
                
            }echo "<br />";
    
        }    
}
?>
    