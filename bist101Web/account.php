<?PHP

	session_start();

	if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
		header ("Location: http://localhost/");
	}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>bist101 - web</title>
<style>
    section{
      border: 1px solid black;
      width: 30%;
      padding: 10px;
    }
  </style>
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body style="padding-top: 50px;">

<!-- My badboy navigation bar -->
<?php include "nav.html"; ?>


<!-- The gaddamn images swiping allover -->
<div id="carousel1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active"><img src="../allimgs/cor1.png" alt="First slide image" class="center-block">
      <div class="carousel-caption">
        <h3>Bist101 Mobile App</h3>
		  <p><a class="btn btn-default">Get it now</a></p>
      </div>
    </div>
    <div class="item"><img src="../allimgs/cor2.png" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
        <h3>XLick Shots</h3>
        <p>Keepin it xlick</p>
      </div>
    </div>
    <div class="item"><img src="../allimgs/cor3.png" alt="Third slide image" class="center-block">
      <div class="carousel-caption">
        <h3>ZacMill Events</h3>
        <p>Ceremonies of the future</p>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
 </div>
 

  <div class="container">
    
    <hr>
    <div class="row">
      <div class="col-xs-7">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object img-rounded" src="images/115X115.gif" alt="..."> </a> </div>
          <div class="media-body">
            <h2 class="media-heading">The Sandbox</h2>
            The upcoming online bist online forum that provides a platform to ask the most challenging questions. Then the question will be replied to with all kinds of answers, giving a verbose and wider research resource over time<br>
            <a class="btn btn-danger">visit the sandbox</a>
           </div>
        </div>
      </div>
      <div class="col-xs-5 well">
        <div class="row">
          <div class="col-lg-6">
            <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> : 0778-955-346</h4>
          </div>
          <div class="col-lg-6">
            <h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> : bist101@live.com</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> : Cocis Block A</h4>
          </div>
          <div class="col-lg-6">
            <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> : 123-456-7890</h4>
          </div>
        </div>
      </div>
    </div>
    <hr>
 
    
    <div class="row">
      <div class="col-lg-12 page-header text-center">
        <h2>UPCOMING EVENTS</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-lg-6">
       <h3>Freshers Ball</h3>
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
      </div>
      <div class="col-6 col-lg-6">
       <h3>Cocis Beach Bash</h3>
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
      </div>
      <div class="col-6 col-lg-6">
       <h3>Innovation week</h3>
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
      </div>
      <div class="col-6 col-lg-6">
       <h3>Hult prize</h3>
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
      </div>
    </div>
    
    <div class="container">
    <div class="row">
      <div class="col-lg-12 page-header text-center">
        <h2>WHATS ON COLLEGE</h2>
      </div>
    </div>
    <?php
        include "dbconnector.php";
        include "stories.php";
		$i = 0; $j = 0;
		$feed = getStories($db_handle);
		while($j < 1){
	?>
    <div class="row">
     <?php
		for($k = 0; $k < 3; $k++){ ?>
      <div class="col-xs-6 col-lg-4">
       	<img src="../allimgs/pic2.JPG" width="100%" style="border: 1px solid green; border-radius: 3px">
        <h3><?php echo $feed[1][$i]; ?></h3>
        <p> <i class="icon-desktop "></i><?php echo $feed[2][$i]; ?> </p>
        <p><a class="btn btn-default" href="#">View details »</a></p>
      </div>
      <?php $i++; } ?>
    </div><?php $j++; } ?>
  </div>
    
    <div class="row">
     <hr>
      <div class="col-sm-8 col-lg-7">
        <h2>Important contacts</h2>
        <hr>
        <div class="row">
        	<h4><span class="label label-default">Computer Security</span></h4>
        	<span class="col-xs-6"><h4>Mark Magumba</h4></span>   	
        	  <h5 class="text-right"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 0704 896 445 <span class="glyphicon glyphicon-phone-alt"></span> markmags@gmail.com</h5> 
        	  <p></p> 	
        </div>
        
        <div class="row">
        	<h4><span class="label label-default">Database II</span></h4>
        	<span class="col-xs-6"><h4>Amiyo Mercy</h4></span>   	
        	  <h5 class="text-right"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 0782 455 677 <span class="glyphicon glyphicon-phone-alt"></span> amiyomercy@yahoo.com</h5> 
        	  <p></p> 	
        </div>
        
