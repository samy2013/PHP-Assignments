
<?php
echo '======== Assignment 1 - Lessons from 20-29 ========';
echo '<br>';
echo '<br>';


// Replace ? With Arithmetic Operators
echo 10 * 20 - 15 % 3 + 190 + 10 - 400; // 0
echo '<br>';
echo ((10 - 20) + (15 - 3)) * (190 + 10) - 400; // 0

echo '<br>';
echo '<br>';



//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 2 - Lessons from 20-29 ========';
echo '<br>';
echo '<br>';


$a = "10";

echo +$a;
echo '<br>';
echo gettype(+$a);
echo '<br>';

echo $a;
echo '<br>';
echo gettype(-$a);
echo '<br>';

echo (Int)$a;
echo '<br>';
echo gettype((Int)$a);
echo '<br>';

echo intval($a);
echo '<br>';
echo gettype(intval($a));
echo '<br>';

settype($a,"integer");
echo $a;
echo '<br>';
echo gettype($a);
echo '<br>';



/*
// بيرجعوا سترينج

echo number_format($a);
echo '<br>';
echo gettype(number_format($a));
echo '<br>';

echo filter_var($a);
echo '<br>';
echo gettype(filter_var($a));
echo '<br>';


echo '<br>';
echo '<br>';
echo '<br>';
*/



//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 3 - Lessons from 20-29 ========';
echo '<br>';
echo '<br>';

$a= 10;
$b = 20;

echo $a <=> $b;
//echo '<br>';
//var_dump ($x <=> $z);


echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 4 - Lessons from 20-29 ========';
echo '<br>';
echo '<br>';

$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
echo '<br>';
var_dump($c > $a); // True
echo '<br>';
var_dump($a <= $b); // True
echo '<br>';
var_dump($a != $b); // True
echo '<br>';
var_dump($a <= $c); // True
echo '<br>';
var_dump($a !== $c); // True
echo '<br>';
var_dump(gettype($a) === gettype($b)); // True
echo '<br>';
var_dump(gettype($a) == gettype($b)); // True
echo '<br>';
var_dump(gettype((float) $a) != gettype($b)); // True


echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 5 - Lessons from 20-29 ========';
echo '<br>';
echo '<br>';

$points = 10;

$points++;
++$points;
$points++;
echo $points; // 13
echo '<br>';

$points--;
--$points;
$points--;
--$points;
$points--;

echo $points; // 8;


echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 6 - Lessons from 20-29 ========';
echo '<br>';
echo '<br>';



$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
//$d = "{$a} {$b} {$c}";

// Method Two
//$d = "$a $b $c";

// Method Three
// $d = "{$a} {$b} {$c}";

// Method Four
// $d = $a . " " . $b . " " . $c;

// Method Five
$b .=" ".$c;
$a .=" ".$b;
$d = $a;
echo $d; // Elzero Web School



echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 7 - Lessons from 20-29 ========';
echo '<br>';
echo '<br>';

$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + ($a * $a)) * $a; // 10000

echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 8 - Lessons from 20-29 ========';
echo '<br>';
echo '<br>';

// Code 1
// تم تغيير اسم المتغييرات لانه موجدين باعلي في التكليفات السابقه
$x = @$z or die("Custom Error");
echo $x;
echo '<br>';

// Code 2
$f = @file("Not_A_File") or die("Custom Error2");
print_r($f);
echo '<br>';

// Code 3
(@include("Not_A_File")) or die("Custom Error3");

?>