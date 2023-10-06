
<?php
echo '======== Assignment 1 - Lessons from 30-36 ========';
echo '<br>';
echo '<br>';

$a = 100;
$b = 200;
$c = 100;

if($b>$a and $a===$c and $a+$c ===$b){
    echo "Yes";
}

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/


echo '<br>';
echo '<br>';



//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 2 - Lessons from 30-36 ========';
echo '<br>';
echo '<br>';


$a = 100;
$b = 200;
$c = 300;

if ($a > $b){
    echo "A Is Larger Than B";
} elseif ($a > $c){
    echo "A Is Larger Than C";
}
 else {
    echo "A Is Not Larger Than B Or C";
}


echo '<br>';
echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 3 - Lessons from 30-36 ========';
echo '<br>';
echo '<br>';
?>


<?php

$admins = ["Osama", "Ahmed", "Sayed"];

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        echo "The Request Method Is Post And Username Is $_POST[user]";
        
        if ($_POST["user"] == $admins[0] or $_POST["user"] == $admins[1] or $_POST["user"] == $admins[1]){
            echo '<br>';
            echo "This Username $_POST[user] Is Admin";
        }
    }
?>


<form action="" method="POST">
<input type="text" name="user">
<input type="submit" value="Send">
</form>



<?php
echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 4 - Lessons from 30-36 ========';
echo '<br>';
echo '<br>';

//ex:(a b)?"":((v n)? "":((k l)?"":((o p)?"":"")));

$a = 30;
$b = 20;
$c = 10;

echo ($a + $b === $c) ? "A + B = C":(($a + $c === $b)? "A + C = B":(($b + $c === $a)?"B + C = A" :"The End"));
// Output
// "B + C = A"


echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 5 - Lessons from 30-36 ========';
echo '<br>';
echo '<br>';


$name = "Osama";
$age = 40;
$country = "Egypt";

echo ($age > 18) && (gettype($name) === "string") && ($country === "Egypt") ? "The Age Is Good To Go<br>The Name Is Good To Go<br>The Country Is Good To Go<br>":"";

/*// Needed Output
"The Age Is Good To Go"
"The Name Is Good To Go"
"The Country Is Good To Go"
*/

echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 6 - Lessons from 30-36 ========';
echo '<br>';
echo '<br>';

$genre = "Hack And Slash";


switch ($genre){
case "RPG" :
    echo "I Recommend Ys Games";
break;
case "Hack And Slash" :
    echo"I Recommend Castlevania Games";
break;
case "FPS" :
    echo "I Recommend Uncharted Games";
break;
case "Platform" :
case "Puzzle" :
    echo "I Recommend Megaman Games";
break;
default:
echo "I Recommend Shadow Of Mordor And Shadow Of War";
break;
}

// Needed Output
// "I Recommend Castlevania Games"



echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 7 - Lessons from 30-36 ========';
echo '<br>';
echo '<br>';

$num_one = 23;
$num_two = 5;
$op = "/";

if ($op == "+"){
    echo $num_one + $num_two;
} elseif ($op == "-"){
    echo $num_one - $num_two;
} elseif ($op == "*"){
    echo $num_one * $num_two;
}elseif ($op == "/"){
    echo (int)($num_one / $num_two);
    echo '<br>';
    echo $num_one % $num_two;
} else {
    echo "Unknown Operation";
}


/*
switch ($op){
    case "+" :
        echo $num_one + $num_two;
        break;
    case "-" :
        echo $num_one - $num_two;
        break;
    case "*" :
        echo $num_one * $num_two;
        break;
    case "/" :
        echo (int)($num_one / $num_two)."<br>";
        echo $num_one % $num_two;
        break;
    default :
    echo "Unknown Operation";
}
 */

echo '<br>';
echo '<br>';
echo '<br>';



//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 8 - Lessons from 30-36 ========';
echo '<br>';
echo '<br>';

$day = "Sat";

if ($day == "Sat" or $day =="Sun" or $day =="Mon"){
    echo "We Are Open All The Day";
}elseif ($day == "Tue" or $day =="Wed"){
    echo "We Are Open From 08:12";
}elseif ($day == "Thu" or $day =="Fri"){
    echo "We Are Closed";
}else{
    echo "Unknown Day";
}
?>
