<?php
//test5.php


$myName = "Elly";
$myFavoriteColor = "Purple";
$myAge = 39;


?>
<html>
    <body>
        <h1><?=$myName?>'s Home Page.</h1>
            <p><?=$myName?>'s Favorite Color is <?=$myFavoriteColor?>.</p>
            <p><?=$myName?> is  <?=$myAge?>.  </p>
        
        <footer>&copy; 2016-<?=date('Y')?></footer>
    </body>
</html>