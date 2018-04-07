<?php
//destination_view.php - shows details of a single destination
?>
<?php include 'includes/config.php';?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:destination_list.php');
}


$sql = "select * from vacation_spots where DestinationID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $Destination = stripslashes($row['Destination']);
        $Country = stripslashes($row['Country']);
        $Language = stripslashes($row['Language']);
        $Attractions = stripslashes($row['Attractions']);
        $title = "Title Page for " . $Destination;
        $pageID = $Destination;
        $Feedback = '';//no feedback necessary
    }    

}else{//inform there are no records
    $Feedback = '<p>This destination does not exist</p>';
}

?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
    
    
if($Feedback == '')
{//data exists, show it

    echo '<img src="uploads/destination' . $id . '.jpeg" />';
    
    echo '<p>';
    echo 'Destination: <b>' . $Destination . '</b> ';
    echo 'Country: <b>' . $Country . '</b> ';
    echo 'Language: <b>' . $Language . '</b> ';
    echo 'Attractions: <b>' . $Attractions . '</b> ';
    
    echo '</p>'; 
    
}else{//warn user no data
    
    echo $Feedback;
}    

echo '<p><a href="destination_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php include 'includes/footer.php';?>