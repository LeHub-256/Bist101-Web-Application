<?php
$storyid = 2;

function getStories($db_handle){
    $sql = "SELECT * FROM Stories ORDER BY storydate DESC LIMIT 0, 3";
    $result = mysqli_query($db_handle, $sql);
    $num_rows = mysqli_num_rows($result);
    $allnews = array();

    if ($num_rows > 0){
        while ( $db_field = mysqli_fetch_assoc($result) ){
            $allimg[] = $db_field["storyimg"];
            $alltitle[] = $db_field["storytitle"];
            $allbody[] = $db_field["storybody"];
            $allsource[] = $db_field["storysource"];

        }
        $allnews[] = $allimg;
        $allnews[] = $alltitle;
        $allnews[] = $allbody;
        $allnews[] = $allsource;

        return $allnews;
    }
    else{
        return "No stories found";
    }

    //mysqli_close($db_handle);
}
?>