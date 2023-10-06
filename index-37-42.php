
<?php

echo '======== Assignment 1 - Lessons from 37-42 ========';
echo '<br>';
echo '<br>';

$index = 10;


while ($index >= 1){
echo $index."<br>";
$index --;
}

echo '<br>';
echo '<br>';



//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 2 - Lessons from 37-42 ========';
echo '<br>';
echo '<br>';
$index = 0;


while ($index < 20){
    $index +=2;
    echo "$index <br>";
}


echo '#..#..#..#.#.#';
echo '<br>';

for ($i=2; $i <=20 ; $i+=2):
    
    echo "$i <br>";
endfor;

echo '#..#..#..#.#.#';
echo '<br>';

$k = 0;
do {
    $k += 2;
    echo "$k <br>";
}while($k < 20);

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 3 - Lessons from 37-42 ========';
echo '<br>';
echo '<br>';

$num = 2;
while ($num < 520) {

if($num == 2){
echo "1";
$num --;
echo "<br>";
}

echo $num=$num*2+2;
echo "<br>";

if($num ==382){
    break;
    }
}

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 4 - Lessons from 37-42 ========';
echo '<br>';
echo '<br>';

$start = 10;
$end = 0;
$stop = 3;

for($i = $start ; $i >= $stop ; $i-- ){
    if ($i < $start){
        $i = $end . $i;
    }
    echo $i.'<br>';
}
echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 5 - Lessons from 37-42 ========';
echo '<br>';
echo '<br>';
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];


for($i=$start; $i < count($mix) ; $i++){
    // echo gettype($mix[$i]) . '<br>';
    if (gettype($mix[$i]) == "string" or $mix[$i] == 1){
        continue;
    }
    echo $mix[$i] . '<br>';
}

//another solution
// for($i=++$start ; $i < count($mix) ; $i++){
//     if (gettype($mix[$i]) == "integer"){
//         echo $mix[$i] . '<br>';
//     }
// }
echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 6 - Lessons from 37-42 ========';
echo '<br>';
echo '<br>';


$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];


foreach($money as $key => $value){    
    echo "The Name Is $key And I Need $value Pound From Him <br>";
}

// another solution
// $keys = array_keys($money);
// for ($i=0 ; $i < count($keys) ; $i++){
//     echo "The Name Is " . $keys[$i] . " And I Need " . $money[$keys[$i]] . " Pound From Him <br>";
// }

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 7 - Lessons from 37-42 ========';
echo '<br>';
echo '<br>';


$mix = [1, 2, "A", "B", "C", 3, 4];

$numbers=0;
$letters=0;

for($i=0; $i < count($mix);$i++){
    if (gettype($mix[$i]) == "string"){
        $letters ++;
        continue;
    }else{
        $numbers ++;
    }
    echo $mix[$i].'<br>';
}
echo $numbers . " Numbers Printed".'<br>';
echo $letters . " Letters Ignored".'<br>';


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 8 - Lessons from 37-42 ========';
echo '<br>';
echo '<br>';
$nums = [1, 13, 12, 20, 51, 17, 30];


foreach($nums as $val){
    if($val % 2 == 0){
        echo $val / 2 .'<br>';
    }
}

echo '<br>';
echo '<br>';


//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 9 - Lessons from 37-42 ========';
echo '<br>';
echo '<br>';

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];


for($i=$help_num ; $i<count($names) ; $i++){

    echo $names[$nums[$i]].'<br>';

    // echo $nums[$i].'<br>';
}
echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 10 - Lessons from 37-42 ========';
echo '<br>';
echo '<br>';

$help_num = 4;
$nums = [2, 4, 5, 6, 10];


foreach($nums as $num){
            echo "\""."$num + ". $nums[$help_num] ."=" . $num+$nums[$help_num]."\"".'<br>';
            $help_num--;
    }

echo '<br>';
echo '<br>';

?>

