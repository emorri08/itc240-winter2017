   <?php
//postback2.php
// Form -> Form Handler -> Feedback
// Fill out registration, server processes stuff, get "accepted!" feedback.

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

    
    if (isset($_POST['FirstName']))
{
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    
  // *** Show feedback after submission. ***
}
else
{
  // *** Show form. ***
  echo '
    <form action="' . THIS_PAGE . '" method="post">
      <p>Name: <input type="text"  autofocus name="Name" required="required"></p>
      <p>Email: <input type="email" name="Email" required="required"></p>
      <p>Comments:<textarea name="Comments"></textarea></p>
      <p><input type="submit" value="Contact Us"></p>
    </form>
  ';
}

?>
