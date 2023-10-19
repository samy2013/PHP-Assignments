
<?php

echo '======== Assignment 1 - Lessons from 98-105 ========';
echo '<br>';
echo '<br>';

setcookie("site[color]","blue",strtotime("+2 months +5 days"),"/");
setcookie("site[font]","Swat",strtotime("+2 months +5 days"),"/");
setcookie("site[layout]","boxed",strtotime("+2 months +5 days"),"/");

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 2 - Lessons from 98-105 ========';
echo '<br>';
echo '<br>';

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';
echo "Your Color Is ". $_COOKIE['site']['color']." And Your Font Is ". $_COOKIE['site']['font'];


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 3 - Lessons from 98-105 ========';
echo '<br>';
echo '<br>';

setcookie("site[layout]","boxed",time()-1,"/");

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 4 - Lessons from 98-105 ========';
echo '<br>';
echo '<br>';

setcookie("site[color]","blue",0,"/");
setcookie("site[font]","Swat",0,"/");


