<?PHP

$user_name = "root";
$password = "";
$database = "bist_students";
$server = "127.0.0.1";
$db_handle = mysqli_connect($server, $user_name, $password, $database);
//$db_found = mysqli_select_db($db_handle, $database);

//if( $db_found){ echo "yes";} else{ echo "not found";}
?>