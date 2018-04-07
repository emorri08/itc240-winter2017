<?php
//a4-1.php
if (isset($_POST['num1']))
{
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $myTotal = $num1 + $Num2;
      echo "<h2 align=center>You added <font color=blue>" . $num1 . "</font> and ";
      echo "<font color=blue>" . $num2 . "</font> and the answer is <font color=red>" . $myTotal ."</font>!";
      echo "<br><a href=" . $_SERVER['php_self'] . ">Reset page</a>";
}else{
?>
       <html>
       <body>
       <h1 align="center">Adder.php</h1>
       <form action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
       Enter the first number:<input type="text" name="num1"><br>
       Enter the second number:<input type="text" name="num2"><br>
       <input type="submit" value="Add Em!!">
       </form>
       </body>
       </html>
<?
     }

/*
1) missing . on line 9
2) missing ; on line 10
3) curly brace wrong way on line 24
4) missing quote on value attribute line 19
5) errant backslash on line 16
6) needed method="post" on line 16
7) num1 was uppercase on line 17
8) removed -  from line 7
9) added space in front of . before $num1 and behind . after $num1 

*/
                                   
                                   
?>