</div>
      <div class="col-sm-4 col-lg-5">
        <h2>Course unit progress</h2>
        <hr>
        <!-- Green Progress Bar -->
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"> WEB SYSTEMS</div>
        </div>
        <!-- Blue Progress Bar -->
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> DATABASE II</div>
        </div>
        <!-- Yellow Progress Bar -->
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> COMPUTER SECURITY</div>
        </div>
        <!-- Red Progress Bar -->
        <div class="progress">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> ENTERPRENUERSHIP</div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> MEDIA SYSTEMS</div>
        </div>
</div>
    </div>
    <hr>
    <h2>Need Help!</h2>
<hr>
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-xs-5">
            <h4>Tony Tushabe</h4>
          </div>
<div class="col-xs-5">
            <h4 class="text-right"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Mon - Tue - Wed</h4>
          </div>
        </div>
        <h4><span class="label label-default">C Programming</span></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, recusandae, corporis, tempore nam fugit deleniti sequi excepturi quod repellat laboriosam soluta laudantium amet dicta non ratione distinctio nihil dignissimos esse!</p>
        <ul>
        	<li>Lorem ipsum dolor sit amet.</li>
        	<li>Lorem ipsum dolor sit amet, consectetur.</li>
        	<li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-xs-5">
            <h4>Mukiibi Isaac</h4>
          </div>
          <div class="col-xs-6">
            <h4 class="text-right"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Every Saturday</h4>
          </div>
        </div>
        <h4><span class="label label-default">Emerging Trends</span></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, recusandae, corporis, tempore nam fugit deleniti sequi excepturi quod repellat laboriosam soluta laudantium amet dicta non ratione distinctio nihil dignissimos esse!</p>
        <ul>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet, consectetur.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
        </ul>
      </div>
    </div>
    <hr>
    <h2>Portfolio</h2>
    <hr>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="images/300X200.gif" alt=""><hr class="hidden-lg"></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="images/300X200.gif" alt=""><hr class="hidden-lg"></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="images/300X200.gif" alt=""></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6 hidden-lg"><img src="images/300X200.gif" alt=""></div>
    	</div>
        <hr>
        <div class="row">
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="images/300X200.gif" alt=""><hr class="hidden-lg"></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="images/300X200.gif" alt=""><hr class="hidden-lg"></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6"><img src="images/300X200.gif" alt=""></div>
    		<div class="col-lg-4 col-sm-6 col-xs-6 hidden-lg"><img src="images/300X200.gif" alt=""></div>
    	</div>
    </div>
  </div>
  </div>
</div>
<hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyWebsite. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>


<!--
<section>
  <h1>News</h1>
  <form method="GET" action="uploadnews.php">
  <input type="file" name="storyimg">
  <br>
  <br>
  <input type="radio" name="storysource" value="Scorpion media">
  Scorpion media
  <input type="radio" name="storysource" value="Cocis news">
  Cocis news<br>
  <br>
  <input type="text" name="storytitle" placeholder="story title">
  <br>
  <br>
  <textarea name="storybody" placeholder="Story details"></textarea>
  <br>
  <br>
  <input type="submit" value="Submit">
  </form>
</section>

<section>
    <h1>Course work</h1>

    <form method="GET" action="uploadcoursework.php">
      <input type="text" name="courseunit" placeholder="course unit"><br><br>
      <input type="date" name="expiry" placeholder="end date"><br><br>
      
      <input type="text" name="handintype" placeholder="hand in type"><br><br>
      <input type="text" name="question" placeholder="Question"><br><br>
      <input type="text" name="worktype" placeholder="work type"><br><br>
      <input type="submit" value="Submit">
    </form>

  </section>
-->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- <script src="js/bootstrap.js"></script> -->
<script src="js/bootstrap-3.3.7.js"></script>
<script>
	
</script>
</body>
</html>
