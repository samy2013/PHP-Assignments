
<?php
echo '======== Assignment 1 - Lessons from 6-12 ========';
echo '<br>';
echo '<br>';

echo (int)15.2 + (int)14.7 + (10.5 + 10.5); // 50
echo '<br>';
echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer


echo '<br>';
echo '<br>';
echo '<br>';



//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 2 - Lessons from 6-12 ========';
echo '<br>';
echo '<br>';


echo gettype(100);
echo '<br>';
var_dump(100);
echo '<br>';
echo get_debug_type(100);


echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 3 - Lessons from 6-12 ========';
echo '<br>';
echo '<br>';


echo "Hello \"Elzero\" \\\\ \" \" \" We Love \"$\$PHP";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"


echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 4 - Lessons from 6-12 ========';
echo '<br>';
echo '<br>';

echo nl2br("We \n Love \n Elzero \n Web \n School");

echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 5 - Lessons from 6-12 ========';
echo '<br>';
echo '<br>';

echo nl2br(<<<'now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
now);

echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 6 - Lessons from 6-12 ========';
echo '<br>';
echo '<br>';


$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;

echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 7 - Lessons from 6-12 ========';
echo '<br>';
echo '<br>';

echo (bool)"Hello PHP"; //1
echo '<br>';
echo gettype((int)"Hello PHP"); //integer

echo '<br>';
echo '<br>';
echo '<br>';




//--------------------------------------------------------------------------------------------------------


echo '======== Assignment 8 - Lessons from 6-12 ========';

echo '<pre>';
print_r([
    "FrontEnd"=>["HTML","CSS",
    "JS" => ["Vuejs" => [2=>"v2","v3"],"Reactjs","Svelte"]],
    "BackEnd" => ["PHP","MySQL","Security"],
    "Git","Github","Testing" => ["Unit Testing","End To End","Integration"]
]);
echo '</pre>';

?>