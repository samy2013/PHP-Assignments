
<?php

echo '======== Assignment 1 - Lessons from 92-97 ========';
echo '<br>';
echo '<br>';

date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get().'<br>';
echo date("D, d M y - h:i:s A").'<br>';
echo date("l, d F Y - h:i:s A").'<br>';

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 2 - Lessons from 92-97 ========';
echo '<br>';
echo '<br>';

$date = "2005-10-02";
date_default_timezone_set("Africa/Cairo");
$d = date_create($date);
echo date_default_timezone_get().'<br>';
date_add($d, date_interval_create_from_date_string("15 Hours 15 Minutes 15 Seconds"));
// date_modify($d,"+15 hours +15 minutes +15seconds"); // another solution
echo date_format($d,"Y F, l 'dS' H:i:s");


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 3 - Lessons from 92-97 ========';
echo '<br>';
echo '<br>';

$date = "1990-10-01";

date_default_timezone_set("Africa/Cairo");
$days = round(strtotime($date)/60/60/24);
$years = floor(strtotime($date)/60/60/24/365);
echo "From Epoch Time Till " .$date ." Is Approximately ". $days. " Days";
echo '<br>';
echo "From Epoch Time Till " .$date ." Is Approximately ". $years. " Years";
    
echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 4 - Lessons from 92-97 ========';
echo '<br>';
echo '<br>';

date_default_timezone_set("Africa/Cairo");
$date = "1990-10-01";
$d2=date_create($date);

$old =date_create("1970-01-01");

$diff = date_diff($d2,$old);
echo "From Epoch Time Till " .$date ." Is Approximately ". $diff -> days. " Days";
echo '<br>';
echo "From Epoch Time Till " .$date ." Is Approximately ". $diff -> y. " Years";


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 5 - Lessons from 92-97 ========';
echo '<br>';
echo '<br>';


echo time() . "<br>";
echo getdate()[0] . "<br>";
echo strtotime("now") . "<br>";
echo date(time());