<?php
//postback4.php
// Form -> Form Handler -> Feedback
// Fill out registration, server processes stuff, get "accepted!" feedback.

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

if (isset($_POST['Name']))
{
  /*
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';
  die;
  */
    
    $message = process_post();
    $email = $_POST['Email'];
    //echo $myText;
    
    
    
    
    $to      = 'eleanor.boyd@3tabbies.com';
    $subject = 'Test Email';
    //$message = 'hello';
    $headers = 'From: noreply@eleanorboyd.com' . PHP_EOL .
        'Reply-To: ' . $email . PHP_EOL .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    
    echo '<p>Thank you for your information!</p>';
    
    
    
    
    
 
}
else
{
  // *** Show form. ***
  echo '
    <form action="' . THIS_PAGE . '" method="post">
      <p>Name: <input type="text" autofocus name="Name" required="required"></p>
      <p>Email: <input type="email" name="Email" required="required"></p>
      <p>Comments:<textarea name="Comments"></textarea></p>
      <p><input type="submit" value="Contact Us"></p>
    </form>
  ';
}

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}
