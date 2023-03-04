
<?php

echo '======== Assignment 1 - Lessons from 43-52 ========';
echo '<br>';
echo '<br>';

function greeting($name , $gender=""){

    if ($gender == "Male"){
        echo "Hello Mr $name <br>";
    }elseif ($gender == "Female"){
        echo "Hello Miss $name <br>";
    } else {
        echo "Hello $name <br>";
        
    }
        
}


// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh


echo '<br>';
echo '<br>';



//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 2 - Lessons from 43-52 ========';
echo '<br>';
echo '<br>';



function get_arguments (...$words){

    foreach(func_get_args() as $word){
        echo ($word." ");
    }
    echo '<br>';

}

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP



echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 3 - Lessons from 43-52 ========';
echo '<br>';
echo '<br>';

function sum_all (...$numbers){

    $result = 0;
    foreach ($numbers as $number){
    
    if ($number == 5){
        continue;
    }
    else if ($number == 10){
        $number =20;
    }

    
    $result += $number; 
}
return $result .'<br>';
}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 4 - Lessons from 43-52 ========';
echo '<br>';
echo '<br>';

function multiply(...$nums) {
    $total =1;
    foreach($nums as $num):

        if (gettype($num) == "string"):
            continue;
        endif;

        if (gettype($num) == "double"):
            $num = (int)$num;
        endif;

        $total *= $num;
    endforeach;

    return $total . '<br>';
}


// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 5 - Lessons from 43-52 ========';
echo '<br>';
echo '<br>';


function check_status($a, $b, $c) {

/*
    if (gettype($a) == "string"){
        $name = $a;
    } elseif (gettype($a) == "integer"){
        $age= $a;
    } elseif (gettype($a) == "boolean") {
        $statue =$a;
    }

    if (gettype($b) == "string"){
        $name = $b;
    } elseif (gettype($b) == "integer"){
        $age= $b;
    } elseif (gettype($b) == "boolean") {
        $statue =$b;
    }

    if (gettype($c) == "string"){
        $name = $c;
    } elseif (gettype($c) == "integer"){
        $age= $c;
    } elseif (gettype($c) == "boolean") {
        $statue =$c;
    }

    */
  
    


    // another solution
    foreach (func_get_args() as $arg):

        if (gettype($arg) == "string"){
            $name = $arg;
        } elseif (gettype($arg) == "integer"){
            $age = $arg;
        } else {
            $statue = $arg;
        }
    endforeach;


    if ($statue == true){
        $statue = "Available";
    }else {
        $statue = "Not Available";
    }
    return "Hello $name, Your Age Is $age, You Are $statue For Hire<br>";
}
  
  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 6 - Lessons from 43-52 ========';
echo '<br>';
echo '<br>';

function calculate ($num1,$num2,$ope="a"){
    if ($ope == "a" or $ope == "add"){
        return $num1 + $num2 . '<br>';
    } elseif ($ope == "s" or $ope == "subtract"){
        return $num1 - $num2  . '<br>';
    } elseif ($ope == "m" or $ope == "multiply"){
        return $num1 * $num2  . '<br>';
    }else{
        return "This Opertion Not Found <br>";
    }

}


// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 7 - Lessons from 43-52 ========';
echo '<br>';
echo '<br>';


function calculate_two(int $num_one, int $num_two) : float{
    echo '<br>'; 
    return $num_one + $num_two ;
}
  
  echo calculate_two(20, 10); // 30
  echo gettype(calculate_two(20, 10)); // Double


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 8 - Lessons from 43-52 ========';
echo '<br>';
echo '<br>';

$message = "Hello";

$$message = function ($name) use ($message){
    return $message ." ".$name;
};

echo $Hello("Osama"); // Hello Osama


echo '<br>';
echo '<br>';


//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 9 - Lessons from 43-52 ========';
echo '<br>';
echo '<br>';

/*
$greet = function ($name){
    return "Greetings $name";
};
*/

$greet = fn ($name) => "Greetings $name";
// Needed Output
echo $greet("Osama"); // Greetings


echo '<br>';
echo '<br>';


?>