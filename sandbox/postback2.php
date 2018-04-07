   <?php
//postback2.php
// Form -> Form Handler -> Feedback
// Fill out registration, server processes stuff, get "accepted!" feedback.

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;
/*

' . XXX . '



*/

    
    if (isset($_POST['FirstName']))
{
  // *** Show feedback after submission. ***
  echo $_POST['FirstName'];
}
else
{
  // *** Show form. ***
  echo '
    <form action="' . THIS_PAGE . '" method="post">
      <p>First Name: <input type="text" name="FirstName"></p>
      <p><input type="submit"></p>
    </form>
  ';
}

?>
