<?php
    include "dbconnector.php";
    //echo "works";

    $storyimg = $_GET['storyimg'];
    $storytitle = $_GET['storytitle'];
    $storybody = $_GET['storybody'];
    $storysource = $_GET['storysource'];

    $sql = "INSERT INTO stories(storyimg, storytitle, storybody, storysource) VALUES('$storyimg', '$storytitle', '$storybody', '$storysource')";
    $result = mysqli_query($db_handle, $sql);

    if($result){ echo "hi";}
    else{ echo "no<br>"; }

    echo $storyimg . "<br>" . $storytitle . "<br>" . $storybody;


?>