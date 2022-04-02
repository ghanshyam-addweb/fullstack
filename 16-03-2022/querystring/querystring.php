<html lang="en">
<head>
    <title>Query string</title>
</head>
<body>
    <form id="form1" name="form1" method="get">
        First value:<input type="number" name="fvalue" /><br/> 
        Second value:<input type="number" name="svalue" /><br/><br/>
        <input type="submit" name="Add" value="Add" />
        <input type="submit" name="Sub" value="Sub" />
        <input type="submit" name="Mul" value="Mul" />
        <input type="submit" name="Div" value="Div" />
        <input type="submit" name="Div" value="Mod" />
    </form>
</body>
</html>
<?php

if(isset($_GET['Add']))
{
    $a=$_GET['fvalue'];
    $b=$_GET['svalue'];
    echo "<a href=calc.php?fvalue=$a&svalue=$b&Add=Add>Addition</a>";
}
else if(isset($_GET['Sub']))
{
    $a=$_GET['fvalue'];
    $b=$_GET['svalue'];
    echo "<a href=calc.php?fvalue=$a&svalue=$b&Sub=Sub>Subtraction</a>";
}
else if(isset($_GET['Mul']))
{
    $a=$_GET['fvalue'];
    $b=$_GET['svalue'];
    echo "<a href=calc.php?fvalue=$a&svalue=$b&Mul=Mul>Multiplication</a>";
}
else if(isset($_GET['Div']))
{
    $a=$_GET['fvalue'];
    $b=$_GET['svalue'];
    echo "<a href=calc.php?fvalue=$a&svalue=$b&Div=Div>Division</a>";
}
else if(isset($_GET['Mod']))
{
    $a=$_GET['fvalue'];
    $b=$_GET['svalue'];
    echo "<a href=calc.php?fvalue=$a&svalue=$b&Mod=Mod>Modulo</a>";
}
?> 
 
