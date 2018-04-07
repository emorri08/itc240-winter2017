<?php
//session-test1.php

session_start();


if(isset($_SESSION['FavoriteColor']))
{//show session data
    echo $_SESSION['FavoriteColor'];
}else{//tell user no data available
    echo 'Sorry, no favorite color selected';
}

//$_SESSION['FavoriteColor'] = 'blue';
