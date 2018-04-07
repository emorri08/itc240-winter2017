<?php
//arrays1.php


$myArray = array('cherry','orange','pineapple');

/*
echo '<pre>';
var_dump($myArray)
echo '</pre>'
*/

for($x=0;$x<count($myArray);$x++)
{
    echo '<p>' . $myArray[$x] . '</p>'
}


?>