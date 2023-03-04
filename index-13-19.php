<?php
echo '======== Assignment 1 - Lessons from 13-19 ========';
echo '<br>';
echo '<br>';

$name = "Elzero Courses";
// $name = "samy";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo $name ?>>
    <title>Welcome To <?php echo $name?></title>
  </head>
  <body>
    <h1><?php echo $name?></h1>
    <p>Here In <?php echo $name?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $name?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $name ?></footer>
  </body>


  
<!-- //-------------------------------------------------------------------------------------------------------- -->
  
<?php
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '======== Assignment 2 - Lessons from 13-19 ========';
echo '<br>';
echo '<br>';

$name = "elzero";
$$name = "Web";


echo $$name;
echo '<br>';
echo $elzero;
echo '<br>';
echo "$elzero";
echo '<br>';
echo ${$name};
echo '<br>';
echo "${$name}";

//--------------------------------------------------------------------------------------------------------

echo '<br>';
echo '<br>';
echo '<br>';

echo '======== Assignment 3 - Lessons from 13-19 ========';
echo '<br>';
echo '<br>';

$a = 200;
$b = &$a; //assign by reference
$a = 100;

echo $b; // 100


//--------------------------------------------------------------------------------------------------------

echo '<br>';
echo '<br>';
echo '<br>';

echo '======== Assignment 4 - Lessons from 13-19 ========';
echo '<br>';
echo '<br>';

echo '<pre>';
// print_r ($_SERVER);
echo $_SERVER["DOCUMENT_ROOT"];
echo '<br>';
//echo $_SERVER["HTTP_HOST"];
//echo '<br>';
echo $_SERVER["SERVER_NAME"];
echo '<br>';
echo $_SERVER["SystemRoot"];
echo '<br>';
echo $_SERVER["OPENSSL_CONF"];
// echo '</pre>';

/*
"C:/xampp/htdocs"
"localhost"
"C:\WINDOWS"
"C:/xampp/apache/bin/openssl.cnf"
*/

//--------------------------------------------------------------------------------------------------------

echo '<br>';
echo '<br>';
echo '<br>';

echo '======== Assignment 5 - Lessons from 13-19 ========';
echo '<br>';
echo '<br>';

/*
  10 Words Here
  Reserver words

1- clone
2- break
3- use
4- final
5- new
6-default
7-echo , if , do , while , var , else ...
8-readonly
9-goto
10-fn
11-die()
//https://www.php.net/manual/en/reserved.keywords.php
*/

echo '<br>';
echo '<br>';

echo '======== Assignment 6 - Lessons from 13-19 ========';
echo '<br>';
echo '<br>';


echo __line__;
echo '<br>';
echo __file__;
echo '<br>';
echo __dir__;

/*
"60"
"C:\xampp\htdocs\elzero\index.php"
"C:\xampp\htdocs\elzero"
*/
?>