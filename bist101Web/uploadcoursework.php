<?php
    include "dbconnector.php";
    //echo "works";

    $courseunit = $_GET['courseunit'];
    $expiry = $_GET['expiry'];
    $handintype = $_GET['handintype'];
    $question = $_GET['question'];
    $worktype = $_GET['worktype'];

    $sql = "INSERT INTO coursework(courseunit, expiry, handInType, question, workType) VALUES('$courseunit', $expiry, '$handintype', '$question', '$worktype')";
    $result = mysqli_query($db_handle, $sql);

    if($result){ echo "yes<br>";}
    else{ echo "no<br>"; }

    echo $courseunit . "<br>" . $expiry . "<br>" . $handintype;
    //$sql = "INSERT INTO stories(courseunit, expiry, handInType, question, workType) VALUES('$courseunit', $expiry, '$handintype', '$question', '$worktype')";


?>