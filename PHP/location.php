<?php
//$connection = mysql_connect('durham.accountsupportmysql.com', 'dag', 'dag1!');
	$connection = mysql_connect("localhost","root","root"); 
	if(!$connection){
		die("Database conenction failed: " . mysql_error());
	}
	$db_select = mysql_select_db("locations");
	if(!$db_select){
		die("Database selection failed: " . mysql_error());
	}
	//echo "Session Header: ".$_SESSION['loggedIn'];
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$long = $_POST['long'];
$lat = $_POST['lat'];
$user = $_POST['u'];

mysql_query("INSERT INTO`user_locations` (`user`, `long`, `lat`, `time`) VALUES ('$user', '$long', '$lat', CURRENT_TIMESTAMP)");
//echo mysql_error();


//$_SESSION['id'] = mysql_insert_id();
//$last_id = $_SESSION['id'];
//$result = mysql_query("SELECT * FROM user_locations WHERE id = 2");
//	
//if($result === FALSE) {
//    die(mysql_error()); // TODO: better error handling
//}
//
//while($row = mysql_fetch_array($result))
//{
//    echo $row['user'];
//}

?>

</body>
</html>