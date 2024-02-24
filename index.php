<?php 
error_reporting(-1);
//
/* */
#
/*
$_myName // допустимо
$myName // допустимо
$__ myvar // допустимо
$myVar21 // допустимо
$_1Big // недопустимо - после подчеркивания должна стоять буква
$1Big // недопустимо - должно начинаться с буквы или символа подчеркивания
$_er-t // допустимо - содержит не буквенно-цифровой символ (-)

*/
$Ac = "Hello";
$title = 'hello world!';
$title2 = 'page title';
$fruit = 'apple';
$winnie_pooh = "Hello, I'm Winnie. I have 2 ".$fruit."s"."<br>";
//$winnie_pooh = "Hello, I'm Winnie. I have 2 {$fruit}s";
// $winnieThePooh = "Hello, I'm Winnie";
echo $winnie_pooh;
/*
--- Типы данных в PHP
    string (строки)
    integer (целые числа)
    double (дробные числа)
    boolean (логический тип)
    NULL
    array (массивы)
    object (объекты)
    resource (ресурсы) 

*/
$var = false;
var_dump($var);
print($var."<br>");
print(gettype($var));


define("PAge", "new page");
// define("PAGE", "new page2");

$var = 10;
$str = 'This is \'string\'. $var';

$str2 = "This is \"string\". $var";

echo $str2;

// HEREDOC
//NOWDOC
$sts5 = <<<HER
This is "string". $var
HER;

echo $sts5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   <?php 
   echo "<h1>$title2</h1>";
   ?> 
   <h1><?php echo PAge; ?></h1>
   
</body>
</html>
Строки | Strings PHP
https://wm-school.ru/php/php_string.php
Различные типы чисел в PHP
https://wm-school.ru/php/php_numbers.php