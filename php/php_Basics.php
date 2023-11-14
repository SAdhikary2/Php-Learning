<?php
echo"Hello world ! This is the first php code <br> this is gay code nnn"

// this is the single line code in php
/* this is 
the 
multiline code 
in php */

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first php code</title>
    <style>
        h1{
            background-color: red;
            
        }
    </style>
</head>
<body>
    <br>
    <h1>I am Starting the learning php</h1>
    <br>
    <button>Be Serious</button>
    <br>
</body>
</html>


<?php

//String variable
$name='Sukalyan Adhikary';
$email="sukalyanadhikary0055@gmail.com";
echo"My name is {$name} <br>";
echo"My Gmail id is : {$email} <br>";

//integer variable in php
$age=22;
$quantity=3;
echo"My age is {$age} <br>";
echo"The pizza quantity is {$quantity} <br>";

//float variable in php
$gpa=2.5;
$price=5.99;
echo"My gpa is :{$gpa} <br>";
//using the dollar sign
echo"The pizza price is :\${$price}<br>";

//boolean variable in php
$online=true;
$employed=false;
echo"My online status:{$online} <br>";
//if value false it dont give any answer , only when true then it give the value 1
echo"Employment: {$employed} <br>"
?>


<!-- ARITHMETIC OPERATOR  -->
<?php
//Operator precedence
//()
//** -power
// * / %
// + -
?>

<?php
//defining constant in php
define('pi',3.14);

echo"Learning php again from today";
echo"<br> Data Types in php <br>";
$var="This is a string ";
echo var_dump($var);
echo "<br>";

echo pi;

//arrays in python
echo "<br>";
$language= array("Java","python","NodeJs","PHP");
echo "<br>";
echo $language[0];
echo "<br>";
echo count($language);
echo "<br>";
//LOOPS IN PHP
//WHILE LOOPS 
$a=0;
while ($a <= 10) {
    echo "<br> The value is :";
    echo $a;
    $a++;
}

//ITERATING ARRAYS IN PHP
echo "<br>";
$a=0;
while ($a < count($language)) {
    echo "<br> The value of language is :";
    echo $language[$a];
    $a++;
}

echo "<br>";
//FOREACH LOOP IN PYTHON
foreach($language as $value){
    echo "<br> The value from foreach loop is :";
    echo $value;
}

echo "<br>";
//STRINGS IN PHP
$str= "This is my first string";

echo "$str <br>";
$lenn=strlen($str);
echo "The lenth of the string is :".$lenn;
echo " <br> The nunber of word in this string is :".str_word_count($str);
echo " <br> The reversed  string is :".strrev($str);
echo " <br> The search for a  string is :".strpos($str,"is");
echo " <br> The replaced string is :".str_replace("is","at",$str)




?>


