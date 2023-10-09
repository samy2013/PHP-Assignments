
<?php

echo '======== Assignment 1 - Lessons from 53-62 ========';
echo '<br>';
echo '<br>';



$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str[(int)$num_two] = $let_two;
$str[$num_one] = $let_one;

/*
// anothe solution
$str=substr_replace($str,$let_two,(int)$num_two,-$num_one);
$str=substr_replace($str,$let_one,$num_one);

// $str=substr_replace($str,"z",2,1);
// $str=substr_replace($str,"o",-1);
*/

/*
// anothe solution
$str=str_replace([$str[(int)$num_two],$str[$num_one]],[$let_two,$let_one],$str);
// $str=str_replace(["%","0"],["z","o"],$str);
*/

echo $str; // Elzero



echo '<br>';
echo '<br>';



//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 2 - Lessons from 53-62 ========';
echo '<br>';
echo '<br>';

$str = "Orezle";

echo ucfirst(strtolower(strrev($str)));
//echo ucfirst(strrev(lcfirst($str)));
// Elzero



echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 3 - Lessons from 53-62 ========';
echo '<br>';
echo '<br>';

$str = 'aAa';
$num = 3;
$char = "_";
echo strtolower(chunk_split(str_repeat($str,$num),$num,$char));
// another solution
// echo str_repeat(strtolower($str.$char),$num);
// aaa_aaa_aaa_


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 4 - Lessons from 53-62 ========';
echo '<br>';
echo '<br>';


$str = "<div><b>Elzero</b></div>";
echo strip_tags($str,"<b>");
// <b>Elzero</b>


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 5 - Lessons from 53-62 ========';
echo '<br>';
echo '<br>';

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo $four - (substr_count($str,strtolower($o)));//1
echo '<br>';
echo substr_count($str,$e); //2

/*
// another solution
echo substr_count($str,"$e",$four); //1
echo '<br>';
echo substr_count($str,lcfirst($o),-$four); //2
*/


echo '<br>';
echo '<br>';
//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 6 - Lessons from 53-62 ========';
echo '<br>';
echo '<br>';

$chars = ["E", "l", "z", "e", "r", "o"];

echo implode("",$chars); // "Elzero"


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 7 - Lessons from 53-62 ========';
echo '<br>';
echo '<br>';


$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];


echo str_replace([1,2],"",ucfirst(strtolower(implode("",$chars))));
// "Elzero"

?>