<?php
//postback1.php

if(isset($_POST['FirstName']))
{//show feedback
    echo $_POST['FirstName'];
    }else{//show form
  echo'
  <form method="post" action="postback1.php">
  First Name: <input type="text" name="FirstName" /><br />
  <input type="submit" />
  </form>
  ';  
    }