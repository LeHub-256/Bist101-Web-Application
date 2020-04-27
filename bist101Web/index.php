<?php
	session_start();

	if ( isset($_SESSION['login']) && $_SESSION['login'] == '1') {
		header ("Location: account.php");
	}

	$err_msg = '';

	if( $_SERVER['REQUEST_METHOD'] == 'POST'){
		include("dbconnector.php");

		$uname = $_POST['studno'];
		$pword = $_POST['studpass'];

		$uname = htmlspecialchars($uname);
		$pword = htmlspecialchars($pword);

		$uname = mysqli_real_escape_string($db_handle, $uname);
		$pword = mysqli_real_escape_string($db_handle, $pword);
		
		if( strlen($uname) <= 0){
			$err_msg = 'Add a student number to proceed';
		}
		elseif( strlen($pword) <= 0){
			$err_msg = 'Insert a password';
		}
		else{
			$sql = "SELECT * FROM student WHERE studno='$uname' AND studno='$pword'";
			$result = mysqli_query($db_handle, $sql);
			$num_rows = mysqli_num_rows($result);


			if ($num_rows > 0){
				$db_field = mysqli_fetch_assoc($result);
				$err_msg = '';
				session_start();
				$_SESSION['login'] = "1";
				$_SESSION['studname'] = $db_field['studname'];
				$_SESSION['studprog'] = $db_field['studprog'];
				$_SESSION['sem'] = $db_field['sem'];
				header ("Location: account.php");
			}
			else{
				$err_msg = "*Invalid student number or password";
				$_SESSION['login'] = '';
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bist101 - Log in</title>
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
<body>

<div class="well container-fluid">
	<img src="../allimgs/bist101.png" height="50em">
	<span class="h2"><b>Bist101</b></span>
</div>
	<center><span class="label label-warning"><?php echo $err_msg; ?></span></center>
<div class="jumbotron" style="padding-left: 10%">
<form class="form-horizontal" method="post" action="index.php">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Student No</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="studno" placeholder="Student number">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-3">
            <input type="password" class="form-control" name="studpass" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox">Remember me
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
        </div>
    </div>
</form>

</div>

<div class="col-sm-5">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<!-- <script src="js/bootstrap.js"></script> -->
  <script src="js/bootstrap-3.3.7.js"></script>
</body>
</html>