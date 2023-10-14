
<?php

echo '======== Assignment 1 - Lessons from 73-81 ========';
echo '<br>';
echo '<br>';

echo rand(11,19);

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 2 - Lessons from 73-81 ========';
echo '<br>';
echo '<br>';
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo $friends[rand(0,3)];
echo '<br>';
echo $friends[array_rand($friends)];


echo '<br>';
echo '<br>';


//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 3 - Lessons from 73-81 ========';
echo '<br>';
echo '<br>';

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7


echo round($num1,0,PHP_ROUND_HALF_DOWN).'<br>';
// echo round($num1,0,PHP_ROUND_HALF_ODD).'<br>';
echo round($num2,1).'<br>';
echo round($num3,0,PHP_ROUND_HALF_DOWN).'<br>';
// echo round($num3,0,PHP_ROUND_HALF_ODD).'<br>';

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 4 - Lessons from 73-81 ========';
echo '<br>';
echo '<br>';


$id=[];
foreach (filter_list() as $val):
array_push($id,filter_id($val));
endforeach;

echo '<pre>';
print_r(array_combine($id,filter_list()));
echo '</pre>';



echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------
echo '======== Assignment 5 - Lessons from 73-81 ========';
echo '<br>';
echo '<br>';

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo(filter_var($url1,FILTER_VALIDATE_URL))?"A Valid URL<br>":"Not A Valid URL<br>";
echo(filter_var($url2,FILTER_VALIDATE_URL))?"A Valid URL<br>":"Not A Valid URL<br>";
echo(filter_var($url3,FILTER_VALIDATE_URL))?"A Valid URL<br>":"Not A Valid URL<br>";
echo(filter_var($url4,FILTER_VALIDATE_URL))?"A Valid URL<br>":"Not A Valid URL<br>";

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------
echo '======== Assignment 6 - Lessons from 73-81 ========';
echo '<br>';
echo '<br>';

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo(filter_var($url1,FILTER_SANITIZE_URL)).'<br>';
echo(filter_var($url2,FILTER_SANITIZE_URL)).'<br>';
echo(filter_var($url3,FILTER_SANITIZE_URL)).'<br>';
echo(filter_var($url4,FILTER_SANITIZE_URL)).'<br>';
