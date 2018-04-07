<?php
//destination_list.php

require 'includes/config.php'; #provides configuration, pathing, error handling, db credentials 
require 'includes/Pager.php'; #provides configuration, pathing, error handling, db credentials 
 
# SQL statement
$sql = "select * from vacation_spots"; //1st

#Fills <title> tag  
$title = 'Destination List/View/Pager';

# END CONFIG AREA ---------------------------------------------------------- 

include 'includes/header.php'; #header must appear before any HTML is printed by PHP
?>
<h3 align="center"><?=THIS_PAGE;?></h3>

<p>Eleanor Boyd's List/View/Pager web application.</p>
<p>It adds the <b>Pager</b> class to add pagination to our pages.</p>

<?php
#reference images for pager
$prev = '<img src="images/arrow_prev.gif" border="0" />';
$next = '<img src="images/arrow_next.gif" border="0" />';

#Create a connection
# connection comes first in mysqli (improved) function
$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));


# Create instance of new 'pager' class
$myPager = new Pager(10,'',$prev,$next,'');
$sql = $myPager->loadSQL($sql,$iConn);  #load SQL, pass in existing connection, add offset
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0)
{#records exist - process
	if($myPager->showTotal()==1){$itemz = "customer";}else{$itemz = "customers";}  //deal with plural
    echo '<p align="center">We have ' . $myPager->showTotal() . ' ' . $itemz . '!</p>';
	while($row = mysqli_fetch_assoc($result))
	{# process each row
         echo '<p align="center">
            <a href="destination_view.php?id=' . (int)$row['DestinationID'] . '">' . $row['Destination'] . '</a>
            </p>';
	}
	//the showNAV() method defaults to a div, which blows up in our design
    echo $myPager->showNAV();//show pager if enough records 
    
    //the version below adds the optional bookends to remove the div design problem
    //echo $myPager->showNAV('<p align="center">','</p>');
}else{#no records
    echo "<p align=center>What! No Destinations?  There must be a mistake!!</p>";	
}
@mysqli_free_result($result);
@mysqli_close($iConn);

include 'includes/footer.php';
?>
