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
    <title>bist101 - notes</title>
    <!-- Bootstrap -->
	<!-- <link href="file:///C|/xampp/htdocs/bist101Web/css/bootstrap.css" rel="stylesheet"> -->
	<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body style="padding-top: 60px;">
  <?php 
	include "nav.html"; 
	include "dbconnector.php";
	  
	 $sem = $_SESSION['sem'];
	  
	  
	  if($_SERVER['REQUEST_METHOD'] == 'POST'){
		  $sql = "SELECT * FROM notes WHERE courseunit='$'";
	  }
	  else{
		  $sql = "SELECT * FROM notes WHERE courseunit=0 AND sem=$sem";
	  }
	  
	  sortnotes($db_handle, $sql);
	function sortnotes($db_handle, $sql){
		

		$result = mysqli_query($db_handle, $sql);
		$num_rows = mysqli_num_rows($result);
		$allnews = array();

		if ($num_rows > 0){
			while ( $db_field = mysqli_fetch_assoc($result) ){

	?>
  
  <div class="row container-fluid">
    <div class="col-sm-8 col-md-3">
        <div class="thumbnail">
            <span class="label label-danger"><?php echo $db_field['courseunit'] ?></span>
            <div class="caption">
                <h3><?php echo $db_field['notetitle'] ?></h3>
                <p><?php echo $db_field['notedesc'] ?></p>
                <p><a href="http://localhost/allnotes/sockets.pdf" class="btn btn-primary" role="button">Download</a>  <a href="#" class="btn btn-default" role="button">Questions</a>
                </p>
            </div>
        </div>
    </div>
    
  <?php  }}}?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<!-- <script src="file:///C|/xampp/htdocs/bist101Web/js/bootstrap.js"></script> -->
  <script src="js/bootstrap-3.3.7.js"></script>
</body>
</html>