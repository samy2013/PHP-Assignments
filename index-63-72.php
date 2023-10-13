
<?php
echo '======== Assignment 1 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
  ];
  
  echo '<pre>';
  print_r(array_chunk(array_change_key_case($friends,CASE_LOWER),2,True));
  echo '</pre>';

// another solution
// $friends = array_change_key_case($friends,CASE_LOWER);  
//   echo '<pre>';
//   print_r(array_chunk($friends,2,True));
//   echo '</pre>';


echo '<br>';
echo '<br>';



//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 2 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo '<pre>';
print_r(array_change_key_case(array_combine($codes,$means),CASE_LOWER));
echo '</pre>';


echo '<br>';
echo '<br>';


//--------------------------------------------------------------------------------------------------------
echo '======== Assignment 3 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];

echo '<pre>';
print_r(array_change_key_case(array_reverse(array_flip($friends)),CASE_LOWER));
echo '</pre>';

echo '<br>';
echo '<br>';



//--------------------------------------------------------------------------------------------------------
echo '======== Assignment 4 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';


$nums = [10, 20, 30];
echo array_reduce($nums,fn ($n1,$n2) => $n1+$n2);
echo '<br>';
echo array_sum($nums);

echo '<br>';
echo '<br>';


//--------------------------------------------------------------------------------------------------------
echo '======== Assignment 5 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$nums = [5, 10, 20, 5, 30, 40]; //100

function sum ($carry, $item){
    if ($item == 5):
        return $carry;
    endif;
    return $carry + $item;
    }

echo array_reduce($nums, "sum");
echo '<br>';
echo array_reduce(array_filter($nums,fn ($n) => $n !=5),fn($n1,$n2) => $n1+$n2);
echo '<br>';
echo array_sum(array_filter($nums,fn ($n) => $n !=5));




echo '<br>';
echo '<br>';



//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 6 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo '<pre>';
print_r(array_pad($chars,count($chars)*strlen($char),$char[$zero]));
echo '</pre>';

echo '<br>';
echo '<br>';



//--------------------------------------------------------------------------------------------------------
echo '======== Assignment 7 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);
echo current($names) . "<br>"; // "Sayed"

end($names);
echo current($names) . "<br>"; // "Ali"

reset($names);
echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);
echo current($names) . "<br>"; // "Mahmoud"

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 8 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$chars = ["A", "B", "C"];

// method 1
// array_push($chars,"D");
// method 2
// print_r(array_pad($chars,4,"D"));
// method 3
// array_splice($chars,3,0,"D");
// method 4
// $chars[] = "D";
// method 5
array_unshift($chars,"D");
sort($chars);

echo '<pre>';
print_r($chars);
echo '</pre>';


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 9 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';


$nums = [1, 2, 3, 4, 5, 6];
echo '<pre>';
print_r(array_slice($nums,-5,-2));
echo '</pre>';

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 10 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

array_splice($mix,count($nums),count($nums),$nums);
echo '<pre>';
print_r($mix);
echo '</pre>';


echo '<br>';
echo '<br>';


//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 11 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';


$arr = ["A", "B", "C", "D", "E"];

$total =0;
foreach ($arr as $val):
    $total++;
endforeach;
    echo $total; //5


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 12 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$nums = [11, 2, 10, 7, 20, 50];

$sum=0;
foreach($nums as $num):
    $sum += $num;
endforeach;
echo $sum; //100


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 13 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$nums = [10, 100, -20, 50, 30];

$n=0;
foreach($nums as $num):
    if($num > $n){
       $n = $num;
    }
endforeach;
echo $n; //100


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 14 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$nums = [10, 100, -20, 50, 30];

$n=0;
foreach($nums as $num):
    if($num < $n){
       $n = $num;
    }
endforeach;
echo $n; // -20


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 15 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';


$chars = ["o", "r", "e", "z", "l", "E"];

// foreach to not use count function
$len =0;
foreach($chars as $ch):
    $len++;
endforeach; 

for($i= --$len; $i >= 0 ;$i--):
    echo $chars[$i];
endfor; 
// "Elzero"

//another solution with count func
// for ($k = count($chars); $k > 0; $k--) {
//     echo $chars[$k - true];
// }
echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 16 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

echo '<pre>';
print_r(array_values(array_filter($mix,fn($n) => gettype($n)=="integer" && ($n % 2==1))));
// print_r(array_merge(array_filter($mix,fn($n) => gettype($n)=="integer" && ($n % 2==1))));
echo '</pre>';


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 17 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';

$nums = [1, 2, 3, 4, 5, 6];

$rand_sort=[];

for($i=0; $i< count($nums); $i++){
    array_push($rand_sort,$nums[array_rand($nums)]);

    for ($k=0; $k <$i; $k++){
        while ($rand_sort[$k] == $rand_sort[$i]){
            $rand_sort[$i] = array_rand($nums);
        $k=0;
        }
    }
}

// بها خطأ يظهر صفر ضمن عناصر الاراي
echo '<pre>';
print_r($rand_sort);
echo '</pre>';


echo '<br>';
echo '<br>';
//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 18 - Lessons from 63-72 ========';
echo '<br>';
echo '<br>';


$title = "E&z\$r0 W\$b Sch00&";

echo str_replace(["&","$","0"],["l","e","o"],$title,$c);
echo '<br>';
echo $c; //7

