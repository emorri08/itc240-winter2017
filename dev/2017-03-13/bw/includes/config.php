<?php
/*
config.php - stores application configuration info

*/

//here are the keys for the server: eleanorboyd.com
$siteKey = "6LdFgAoUAAAAAFlH5ACIp95JLnzgeOU6kLzZDILN";
$secretKey = "6LdFgAoUAAAAADE5GQB4HJI9rT-_Pn6doIMLJPnH";


////here we avoid date errors:
date_default_timezone_set('America/LosAngeles');


//Allows the current page to know it's own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//here are our page links:
$nav1["template.php"] = "Template";
$nav1["contact.php"] = "Contact";


$banner = "B & W Template";//default banner data

switch(THIS_PAGE)
{
    case "template.php":
        $title = "Template Title Tag";
        $banner = "B & W (template)";
        $myPageID = "Template";
    break;
        
        
    case "contact.php":
        $title = "Contact Title Tag";
        $myPageID = "Contact Me";
    break;

 
    function makeLinks($nav){
    $myReturn = '';
    
    foreach($nav as $page => $text)
    {
       
        if(THIS_PAGE == $page)
        {
            $myReturn .= '
            <li class="active">
              <a href="' . $page . '">' . $text . '</a>
           </li>
           ';
        }else{
            $myReturn .= '
            <li>
              <a href="' . $page . '">' . $text . '</a>
           </li>
           ';
        }
    }
    
  return $myReturn;
}
        

}

?>
