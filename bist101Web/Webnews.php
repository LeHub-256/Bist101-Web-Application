
<html>
<head>
    <meta name="viewport" content="width=device-width">
    
</head>
	
<script> </script>


<style>
	body { }
    .hello  
    {
        font-size: 42; 
        width: 100%;
        margin-top: 2em;
        text-align: center;
        color: blue;
    }
    
    #mynews{
        color: red;
        width: 96%;
        margin-left: 2%;
        margin-bottom: 20px;
        padding: 5px;
        border: 1px solid #333333;
        box-shadow: 5px 5px 15px #333333;
    }
    
   #mynews img{
   	    //height: 200px;
    	opacity:0.9;
        color: #555;
   }
    
    .newstitle{
    	color: #3B3B3B;
    	font-size: 24;
        font-family: arial;
    	//height: 40%;
    }
    .toptitle{
    	width: 100%;
    	opacity: 0.9;
    	font-weight: bold;
    }
    
    .newsbody{
    	color: #363333;
    	font-size: 14px;
    	font-weight: normal;
        font-family: calibri;
    	opacity: 0.5;
    }
</style>

<body>


    

	<section id="allnews"> 
    <?php
        include "dbconnector.php";
        include "stories.php";


        function loadStory($db_handle){
            $feed = getStories($db_handle);

            $i=0;
            while ($i < 8 ){
                echo "<div id='mynews' onclick='loadStory()'>";
                    echo "<img src='Amazing Wallpapers/" . $feed[0][$i] . "' width='100%'>";
                    echo "<div class='newstitle'>";
                        echo $feed[1][$i];
                    echo "</div>";
                    echo "<div class='newsbody'>";
                        echo $feed[2][$i];
                        echo "<br><p style=' text-align:right;'>~ " . $feed[3][$i] . "</p>";
                    echo "</div>";
                echo "</div>";

                $i++;
            }
        }
        
        loadStory($db_handle);
    ?>
    </section>




</body>
</html>