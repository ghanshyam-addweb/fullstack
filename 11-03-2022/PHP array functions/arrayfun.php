<?php 

echo "array change key case ";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));

echo "<br><br>";


echo "array chunk";
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));

echo "<br><br>";

echo "array column ";
$a = array(
    array(
      'id' => 1,
      'first_name' => 'Ghanshyam',
      'last_name' => 'Pandya',
    ),
    array(
      'id' => 2,
      'first_name' => 'Ayush',
      'last_name' => 'Patel',
    ),
    array(
      'id' => 3,
      'first_name' => 'Adarsh',
      'last_name' => 'Patat',
    )
  );
  
  $last_names = array_column($a, 'last_name');
  print_r($last_names);


  echo "<br><br>";

  echo "array combine value";
  $c=array_combine($last_names,$age);
print_r($c);

echo "<br><br>";


echo "array count values ";
$num = [1,2,1,2,3,4,2,5,7,5,8,7];
print_r(array_count_values($num));
echo "<br><br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

echo "array diff ";
$result=array_diff($a1,$a2);
print_r($result);

echo "<br><br>";

echo "array diff assoc ";
$a3=array("a"=>"red","b"=>"green","v"=>"blue");
$result1=array_diff_assoc($a1,$a3);
print_r($result1);
echo "<br><br>";


echo "array diff keys ";
$result2=array_diff_key($a1,$a3);
print_r($result2);
echo "<br><br>";


echo "array fill";
$a4=array_fill(0,4,"addweb");
print_r($a4);
echo "<br><br>";

echo "array fill keys";
$keys=array("addweb", "training","fullstakc", "php", "frontend");
$a5=array_fill_keys($keys,"0");
print_r($a5);
echo "<br><br>";


echo "array filter : ";
$num1 = [1,2,1,2,3];
$array = print_r(array_filter($num1));
echo "<br><br>";


echo "intersect :";
$result3 = array_intersect($a1,$a2);
print_r($result3);
echo "<br><br>";


echo "array map function ";
function mapFun($j){
return ($j * $j);
}
print_r(array_map("mapFun",$num));


echo "<br><br>";
echo "array merge ";
print_r(array_merge($num, $num1));

echo "<br><br>";
echo "array recursive merge ";

print_r(array_merge_recursive($num,$num1));

echo "<br><br>";
echo "array multisort : ";
$mlsrt = array("addweb", "training","fullstakc", "php", "frontend");
array_multisort($mlsrt);
print_r($mlsrt);

echo "<br><br>";
echo "Array pad ";
print_r(array_pad($keys,8,"blue"));


echo "<br><br>";
echo "array pop ";
array_pop($keys);
print_r($keys);

echo "<br><br>";
echo "array product ";
echo(array_product($num1));

echo "<br><br>";
array_push($keys,"blue","yellow");
print_r($keys);

echo "<br><br>";
print_r(array_rand($keys,5));

echo "<br><br>";
print_r(array_replace($a1,$a2));

echo "<br><br>";
echo "array reverse ";
print_r(array_reverse($num));

echo "<br><br>";
echo "array search ";
print_r(array_search(5,$num,true));


echo "<br><br>";
echo "array sum ";
print_r(array_sum($num));


$keys1=array("addweb", "training","fullstakc", "php", "frontend");
echo "<br><br>";
echo "array arsort ";
arsort($keys1);
echo "<br>";
foreach($keys1 as $x=>$value)
   {
   echo $value;
   echo "<br>";
   }
   echo "<br><br>";

   echo "array asort ";
   echo "<br>";
   asort($keys1);

   foreach($keys1 as $x=>$value)
      {
      echo $value;
      echo "<br>";
      }

      echo "<br><br>";
      echo "array count ";
     
      echo count($keys);
      echo "<br><br>";
      echo "array sizeof".sizeof($keys);
      echo "<br><br> array shuffle";
      print_r(shuffle($keys));






?>