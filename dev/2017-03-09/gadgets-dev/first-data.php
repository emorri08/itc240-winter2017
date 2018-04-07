<?php
//first-data.php

include 'includes/credentials.php';

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$sql = 'select * from test_Customers';

$result = mysqli_query($link, $sql);

/*

' . XXX . '

*/

while($row = mysqli_fetch_assoc($result))
{
    echo '<p>FirstName:' . $row['FirstName'] . '</p>';
    echo '<p>LastName:' . $row['LastName'] . '</p>';
    echo '<p>Email:' . $row['Email'] . '</p>';
    
}

@mysqli_free_result($result);
@mysqli_close($link);