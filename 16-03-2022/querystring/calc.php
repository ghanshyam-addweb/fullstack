<?php
// error_reporting(0);
$a=$_REQUEST['fvalue'];
$b=$_REQUEST['svalue'];

if(isset($_GET['Add']))
{
$c=$a+$b;
echo "The Addition is ".$c;
}
if(isset($_GET['Sub']))
// if($_REQUEST['Sub']=='Sub')
{
$c=$a-$b;
echo "The Subtraction is ".$c;
}
if(isset($_GET['Mul']))
// if($_REQUEST['Mul']=='Mul')
{
$c=$a*$b;
echo "The Multiplication is ".$c;
}
if(isset($_GET['Div']))
// if($_REQUEST['Div']=='Div')
{
$c=$a/$b;
echo "The Division is ".$c;
}
if(isset($_GET['Mod']))
// if($_REQUEST['Mod']=='Mod')
{
$c=$a%$b;
echo "The Modulo is ".$c;
}

?>


