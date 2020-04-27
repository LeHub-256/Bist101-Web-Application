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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>bist101 - past papers</title>
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
</head>

<body style="padding-top: 50px;">
<?php include "nav.html"; 
	include "dbconnector.php";
	  
	$sem = $_SESSION['sem'];
	 
	$sql = "SELECT courseunit FROM pastpaper WHERE sem=$sem";
	$result = mysqli_query($db_handle, $sql);
	$num_rows = mysqli_num_rows($result);
	$allnews = array();

	if ($num_rows > 0){
														 
?>

<!-- Main Container -->
<div class="container"> 
<?php
	while ( $db_field = mysqli_fetch_assoc($result) ){
		$courseunit = $db_field['courseunit'];
?>
	
  <!-- Header -->
  <header class="header">
    <h4 class="logo"><?php echo $courseunit ?></h4>
  </header>
  <!-- Hero Section -->

  <!-- Stats Gallery Section -->
  <div class="gallery">
   <?php 
	$sql = "SELECT * FROM pastpaper WHERE courseunit='$courseunit'";
	$result = mysqli_query($db_handle, $sql);
	$num_rows = mysqli_num_rows($result);
	$allnews = array();

	if ($num_rows > 0){ 
		while ( $db_field = mysqli_fetch_assoc($result) ){
	?>
    <div class="thumbnail"> <a href="#"><img src="images/bkg_06.jpg" alt="" width="2000" class="cards"/></a>
      <h4><?php echo $db_field['year']; ?></h4>
      <p class="tag"><?php echo $db_field['type']; ?></p>
    </div>
     <?php }} ?>
  </div>
  <?php }} ?>
</div> 

<!-- Main Container Ends -->

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap-3.3.7.js"></script>
</body>
</html>
