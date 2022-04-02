<?php
$percentage = 52;

if($percentage >= 85){
    $grade = 'S';
    echo "percentage is $percentage and grade is $grade.";
}
else if($percentage < 85 && $percentage >= 65){
    $grade = 'A';
    echo "percentage is $percentage and grade is $grade.";

}
else if($percentage < 65 && $percentage >= 55){
    $grade = 'B';
    echo "percentage is $percentage and grade is $grade.";
}
else if($percentage < 55 && $percentage >= 45){
    $grade = 'C';
    echo "percentage is $percentage and grade is $grade.";
}
else{
    $grade = 'F';
    echo "percentage is $percentage and grade is $grade.";
}
?>