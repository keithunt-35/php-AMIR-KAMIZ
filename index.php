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

$array1 = array("Apples", "Bananas", "Oranges");
foreach($array1 as $value){
    echo $value;
}
$array2 = [1, 'two', 3, 'four'];
foreach($array2 as $entry){
    echo $entry;
}
// for each serves the same purpose as the folllowing code
for($i = 0; $i < count($array1); $i++){
    echo $array1[$i];
}
// or usoing the size of finction

for($i = 0; $i < sizeof($array1); $i++){
    echo $array1[$i];
}

//match
// is a new feature in PHP 8.0
// it is similar to switch but it is more strict
// it does not have fall through
// it is used to compare a value against a set of values
// it is used to replace the switch statement
$num3 = 10;
// we use the comparison operator => to compare the value
// we use the default keyword to specify the default value
// we can also use tripple equals ===f
$var3 = match($num3){
    10 => "Variable is 10",
    9 => "Variable is 9",
    default => "Variable is not 9 or 10"
};
echo $var3;



echo"<br>";
echo"<br>";
echo"<br>";

//task 
/*
*we have a list of peoples information with name
* and age
* we want to count the number of people who are
* above 18 years old and children who are below 18
* we want to make a list of people between the age of 22 a to 30 who can apply for our job opening
*/

$people = [
    ['name' => 'Joseph', 'age' => 25],
    ['name' => 'Sarah', 'age' => 5],
    ['name' => 'Anne', 'age' => 18],
    ['name' => 'Pratham', 'age' => 23],
    ['name' => 'Simon', 'age' => 30],
    ['name' => 'Amir', 'age' => 28],
    ['name' => 'Sabrina', 'age' => 22],
    ['name' => 'Rana', 'age' => 24],
    ['name' => 'Meet', 'age' => 21],
    ['name' => 'Vitto', 'age' => 24],
    ['name' => 'Rachel', 'age' => 9],
    ['name' => 'Tom', 'age' => 3],
];

foreach($people as $person){
    if($person['age'] > 18){
        echo $person['name'] . " is an adult" . "<br>";

    } else {
        echo $person['name'] . " is a child" . "<br>";
    }
}
//counting adults and the children


foreach($people as $suitable){
    if($suitable['age'] >= 22 && $suitable['age'] <= 30){
        echo $suitable['name'] . " is suitable for the job" . "<br>";
    }
}

//cal culating the age in days

$birthDate = '2000-12-19';
$today = date('Y-m-d'); // Use uppercase 'Y' for full year
$diff = strtotime($today) - strtotime($birthDate); // Use $birthDate instead of $date
$numberOfDaysOld = floor($diff / 86400); // Use floor to get whole days
echo "They are " . $numberOfDaysOld . " days old since " . $birthDate;

//working with files

// open the file
// manipulate the file
// close the file

// opening the file
$file = fopen('/.example.txt','r');

//flags and shorthands
// r for reading
// w for writing
// a for apending

// reading the file
// the fgets function reads line by line therefore we need to use  a while loop
$firstLine = fgets($file);
$secondLine = fgets($file);
echo $firstLine;

// or rather
$line = fgets($file);
while($line!= null){
    echo $line;
    $line = fgets($file);
}

//writing to a file
fwrite($file, "This is a new line");
fwrite($file, "This is another new line");


//the cruical part is closing the file
fclose($file);

?>