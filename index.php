<?php
echo "Hello World!";

//..//

//variabes
$var1 = 10;
//dynamically typed language

// example of an object
$date = new DateTime();
echo $date->format('Y-m-d H:i:s');

// all the arithmetic rules apply
echo 5 + 5;
//equals versus identical
echo 5 == "5"; // true
echo 5 === "5"; // false

//arrays
$myArray = array("Apples", "Bananas", "Oranges",1,2,3,4,[9,8,7,]);
echo $myArray[0]; // Apples
echo $myArray[6][1]; // 8   
echo count($myArray); // 7  
echo $myArray[6][2]; // 7
//printing an array
print_r($myArray);  

//if statements
if($var1 == 10){
    echo "Variable is 10";
} else {
    echo "Variable is not 10";
}
//switch statements
switch($var1){
    case 10:
        echo "Variable is 10";
        break;
    case 9:
        echo "Variable is 9";
        break;
    default:
        echo "Variable is not 9 or 10";
}
//ternary
$var2 = ($var1 == 10) ? 100 : 200;
echo $var2; // 100
//nested conditions
if($var1 == 10){
    if($var2 == 100){
        echo "Both are true";
    }
}

//loops
for($i = 0; $i < 10; $i++){
    echo $i;
}



?>