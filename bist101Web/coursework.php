<?PHP

	session_start();

	if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
		header ("Location: http://localhost/");
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bist101 - coursework</title>
    <!-- Bootstrap -->
	<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
	<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body style="padding-top: 100px">
  <?php 
	include "nav.html";
	include "dbconnector.php";
	$sem = $_SESSION['sem'];
	$studprog = $_SESSION['studprog'];
	$sql = "SELECT * FROM coursework WHERE sem=$sem AND prog='$studprog' ORDER BY expiry";
	  
    $result = mysqli_query($db_handle, $sql);
    $num_rows = mysqli_num_rows($result);
    $allnews = array();

    if ($num_rows > 0){            

	?>
  
  <div class="table-responsive" style="padding: 10px;">
   	<caption>Available course work:</caption>
    <table class="table table-bordered">
<thead>
            <tr>
                <th>#</th>
                <th>course unit</th>
                <th>Question</th>
                <th>Exipry date</th>
                <th>Hand in type</th>
                <th>Work type</th>
                <th>Status</th>
                
            </tr>
      </thead>
        <tbody>
             <?php
				while ( $db_field = mysqli_fetch_assoc($result) ){
				
             echo "<tr>";
                echo "<th scope='row'>1</th>";
                echo "<td>" . $db_field['courseunit'] . "</td>";
				echo "<td>" . $db_field['question'] . "</td>";
                echo "<td>" . $db_field['expiry'] . "</td>";
                echo "<td>" . $db_field['handInType'] . "</td>";
                echo "<td>" . $db_field['workType'] . "</td>";
                echo "<td><a href='#'><span class='badge''>expired</span></a></td>";
                
            echo "</tr>"; }}?>
        </tbody>
    </table>
</div>


<div class="jumbotron" style="padding-left: 10px">
    <h1>Groups</h1>
    <p>All the groups you are affiliated with will be displayed below;</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">View all</a>
    </p>
</div>
 

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
    <!-- <script src="js/bootstrap.js"></script> -->
    <script src="js/bootstrap-3.3.7.js"></script>
    <script>
		
	</script>
<tbody>
  </body>
</html>