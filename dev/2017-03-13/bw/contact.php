
<?php include "header.php" ?>



<form>
<?php
    //contact.php
    //form -> Form Handler -> Feedback
    //Fill out registration, server processes stuff, get "accepted?" feedback.
    
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
    
    
    
    $to      = 'eleanor.boyd@seattlecolleges.edu';
    $subject = 'Test Email';
    $message = 'hello';
    $headers = 'From: noreply@eleanorboyd.com' . PHP_EOL .
        'Reply-To:' . $email . PHP_EOL . 
        'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);
    
    echo '<p>Thank you for your information!</p>';
    
    
    
}
else
{
    //*** Show form. ***
    echo '
    <form action="' . THIS_PAGE . '" method="post">
    <p>Name:<input type="text" autofocus name="Name" required="required"></p>
    <p>Email:<input type="email" name="Email" required="required"></p>
    <p>City:<input type="city" name="City" required="required"></p>
    <p>Zip:<input type="zip" name="Zip" required="required"></p>
    <p>Comments:<textarea name="Comments"></textarea></p>
    <p><input type="submit" value="SUBMIT"></p>
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
    
    
    //START CODE FOR CONTACT TABLE!---------------

                //connect to the database in order to add contact data 
            $iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

                //process each post var, adding slashes, using mysqli_real_escape(), etc.
            $Name = dbIn($_POST['Name'],$iConn);
            $Email = dbIn($_POST['Email'],$iConn);
            $Comments = dbIn($_POST['Comments'],$iConn);

                //place question marks in place of each item to be inserted 
            $sql = "INSERT INTO test_Contacts (Name,Email,Comments,DateAdded) VALUES(?,?,?,NOW())";
            $stmt = @mysqli_prepare($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
    
                /*
                * second parameter of the mysqli_stmt_bind_param below 
                * identifies each data type inserted: 
                *
                * i == integer
                * d == double (floating point)
                * s == string
                * b == blob (file/image)
                *
                *example: an integer, 2 strings, then a double would be: "issd"
                */

            mysqli_stmt_bind_param($stmt, 'sss',$Name,$Email,$Comments);

                //execute sql command
            mysqli_stmt_execute($stmt) or die();
    
                //close statement
            @mysqli_stmt_close($stmt);
    
                //close connection
            @mysqli_close($iConn);

//END CODE FOR CONTACT TABLE!-----------------
    
    
    
}
    return $myReturn;
}
?>

<div class="g-recaptcha" data-sitekey="6LdFgAoUAAAAAFlH5ACIp95JLnzgeOU6kLzZDILN"></div>
</form> 

<p>Siberian leopard for grimalkin devonshire rex, sphynx yet persian so ocelot. American shorthair jaguar, yet norwegian forest. Turkish angora tabby and burmese siberian or lion but balinese . Scottish fold tabby, scottish fold. Manx munchkin. Ragdoll cheetah kitten for american bobtail yet singapura. Grimalkin tabby for bombay for grimalkin so british shorthair balinese yet siamese. </p>
<p>Clever text compliments of <a href="http://catipsum.com/">Cat Ipsum - A Furrier Lorem Ipsum</a></p>

 <?php include "footer.php" ?>     
