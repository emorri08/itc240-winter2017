<?php


if(isset($_POST['submit']))
{//show file info
    echo'<pre>';
    var_dump($_FILES);
    echo'</pre>';
}else{//show form
    echo'
    <form action="upload-test.php" method="post" enctype="multipart/form-data">
    Please select an image to test upload:
    <input type="file" name="image" /><br />
    <input type="submit" name="submit" value="Upload File" />
    </form>
    ';
}