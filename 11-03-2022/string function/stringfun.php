<!DOCTYPE html>
<html>

<head>
    <title> PHP String Functions </title>
</head>

<body>
    <form method="POST">
        <label>String Functions<br><br></label> Enter your String : <input type="text" name="string">
        <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>

<?php
if(isset($_POST['submit']))
{
    $string=$_POST['string'];
    echo "Entered String is :".$string;
    echo "<br><br>";
    echo "Length of String is : ".strlen($string);
    echo "<br><br>"; 
    echo "Split String : "; 
    print_r(str_split($string));
    echo "<br><br>"; 
    echo str_word_count($string);
    echo "<br><br>";
    echo "Converting String to Lower Case : ".strtolower($string);
    echo "<br><br>";  
    echo "Converting String to Upper Case : ".strtoupper($str);
    echo "<br><br>";  
    echo "Converting First Character String to Upper Case : ".ucfirst($string);
    echo "<br><br>";  
    echo "Converting First Character String to Lower Case : ".lcfirst($string);
    echo "<br><br>";
    echo "Converting First Character of each word to Upper Case : ".ucwords($string);
    echo "<br><br>";   
    echo "Reverse of a String : ".strrev($string);
    echo "<br><br>";
    print_r (explode(" ",$string));
    echo "<br><br>";
    echo wordwrap($string,5,TRUE);
}
?>