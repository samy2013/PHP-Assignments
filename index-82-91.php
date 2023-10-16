
<?php

echo '======== Assignment 1 - Lessons from 82-91 ========';
echo '<br>';
echo '<br>';


echo number_format(disk_total_space("c:")/1024/1024/1024/1024,2) . " Terabyte";
echo '<br>';
echo number_format(disk_total_space("d:")/1024/1024/1024/1024,2) . " Terabyte";
// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 2 - Lessons from 82-91 ========';
echo '<br>';
echo '<br>';

echo "Size In Megabyte Is ". round(filesize("RiseUp.mp4")/1024/1024).'<br>';
echo "Size In Kilobyte Is ". round(filesize("RiseUp.mp4")/1024).'<br>';
// echo "Size In Kilobyte Is ". round(filesize("D:\Songs/RamyGamalEwediny.mp4")/1024/1024);

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 3 - Lessons from 82-91 ========';
echo '<br>';
echo '<br>';

mkdir("Programming/PHP",0711,true);

if (file_exists("Programming")){
    rmdir("Programming/PHP");
    rmdir("Programming");
    echo "Directory Programming/PHP Removed <br>";
    echo "Directory Programming Removed";
}

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------
echo '======== Assignment 4 - Lessons from 82-91 ========';
echo '<br>';
echo '<br>';


function change_permissions($handle){
    if (is_file($handle)){
        // if (pathinfo($handle)["extension"] == "txt"){            // alernative line
        // if (pathinfo($handle,PATHINFO_EXTENSION) == "txt"){      // alernative line
        if (pathinfo($handle,4) == "txt"){
            chmod($handle,0700);
            clearstatcache();
            echo fileperms($handle).'<br>';
            echo "Permissions Changed";
        }else{
            echo "File Extension Is Not Txt <br>";
        }
    }else{
        echo "This Is Directory And Only Files Allowed <br>";
    }
}

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 5 - Lessons from 82-91 ========';
echo '<br>';
echo '<br>';


echo basename(__file__).'<br>';
echo pathinfo(__file__, PATHINFO_BASENAME).'<br>';
echo substr(realpath(__file__),-15).'<br>';
echo (explode("\\",((glob(__file__))[0]))[4]);


echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 6 - Lessons from 82-91 ========';
echo '<br>';
echo '<br>';

$myFile = fopen("elzero.txt","r");
echo fgets($myFile);
echo fgets($myFile);
rewind($myFile);
echo '<br>';

echo fread($myFile,25);
echo '<br>';

for($i=0 ; $i < count(file("elzero.txt"))-1;$i++){
    echo file("elzero.txt")[$i];
}
echo '<br>';
fclose($myFile);
echo file_get_contents("elzero.txt",true,NULL,0,25);

echo '<br>';
echo '<br>';

//--------------------------------------------------------------------------------------------------------

echo '======== Assignment 7 - Lessons from 82-91 ========';
echo '<br>';
echo '<br>';

$myFile2 = fopen("elzero2.txt","r+");
$str = fgets($myFile2);
echo $str .'<br>'; // no need , just to show the line to comare compare
rewind($myFile2);
fwrite($myFile2,str_replace("Osamaa","Elzero",$str));
fclose($myFile2);

// no need , just for check after update the line
$myFile3 = fopen("elzero2.txt","r");
echo fgets($myFile3);
fclose($myFile3);

//other solution if it is small file 
// file_put_contents("elzero2.txt","Hello Elzero Web\r\nSchool");